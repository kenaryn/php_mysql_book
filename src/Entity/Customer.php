<?php
declare(strict_types=1);
namespace App\Entity;

class Customer
{
   public function __construct(protected string|null $forename = null, protected string|null $surname = null, protected string|null $email = null, protected string|null $password = null, public array|null $accounts = [],)
   {
      $this->forename = $forename;
      $this->surname = $surname;
      $this->email = $email;
      $this->password = $password;
      $this->accounts = $accounts;
   }

   public function getFullName(): string
   {
      return $this->forename . ' ' . $this->surname;
   }

   public function setForename(string $forename): void
   {
      $this->forename = $forename;
   }

   public function setSurname(string $surname): void
   {
      $this->surname = $surname;
   }

   public function getEmail(): string
   {
      return $this->email;
   }
}
?>