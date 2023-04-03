<?php
declare(strict_types=1);

namespace src;

interface Expression
{
  public function reduce(Bank $bank, string $to): Money;
  public function plus(Expression $addend): Expression;
}
