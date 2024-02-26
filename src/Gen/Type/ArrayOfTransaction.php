<?php

namespace BrokeYourBike\ZenithBankCIB\Gen\Type;

class ArrayOfTransaction
{
    /**
     * @var null | \BrokeYourBike\ZenithBankCIB\Gen\Type\Transaction
     */
    private ?\BrokeYourBike\ZenithBankCIB\Gen\Type\Transaction $Transaction;

    /**
     * @return null | \BrokeYourBike\ZenithBankCIB\Gen\Type\Transaction
     */
    public function getTransaction() : ?\BrokeYourBike\ZenithBankCIB\Gen\Type\Transaction
    {
        return $this->Transaction;
    }

    /**
     * @param null | \BrokeYourBike\ZenithBankCIB\Gen\Type\Transaction $Transaction
     * @return static
     */
    public function withTransaction(?\BrokeYourBike\ZenithBankCIB\Gen\Type\Transaction $Transaction) : static
    {
        $new = clone $this;
        $new->Transaction = $Transaction;

        return $new;
    }
}

