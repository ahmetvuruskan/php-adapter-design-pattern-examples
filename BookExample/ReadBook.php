<?php
include "PaperBook.php";
include "Kindle.php";
include "EbookAdapter.php";
function read(Book $book)
{
    $book->open();
    $book->getPage();
    $book->turnPage();
    $book->getPage();
}

read(new PaperBook());
read(new EbookAdapter(new Kindle()));

