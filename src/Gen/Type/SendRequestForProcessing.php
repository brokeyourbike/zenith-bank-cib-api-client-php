<?php

namespace BrokeYourBike\ZenithBankCIB\Gen\Type;

use Phpro\SoapClient\Type\RequestInterface;

class SendRequestForProcessing implements RequestInterface
{
    /**
     * @var \BrokeYourBike\ZenithBankCIB\Gen\Type\UploadData
     */
    private $data;

    /**
     * Constructor
     *
     * @var \BrokeYourBike\ZenithBankCIB\Gen\Type\UploadData $data
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * @return \BrokeYourBike\ZenithBankCIB\Gen\Type\UploadData
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @param \BrokeYourBike\ZenithBankCIB\Gen\Type\UploadData $data
     * @return SendRequestForProcessing
     */
    public function withData($data)
    {
        $new = clone $this;
        $new->data = $data;

        return $new;
    }
}

