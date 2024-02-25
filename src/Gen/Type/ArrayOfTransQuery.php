<?php

namespace BrokeYourBike\ZenithBankCIB\Gen\Type;

class ArrayOfTransQuery
{
    private \BrokeYourBike\ZenithBankCIB\Gen\Type\TransQuery $TransQuery;

    public function getTransQuery(): \BrokeYourBike\ZenithBankCIB\Gen\Type\TransQuery
    {
        return $this->TransQuery;
    }

    public function withTransQuery(\BrokeYourBike\ZenithBankCIB\Gen\Type\TransQuery $TransQuery): ArrayOfTransQuery
    {
        $new = clone $this;
        $new->TransQuery = $TransQuery;

        return $new;
    }
}

