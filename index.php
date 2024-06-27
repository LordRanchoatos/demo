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


    // class User{
    //     public $username;
    //     public $password;
    //     public static $passwordLength = 5;

    //     public static function getPasswordLength(){
    //         return self::$passwordLength;
    //     }
    // }

    // echo User::getPasswordLength();


    // PHP OOP ASSIGNMENT
    // Build a simple application in PHP OOP one called Book and the other called Catalog
    // The Catalog contans an array of books instances, while the Book class handle a list of Chapters
    // So the catalog can print a list of books and also use the books can print a list of chapter, 
    // so the final code should list the books and print all the chapters per books

 
    // Book class
    class Book {
        private $title;
        private $chapters;

        public function __construct($title) {
            $this->title = $title;
            $this->chapters = [];
        }

        public function addChapter($chapter) {
            $this->chapters[] = $chapter;
        }

        public function getTitle() {
            return $this->title;
        }

        public function getChapters() {
            return $this->chapters;
        }

        public function printChapters() {
            echo "Chapters in '{$this->title}':\n";
            foreach ($this->chapters as $chapter) {
                echo "- $chapter\n";
            }
        }
    }

    // Catalog class
    class Catalog {
        private $books;

        public function __construct() {
            $this->books = [];
        }

        public function addBook(Book $book) {
            $this->books[] = $book;
        }

        public function printBooks() {
            echo "Books in Catalog:\n";
            foreach ($this->books as $book) {
                echo $book->getTitle() . "\n";
                $book->printChapters();
                echo "\n";
            }
        }
    }

    // Create some books
    $book1 = new Book("Book One");
    $book1->addChapter("Chapter 1.1");
    $book1->addChapter("Chapter 1.2");

    $book2 = new Book("Book Two");
    $book2->addChapter("Chapter 2.1");
    $book2->addChapter("Chapter 2.2");
    $book2->addChapter("Chapter 2.3");

    // Create a catalog and add books to it
    $catalog = new Catalog();
    $catalog->addBook($book1);
    $catalog->addBook($book2);

    // Print the books and their chapters
    $catalog->printBooks();

?>