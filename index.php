<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clínica</title>
    <link rel="stylesheet" href="style1.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
</head>

<body>
    <header>
        <h1>Cadastro de novos pacientes</h1>
    </header>

    <main>
        <?php
        //se existir a variável, mostrar ela
        if (isset($_SESSION['msg'])) {
            echo $_SESSION['msg'];
            unset($_SESSION['msg']);  //destrui a variável global para imprimir apenas uma vez
        }

        ?>
        <section>
            <form action="process.php" method="post"> <!--As ações desse formulário vai para a página setada (proessa.php)-->
                <label>Nome:</label><br />
                <input placeholder="Nome completo" type="text" name="name" id="idname" /><br />

                <div class="lineBreak">
                    <div style="display: flex; flex-direction: column; width: 100%">
                        <label>Email:</label><br />
                        <input placeholder="exemplo@dominio.com" type="email" name="email" id="idemail" /><br />
                    </div>
                    <div style="display: flex; flex-direction: column; width: 100%">
                        <label>CPF:</label><br />
                        <input placeholder="Digite somente os números" type="number" name="cpf" id="idcpf" /><br />
                    </div>
                </div>



                <div class="lineBreak">
                    <div style="display: flex; flex-direction: column; width: 100%">
                        <label>Data de nascimento:</label><br />
                        <input type="date" name="date" id="iddate" /><br />
                    </div>

                    <div style="display: flex; flex-direction: column; width: 100%">
                        <label>Telefone:</label><br />
                        <input placeholder="xxxxxxxx" type="tel" name="tel" id="idtel" /><br />
                    </div>
                </div>




                <label>Endereço residencial:</label><br />
                <input placeholder="Digite o endereço completo" type="text" name="address" id="idaddress" /><br />

                <div class="buttons">
                    <input type="submit" value="Cadastrar" />

                    <button><a href="list.php">Visualizar cadastros</a></button>
                </div>


            </form>
        </section>
    </main>
</body>
</html>