<?php

namespace BrokeYourBike\ZenithBankCIB\Gen;

use BrokeYourBike\ZenithBankCIB\Gen\Type;
use Phpro\SoapClient\Type\ResultInterface;
use Phpro\SoapClient\Exception\SoapException;
use Phpro\SoapClient\Type\RequestInterface;

class SoapClient extends \Phpro\SoapClient\Client
{
    /**
     * @param RequestInterface|Type\SendRequest $parameters
     * @return ResultInterface|Type\SendRequestResponse
     * @throws SoapException
     */
    public function sendRequest(\BrokeYourBike\ZenithBankCIB\Gen\Type\SendRequest $parameters) : \BrokeYourBike\ZenithBankCIB\Gen\Type\SendRequestResponse
    {
        return $this->call('SendRequest', $parameters);
    }

    /**
     * @param RequestInterface|Type\SendRemitaRequest $parameters
     * @return ResultInterface|Type\SendRemitaRequestResponse
     * @throws SoapException
     */
    public function sendRemitaRequest(\BrokeYourBike\ZenithBankCIB\Gen\Type\SendRemitaRequest $parameters) : \BrokeYourBike\ZenithBankCIB\Gen\Type\SendRemitaRequestResponse
    {
        return $this->call('SendRemitaRequest', $parameters);
    }

    /**
     * @param RequestInterface|Type\FetchRemitaRequest $parameters
     * @return ResultInterface|Type\FetchRemitaRequestResponse
     * @throws SoapException
     */
    public function fetchRemitaRequest(\BrokeYourBike\ZenithBankCIB\Gen\Type\FetchRemitaRequest $parameters) : \BrokeYourBike\ZenithBankCIB\Gen\Type\FetchRemitaRequestResponse
    {
        return $this->call('FetchRemitaRequest', $parameters);
    }

    /**
     * @param RequestInterface|Type\SendFXRequest $parameters
     * @return ResultInterface|Type\SendFXRequestResponse
     * @throws SoapException
     */
    public function sendFXRequest(\BrokeYourBike\ZenithBankCIB\Gen\Type\SendFXRequest $parameters) : \BrokeYourBike\ZenithBankCIB\Gen\Type\SendFXRequestResponse
    {
        return $this->call('SendFXRequest', $parameters);
    }

    /**
     * @param RequestInterface|Type\FetchMT103Advise $parameters
     * @return ResultInterface|Type\FetchMT103AdviseResponse
     * @throws SoapException
     */
    public function fetchMT103Advise(\BrokeYourBike\ZenithBankCIB\Gen\Type\FetchMT103Advise $parameters) : \BrokeYourBike\ZenithBankCIB\Gen\Type\FetchMT103AdviseResponse
    {
        return $this->call('FetchMT103Advise', $parameters);
    }

    /**
     * @param RequestInterface|Type\FetchBulkDebitRequest $parameters
     * @return ResultInterface|Type\FetchBulkDebitRequestResponse
     * @throws SoapException
     */
    public function fetchBulkDebitRequest(\BrokeYourBike\ZenithBankCIB\Gen\Type\FetchBulkDebitRequest $parameters) : \BrokeYourBike\ZenithBankCIB\Gen\Type\FetchBulkDebitRequestResponse
    {
        return $this->call('FetchBulkDebitRequest', $parameters);
    }

    /**
     * @param RequestInterface|Type\FetchRequest $parameters
     * @return ResultInterface|Type\FetchRequestResponse
     * @throws SoapException
     */
    public function fetchRequest(\BrokeYourBike\ZenithBankCIB\Gen\Type\FetchRequest $parameters) : \BrokeYourBike\ZenithBankCIB\Gen\Type\FetchRequestResponse
    {
        return $this->call('FetchRequest', $parameters);
    }

    /**
     * @param RequestInterface|Type\SendRequestForProcessing $parameters
     * @return ResultInterface|Type\VoidType
     * @throws SoapException
     */
    public function sendRequestForProcessing(\BrokeYourBike\ZenithBankCIB\Gen\Type\SendRequestForProcessing $parameters) : \BrokeYourBike\ZenithBankCIB\Gen\Type\VoidType
    {
        return $this->call('SendRequestForProcessing', $parameters);
    }
}

