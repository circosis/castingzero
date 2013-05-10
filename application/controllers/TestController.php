<?php
class TestController extends Zend_Controller_Action
{
    public function init()
    {
    }
    public function indexAction()
    {
		$formulario = new Application_Form_TestForm();
		$this->view->form = $formulario;
		if ($this->_request->isPost())
		{
			$formData = $this->_request->getPost();
			if ($formulario->isValid($formData))
			{
	
			$multiselect1 = implode(",", $formulario->getValue('multiselect1'));
			$multiselect2 = implode(",", $formulario->getValue('multiselect2'));

			$register = new Application_Model_Test();
			$register -> add($multiselect1,$multiselect2);
			$this->view->form = 'Tus datos fueron enviados correctamente. Casting Zero los avaluará.'; 
			}
		}
	}
}



