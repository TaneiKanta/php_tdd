<?php
declare(strict_types=1);

namespace src;

class Bank
{
  public function reduce(Expression $source, string $to): Money
  {
    return $source->reduce($to);
  }
}
