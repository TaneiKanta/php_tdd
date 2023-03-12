<?php
declare(strict_types=1);

namespace src;

abstract class Money
{
  /** @var int  */
  protected int $amount;

  abstract function times(int $multiplier): self;

  public function equals(Money $money): bool
  {
    return $this->amount === $money->amount
      && get_class($this) === get_class($money);
  }

  public static function dollar(int $amount): Dollar
  {
    return new Dollar($amount);
  }

  public static function franc(int $amount): Franc
  {
    return new Franc($amount);
  }
}
