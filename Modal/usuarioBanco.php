<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of usuarioBanco
 *
 * @author Jolanjohnes Duarte
 */
require_once ROOT_PATH. '../init.php';

class usuarioBanco {

    function __construct() {
        $this->con = new conexao();
        $this->pdo = $this->con->getConection();
    }

    function buscarUsuario(usuario $entUsuario) {
        try {
           
            $stmt = $this->pdo->prepare('SELECT * FROM usuario where usuario = :usuario and senha = :senha LIMIT 1;');
            
            $stmt->bindValue(":usuario", $entUsuario->getUsuario());
            $stmt->bindValue(":senha", md5($entUsuario->getSenha()));
            $stmt->execute();
            
            $arrayUsuario = $stmt->fetchAll(PDO:: FETCH_ASSOC);
           
            return $arrayUsuario;
            /*
            if (count($arrayUsuario) == 1){
                return true;
            }else{
                return false;
            }*/
        } catch (Exception $exc) {
            echo $exc->getMessage();
        }
    }

}
