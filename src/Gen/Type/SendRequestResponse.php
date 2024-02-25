<?php

namespace BrokeYourBike\ZenithBankCIB\Gen\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SendRequestResponse implements ResultInterface
{
    /**
     * @var null | \BrokeYourBike\ZenithBankCIB\Gen\Type\Response
     */
    private ?\BrokeYourBike\ZenithBankCIB\Gen\Type\Response $SendRequestResult;

    /**
     * @return null | \BrokeYourBike\ZenithBankCIB\Gen\Type\Response
     */
    public function getSendRequestResult() : ?\BrokeYourBike\ZenithBankCIB\Gen\Type\Response
    {
        return $this->SendRequestResult;
    }

    /**
     * @param null | \BrokeYourBike\ZenithBankCIB\Gen\Type\Response $SendRequestResult
     * @return static
     */
    public function withSendRequestResult(?\BrokeYourBike\ZenithBankCIB\Gen\Type\Response $SendRequestResult) : static
    {
        $new = clone $this;
        $new->SendRequestResult = $SendRequestResult;

        return $new;
    }
}

