<?php
    $hostname = "localhost";  //indica o endereço do servidor onde se encontra o banco de dados
    $bancodedados = "clientes";  //nome do banco de dados
    $usuario = "root";  //usuário padrão configurado no xampp é "root"
    $senha = "";  //no xampp o usuário padrão não tem senha


    //sequência correta para conexão no banco de dados
    $conn = mysqli_connect($hostname, $usuario, $senha, $bancodedados);  //conexão utilizada para conectar ao BD já existente no phpMyAdmin
    //$mysqli = new mysqli($hostname, $usuario, $senha, $bancodedados); - verificar diferença entre essa forma e a outra

    if ($conn->connect_errno) {
        echo "falha ao conectar:(" . $conn->connect_errno . ")" . $conn->connect_errno;  //se ocorrer algum erro de conexão mostrar mensagem de erro na tela
    }

    else 
        echo "Conectado ao Banco de Dados";
        

?>