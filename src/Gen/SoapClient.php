<?php

namespace BrokeYourBike\ZenithBankCIB\Gen;

use Phpro\SoapClient\Type\ResultInterface;
use Phpro\SoapClient\Type\RequestInterface;
use Phpro\SoapClient\Type\MixedResult;
use Phpro\SoapClient\Exception\SoapException;
use Phpro\SoapClient\Caller\Caller;
use BrokeYourBike\ZenithBankCIB\Gen\Type;

class SoapClient
{
    /**
     * @var Caller
     */
    private $caller;

    public function __construct(\Phpro\SoapClient\Caller\Caller $caller)
    {
        $this->caller = $caller;
    }

    /**
     * @param RequestInterface & Type\SendRequest $parameters
     * @return ResultInterface & Type\SendRequestResponse
     * @throws SoapException
     */
    public function sendRequest(\BrokeYourBike\ZenithBankCIB\Gen\Type\SendRequest $parameters) : \BrokeYourBike\ZenithBankCIB\Gen\Type\SendRequestResponse
    {
        $response = ($this->caller)('SendRequest', $parameters);

        \Psl\Type\instance_of(\BrokeYourBike\ZenithBankCIB\Gen\Type\SendRequestResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\FetchBulkDebitRequest $parameters
     * @return ResultInterface & Type\FetchBulkDebitRequestResponse
     * @throws SoapException
     */
    public function fetchBulkDebitRequest(\BrokeYourBike\ZenithBankCIB\Gen\Type\FetchBulkDebitRequest $parameters) : \BrokeYourBike\ZenithBankCIB\Gen\Type\FetchBulkDebitRequestResponse
    {
        $response = ($this->caller)('FetchBulkDebitRequest', $parameters);

        \Psl\Type\instance_of(\BrokeYourBike\ZenithBankCIB\Gen\Type\FetchBulkDebitRequestResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\FetchRequest $parameters
     * @return ResultInterface & Type\FetchRequestResponse
     * @throws SoapException
     */
    public function fetchRequest(\BrokeYourBike\ZenithBankCIB\Gen\Type\FetchRequest $parameters) : \BrokeYourBike\ZenithBankCIB\Gen\Type\FetchRequestResponse
    {
        $response = ($this->caller)('FetchRequest', $parameters);

        \Psl\Type\instance_of(\BrokeYourBike\ZenithBankCIB\Gen\Type\FetchRequestResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\SendRequestForProcessing $parameters
     * @return ResultInterface & MixedResult<void>
     * @throws SoapException
     */
    public function sendRequestForProcessing(\BrokeYourBike\ZenithBankCIB\Gen\Type\SendRequestForProcessing $parameters) : \Phpro\SoapClient\Type\MixedResult
    {
        $response = ($this->caller)('SendRequestForProcessing', $parameters);

        \Psl\Type\instance_of(\Phpro\SoapClient\Type\MixedResult::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }
}

