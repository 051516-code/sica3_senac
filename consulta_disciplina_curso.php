<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Consulta de Disciplinas de curso</title>
</head>
<body>
    <style>

    .modal{
    width: 300px; 
    }
    .modal-content{
    width: 300px;
    }
    .list-group-item:hover{
    background-color: rgb(141, 138, 138)!important;
    }
    a{
    text-decoration: none;
    color: black;
    }
    form{
        width: 350px;
        margin: auto;
        
    }

    body{
    background: rgb(17,42,96);
    background: linear-gradient(90deg, rgba(17,42,96,1) 0%, rgba(79,176,187,1) 100%);
    color: white;
    }
    h5{
      color: black;
    }
    a:hover{
      color: black;
      
    }
    
    </style>

    <nav class="navbar bg-light">
        <div class="container-fluid">
          <span class="navbar-brand mb-0 h1">Controle Escolar</span>
          
          <button class="navbar-toggler" type="button"  class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
            <span class="navbar-toggler-icon"></span>
          </button>
        </div>
       </nav>
      
      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-fullscreen">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">MENU</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            <ul class="list-group list-group-flush">
            
            <li class="list-group-item"><a href="home.html">Home</a></li>

            <li class="list-group-item"><a href="cadastro_aluno.html">Cadastro de Aluno</a></li>
      
            <li class="list-group-item"><a href="cadastro_professor.html">Cadastro de Professor</a></li>

            <li class="list-group-item"><a href="cadastro_curso.php">Cadastro de Curso</a></li>
      
            <li class="list-group-item"><a href="cadastro_disciplina.php">Cadastro de Disciplina</a></li>

            <li class="list-group-item"><a href="cadastro_turma.php">Cadastro de Turma</a></li>

            <li class="list-group-item"><a href="matricula.php">Matricula de Aluno em Curso</a></li>

            <li class="list-group-item"><a href="cadastro_aluno_turma.php">Matricula de Aluno em Turma</a></li>

            <li class="list-group-item"><a href="cadastro_disciplina_curso.php">Cadastro de Disciplina em Curso</a></li>
            
            <li class="list-group-item"><a href="consultar_coordenador.php">Consultar Coordenador de Curso</a></li>
            
            <li class="list-group-item"><a href="consulta_prof_disciplina.php">Consultar de Professor de Disciplina</a></li>
            
            <li class="list-group-item"><a href="consultar_aluno_matriculado.php">Consulta de Aluno em Curso</a></li>
            
            <li class="list-group-item"><a href="consultar_aluno_matriculado_turma.php">Consulta de Alunos matriculados em Turma</a></li>
            
            
      
          
        </ul>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              
            </div>
          </div>
          
        </div>
      </div>

      <div class="container">
        <h1 class="text-center">Sistema de Controle Acad??mico - SICA</h1>
        
        <div class="row">

          <div class="col-md-12">
          <fieldset>

          <legend class="text-center">Consulta de Disciplinas de curso</legend>

           <form action="" method="post">
              <div class="form-group">
                  <label for="id_professor">Selecione o curso:</label>
                  <select class="form-select" aria-label="Default select example" id="id_curso" name="id_curso">
                      <option selected>Selecione:</option>
                      <?php 
                    require('manter/conexao.php');

                    $consulta = "SELECT `cpf`, `nome` FROM `aluno`";
                    $sql = mysqli_query($conexao,$consulta);
                    while ($linha = mysqli_fetch_array($sql)) {
                    echo '<option value="'. $linha['cpf'] . '">' . $linha['nome'] . '</option>';
                    
                    }
                  ?>
                    </select>
              </div>


              <br>


              <button type="submit" class="btn btn-dark">Consultar</button>
                          
            </form>


            </div>


        </div>


      </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

</body>
</html>