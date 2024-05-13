<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
body{
    margin: 20px;
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
    $marca="";
    $modelo="";
    $placa="";
    $valorveiculo="";
    $transferencia="";
    $dataposse="";
    $dataentregadoveiculo="";
    $valorveiculofipe="";

include 'head.php';
echo "
<center>EXMO (A) SR(A) JUIZ (A) DA VARA DO JUIZADO ESPECIAL CÍVEL DE ITAPEMA;</center><br>
DOS FATOS
<br>
Em $datanegocio, a parte requerente firmou com a parte requerida um contrato de compra e venda, sendo que vendeu para esta o seu veículo de 
marca:  $marca    , modelo: $modelo     , placa: $placa     , no valor de R$ $valorveiculo     .
Por força do contrato firmado entre a parte requerente e a parte requerida, foi transferida imediatamente a posse do veículo para o comprador (parte requerida), além da entrega da seguinte documentação:
    $transferencia
(  ) Procuração pública com poderes especiais.
(  ) DUT (Documento Único de Transferência) devidamente preenchido e assinado pelas partes.
(  ) Outros:      
Como já dito, a parte requerente transferiu imediatamente a posse do veículo para a parte requerida, efetivando assim no dia $dataposse a tradição do referido bem. Desde então, a parte requerida ficaria responsável em efetivar a transferência do veículo, bem como pagar quaisquer débitos do mesmo a partir daquela data.
A parte requerente tomou as cautelas necessárias junto ao DETRAN  efetuando na época o comunicado de venda.
Acontece que até a presente data, a parte requerida não procedeu à transferência para o seu nome, providência que caberia a ela fazer e não à parte requerente. 
Desta feita, considerando que não possui mais a posse do bem, nem a sua propriedade desde $dataentregadoveiculo, a parte requerente vem propor a presente ação, a fim que a parte requerida seja compelida a efetivar a transferência do bem para o seu nome ou para terceiro, com o intuito de excluir/substituir o nome da parte requerente do cadastro de proprietário do referido veículo do sistema do DETRAN. 
A parte requerente procurou o DETRAN para proceder o bloqueio administrativo do veículo, com intuito de compelir a parte requerida a promover a regularização da propriedade do bem para o seu nome, porém foi-lhe dito que só seria possível por determinação judicial.
A parte requerente tentou administrativamente resolver a questão, porém não logrou êxito, motivos pelos quais propõe a presente ação. 

DOS PEDIDOS
Com base no exposto, requer:
a)	Que a parte requerida seja citada da presente ação e intimada para comparecer pessoalmente à Audiência de Conciliação, a ser designada no ato da distribuição, sendo que o não comparecimento importará a pena de revelia;
 No mérito, que seja julgado procedente o pedido para:
b)	OBRIGAR a parte requerida a TRANSFERIR A TITULARIDADE do veículo em questão para o seu nome ou terceiro junto ao DETRAN correspondente, sob pena de aplicação de multa diária a ser arbitrada pelo MM. Juiz.

Pretende demonstrar o alegado por todos os meios de prova admitidos em Direito. 
Atribui à causa o valor de R$ $valorveiculofipe.
Nestes termos, pede deferimento.
"
    ?>
</body>
</html>