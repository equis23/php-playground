<?php
use PHPUnit\Framework\TestCase;
include 'src/Operations.php';

class OperationTest extends TestCase {

  private $op;

  public function setUp():void {
    $this->op = new Operations();
  }

  public function testSumTwoValues():void {
    $this->assertEquals(7, $this->op->sum(2, 5));
  }
}

?>