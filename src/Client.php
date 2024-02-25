<?php

// Copyright (C) 2024 Ivan Stasiuk <ivan@stasi.uk>.
// Use of this source code is governed by a BSD-style
// license that can be found in the LICENSE file.

namespace BrokeYourBike\ZenithBankCIB;

use Symfony\Component\EventDispatcher\EventDispatcher;
use Psr\Http\Client\ClientInterface;
use Phpro\SoapClient\Soap\Handler\HttPlugHandle;
use Phpro\SoapClient\Soap\Driver\ExtSoap\ExtSoapOptions;
use Phpro\SoapClient\Soap\Driver\ExtSoap\ExtSoapEngineFactory;
use BrokeYourBike\ZenithBankCIB\Interfaces\ConfigInterface;
use BrokeYourBike\ZenithBankCIB\Gen\Type\User;
use BrokeYourBike\ZenithBankCIB\Gen\Type\TransQuery;
use BrokeYourBike\ZenithBankCIB\Gen\Type\Response;
use BrokeYourBike\ZenithBankCIB\Gen\Type\QueryReq;
use BrokeYourBike\ZenithBankCIB\Gen\Type\FetchRequest;
use BrokeYourBike\ZenithBankCIB\Gen\Type\ArrayOfTransQuery;
use BrokeYourBike\ZenithBankCIB\Gen\SoapClient;
use BrokeYourBike\ZenithBankCIB\Gen\SoapClassmap;
use BrokeYourBike\HasSourceModel\HasSourceModelTrait;

/**
 * @author Ivan Stasiuk <ivan@stasi.uk>
 */
class Client
{
    use HasSourceModelTrait;

    private ConfigInterface $config;
    private SoapClient $soap;

    public function __construct(ConfigInterface $config, ClientInterface $httpClient)
    {
        $this->config = $config;

        $httpHandle = HttPlugHandle::createForClient($httpClient);

        $engine = ExtSoapEngineFactory::fromOptionsWithHandler(
            ExtSoapOptions::defaults($this->config->getWsdl(), [])
                ->withClassMap(SoapClassmap::getCollection()),
            $httpHandle
        );

        $this->soap = new SoapClient($engine, new EventDispatcher());
    }

    public function getConfig(): ConfigInterface
    {
        return $this->config;
    }

    public function fetch(string $reference): Response
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
}
