<?php

namespace BrokeYourBike\ZenithBankCIB\Gen\Type;

class User
{
    /**
     * @var null | string
     */
    private ?string $CompanyCode;

    /**
     * @var null | string
     */
    private ?string $Password;

    /**
     * @var null | string
     */
    private ?string $UserID;

    /**
     * @return null | string
     */
    public function getCompanyCode() : ?string
    {
        return $this->CompanyCode;
    }

    /**
     * @param null | string $CompanyCode
     * @return static
     */
    public function withCompanyCode(?string $CompanyCode) : static
    {
        $new = clone $this;
        $new->CompanyCode = $CompanyCode;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getPassword() : ?string
    {
        return $this->Password;
    }

    /**
     * @param null | string $Password
     * @return static
     */
    public function withPassword(?string $Password) : static
    {
        $new = clone $this;
        $new->Password = $Password;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getUserID() : ?string
    {
        return $this->UserID;
    }

    /**
     * @param null | string $UserID
     * @return static
     */
    public function withUserID(?string $UserID) : static
    {
        $new = clone $this;
        $new->UserID = $UserID;

        return $new;
    }
}

