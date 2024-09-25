<?php

    require_once __DIR__. 'Models/connection.php';

    function getAccount($id){

        $db = dbConnect();
        $sql = 'SELECT * FROM compte WHERE id = :id';
        $req = $db->prepare($sql);
        $req->bindParam(':id', $id, PDO::PARAM_INT);
        $req->execute();
        $result = $req->fetch();
        $req->closeCursor();
        return $result;

    }

    
?>