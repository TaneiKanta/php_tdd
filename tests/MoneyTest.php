<?php
declare(strict_types = 1);

use PHPUnit\Framework\TestCase;

class MoneyTest extends TestCase
{
  public function testMultiplication(): void
  {
    $dollar = new Dollar(5);
    $dollar->times(2);

    $this->assertSame(10, $dollar->amount);
  }
}
