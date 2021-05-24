<?php

    include 'conexao.php';


    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $codigo = $_POST['codigo'];
    $periodo = $_POST['periodo'];
    $idprerequisito = $_POST['idprerequisito'];
    $creditos = $_POST['creditos']; 

    $sql = "UPDATE DISCIPLINAS 
    SET nome='$nome',codigo='$codigo',periodo=$periodo,idPreRequisito=$idprerequisito,creditos=$creditos
    WHERE id = $id";

// $sql = "UPDATE DISCIPLINAS 
// SET nome='$nome',codigo='$codigo',periodo=$periodo,idPreRequisito=$idprerequisito,creditos=$creditos 
// WHERE id = $id";
echo $periodo;
echo $nome;
    
    $salvandoDisciplina = mysqli_query($conn,$sql);     

     header('location: Listar-Disciplinas.php');
?>