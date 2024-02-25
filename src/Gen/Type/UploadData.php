<?php

namespace BrokeYourBike\ZenithBankCIB\Gen\Type;

use \BrokeYourBike\ZenithBankCIB\Gen\Type\GenericUploadData;

class UploadData extends GenericUploadData
{
    /**
     * @var null | \BrokeYourBike\ZenithBankCIB\Gen\Type\ArrayOfTransaction
     */
    private ?\BrokeYourBike\ZenithBankCIB\Gen\Type\ArrayOfTransaction $TransactionRequest;

    /**
     * @return null | \BrokeYourBike\ZenithBankCIB\Gen\Type\ArrayOfTransaction
     */
    public function getTransactionRequest() : ?\BrokeYourBike\ZenithBankCIB\Gen\Type\ArrayOfTransaction
    {
        return $this->TransactionRequest;
    }

    /**
     * @param null | \BrokeYourBike\ZenithBankCIB\Gen\Type\ArrayOfTransaction $TransactionRequest
     * @return static
     */
    public function withTransactionRequest(?\BrokeYourBike\ZenithBankCIB\Gen\Type\ArrayOfTransaction $TransactionRequest) : static
    {
        $new = clone $this;
        $new->TransactionRequest = $TransactionRequest;

        return $new;
    }
}

