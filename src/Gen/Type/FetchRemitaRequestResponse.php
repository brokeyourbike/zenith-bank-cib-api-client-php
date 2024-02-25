<?php

namespace BrokeYourBike\ZenithBankCIB\Gen\Type;

use Phpro\SoapClient\Type\ResultInterface;

class FetchRemitaRequestResponse implements ResultInterface
{
    /**
     * @var null | \BrokeYourBike\ZenithBankCIB\Gen\Type\Response
     */
    private ?\BrokeYourBike\ZenithBankCIB\Gen\Type\Response $FetchRemitaRequestResult;

    /**
     * @return null | \BrokeYourBike\ZenithBankCIB\Gen\Type\Response
     */
    public function getFetchRemitaRequestResult() : ?\BrokeYourBike\ZenithBankCIB\Gen\Type\Response
    {
        return $this->FetchRemitaRequestResult;
    }

    /**
     * @param null | \BrokeYourBike\ZenithBankCIB\Gen\Type\Response $FetchRemitaRequestResult
     * @return static
     */
    public function withFetchRemitaRequestResult(?\BrokeYourBike\ZenithBankCIB\Gen\Type\Response $FetchRemitaRequestResult) : static
    {
        $new = clone $this;
        $new->FetchRemitaRequestResult = $FetchRemitaRequestResult;

        return $new;
    }
}

