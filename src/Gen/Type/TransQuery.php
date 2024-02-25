<?php

namespace BrokeYourBike\ZenithBankCIB\Gen\Type;

class TransQuery
{
    /**
     * @var null | string
     */
    private ?string $TransactionRef;

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
}

