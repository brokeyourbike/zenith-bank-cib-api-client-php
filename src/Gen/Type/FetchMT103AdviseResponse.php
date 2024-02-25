<?php

namespace BrokeYourBike\ZenithBankCIB\Gen\Type;

use Phpro\SoapClient\Type\ResultInterface;

class FetchMT103AdviseResponse implements ResultInterface
{
    /**
     * @var null | \BrokeYourBike\ZenithBankCIB\Gen\Type\MT103Response
     */
    private ?\BrokeYourBike\ZenithBankCIB\Gen\Type\MT103Response $FetchMT103AdviseResult;

    /**
     * @return null | \BrokeYourBike\ZenithBankCIB\Gen\Type\MT103Response
     */
    public function getFetchMT103AdviseResult() : ?\BrokeYourBike\ZenithBankCIB\Gen\Type\MT103Response
    {
        return $this->FetchMT103AdviseResult;
    }

    /**
     * @param null | \BrokeYourBike\ZenithBankCIB\Gen\Type\MT103Response $FetchMT103AdviseResult
     * @return static
     */
    public function withFetchMT103AdviseResult(?\BrokeYourBike\ZenithBankCIB\Gen\Type\MT103Response $FetchMT103AdviseResult) : static
    {
        $new = clone $this;
        $new->FetchMT103AdviseResult = $FetchMT103AdviseResult;

        return $new;
    }
}

