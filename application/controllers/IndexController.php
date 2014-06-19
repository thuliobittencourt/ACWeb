<?php

class IndexController extends Zend_Controller_Action
{
    /**
     * @var Zend_Log
     */ 
    private $logger;
    
    public function init()
    {
        $this->logger = Zend_Registry::get('logger');
    }

    public function indexAction()
    {
        $this->logger->log('Mensagem de Debug2', Zend_Log::DEBUG);
    }


}

