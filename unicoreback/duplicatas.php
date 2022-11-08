<?php
session_start();
include('includes/conexao.php');
include('includes/html.php');
include('includes/header.php');
?>




<div class="MENU" style=" margin-top: 15px; margin-left: 20%;  ">
  <ol class="breadcrumb">
    <li class="breadcrumb-item active"  aria-current="page" style="color: #0e4277; !important"><a href="">Visão Geral</a></li>
    <li class="breadcrumb-item active" aria-current="page" style="color: #0e4277; !important">Financeiro</li>
    <li class="breadcrumb-item active" aria-current="page" style="color: #0e4277; !important">Duplicatas</li>
    <nav class="navbar navbar-expand-lg bg-light">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" style= "color:#0e4277; margin-left: 1050px; margin-top: -3.5rem; !important ">
           Imprimir
          </a>
          
          <ul class="dropdown-menu"style= "color:#0e4277; margin-left: 1050px; margin-top: -1.2rem; width: 0%;!important ">
            <li><a class="dropdown-item" href="#" >PDF</a></li>
            <li><a class="dropdown-item" href="#">Excel</a></li>
        </li>
       
</nav>
  </ol>
  </div>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


  <div class="modal fade" id="financeasa" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="margin-top: 5%; border-radius:0px; !IMP ">
  <div class="modal-dialog" role="document">
    <div class="modal-content"style="margin-top: -1rem; border-radius:0px;">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel" style=" font-weight: bold; color:#0e4277;">Fluxo de Cheque</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" >
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="" method="POST">

        <div class="modal-body">

            <div class="form-group" style="padding: 10px;!important">
                <label> Destinatario </label>
                <input type="text" name="nome" class="form-control" placeholder="Digite um Favorecido...">
            </div>
            <div class="form-group" style="padding: 10px;!important">
                <label> Data de Inclusão </label>
                <input type="date" name="Firstname" class="form-control" placeholder="Digite o Sobrenome...">
            </div>
            <div class="form-group"style="padding: 10px;!important">
                <label> Compensação </label>
                <input type="date" name="email" class="form-control checking_email" placeholder="Digite um Email...">
                <small class="error_email" style="color: red;"></small>
            </div>
            <div class="form-group"style="padding: 10px;!important">
                <label>Conta Bancaria</label>
                <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                  <option selected>Selecionar uma Conta...</option>
                  <option value="1"></option>
                  <option value="2"></option>
                  <option value="3"></option>
                </select>
            </div>
            <div class="form-group" style="padding: 10px;!important">
                <label> Numero </label>
                <input type="text" name="confirmpassword" class="form-control" placeholder="Digite a numeração do Cheque..">
            </div>
            <div class="form-group" style="padding: 10px;!important">
                <label>Valor </label>
                <input type="text" name="confirmpassword" class="form-control" placeholder="Digite um Valor...">
            </div>

        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Abortar</button>
            <button type="submit" name="" class="btn btn-primary">Incluir</button>
        </div>
      </form>

    </div>
  </div>
</div>
</div>

</div>
  
<main style="margin-top:-5rem; margin-left: 18%;  ">
<div class="card" style="width: 80%; border-radius: 0px;">
        <h1 style="font-size:25px; margin:20px; margin-left: 20px; font-weight: bold; color:#0e4277;">Desconto Duplicatas / Boletos</h1>
        <select class="form-select form-select-sm" aria-label=".form-select-sm example" style="width: 30%; margin-left: 2%;">
  <option selected>Selecionar empresa...</option>
  <option value="1"></option>
  <option value="2"></option>
  <option value="3"></option>
</select>
<button type="button" class="btn btn-success" data-toggle="modal" data-target="#financeasa" style="margin-left:34%; margin-top:-2rem; width:18%; padding: -1.8rem;">Adicionar</button>

        <div class="btn-group btn-group-sm" role="group" aria-label="Small button group" style="width: 10px; margin-top: 10px; margin-left: 2%; ">
  <button type="button" class="btn btn-outline-dark" style="border-radius: 3px; !important" >Todos</button>
  <button type="button" class="btn btn-outline-dark" style="border-radius: 1px; !important">Saídas</button>
  <button type="button" class="btn btn-outline-dark" style="border-radius: 3px; !important">Entradas</button>
</div>

<div class="pesquisar"style="margin-top: -2.4rem;">
<form class="form-inline my-2 my-lg-0" style="width: 30%; display:flex; margin-left: 68%;  ">
      <input class="form-control mr-sm-2" type="search" placeholder="Pesquisar" aria-label="Pesquisar" style="border-radius:0px; !importat">
    </form>
    </div>   
            <table class=" table table-striped table-hover  " style="width: 99%; margin-top: 30px; margin-left: 5px; ">
                        <thead>
                            <tr style="background:#E9E9E9;
    font-weight: 700;
    font-style: normal;
    font-size: 15px;">
                            <th scope="col" style="color:#0e4277;">Cliente</th>
                            <th scope="col" style="color:#0e4277;">Inlusão</th>
                            <th scope="col" style="color:#0e4277;">Vencimento</th>
                            <th scope="col" style="color:#0e4277;">Conta Bancaria</th>
                            <th scope="col" style="color:#0e4277;">Número</th>
                            <th scope="col" style="color:#0e4277;">Valor </th>
                            <th ></th>

                            </tr>
                        </thead>
                        <tbody class="table-group-divider"
                        >
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>R$00,00</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>R$00,00</td>
                                <td></td>
                            </tr>

                        </tbody>
                        </table>
                        

</div>
</div>                        
</main>
<div class="card" style="width: 77.1rem; margin-left: 362px; border-radius:0px; " >
<div class = "vertical " style="border-left: 1px solid black;height: 80px;position:absolute;left: 17%; margin-top:30px; background: rgb(161, 161, 161); "></div>
  <div class="card-body" style=" margin-top: 10px;margin-left: 2%; !important " >
  <p class="card-subtitle mb-2 text-muted" style=" margin-left: 25px; font-size: 13px" >Vencendo Hoje</p>
  <p class="card-subtitle mb-2 text-muted" style="margin-top: px; margin-left: 18px; font-size: 30px; font-weight: bold;">R$00,00</p>
  <p class="card-subtitle mb-2 text-muted" style=" margin-left: 30px; font-size: 10px;" >Extrato Diario</p>
</div>

  <div class="card-body" style="margin-left: 17%; margin-top:-7.7rem;">
  <p class="card-subtitle mb-2 text-muted" style=" margin-left: 20px; font-size: 13px " >A Vencer este mês</p>
  <p class="card-subtitle mb-2 text-muted" style="margin-top: px; margin-left: 18px; font-size: 30px; font-weight: bold;">R$00,00</p>
  <p class="card-subtitle mb-2 text-muted" style=" margin-left: 30px; font-size: 10px;" >Extrato mensal</p>
</div>
<div class = "vertical " style="border-left: 1px solid black;height: 80px;position:absolute;left: 32%; margin-top:30px; background: rgb(161, 161, 161); "></div>
<div class="card-body" style="margin-left: 32%; margin-top:-7.7rem;">
  <p class="card-subtitle mb-2 text-muted" style=" margin-left: 30px; font-size: 13px " >Saldo total</p>
  <p class="card-subtitle mb-2 text-muted" style="margin-top: px; margin-left: 18px; font-size: 30px; font-weight: bold;">R$00,00</p>
  <p class="card-subtitle mb-2 text-muted" style=" margin-left: 30px; font-size: 10px;" >Extrato mensal</p>
</div>
</body>

</html> 