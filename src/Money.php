<?php
declare(strict_types=1);

namespace src;

abstract class Money
{
  /** @var int */
  protected int $amount;

  /** @var string */
  protected string $currency;

  public function __construct(int $amount, string $currency)
  {
    $this->amount = $amount;
    $this->currency = $currency;
  }

  abstract function times(int $multiplier): self;

  public function currency(): string
  {
    return $this->currency;
  }

  public function equals(Money $money): bool
  {
    return $this->amount === $money->amount
      && get_class($this) === get_class($money);
  }

  public static function dollar(int $amount): Dollar
  {
    return new Dollar($amount, "USD");
  }

  public static function franc(int $amount): Franc
  {
    return new Franc($amount, "CHF");
  }
}
