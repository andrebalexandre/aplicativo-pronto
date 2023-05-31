<?php
    $email = $_POST["Email"];
    $senha      = $_POST["Senha"];

    include("conecta.php");
    
    //se clicou no botão Inserir:
    if(isset($_POST["inserir"]) )
    {

    $comando = $pdo->prepare("INSERT INTO 'login' Values($email,'$senha')");
    
    $resultado = $comando->execute();
    //para voltar no formulário:
    header("location: principal.html");
    }