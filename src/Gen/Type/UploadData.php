<?php

namespace BrokeYourBike\ZenithBankCIB\Gen\Type;

class UploadData
{
    /**
     * @var \BrokeYourBike\ZenithBankCIB\Gen\Type\ArrayOfTransaction
     */
    private $TransactionRequest;

    /**
     * @return \BrokeYourBike\ZenithBankCIB\Gen\Type\ArrayOfTransaction
     */
    public function getTransactionRequest()
    {
        return $this->TransactionRequest;
    }

    /**
     * @param \BrokeYourBike\ZenithBankCIB\Gen\Type\ArrayOfTransaction $TransactionRequest
     * @return UploadData
     */
    public function withTransactionRequest($TransactionRequest)
    {
        $new = clone $this;
        $new->TransactionRequest = $TransactionRequest;

        return $new;
    }
}

