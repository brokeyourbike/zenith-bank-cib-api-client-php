<?php

namespace BrokeYourBike\ZenithBankCIB\Gen\Type;

class QueryReq
{
    private \BrokeYourBike\ZenithBankCIB\Gen\Type\User $ClientInfo;

    private \BrokeYourBike\ZenithBankCIB\Gen\Type\ArrayOfTransQuery $TransactionReference;

    public function getClientInfo(): \BrokeYourBike\ZenithBankCIB\Gen\Type\User
    {
        return $this->ClientInfo;
    }

    public function withClientInfo(\BrokeYourBike\ZenithBankCIB\Gen\Type\User $ClientInfo): QueryReq
    {
        $new = clone $this;
        $new->ClientInfo = $ClientInfo;

        return $new;
    }

    public function getTransactionReference(): \BrokeYourBike\ZenithBankCIB\Gen\Type\ArrayOfTransQuery
    {
        return $this->TransactionReference;
    }

    public function withTransactionReference(\BrokeYourBike\ZenithBankCIB\Gen\Type\ArrayOfTransQuery $TransactionReference): QueryReq
    {
        $new = clone $this;
        $new->TransactionReference = $TransactionReference;

        return $new;
    }
}

