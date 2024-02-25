<?php

namespace BrokeYourBike\ZenithBankCIB\Gen\Type;

class Response
{
    /**
     * @var null | string
     */
    private ?string $Description;

    /**
     * @var null | string
     */
    private ?string $ResponseCode;

    /**
     * @var null | int
     */
    private ?int $TotalFailed;

    /**
     * @var null | int
     */
    private ?int $TotalProcessed;

    /**
     * @var null | int
     */
    private ?int $TotalRecordReceived;

    /**
     * @var null | \BrokeYourBike\ZenithBankCIB\Gen\Type\ArrayOfTransDetail
     */
    private ?\BrokeYourBike\ZenithBankCIB\Gen\Type\ArrayOfTransDetail $Transactions;

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
     * @return null | int
     */
    public function getTotalFailed() : ?int
    {
        return $this->TotalFailed;
    }

    /**
     * @param null | int $TotalFailed
     * @return static
     */
    public function withTotalFailed(?int $TotalFailed) : static
    {
        $new = clone $this;
        $new->TotalFailed = $TotalFailed;

        return $new;
    }

    /**
     * @return null | int
     */
    public function getTotalProcessed() : ?int
    {
        return $this->TotalProcessed;
    }

    /**
     * @param null | int $TotalProcessed
     * @return static
     */
    public function withTotalProcessed(?int $TotalProcessed) : static
    {
        $new = clone $this;
        $new->TotalProcessed = $TotalProcessed;

        return $new;
    }

    /**
     * @return null | int
     */
    public function getTotalRecordReceived() : ?int
    {
        return $this->TotalRecordReceived;
    }

    /**
     * @param null | int $TotalRecordReceived
     * @return static
     */
    public function withTotalRecordReceived(?int $TotalRecordReceived) : static
    {
        $new = clone $this;
        $new->TotalRecordReceived = $TotalRecordReceived;

        return $new;
    }

    /**
     * @return null | \BrokeYourBike\ZenithBankCIB\Gen\Type\ArrayOfTransDetail
     */
    public function getTransactions() : ?\BrokeYourBike\ZenithBankCIB\Gen\Type\ArrayOfTransDetail
    {
        return $this->Transactions;
    }

    /**
     * @param null | \BrokeYourBike\ZenithBankCIB\Gen\Type\ArrayOfTransDetail $Transactions
     * @return static
     */
    public function withTransactions(?\BrokeYourBike\ZenithBankCIB\Gen\Type\ArrayOfTransDetail $Transactions) : static
    {
        $new = clone $this;
        $new->Transactions = $Transactions;

        return $new;
    }
}

