<?php
declare(strict_types=1);

namespace src;

class Dollar
{
  /** @var int  */
  public int $amount;

  public function __construct(int $amount)
  {
    $this->amount = $amount;
  }

  public function times(int $multiplier): self
  {
    return new self($this->amount * $multiplier);
  }

  public function equals(Dollar $dollar): bool
  {
    return $this->amount === $dollar->amount;
  }
}
