<?php

class Building
{
    private $address1;
    private $address2;
    private $zip_code;
    private $city;

    public function __construct(string $address1, string $address2 = "", int $zip_code, int $city)
    {
        $this->address1 = $address1;
        $this->address2 = $address2;
        $this->zip_code = $zip_code;
        $this->city = $city;
    }
}
