<?php

namespace BrokeYourBike\ZenithBankCIB\Gen\Type;

class GenericUploadData
{
    /**
     * @var null | string
     */
    private ?string $BulkDebitReference;

    /**
     * @var null | \BrokeYourBike\ZenithBankCIB\Gen\Type\User
     */
    private ?\BrokeYourBike\ZenithBankCIB\Gen\Type\User $ClientInfo;

    /**
     * @var null | string
     */
    private ?string $MAC;

    /**
     * @var null | bool
     */
    private ?bool $UseSingleDebitMultipleCredit;

    /**
     * @return null | string
     */
    public function getBulkDebitReference() : ?string
    {
        return $this->BulkDebitReference;
    }

    /**
     * @param null | string $BulkDebitReference
     * @return static
     */
    public function withBulkDebitReference(?string $BulkDebitReference) : static
    {
        $new = clone $this;
        $new->BulkDebitReference = $BulkDebitReference;

        return $new;
    }

    /**
     * @return null | \BrokeYourBike\ZenithBankCIB\Gen\Type\User
     */
    public function getClientInfo() : ?\BrokeYourBike\ZenithBankCIB\Gen\Type\User
    {
        return $this->ClientInfo;
    }

    /**
     * @param null | \BrokeYourBike\ZenithBankCIB\Gen\Type\User $ClientInfo
     * @return static
     */
    public function withClientInfo(?\BrokeYourBike\ZenithBankCIB\Gen\Type\User $ClientInfo) : static
    {
        $new = clone $this;
        $new->ClientInfo = $ClientInfo;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getMAC() : ?string
    {
        return $this->MAC;
    }

    /**
     * @param null | string $MAC
     * @return static
     */
    public function withMAC(?string $MAC) : static
    {
        $new = clone $this;
        $new->MAC = $MAC;

        return $new;
    }

    /**
     * @return null | bool
     */
    public function getUseSingleDebitMultipleCredit() : ?bool
    {
        return $this->UseSingleDebitMultipleCredit;
    }

    /**
     * @param null | bool $UseSingleDebitMultipleCredit
     * @return static
     */
    public function withUseSingleDebitMultipleCredit(?bool $UseSingleDebitMultipleCredit) : static
    {
        $new = clone $this;
        $new->UseSingleDebitMultipleCredit = $UseSingleDebitMultipleCredit;

        return $new;
    }
}

