<?php

    function getHabitatById(PDO $pdo, int $id) {
        $query = $pdo->prepare("SELECT * FROM abris WHERE id = :id");
        $query->bindParam(':id', $id, PDO::PARAM_INT);
        $query->execute();
        return $query->fetch();
    }
        
    function insertImageHab(string|null $image) {
            if ($image === null) {
                return _ASSETS_IMG_PATH_HAB.'habitat_default.jpg';
            } else {
                return _ASSETS_IMG_PATH_HAB.$image;
            }
        }

    function getHabitats(PDO $pdo) {
        $sql = 'SELECT * FROM abris ORDER BY id ASC';
        $query = $pdo->prepare($sql);
        $query->execute();
        return $query->fetchAll();
    }