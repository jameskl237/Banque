<?php

require_once __DIR__ . '/../../config/database.php';

function dbConnect()
{
    try
    {
        $db = new PDO("mysql:host=" . DB_CONFIG['host'] . ";port=" . DB_CONFIG['port'] . ";dbname=" . DB_CONFIG['dbname'], DB_CONFIG['username'], DB_CONFIG['password']);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $db;
    } catch (PDOException $error) {
        echo "erreur de connexion! <br/>" . $erreur->getMessage();
    }
}

// function dbConnect()
// {
//     $db = new PDO("mysql:host=" . DB_CONFIG['host'] . ";port=" . DB_CONFIG['port'] . ";dbname=" . DB_CONFIG['dbname'], DB_CONFIG['username'], DB_CONFIG['password']);
//     $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
//     $db->exec('SET NAMES utf8');
//     return $db;
// }
