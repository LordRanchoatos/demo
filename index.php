<?php

    class Customer {
        private $id;
        private $name;
        protected $email;
        private $balance;
        
        public function __construct($id, $name, $email, $balance){
            $this->id = $id;
            $this->name = $name;
            $this->email = $email;
            $this->balance = $balance;
        }

        public function getEmail(){
            return $this->email;
        }

    }


    //$customer = new Customer(1, "Dave", "dave@gmail.com", 0);


    //echo $customer->getEmail();

    class Subscriber extends Customer{
        public $plan;

        public function __construct($id, $name, $email, $balance, $plan){
            parent::__construct($id, $name, $email, $balance);
            $this->plan = $plan;
        }

        // public function getEmail(){
        //     return $this->email;
        // }
    }

    $subscriber = new Subscriber(1, "Dave", "dave@gmail.com", 0, 'Pro');

    echo $subscriber->getEmail();

?>