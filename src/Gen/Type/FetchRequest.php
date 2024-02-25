<?php

namespace BrokeYourBike\ZenithBankCIB\Gen\Type;

use Phpro\SoapClient\Type\RequestInterface;

class FetchRequest implements RequestInterface
{
    /**
     * @var null | \BrokeYourBike\ZenithBankCIB\Gen\Type\QueryReq
     */
    private ?\BrokeYourBike\ZenithBankCIB\Gen\Type\QueryReq $data;

    /**
     * Constructor
     *
     * @param null | \BrokeYourBike\ZenithBankCIB\Gen\Type\QueryReq $data
     */
    public function __construct(?\BrokeYourBike\ZenithBankCIB\Gen\Type\QueryReq $data)
    {
        $this->data = $data;
    }

    /**
     * @return null | \BrokeYourBike\ZenithBankCIB\Gen\Type\QueryReq
     */
    public function getData() : ?\BrokeYourBike\ZenithBankCIB\Gen\Type\QueryReq
    {
        return $this->data;
    }

    /**
     * @param null | \BrokeYourBike\ZenithBankCIB\Gen\Type\QueryReq $data
     * @return static
     */
    public function withData(?\BrokeYourBike\ZenithBankCIB\Gen\Type\QueryReq $data) : static
    {
        $new = clone $this;
        $new->data = $data;

        return $new;
    }
}

