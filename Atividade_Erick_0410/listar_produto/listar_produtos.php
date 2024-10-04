<?php

$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$dbname = "estoque_e"; 


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Erro de conexão: " . $conn->connect_error);
}


$sql = "SELECT * FROM produtos";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    
    echo "<table border='1'>";
    echo "<tr><th>ID</th><th>Nome do Produto</th><th>Preço de Compra</th><th>Preço de Venda</th><th>Código do Produto</th><th>Nome do Fornecedor</th></tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>{$row['id']}</td>
                <td>{$row['nome_produto']}</td>
                <td>{$row['preco_compra']}</td>
                <td>{$row['preco_venda']}</td>
                <td>{$row['codigo_produto']}</td>
                <td>{$row['nome_fornecedor']}</td>
              </tr>";
    }
    echo "</table>";
} else {
    echo "Nenhum produto cadastrado.";
}


$conn->close();
?>
