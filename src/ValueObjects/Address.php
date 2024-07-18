<?php

declare(strict_types=1);

namespace Sonnenglas\MyDHL\ValueObjects;

use Sonnenglas\MyDHL\Exceptions\InvalidAddressException;

class Address
{
    /**
     * @throws InvalidAddressException
     */
    public function __construct(
         string $addressLine1,
         string $countryCode,
         string $postalCode,
         string $cityName,
          $addressLine2 = '',
         string $addressLine3 = '',
         string $countyName = '',
         string $provinceCode = ''
    ) {
        $this->countryCode = $countryCode;
        $this->countryCode = strtoupper($this->countryCode);
        $this->addressLine1 = $addressLine1;
        $this->postalCode = $postalCode;
        $this->cityName = $cityName;
        $this->addressLine2 = $addressLine2;
        $this->addressLine3 = $addressLine3;
        $this->countyName = $countyName;
        $this->provinceCode = $provinceCode;
        $this->provinceCode = $provinceCode;


        $this->validateData();
    }

    /**
     * @return string
     */
    public function getAddressLine1(): string
    {
        return $this->addressLine1;
    }

    /**
     * @return string
     */
    public function getAddressLine2(): string
    {
        return $this->addressLine2;
    }

    /**
     * @return string
     */
    public function getAddressLine3(): string
    {
        return $this->addressLine3;
    }

    /**
     * @return string
     */
    public function getCountyName(): string
    {
        return $this->countyName;
    }

    /**
     * @return string
     */
    public function getProvinceCode(): string
    {
        return $this->provinceCode;
    }

    public function getCountryCode(): string
    {
        return $this->countryCode;
    }

    public function getPostalCode(): string
    {
        return $this->postalCode;
    }

    public function getCityName(): string
    {
        return $this->cityName;
    }

    public function getAsArray(): array
    {
        $result = [
            'addressLine1' => $this->addressLine1,
            'countryCode' => $this->countryCode,
            'postalCode' => $this->postalCode,
            'cityName' => $this->cityName,
        ];

        if ($this->addressLine2 !== '') {
            $result['addressLine2'] = $this->addressLine2;
        }

        if ($this->addressLine3 !== '') {
            $result['addressLine3'] = $this->addressLine3;
        }

        if ($this->countyName !== '') {
            $result['countyName'] = $this->countyName;
        }

        if ($this->provinceCode !== '') {
            $result['provinceCode'] = $this->provinceCode;
        }

        return $result;
    }

    /**
     * @throws InvalidAddressException
     */
    protected function validateData(): void
    {
        if (strlen($this->countryCode) !== 2) {
            throw new InvalidAddressException("Country Code must be 2 characters long. Entered: {$this->countryCode}");
        }

        if (strlen($this->addressLine1) === 0) {
            throw new InvalidAddressException("Address Line1 must not be empty.");
        }

        if (strlen($this->cityName) === 0) {
            throw new InvalidAddressException("City name must not be empty.");
        }
    }
}
