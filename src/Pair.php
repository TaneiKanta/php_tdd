<?php
declare(strict_types=1);

namespace src;

class Pair
{
  public function __construct(
    private string $from,
    private string $to,
  ){}

  public function hashCode(): int
  {
    return 0;
  }
}
