<?php

namespace BrokeYourBike\ZenithBankCIB\Gen\Type;

class ArrayOfFXTransaction
{
    /**
     * @var null | array<int<0,max>, \BrokeYourBike\ZenithBankCIB\Gen\Type\FXTransaction>
     */
    private ?array $FXTransaction;

    /**
     * @return null | array<int<0,max>, \BrokeYourBike\ZenithBankCIB\Gen\Type\FXTransaction>
     */
    public function getFXTransaction() : ?array
    {
        return $this->FXTransaction;
    }

    /**
     * @param null | array<int<0,max>, \BrokeYourBike\ZenithBankCIB\Gen\Type\FXTransaction> $FXTransaction
     * @return static
     */
    public function withFXTransaction(?array $FXTransaction) : static
    {
        $new = clone $this;
        $new->FXTransaction = $FXTransaction;

        return $new;
    }
}

