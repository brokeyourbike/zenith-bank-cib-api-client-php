<?php

namespace BrokeYourBike\ZenithBankCIB\Gen\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SendRemitaRequestResponse implements ResultInterface
{
    /**
     * @var null | \BrokeYourBike\ZenithBankCIB\Gen\Type\Response
     */
    private ?\BrokeYourBike\ZenithBankCIB\Gen\Type\Response $SendRemitaRequestResult;

    /**
     * @return null | \BrokeYourBike\ZenithBankCIB\Gen\Type\Response
     */
    public function getSendRemitaRequestResult() : ?\BrokeYourBike\ZenithBankCIB\Gen\Type\Response
    {
        return $this->SendRemitaRequestResult;
    }

    /**
     * @param null | \BrokeYourBike\ZenithBankCIB\Gen\Type\Response $SendRemitaRequestResult
     * @return static
     */
    public function withSendRemitaRequestResult(?\BrokeYourBike\ZenithBankCIB\Gen\Type\Response $SendRemitaRequestResult) : static
    {
        $new = clone $this;
        $new->SendRemitaRequestResult = $SendRemitaRequestResult;

        return $new;
    }
}

