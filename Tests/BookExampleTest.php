<?php
namespace PHPUnit;
use PHPUnit\Framework\TestCase;
include "Book Example/PaperBook.php";
class  BookExampleTest extends TestCase{
public function testCanTurnPageOnBook(){
    $book = new PaperBook();
    $book->open();
    $book->turnPage();
    $this->assertSame(2,$book->getPage());
}

}