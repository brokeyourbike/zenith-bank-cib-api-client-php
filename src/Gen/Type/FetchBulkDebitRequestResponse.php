<?php

namespace BrokeYourBike\ZenithBankCIB\Gen\Type;

use Phpro\SoapClient\Type\ResultInterface;

class FetchBulkDebitRequestResponse implements ResultInterface
{
    /**
     * @var \BrokeYourBike\ZenithBankCIB\Gen\Type\Response
     */
    private $FetchBulkDebitRequestResult;

    /**
     * @return \BrokeYourBike\ZenithBankCIB\Gen\Type\Response
     */
    public function getFetchBulkDebitRequestResult()
    {
        return $this->FetchBulkDebitRequestResult;
    }

    /**
     * @param \BrokeYourBike\ZenithBankCIB\Gen\Type\Response $FetchBulkDebitRequestResult
     * @return FetchBulkDebitRequestResponse
     */
    public function withFetchBulkDebitRequestResult($FetchBulkDebitRequestResult)
    {
        $new = clone $this;
        $new->FetchBulkDebitRequestResult = $FetchBulkDebitRequestResult;

        return $new;
    }
}

