<?php

namespace BrokeYourBike\ZenithBankCIB\Gen\Type;

use Phpro\SoapClient\Type\ResultInterface;

class FetchRequestResponse implements ResultInterface
{
    /**
     * @var null | \BrokeYourBike\ZenithBankCIB\Gen\Type\Response
     */
    private ?\BrokeYourBike\ZenithBankCIB\Gen\Type\Response $FetchRequestResult;

    /**
     * @return null | \BrokeYourBike\ZenithBankCIB\Gen\Type\Response
     */
    public function getFetchRequestResult() : ?\BrokeYourBike\ZenithBankCIB\Gen\Type\Response
    {
        return $this->FetchRequestResult;
    }

    /**
     * @param null | \BrokeYourBike\ZenithBankCIB\Gen\Type\Response $FetchRequestResult
     * @return static
     */
    public function withFetchRequestResult(?\BrokeYourBike\ZenithBankCIB\Gen\Type\Response $FetchRequestResult) : static
    {
        $new = clone $this;
        $new->FetchRequestResult = $FetchRequestResult;

        return $new;
    }
}

