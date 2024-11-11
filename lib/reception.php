<?php

    function insertImageHab(string|null $image) {
         return _ASSETS_IMG_PATH_HAB.$image;
     }
        

    function getHabitats(PDO $pdo) {
        $sql = 'SELECT * FROM abris ORDER BY id ASC';
        $query = $pdo->prepare($sql);
        $query->execute();
        return $query->fetchAll();
    }

  function getAnimaux(PDO $pdo) {
    $sql = 'SELECT * FROM animals ORDER BY id ASC';
    $query = $pdo->prepare($sql);
    $query->execute();
    return $query->fetchAll();
}

function insertImageAnimaux(string|null $image) {
           
  return _ASSETS_IMG_PATH_ANIMAL.$image;
}

    function getAbriAnimals(PDO $pdo): array
{
    $sql = 'SELECT animals.*, abris.name as abri_name FROM animals 
    JOIN abris ON abris.id =animals.id_abris';
    $query=$pdo->prepare($sql);
    $query->execute();
    return $query->fetchAll(PDO ::FETCH_ASSOC);
}

function getAbrisdId(PDO $pdo, int $id) {
    $query=$pdo->prepare('SELECT * FROM abris WHERE id = :id');
    $query->bindParam(':id', $id, PDO::PARAM_INT);
    $query->execute();
    return $query->fetch();
}

function getRecipeById(PDO $pdo, int $id) {
    $query = $pdo->prepare("SELECT * FROM recipes WHERE id = :id");
    $query->bindParam(':id', $id, PDO::PARAM_INT);
    $query->execute();
    return $query->fetch();
}