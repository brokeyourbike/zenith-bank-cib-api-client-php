<?php

namespace BrokeYourBike\ZenithBankCIB\Gen\Type;

use Phpro\SoapClient\Type\RequestInterface;

class SendRequest implements RequestInterface
{
    /**
     * @var null | \BrokeYourBike\ZenithBankCIB\Gen\Type\UploadData
     */
    private ?\BrokeYourBike\ZenithBankCIB\Gen\Type\UploadData $data;

    /**
     * Constructor
     *
     * @param null | \BrokeYourBike\ZenithBankCIB\Gen\Type\UploadData $data
     */
    public function __construct(?\BrokeYourBike\ZenithBankCIB\Gen\Type\UploadData $data)
    {
        $this->data = $data;
    }

    /**
     * @return null | \BrokeYourBike\ZenithBankCIB\Gen\Type\UploadData
     */
    public function getData() : ?\BrokeYourBike\ZenithBankCIB\Gen\Type\UploadData
    {
        return $this->data;
    }

    /**
     * @param null | \BrokeYourBike\ZenithBankCIB\Gen\Type\UploadData $data
     * @return static
     */
    public function withData(?\BrokeYourBike\ZenithBankCIB\Gen\Type\UploadData $data) : static
    {
        $new = clone $this;
        $new->data = $data;

        return $new;
    }
}

