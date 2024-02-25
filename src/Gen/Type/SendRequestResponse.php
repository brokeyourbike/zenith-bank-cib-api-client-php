<?php

namespace BrokeYourBike\ZenithBankCIB\Gen\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SendRequestResponse implements ResultInterface
{
    /**
     * @var \BrokeYourBike\ZenithBankCIB\Gen\Type\Response
     */
    private $SendRequestResult;

    /**
     * @return \BrokeYourBike\ZenithBankCIB\Gen\Type\Response
     */
    public function getSendRequestResult()
    {
        return $this->SendRequestResult;
    }

    /**
     * @param \BrokeYourBike\ZenithBankCIB\Gen\Type\Response $SendRequestResult
     * @return SendRequestResponse
     */
    public function withSendRequestResult($SendRequestResult)
    {
        $new = clone $this;
        $new->SendRequestResult = $SendRequestResult;

        return $new;
    }
}

