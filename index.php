<?php

    class Customer {
        private $id;
        private $name;
        private $email;
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


    $customer = new Customer(1, "Dave", "dave@gmail.com", 0);


    echo $customer->getEmail();
?>