<?php

session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de inscrição</title>
</head>
<body>

    <h1>Formulario para inscrição de competidores</h1>

    <div class="area-formulario">
       
        <form class="formulario" action="script.php" method="post">
            <?php
            $mensagemDeSucesso = isset($_SESSION['Mensagem de sucesso']) ? $_SESSION['Mensagem de sucesso'] : '' ;
            if(!empty($mensagemDeSucesso))
            {
                echo $mensagemDeSucesso;
            }

            $mensagemDeErro = isset($_SESSION['Mensagem de erro']) ? $_SESSION['Mensagem de erro'] : '' ;
            if(!empty($mensagemDeErro))
            {
                echo $mensagemDeErro;
            }
            ?>
            <p>Seu nome: <br> <input type="text" name="nome" placeholder="Insira seu nome:"/></p>
            <p>Sua idade: <br> <input type="text" name="idade" placeholder="Insira sua idade:"/></p>
            <p><input type="submit" value="Enviar"/></p>
        </form> 

    </div>
</body>

<style>
*{
    padding: 0px;
    margin: 0px;
    box-sizing: border-box;

}

body{
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    background-color: #9077ED;
}

h1{
    margin-top: 30px;
    font-size: 33px;
    font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;

}

.area-formulario{
    width: 400px;
    height: 340px; border: 5px solid black;
    display: flex;
    margin-top: 140px;
    background-color: #C07BE0;
    border-radius: 8px;
    box-shadow: 3px 6px 5px;
    display: flex;
    flex-direction: row;
    justify-content: center;
    align-items: center;
}

.formulario{
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: space-between;
}
input{
    padding: 5px;
    background-color: rgb(74, 61, 61);
    font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
    border-radius: 5px;
    color: #9077ED;
}
input::placeholder{
    color: #9077ED;
}
p{
    margin: 30px;
    font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
}

</style>




</html>