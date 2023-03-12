<?php
declare(strict_types=1);

namespace src;

class Franc
{
  /** @var int  */
  private int $amount;

  public function __construct(int $amount)
  {
    $this->amount = $amount;
  }

  public function times(int $multiplier): self
  {
    return new self($this->amount * $multiplier);
  }

  public function equals(Franc $franc): bool
  {
    return $this->amount === $franc->amount;
  }
}