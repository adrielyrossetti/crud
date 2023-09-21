<?php
include_once './_conexao.php';

$id = isset($_POST['id']) ? $_POST['id']: '';
$nome = isset($_POST['txtnome'])? $_POST['txtnome']: '';
$andar = isset($_POST['txtandar']) ? $_POST['txtandar']: '';
$cor = isset($_POST['txtcor'])? $_POST['txtcor']: '';

if(empty($id)){
    $sql = "INSERT INTO setor(Nome, andar, cor) VALUES ('$nome','$andar','$cor')";
}else{
    $sql = "UPDATE SET setor Nome='$nome', Andar='$andar', Cor='$cor'  WHERE SetorID=$id";
}

// faz o redirecionamento
mysqli_query($conexao,$sql);

header("Location: ./setor-lista.php", true, 302);
exit();
?>