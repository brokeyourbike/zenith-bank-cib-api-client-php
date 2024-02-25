<?php

namespace BrokeYourBike\ZenithBankCIB\Gen\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SendFXRequestResponse implements ResultInterface
{
    /**
     * @var \BrokeYourBike\ZenithBankCIB\Gen\Type\Response
     */
    private $SendFXRequestResult;

    /**
     * @return \BrokeYourBike\ZenithBankCIB\Gen\Type\Response
     */
    public function getSendFXRequestResult()
    {
        return $this->SendFXRequestResult;
    }

    /**
     * @param \BrokeYourBike\ZenithBankCIB\Gen\Type\Response $SendFXRequestResult
     * @return SendFXRequestResponse
     */
    public function withSendFXRequestResult($SendFXRequestResult)
    {
        $new = clone $this;
        $new->SendFXRequestResult = $SendFXRequestResult;

        return $new;
    }
}

