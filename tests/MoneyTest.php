<?php
declare(strict_types = 1);

use PHPUnit\Framework\TestCase;

class MoneyTest extends TestCase
{
  public function testMultiplication(): void
  {
    $doller = new Doller(5);
    $doller->times(2);

    $this->assertSame(10, $doller->amount);
  }
}
