  <?php
  
  class Monster {
    private string $name;
    private int $life;
    private int $attack;
    private int $defense;
    private string $image;

    public function __construct() {
    
        $this->name = "BugsBunny";
        $this->life = 100;
        $this->attack = 30;
        $this->defense = 20;
        $this->image = ""; 
    }

    // Getters et setters
    public function getName(): string {
        return $this->name;
    }

    public function getLife(): int {
        return $this->life;
    }

    public function setLife(int $life): void {
        $this->life = $life;
    }

    public function getAttack(): int {
        return $this->attack;
    }

    public function getDefense(): int {
        return $this->defense;
    }

    public function getImage(): string {
        return $this->image;
    }
}
