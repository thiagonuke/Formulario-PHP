<?php

session_start();

$categorias = []; 
$categorias[] = 'infantil';
$categorias[] = 'adolescente';
$categorias[] = 'adulto';   
$categorias[] = 'idoso';

//print_r($categorias);

$nome = $_POST['nome'];
$idade = $_POST['idade'];

if(empty($nome))
{
    $_SESSION['Mensagem de erro'] = 'O nome nao pode ser vazio, preencha-o novamente.';
    header('location: index.php');
    return;
}

else if(strlen($nome) < 3){
    $_SESSION['Mensagem de erro'] = 'O nome deve conter mais que 3 caracteres';
    header('location: index.php');
    return;
}

else if(strlen($nome) > 40)
{
    $_SESSION['Mensagem de erro'] = 'O nome é muito extenso';
    header('location: index.php');
    return;
}
else if(!is_numeric($idade)){
    $_SESSION['Mensagem de erro'] = 'A idade deve conter um valor numerico';
    header('location: index.php');
    return;
}

if ($idade >= 6 && $idade <= 12)
{
    for ($i = 0; $i <= count($categorias); $i++)
    {
        if($categorias[$i] == 'infantil')
            $_SESSION['Mensagem de sucesso'] = "O nadador ".$nome. " compete na categoria" .$categorias[$i];
            header('location: index.php');
            return;
    }
}

else if($idade >= 13 && $idade <= 18)
{
    for ($i = 0; $i <= count($categorias); $i++)
    {
        if($categorias[$i] == 'adolescente')
            $_SESSION['Mensagem de sucesso'] =  "O nadador ".$nome. " compete na categoria " .$categorias[$i];
            header('location: index.php');
            return;
    }
}

else{
    for ($i = 0; $i <= count($categorias); $i++)
    {
        if($categorias[$i] == 'adulto')
            $_SESSION['Mensagem de sucesso'] = "O nadador ".$nome. " compete na categoria" .$categorias[$i];
            header('location: index.php');
            return;
    }
}

?>
