<?php

echo"hello Artem" . '<br />';

class Artem {

    private $age;
    private $name;

}

function a() {
    try {
        $a = new Artem();

        var_dump($a);
    } catch (ErrorException $e) {
        echo 'Hello'; //$e->getMessage();
    }
}

echo a();

class ShopProduct {

//public $numPages;
//public $playLengh;
    public $discount = 0;
    public $title;
    public $producerMainName;
    public $producerFirstName;
    public $price;

    function __construct($title, $firstName, $MainName, $price) {
        $this->title = $title;
        $this->producerFirstName = $firstName;
        $this->producerMainName = $MainName;
        $this->price = $price;
        //$this->numPages                        = $numPages;
        //$this->playLengh                       = $playLengh;
    }

    function getProducer() {
        return "{$this->producerFirstName }" . " {$this->producerMainName}";
    }

    function getSummaryLine() {
        $base = "{$this->title}( {$this->producerMainName},";
        $base .= " {$this->producerFirstName})";
        return $base;
    }

    function setDiscount($num) {
        $this->discount = $num;
    }

}

class CDproduct extends ShopProduct {

    public $playLenght;

    function __construct($title, $firstName, $MainName, $price, $playLenght) {
        parent:: __construct($title, $firstName, $MainName, $price);

        $this->playLenght = $playLenght;
    }

    function getPlayLenght() {
        return $this->playLengh;
    }

    function getSummaryLine() {
        $base = parent::getSummaryLine();
        $base .= "song time: {$this->playLenght}";
        return $base;
    }
    
}

class BookProduct extends ShopProduct {

    public $numPages;

    function __construct($title, $firstName, $MainName, $price, $numPages) {
        parent:: __construct($title, $firstName, $MainName, $price);

        $this->numPages = $numPages;
    }

    function getNumberOfPages() {
        return $this->numPages;
    }

    function getSummaryLine() {
        $base = parent::getSummaryLine();
        $base .= " pages: {$this->numPages}";
        return $base;
    }

}

$product = new BookProduct("kompositor", "Scherbyk", "Artem", "10", "55");
print "{$product->getSummaryLine()}<br />";

//$product1 = new ShopProduct("strugtu1","Scherbyk1","Artem1","10 1");

class ShopProductWriter {

    private $products = array();

    public function add_product(ShopProduct $book_product) {
        $this->products[] = $book_product;
    }

    public function write() {
        $str = "";
        foreach ($this->products as $book_product) {
            $str = "{$book_product->title}: ";
            $str .= $book_product->getProducer();
            $str .= " ({$book_product->numPages}) pages.\n";
        }
        print $str;
    }

}

$product = new BookProduct("Heart of a Dog", "Michael", "Bulgakov", 5.99, 67);
$write = new shopProductWriter();
$write->add_product($product);
$write->write();
?>