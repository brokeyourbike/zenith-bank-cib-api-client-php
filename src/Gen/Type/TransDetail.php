<?php

namespace BrokeYourBike\ZenithBankCIB\Gen\Type;

class TransDetail
{
    /**
     * @var null | string
     */
    private ?string $Amount;

    /**
     * @var null | string
     */
    private ?string $Description;

    /**
     * @var null | string
     */
    private ?string $PaymentStatus;

    /**
     * @var null | string
     */
    private ?string $ResponseCode;

    /**
     * @var null | string
     */
    private ?string $TransactionRef;

    /**
     * @var null | string
     */
    private ?string $VendorAccount;

    /**
     * @var null | string
     */
    private ?string $VendorBankCode;

    /**
     * @return null | string
     */
    public function getAmount() : ?string
    {
        return $this->Amount;
    }

    /**
     * @param null | string $Amount
     * @return static
     */
    public function withAmount(?string $Amount) : static
    {
        $new = clone $this;
        $new->Amount = $Amount;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getDescription() : ?string
    {
        return $this->Description;
    }

    /**
     * @param null | string $Description
     * @return static
     */
    public function withDescription(?string $Description) : static
    {
        $new = clone $this;
        $new->Description = $Description;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getPaymentStatus() : ?string
    {
        return $this->PaymentStatus;
    }

    /**
     * @param null | string $PaymentStatus
     * @return static
     */
    public function withPaymentStatus(?string $PaymentStatus) : static
    {
        $new = clone $this;
        $new->PaymentStatus = $PaymentStatus;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getResponseCode() : ?string
    {
        return $this->ResponseCode;
    }

    /**
     * @param null | string $ResponseCode
     * @return static
     */
    public function withResponseCode(?string $ResponseCode) : static
    {
        $new = clone $this;
        $new->ResponseCode = $ResponseCode;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getTransactionRef() : ?string
    {
        return $this->TransactionRef;
    }

    /**
     * @param null | string $TransactionRef
     * @return static
     */
    public function withTransactionRef(?string $TransactionRef) : static
    {
        $new = clone $this;
        $new->TransactionRef = $TransactionRef;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getVendorAccount() : ?string
    {
        return $this->VendorAccount;
    }

    /**
     * @param null | string $VendorAccount
     * @return static
     */
    public function withVendorAccount(?string $VendorAccount) : static
    {
        $new = clone $this;
        $new->VendorAccount = $VendorAccount;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getVendorBankCode() : ?string
    {
        return $this->VendorBankCode;
    }

    /**
     * @param null | string $VendorBankCode
     * @return static
     */
    public function withVendorBankCode(?string $VendorBankCode) : static
    {
        $new = clone $this;
        $new->VendorBankCode = $VendorBankCode;

        return $new;
    }
}

