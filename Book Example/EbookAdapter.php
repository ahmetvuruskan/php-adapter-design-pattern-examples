<?php
Class EbookAdapter implements Book {

    protected $ebook;

    public function __construct(Ebook $ebook)
    {
        $this->ebook = $ebook;
    }
    public function getPage()
    {
        $this->ebook->getPage();

    }
    public function open()
    {
       $this->ebook->unlock();
    }

    public function turnPage()
    {
       $this->ebook->pressNext();
    }

}