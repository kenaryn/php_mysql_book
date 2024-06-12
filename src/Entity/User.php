<?php
declare(strict_types=1);
namespace App\Entity;

class User
{
   public function __construct(protected string|null $name = null,
   protected int|null $age = null, protected bool|null $active = null)
   {
      $this->name = $name;
      $this->age = $age;
      $this->active = $active;
   }

   public function getName(): string
   {
      return $this->name;
   }

   public function setName(string $name): void
   {
      $this->name = $name;
   }

   public function getAge(): int
   {
      return $this->age;
   }

   public function setAge(int $age): void
   {
      $this->age = $age;
   }

   public function getActive(): bool
   {
      return $this->active;
   }
   
   public function setActive(bool $active): void
   {
      $this->active = $active;
   }
}
?>