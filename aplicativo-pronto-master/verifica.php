<?php

  $login = $_POST ["login"]; //pega o input
  $senha = $_POST ["senha"];

    include("conecta.php"); // conectar com banco de dados

    $comando = $pdo->prepare("SELECT * FROM 'login' WHERE login='$login' and senha='$senha' ");
    $resultado = $comando->execute();
    $n = 0;
    $admin= "n";
    while ( $linhas = $comando->fetch() )
    {
        $n = 1;
        $admin = $linhas ["admin"];
    }

    if($n == 0)
    {
        header ("Location: pglogin1.html");
    }

    if($n == 1)
    {
        if($admin == "s")
        {
            header ("Location: pgloginadmin.html");
        }

        else
        {
            header ("Location: principal.html");
        }
    }

?>