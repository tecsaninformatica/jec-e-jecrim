<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Petição</title>
    <form action="serviconaoexecutado.php" method="post">
    <style>
                                          textarea{
                                            width:100%;
                                            height: 300px;
                                          }
                                        </style>
    <?php
   
    
    include('head/header.php');
    ?>
    <div class="topo">
      <div class="container">
          <div class="row">
              <div class="col-lg-12"> 
                      <div class="card mb-5">
                          <h5 class="card-header">
                              <i class="fa fa-search"></i> <label class="control-label">Formulário requerente</label>
                          </h5>
                          <div class="card-body">
                              <div class="row">
                                  <div class="col-lg-5">
                                      <div class="form-group">
                                          <label for="cpf"> Data do fato</label>  
                                          <input id="text" class="form-control" type="date" name="dataacontecimento" id="dataacontecimento">  
                                        </div>
                                  </div> 
                                  <!--data do fato------------>
                                  <div class="col-lg-5">
                                    <div class="form-group">
                                        <label for="cpf"> Valor do dano</label>  
                                        <input id="text" class="form-control" type="text" name="valor" placeholder="Valor">
                                    </div>
                                  </div>
            
                                    <!---Valor DA AÇÃO---------------------->
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                           <label for="cpf"> 
                                            <center> <i>Descreva o prazo prometido para entrga ou conclusão do serviço, acertado no contrato</i></label></center>
                                            <textarea name="prazosv" id="prazosv" ></textarea>     
                                        </div>
                                    </div>
                                    </div>
                            <div class="row">
                          </div></div>
                            <div class="card-footer text-danger text-right small">
                              * Campo obrigatório
                            </div>
                        </div>
                    </div>
                </div>
            </div>
          
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="card mb-5">
                <h5 class="card-header">
                    <i class="fa fa-search"></i> <label class="control-label">Formulário requerente</label>
                </h5>
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                    <label for="cpf"> <center> <i>Descreva qual o serviço e detalhes sobre o contrato. Ex: serviço de serralheiro - fabricação e instalação de um portão automatizado, incluso motor marca xxxx, modelo xxxx, etc</i></label>  
                                    </center><textarea name="descriçãoproduto" id="descriçãoproduto" ></textarea>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                <center><label for="cpf"> Ocorre que a parte requerida</label>  </center>
                                    <input style="text-align: center" type="radio" name="op" value="descumpriu parcialmente o contratado entre as partes, pois não concluiu até a presente data o(s) seguinte(s) serviço(s)"/> descumpriu parcialmente o contratado entre as partes, pois não concluiu até a presente data o(s) seguinte(s) serviço(s)<br />
                                   <input type="radio" name="op" value="descumpriu integralmente o contratado entre as partes, pois não houve a execução de nenhuma das etapas do serviço contratado"/> descumpriu integralmente o contratado entre as partes, pois não houve a execução de nenhuma das etapas do serviço contratado<br />
                                   <input type="radio" name="op" value="descumpriu o contratado entre as partes ao executar os serviços de modo divergente do combinado, pois "/> descumpriu o contratado entre as partes ao executar os serviços de modo divergente do combinado, pois <br />
                                                                                       
                                </div>
                            </div>
                            <div class="row">
                            </div>
                        </div>
                        <div class="card-footer text-danger text-right small">
                                            * Campo obrigatório
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


 <!----------------------------Segunda parte------------------------------------->
  <!----------------------------Segunda parte------------------------------------->
   <!----------------------------Segunda parte------------------------------------->
    <!----------------------------Segunda parte------------------------------------->
     <!----------------------------Segunda parte------------------------------------->
<div class="topo">
    <div class="container">
        <div class="row">
            <div class="col-lg-12"> 
                <div class="card mb-5">
                    <h5 class="card-header">
                        <i class="fa fa-search"></i> <label class="control-label">lado2</label>
                    </h5>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group"><label for="cpf"> <center> <i>Descreva a quantidade de vezes que ligou para tentar um acordo, ou falar do defeito</i></label>  
                                  </center><textarea name="qtcontato" id="qtcontato"></textarea>     
                                </div>
                            </div>
                        </div>  
                    </div> 

                      <div class="card-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group"><label for="cpf"> <center> <i>Descreva o modo de pagamento. Ex: Pagou uma entrada no dia xxxx, no valor de xxx, e o restante ficou para ser acertado no dia da entrega do serviço, etc</i></label>  
                                  </center><textarea name="pg" id="pg"></textarea>     
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
          
          <div class="container">
            <div class="row">
                <div class="col-lg-12"> 
                        <div class="card mb-5">
                            <h5 class="card-header">
                                <i class="fa fa-search"></i> <label class="control-label">lado1</label>
                            </h5>
                        
                              <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group"><label for="cpf"> <center> <i>Digite qual serviço entre o combinado que não foi realizado. Ex: faltou a instalação elétrica e pintura do portão ou as diferenças de características entre os serviços</i></label>  
                                          </center><textarea name="desc" id="desc"></textarea>
                                            
                                        </div></div>



<div class="col-lg-12">
    <div class="form-group">
    <center><label for="cpf"> Ocorre que a parte requerida</label>  </center>
    <input type="radio" name="sim" value=" a parte requerente sustenta que ainda tem interesse no negócio, por isso ajuíza a presente ação, no sentido de OBRIGAR a parte requerida a cumprir o contrato em questão, no sentido de executar (ou concluir) o(s) serviço(s) contratado(s)."> Ainda Tem interesse no serviço <br>
    <input type="radio" name="sim" value="a parte requerente sustenta que não tem mais interesse no negócio, por isso ajuíza a presente ação, no sentido de OBRIGAR a parte requerida a ressarcir os valorer pagos. ">Não Tem mais interesse no Serviço <br><br>
    <input class="form-control" type="text" name="valortotal" id="valortotal" placeholder="Valor total da causa"><br>
    <input type="checkbox" name="tutelaantecipada" id="tutelaantecipada" value="aqui escolheu a tutelaantecipada">Tutela de Urgência <br>
    <input type="checkbox" name="idoso" id="idoso" value="corre pro veio num morre">Idoso
                                                  
    </div>
</div>


                                    </div>
                                </div>
                            <div class="card-footer text-danger text-right small">
                                * Campo obrigatório
                    </div></div></div>
                  </div></div></div>
  <!--------------------------------fim segunda parte-------------------------------------------------->
  <!--------------------------------fim segunda parte-------------------------------------------------->
  <!--------------------------------fim segunda parte-------------------------------------------------->
  <!--------------------------------fim segunda parte-------------------------------------------------->
  <center> <button id="myButton" type="submit" value="enviar">Enviar</button></center>                  
           <br><br>                             
</form>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="js/CEP.js"></script>
<script src="js/cepre.js"></script>
</body>
</html>
</body>