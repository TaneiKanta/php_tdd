<?php
declare(strict_types = 1);

use src\Money;
use src\Dollar;
use src\Franc;
use PHPUnit\Framework\TestCase;

class MoneyTest extends TestCase
{
  public function testMultiplication(): void
  {
    $five = Money::dollar(5);
    $this->assertEquals(Money::dollar(10), $five->times(2));
    $this->assertEquals(Money::dollar(15), $five->times(3));
  }

  public function testEquality(): void
  {
    $this->assertTrue(Money::dollar(5)->equals(Money::dollar(5)));
    $this->assertFalse(Money::dollar(5)->equals(Money::dollar(6)));
    $this->assertTrue(Money::franc(5)->equals(Money::franc(5)));
    $this->assertFalse(Money::franc(5)->equals(Money::franc(6)));
    $this->assertFalse(Money::franc(5)->equals(Money::dollar(5)));
  }

  public function testFrancMultiplication(): void
  {
    $five = Money::franc(5);
    self::assertEquals(Money::franc(10), $five->times(2));
    self::assertEquals(Money::franc(15), $five->times(3));
  }

  public function testCurrency(): void
  {
    self::assertEquals("USD", Money::dollar(1)->currency());
    self::assertEquals("CHF", Money::franc(1)->currency());
  }
}
