<?php
declare(strict_types=1);

namespace src;

class Money
{
  /** @var int  */
  protected int $amount;

  public function equals(Money $money): bool
  {
    return $this->amount === $money->amount
      && get_class($this) === get_class($money);
  }
}
