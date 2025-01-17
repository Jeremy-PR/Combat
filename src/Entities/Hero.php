<?php

class Hero
{
    private int $id;
    private string $name;
    private int $life;
    private int $attaque;
    private int $defense;
    private string $image;


    public function __construct(int $id, string $name)
    {
        $this->id = $id;
        $this->name = $name;
        $this->life = 100;
        $this->attaque = 20;
        $this->defense = 15;
        $this->image = "../public/assets/img/Franklin.png";

    
    
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

   
    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }


    public function getLife(): int
    {
        return $this->life;
    }

    public function setLife(int $life): void
    {
        $this->life = $life;
    }


    public function getAttaque(): int
    {
        return $this->attaque;
    }

    public function setAttaque(int $attaque): void
    {
        $this->attaque = $attaque;
    }

   
    public function getDefense(): int
    {
        return $this->defense;
    }

    public function setDefense(int $defense): void
    {
        $this->defense = $defense;
    }

  
    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(?string $image): void
    {
        $this->image = $image;
    }
}
