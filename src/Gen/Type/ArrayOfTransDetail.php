<?php

namespace BrokeYourBike\ZenithBankCIB\Gen\Type;

class ArrayOfTransDetail
{
    /**
     * @var null | array<int<0,max>, \BrokeYourBike\ZenithBankCIB\Gen\Type\TransDetail>
     */
    private ?array $TransDetail;

    /**
     * @return null | array<int<0,max>, \BrokeYourBike\ZenithBankCIB\Gen\Type\TransDetail>
     */
    public function getTransDetail() : ?array
    {
        return $this->TransDetail;
    }

    /**
     * @param null | array<int<0,max>, \BrokeYourBike\ZenithBankCIB\Gen\Type\TransDetail> $TransDetail
     * @return static
     */
    public function withTransDetail(?array $TransDetail) : static
    {
        $new = clone $this;
        $new->TransDetail = $TransDetail;

        return $new;
    }
}

