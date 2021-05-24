<?php
    include 'conexao.php';

    $codigo = $_POST['codigo'];
 
    $sql = "SELECT * FROM DISCIPLINAS WHERE codigo = '$codigo'";

    $bucandoDisciplina = mysqli_query($conn,$sql);
    
    $listarDisciplinas = mysqli_fetch_array($bucandoDisciplina);
    $id = $listarDisciplinas['id'];
    $creditos = $listarDisciplinas['creditos'];
    $nome = $listarDisciplinas['nome'];
    $periodo = $listarDisciplinas['periodo'];
    $idprerequisito = $listarDisciplinas['idPreRequisito'];
    $codigo = $listarDisciplinas['codigo'];

?>

<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
  
  <?php include 'cabecalho.html';?>
  <div class="container">
  <div class="d-flex mt-4">
      
      <div class="w-100">
            <form class="w-50 d-flex" action="Buscar-Disciplina.php" method="POST">
                <input class="w-75 mr-3" type="text" name="codigo" placeholder="Procure pelo codigo da disciplina"></input>
                <input type="submit" value="Buscar"></input>
            </form>
          </div>
  </div>
      <table class="table">
          <thead>
              <tr>
                  <th>Nome</th>
                  <th>Codigo</th>
                  <th>Periodo</th>
                  <th>Requisito</th>
                  <th>Credito</th>
              </tr>
          </thead>
          <tbody>
              <tr>
              <td scope="row"><?php echo $nome; ?></td>
                  <td scope="row"><?php echo $codigo; ?></td>
                  <td scope="row"><?php echo $periodo; ?></td>
                  <td scope="row"><?php echo $idprerequisito; ?></td>
                  <td scope="row"><?php echo $creditos; ?></td> 
                  <td>
                    <form action="Excluir-Disciplinas.php" method="post"> 
                        <input type="HIDDEN" name="id" value="<?php echo $id?>"></input>
                        <input type="submit" value="X"></input>                
                    </form>  
                  </td> 
                  <td>
                  <td>
                    <form action="Editar-Disciplinas.php" method="post"> 
                        <input type="HIDDEN" name="id" value="<?php echo $id?>"></input>
                        <input type="submit" value="EDIT"></input>                
                    </form>  
                  </td> 
                  </td>
              </tr>
              <tr>
            <form action="Inserir-Disciplinas.php" method="post"> 
                <td><input type="text" name="nome"></input></td>
                <td><input type="text" name="codigo"></input></td>
                <td><input type="text" name="periodo"></input></td>
                <td><input type="text" name="requisito"></input></td>
                <td><input type="text" name="creditos"></input></td>
                <td><input type="submit" value="Cadastro"></input></td>
            </form>            
            </tr>                
          </tbody>
      </table>
      <div>
            <form action="Listar-Disciplinas.php" method="POST">            
                <input type="submit" value="Listar Todos"></input>
            </form>
          </div>
      </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>