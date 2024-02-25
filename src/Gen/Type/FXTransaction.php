<?php

namespace BrokeYourBike\ZenithBankCIB\Gen\Type;

class FXTransaction
{
    /**
     * @var string
     */
    private $AdditionalInfo;

    /**
     * @var string
     */
    private $BeneficiaryCity;

    /**
     * @var string
     */
    private $BeneficiaryCountry;

    /**
     * @var string
     */
    private $BeneficiaryState;

    /**
     * @var string
     */
    private $ChargeOption;

    /**
     * @var string
     */
    private $PurposeCode;

    /**
     * @return string
     */
    public function getAdditionalInfo()
    {
        return $this->AdditionalInfo;
    }

    /**
     * @param string $AdditionalInfo
     * @return FXTransaction
     */
    public function withAdditionalInfo($AdditionalInfo)
    {
        $new = clone $this;
        $new->AdditionalInfo = $AdditionalInfo;

        return $new;
    }

    /**
     * @return string
     */
    public function getBeneficiaryCity()
    {
        return $this->BeneficiaryCity;
    }

    /**
     * @param string $BeneficiaryCity
     * @return FXTransaction
     */
    public function withBeneficiaryCity($BeneficiaryCity)
    {
        $new = clone $this;
        $new->BeneficiaryCity = $BeneficiaryCity;

        return $new;
    }

    /**
     * @return string
     */
    public function getBeneficiaryCountry()
    {
        return $this->BeneficiaryCountry;
    }

    /**
     * @param string $BeneficiaryCountry
     * @return FXTransaction
     */
    public function withBeneficiaryCountry($BeneficiaryCountry)
    {
        $new = clone $this;
        $new->BeneficiaryCountry = $BeneficiaryCountry;

        return $new;
    }

    /**
     * @return string
     */
    public function getBeneficiaryState()
    {
        return $this->BeneficiaryState;
    }

    /**
     * @param string $BeneficiaryState
     * @return FXTransaction
     */
    public function withBeneficiaryState($BeneficiaryState)
    {
        $new = clone $this;
        $new->BeneficiaryState = $BeneficiaryState;

        return $new;
    }

    /**
     * @return string
     */
    public function getChargeOption()
    {
        return $this->ChargeOption;
    }

    /**
     * @param string $ChargeOption
     * @return FXTransaction
     */
    public function withChargeOption($ChargeOption)
    {
        $new = clone $this;
        $new->ChargeOption = $ChargeOption;

        return $new;
    }

    /**
     * @return string
     */
    public function getPurposeCode()
    {
        return $this->PurposeCode;
    }

    /**
     * @param string $PurposeCode
     * @return FXTransaction
     */
    public function withPurposeCode($PurposeCode)
    {
        $new = clone $this;
        $new->PurposeCode = $PurposeCode;

        return $new;
    }
}

