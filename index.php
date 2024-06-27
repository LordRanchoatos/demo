<?php

    class Customer {
        public $id;
        public $name;
        public $email;
        public $balance;

        public function getCustomer($name){
            $this->name = $name;
            return $this->name;
        }
    }

    $customer = new Customer;

    echo $customer->getCustomer('dave');
?>