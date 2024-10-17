<?php

    function getServiceById(PDO $pdo, int $id) {
        $query = $pdo->prepare("SELECT * FROM services WHERE id = :id");
        $query->bindParam(':id', $id, PDO::PARAM_INT);
        $query->execute();
        return $query->fetch();
    }
        
    function insertImageServ(string|null $image) {
            if ($image === null) {
                return _ASSETS_IMG_PATH_SERV.'_default.jpg';
            } else {
                return _ASSETS_IMG_PATH_SERV.$image;
            }
        }

    function getServices(PDO $pdo) {
        $sql = 'SELECT * FROM services ORDER BY id ASC';
        $query = $pdo->prepare($sql);
        $query->execute();
        return $query->fetchAll();
    }