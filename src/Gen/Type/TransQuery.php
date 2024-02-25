<?php

namespace BrokeYourBike\ZenithBankCIB\Gen\Type;

class TransQuery
{
    private string $TransactionRef;

    public function getTransactionRef(): string
    {
        return $this->TransactionRef;
    }

    public function withTransactionRef(string $TransactionRef): TransQuery
    {
        $new = clone $this;
        $new->TransactionRef = $TransactionRef;

        return $new;
    }
}

