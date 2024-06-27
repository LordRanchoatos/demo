<?php

    class Customer {
        public $id;
        public $name;
        public $email;
        public $balance;
        
        public function __construct(){
            echo 'this constructor Ran...';
        }
        
        public function getCustomer($name){
            $this->name = $name;
            return 'John doe';
        }

        public function __destruct(){
            echo 'the distructor ran...';
        } 


    }


    $customer = new Customer;

    echo $customer->getCustomer('dave');
?>