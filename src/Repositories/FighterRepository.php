<?php

class FighterRepository extends AbstractRepository {

    final public function construct()
    {
        parent::__construct();
    }

public function findAll(): array {
    $stmt = $this->pdo->query("SELECT * FROM fighter");
    $fightersData = $stmt->fetchAll(PDO::FETCH_ASSOC);

    $fighters = [];
    foreach ($fightersData as $fighterData) {
        $fighters[] = new Fighter($fighterData['id'], $fighterData['name'], $fighterData['life']);
    }

    return $fighters;
}

public function findById(int $id): ?Fighter {
    $stmt = $this->pdo->prepare("SELECT * FROM fighter WHERE id = :id");
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);
    $stmt->execute();

    $fighterData = $stmt->fetch();
    if ($fighterData) {
        return new Fighter($fighterData['id'], $fighterData['name'], $fighterData['life']);
    }
    return null;
}
}
