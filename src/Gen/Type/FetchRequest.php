<?php

namespace BrokeYourBike\ZenithBankCIB\Gen\Type;

use Phpro\SoapClient\Type\RequestInterface;

class FetchRequest implements RequestInterface
{
    private \BrokeYourBike\ZenithBankCIB\Gen\Type\QueryReq $data;

    public function __construct(\BrokeYourBike\ZenithBankCIB\Gen\Type\QueryReq $data)
    {
        $this->data = $data;
    }

    public function getData(): \BrokeYourBike\ZenithBankCIB\Gen\Type\QueryReq
    {
        return $this->data;
    }

    public function withData(\BrokeYourBike\ZenithBankCIB\Gen\Type\QueryReq $data): FetchRequest
    {
        $new = clone $this;
        $new->data = $data;

        return $new;
    }
}

