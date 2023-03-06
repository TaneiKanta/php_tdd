<?php
declare(strict_types = 1);

namespace Taneikanta\PhpTdd\Money;

use PHPUnit\Framework\TestCase;

class MoneyTest extends TestCase
{
  public function testMultiplication(): void
  {
    $dollor = new Doller(5);
    $dollor->times(2);

    $this->assertSame(10, $dollor->amount);
  }
}