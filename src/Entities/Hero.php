<?php

class Hero
{

    private int $id;

    private string $name;

    private int $life;


    public function __construct(int $id, string $name)
    {
        $this->id = $id;
        $this->name = $name;
        $this->life = 100;
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

    public function getLife(): int
    {
        return $this->life;
    }
    public function setLife(int $life): void
    {
        $this->life = $life;
    }
}
