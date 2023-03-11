<?php
declare(strict_types=1);

namespace src;

class Dollar
{
  /** @var int  */
  public int $amount = 10;

  public function __construct(int $amount)
  {
//    $this->amount = $amount;
  }

  public function times(int $multiplier): void
  {

  }
}
