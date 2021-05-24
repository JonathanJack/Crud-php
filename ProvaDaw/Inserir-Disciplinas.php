<?php
    include 'conexao.php';

    $nome = $_POST['nome'];
    $codigo = $_POST['codigo'];
    $requisito = $_POST['requisito'];
    $creditos = $_POST['creditos'];
    $periodo = $_POST['periodo'];
    
    $recebendoCadastro = "INSERT INTO DISCIPLINAS VALUES('','$periodo','$requisito','$creditos','$nome','$codigo')";

    $queryDisciplinas = mysqli_query($conn,$recebendoCadastro);

    header('location: Listar-Disciplinas.php');
?>