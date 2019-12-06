<?php
session_start();
define('ROOT_PATH', dirname(__FILE__));
require_once ROOT_PATH. "/Controller/controllerUsuario.php";
$controllerUsuario = new controllerUsuario();

?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Gerenciamento Contrato Acqua</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="css/folha_index.css">
    </head>
    <body>

        <div class="container ">
            <div class="box">
                <div class="cabecario">
                    <h2>Login</h2>
                </div>

                <form class="login100-form validate-form" method="POST" >
                    <div class="inputBox">
                        <input type="text" name="usuario" required="">
                        <label>Usuário</label>
                    </div>
                    <div class="inputBox">
                        <input type="password" name="senha" required="">
                        <label>Senha</label>
                    </div>					
                    <button type="submit" name="logar" value="Entrar">Entrar</button>
                    <div class="links">
                        <label><a href="#">Solicitar Cadastro</a></label>                    
                        <label><a href="#">Recupera Senha</a></label>
                    </div>
                </form>
            </div>
        </div>

        <?php
        if (isset($_POST['logar'])) {
            
            $arrayUsuario = $controllerUsuario->validaUsuario();
            //var_dump($arrayUsuario);
            
            if(count($arrayUsuario) == 1){
                foreach ($arrayUsuario as $value) {
                   $_SESSION['nomeUsuario']  = $value['nome'];
                   $_SESSION['idUsuario'] = $value['idUsuario'];
                   $_SESSION['usuario'] = $value['usuario'];
                   
                   header("Location: home.php");
                }
            }else{
                header("Location: index.php");
            }
            
            
            
            /*
            if ($controllerUsuario->validaUsuario()) {
                $_SESSION['usuario'] = "dfadsf";
                header("Location: home.php");
            }else{
                echo "<script>window.alert('Erro ao se autenticar, por favor verifique seus dados');</script>";
                header("Location: index.php");
            }*/
        }
        ?>
    </body>
</html>
