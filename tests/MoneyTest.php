<?php
declare(strict_types = 1);

use src\Dollar;
use PHPUnit\Framework\TestCase;

class MoneyTest extends TestCase
{
  public function testMultiplication(): void
  {
    $five = new Dollar(5);
    $product = $five->times(2);
    $five->times(2);
    $this->assertSame(10, $product->amount);

    $product = $five->times(3);
    $this->assertSame(15, $product->amount);
  }

  public function testEquality(): void
  {
    $this->assertTrue((new Dollar(5))->equals(new Dollar(5)));
    $this->assertFalse((new Dollar(5))->equals(new Dollar(6)));
  }
}
