<?php

namespace BrokeYourBike\ZenithBankCIB\Gen\Type;

use Phpro\SoapClient\Type\RequestInterface;

class SendFXRequest implements RequestInterface
{
    /**
     * @var null | \BrokeYourBike\ZenithBankCIB\Gen\Type\FXUploadData
     */
    private ?\BrokeYourBike\ZenithBankCIB\Gen\Type\FXUploadData $data;

    /**
     * Constructor
     *
     * @param null | \BrokeYourBike\ZenithBankCIB\Gen\Type\FXUploadData $data
     */
    public function __construct(?\BrokeYourBike\ZenithBankCIB\Gen\Type\FXUploadData $data)
    {
        $this->data = $data;
    }

    /**
     * @return null | \BrokeYourBike\ZenithBankCIB\Gen\Type\FXUploadData
     */
    public function getData() : ?\BrokeYourBike\ZenithBankCIB\Gen\Type\FXUploadData
    {
        return $this->data;
    }

    /**
     * @param null | \BrokeYourBike\ZenithBankCIB\Gen\Type\FXUploadData $data
     * @return static
     */
    public function withData(?\BrokeYourBike\ZenithBankCIB\Gen\Type\FXUploadData $data) : static
    {
        $new = clone $this;
        $new->data = $data;

        return $new;
    }
}

