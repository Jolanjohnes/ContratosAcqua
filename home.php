<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    header("Location: index.php");
}
if (isset($_GET['deslogar'])) {
    session_unset();
    session_destroy();
    header("Location: index.php");
}
?>

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

        <style>
            *{
                margin: 0px;
                padding: 0px;
            }
            body 
            {
                margin: 0px;
                background: #f1f1f1;
            }
            img{
                margin-left: 75px;
                
            }

            nav{
                margin-left: 40px;
            }

            ul{
                margin: 0px;
                padding: 0px;
                float: left;
            }
            ul li{
                list-style: none;
                background: #002D69;
                width: 250px;
                border-bottom: 1px solid #fff;
                color: #fff;
            }
            ul li a{
                display: block;
                padding: 8px;
                border-left: 4px solid #444;
                text-decoration: none;
                box-shadow: 2px 2px 5px #ccc;
                color: #fff;
            }
            ul li a:hover{
                border-left: 4px solid #069;
                background: rgba(0, 95, 223,.5);
                color: white;
                text-decoration: none;
            }
            ul li ul{
                display: none;
            }
            ul li:hover ul{
                display: block;
            }
            ul li:hover ul li{
                background: #333;
                margin-left: 50px;

            }
            ul li:hover ul li a{
                color: white;
            }
            ul li:hover ul li a:hover{
                background: #222; border-left: 4px solid #900; 
            }


            html, body, iframe {
                width: 100%;
                height: 640px;
            }
            div#menuLateral{

                background: #002D69;
                padding: 0;
                margin: 0px;
            }
            div#conteudo{
                padding: 0;
                background: #ccc;
                margin: 0px;

            }
            p{
                margin-left: 40px;
                
                color: white;
                font-size: 16px;
            }



        </style>
    </head>
    <body>
        <div class="container-fluid">
            <div class="row">
                <div id="menuLateral" class="col-3">

                    <img src="icones/logoprincipal.png"/>
                    <p><?php echo "Usuário: " . $_SESSION['usuario']; ?></p>
                    <nav class="menu">
                        <ul>
                            <li><a href="">Home</a></li>
                            <li><a>Cadastro</a>
                                <ul >
                                    <li><a href="./View/cadastroFornecedor.php?acao=Cadastrar&id=0" target="conteudo">Cadastro Fornecedor</a></li>
                                    <li><a href="./View/cadastroUnidade.php?acao=Cadastrar&id=0" target="conteudo">Cadastro Unidade</a></li>
                                    <li><a href="./View/cadastroContrato.php?acao=Cadastrar&id=0" target="conteudo">Cadastro Contrato</a></li>
                                    <li><a href="./View/cadastroEventoContrato.php?acao=Cadastrar&id=0" target="conteudo">Cadastro Eventos</a></li>
                                </ul> 
                            </li>
                            <li><a>Consulta</a>
                                <ul>
                                    <li><a href="./View/consultaFornecedor.php" target="conteudo">Consulta Fornecedor</a></li>
                                    <li><a href="./View/consultaUnidade.php" target="conteudo">Consulta Unidade</a></li>
                                    <li><a href="./View/consultaContrato.php" target="conteudo">Consulta Contrato</a></li>
                                </ul>   
                            </li>
                            <li><a href="?deslogar">Sair</a></li>
                        </ul>
                    </nav>
                </div>
                <div id="conteudo" class="col-9">   
                    <iframe id="janela" name="conteudo" src="./View/listaVencimentos.php"></iframe>
                </div>
            </div>
        </div>

        <?php
        // put your code here
        ?>
    </body>
</html>
