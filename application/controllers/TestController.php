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
	
			$multiselect1 = implotar($formulario->getValue('multiselect1'));
			$multiselect2 = implotar($formulario->getValue('multiselect2'));
			$multiselect3 = implotar($formulario->getValue('multiselect3'));
			$multiselect4 = implotar($formulario->getValue('multiselect4'));
			$multiselect5 = implotar($formulario->getValue('multiselect5'));
			$multiselect6 = implotar($formulario->getValue('multiselect6'));

			$register = new Application_Model_Test();
			$register -> add($multiselect1,$multiselect2,$multiselect3.$multiselect4,$multiselect5,$multiselect6);
			$this->view->form = 'Tus datos fueron enviados correctamente. Casting Zero los avaluará.'; 
			}
		}
	}
}



