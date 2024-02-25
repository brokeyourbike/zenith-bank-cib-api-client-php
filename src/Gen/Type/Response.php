<?php

namespace BrokeYourBike\ZenithBankCIB\Gen\Type;

class Response
{
    private string $Description;
    private string $ResponseCode;
    private int $TotalFailed;
    private int $TotalProcessed;
    private int $TotalRecordReceived;
    private \BrokeYourBike\ZenithBankCIB\Gen\Type\ArrayOfTransDetail $Transactions;

    public function getDescription(): string
    {
        return $this->Description;
    }

    public function withDescription(string $Description): Response
    {
        $new = clone $this;
        $new->Description = $Description;

        return $new;
    }

    public function getResponseCode(): string
    {
        return $this->ResponseCode;
    }

    public function withResponseCode(string $ResponseCode): Response
    {
        $new = clone $this;
        $new->ResponseCode = $ResponseCode;

        return $new;
    }

    public function getTotalFailed(): int
    {
        return $this->TotalFailed;
    }

    public function withTotalFailed(int $TotalFailed): Response
    {
        $new = clone $this;
        $new->TotalFailed = $TotalFailed;

        return $new;
    }

    public function getTotalProcessed(): int
    {
        return $this->TotalProcessed;
    }

    public function withTotalProcessed(int $TotalProcessed): Response
    {
        $new = clone $this;
        $new->TotalProcessed = $TotalProcessed;

        return $new;
    }

    public function getTotalRecordReceived(): int
    {
        return $this->TotalRecordReceived;
    }

    public function withTotalRecordReceived(int $TotalRecordReceived): Response
    {
        $new = clone $this;
        $new->TotalRecordReceived = $TotalRecordReceived;

        return $new;
    }

    public function getTransactions(): \BrokeYourBike\ZenithBankCIB\Gen\Type\ArrayOfTransDetail
    {
        return $this->Transactions;
    }

    public function withTransactions(\BrokeYourBike\ZenithBankCIB\Gen\Type\ArrayOfTransDetail $Transactions): Response
    {
        $new = clone $this;
        $new->Transactions = $Transactions;

        return $new;
    }
}

