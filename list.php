<?php
/*session_start();*/
include_once("database.php");
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style2.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <title>Lista</title>
</head>

<body>
    <header>
        <h1>Listagem de pacientes</h1>
    </header>

    <main>
        <?php
        /*if (isset($_SESSION['msg'])) {
            echo $_SESSION['msg'];
            unset($_SESSION['msg']);
        }*/



        $result_clientes = "SELECT * FROM novos";   //selecione todas as colunas da tabela chamada "novos" e guarde na variável.
        $resultado_pacientes = mysqli_query($conn, $result_clientes);  //executando a consulta = primeiro realiza a conexão com o bd através da variável que está armazenada a conexão, seguido da variável onde esta armazenado os dados da tabela
        while ($row_paciente = mysqli_fetch_assoc($resultado_pacientes)) {  //while para percorrer o array lendo o valor de cada linha e armazenando na variável declarada

            
            //imprimindo cada dado contido nas colunas da tabela "novos" do bd "clientes"
            //$row_paciente['id'] == imprima o dado armanezado na coluna "id" armazenado na variável declarada

            /*
            echo "<div class='info'><b> ID:</b> " . $row_paciente['id'] . "</div><br />";  
            echo "<div class='info'><b> Nome:</b> " . $row_paciente['name'] . "</div><br />";
            echo "<div class='info'><b>Email:</b> " . $row_paciente['email'] . "</div><br />";
            echo "<div class='info'><b>Data de nascimento:</b> " . $row_paciente['birth'] . "</div><br />";
            echo "<div class='info'><b>Telefone:</b> " . $row_paciente['tel'] . "</div><br />";
            echo "<div class='info'><b>CPF:</b> " . $row_paciente['cpf'] . "</div><br />";
            echo "<div class='info'><b>Endereço residencial:</b> " . $row_paciente['address'] . "</div><br />";
            echo "<div class='info'><b>Dia do cadastro:</b> " . $row_paciente['created'] . "</div><br />";
            echo "<div class='info'><b>Última modificação:</b> " . $row_paciente['modified'] . "</div><hr />";*/

            echo "<div class='infoColumn'>
                    <div class='infoRow'><b> ID:</b>&nbsp " . $row_paciente['id'] . "</div><br />" .
                    "<div class='infoRow'><b>Nome:</b>&nbsp" . $row_paciente['name'] . "</div><br />" . 
                    "<div class='infoRow'><b>Email:</b>&nbsp" . $row_paciente['email'] . "</div><br />" .
                    "<div class='infoRow'><b>Data de nascimento:</b>&nbsp" . $row_paciente['birth'] . "</div><br />" . 
                    "<div class='infoRow'><b>Telefone:</b>&nbsp" . $row_paciente['tel'] . "</div><br />" . 
                    "<div class='infoRow'><b>CPF:</b>&nbsp" . $row_paciente['cpf'] . "</div><br />" . 
                    "<div class='infoRow'><b>Endereço residencial:</b>&nbsp" . $row_paciente['address'] . "</div><br />" . 
                    "<div class='infoRow'><b>Dia do cadastro:</b>&nbsp" . $row_paciente['created'] . "</div><br />" . 
                    "<div class='infoRow'><b>Última modificação:</b>&nbsp" . $row_paciente['modified'] . "</div>" . 
                "</div>";


        }

        ?>

        <button onclick="javascript:window.location.href='index.php'">Voltar</button> <!--Botão de voltar e os campos voltam sem preencher-->
    </main>


</body>
<!-- PAGINAÇÃO
 
 /*
 $pagina_atual = filter_input(INPUT_GET, 'pagina', FILTER_SANITIZE_NUMBER_INT); //a variável recebe o valor da página que está na url do navegador
 $pagina = (!empty($pagina_atual)) ? $pagina_atual : 1; //se a variável for diferente de vazio, coloco  valor dela mesmo, se não, coloco página 1.

 //setar a qntd de itens por página
 $itens_pag = 3;

 //calcular o início da visualização
 $inicio = ($itens_pag * $pagina) - $itens_pag;

 $result_clientes = "SELECT * FROM novos LIMIT $inicio, $itens_pag";   //selecione todas as colunas da tabela chamada "novos" e guarde na variável. Limite a visualização de acordo com o setado

 //paginação - somar a qnt de pacientes cadastrados
 $result_pg = "SELECT COUNT (id) AS num_result FROM novos"; // conte quantos 'ids' exitem na tabela usuários e inclua na variável num_result
 $resultado_pag = mysqli_query($conn, $result_pg);
 $row_pag = mysqli_fetch_assoc($resultado_pag);
 echo $row_pag['num_result'];*/
-->

</html>