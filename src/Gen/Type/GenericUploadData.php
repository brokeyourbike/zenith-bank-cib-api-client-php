<?php

namespace BrokeYourBike\ZenithBankCIB\Gen\Type;

class GenericUploadData
{
    /**
     * @var string
     */
    private $BulkDebitReference;

    /**
     * @var \BrokeYourBike\ZenithBankCIB\Gen\Type\User
     */
    private $ClientInfo;

    /**
     * @var string
     */
    private $MAC;

    /**
     * @var bool
     */
    private $UseSingleDebitMultipleCredit;

    /**
     * @return string
     */
    public function getBulkDebitReference()
    {
        return $this->BulkDebitReference;
    }

    /**
     * @param string $BulkDebitReference
     * @return GenericUploadData
     */
    public function withBulkDebitReference($BulkDebitReference)
    {
        $new = clone $this;
        $new->BulkDebitReference = $BulkDebitReference;

        return $new;
    }

    /**
     * @return \BrokeYourBike\ZenithBankCIB\Gen\Type\User
     */
    public function getClientInfo()
    {
        return $this->ClientInfo;
    }

    /**
     * @param \BrokeYourBike\ZenithBankCIB\Gen\Type\User $ClientInfo
     * @return GenericUploadData
     */
    public function withClientInfo($ClientInfo)
    {
        $new = clone $this;
        $new->ClientInfo = $ClientInfo;

        return $new;
    }

    /**
     * @return string
     */
    public function getMAC()
    {
        return $this->MAC;
    }

    /**
     * @param string $MAC
     * @return GenericUploadData
     */
    public function withMAC($MAC)
    {
        $new = clone $this;
        $new->MAC = $MAC;

        return $new;
    }

    /**
     * @return bool
     */
    public function getUseSingleDebitMultipleCredit()
    {
        return $this->UseSingleDebitMultipleCredit;
    }

    /**
     * @param bool $UseSingleDebitMultipleCredit
     * @return GenericUploadData
     */
    public function withUseSingleDebitMultipleCredit($UseSingleDebitMultipleCredit)
    {
        $new = clone $this;
        $new->UseSingleDebitMultipleCredit = $UseSingleDebitMultipleCredit;

        return $new;
    }
}

