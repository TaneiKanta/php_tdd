<?php
declare(strict_types=1);

namespace src;

interface Expression
{
  public function reduce(string $to): Money;
}
