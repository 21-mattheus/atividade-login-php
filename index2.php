<?php

$email = $_POST['email'];
$senha = $_POST['senha'];

if($email == "1913960350@academico.cesmac.edu.br" && $senha == "1913960350"){
    echo "Logado com sucesso!";
 } else{
        header('Location:index.php?erro=1');

    }
   
?>

