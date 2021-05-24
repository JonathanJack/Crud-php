<?php
include 'conexao.php';

echo "Leitura de Arquivos";
echo "<br><br>";
//   echo readfile("alunosImp.csv");
 
$caminhoArquivo = $_POST['arquivo'];

$arquivo = fopen($caminhoArquivo, "r") or die("Não consegui abrir o arquivo, deu erro");

// while (!feof($arquivo))
// {
//     echo fgets($arquivo);
//     echo "<br>";
// }


$linhas = array();
$colunas = array();
while (!feof($arquivo))
{
    $linhas[] = fgets($arquivo);
}
echo "<br>";

$cont = 0;
foreach ($linhas as $linhas) {

        $colunas = array();
        $colunas = explode(";", $linhas);
 
        $nome = $colunas[0];
        $email = $colunas[1];
        $perfil = $colunas[2];
      
 
        $recebendoCadastro = "INSERT INTO usuarios(nome,email,perfil) VALUES('$nome','$email','$perfil')";

        $queryDisciplinas = mysqli_query($conn,$recebendoCadastro);
   
}

fclose($arquivo);

header('location: Listar-Disciplinas.php');
?>