<?php

namespace BrokeYourBike\ZenithBankCIB\Gen\Type;

class ArrayOfTransQuery
{
    /**
     * @var \BrokeYourBike\ZenithBankCIB\Gen\Type\TransQuery
     */
    private \BrokeYourBike\ZenithBankCIB\Gen\Type\TransQuery $TransQuery;

    /**
     * @return \BrokeYourBike\ZenithBankCIB\Gen\Type\TransQuery
     */
    public function getTransQuery() : \BrokeYourBike\ZenithBankCIB\Gen\Type\TransQuery
    {
        return $this->TransQuery;
    }

    /**
     * @param \BrokeYourBike\ZenithBankCIB\Gen\Type\TransQuery> $TransQuery
     * @return static
     */
    public function withTransQuery(\BrokeYourBike\ZenithBankCIB\Gen\Type\TransQuery $TransQuery) : static
    {
        $new = clone $this;
        $new->TransQuery = $TransQuery;

        return $new;
    }
}

