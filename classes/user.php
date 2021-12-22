<?php

class User
{
    public $name;
    public $lastname;
    public $age;
    public $userName;
    public $email;
    protected $password;
    public $cart;

    public function __construct(string $name, string $lastname, int $age, string $userName, string $email, string $password)
    {
        $this->name = $name;
        $this->lastname = $lastname;
        $this->age = $age;
        $this->userName = $userName;
        $this->email = $email;
        $this->password = $password;
    }

    public function getName()
    {
        return $this->name;
    }
}