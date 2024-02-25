<?php

namespace BrokeYourBike\ZenithBankCIB\Gen\Type;

class ArrayOfFXTransaction
{
    /**
     * @var \BrokeYourBike\ZenithBankCIB\Gen\Type\FXTransaction
     */
    private $FXTransaction;

    /**
     * @return \BrokeYourBike\ZenithBankCIB\Gen\Type\FXTransaction
     */
    public function getFXTransaction()
    {
        return $this->FXTransaction;
    }

    /**
     * @param \BrokeYourBike\ZenithBankCIB\Gen\Type\FXTransaction $FXTransaction
     * @return ArrayOfFXTransaction
     */
    public function withFXTransaction($FXTransaction)
    {
        $new = clone $this;
        $new->FXTransaction = $FXTransaction;

        return $new;
    }
}

