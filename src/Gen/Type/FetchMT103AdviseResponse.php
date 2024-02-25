<?php

namespace BrokeYourBike\ZenithBankCIB\Gen\Type;

use Phpro\SoapClient\Type\ResultInterface;

class FetchMT103AdviseResponse implements ResultInterface
{
    /**
     * @var \BrokeYourBike\ZenithBankCIB\Gen\Type\MT103Response
     */
    private $FetchMT103AdviseResult;

    /**
     * @return \BrokeYourBike\ZenithBankCIB\Gen\Type\MT103Response
     */
    public function getFetchMT103AdviseResult()
    {
        return $this->FetchMT103AdviseResult;
    }

    /**
     * @param \BrokeYourBike\ZenithBankCIB\Gen\Type\MT103Response $FetchMT103AdviseResult
     * @return FetchMT103AdviseResponse
     */
    public function withFetchMT103AdviseResult($FetchMT103AdviseResult)
    {
        $new = clone $this;
        $new->FetchMT103AdviseResult = $FetchMT103AdviseResult;

        return $new;
    }
}

