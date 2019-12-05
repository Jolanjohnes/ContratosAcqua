<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of controllerUsuario
 *
 * @author acer
 */
 require_once  ROOT_PATH.'/Modal/usuario.php';
 require_once  ROOT_PATH.'/Modal/usuarioBanco.php';
 
class controllerUsuario {
    //put your code here
    private $usuario;
    private $usuarioBanco;
    
    function __construct() {
        $this->usuario = new usuario();
        $this->usuarioBanco = new usuarioBanco();
    }
    
    function validaUsuario() {
        
        $this->usuario->setUsuario(filter_input(INPUT_POST, 'usuario'));
        $this->usuario->setSenha(filter_input(INPUT_POST, 'senha'));

       return  $this->usuarioBanco->buscarUsuario($this->usuario);
               
        
    }
}
