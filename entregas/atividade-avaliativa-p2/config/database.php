<?php
class Database {
    public static function connect() {
        try {
            return new PDO('mysql:host=localhost;dbname=atividade_avaliativa_p2', 'root', '');
        } catch (PDOException $e) {
            die("Erro na conexão: " . $e->getMessage());
        }
    }
}
?>