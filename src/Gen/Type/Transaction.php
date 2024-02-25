<?php

namespace BrokeYourBike\ZenithBankCIB\Gen\Type;

class Transaction
{
    /**
     * @var string
     */
    private $Amount;

    /**
     * @var string
     */
    private $BeneficiaryAccount;

    /**
     * @var string
     */
    private $BeneficiaryAddress;

    /**
     * @var string
     */
    private $BeneficiaryBankCode;

    /**
     * @var string
     */
    private $BeneficiaryBankSortCode;

    /**
     * @var string
     */
    private $BeneficiaryCategory;

    /**
     * @var string
     */
    private $BeneficiaryCode;

    /**
     * @var string
     */
    private $BeneficiaryEmail;

    /**
     * @var string
     */
    private $BeneficiaryMobile;

    /**
     * @var string
     */
    private $BeneficiaryName;

    /**
     * @var string
     */
    private $BeneficiaryPhone;

    /**
     * @var string
     */
    private $ContractDate;

    /**
     * @var string
     */
    private $ContractNo;

    /**
     * @var string
     */
    private $DebitAccount;

    /**
     * @var string
     */
    private $DebitAccountName;

    /**
     * @var string
     */
    private $DebitCurrency;

    /**
     * @var string
     */
    private $InvoiceNumber;

    /**
     * @var string
     */
    private $PaymentCurrency;

    /**
     * @var string
     */
    private $PaymentMethod;

    /**
     * @var string
     */
    private $PaymentType;

    /**
     * @var string
     */
    private $Payment_Due_Date;

    /**
     * @var string
     */
    private $TransactionRef;

    /**
     * @return string
     */
    public function getAmount()
    {
        return $this->Amount;
    }

    /**
     * @param string $Amount
     * @return Transaction
     */
    public function withAmount($Amount)
    {
        $new = clone $this;
        $new->Amount = $Amount;

        return $new;
    }

    /**
     * @return string
     */
    public function getBeneficiaryAccount()
    {
        return $this->BeneficiaryAccount;
    }

    /**
     * @param string $BeneficiaryAccount
     * @return Transaction
     */
    public function withBeneficiaryAccount($BeneficiaryAccount)
    {
        $new = clone $this;
        $new->BeneficiaryAccount = $BeneficiaryAccount;

        return $new;
    }

    /**
     * @return string
     */
    public function getBeneficiaryAddress()
    {
        return $this->BeneficiaryAddress;
    }

    /**
     * @param string $BeneficiaryAddress
     * @return Transaction
     */
    public function withBeneficiaryAddress($BeneficiaryAddress)
    {
        $new = clone $this;
        $new->BeneficiaryAddress = $BeneficiaryAddress;

        return $new;
    }

    /**
     * @return string
     */
    public function getBeneficiaryBankCode()
    {
        return $this->BeneficiaryBankCode;
    }

    /**
     * @param string $BeneficiaryBankCode
     * @return Transaction
     */
    public function withBeneficiaryBankCode($BeneficiaryBankCode)
    {
        $new = clone $this;
        $new->BeneficiaryBankCode = $BeneficiaryBankCode;

        return $new;
    }

    /**
     * @return string
     */
    public function getBeneficiaryBankSortCode()
    {
        return $this->BeneficiaryBankSortCode;
    }

    /**
     * @param string $BeneficiaryBankSortCode
     * @return Transaction
     */
    public function withBeneficiaryBankSortCode($BeneficiaryBankSortCode)
    {
        $new = clone $this;
        $new->BeneficiaryBankSortCode = $BeneficiaryBankSortCode;

        return $new;
    }

    /**
     * @return string
     */
    public function getBeneficiaryCategory()
    {
        return $this->BeneficiaryCategory;
    }

    /**
     * @param string $BeneficiaryCategory
     * @return Transaction
     */
    public function withBeneficiaryCategory($BeneficiaryCategory)
    {
        $new = clone $this;
        $new->BeneficiaryCategory = $BeneficiaryCategory;

        return $new;
    }

    /**
     * @return string
     */
    public function getBeneficiaryCode()
    {
        return $this->BeneficiaryCode;
    }

    /**
     * @param string $BeneficiaryCode
     * @return Transaction
     */
    public function withBeneficiaryCode($BeneficiaryCode)
    {
        $new = clone $this;
        $new->BeneficiaryCode = $BeneficiaryCode;

        return $new;
    }

    /**
     * @return string
     */
    public function getBeneficiaryEmail()
    {
        return $this->BeneficiaryEmail;
    }

    /**
     * @param string $BeneficiaryEmail
     * @return Transaction
     */
    public function withBeneficiaryEmail($BeneficiaryEmail)
    {
        $new = clone $this;
        $new->BeneficiaryEmail = $BeneficiaryEmail;

        return $new;
    }

    /**
     * @return string
     */
    public function getBeneficiaryMobile()
    {
        return $this->BeneficiaryMobile;
    }

    /**
     * @param string $BeneficiaryMobile
     * @return Transaction
     */
    public function withBeneficiaryMobile($BeneficiaryMobile)
    {
        $new = clone $this;
        $new->BeneficiaryMobile = $BeneficiaryMobile;

        return $new;
    }

    /**
     * @return string
     */
    public function getBeneficiaryName()
    {
        return $this->BeneficiaryName;
    }

    /**
     * @param string $BeneficiaryName
     * @return Transaction
     */
    public function withBeneficiaryName($BeneficiaryName)
    {
        $new = clone $this;
        $new->BeneficiaryName = $BeneficiaryName;

        return $new;
    }

    /**
     * @return string
     */
    public function getBeneficiaryPhone()
    {
        return $this->BeneficiaryPhone;
    }

    /**
     * @param string $BeneficiaryPhone
     * @return Transaction
     */
    public function withBeneficiaryPhone($BeneficiaryPhone)
    {
        $new = clone $this;
        $new->BeneficiaryPhone = $BeneficiaryPhone;

        return $new;
    }

    /**
     * @return string
     */
    public function getContractDate()
    {
        return $this->ContractDate;
    }

    /**
     * @param string $ContractDate
     * @return Transaction
     */
    public function withContractDate($ContractDate)
    {
        $new = clone $this;
        $new->ContractDate = $ContractDate;

        return $new;
    }

    /**
     * @return string
     */
    public function getContractNo()
    {
        return $this->ContractNo;
    }

    /**
     * @param string $ContractNo
     * @return Transaction
     */
    public function withContractNo($ContractNo)
    {
        $new = clone $this;
        $new->ContractNo = $ContractNo;

        return $new;
    }

    /**
     * @return string
     */
    public function getDebitAccount()
    {
        return $this->DebitAccount;
    }

    /**
     * @param string $DebitAccount
     * @return Transaction
     */
    public function withDebitAccount($DebitAccount)
    {
        $new = clone $this;
        $new->DebitAccount = $DebitAccount;

        return $new;
    }

    /**
     * @return string
     */
    public function getDebitAccountName()
    {
        return $this->DebitAccountName;
    }

    /**
     * @param string $DebitAccountName
     * @return Transaction
     */
    public function withDebitAccountName($DebitAccountName)
    {
        $new = clone $this;
        $new->DebitAccountName = $DebitAccountName;

        return $new;
    }

    /**
     * @return string
     */
    public function getDebitCurrency()
    {
        return $this->DebitCurrency;
    }

    /**
     * @param string $DebitCurrency
     * @return Transaction
     */
    public function withDebitCurrency($DebitCurrency)
    {
        $new = clone $this;
        $new->DebitCurrency = $DebitCurrency;

        return $new;
    }

    /**
     * @return string
     */
    public function getInvoiceNumber()
    {
        return $this->InvoiceNumber;
    }

    /**
     * @param string $InvoiceNumber
     * @return Transaction
     */
    public function withInvoiceNumber($InvoiceNumber)
    {
        $new = clone $this;
        $new->InvoiceNumber = $InvoiceNumber;

        return $new;
    }

    /**
     * @return string
     */
    public function getPaymentCurrency()
    {
        return $this->PaymentCurrency;
    }

    /**
     * @param string $PaymentCurrency
     * @return Transaction
     */
    public function withPaymentCurrency($PaymentCurrency)
    {
        $new = clone $this;
        $new->PaymentCurrency = $PaymentCurrency;

        return $new;
    }

    /**
     * @return string
     */
    public function getPaymentMethod()
    {
        return $this->PaymentMethod;
    }

    /**
     * @param string $PaymentMethod
     * @return Transaction
     */
    public function withPaymentMethod($PaymentMethod)
    {
        $new = clone $this;
        $new->PaymentMethod = $PaymentMethod;

        return $new;
    }

    /**
     * @return string
     */
    public function getPaymentType()
    {
        return $this->PaymentType;
    }

    /**
     * @param string $PaymentType
     * @return Transaction
     */
    public function withPaymentType($PaymentType)
    {
        $new = clone $this;
        $new->PaymentType = $PaymentType;

        return $new;
    }

    /**
     * @return string
     */
    public function getPayment_Due_Date()
    {
        return $this->Payment_Due_Date;
    }

    /**
     * @param string $Payment_Due_Date
     * @return Transaction
     */
    public function withPayment_Due_Date($Payment_Due_Date)
    {
        $new = clone $this;
        $new->Payment_Due_Date = $Payment_Due_Date;

        return $new;
    }

    /**
     * @return string
     */
    public function getTransactionRef()
    {
        return $this->TransactionRef;
    }

    /**
     * @param string $TransactionRef
     * @return Transaction
     */
    public function withTransactionRef($TransactionRef)
    {
        $new = clone $this;
        $new->TransactionRef = $TransactionRef;

        return $new;
    }
}

