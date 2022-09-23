<?php

include "../BookExample/PaperBook.php";
include "../BookExample/EbookAdapter.php";
include "../BookExample/Kindle.php";
class  BookExampleTest extends \PHPUnit\Framework\TestCase {
public function testCanTurnPageOnBook(){
    $book = new PaperBook();
    $book->open();
    $book->turnPage();
    $this->assertSame(2,$book->getPage());
}
public function testCanTurnPageOnKindleLikeANormalBook(){
    $kindle  = new Kindle();
    $book = new EbookAdapter($kindle);
    $book->open();
    $book->turnPage();
    $this->assertSame(2,$book->getPage());
}

}