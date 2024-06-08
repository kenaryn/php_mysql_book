<?php

declare(strict_types=1);

class Account
{
  public ?int $number = null;
  public ?string $type = null;
  public ?float $balance = null;

  public function deposit(float $amount): float
  {
    return 0.0;
  }

  public function withdraw(float $amount): float
  {
    return 0.0;
  }
}
