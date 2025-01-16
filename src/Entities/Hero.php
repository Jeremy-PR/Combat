<?php

class Hero
{

    private int $id;

    private string $name;

    private int $hp;


    public function __construct(int $id, string $name, int $hp)
    {
        $this->id = $id;
        $this->name = $name;
        $this->hp = 100;
    }




    public function getId(): int
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getHp(): int
    {
        return $this->hp;
    }
    public function setHp(int $hp): void
    {
        $this->hp = $hp;
    }
}
