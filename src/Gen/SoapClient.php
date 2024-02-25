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
     * @param RequestInterface & Type\SendRemitaRequest $parameters
     * @return ResultInterface & Type\SendRemitaRequestResponse
     * @throws SoapException
     */
    public function sendRemitaRequest(\BrokeYourBike\ZenithBankCIB\Gen\Type\SendRemitaRequest $parameters) : \BrokeYourBike\ZenithBankCIB\Gen\Type\SendRemitaRequestResponse
    {
        $response = ($this->caller)('SendRemitaRequest', $parameters);

        \Psl\Type\instance_of(\BrokeYourBike\ZenithBankCIB\Gen\Type\SendRemitaRequestResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\FetchRemitaRequest $parameters
     * @return ResultInterface & Type\FetchRemitaRequestResponse
     * @throws SoapException
     */
    public function fetchRemitaRequest(\BrokeYourBike\ZenithBankCIB\Gen\Type\FetchRemitaRequest $parameters) : \BrokeYourBike\ZenithBankCIB\Gen\Type\FetchRemitaRequestResponse
    {
        $response = ($this->caller)('FetchRemitaRequest', $parameters);

        \Psl\Type\instance_of(\BrokeYourBike\ZenithBankCIB\Gen\Type\FetchRemitaRequestResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\SendFXRequest $parameters
     * @return ResultInterface & Type\SendFXRequestResponse
     * @throws SoapException
     */
    public function sendFXRequest(\BrokeYourBike\ZenithBankCIB\Gen\Type\SendFXRequest $parameters) : \BrokeYourBike\ZenithBankCIB\Gen\Type\SendFXRequestResponse
    {
        $response = ($this->caller)('SendFXRequest', $parameters);

        \Psl\Type\instance_of(\BrokeYourBike\ZenithBankCIB\Gen\Type\SendFXRequestResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\FetchMT103Advise $parameters
     * @return ResultInterface & Type\FetchMT103AdviseResponse
     * @throws SoapException
     */
    public function fetchMT103Advise(\BrokeYourBike\ZenithBankCIB\Gen\Type\FetchMT103Advise $parameters) : \BrokeYourBike\ZenithBankCIB\Gen\Type\FetchMT103AdviseResponse
    {
        $response = ($this->caller)('FetchMT103Advise', $parameters);

        \Psl\Type\instance_of(\BrokeYourBike\ZenithBankCIB\Gen\Type\FetchMT103AdviseResponse::class)->assert($response);
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

