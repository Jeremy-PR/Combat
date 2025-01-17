  <?php
  
  class Monster {
    private string $name;
    private int $life;
    
    private string $image;

    public function __construct() {
    
        $this->name = "BugsBunny";
        $this->life = 100;
        $this->image = ""; 
    }

   
    public function getName(): string {
        return $this->name;
    }

    public function getLife(): int {
        return $this->life;
    }

    public function setLife(int $life): void {
        $this->life = $life;
    }


    public function getImage(): string {
        return $this->image;
    }

    public function hit (Hero $hero): int{

        $damage = rand(10,15) ;       
          
          $hero -> setLife($hero -> getLife()- $damage);
  
          return $damage;
          }
    
}
