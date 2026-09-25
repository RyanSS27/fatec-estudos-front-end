<?php
class Database {
    public static function connect() {
        try {
            return new PDO("mysql:host=localhost;dbname=aula", "root", "");
        } catch (PDOException $e) {
            die("Erro: " . $e->getMessage());
        }
    }
}