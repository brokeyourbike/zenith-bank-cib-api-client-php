<?php

namespace BrokeYourBike\ZenithBankCIB\Gen\Type;

class FXUploadData
{
    /**
     * @var \BrokeYourBike\ZenithBankCIB\Gen\Type\ArrayOfFXTransaction
     */
    private $TransactionRequest;

    /**
     * @return \BrokeYourBike\ZenithBankCIB\Gen\Type\ArrayOfFXTransaction
     */
    public function getTransactionRequest()
    {
        return $this->TransactionRequest;
    }

    /**
     * @param \BrokeYourBike\ZenithBankCIB\Gen\Type\ArrayOfFXTransaction $TransactionRequest
     * @return FXUploadData
     */
    public function withTransactionRequest($TransactionRequest)
    {
        $new = clone $this;
        $new->TransactionRequest = $TransactionRequest;

        return $new;
    }
}

