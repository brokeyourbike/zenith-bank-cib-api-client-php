<?php

namespace BrokeYourBike\ZenithBankCIB\Gen\Type;

use \BrokeYourBike\ZenithBankCIB\Gen\Type\Transaction;

class FXTransaction extends Transaction
{
    /**
     * @var null | string
     */
    private ?string $AdditionalInfo;

    /**
     * @var null | string
     */
    private ?string $BeneficiaryCity;

    /**
     * @var null | string
     */
    private ?string $BeneficiaryCountry;

    /**
     * @var null | string
     */
    private ?string $BeneficiaryState;

    /**
     * @var null | string
     */
    private ?string $ChargeOption;

    /**
     * @var null | string
     */
    private ?string $PurposeCode;

    /**
     * @return null | string
     */
    public function getAdditionalInfo() : ?string
    {
        return $this->AdditionalInfo;
    }

    /**
     * @param null | string $AdditionalInfo
     * @return static
     */
    public function withAdditionalInfo(?string $AdditionalInfo) : static
    {
        $new = clone $this;
        $new->AdditionalInfo = $AdditionalInfo;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getBeneficiaryCity() : ?string
    {
        return $this->BeneficiaryCity;
    }

    /**
     * @param null | string $BeneficiaryCity
     * @return static
     */
    public function withBeneficiaryCity(?string $BeneficiaryCity) : static
    {
        $new = clone $this;
        $new->BeneficiaryCity = $BeneficiaryCity;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getBeneficiaryCountry() : ?string
    {
        return $this->BeneficiaryCountry;
    }

    /**
     * @param null | string $BeneficiaryCountry
     * @return static
     */
    public function withBeneficiaryCountry(?string $BeneficiaryCountry) : static
    {
        $new = clone $this;
        $new->BeneficiaryCountry = $BeneficiaryCountry;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getBeneficiaryState() : ?string
    {
        return $this->BeneficiaryState;
    }

    /**
     * @param null | string $BeneficiaryState
     * @return static
     */
    public function withBeneficiaryState(?string $BeneficiaryState) : static
    {
        $new = clone $this;
        $new->BeneficiaryState = $BeneficiaryState;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getChargeOption() : ?string
    {
        return $this->ChargeOption;
    }

    /**
     * @param null | string $ChargeOption
     * @return static
     */
    public function withChargeOption(?string $ChargeOption) : static
    {
        $new = clone $this;
        $new->ChargeOption = $ChargeOption;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getPurposeCode() : ?string
    {
        return $this->PurposeCode;
    }

    /**
     * @param null | string $PurposeCode
     * @return static
     */
    public function withPurposeCode(?string $PurposeCode) : static
    {
        $new = clone $this;
        $new->PurposeCode = $PurposeCode;

        return $new;
    }
}

