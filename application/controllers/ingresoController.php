<?php
class IngresoController extends Zend_Controller_Action
{
    public function init()
    {
    }
    public function indexAction()
    {

		$formulario = new Application_Form_AspirantesForm();
		$this->view->form = $formulario;
		if ($this->_request->isPost())
		{
			$formData = $this->_request->getPost();
			if ($formulario->isValid($formData))
			{
			$name = $formulario->getValue('name');
			$surname = $formulario->getValue('surname');
			$telefono = $formulario->getValue('telefono');
			$cel = $formulario->getValue('cel');
			$PIN = $formulario->getValue('PIN');
			$mail = $formulario->getValue('email');
            $Categorias = $formulario->getValue('Categorias');
			$multiselect1 = $formulario->getValue('multiselect1');
			$multiselect2 = $formulario->getValue('multiselect2');
			$multiselect3 = $formulario->getValue('multiselect3');
			$multiselect4 = $formulario->getValue('multiselect4');
			$multiselect5 = $formulario->getValue('multiselect5');
			$multiselect6 = $formulario->getValue('multiselect6');
			$Sexo = $formulario->getValue('Sexo');
			$fechaNacimiento = $formulario->getValue('fechaNac');
			$foto1 = $formulario->getValue('foto1');
			$foto2 = $formulario->getValue('foto2');
			$foto3 = $formulario->getValue('foto3');
			$register = new Application_Model_Aspirantes();
			$register -> add($name, $surname, $telefono, $cel, $PIN, $mail, $Categorias,$multiselect1,$multiselect2,$multiselect3,$multiselect4,$multiselect5,$multiselect6, $Sexo, $fechaNacimiento, $foto1, $foto2, $foto3);
			$this->view->form = 'Tus datos fueron enviados correctamente. Casting Zero los avaluará.'; 
			}
		}
	}
}



