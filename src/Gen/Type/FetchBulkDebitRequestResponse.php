<?php

namespace BrokeYourBike\ZenithBankCIB\Gen\Type;

use Phpro\SoapClient\Type\ResultInterface;

class FetchBulkDebitRequestResponse implements ResultInterface
{
    /**
     * @var null | \BrokeYourBike\ZenithBankCIB\Gen\Type\Response
     */
    private ?\BrokeYourBike\ZenithBankCIB\Gen\Type\Response $FetchBulkDebitRequestResult;

    /**
     * @return null | \BrokeYourBike\ZenithBankCIB\Gen\Type\Response
     */
    public function getFetchBulkDebitRequestResult() : ?\BrokeYourBike\ZenithBankCIB\Gen\Type\Response
    {
        return $this->FetchBulkDebitRequestResult;
    }

    /**
     * @param null | \BrokeYourBike\ZenithBankCIB\Gen\Type\Response $FetchBulkDebitRequestResult
     * @return static
     */
    public function withFetchBulkDebitRequestResult(?\BrokeYourBike\ZenithBankCIB\Gen\Type\Response $FetchBulkDebitRequestResult) : static
    {
        $new = clone $this;
        $new->FetchBulkDebitRequestResult = $FetchBulkDebitRequestResult;

        return $new;
    }
}

