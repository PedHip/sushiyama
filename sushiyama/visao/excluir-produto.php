<!doctype html>
<head>
  <link rel="stylesheet" href="../assets/css/main.css">
</head>
<?php

include '..\repositorio\conexao.php';
include '..\Modelo\Produto.php';
include '..\Repositorio\ProdutoRepositorio.php';

$produtosRepositorio = new ProdutoRepositorio($conn);
$excluiProduto = $produtosRepositorio->excluirProdutoPorId($_POST['id']);
?>
<html lang="pt-br">

<head>
  <title>IFSP - Exclusão de Produto</title>
</head>

<body>
  <main>
    <section class="container-admin-bannerdois">
      <?php
      if ($excluiProduto) {

      ?>
        <h1>Produto excluído com sucesso</h1>
      
    <section class="containersucessodois">
      <form action="admin.php" method="post">
        <input type="submit" name="voltar" class="botao-cadastrar" value="voltar" />
        <input type='hidden' name='nomeusuario' value="<?= $_SESSION['nomeusuario']; ?>">
        <input type='hidden' name='usuario' value="<?= $_SESSION['usuario']; ?>">

      </form>
    <?php } else {
        echo "erro ao excluir produto";
      } ?>

    </section>
  </main>
</body>

</html>