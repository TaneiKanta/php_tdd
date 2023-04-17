<?php
declare(strict_types=1);

namespace src;

interface Expression
{
  public function reduce(Bank $bank, string $to): Money;
  public function plus(Expression $addend): Expression;
<<<<<<< HEAD
  public function times(int $multiplier): Expression;
=======
  public function times(int $multiplier): Expression
>>>>>>> main
}
