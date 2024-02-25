<?php

namespace BrokeYourBike\ZenithBankCIB\Gen\Type;

class ArrayOfTransDetail
{
    private \BrokeYourBike\ZenithBankCIB\Gen\Type\TransDetail $TransDetail;

    public function getTransDetail(): \BrokeYourBike\ZenithBankCIB\Gen\Type\TransDetail
    {
        return $this->TransDetail;
    }

    public function withTransDetail(\BrokeYourBike\ZenithBankCIB\Gen\Type\TransDetail $TransDetail): ArrayOfTransDetail
    {
        $new = clone $this;
        $new->TransDetail = $TransDetail;

        return $new;
    }
}

