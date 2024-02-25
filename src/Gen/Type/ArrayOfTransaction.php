<?php

namespace BrokeYourBike\ZenithBankCIB\Gen\Type;

class ArrayOfTransaction
{
    /**
     * @var null | array<int<0,max>, \BrokeYourBike\ZenithBankCIB\Gen\Type\Transaction>
     */
    private ?array $Transaction;

    /**
     * @return null | array<int<0,max>, \BrokeYourBike\ZenithBankCIB\Gen\Type\Transaction>
     */
    public function getTransaction() : ?array
    {
        return $this->Transaction;
    }

    /**
     * @param null | array<int<0,max>, \BrokeYourBike\ZenithBankCIB\Gen\Type\Transaction> $Transaction
     * @return static
     */
    public function withTransaction(?array $Transaction) : static
    {
        $new = clone $this;
        $new->Transaction = $Transaction;

        return $new;
    }
}

