<html>
    <head>
        <link rel="stylesheet" href="../assets/css/editar.css">
    </head>
<?php
    require_once "../repositorio/conexao.php";
    require_once "../Modelo/Produto.php";
    require_once "../repositorio/produtoRepositorio.php";

    session_start();
    $usuario = $_SESSION['usuario'];

    if($usuario) {
        $produtoRepositorio = new produtoRepositorio($conn);
        $produtos = $produtoRepositorio->listarProdutos();
    } else {
        session_destroy();
        header("Location: ../visao/login-realizado.php");
    }

?>



<section>
    <table>
    <thead>
        <div class="divum">
            <tr class="divtr">
                <div><th>Produto</th></div>
                <div><th>Tipo</th></div>
                <div><th>Descricão</th></div>
                <div><th>Valor</th></div>
                <th colspan="2">Ação</th>
            </tr>
        </div>
    </thead>
    <tbody>
        <?php foreach ($produtos as $produto) : ?>
        <div class="divum">
            <tr class="divtr">
                <div><td><?= $produto->getNome();  ?></td></div>
                <div> <td><?= $produto->getTipo();  ?></td></div>
                <div><td><?= $produto->getDescricao();  ?></td></div>
                <div><td>R$ <?= $produto->getPreco();  ?></td></div>
                <div>
                    <td>
                    <form action="editar-produto.php" method="POST">
                        <input type="hidden" name="cod_produto" value="<?= $produto->getCod_produto(); ?>">
                        <input type="hidden" name="nomeusuario" value="<?= $usuario; ?>">
                        <input type="hidden" name="tipo" value="<?= $produto->getTipo(); ?>">
                        <input type="hidden" name="usuario" value="<?= $usuario ?>">
                        <input type="submit" class="botao-editar" value="Editar">
                    </form>

                    </td>
                </div>

                <div>
                    <td>
                    <form action="excluir-produto.php" method="POST">
                        <input type="hidden" name="id" value="<?= $produto->getCod_produto(); ?>">
                        <input type="hidden" name="nomeusuario" value="<?= $usuario; ?>">
                        <input type="hidden" name="tipo" value="<?= $produto->getTipo(); ?>">
                        <input type="hidden" name="usuario" value="<?= $usuario; ?>">
                        <input type="submit" class="botao-excluir" value="Excluir">
                    </form>
                    </td>
                </div>
            </tr>
        </div>
        <?php endforeach; ?>

    </tbody>
    </table>
    <form action="cadastrar-produto.php" method="POST">
    <input type="hidden" name="nomeusuario" value="<?= $usuario;; ?>">
    <input type="hidden" name="usuario" value="<?= $usuario; ?>">
    <input type="submit" class="botao-cadastrar" name="cadastrar" value="Cadastrar produto">
    </form>
    <form action="index.php" method="POST">
    <input type="submit" class="botao-cadastrar" value="Voltar para página inicial" />
    </form>
</section>
</html>