<?php
require_once __DIR__ . '/../model/Produtos.php';

class ProdutosController {

    public function exibirCadastro() {
        require_once __DIR__ . '/../view/cadastro.php';
    }

    public function cadastrar() {
        $nome = $_POST['nome'];
        $preco = str_replace(',', '.', $_POST['preco']);
        $id_categoria = $_POST['id_categoria'];

        $model = new Produtos();
        $model->cadastrar($nome, $preco, $id_categoria);

        header('Location: index.php?action=consultar');
        exit();
    }

    public function consultar() {
        $model = new Produtos();
        $produtos = $model->consultar();
        require_once __DIR__ . '/../view/consulta.php';
    }

    public function exibirPesquisa() {
        require_once __DIR__ . '/../view/pesquisar.php';
    }

    public function pesquisar() {
        $nome = $_POST['nome'] ?? '';
        
        $model = new Produtos();
        $produtos = $model->pesquisar($nome);
        
        require_once __DIR__ . '/../view/pesquisar.php';
    }
}
?>