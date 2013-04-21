<?php

class Application_Form_AspirantesForm extends Zend_Form
{
	public function init(){
		$name = new Zend_Form_Element_Text('name');
		$name->setLabel('Nombre:');
		$name->addValidator('alpha');
		$name->setErrorMessages(array('messages' => 'El campo nombre solo puede contener letras'));
		
		$surname = new Zend_Form_Element_Text ('surname');
		$surname->setLabel('Apellido:');
		$surname->setErrorMessages(array('messages' => 'El campo nombre solo puede contener letras'));

		$telefono = new Zend_Form_Element_Text ('telefono');
		$telefono->setLabel('telefono:');
		$telefono->setErrorMessages(array('messages' => 'El campo nombre solo puede contener letras'));

		$cel = new Zend_Form_Element_Text ('cel');
		$cel->setLabel('cel:');
		$cel->setErrorMessages(array('messages' => 'El campo nombre solo puede contener letras'));
		
		$PIN = new Zend_Form_Element_Text ('PIN');
		$PIN->setLabel('PIN:');
		$PIN->setErrorMessages(array('messages' => 'El campo nombre solo puede contener letras'));

		
		
		$email = new Zend_Form_Element_Text ('email');
		$email->addValidator('emailAddress');
		$email->setErrorMessages(array('messages' => 'Email invalido'));
		$email->setLabel('email:');
		
		$Sexo = new Zend_Form_Element_Select('Sexo'); 
		$Sexo ->setLabel('Sexo:')
				  	  -> setMultiOptions(array(
							'm' => 'm',
							'f' => 'f'
		));

		$fechaNacimiento = new ZendX_JQuery_Form_Element_DatePicker('fechaNacimiento');
		$fechaNacimiento->class = "";
		$fechaNacimiento->setLabel('fecha de nacimiento:')
		->setJQueryParam('dateFormat', 'dd.mm.yy')
		->setJQueryParam('changeYear', 'true')
		->setJqueryParam('changeMonth', 'true')
		->setJqueryParam('regional', 'de')
		->setJqueryParam('yearRange', "1980:2000")
		->addValidator(new Zend_Validate_Date(
		array(
		'format' => 'dd.mm.yyyy',
		)))
		->setRequired(true);
		

		
	
		$multiselect1 = new Zend_Form_Element_Multiselect('multiselect1'); 
		$multiselect1 ->setLabel('Mensaje:')
				  	  -> setMultiOptions(array(
							'acrobacia piso' => 'Piso',
							'acrobacia cama' => 'Cama',
							'parto'=>'hola'
		));

		$foto1 = new Zend_Form_Element_File('foto1');
		$foto1->setLabel('Upload an image:')
				->setDestination('../public/upload');
		$foto1->addValidator('Count', false, 1);
		$foto1->addValidator('Size', false, 202400);
		$foto1->addValidator('Extension', false, 'jpg,png,gif');

		$foto2 = new Zend_Form_Element_File('foto2');
		$foto2->setLabel('Upload an image:')
			  ->setDestination('../public/upload');
		$foto2->addValidator('Count', false, 1);
		$foto2->addValidator('Size', false, 202400);
		$foto2->addValidator('Extension', false, 'jpg,png,gif');

		$foto3 = new Zend_Form_Element_File('foto3');
		$foto3->setLabel('Upload an image:')
				->setDestination('../public/upload');
		$foto3->addValidator('Count', false, 1);
		$foto3->addValidator('Size', false, 202400);
		$foto3->addValidator('Extension', false, 'jpg,png,gif');

		$submit = new Zend_Form_Element_Submit('submit');
		$submit->class = "botonEnviar";
		$submit->setLabel('Enviar:');
				
		$this->addElements(array($name, 
								 $surname,
								 $telefono,
								 $cel,
								 $PIN, 
								 $email,  
								 $Sexo,
								 $fechaNacimiento,
								 $multiselect1, 
								 $foto1,
								 $foto2,
								 $foto3,
								 $submit));
					 
	}
//Nombre *
//Apellido *
//Teléfono *
//Celular *
//PIN
//E-mail *
/*Sexo *
Fecha de nacimiento  *               
Edad…….*.                          
Edad aparente *
Tipo doc   *                                    Nro Doc…..* 
Pasaporte al día *          si----            no----             
Nro Pasaporte-------
Puede viajar  *                si---              no---
Nacionalidad *
*/
}

