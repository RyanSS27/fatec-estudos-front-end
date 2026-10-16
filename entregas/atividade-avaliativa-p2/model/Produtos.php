<?php
require_once __DIR__ . '/../config/database.php';

class Produtos {
    private $pdo;

    public function __construct() {
        $this->pdo = Database::connect();
    }

    public function cadastrar($nome, $preco, $id_categoria) {
        $sql = "INSERT INTO produtos (nome, preco, id_categoria) VALUES (:nome, :preco, :id_categoria)";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([
            ':nome' => $nome,
            ':preco' => $preco,
            ':id_categoria' => $id_categoria
        ]);
    }

    public function consultar() {
        $sql = "SELECT p.id, p.nome, p.preco, c.nome as categoria 
                FROM produtos p 
                INNER JOIN categorias c ON p.id_categoria = c.id";
        $stmt = $this->pdo->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function pesquisar($nome) {
        $sql = "SELECT p.nome, p.preco, c.nome as categoria 
                FROM produtos p 
                INNER JOIN categorias c ON p.id_categoria = c.id
                WHERE p.nome LIKE :nome";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([':nome' => "%$nome%"]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>