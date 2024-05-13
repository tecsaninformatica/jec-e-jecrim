<html>
    <head>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js" integrity="sha512-GsLlZN/3F2ErC5ifS5QtgpiJtWd43JWSuIgh7mbzZ8zBps+dvLusV+eNQATqgA/HdeKFVgA5v3S/cIrLF7QnIg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="js/word.js"></script>
    <link rel="stylesheet" href="css/stilophp.css">
    </head>

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
$tutelaantecipada=$_POST["tutelaantecipada"];
$idoso=$_POST["idoso"];



$datavenda=$_POST["datavenda"];
$marca=$_POST["marca"];
$modelo=$_POST["modelo"];
$placa=$_POST["placa"];
$ano=$_POST["ano"];
$precodaveda=$_POST["precodaveda"];
$dataentega=$_POST["dataentega"];
 $ipva= $_POST["ipva"];
 $licenciamento=$_POST["licenciamento"];
 $seguro=$_POST["seguro"];
 $infr=$_POST["infr"];
 $totaldebito= $ipva+$licenciamento+$seguro+$infr;

$pg=$_POST["pg"];
$docentregue=$_POST["docentregue"];
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
AÇÃO de OBRIGAÇÃO DE FAZER <br>
(VEÍCULO – Réu PESSOA FÍSICA - Compra e Venda PARTICULAR – débitos e TRANSFERÊNCIA) <br>

<h2>DOS FATOS</h2>
<br>
&nbsp &nbsp &nbsp Em $datavenda, a parte requerente firmou com a parte requerida um contrato de compra e venda, 
sendo que vendeu para esta o seu veículo de marca: $marca, modelo: $modelo, placa: $placa, ano: $ano, no valor de R$ $precodaveda.
Por força do contrato firmado entre a parte requerente e a parte requerida, foi transferida imediatamente a posse do veículo para o comprador (parte requerida), além da entrega da seguinte documentação:
$docentregue <br>    
&nbsp &nbsp &nbsp Como já dito, a parte requerente transferiu imediatamente a posse do veículo para a parte requerida, efetivando assim no dia <data da entrega do veículo a loja> $dataentega a tradição do referido bem. Desde então, a parte requerida ficaria responsável em efetivar a transferência do veículo, bem como em pagar quaisquer débitos do mesmo a partir daquela data.
Acontece que até a presente data a parte requerida encontra-se inadimplente no valor total de R$ <digite o valor total dos débitos em aberto>, além de não ter realizado a transferência do veículo junto ao DETRAN, conforme demonstrativo abaixo:
Discriminação	Período	Valor total
<br> <br>
IPVA	Exercícios dos anos      
R$  $ipva    
<br>
Licenciamento anual	Exercícios dos anos      
R$  $licenciamento    
<br>
Seguro Obrigatório	Exercícios dos anos      
R$   $seguro   
<br>
Infrações de trânsito	<digite o(s) orgãos de trânsito, código, valor e descrição de cada multa>
R$ $infr     
<br>      


A parte requerente aduz que procurou a parte requerida, porém, esta ainda não havia efetuado a transferência para o seu nome, tampouco honrado com o pagamento dos débitos em aberto.
A parte requerente não teve alternativa senão pagar o valor total de R$ $totaldebito, referente aos débitos relativos a <digite quais os débitos pagos. Ex: IPVA dos anos 2019 e 2020>, para que, em Juízo, pudesse pleitear o seu ressarcimento. Contudo, ainda estão pendentes de pagamentos os demais débitos da planilha acima.
Para piorar ainda mais a situação da parte requerente, os autos de infrações de nºs      , de responsabilidade da parte requerida, foram lançados no prontuário do veículo e, consequentemente, foram lançados no prontuário da parte requerente, já que a parte requerida até hoje não procedeu à efetiva transferência, sendo que a parte requerente poderá ter a sua CNH suspensa/cassada por conta da pontuação injusta.
A parte requerente aduz que é cedido que a propriedade de bens móveis decorre da tradição. Se o comprador não cumpre a sua obrigação de transferir a titularidade do veículo, nem por isto deixará de ser o proprietário. Em consequência, será do proprietário a responsabilidade por todos os débitos incidentes sobre o veículo, independentemente, de ter sido providenciada a transferência de titularidade junto ao DETRAN, que é de natureza meramente administrativa e necessária tão somente para a livre circulação do veículo.
Diante da ausência de solução amigável, a parte requerente ajuíza a presente ação, com o intuito de obrigar a parte requerida a transferir a titularidade do veículo em questão para o seu nome ou de terceiro comprador, bem como, a ressarcir as despesas efetuadas pela parte requerente, no valor atualizado de R$ <digite o valor total pago dos débitos>, e quitar todos os demais débitos ainda pendentes nos órgãos competentes.

DOS PEDIDOS
Com base no exposto, requer:
a)	Que a parte requerida seja citada da presente ação e intimada para comparecer pessoalmente à Audiência de Conciliação, a ser designada no ato da distribuição, sendo que o não comparecimento importará a pena de revelia;
 No mérito, que seja julgado procedente o pedido para:
b)	OBRIGAR a parte requerida a TRANSFERIR A TITULARIDADE do veículo em questão para o seu nome ou terceiro junto ao DETRAN correspondente, arcando com todos os débitos em aberto junto aos órgãos competentes;
c)	 CONDENAR a parte requerida a RESSARCIR a parte requerente no valor de R$ <digite o valor total pago dos débitos>, devidamente atualizado e corrigido, a título de danos materiais.
d)	Oficiar o DETRAN em que o veículo está cadastrado no sentido de determinar a transferência da pontuação da CNH da parte requerente para o prontuário da parte requerida quanto aos registros oriundos de infração cometidas após a compra e venda em comento.

Pretende demonstrar o alegado por todos os meios de prova admitidos em Direito. 
Atribui à causa o valor de R$ <digite a soma do valor do veículo mais a soma dos débitos>.
Nestes termos, pede deferimento.
"
?>