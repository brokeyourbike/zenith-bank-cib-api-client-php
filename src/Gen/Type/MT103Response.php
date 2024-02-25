<?php

namespace BrokeYourBike\ZenithBankCIB\Gen\Type;

class MT103Response
{
    /**
     * @var string
     */
    private $Description;

    /**
     * @var \BrokeYourBike\ZenithBankCIB\Gen\Type\ArrayOfMT103Detail
     */
    private $MT103Detail;

    /**
     * @var string
     */
    private $ResponseCode;

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->Description;
    }

    /**
     * @param string $Description
     * @return MT103Response
     */
    public function withDescription($Description)
    {
        $new = clone $this;
        $new->Description = $Description;

        return $new;
    }

    /**
     * @return \BrokeYourBike\ZenithBankCIB\Gen\Type\ArrayOfMT103Detail
     */
    public function getMT103Detail()
    {
        return $this->MT103Detail;
    }

    /**
     * @param \BrokeYourBike\ZenithBankCIB\Gen\Type\ArrayOfMT103Detail $MT103Detail
     * @return MT103Response
     */
    public function withMT103Detail($MT103Detail)
    {
        $new = clone $this;
        $new->MT103Detail = $MT103Detail;

        return $new;
    }

    /**
     * @return string
     */
    public function getResponseCode()
    {
        return $this->ResponseCode;
    }

    /**
     * @param string $ResponseCode
     * @return MT103Response
     */
    public function withResponseCode($ResponseCode)
    {
        $new = clone $this;
        $new->ResponseCode = $ResponseCode;

        return $new;
    }
}

