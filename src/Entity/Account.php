<?php

declare(strict_types=1);

namespace App\Entity;

class Account
{

  public function __construct(public int|null $number = null, public ?string $type = null, protected ?float $balance = null,)
  {
    $this->number = $number;
    $this->type = $type;
    $this->balance = $balance;
  }


  public function deposit(float $amount): float
  {
    $this->balance += $amount;
    return $this->balance;
  }

  public function withdraw(float $amount): float
  {
    $this->balance -= $amount;
    return $this->balance;
  }

  public function getBalance(): float
  {
    return $this->balance;
  }
}
