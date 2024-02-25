<?php

namespace BrokeYourBike\ZenithBankCIB\Gen\Type;

use \BrokeYourBike\ZenithBankCIB\Gen\Type\GenericUploadData;

class FXUploadData extends GenericUploadData
{
    /**
     * @var null | \BrokeYourBike\ZenithBankCIB\Gen\Type\ArrayOfFXTransaction
     */
    private ?\BrokeYourBike\ZenithBankCIB\Gen\Type\ArrayOfFXTransaction $TransactionRequest;

    /**
     * @return null | \BrokeYourBike\ZenithBankCIB\Gen\Type\ArrayOfFXTransaction
     */
    public function getTransactionRequest() : ?\BrokeYourBike\ZenithBankCIB\Gen\Type\ArrayOfFXTransaction
    {
        return $this->TransactionRequest;
    }

    /**
     * @param null | \BrokeYourBike\ZenithBankCIB\Gen\Type\ArrayOfFXTransaction $TransactionRequest
     * @return static
     */
    public function withTransactionRequest(?\BrokeYourBike\ZenithBankCIB\Gen\Type\ArrayOfFXTransaction $TransactionRequest) : static
    {
        $new = clone $this;
        $new->TransactionRequest = $TransactionRequest;

        return $new;
    }
}

