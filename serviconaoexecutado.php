<html>
    <head>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js" integrity="sha512-GsLlZN/3F2ErC5ifS5QtgpiJtWd43JWSuIgh7mbzZ8zBps+dvLusV+eNQATqgA/HdeKFVgA5v3S/cIrLF7QnIg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="js/word.js"></script>
    <link rel="stylesheet" href="css/stilophp.css">
    </head>

<?php
include('head/head.php');
/*****************dados da ação*********************** */
$dataacontecimento=$_POST["dataacontecimento"];
$descriçãoproduto=$_POST["descriçãoproduto"];
$valor=$_POST["valor"];
$pg =$_POST["pg"];
$prazosv= $_POST["prazosv"];
$valortotal= $_POST["valortotal"];
$op= $_POST["op"];
$desc= $_POST["desc"];
$qtcontato=$_POST["qtcontato"];
$sim=$_POST["sim"];

?>

<?php
echo
"
<div class='content'>
<div id='content'>
<center>EXMO (A) SR(A) JUIZ (A) DA VARA DO JUIZADO ESPECIAL CÍVEL DE ITAPEMA;</center><br>
<b>REQUERENTE:</b>  $nomeautor    , 
nacionalidade: $nacautor, 
estado civil:   $estadocivilautor   ,  
profissão: $profiautor     , 
inscrito(a) no CPF sob o nº $cpfautor     , 
residente e domiciliado(a) na  $rua    , Bairro $bairro,   Cidade:  $cidade no Estado $estado    , CEP:  $cep    ,
telefone(s): $telefoneautor     , 
vem, à presença de Vossa Excelência,  propor a presente
<br><br>
<h2>AÇÃO de OBRIGAÇÃO DE FAZER</h2><br>
<i>(PRESTAÇÃO DE SERVIÇO – RÉU PESSOA FISICA - Serviço NÃO executado – obrigação de fazer)
</i>
<br><br>
em face da <b> PARTE REQUERIDA</b>  $nomereu    , 
nacionalidade: $nacreu, 
estado civil:   $estadocivilreu  ,  
profissão: $profireu    , 
inscrito(a) no CPF sob o nº $cpfreu     , 
residente e domiciliado(a) na  $ruareu    , Bairro $bairroreu, Cidade:  $cidadereu/$estadoreu    , CEP:  $cepreu    ,
telefone(s): $telefonereu     , 
em decorrência dos motivos de fato e de direito a seguir aduzidos.

<br>
<h2>DOS FATOS</h2>
&nbsp &nbsp &nbsp  Em <i> $dataacontecimento</i> , a parte requerente contratou os serviços da parte requerida consistente em: $descriçãoproduto, pelo preço de R$ $valor, pago da seguinte forma: $pg.
Foi assinalado o prazo de <i> $prazosv</i> dias para a conclusão do serviço contratado. <br>

&nbsp &nbsp &nbsp A obrigação da parte requerente era o pagamento do 
preço acertado e, em contrapartida, 
a obrigação da parte requerida era a execução do 
serviço dentro do prazo assinalado.
<br>
&nbsp &nbsp &nbsp Ocorre que a parte requerida <i> $op, $desc </i>
Diante disso, a parte requerente entrou em contato com a parte requerida por <i> $qtcontato </i> vez (es). Porém, até hoje, só recebeu desculpas protelatórias por parte da requerida para resolver o problema da parte requerente.
A pretensão da parte requerente fundamenta-se no fato de que a parte requerida descumpriu a execução do contrato firmado, 
CONTUDO,<i> $sim<br>
$tutelaantecipada </i>

<h2>DOS PEDIDOS</h2>
<br>
Com base no exposto, requer:
<br>
a)	que a parte requerida seja citada da presente ação e intimada para comparecer pessoalmente à Audiência de Conciliação, a ser designada no ato da distribuição, sendo que o não comparecimento importará a pena de revelia;
No mérito, que seja julgado procedente para:
<br>
b)	 Condenar a parte requerida a EXECUTAR (ou CONCLUIR) O SERVIÇO, conforme contratado, no prazo legal ou estipulado pelo MM. Juiz, sob pena de aplicação de multa diária, independentemente da conversão da obrigação em perdas e danos.
Pretende demonstrar o alegado por todos os meios de prova admitidos em Direito. 

<br><i>
$idoso $tutelaantecipada</i>
Atribui à causa o valor de R$<i> $valortotal </i>
Nestes termos, pede deferimento.
<br><br><br>
<center> _____________________________________________________<center>
<br>
<center>$nomeautor</center>
<br><br>  <center>ASSINATURA DA PARTE REQUERENTE<center>
<br><br><br>
<script src='js/data.js'>;</script>
</div>
</div>
"
;

?>

 <br>   



<div id="content" class="content">
<script type="text/javascript"></script>
</div>
<div>
    <center>
<button id="myButton" onclick="btn('content');">Gerar Doc Word</button>
<button id="myButton" onclick="downloadPDF()" >Gerar Doc PDF</button> 
 <br><br>
<script src="js/script.js"></script>
    </center>
</div>