<?php

session_start();
 ?>

<!doctype html>

<?php
// Verifica se os dados foram recebidos via POST

include 'menu.php';
include '..\repositorio\conexao.php';
include '..\Modelo\Produto.php';
include '..\repositorio\produtoRepositorio.php';

$produtosRepositorio = new ProdutoRepositorio($conn);
$produto = $produtosRepositorio->listarPorId($_POST['cod_produto'], $_POST['tipo']);

?>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="../assets/css/main.css">
  <title>IFSP - Editar Produto</title>
</head>

<body>
  <main>

    <section class="sample-page">
      <div class="containerinputphp">
          <form method="POST" action="../controller/processar-editar-produto.php" id="editarForm" enctype="multipart/form-data">

            <div class="containerinputlabel">
              <label for="nome">Nome</label>
              <input type="text" id="nome" name="nome" value="<?php echo $produto->getNome();?>" required />
            </div>

              <div class="containerinputlabel">
                  <label for="entrada">Entrada</label>
                  <input type="radio" id="tipo" name="tipo" value="Entrada" <?php if ($produto->getTipo() == "Entrada") : ?>checked /><?php else : ?> /> <?php endif; ?>
                
                  <label for="principal">Principal</label>
                  <input type="radio" id="tipo" name="tipo" value="Principal" <?php if ($produto->getTipo() == "Principal") { ?>checked><?php } else { ?> > <?php } ?>
            
                  <label for="sobremesa">Sobremesa</label>
                  <input type="radio" id="tipo" name="tipo" value="Sobremesa" <?php if ($produto->getTipo() == "Sobremesa") { ?>checked><?php } else { ?> > <?php } ?>
              </div>
            <div class="containerinputlabel">
              <label for="descricao">Descrição</label>
              <input type="text" id="descricao" name="descricao" value="<?= $produto->getDescricao(); ?>" required>
            </div>
            <div class="containerinputlabel">
              <label for="preco">Preço</label>
              <input type="text" id="preco" name="preco" value="<?= $produto->getPreco(); ?>" required>
            </div>


            <?php $imagemfake = $produto->getImagem();


            // Remove a parte "C:\fakepath\" do valor (apenas no caso de navegadores baseados em Windows)
            $imagem = basename($imagemfake);

            // Agora, $imagem conterá apenas o nome do arquivo, sem a parte "C:\fakepath\"
            ?>
            
            <div class="containerinputlabel">
              <label for="imagem">Envie uma nova imagem do produto ou mantenha a imagem atual:
                  <img src="<?= $produto->getImagem(); ?>" alt="<?= $produto->getImagem(); ?>" width="200">
      
              
                  <input type="file" name="imagem" accept="image/*" id="imagem" value="<?php echo $imagem; ?>">
                  <input type="hidden" name="cod_produto" id="cod_produto" value="<?= $produto->getCod_produto(); ?>">
              </label>
            </div>

              <input type="submit" name="editar" class="inputphpdois" value="Editar produto" />

          </form>
      </div>

    </section>
  </main>
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js" type="text/javascript"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-maskmoney/3.0.2/jquery.maskMoney.min.js" integrity="sha512-Rdk63VC+1UYzGSgd3u2iadi0joUrcwX0IWp2rTh6KXFoAmgOjRS99Vynz1lJPT8dLjvo6JZOqpAHJyfCEZ5KoA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="js/index.js"></script>
</body>

</html>