<?php

// Copyright (C) 2024 Ivan Stasiuk <ivan@stasi.uk>.
// Use of this source code is governed by a BSD-style
// license that can be found in the LICENSE file.

namespace BrokeYourBike\ZenithBankCIB;

use Symfony\Component\EventDispatcher\EventDispatcher;
use Soap\Psr18Transport\Psr18Transport;
use Soap\ExtSoapEngine\ExtSoapOptions as ExtSoapEngineExtSoapOptions;
use Phpro\SoapClient\Soap\DefaultEngineFactory;
use Phpro\SoapClient\Caller\EventDispatchingCaller;
use Phpro\SoapClient\Caller\EngineCaller;
use Http\Adapter\Guzzle7\Client as GuzzleAdapter;
use GuzzleHttp\ClientInterface;
use BrokeYourBike\ZenithBankCIB\Interfaces\TransactionInterface;
use BrokeYourBike\ZenithBankCIB\Interfaces\ConfigInterface;
use BrokeYourBike\ZenithBankCIB\Gen\Type\User;
use BrokeYourBike\ZenithBankCIB\Gen\Type\UploadData;
use BrokeYourBike\ZenithBankCIB\Gen\Type\Transaction;
use BrokeYourBike\ZenithBankCIB\Gen\Type\TransQuery;
use BrokeYourBike\ZenithBankCIB\Gen\Type\SendRequest;
use BrokeYourBike\ZenithBankCIB\Gen\Type\Response;
use BrokeYourBike\ZenithBankCIB\Gen\Type\QueryReq;
use BrokeYourBike\ZenithBankCIB\Gen\Type\FetchRequest;
use BrokeYourBike\ZenithBankCIB\Gen\Type\ArrayOfTransaction;
use BrokeYourBike\ZenithBankCIB\Gen\Type\ArrayOfTransQuery;
use BrokeYourBike\ZenithBankCIB\Gen\SoapClient;
use BrokeYourBike\ZenithBankCIB\Gen\SoapClassmap;

/**
 * @author Ivan Stasiuk <ivan@stasi.uk>
 */
class Client
{
    private ConfigInterface $config;
    private SoapClient $soap;

    public function __construct(ConfigInterface $config, ClientInterface $httpClient)
    {
        $this->config = $config;

        $engine = DefaultEngineFactory::create(
            ExtSoapEngineExtSoapOptions::defaults($this->config->getWsdl(), [])->withClassMap(SoapClassmap::getCollection()),
            Psr18Transport::createForClient(new GuzzleAdapter($httpClient)),
        );

        $eventDispatcher = new EventDispatcher();
        $caller = new EventDispatchingCaller(new EngineCaller($engine), $eventDispatcher);

        $this->soap = new SoapClient($caller);
    }

    public function getConfig(): ConfigInterface
    {
        return $this->config;
    }

    public function fetch(string $reference): ?Response
    {
        $user = (new User())
            ->withCompanyCode($this->config->getCompanyCode())
            ->withUserID($this->config->getUsername())
            ->withPassword($this->config->getPassword());

        $refs = (new ArrayOfTransQuery())
            ->withTransQuery((new TransQuery())->withTransactionRef($reference));

        return $this->soap->fetchRequest(new FetchRequest(
            (new QueryReq())
                ->withClientInfo($user)
                ->withTransactionReference($refs)
        ))->getFetchRequestResult();
    }

    public function send(TransactionInterface $transaction): ?Response
    {
        $user = (new User())
            ->withCompanyCode($this->config->getCompanyCode())
            ->withUserID($this->config->getUsername())
            ->withPassword($this->config->getPassword());

        $mac = hash('sha512', "{$transaction->getReference()}{$transaction->getRecipientBankAccount()}{$transaction->getAmount()}", false);

        $paymentType = match($transaction->getRecipientBankCode()) {
            '057' => 'ZENITH/BENEFICIARY',
            default => 'NIP INSTANT'
        };

        return $this->soap->sendRequest(new SendRequest(
            (new UploadData())
                ->withTransactionRequest(
                    (new ArrayOfTransaction())->withTransaction((new Transaction())
                        ->withAmount((string)$transaction->getAmount())
                        ->withPaymentCurrency($transaction->getCurrency())
                        ->withPaymentMethod($paymentType)
                        ->withPaymentType($paymentType)
                        ->withBeneficiaryAccount($transaction->getRecipientBankAccount())
                        ->withBeneficiaryBankCode($transaction->getRecipientBankCode())
                        ->withBeneficiaryName($transaction->getRecipientName())
                        ->withDebitAccount($this->config->getDebitAccount())
                        ->withDebitCurrency($transaction->getCurrency())
                        ->withTransactionRef($transaction->getReference())
                        ->withPaymentDueDate($transaction->getDueDate()->format('d/m/Y')))
                )
                ->withClientInfo($user)
                ->withMAC($mac)
                ->withUseSingleDebitMultipleCredit(false)
        ))->getSendRequestResult();
    }
}
