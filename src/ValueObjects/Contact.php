<?php

declare(strict_types=1);

namespace Sonnenglas\MyDHL\ValueObjects;

use Sonnenglas\MyDHL\Exceptions\InvalidAddressException;

class Contact
{
    /**
     * @param string $phone
     * @param string $companyName
     * @param string $fullName
     * @param string $email
     * @param string $mobilePhone
     */
    public function __construct(
         string $phone,
         string $companyName,
         string $fullName,
         string $email = '',
         string $mobilePhone = ''
    ) {
        $this->phone = $phone;
        $this->companyName = $companyName;
        $this->fullName = $fullName;
        $this->email = $email;
        $this->mobilePhone = $mobilePhone;
    }

    /**
     * @return string
     */
    public function getPhone(): string
    {
        return $this->phone;
    }

    /**
     * @return string
     */
    public function getCompanyName(): string
    {
        return $this->companyName;
    }

    /**
     * @return string
     */
    public function getFullName(): string
    {
        return $this->fullName;
    }

    /**
     * @return string
     */
    public function getMobilePhone(): string
    {
        return $this->mobilePhone;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function getAsArray(): array
    {
        $result = [
            'phone' => $this->phone,
            'companyName' => $this->companyName,
            'fullName' => $this->fullName,
        ];

        if ($this->email !== '') {
            $result['email'] = $this->email;
        }

        if ($this->mobilePhone !== '') {
            $result['mobilePhone'] = $this->mobilePhone;
        }

        return $result;
    }
}
