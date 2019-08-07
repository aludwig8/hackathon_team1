<?php


class Costumer
{
    private $costumerId;
    private $loginUser;
    private $loginPassword;
    private $email;
    private $firstName;
    private $lastName;
    private $street;
    private $city;
    private $zip;
    private $country;

    /**
     * Costumer constructor.
     * @param $costumerId
     * @param $loginUser
     * @param $loginPassword
     * @param $email
     * @param $firstName
     * @param $lastName
     * @param $street
     * @param $city
     * @param $zip
     * @param $country
     */
    public function __construct($costumerId, $loginUser, $loginPassword, $email, $firstName, $lastName, $street, $city, $zip, $country)
    {
        $this->costumerId = $costumerId;
        $this->loginUser = $loginUser;
        $this->loginPassword = $loginPassword;
        $this->email = $email;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->street = $street;
        $this->city = $city;
        $this->zip = $zip;
        $this->country = $country;
    }

    public function getCostumerId()
    {
        return $this->costumerId;
    }

    public function setCostumerId($costumerId)
    {
        $this->costumerId = $costumerId;
    }

    public function getLoginUser()
    {
        return $this->loginUser;
    }

    public function setLoginUser($loginUser)
    {
        $this->loginUser = $loginUser;
    }

    public function getLoginPassword()
    {
        return $this->loginPassword;
    }

    public function setLoginPassword($loginPassword)
    {
        $this->loginPassword = $loginPassword;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getFirstName()
    {
        return $this->firstName;
    }

    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    }

    public function getLastName()
    {
        return $this->lastName;
    }

    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    }

    public function getStreet()
    {
        return $this->street;
    }

    public function setStreet($street)
    {
        $this->street = $street;
    }

    public function getCity()
    {
        return $this->city;
    }

    public function setCity($city)
    {
        $this->city = $city;
    }

    public function getZip()
    {
        return $this->zip;
    }

    public function setZip($zip)
    {
        $this->zip = $zip;
    }

    public function getCountry()
    {
        return $this->country;
    }

    public function setCountry($country)
    {
        $this->country = $country;
    }

}