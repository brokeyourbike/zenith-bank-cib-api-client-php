<?php

namespace BrokeYourBike\ZenithBankCIB\Gen\Type;

use Phpro\SoapClient\Type\ResultInterface;

class FetchRequestResponse implements ResultInterface
{
    private \BrokeYourBike\ZenithBankCIB\Gen\Type\Response $FetchRequestResult;

    public function getFetchRequestResult(): \BrokeYourBike\ZenithBankCIB\Gen\Type\Response
    {
        return $this->FetchRequestResult;
    }

    public function withFetchRequestResult(\BrokeYourBike\ZenithBankCIB\Gen\Type\Response $FetchRequestResult): FetchRequestResponse
    {
        $new = clone $this;
        $new->FetchRequestResult = $FetchRequestResult;

        return $new;
    }
}

