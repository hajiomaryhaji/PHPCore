<?php

declare(strict_types=1);

namespace App\Entities;

use App\Traits\HasTimestamps;
use Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\GeneratedValue;
use Doctrine\ORM\Mapping\HasLifecycleCallbacks;
use Doctrine\ORM\Mapping\Id;
use Doctrine\ORM\Mapping\Table;

#[Entity, HasLifecycleCallbacks]
#[Table('users')]
class User
{
    use HasTimestamps;

    #[Column(options: ['unsigned' => true]), Id, GeneratedValue]
    private int $id;

    #[Column(length: 80)]
    private string $name;

    #[Column(unique: true)]
    private string $email;

    #[Column]
    private string $password;

    public function getId(): int
    {
        return $this->id;
    }

    public function setName(string $name): User
    {
        $this->name = $name;

        return $this;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setEmail(string $email): User
    {
        $this->email = $email;

        return $this;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function setPassword(string $password): User
    {
        $this->password = $password;

        return $this;
    }

    public function getPassword(): string
    {
        return $this->password;
    }
}