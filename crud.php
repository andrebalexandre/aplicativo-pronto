<?php
        $email = $_POST["Email"];
        $senha      = $_POST["Senha"];
        $nome    = $_POST["Nome"];
        $telefone    = $_POST["Telefone"];
        $data    = $_POST["Data"];
        $cep     = $_POST["Cep"];
        $rua     = $_POST["Rua"];
        $bairro     = $_POST["Bairro"];
        $numero    = $_POST["Numero"];
        $estado   = $_POST["Estado"];
        $complemento    = $_POST["Complemento"];
        include("conecta.php");


    //se clicou no botão Inserir:
    if(isset($_POST["inserir"]) )
    {

    $comando = $pdo->prepare("INSERT INTO cadastro Values('$email','$senha','$nome','$telefone','$data',
    $cep,'$rua','$bairro',$numero,'$estado','$complemento')");
    //para voltar no formulário:
    header("location: pagcadastro_adm.html");
    }

    if(isset($_POST["excluir"]) )
    {

    $comando = $pdo->prepare("DELETE FROM cadastro where email=$email");
    $resultado = $comando->execute();
    
    //para voltar no formulário:
    header("location: pagcadastro_adm.html");

    }

    if(isset($_POST["alterar"]) )
    {
        $comando = $pdo->prepare("UPDATE cadastro set email='$nome',idade=$idade where matricula=$matricula");
        $resultado = $comando->execute();
        header("location: pagcadastro_adm.html");
    }

    if(isset($_POST["listar"]) )
    {
        $comando = $pdo->prepare("SELECT * from aluno");
        $resultado = $comando->execute();
        
        while( $linhas = $comando->fetch()) 
        {
            $m = $linhas["Matricula"]; //nome da coluna xampp
            $n = $linhas["Nome"];
            $i = $linhas["Idade"];

            echo("Matricula: $m Nome: $n Idade: $i <br>");
        }
    }