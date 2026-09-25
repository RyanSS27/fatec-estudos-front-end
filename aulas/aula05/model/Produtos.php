<?php
 
require_once __DIR__.'/../config/database.php';//buscando na pasta config a conexao
class Produtos{
 
    private $pdo;//atributo de classe que vai receber a conexao
 
    public function __construct(){
        $this->pdo=Database::connect();
        }
   
    public function salvar($nome,$preco){
        $sql='Insert into produtos(nome,preco)values(?,?)';//string de conexao
        $stmt=$this->pdo->prepare($sql);
        $stmt->execute([$nome,$preco]);
 
    }
 
 
 
}
 
?>