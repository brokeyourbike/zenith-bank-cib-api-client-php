<?php

namespace BrokeYourBike\ZenithBankCIB\Gen\Type;

class QueryReq
{
    /**
     * @var null | \BrokeYourBike\ZenithBankCIB\Gen\Type\User
     */
    private ?\BrokeYourBike\ZenithBankCIB\Gen\Type\User $ClientInfo;

    /**
     * @var null | \BrokeYourBike\ZenithBankCIB\Gen\Type\ArrayOfTransQuery
     */
    private ?\BrokeYourBike\ZenithBankCIB\Gen\Type\ArrayOfTransQuery $TransactionReference;

    /**
     * @return null | \BrokeYourBike\ZenithBankCIB\Gen\Type\User
     */
    public function getClientInfo() : ?\BrokeYourBike\ZenithBankCIB\Gen\Type\User
    {
        return $this->ClientInfo;
    }

    /**
     * @param null | \BrokeYourBike\ZenithBankCIB\Gen\Type\User $ClientInfo
     * @return static
     */
    public function withClientInfo(?\BrokeYourBike\ZenithBankCIB\Gen\Type\User $ClientInfo) : static
    {
        $new = clone $this;
        $new->ClientInfo = $ClientInfo;

        return $new;
    }

    /**
     * @return null | \BrokeYourBike\ZenithBankCIB\Gen\Type\ArrayOfTransQuery
     */
    public function getTransactionReference() : ?\BrokeYourBike\ZenithBankCIB\Gen\Type\ArrayOfTransQuery
    {
        return $this->TransactionReference;
    }

    /**
     * @param null | \BrokeYourBike\ZenithBankCIB\Gen\Type\ArrayOfTransQuery $TransactionReference
     * @return static
     */
    public function withTransactionReference(?\BrokeYourBike\ZenithBankCIB\Gen\Type\ArrayOfTransQuery $TransactionReference) : static
    {
        $new = clone $this;
        $new->TransactionReference = $TransactionReference;

        return $new;
    }
}

