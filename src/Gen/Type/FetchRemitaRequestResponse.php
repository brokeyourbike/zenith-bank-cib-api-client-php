<?php

namespace BrokeYourBike\ZenithBankCIB\Gen\Type;

use Phpro\SoapClient\Type\ResultInterface;

class FetchRemitaRequestResponse implements ResultInterface
{
    /**
     * @var \BrokeYourBike\ZenithBankCIB\Gen\Type\Response
     */
    private $FetchRemitaRequestResult;

    /**
     * @return \BrokeYourBike\ZenithBankCIB\Gen\Type\Response
     */
    public function getFetchRemitaRequestResult()
    {
        return $this->FetchRemitaRequestResult;
    }

    /**
     * @param \BrokeYourBike\ZenithBankCIB\Gen\Type\Response $FetchRemitaRequestResult
     * @return FetchRemitaRequestResponse
     */
    public function withFetchRemitaRequestResult($FetchRemitaRequestResult)
    {
        $new = clone $this;
        $new->FetchRemitaRequestResult = $FetchRemitaRequestResult;

        return $new;
    }
}

