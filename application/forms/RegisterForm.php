<?php

class Application_Form_RegisterForm extends Zend_Form
{
	public function init(){
		$user = new Zend_Form_Element_Text('user');
		$user->setLabel('Nombre:');
		$user->addValidator('alpha');
		$user->setErrorMessages(array('messages' => 'El campo nombre solo puede contener letras'));
		
		$password = new Zend_Form_Element_Password('password');
		$password->setLabel('Password:');
		
		$submit = new Zend_Form_Element_Submit('submit');
		$submit->setLabel('Enviar');
		
		$this->addElements(array($user,$password, $submit));
	}
	
}



