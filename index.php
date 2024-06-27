<?php

    // abstract class Customer {
    //     private $id;
    //     private $name;
    //     protected $email;
    //     private $balance;
        
    //     public function __construct($id, $name, $email, $balance){
    //         $this->id = $id;
    //         $this->name = $name;
    //         $this->email = $email;
    //         $this->balance = $balance;
    //     }

    //     abstract public function getEmail();

    // }


    // abstract method must be in an abstract class.

    
    // $customer = new Customer(1, "Dave", "dave@gmail.com", 0);


    //echo $customer->getEmail();

    // class Subscriber extends Customer{
    //     public $plan;

    //     public function __construct($id, $name, $email, $balance, $plan){
    //         parent::__construct($id, $name, $email, $balance);
    //         $this->plan = $plan;
    //     }

    //     public function getEmail(){
    //         return $this->email;
    //     }
    // }

    // $subscriber = new Subscriber(1, "Dave", "dave@gmail.com", 0, 'Pro');

    // echo $subscriber->getEmail();


    class User{
        public $username;
        public $password;
        public static $passwordLength = 5;

        public static function getPasswordLength(){
            return self::$passwordLength;
        }
    }

    echo User::getPasswordLength();

?>