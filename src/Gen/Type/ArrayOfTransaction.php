<?php

namespace BrokeYourBike\ZenithBankCIB\Gen\Type;

class ArrayOfTransaction
{
    /**
     * @var \BrokeYourBike\ZenithBankCIB\Gen\Type\Transaction
     */
    private $Transaction;

    /**
     * @return \BrokeYourBike\ZenithBankCIB\Gen\Type\Transaction
     */
    public function getTransaction()
    {
        return $this->Transaction;
    }

    /**
     * @param \BrokeYourBike\ZenithBankCIB\Gen\Type\Transaction $Transaction
     * @return ArrayOfTransaction
     */
    public function withTransaction($Transaction)
    {
        $new = clone $this;
        $new->Transaction = $Transaction;

        return $new;
    }
}

