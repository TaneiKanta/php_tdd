<?php
declare(strict_types=1);

namespace src;

class Bank
{
  public function reduce(Expression $source, string $to): Money
  {
    return $source->reduce($this, $to);
  }

  public function addRate()
  {
  }

  public function rate(string $from, string $to): int
  {
    $rate = 1;
    if ($from === "CHF" && $to === "USD") {
      $rate = 2;
    }
    return $rate;
  }
}
