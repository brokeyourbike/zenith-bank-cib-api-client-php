<?php

namespace BrokeYourBike\ZenithBankCIB\Gen\Type;

class ArrayOfMT103Detail
{
    /**
     * @var \BrokeYourBike\ZenithBankCIB\Gen\Type\MT103Detail
     */
    private $MT103Detail;

    /**
     * @return \BrokeYourBike\ZenithBankCIB\Gen\Type\MT103Detail
     */
    public function getMT103Detail()
    {
        return $this->MT103Detail;
    }

    /**
     * @param \BrokeYourBike\ZenithBankCIB\Gen\Type\MT103Detail $MT103Detail
     * @return ArrayOfMT103Detail
     */
    public function withMT103Detail($MT103Detail)
    {
        $new = clone $this;
        $new->MT103Detail = $MT103Detail;

        return $new;
    }
}

