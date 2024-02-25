<?php

namespace BrokeYourBike\ZenithBankCIB\Gen\Type;

class TransDetail
{
    /**
     * @var string
     */
    private $Amount;

    /**
     * @var string
     */
    private $Description;

    /**
     * @var string
     */
    private $PaymentStatus;

    /**
     * @var string
     */
    private $ResponseCode;

    /**
     * @var string
     */
    private $TransactionRef;

    /**
     * @var string
     */
    private $VendorAccount;

    /**
     * @var string
     */
    private $VendorBankCode;

    /**
     * @return string
     */
    public function getAmount()
    {
        return $this->Amount;
    }

    /**
     * @param string $Amount
     * @return TransDetail
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
    public function getDescription()
    {
        return $this->Description;
    }

    /**
     * @param string $Description
     * @return TransDetail
     */
    public function withDescription($Description)
    {
        $new = clone $this;
        $new->Description = $Description;

        return $new;
    }

    /**
     * @return string
     */
    public function getPaymentStatus()
    {
        return $this->PaymentStatus;
    }

    /**
     * @param string $PaymentStatus
     * @return TransDetail
     */
    public function withPaymentStatus($PaymentStatus)
    {
        $new = clone $this;
        $new->PaymentStatus = $PaymentStatus;

        return $new;
    }

    /**
     * @return string
     */
    public function getResponseCode()
    {
        return $this->ResponseCode;
    }

    /**
     * @param string $ResponseCode
     * @return TransDetail
     */
    public function withResponseCode($ResponseCode)
    {
        $new = clone $this;
        $new->ResponseCode = $ResponseCode;

        return $new;
    }

    /**
     * @return string
     */
    public function getTransactionRef()
    {
        return $this->TransactionRef;
    }

    /**
     * @param string $TransactionRef
     * @return TransDetail
     */
    public function withTransactionRef($TransactionRef)
    {
        $new = clone $this;
        $new->TransactionRef = $TransactionRef;

        return $new;
    }

    /**
     * @return string
     */
    public function getVendorAccount()
    {
        return $this->VendorAccount;
    }

    /**
     * @param string $VendorAccount
     * @return TransDetail
     */
    public function withVendorAccount($VendorAccount)
    {
        $new = clone $this;
        $new->VendorAccount = $VendorAccount;

        return $new;
    }

    /**
     * @return string
     */
    public function getVendorBankCode()
    {
        return $this->VendorBankCode;
    }

    /**
     * @param string $VendorBankCode
     * @return TransDetail
     */
    public function withVendorBankCode($VendorBankCode)
    {
        $new = clone $this;
        $new->VendorBankCode = $VendorBankCode;

        return $new;
    }
}

