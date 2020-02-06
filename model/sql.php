<?php
function Connect(){
    static $myDb = null;
    $dbName = "portfolio";
    $dbUser = "portfolio";
    $dbPass = "Super2020";
    if ($myDb === null) {
        try {
            $myDb = new PDO(
                "mysql:host=localhost;dbname=$dbName;charset=utf8",
                $dbUser,
                $dbPass,
                array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_EMULATE_PREPARES => false)
            );
        } catch (Exception $e) {
            die("Impossible de se connecter à la base ". $e->getMessage());
        }
    }
    return $myDb;
}
function Insert($sql, $data){
    try{
        $query = Connect()->prepare($sql);

        $query->execute($data);
    }
    catch (Exception $e) {
        die("Impossible de se connecter à la base ". $e->getMessage());
    }
}

function Select($sql, $data){
    try{
        $query = Connect()->prepare($sql);

        $query->execute($data);
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }
    catch (Exception $e) {
        die("Impossible de se connecter à la base ". $e->getMessage());
    }
}
