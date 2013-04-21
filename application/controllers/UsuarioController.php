<?php 
class UsuarioController extends Zend_Controller_Action
{
    public function init()
    {
        /* Initialize action controller here */
    }
	public function loginAction()
    {
	  $form = new Application_Form_Login();

        if( $this->getRequest()->isPost() ){
            if( $form->isValid( $this->_getAllParams() )) {
                $authAdapter = new Zend_Auth_Adapter_DbTable();
				
                $authAdapter
                    ->setTableName('users')
                    ->setIdentityColumn('username')
                    ->setCredentialColumn('password')
                    ->setIdentity($form->getValue('username'))
                    ->setCredential(sha1($form->getValue('password')));
					
				$auth = Zend_Auth::getInstance();
				
				$result = $auth->authenticate($authAdapter);
 
 				if($result->isValid() ){
					return $this->_redirect('/agencias');
				}else{
					$form->username->addErrorMessage('Datos Incorrectos');
				}
            }
        }
        $this->view->form = $form;
    }
	public function logoutAction()
	{
		Zend_Auth::getInstance()->clearIdentity();
		return $this->_redirect('/usuario/login');
	}
}
