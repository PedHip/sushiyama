<?php
class produtoRepositorio {
    private $conn; // Sua conexão com o banco de dados
    
    public function __construct($conn) {
        $this->conn = $conn;
    }
    
    public function listarProdutos() {
        $sql = "SELECT * FROM cafe";
        $result = $this->conn->query($sql);
        
        $produtos = array();
        
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $produtos[] = $row;
            }
        }
        
        return $produtos;
    }

    public function cadastrar(Produto $produto)
    {
        $sql = "INSERT INTO produtos (cod_produto, nome, descricao, preco, imagem) VALUES (?,?,?,?,?)";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("issss",$produto->getCod_produto(), $produto->getNome(), $produto->getDescricao(), $produto->getPreco(), $produto->getImagem());
        $stmt->execute();
        $stmt->close();
    }
}
?>