<?php

namespace HMD\Commands;

class RegisterCommand
{
    public $first_name;
    public $last_name;
    public $email;
    public $password;
    public $address;
    public $city;
    public $state;
    public $country;
    public $zip_code;

    function __construct($first_name, $last_name, $email, $password, $address, $city, $state, $country = 'USA', $zip_code)
    {
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->email = $email;
        $this->password = $password;
        $this->address = $address;
        $this->city = $city;
        $this->state = $state;
        $this->country = $country;
        $this->zip_code = $zip_code;
    }
}
