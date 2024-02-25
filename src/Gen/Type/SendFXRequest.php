<?php

namespace BrokeYourBike\ZenithBankCIB\Gen\Type;

use Phpro\SoapClient\Type\RequestInterface;

class SendFXRequest implements RequestInterface
{
    /**
     * @var \BrokeYourBike\ZenithBankCIB\Gen\Type\FXUploadData
     */
    private $data;

    /**
     * Constructor
     *
     * @var \BrokeYourBike\ZenithBankCIB\Gen\Type\FXUploadData $data
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * @return \BrokeYourBike\ZenithBankCIB\Gen\Type\FXUploadData
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @param \BrokeYourBike\ZenithBankCIB\Gen\Type\FXUploadData $data
     * @return SendFXRequest
     */
    public function withData($data)
    {
        $new = clone $this;
        $new->data = $data;

        return $new;
    }
}

