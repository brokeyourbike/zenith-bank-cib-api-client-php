<?php

namespace BrokeYourBike\ZenithBankCIB\Gen\Type;

class ArrayOfMT103Detail
{
    /**
     * @var null | array<int<0,max>, \BrokeYourBike\ZenithBankCIB\Gen\Type\MT103Detail>
     */
    private ?array $MT103Detail;

    /**
     * @return null | array<int<0,max>, \BrokeYourBike\ZenithBankCIB\Gen\Type\MT103Detail>
     */
    public function getMT103Detail() : ?array
    {
        return $this->MT103Detail;
    }

    /**
     * @param null | array<int<0,max>, \BrokeYourBike\ZenithBankCIB\Gen\Type\MT103Detail> $MT103Detail
     * @return static
     */
    public function withMT103Detail(?array $MT103Detail) : static
    {
        $new = clone $this;
        $new->MT103Detail = $MT103Detail;

        return $new;
    }
}

