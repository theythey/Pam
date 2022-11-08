<?php
session_start();
require('includes/conexao.php');
include('includes/html.php');
include('includes/header.php');
?>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


  <div class="modal fade" id="registrarnf" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="margin-top: 1%; border-radius:0px; !IMP ">
  <div class="modal-dialog" role="document">
    <div class="modal-content"style="margin-top: -1rem; border-radius:0px;">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel" style=" font-weight: bold; color:#0e4277;">Fluxo de Cheque</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" >
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="./codecheques.php" method="POST">

        <div class="modal-body">

            <div class="form-group" style="padding: 10px;!important">
                <label> Destinatario </label>
                <input type="text" name="destino" class="form-control" placeholder="Digite um Favorecido...">
            </div>
            <div class="form-group" style="padding: 10px;!important">
                <label> Data de Inclusão </label>
                <input type="date" name="datainc" class="form-control">
            </div>
            <div class="form-group"style="padding: 10px;!important">
                <label> Compensação </label>
                <input type="date" name="comp" class="form-control checking_email" >
            </div>
            <div class="form-group"style="padding: 10px;!important">
                <label>Conta Bancaria</label>
                <select class="form-select form-select-sm" name="conta" aria-label=".form-select-sm example">
                  <option selected>Selecionar uma Conta...</option>
                  <?php
                  $queryempre = "SELECT razao  FROM cadastroempresa";
                  $query_run = mysqli_query($con, $queryempre);
            
                  if(mysqli_num_rows($query_run) > 0)
                  {
                      while($row = mysqli_fetch_assoc($query_run))  
                  {
                       echo  '<option value="/'. $row['idemp'] . '">' . $row['razao'] . '/'. $row['contas'] .'</option>';
                          }
                      }
        ?>
                </select>
            </div>
            <div class="form-group" style="padding: 10px;!important">
                <label> Numero </label>
                <input type="number" name="numeroc" class="form-control" placeholder="Digite a numeração do Cheque..">
            </div>
            <div class="form-group" style="padding: 10px;!important">
                <label>Valor </label>
                <input type="number" name="valor" class="form-control" placeholder="Digite um Valor...">
            </div>
            <div class="form-group" style="padding: 10px;!important">
                <label>Compensado</label>
                <select class="form-select form-select-sm form-group" name="compes"aria-label=".form-select-sm example" style="width: 100%; margin-left: %;">
                      <option selected>Este Cheque foi Compesado?</option>
                      <option value="sim">Sim</option>
                      <option value="nao">Não</option>
                      <option value="Outros">Outros</option>
                </select>
            </div>
            <div class="form-group" style="padding: 10px;!important">
                <label>Obeservação</label>
                <input type="text" name="obs" class="form-control" placeholder="Digite um Valor...">
            </div>

        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Abortar</button>
            <button  name="cadastrarnfe" class="btn btn-primary">Incluir</button>
            
        </div>
      </form>

    </div>
  </div>
</div>
</div>

</div>


<div class="MENU" style=" margin-top: 15px; margin-left: 20%;  ">
  <ol class="breadcrumb">
    <li class="breadcrumb-item active"  aria-current="page" style="color: #0e4277; !important"><a href="home.php">Visão Geral</a></li>
    <li class="breadcrumb-item active" aria-current="page" style="color: #0e4277; !important">Financeiro</li>
    <li class="breadcrumb-item active" aria-current="page" style="color: #0e4277; !important">Notas Fiscais</li>
    <nav class="navbar navbar-expand-lg bg-light">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" style= "color:#0e4277; margin-left: 740px; margin-top: -3.5rem; !important ">
           Imprimir
          </a>
          <ul class="dropdown-menu"style= "color:#0e4277; margin-left: 740px; margin-top: -1.2rem; !important ">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
       
</nav>
  </ol>
  </div>  
<main style="margin-top:-6rem; margin-left: 18%;  ">
<div class="card" style="width: 80%; border-radius: 0px;">
        <h1 style="font-size:25px; margin:20px; margin-left: 20px; font-weight: bold; color:#0e4277;"> Notas Fiscais / Entrada / Saída</h1>
        <select class="form-select form-select-sm" aria-label=".form-select-sm example" style="width: 30%; margin-left: 2%;">
  <option selected>Selecionar empresa...</option>
  <?php
        $queryempre = "SELECT idemp, razao, cnpj, contas FROM cadastroempresa";
        $query_run = mysqli_query($con, $queryempre);
  
        if(mysqli_num_rows($query_run) > 0)
        {
            while($row = mysqli_fetch_assoc($query_run))  
            {
              echo  '<option value="'. $row['contas'] . '"/'. $row['idemp'] . '">' . $row['razao'] . '/'. $row['cnpj'] .'</option>';
            }
        }  

?>
</select>
<button type="button" class="btn btn-success" style="margin-left:34%; margin-top:-2rem; width:18%; padding: -1.8rem;">Adicionar</button>

        <div class="btn-group btn-group-sm" role="group" aria-label="Small button group" style="width: 10px; margin-top: 10px; margin-left: 2%; ">
  <button type="button" class="btn btn-outline-dark" style="border-radius: 3px; !important" >Todos</button>
  <button type="button" class="btn btn-outline-dark" style="border-radius: 1px; !important">Saídas</button>
  <button type="button" class="btn btn-outline-dark" style="border-radius: 3px; !important">Entradas</button>
</div>

<div class="pesquisar"style="margin-top: -2rem;">
<form class="form-inline my-2 my-lg-0" style="width: 30%; display:flex; margin-left: 68%;  ">
      <input class="form-control mr-sm-2" type="search" placeholder="Pesquisar" aria-label="Pesquisar" style="border-radius:0px; !importat">
    </form>
    </div>   
            <table class=" table table-striped table-hover  " style="width: 99%; margin-top: 30px; margin-left: 5px; ">
            <?php
                  $query = "SELECT * FROM fluxodecheque";
                  $query_run = mysqli_query($con, $query);
                    ?>
            <thead>
                            <tr style="background:#E9E9E9;font-weight: 700;font-style: normal;font-size: 15px;">
                            <th scope="col" style="color:#0e4277;">Remetente </th>
                            <th scope="col" style="color:#0e4277;">Destinatario </th>
                            <th scope="col" style="color:#0e4277;">Chave de Acesso </th>
                            <th scope="col" style="color:#0e4277;">Número NF-E </th>
                            <th scope="col" style="color:#0e4277;">Valor </th>
                            <th ></th>

                            </tr>
                        </thead>
                        <tbody class="table-group-divider">
                          <?php 
                          
                       // if(mysqli_num_rows($query_run) > 0)
                        //{
                            //while($row = mysqli_fetch_assoc($query_run))  
                            //{

                           /// echo '<tr>';
                              //  echo '<td>'0'</td>';
                               // echo '<td>'0'</td>';
                               /// echo '<td>'0'</td>';
                                //echo '<td>'0'</td>';
                               // echo '<td>'0'</td>';
                                //echo '<td>'0'</td>';
                            //'</tr>';
                            //}
                        //  }
//?>
                        </tbody>
                        </table>
                        

</div>
</div>                        
</main>
<div class="card" style="width: 54rem; margin-left: 263px; border-radius:0px; " >
<div class = "vertical " style="border-left: 1px solid black;height: 80px;position:absolute;left: 20%; margin-top:30px;  background: #f5f5f5; "></div>
  <div class="card-body" style=" margin-top: 10px; !important">
  <p class="card-subtitle mb-2 text-muted" style=" margin-left: 25px; font-size: 11px" >Compensados Hoje</p>
  <p class="card-subtitle mb-2 text-muted" style="margin-top: px; margin-left: 18px; font-size: 30px; font-weight: bold;">R$00,00</p>
  <p class="card-subtitle mb-2 text-muted" style=" margin-left: 45px; font-size: 10px;" >Extrato Diario</p>
</div>

  <div class="card-body" style="margin-left: 15%; margin-top:-7.7rem;">
  <p class="card-subtitle mb-2 text-muted" style=" margin-left: 70px; font-size: 13px " >Saldo total</p>
  <p class="card-subtitle mb-2 text-muted" style="margin-top: px; margin-left: 45px; font-size: 30px; font-weight: bold;">R$00,00</p>
  <p class="card-subtitle mb-2 text-muted" style=" margin-left: 70px; font-size: 10px;" >Extrato mensal</p>
</div>

</body>

</html> 