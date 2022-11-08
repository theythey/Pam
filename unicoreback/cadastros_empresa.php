<?php 
include('includes/conexao.php');
include('includes/header.php');
include('includes/html.php');
?>
<div class="MENU" style=" margin-top: 15px; margin-left: 20%;  ">
  <ol class="breadcrumb">
    <li class="breadcrumb-item active"  aria-current="page" style="color: #0e4277; !important"><a href="home.php">Visão Geral</a></li>
    <li class="breadcrumb-item active" aria-current="page" style="color: #0e4277; !important">Financeiro</li>
    <li class="breadcrumb-item active" aria-current="page" style="color: #0e4277; !important">cadastros</li>
    <li class="breadcrumb-item active" aria-current="page" style="color: #0e4277; !important">Empresas Filial</li>
    <nav class="navbar navbar-expand-lg bg-light">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" style= "color:#0e4277; margin-left: 600px; margin-top: -3.5rem; !important ">
           Imprimir
          </a>
          <ul class="dropdown-menu"style= "color:#0e4277;  width: 1 px; margin-left: 600px; margin-top: -1.2rem; width: 20%;!important ">
            <li><a class="dropdown-item" href="#" style="margin-left:-10px;">PDF</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <button type="button" data-toggle="modal" data-target="#cadastroempresa" class="btn btn-success" style="margin-left: -43.6rem;">Adicionar</button>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


  <div class="modal fade" id="cadastroempresa" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="margin-top: 1%; border-radius:0px; !IMP ">
  <div class="modal-dialog" role="document">
    <div class="modal-content"style="margin-top: -1rem; border-radius:0px;">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel" style=" font-weight: bold; color:#0e4277;">Cadastros Empresa</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" >
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="codecadastros.php" method="POST">

        <div class="modal-body">

            <div class="form-group" style="padding: 10px;!important">
                <label> Razão Social </label>
                <input type="text" name="razao" class="form-control" placeholder="Digite um Favorecido...">
            </div>
            <div class="form-group" style="padding: 10px;!important">
                <label> CNPJ </label>
                <input type="text" name="cnpj" class="form-control">
            </div>
            <div class="form-group"style="padding: 10px;!important">
                <label>Conta Bancaria</label>
                <select class="form-select form-select-sm" name="contabanc" aria-label=".form-select-sm example">
                  <option selected>Selecionar uma Conta...</option>
                  <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="BRADESCO" id="flexCheckDefault">
                          <label class="form-check-label" for="flexCheckDefault">
                            BRADESCO
                          </label>
                        </div>
                  <option class="form-check-input" type="checkbox" style="color:#0e4277;"value="BRADESCO">BRADESCO</option>
                  <option class="form-check-input" type="checkbox" style="color:#0e4277;" value="SAFRA">SAFRA</option>
                  <option class="form-check-input" type="checkbox" style="color:#0e4277;"value="BANCO BRASIL">BB</option>
                </select>
            </div>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Abortar</button>
            <button  name="cadastrarempresa" class="btn btn-primary">Incluir</button>
            
        </div>
      </form>
      </div>
  </div>
</div>
</div>

</div>

<table>
<?php

$query = "SELECT * FROM cadastroempresa";
$query_run = mysqli_query($con, $query);
  ?>
<div class="card" style="width: 52%; margin-top: -1%;  margin-left: 19%; border-radius:0px;">
<tbody>
<?php
                        $vlHoje = 0;
                        $vlTotal = 0;
                        if(mysqli_num_rows($query_run) > 0)
                        {
                            while($row = mysqli_fetch_assoc($query_run))  
                            {
                           

  echo '<tr>' .'<h5 class="card-header">' . $row['razao'] . '</h5>' . '</tr> ';
 echo  '<div class="card-body">';
  echo '<tr>' . '<h5 class="card-title">' . $row['cnpj'] . '</h5>' . '</tr> ';
    echo '<tr> ' . '<p class="card-text">'. $row['contas'] .'</p>' . '</tr> ';
  echo'</div>
</div>';
       }
}
?>
</table>


