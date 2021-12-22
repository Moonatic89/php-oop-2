<?php
class Premium extends User
{

    public $discount;

    function __construct($name, $lastname, $age, $userName, $email, $password, int $discount)
    {
        parent::__construct($name, $lastname, $age, $userName, $email, $password);
        $this->discount = $discount;
    }
}