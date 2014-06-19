<?php

class UsuariosController extends Zend_Controller_Action
{
    /**
     * @var Zend_Log
     */ 
    private $logger;
    
    public function init()
    {
        $this->logger = Zend_Registry::get('logger');
        
        $dbTable = new Application_Model_DbTable_Usuario();
        
        /*$data = array(
            'Nome' => 'Fleur de Row United',
            'Email' => 'teste@teste.com.br',
            'Login' => 'teste@teste.com.br',
            'Senha' => 'senha',
            'Permissao' => '2'
        );
        
        $result = $dbTable->insert($data);
        
        

        $this->logger->log($result, Zend_Log::DEBUG);
       */
        
        
    }

    public function indexAction()
    {
        // action body
    }

    public function createAction()
    {
        //$config = new Zend_Config_Ini(APPLICATION_PATH . '/configs/forms/usuarios.ini', 'create');
        //$this->view->form = new Application_Form_Usuarios($config);
    }

    public function editAction()
    {
        $config = new Zend_Config_Ini(APPLICATION_PATH . '/configs/forms/usuarios.ini', 'edit');
        $this->view->form = new Application_Form_Usuarios($config);
    }


}





