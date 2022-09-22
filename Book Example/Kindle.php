<?php
include "Ebook.php";
class Kindle implements Ebook {
    private  $totalPages=100;
    private $page =1;

    public function __construct()
    {
        echo "Starting Kindle....".PHP_EOL;
    }


    public function pressNext()
    {
        $this->page++;
        echo "Page changed on kindle next page is ". $this->page.PHP_EOL;
    }

    public function getPage()
    {
        echo "Avelible Pages : ".$this->page ." to ".$this->totalPages.PHP_EOL;
    }

    public function unlock()
    {
        echo "Unlocked".PHP_EOL;
    }
}