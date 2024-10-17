<?php
function getAbriAnimals(PDO $pdo): array
{
    $sql = 'SELECT * FROM animals 
    JOIN abris ON abris.id =animals.id_abris';
    $query=$pdo->prepare($sql);
    $query->execute();
    return $query->fetchAll(PDO ::FETCH_ASSOC);
}
