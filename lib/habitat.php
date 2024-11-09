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

    function getAbriAnimals(PDO $pdo): array
{
    $sql = 'SELECT * FROM animals 
    JOIN abris ON abris.id =animals.id_abris';
    $query=$pdo->prepare($sql);
    $query->execute();
    return $query->fetchAll(PDO ::FETCH_ASSOC);
}