<?php



   /**
   * @var Fighter $fighter
   */
 
   class FighterRepository extends AbstractRepository
   {
       public function findAll(): array
       {
           $stmt = $this->pdo->query("SELECT * FROM fighter");
           $fightersData = $stmt->fetchAll(PDO::FETCH_ASSOC);
   
           $fighters = [];
           foreach ($fightersData as $data) {
               $fighters[] = FighterMapper::mapToObject($data); 
           }
   
           return $fighters;
       }
   }
   












