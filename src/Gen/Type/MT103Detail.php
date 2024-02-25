<?php

namespace BrokeYourBike\ZenithBankCIB\Gen\Type;

class MT103Detail
{
    /**
     * @var string
     */
    private $AccountWithInstitution;

    /**
     * @var float
     */
    private $Amount;

    /**
     * @var string
     */
    private $BankOperationCode;

    /**
     * @var string
     */
    private $Currency;

    /**
     * @var string
     */
    private $DetailsOfCharges;

    /**
     * @var string
     */
    private $IntermediaryInstitution;

    /**
     * @var string
     */
    private $OrderingCustomer;

    /**
     * @var string
     */
    private $Receiver;

    /**
     * @var string
     */
    private $RemittanceInformation;

    /**
     * @var string
     */
    private $SenderReference;

    /**
     * @var string
     */
    private $SenderToReceiverInformation;

    /**
     * @var string
     */
    private $Status;

    /**
     * @var \DateTimeInterface
     */
    private $ValueDate;

    /**
     * @return string
     */
    public function getAccountWithInstitution()
    {
        return $this->AccountWithInstitution;
    }

    /**
     * @param string $AccountWithInstitution
     * @return MT103Detail
     */
    public function withAccountWithInstitution($AccountWithInstitution)
    {
        $new = clone $this;
        $new->AccountWithInstitution = $AccountWithInstitution;

        return $new;
    }

    /**
     * @return float
     */
    public function getAmount()
    {
        return $this->Amount;
    }

    /**
     * @param float $Amount
     * @return MT103Detail
     */
    public function withAmount($Amount)
    {
        $new = clone $this;
        $new->Amount = $Amount;

        return $new;
    }

    /**
     * @return string
     */
    public function getBankOperationCode()
    {
        return $this->BankOperationCode;
    }

    /**
     * @param string $BankOperationCode
     * @return MT103Detail
     */
    public function withBankOperationCode($BankOperationCode)
    {
        $new = clone $this;
        $new->BankOperationCode = $BankOperationCode;

        return $new;
    }

    /**
     * @return string
     */
    public function getCurrency()
    {
        return $this->Currency;
    }

    /**
     * @param string $Currency
     * @return MT103Detail
     */
    public function withCurrency($Currency)
    {
        $new = clone $this;
        $new->Currency = $Currency;

        return $new;
    }

    /**
     * @return string
     */
    public function getDetailsOfCharges()
    {
        return $this->DetailsOfCharges;
    }

    /**
     * @param string $DetailsOfCharges
     * @return MT103Detail
     */
    public function withDetailsOfCharges($DetailsOfCharges)
    {
        $new = clone $this;
        $new->DetailsOfCharges = $DetailsOfCharges;

        return $new;
    }

    /**
     * @return string
     */
    public function getIntermediaryInstitution()
    {
        return $this->IntermediaryInstitution;
    }

    /**
     * @param string $IntermediaryInstitution
     * @return MT103Detail
     */
    public function withIntermediaryInstitution($IntermediaryInstitution)
    {
        $new = clone $this;
        $new->IntermediaryInstitution = $IntermediaryInstitution;

        return $new;
    }

    /**
     * @return string
     */
    public function getOrderingCustomer()
    {
        return $this->OrderingCustomer;
    }

    /**
     * @param string $OrderingCustomer
     * @return MT103Detail
     */
    public function withOrderingCustomer($OrderingCustomer)
    {
        $new = clone $this;
        $new->OrderingCustomer = $OrderingCustomer;

        return $new;
    }

    /**
     * @return string
     */
    public function getReceiver()
    {
        return $this->Receiver;
    }

    /**
     * @param string $Receiver
     * @return MT103Detail
     */
    public function withReceiver($Receiver)
    {
        $new = clone $this;
        $new->Receiver = $Receiver;

        return $new;
    }

    /**
     * @return string
     */
    public function getRemittanceInformation()
    {
        return $this->RemittanceInformation;
    }

    /**
     * @param string $RemittanceInformation
     * @return MT103Detail
     */
    public function withRemittanceInformation($RemittanceInformation)
    {
        $new = clone $this;
        $new->RemittanceInformation = $RemittanceInformation;

        return $new;
    }

    /**
     * @return string
     */
    public function getSenderReference()
    {
        return $this->SenderReference;
    }

    /**
     * @param string $SenderReference
     * @return MT103Detail
     */
    public function withSenderReference($SenderReference)
    {
        $new = clone $this;
        $new->SenderReference = $SenderReference;

        return $new;
    }

    /**
     * @return string
     */
    public function getSenderToReceiverInformation()
    {
        return $this->SenderToReceiverInformation;
    }

    /**
     * @param string $SenderToReceiverInformation
     * @return MT103Detail
     */
    public function withSenderToReceiverInformation($SenderToReceiverInformation)
    {
        $new = clone $this;
        $new->SenderToReceiverInformation = $SenderToReceiverInformation;

        return $new;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->Status;
    }

    /**
     * @param string $Status
     * @return MT103Detail
     */
    public function withStatus($Status)
    {
        $new = clone $this;
        $new->Status = $Status;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getValueDate()
    {
        return $this->ValueDate;
    }

    /**
     * @param \DateTimeInterface $ValueDate
     * @return MT103Detail
     */
    public function withValueDate($ValueDate)
    {
        $new = clone $this;
        $new->ValueDate = $ValueDate;

        return $new;
    }
}

