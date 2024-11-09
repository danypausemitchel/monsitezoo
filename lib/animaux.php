<?php
  function getAnimaux(PDO $pdo) {
    $sql = 'SELECT * FROM animals ORDER BY id ASC';
    $query = $pdo->prepare($sql);
    $query->execute();
    return $query->fetchAll();
}

function insertImageAnimaux(string|null $image) {
           
  return _ASSETS_IMG_PATH_ANIMAL.$image;
}