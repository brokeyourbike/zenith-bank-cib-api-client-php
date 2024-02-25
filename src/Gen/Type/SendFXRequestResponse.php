<?php

namespace BrokeYourBike\ZenithBankCIB\Gen\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SendFXRequestResponse implements ResultInterface
{
    /**
     * @var null | \BrokeYourBike\ZenithBankCIB\Gen\Type\Response
     */
    private ?\BrokeYourBike\ZenithBankCIB\Gen\Type\Response $SendFXRequestResult;

    /**
     * @return null | \BrokeYourBike\ZenithBankCIB\Gen\Type\Response
     */
    public function getSendFXRequestResult() : ?\BrokeYourBike\ZenithBankCIB\Gen\Type\Response
    {
        return $this->SendFXRequestResult;
    }

    /**
     * @param null | \BrokeYourBike\ZenithBankCIB\Gen\Type\Response $SendFXRequestResult
     * @return static
     */
    public function withSendFXRequestResult(?\BrokeYourBike\ZenithBankCIB\Gen\Type\Response $SendFXRequestResult) : static
    {
        $new = clone $this;
        $new->SendFXRequestResult = $SendFXRequestResult;

        return $new;
    }
}

