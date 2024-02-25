<?php

namespace BrokeYourBike\ZenithBankCIB\Gen\Type;

class User
{
    private string $CompanyCode;
    private string $Password;
    private string $UserID;

    public function getCompanyCode(): string
    {
        return $this->CompanyCode;
    }

    public function withCompanyCode(string $CompanyCode): User
    {
        $new = clone $this;
        $new->CompanyCode = $CompanyCode;

        return $new;
    }

    public function getPassword(): string
    {
        return $this->Password;
    }

    public function withPassword(string $Password): User
    {
        $new = clone $this;
        $new->Password = $Password;

        return $new;
    }

    public function getUserID(): string
    {
        return $this->UserID;
    }

    public function withUserID(string $UserID): User
    {
        $new = clone $this;
        $new->UserID = $UserID;

        return $new;
    }
}

