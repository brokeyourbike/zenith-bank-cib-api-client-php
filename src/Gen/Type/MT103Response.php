<?php

namespace BrokeYourBike\ZenithBankCIB\Gen\Type;

class MT103Response
{
    /**
     * @var null | string
     */
    private ?string $Description;

    /**
     * @var null | \BrokeYourBike\ZenithBankCIB\Gen\Type\ArrayOfMT103Detail
     */
    private ?\BrokeYourBike\ZenithBankCIB\Gen\Type\ArrayOfMT103Detail $MT103Detail;

    /**
     * @var null | string
     */
    private ?string $ResponseCode;

    /**
     * @return null | string
     */
    public function getDescription() : ?string
    {
        return $this->Description;
    }

    /**
     * @param null | string $Description
     * @return static
     */
    public function withDescription(?string $Description) : static
    {
        $new = clone $this;
        $new->Description = $Description;

        return $new;
    }

    /**
     * @return null | \BrokeYourBike\ZenithBankCIB\Gen\Type\ArrayOfMT103Detail
     */
    public function getMT103Detail() : ?\BrokeYourBike\ZenithBankCIB\Gen\Type\ArrayOfMT103Detail
    {
        return $this->MT103Detail;
    }

    /**
     * @param null | \BrokeYourBike\ZenithBankCIB\Gen\Type\ArrayOfMT103Detail $MT103Detail
     * @return static
     */
    public function withMT103Detail(?\BrokeYourBike\ZenithBankCIB\Gen\Type\ArrayOfMT103Detail $MT103Detail) : static
    {
        $new = clone $this;
        $new->MT103Detail = $MT103Detail;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getResponseCode() : ?string
    {
        return $this->ResponseCode;
    }

    /**
     * @param null | string $ResponseCode
     * @return static
     */
    public function withResponseCode(?string $ResponseCode) : static
    {
        $new = clone $this;
        $new->ResponseCode = $ResponseCode;

        return $new;
    }
}

