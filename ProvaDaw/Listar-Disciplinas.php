<?php
    include 'conexao.php';

    $buscarDisciplinas = "SELECT * FROM DISCIPLINAS";
    $queryDisciplinas = mysqli_query($conn,$buscarDisciplinas);
    $buscarUsuarios = "SELECT * FROM USUARIOS";
    $queryUsuarios = mysqli_query($conn,$buscarUsuarios);
    
?>

<!doctype html>
<html lang="en">
  <head>
    <title>Disciplinas</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
  <?php include 'cabecalho.html';?>
  <div class="container mt-4">
  <h1>Disciplinas</h1>
      <div class=" mb-3">
        <form class="d-flex justify-content-end w-100" action="Buscar-Disciplina.php" method="POST">
            <input class="w-25 mr-2" type="text" name="codigo" placeholder="Procure pelo codigo da disciplina"></input>
            <input type="submit" value="Buscar"></input>
        </form>
      </div>
      
      <table class="table">
          <thead>
          
              <tr>
                  <th>Nome</th>
                  <th>Codigo</th>
                  <th>Periodo</th>
                  <th>ID Requisito</th>
                  <th>Credito</th>
              </tr>
          </thead>
          <tbody>
          <?php 
            while($listarDisciplinas = mysqli_fetch_array($queryDisciplinas)){
                $id = $listarDisciplinas['id'];
                $creditos = $listarDisciplinas['creditos'];
                $nome = $listarDisciplinas['nome'];
                $periodo = $listarDisciplinas['periodo'];
                $idprerequisito = $listarDisciplinas['idPreRequisito'];
                $codigo = $listarDisciplinas['codigo'];
          ?>
              <tr>
                  <td scope="row"><?php echo $nome; ?></td>
                  <td scope="row"><?php echo $codigo; ?></td>
                  <td scope="row"><?php echo $periodo; ?></td>
                  <td scope="row"><?php echo $idprerequisito; ?></td>
                  <td scope="row"><?php echo $creditos; ?></td>      
                  <td>
                      <td>
                          <form action="Excluir-Disciplinas.php" method="post"> 
                            <input type="HIDDEN" name="id" value="<?php echo $id?>"></input>
                            <input type="submit"  value="X"></input>                
                          </form>  
                      </td>
                      <td>
                        <form action="Editar-Disciplinas.php" method="post"> 
                          <input type="HIDDEN" name="id" value="<?php echo $id?>"></input>
                          <input type="submit" value="EDIT"></input>                
                        </form>
                      </td>                                     
                  </td>                                         
              </tr>  
            <?php }; ?>  
            <tr class="p-1">
            <form  action="Inserir-Disciplinas.php" method="post"> 
                <td><input type="text" name="nome" Placeholder="Ex: Maria Antonia"></input></td>
                <td><input type="text" name="codigo" Placeholder="MA2"></input></td>
                <td><input type="text" name="periodo" Placeholder="3"></input></td>
                <td><input type="text" name="requisito" Placeholder="2"></input></td>
                <td><input type="text" name="creditos" Placeholder="32"></input></td>
                <td><input class="w-100" type="submit" value="Cadastrar"></input></td>
            </form>            
            </tr>         
          </tbody>
      </table>
<div class="my-5">
<h1>Usuarios</h1>
<table class="table">
          <thead>
          
              <tr>
                  <th>Nome</th>
                  <th>Email</th>
                  <th>Perfil</th>            
              </tr>
          </thead>
          <tbody>
          <?php 
            while($listarUsuarios= mysqli_fetch_array($queryUsuarios)){
                $id = $listarUsuarios['id'];
                $nome = $listarUsuarios['nome'];
                $email = $listarUsuarios['email'];                
                $perfil = $listarUsuarios['perfil'];                
          ?>
              <tr>
                  <td scope="row"><?php echo $nome; ?></td>
                  <td scope="row"><?php echo $email; ?></td>
                  <td scope="row"><?php echo $perfil; ?></td>                             
              </tr>  
            <?php }; ?>    
          </tbody>
      </table>
<form action="incluir-usuarios.php" method="POST">
<input type="file" name="arquivo"></input>
    <input class="p-1" type="submit" value="incluir usuarios"></input>
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