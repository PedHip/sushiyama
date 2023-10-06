<?php
require "../repositorio/conexao.php";
require "../Modelo/Produto.php";
require "../repositorio/produtoRepositorio.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $cod_produto = $_POST["cod_produto"];
    $nome = $_POST["nome"];
    $descricao = $_POST["descricao"];
    $preco = $_POST["preco"];
    $imagem = $_POST["imagem"];

    $produto = new Produto(
        $cod_produto,
        $nome,
        $descricao,
        $preco,
        $imagem // Remova a vírgula extra aqui
    );

    // Certifique-se de que $conn representa uma conexão válida com o banco de dados
    $produtoRepositorio = new produtoRepositorio($conn);
    $produtoRepositorio->cadastrar($produto);
    header("Location: ../visao/cadastrar-produto-sucesso.php");
}
?>
