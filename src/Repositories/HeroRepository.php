<?php


class HeroRepository extends AbstractRepository
{
    final public function construct()
    {
        parent::__construct();
    }

    public function findByName(string $name): ?Hero
    {
        $stmt = $this->pdo->prepare("SELECT * FROM hero WHERE name = :name");
        $stmt->bindParam(":name", $name, PDO::PARAM_STR);
        $stmt->execute();


        $heroData = $stmt->fetch();

        if (!$heroData) {
            // Si aucun héros trouvé, créer un héro par défaut
            // Vous pouvez définir une valeur par défaut pour 'life' comme 100
            return new Hero(0, $name, 100);
        }
        return HeroMapper::mapToObject($heroData);
    }


    public function createHero(Hero $hero): void
    {
        $stmt = $this->pdo->prepare("INSERT INTO hero (name, life) VALUES (:name, :life)");
        $stmt->execute([
            ':name' => $hero->getName(),
            ':life' => $hero->getLife()
        ]);
    }
      }


