<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Petição</title>
    <style>
    textarea
    {
      width:100%;
      height: 400px;
    }
                                        </style>
<!-- Bootstrap CSS -->
<form action="vendacarviciooculto.php" method="post">
<?php
include('head/header.php');
?>
<!--------------------------inicio dos fatos--------------------------------------------------------------->
    <div class="topo">
      <div class="container">
          <div class="row">
              <div class="col-lg-12"> 
                      <div class="card mb-5">
                          <h5 class="card-header">
                              <i class="fa fa-search"></i> <label class="control-label">Dados do carro</label>
                          </h5>
                          <div class="card-body">
                              <div class="row">
                                  <div class="col-lg-4">
                                      <div class="form-group">
                                          <label for="cpf"> Marca</label>  
                                          <input id="text" class="form-control" type="text" name="marca" id="marca" placeholder="Ex: Toyota, fiat, Chevrolet... ">  
                                        </div>
                                  </div> 
                                  <!--data do fato------------>
                                  <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="cpf"> Modelo</label>  
                                        <input  class="form-control" type="text" name="modelo" id="modelo" placeholder="Modelo">
                                    </div>
                                  </div>
                                  <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="cpf"> Placa</label>  
                                        <input  class="form-control" type="text" name="placa" id="palca" placeholder="Placa">
                                    </div>
                                  </div>
                                  <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="cpf"> Ano</label>  
                                        <input  class="form-control" type="text" name="ano" id="ano" placeholder="Ano">
                                    </div>
                                  </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label for="cpf"> Preço pago</label>  
                                            <input  class="form-control" type="text" name="precodaveda" id="precodaveda" placeholder="Valor pago">
                                        </div>
                                      </div>
                                     
                                      <div class="col-lg-12">
                                        <div class="form-group">
                                          <center>  <label for="cpf">  Descreva o modo de pagamento</label>  
                                          </center><textarea name="pg" id="pg" ></textarea>   
                                        </div>
                                      </div>
                                    </div>
                                     
                            </div>
                            <div class="card-footer text-danger text-right small">
                              * Campo obrigatório
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
          <!--------------------------Nova parte----------------------------------------->
            <div class="container">
                <div class="row">
                    <div class="col-lg-12"> 
                            <div class="card mb-5">
                                <h5 class="card-header">
                                    <i class="fa fa-search"></i> <label class="control-label">Dados do ocorrido</label>
                                </h5>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label for="cpf">  Data do defeito</label>  
                                                <input id="text" class="form-control" type="date" name="datadefeito" id="datadefeito" placeholder="Ex: ">  
                                              </div>
                                        </div> 
                                        <!--data do fato------------>
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <center>  <label for="cpf">  Detalhes defeito/ descrição da ocorrência</label>  
                                                </center><textarea name="detalhesdefeito" id="detalhesdefeito" ></textarea>   
                                              </div>
                                            </div>
                                       
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                              <center>  <label for="cpf">  providencias</label>  
                                              </center><textarea name="providencias" id="providencias"></textarea>   
                                            </div>
                                          </div>
                                          <center>  <label for="cpf">  Valor Gasto</label>
                                          <input type="text" name="prejuizos" placeholder="Valor Gasto">
                                      </div>  
                                  </div>
                                  <div class="card-footer text-danger text-right small">
                                    * Campo obrigatório
                                    </div></div></div></div>
                            </div></div></div> 

  <center> <button id="myButton" type="submit" value="enviar">Enviar</button></center>                  
           <br><br>                             
</form>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="js/CEP.js"></script>
<script src="js/cepre.js"></script>
</body>
</html>
</body>