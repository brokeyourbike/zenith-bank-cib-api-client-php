<?php

namespace BrokeYourBike\ZenithBankCIB\Gen\Type;

use Phpro\SoapClient\Type\RequestInterface;

class FetchMT103Advise implements RequestInterface
{
    /**
     * @var \BrokeYourBike\ZenithBankCIB\Gen\Type\QueryReq
     */
    private $data;

    /**
     * Constructor
     *
     * @var \BrokeYourBike\ZenithBankCIB\Gen\Type\QueryReq $data
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * @return \BrokeYourBike\ZenithBankCIB\Gen\Type\QueryReq
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @param \BrokeYourBike\ZenithBankCIB\Gen\Type\QueryReq $data
     * @return FetchMT103Advise
     */
    public function withData($data)
    {
        $new = clone $this;
        $new->data = $data;

        return $new;
    }
}

