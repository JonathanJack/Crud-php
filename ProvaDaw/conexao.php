<?php
    $servidor = 'localhost';
    $usuario = 'root';
    $senha = '';
    $nome_banco = 'provaav1dawnoite';

    $conn = mysqli_connect($servidor,$usuario,$senha,$nome_banco);

    // if($conn){
    //     echo 'Conecetou';
    // }else{
    //     echo 'erro';
    // }

?>

<style>
    input{
        border-radius: 6px;
        border: 1px solid #dee2e6;
        text-align: center;
    }

    input[type="submit"]{
        border: 1px solid #909396;
    }

    .header{
        width: 100%;
        height: 85px;
        background-color: #504c4c;
        display: flex;
        align-items: center;
    }

    .logo{
        font-size: 42px;
        color: aliceblue;
        font-family: fantasy;
        border-radius: 100%;
        border: 1px solid #f0f8ff;
        width: 65px;
        height: 65px;        
        margin-left: 27px;
    }
</style>