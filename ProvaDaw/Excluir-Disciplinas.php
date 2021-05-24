<?php
    include 'conexao.php';
    
    $id = $_POST['id'];

    $sql = "DELETE FROM DISCIPLINAS WHERE id = $id";

    $deletandoDisciplinas = mysqli_query($conn,$sql);

    header('location: Listar-Disciplinas.php');
?>