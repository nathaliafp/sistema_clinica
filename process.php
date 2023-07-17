<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado do cadastro</title>
</head>
<body>
    <?php
    session_start();
    include_once("database.php"); //conexão com o banco de dados       

    //as variáveis abaixo estão recebendo os valores("name") do formulário
    $name = $_POST['name'];
    $email = $_POST['email'];
    $birth = $_POST['date'];
    $telefone = $_POST['tel'];
    $cpf = $_POST['cpf'];
    $address = $_POST['address'];


    //insira no banco de dados "clientes", na tabela "novos" nas colunas listadas respectivamente, os valores das variáveis listadas respectivamente.
    $result_clientes = "INSERT INTO novos (name, email, birth, tel, cpf, address, created) VALUES ('$name', '$email', '$birth', '$telefone', '$cpf', '$address', NOW())"; 

    $resultado_usuario = mysqli_query($conn, $result_clientes); //conexão com a variável do bd, seguido da ação de inserção dos dados no bd


    //verificação se os dados inseridos no formulário foram salvos com sucesso

    //se a conexão retornar um id, significa que os dados foram salvos com sucesso
    if(mysqli_insert_id($conn)) {   
        $_SESSION['msg'] = "<p style='color:green;'>Paciente cadastrado com sucesso!<p>";
        header("Location: index.php");
    }
    else {
        $_SESSION['msg'] = "<p style='color:red;'>Paciente não cadastrado!<p>";
        header("Location: index.php");
    }

    ?>
</body>
</html>

