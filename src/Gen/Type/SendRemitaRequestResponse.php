<?php

namespace BrokeYourBike\ZenithBankCIB\Gen\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SendRemitaRequestResponse implements ResultInterface
{
    /**
     * @var \BrokeYourBike\ZenithBankCIB\Gen\Type\Response
     */
    private $SendRemitaRequestResult;

    /**
     * @return \BrokeYourBike\ZenithBankCIB\Gen\Type\Response
     */
    public function getSendRemitaRequestResult()
    {
        return $this->SendRemitaRequestResult;
    }

    /**
     * @param \BrokeYourBike\ZenithBankCIB\Gen\Type\Response $SendRemitaRequestResult
     * @return SendRemitaRequestResponse
     */
    public function withSendRemitaRequestResult($SendRemitaRequestResult)
    {
        $new = clone $this;
        $new->SendRemitaRequestResult = $SendRemitaRequestResult;

        return $new;
    }
}

