<?php

namespace BrokeYourBike\ZenithBankCIB\Gen\Type;

class MT103Detail
{
    /**
     * @var null | string
     */
    private ?string $AccountWithInstitution;

    /**
     * @var null | float
     */
    private ?float $Amount;

    /**
     * @var null | string
     */
    private ?string $BankOperationCode;

    /**
     * @var null | string
     */
    private ?string $Currency;

    /**
     * @var null | string
     */
    private ?string $DetailsOfCharges;

    /**
     * @var null | string
     */
    private ?string $IntermediaryInstitution;

    /**
     * @var null | string
     */
    private ?string $OrderingCustomer;

    /**
     * @var null | string
     */
    private ?string $Receiver;

    /**
     * @var null | string
     */
    private ?string $RemittanceInformation;

    /**
     * @var null | string
     */
    private ?string $SenderReference;

    /**
     * @var null | string
     */
    private ?string $SenderToReceiverInformation;

    /**
     * @var null | string
     */
    private ?string $Status;

    /**
     * @var null | \DateTimeInterface
     */
    private ?\DateTimeInterface $ValueDate;

    /**
     * @return null | string
     */
    public function getAccountWithInstitution() : ?string
    {
        return $this->AccountWithInstitution;
    }

    /**
     * @param null | string $AccountWithInstitution
     * @return static
     */
    public function withAccountWithInstitution(?string $AccountWithInstitution) : static
    {
        $new = clone $this;
        $new->AccountWithInstitution = $AccountWithInstitution;

        return $new;
    }

    /**
     * @return null | float
     */
    public function getAmount() : ?float
    {
        return $this->Amount;
    }

    /**
     * @param null | float $Amount
     * @return static
     */
    public function withAmount(?float $Amount) : static
    {
        $new = clone $this;
        $new->Amount = $Amount;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getBankOperationCode() : ?string
    {
        return $this->BankOperationCode;
    }

    /**
     * @param null | string $BankOperationCode
     * @return static
     */
    public function withBankOperationCode(?string $BankOperationCode) : static
    {
        $new = clone $this;
        $new->BankOperationCode = $BankOperationCode;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getCurrency() : ?string
    {
        return $this->Currency;
    }

    /**
     * @param null | string $Currency
     * @return static
     */
    public function withCurrency(?string $Currency) : static
    {
        $new = clone $this;
        $new->Currency = $Currency;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getDetailsOfCharges() : ?string
    {
        return $this->DetailsOfCharges;
    }

    /**
     * @param null | string $DetailsOfCharges
     * @return static
     */
    public function withDetailsOfCharges(?string $DetailsOfCharges) : static
    {
        $new = clone $this;
        $new->DetailsOfCharges = $DetailsOfCharges;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getIntermediaryInstitution() : ?string
    {
        return $this->IntermediaryInstitution;
    }

    /**
     * @param null | string $IntermediaryInstitution
     * @return static
     */
    public function withIntermediaryInstitution(?string $IntermediaryInstitution) : static
    {
        $new = clone $this;
        $new->IntermediaryInstitution = $IntermediaryInstitution;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getOrderingCustomer() : ?string
    {
        return $this->OrderingCustomer;
    }

    /**
     * @param null | string $OrderingCustomer
     * @return static
     */
    public function withOrderingCustomer(?string $OrderingCustomer) : static
    {
        $new = clone $this;
        $new->OrderingCustomer = $OrderingCustomer;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getReceiver() : ?string
    {
        return $this->Receiver;
    }

    /**
     * @param null | string $Receiver
     * @return static
     */
    public function withReceiver(?string $Receiver) : static
    {
        $new = clone $this;
        $new->Receiver = $Receiver;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getRemittanceInformation() : ?string
    {
        return $this->RemittanceInformation;
    }

    /**
     * @param null | string $RemittanceInformation
     * @return static
     */
    public function withRemittanceInformation(?string $RemittanceInformation) : static
    {
        $new = clone $this;
        $new->RemittanceInformation = $RemittanceInformation;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getSenderReference() : ?string
    {
        return $this->SenderReference;
    }

    /**
     * @param null | string $SenderReference
     * @return static
     */
    public function withSenderReference(?string $SenderReference) : static
    {
        $new = clone $this;
        $new->SenderReference = $SenderReference;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getSenderToReceiverInformation() : ?string
    {
        return $this->SenderToReceiverInformation;
    }

    /**
     * @param null | string $SenderToReceiverInformation
     * @return static
     */
    public function withSenderToReceiverInformation(?string $SenderToReceiverInformation) : static
    {
        $new = clone $this;
        $new->SenderToReceiverInformation = $SenderToReceiverInformation;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getStatus() : ?string
    {
        return $this->Status;
    }

    /**
     * @param null | string $Status
     * @return static
     */
    public function withStatus(?string $Status) : static
    {
        $new = clone $this;
        $new->Status = $Status;

        return $new;
    }

    /**
     * @return null | \DateTimeInterface
     */
    public function getValueDate() : ?\DateTimeInterface
    {
        return $this->ValueDate;
    }

    /**
     * @param null | \DateTimeInterface $ValueDate
     * @return static
     */
    public function withValueDate(?\DateTimeInterface $ValueDate) : static
    {
        $new = clone $this;
        $new->ValueDate = $ValueDate;

        return $new;
    }
}

