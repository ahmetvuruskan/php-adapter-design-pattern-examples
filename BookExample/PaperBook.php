<?php
include "Book.php";
Class PaperBook implements Book {
    private $page=null;


    public function getPage()
    {
       echo $this->page.PHP_EOL;
        return $this->page;
    }

    public function open()
    {
        $this->page =1;
        echo "Opened book current page : ".$this->page.PHP_EOL;
    }

    public function turnPage()
    {
        $this->page++;
        echo "Turned page current page: ".$this->page.PHP_EOL;
    }
}
