<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vício oculto</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js" integrity="sha512-GsLlZN/3F2ErC5ifS5QtgpiJtWd43JWSuIgh7mbzZ8zBps+dvLusV+eNQATqgA/HdeKFVgA5v3S/cIrLF7QnIg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="js/word.js"></script>
    <link rel="stylesheet" href="css/stilophp.css">
    <style>
        body{
            text-align: justify;
        }
    </style>
</head>
<body>
    

<?php
 $nomeautor = $_POST["nomeautor"];
 $nacautor =$_POST["nacautor"];
 $estadocivilautor=$_POST["estadocivilautor"];
 $idade =$_POST["idade"];
 $profiautor=$_POST["profiautor"];
 $cpfautor=$_POST["cpfautor"];
 $telefoneautor=$_POST["telefoneautor"];
 $cep=$_POST["cep"];
 $rua= $_POST["rua"];
 $numero= $_POST["numero"];
 $bairro= $_POST["bairro"];
 $cidade=$_POST["cidade"];
 $estado=$_POST["estado"];
 
 
 /******requerido */
 $nomereu = $_POST["nomereu"];
 $nacreu =$_POST["nacreu"];
 $estadocivilreu=$_POST["estadocivilreu"];
 $idadereu =$_POST["idadereu"];
 $profireu=$_POST["profireu"];
 $cpfreu=$_POST["cpfreu"];
 $telefonereu= $_POST["telefonereu"];
 $cepreu=$_POST["cepreu"];
 $ruareu= $_POST["ruareu"];
 $bairroreu= $_POST["bairroreu"];
 $cidadereu=$_POST["cidadereu"];
 $estadoreu=$_POST["estadoreu"];
 $datanegocio="";
 /********dados do veiculos */
$marca=$_POST["marca"];
$modelo=$_POST["modelo"];
$placa=$_POST["placa"];
$ano=$_POST["ano"];
$precodaveda=$_POST["precodaveda"];
$datadefeito=$_POST["datadefeito"];
$detalhesdefeito=$_POST["detalhesdefeito"];
$providencias=$_POST["providencias"];
$prejuizos=$_POST["prejuizos"];
$pg=$_POST["pg"];
$valortotal=$prejuizos;
echo
"
<div style='text-aling:justify'>
<div class='Content'>
<div id='content' text-aling:justify>
<center>EXMO (A) SR(A) JUIZ (A) DA VARA DO JUIZADO ESPECIAL CÍVEL DE ITAPEMA;</center><br>
&nbsp &nbsp &nbsp PARTE REQUERENTE: $nomeautor, nacionalidade: $nacautor, estado civil: $estadocivilautor, profissão:  $profiautor, idade $idade, inscrito no CPF sob o nº: $cpfautor, residente e domiciliado na $ruareu, $bairro, Cidade:  $cidade/$estado, CEP: $cep     , telefone(s):  $telefoneautor, vem, à presença de Vossa Excelência,  propor a presente
<h2>AÇÃO de RESSARCIMENTO</h2>
(VEÍCULO – Réu PESSOA FÍSICA - Compra e venda – VÍCIO OCULTO – Ressarcimento)
<br>
em face da <b> PARTE REQUERIDA</b>  $nomereu    , 
nacionalidade: $nacreu, 
estado civil:   $estadocivilreu  ,  
profissão: $profireu    , 
inscrito(a) no CPF sob o nº $cpfreu     , 
residente e domiciliado(a) na  $ruareu    , Bairro $bairroreu, Cidade:  $cidadereu/$estadoreu    , CEP:  $cepreu    ,
telefone(s): $telefonereu , <br>
<h2>DOS FATOS</h2>
&nbsp &nbsp &nbsp  A parte requerente informa que adquiriu da parte requerida o veículo da marca $marca, modelo $modelo, placa  $placa, ano: $ano,  pelo preço de R$ $precodaveda, pagos da seguinte forma $pg conforme documento anexo. No ato da transação, foi garantido pela parte requerida que o veículo se encontrava em perfeitas condições de uso.
Ocorreu que, em  ".date('d/m/y',strtotime($datadefeito))."         , o veículo apresentou o(s) seguinte(s) defeitos: $detalhesdefeito, que segundo o entendimento da parte requerente e documentos em anexo, eram pré-existentes à compra, contrariando a boa-fé que deve reger as relações contratuais.
Diante do vício no veículo, a parte requerente suportou danos materiais, pois, $providencias.
<br>
&nbsp &nbsp &nbsp Diante disso, a parte requerente pleiteia o ressarcimento do valor de R$ $prejuizos, de forma a ser restabelecido o seu patrimônio e ser recolocado nos parâmetros em que se encontrava, caso não fosse atingido pelo ato culposo da parte requerida.
<br>
<h2>DOS PEDIDOS</h2>
&nbsp &nbsp &nbsp Com base no exposto, requer: <br>
&nbsp &nbsp &nbsp a)	Que a parte requerida seja citada da presente ação e intimada para comparecer pessoalmente à Audiência de Conciliação, a ser designada no ato da distribuição, sendo que o não comparecimento importará a pena de revelia;
 No mérito, que seja julgado procedente o pedido para:
 <br>
 &nbsp &nbsp &nbsp b) Condenar a parte requerida a RESSARCIR a parte requerente no valor de R$ $prejuizos, devidamente atualizado e corrigido, a título de danos materiais.
<br>

&nbsp &nbsp &nbsp Pretende demonstrar o alegado por todos os meios de prova admitidos em Direito. <br>
&nbsp &nbsp &nbsp Atribui à causa o valor de R$ $valortotal .
Nestes termos, pede deferimento.
<br><br><br>
<center> _____________________________________________________<center>
<center>$nomeautor<center>
<br><br><br>  <center>ASSINATURA DA PARTE REQUERENTE<center>
<br><br><br>
<script src='js/data.js'>;</script>
</div>
</div>"
;
?>


<br>   



<div id="content" class="Content">
<script type="text/javascript"></script>
</div>
<div><center>
<button id="myButton" onclick="btn('content');">Gerar Doc Word</button>
<button id="myButton" onclick="downloadPDF()" >Gerar Doc PDF</button> </div></center> <br><br>
<script src="script.js"></script>


</body>
</html>