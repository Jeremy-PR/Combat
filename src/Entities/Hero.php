<?php

class Hero
{
    private int $id;
    private string $name;
    private int $life;
    private string $image;

    public function __construct(int $id, string $name)
    {
        $this->id = $id;
        $this->name = $name;
        $this->life = 100;  // Vie de départ
        $this->image = "../public/assets/img/Franklin.png";  // Image par défaut
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

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(?string $image): void
    {
        $this->image = $image;
    }

   
    public function hit(Monster $monster): int
    {
        $damage = rand(10, 20); 
        $monster->setLife($monster->getLife() - $damage);  
        return $damage;
    }


    public function fight(Monster $monster): array
    {
        $combatResults = [];
        

        while ($this->getLife() > 0 && $monster->getLife() > 0) {
            
           
            $damageToMonster = $this->hit($monster);
            $combatResults[] = $this->getName() . " attaque le monstre et lui inflige " . $damageToMonster . " de dégâts.";

          
            if ($monster->getLife() <= 0) {
                $combatResults[] = $monster->getName() . " a été vaincu !";
                break;
            }
            
           
            $damageToHero = $monster->hit($this);  
            $combatResults[] = $monster->getName() . " attaque " . $this->getName() . " et lui inflige " . $damageToHero . " de dégâts.";
            
          
            if ($this->getLife() <= 0) {
                $combatResults[] = $this->getName() . " a été vaincu !";
                break;
            }
        }

        return $combatResults;
    }
}

?>
