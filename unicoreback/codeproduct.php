<?php
session_start();
require('includes/conexao.php');


if(isset($_POST['cadastrarproduto'])){
$product = $_POST['produto'];
$type = $_POST['tipo'];

$query = mysqli_query($con, "INSERT INTO product (nome, tipo) VALUE ('$product', '$type')");
echo $query;
}

if($query)
{
    // echo "Saved";
    $_SESSION['sucess'] = "s";
    //header('Location: cadastros_empresa.php');
    echo "Adiconado com sucesso a tabela";
}
else 
{
    $_SESSION['status'] = "n";
    echo mysqli_error($con);
    //header('Location: cadastros_empresa.php');  
    echo "Falha ao adiconar a tabela!";
}
?>   

