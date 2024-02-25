<?php

namespace BrokeYourBike\ZenithBankCIB\Gen\Type;

class Transaction
{
    /**
     * @var null | string
     */
    private ?string $Amount;

    /**
     * @var null | string
     */
    private ?string $BeneficiaryAccount;

    /**
     * @var null | string
     */
    private ?string $BeneficiaryAddress;

    /**
     * @var null | string
     */
    private ?string $BeneficiaryBankCode;

    /**
     * @var null | string
     */
    private ?string $BeneficiaryBankSortCode;

    /**
     * @var null | string
     */
    private ?string $BeneficiaryCategory;

    /**
     * @var null | string
     */
    private ?string $BeneficiaryCode;

    /**
     * @var null | string
     */
    private ?string $BeneficiaryEmail;

    /**
     * @var null | string
     */
    private ?string $BeneficiaryMobile;

    /**
     * @var null | string
     */
    private ?string $BeneficiaryName;

    /**
     * @var null | string
     */
    private ?string $BeneficiaryPhone;

    /**
     * @var null | string
     */
    private ?string $ContractDate;

    /**
     * @var null | string
     */
    private ?string $ContractNo;

    /**
     * @var null | string
     */
    private ?string $DebitAccount;

    /**
     * @var null | string
     */
    private ?string $DebitAccountName;

    /**
     * @var null | string
     */
    private ?string $DebitCurrency;

    /**
     * @var null | string
     */
    private ?string $InvoiceNumber;

    /**
     * @var null | string
     */
    private ?string $PaymentCurrency;

    /**
     * @var null | string
     */
    private ?string $PaymentMethod;

    /**
     * @var null | string
     */
    private ?string $PaymentType;

    /**
     * @var null | string
     */
    private ?string $Payment_Due_Date;

    /**
     * @var null | string
     */
    private ?string $TransactionRef;

    /**
     * @return null | string
     */
    public function getAmount() : ?string
    {
        return $this->Amount;
    }

    /**
     * @param null | string $Amount
     * @return static
     */
    public function withAmount(?string $Amount) : static
    {
        $new = clone $this;
        $new->Amount = $Amount;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getBeneficiaryAccount() : ?string
    {
        return $this->BeneficiaryAccount;
    }

    /**
     * @param null | string $BeneficiaryAccount
     * @return static
     */
    public function withBeneficiaryAccount(?string $BeneficiaryAccount) : static
    {
        $new = clone $this;
        $new->BeneficiaryAccount = $BeneficiaryAccount;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getBeneficiaryAddress() : ?string
    {
        return $this->BeneficiaryAddress;
    }

    /**
     * @param null | string $BeneficiaryAddress
     * @return static
     */
    public function withBeneficiaryAddress(?string $BeneficiaryAddress) : static
    {
        $new = clone $this;
        $new->BeneficiaryAddress = $BeneficiaryAddress;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getBeneficiaryBankCode() : ?string
    {
        return $this->BeneficiaryBankCode;
    }

    /**
     * @param null | string $BeneficiaryBankCode
     * @return static
     */
    public function withBeneficiaryBankCode(?string $BeneficiaryBankCode) : static
    {
        $new = clone $this;
        $new->BeneficiaryBankCode = $BeneficiaryBankCode;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getBeneficiaryBankSortCode() : ?string
    {
        return $this->BeneficiaryBankSortCode;
    }

    /**
     * @param null | string $BeneficiaryBankSortCode
     * @return static
     */
    public function withBeneficiaryBankSortCode(?string $BeneficiaryBankSortCode) : static
    {
        $new = clone $this;
        $new->BeneficiaryBankSortCode = $BeneficiaryBankSortCode;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getBeneficiaryCategory() : ?string
    {
        return $this->BeneficiaryCategory;
    }

    /**
     * @param null | string $BeneficiaryCategory
     * @return static
     */
    public function withBeneficiaryCategory(?string $BeneficiaryCategory) : static
    {
        $new = clone $this;
        $new->BeneficiaryCategory = $BeneficiaryCategory;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getBeneficiaryCode() : ?string
    {
        return $this->BeneficiaryCode;
    }

    /**
     * @param null | string $BeneficiaryCode
     * @return static
     */
    public function withBeneficiaryCode(?string $BeneficiaryCode) : static
    {
        $new = clone $this;
        $new->BeneficiaryCode = $BeneficiaryCode;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getBeneficiaryEmail() : ?string
    {
        return $this->BeneficiaryEmail;
    }

    /**
     * @param null | string $BeneficiaryEmail
     * @return static
     */
    public function withBeneficiaryEmail(?string $BeneficiaryEmail) : static
    {
        $new = clone $this;
        $new->BeneficiaryEmail = $BeneficiaryEmail;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getBeneficiaryMobile() : ?string
    {
        return $this->BeneficiaryMobile;
    }

    /**
     * @param null | string $BeneficiaryMobile
     * @return static
     */
    public function withBeneficiaryMobile(?string $BeneficiaryMobile) : static
    {
        $new = clone $this;
        $new->BeneficiaryMobile = $BeneficiaryMobile;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getBeneficiaryName() : ?string
    {
        return $this->BeneficiaryName;
    }

    /**
     * @param null | string $BeneficiaryName
     * @return static
     */
    public function withBeneficiaryName(?string $BeneficiaryName) : static
    {
        $new = clone $this;
        $new->BeneficiaryName = $BeneficiaryName;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getBeneficiaryPhone() : ?string
    {
        return $this->BeneficiaryPhone;
    }

    /**
     * @param null | string $BeneficiaryPhone
     * @return static
     */
    public function withBeneficiaryPhone(?string $BeneficiaryPhone) : static
    {
        $new = clone $this;
        $new->BeneficiaryPhone = $BeneficiaryPhone;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getContractDate() : ?string
    {
        return $this->ContractDate;
    }

    /**
     * @param null | string $ContractDate
     * @return static
     */
    public function withContractDate(?string $ContractDate) : static
    {
        $new = clone $this;
        $new->ContractDate = $ContractDate;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getContractNo() : ?string
    {
        return $this->ContractNo;
    }

    /**
     * @param null | string $ContractNo
     * @return static
     */
    public function withContractNo(?string $ContractNo) : static
    {
        $new = clone $this;
        $new->ContractNo = $ContractNo;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getDebitAccount() : ?string
    {
        return $this->DebitAccount;
    }

    /**
     * @param null | string $DebitAccount
     * @return static
     */
    public function withDebitAccount(?string $DebitAccount) : static
    {
        $new = clone $this;
        $new->DebitAccount = $DebitAccount;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getDebitAccountName() : ?string
    {
        return $this->DebitAccountName;
    }

    /**
     * @param null | string $DebitAccountName
     * @return static
     */
    public function withDebitAccountName(?string $DebitAccountName) : static
    {
        $new = clone $this;
        $new->DebitAccountName = $DebitAccountName;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getDebitCurrency() : ?string
    {
        return $this->DebitCurrency;
    }

    /**
     * @param null | string $DebitCurrency
     * @return static
     */
    public function withDebitCurrency(?string $DebitCurrency) : static
    {
        $new = clone $this;
        $new->DebitCurrency = $DebitCurrency;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getInvoiceNumber() : ?string
    {
        return $this->InvoiceNumber;
    }

    /**
     * @param null | string $InvoiceNumber
     * @return static
     */
    public function withInvoiceNumber(?string $InvoiceNumber) : static
    {
        $new = clone $this;
        $new->InvoiceNumber = $InvoiceNumber;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getPaymentCurrency() : ?string
    {
        return $this->PaymentCurrency;
    }

    /**
     * @param null | string $PaymentCurrency
     * @return static
     */
    public function withPaymentCurrency(?string $PaymentCurrency) : static
    {
        $new = clone $this;
        $new->PaymentCurrency = $PaymentCurrency;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getPaymentMethod() : ?string
    {
        return $this->PaymentMethod;
    }

    /**
     * @param null | string $PaymentMethod
     * @return static
     */
    public function withPaymentMethod(?string $PaymentMethod) : static
    {
        $new = clone $this;
        $new->PaymentMethod = $PaymentMethod;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getPaymentType() : ?string
    {
        return $this->PaymentType;
    }

    /**
     * @param null | string $PaymentType
     * @return static
     */
    public function withPaymentType(?string $PaymentType) : static
    {
        $new = clone $this;
        $new->PaymentType = $PaymentType;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getPaymentDueDate() : ?string
    {
        return $this->Payment_Due_Date;
    }

    /**
     * @param null | string $Payment_Due_Date
     * @return static
     */
    public function withPaymentDueDate(?string $Payment_Due_Date) : static
    {
        $new = clone $this;
        $new->Payment_Due_Date = $Payment_Due_Date;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getTransactionRef() : ?string
    {
        return $this->TransactionRef;
    }

    /**
     * @param null | string $TransactionRef
     * @return static
     */
    public function withTransactionRef(?string $TransactionRef) : static
    {
        $new = clone $this;
        $new->TransactionRef = $TransactionRef;

        return $new;
    }
}

