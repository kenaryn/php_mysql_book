<?php
declare(strict_types=1);

namespace App\Entity;

class AccountNumber
{
  public function __construct(public int|null $accountNumber = null, public int|null $routingNumber = null)
  {
    $this->accountNumber = $accountNumber;
    $this->routingNumber = $routingNumber;
  }
}
?>