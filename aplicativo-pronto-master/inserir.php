<?php
    include("conecta.php");

    $email = $_POST["Email"];
    $senha      = $_POST["Senha"];
    $nome    = $_POST["Nome"];
    $telefone    = $_POST["Telefone"];
    $data    = $_POST["Data_Nascimento"];
    $cep     = $_POST["Cep"];
    $rua     = $_POST["Rua"];
    $bairro     = $_POST["Bairro"];
    $numero    = $_POST["Numero"];
    $estado   = $_POST["Estado"];
    $complemento    = $_POST["Complemento"];
    
    //se clicou no botão Inserir:
    if(isset($_POST["inserir"]) )
    {

    $comando = $pdo->prepare("INSERT INTO aluno Values($email,'$senha','$nome','$telefone','$data','$data',
    '$cep','$rua','$bairro','$numero','$estado','$complemento')");
    
    $resultado = $comando->execute();
    //para voltar no formulário:
    header("location: pgcadastro1.html");
    }