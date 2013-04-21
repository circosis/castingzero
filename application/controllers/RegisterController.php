<?php
class RegisterController extends Zend_Controller_Action
{
    public function init()
    {
		$auth = Zend_Auth::getInstance();
		if (! $auth->hasIdentity()) {
			return $this->_redirect('/usuario/login');
		}
    }
    public function indexAction()
    {
		$formulario = new Application_Form_RegisterForm();
		$this->view->form = $formulario;
		if ($this->_request->isPost())
		{
			$formData = $this->_request->getPost();
			if ($formulario->isValid($formData))
			{
			$user = $formulario->getValue('user');
			$password = $formulario->getValue('password');
			$register = new Application_Model_Register();
			$register -> add($user, $password);
			$this->view->form = 'mando'; 
			}
		}
	}
}



