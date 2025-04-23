<?php

namespace config;  

require __DIR__ . '/../vendor/autoload.php';  

use PDO; 
use PDOException; 
use Dotenv\Dotenv; 

class Konek{
    public static function make()
    {
        $dotenv = Dotenv::createImmutable(__DIR__.'/../');
        $dotenv->safLoad();
        $dotenv->required(['DB_HOST', 'DB_NAME', 'DB_USER', 'DB_PASS']);

        $host = $ENV['DB_HOST'];
        $db = $ENV['DB_NAME'];
        $user = $ENV['DB_USER'];
        $pass = $ENV['DB_PASS'];

        try {
            $pdo = new PDO("mysql:host=$host;dbname=$db;charset=utf8", 
            $user, $pass, [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
            ]);
        } catch (PDOException $e) {
            die("Koneksi gagal: " . $e->getMessage());
        }
        
    }
}


?>