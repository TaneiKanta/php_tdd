<?php
declare(strict_types=1);

namespace src;

class Money implements Expression
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

  public function times(int $multiplier): Expression
  {
    return new self($this->amount * $multiplier, $this->currency);
  }

  public function plus(Expression $addend): Expression
  {
    return new Sum($this, $addend);
  }

  public function reduce(Bank $bank, string $to): self
  {
    $rate = $bank->rate($this->currency, $to);
    return new Money(($this->amount / $rate), $to);
  }

  public function amount(): int
  {
    return $this->amount;
  }

  public function currency(): string
  {
    return $this->currency;
  }

  public function equals(Money $money): bool
  {
    return $this->amount === $money->amount
      && $this->currency() === $money->currency();
  }

  public function toString(): string
  {
    return $this->amount . " " . $this->currency;
  }

  public static function dollar(int $amount): Expression
  {
    return new self($amount, "USD");
  }

  public static function franc(int $amount): Expression
  {
    return new self($amount, "CHF");
  }
}
