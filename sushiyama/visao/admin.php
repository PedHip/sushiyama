<?php 

include_once '../src/cabecalho.php';

require_once "../repositorio/conexao.php";
require_once "../Modelo/Produto.php";
require_once "../repositorio/produtoRepositorio.php";

$produtoRepositorio = new produtoRepositorio($conn);
$produtos = $produtoRepositorio->listarProdutos();

?>

<html>
    <head>
        <link rel="stylesheet" href="../assets/css/main.css">

    </head>
    <body>
        <!-- ======= Header ======= -->
        <header id="header" class="header fixed-top d-flex align-items-center">
                <div class="container d-flex align-items-center justify-content-between">

                <a href="index.php" class="logo d-flex align-items-center me-auto me-lg-0">
                    <!-- Uncomment the line below if you also wish to use an image logo -->
                    <!-- <img src="../assets/img/logo.png" alt=""> -->
                    <h1>Sushiyama<span>.</span></h1>
                </a>
                </div>
        </header><!-- End Header -->
        <main>
                <!-- ======= Breadcrumbs ======= -->
            <div class="breadcrumbs">
                <div class="container">

                    <div class="d-flex justify-content-between align-items-center">
                    <h2>Tabela de Produtos</h2>
                    <ol>
                        <li><a href="index.php">Home</a></li>
                        <li>Tabela de Produtos</li>
                    </ol>
                    </div>

                </div>
            </div><!-- End Breadcrumbs -->

            <?php
                require_once "../repositorio/conexao.php";
                require_once "../Modelo/Produto.php";
                require_once "../repositorio/produtoRepositorio.php";

                    $produtoRepositorio = new produtoRepositorio($conn);
                    $produtos = $produtoRepositorio->listarProdutos();
            

            ?>
            <section class="containertabelaprodutosgeral">
                    <table class="containertabelaprodutos">
                        <thead class="containertabelaprodutoshead">
                                <tr class="containertabelaprodutosvalores">
                                    <th class="thprodutos">Produto</th>
                                    <th class="thprodutos">Tipo</th>
                                    <th class="thprodutos">Descricão</th>
                                    <th class="thprodutos">Valor</th>
                                    <th colspan="2" class="thprodutos">Ação</th>
                                </tr>
                        </thead>
                        <tbody class="containertabelaprodutosbody">
                            <?php foreach ($produtos as $produto) : ?>
                                <tr class="containertabelaprodutosvalores">
                                    <td class="tdprodutos"><?= $produto->getNome();  ?></td>
                                    <td class="tdprodutos"><?= $produto->getTipo();  ?></td>
                                    <td class="tdprodutos"><?= $produto->getDescricao();  ?></td>
                                    <td class="tdprodutos">R$ <?= $produto->getPreco();  ?></td>
                                    
                                        <td class="tdprodutos">
                                        <form action="editar-produto.php" method="POST">
                                            <input type="hidden" name="cod_produto" value="<?= $produto->getCod_produto(); ?>">
                                            <input type="hidden" name="tipo" value="<?= $produto->getTipo(); ?>">
                                            <input type="submit" class="botao-editar" value="Editar">
                                        </form>

                                        </td>
                                    

                                    
                                        <td class="tdprodutos">
                                        <form action="excluir-produto.php" method="POST">
                                            <input type="hidden" name="id" value="<?= $produto->getCod_produto(); ?>">
                                            <input type="hidden" name="tipo" value="<?= $produto->getTipo(); ?>">
                                            <input type="submit" class="botao-excluir" value="Excluir">
                                        </form>
                                        </td>
                                    
                                </tr>
                            <?php endforeach; ?>

                        </tbody>
                        </table>
            </section>
            <form action="cadastrar-produto.php" method="POST">
                <input type="hidden" name="nomeusuario" value="<?= $usuario;; ?>">
                <input type="hidden" name="usuario" value="<?= $usuario; ?>">
                <input type="submit" class="cadastrarprodutodois" name="cadastrar" value="Cadastrar produto">
            </form>

        </main>
            

        
            <footer id="footer" class="footer">

                <div class="container">
                <div class="row gy-3">
                    <div class="col-lg-3 col-md-6 d-flex">
                    <i class="bi bi-geo-alt icon"></i>
                    <div>
                        <h4>Endereço</h4>
                        <p>
                        Rua Juscelino da fonseca <br>
                        Brasil<br>
                        </p>
                    </div>

                    </div>

                    <div class="col-lg-3 col-md-6 footer-links d-flex">
                    <i class="bi bi-telephone icon"></i>
                    <div>
                        <h4>Reservas</h4>
                        <p>
                        <strong>Phone:</strong> +55-950942364<br>
                        <strong>Email:</strong> Sushiyama@gmail.com<br>
                        </p>
                    </div>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links d-flex">
                    <i class="bi bi-clock icon"></i>
                    <div>
                        <h4>Estamos abertos</h4>
                        <p>
                        <strong>11AM</strong>11PM<br>
                        Domingo: Closed
                        </p>
                    </div>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                    <h4>Nos acompanhe</h4>
                    <div class="social-links d-flex">
                        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                    </div>
                    </div>

                </div>
                </div>

                <div class="container">
                <div class="copyright">
                    &copy; Copyright <strong><span>Sushiyama</span></strong>. Todos os direitos reservados
                </div>
                <div class="credits">
                    <!-- All the links in the footer should remain intact. -->
                    <!-- You can delete the links only if you purchased the pro version. -->
                    <!-- Licensing information: https://bootstrapmade.com/license/ -->
                    <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/yummy-bootstrap-restaurant-website-template/ -->

                </div>
                </div>

            </footer><!-- End Footer -->
                <!-- End Footer -->

                <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

                <div id="preloader"></div>

                <!-- Vendor JS Files -->
                <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
                <script src="../assets/vendor/aos/aos.js"></script>
                <script src="../assets/vendor/glightbox/js/glightbox.min.js"></script>
                <script src="../assets/vendor/purecounter/purecounter_vanilla.js"></script>
                <script src="../assets/vendor/swiper/swiper-bundle.min.js"></script>
                <script src="../assets/vendor/php-email-form/validate.js"></script>

                <!-- Template Main JS File -->
                <script src="../assets/js/main.js"></script>
    </body>
    
</html>