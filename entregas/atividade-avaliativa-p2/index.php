<?php
require_once __DIR__ . '/controller/ProdutosController.php';

$controller = new ProdutosController();
$action = $_GET['action'] ?? 'menu';

switch ($action) {
    case 'menu':
        require_once __DIR__ . '/view/menu.php';
        break;

    case 'cadastro':
        $controller->exibirCadastro();
        break;

    case 'cadastrar':
        $controller->cadastrar();
        break;

    case 'consultar':
        $controller->consultar();
        break;

    case 'exibirPesquisa':
        $controller->exibirPesquisa();
        break;

    case 'pesquisar':
        $controller->pesquisar();
        break;

    default:
        require_once __DIR__ . '/view/menu.php';
        break;
}
?>