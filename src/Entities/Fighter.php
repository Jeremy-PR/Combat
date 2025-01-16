<?php


class Fighter
{
    private int $id;
    private string $fightername;
    private string $image;
    
    
    public function __construct(int $id, string $fightername, string $image)
    {
        $this->id = $id;
        $this->fightername = $fightername;
        $this->image = $image;
    }

    public function getImage(): string
    {
        return $this->image;
    }

    public function setImage(string $image): void
    {
        $this->image = $image;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getFightername(): string
    {
        return $this->fightername;
    }

    public function setFightername(string $fightername): void
    {
        $this->fightername = $fightername;
    }
}