<?php
class AgenciasController extends Zend_Controller_Action
{
    public function init()
    {
		$auth = Zend_Auth::getInstance();
		if (! $auth->hasIdentity()) {
			return $this->_redirect('http://www.castingzero.com/usuario/login');
		}
    }
    public function indexAction()
    {
	$dates_form = new Application_Model_Aspirantes();
	$this->view->dates_form = $dates_form->view();
    }
}



