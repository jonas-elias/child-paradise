<?php 
    require_once('./connection.php');

    $id = $_POST['id'];
    $funcao = $_POST['funcao'];

    if($funcao == "Responsável"){
        $query = "DELETE from responsavel where cod = '$id'";
        if(mysqli_query($connection, $query)){
            echo "true";
        }else{
            echo "false";
        }
    }else{
        $query = "DELETE from funcionario where cod = '$id'";
        if(mysqli_query($connection, $query)){
            echo "true";
        }else{
            echo "false";
        }
    }