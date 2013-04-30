<?php

class Application_Form_AspirantesForm extends Zend_Form
{
	public function init(){
		$translateValidators = array(
        				Zend_Validate_NotEmpty::IS_EMPTY => 'Los campos no pueden estar vacios',
        				Zend_Validate_Regex::NOT_MATCH => 'Invalid value entered',
        				Zend_Validate_StringLength::TOO_SHORT => 'Debe contener al menos %min% caracteres',
        				Zend_Validate_StringLength::TOO_LONG => 'No puede tener mas de %max% caracteres',
        				Zend_Validate_EmailAddress::INVALID => 'Direccion de e-mail invalida'
        			);
		$translator = new Zend_Translate('array', $translateValidators);
		Zend_Validate_Abstract::setDefaultTranslator($translator);
		
		$name = new Zend_Form_Element_Text('name');
		$name->setLabel('Nombre:')
			 ->setRequired(true)
			 ->addValidator('StringLength', false, array(4, 25));
		$name->addValidator('alpha', false, array('messages' => 'El campo nombre solo puede contener letras'));
		
		$surname = new Zend_Form_Element_Text ('surname');
		$surname->setLabel('Apellido:')
				 ->addValidator('StringLength', false, array(4, 25))
			    ->setRequired(true);
		$surname->addValidator('alpha', false, array('messages' => 'El campo apellido solo puede contener letras'));

		$telefono = new Zend_Form_Element_Text ('telefono');
		$telefono->setLabel('telefono:')
				 ->addValidator('StringLength', false, array(8, 25))
				 ->setRequired(true);
		$telefono->addValidator('Digits', false, array('messages' => 'El campo telefono solo puede contener Numeros'));

		$cel = new Zend_Form_Element_Text ('cel');
		$cel->setLabel('celular:')
			->addValidator('StringLength', false, array(8, 25))
			->setRequired(true);
		$cel->addValidator('Digits', false, array('messages' => 'El campo celular solo puede contener Numeros'));
		
		$PIN = new Zend_Form_Element_Text ('PIN');
		$PIN->setLabel('PIN:')
			->addValidator('StringLength', false, array(8, 25))
			->setRequired(true);
		$PIN->addValidator('Digits', false, array('messages' => 'El campo PIN solo puede contener Numeros'));

		
		
		$email = new Zend_Form_Element_Text ('email');
		$email->setLabel('email:')
	   		  ->setRequired(true);
		$email->addValidator('emailAddress',false,array('messages' => 'Email invalido'));
		
		$Sexo = new Zend_Form_Element_Select('Sexo'); 
		$Sexo ->setLabel('Sexo:')
				  	  -> setMultiOptions(array(
							'm' => 'm',
							'f' => 'f'
		));

		$fechaNacimiento = new ZendX_JQuery_Form_Element_DatePicker('fechaNac');
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
	
		$check = new Zend_Form_Element_MultiCheckbox('Categorias', array(
			'multiOptions' => array(
							'Cantante' => 'Cantante',
							'Modelo' => 'Modelo',
							'Actor/actriz'=>'Actor/actriz',
							'Acróbata/Gimnasta' =>'Acróbata/Gimnasta:',
							'Artistac' =>'Artista circense:'
			
		)));
		$check->setLabel('Categorias:');
				
		// ->setValue(array('Cantante', 'Modelo'));
		 					
		$multiselect1 = new Zend_Form_Element_Multiselect('multiselect1'); 
		$multiselect1 ->class="acrobatas";
		$multiselect1 -> setMultiOptions(array(
							'cama' => 'Cama elástica',
							'Gimnasiar' => 'Gimnasia rítmica',
							'Gimnasiaa'=>'Gimnasia artística',
							'Acrobaciap' =>'Acrobacia de piso (tumbling)'
		),1);

		$foto1 = new Zend_Form_Element_File('foto1');
		$foto1->setLabel('Imagen 1 // Recorda que no puede pesar mas de 3mb:')
			  ->setDestination('../htdocs/upload')
			  ->setRequired(true)
			  ->setDescription('Click Browse and choose an image');
		$foto1->addValidator('Count', false, 1);
		$foto1->addValidator('Size', false, 202400);
		$foto1->addValidator('Extension', false, 'jpg');

		$foto2 = new Zend_Form_Element_File('foto2');
		$foto2->setLabel('Imagen 2 // Recorda que no puede pesar mas de 3mb:')
			  ->setDestination('../htdocs/upload')
  			  ->setRequired(true);
		$foto2->addValidator('Count', false, 1);
		$foto2->addValidator('Size', false, 202400);
		$foto2->addValidator('Extension', false, 'jpg');

		$foto3 = new Zend_Form_Element_File('foto3');
		$foto3->setLabel('Imagen 3 // Recorda que no puede pesar mas de 3mb:')
			  ->setDestination('../htdocs/upload')
			  ->setRequired(true);
		$foto3->addValidator('Count', false, 1);
		$foto3->addValidator('Size', false, 202400);
		$foto3->addValidator('Extension', false, 'jpg');

		$submit = new Zend_Form_Element_Submit('submit');
		$submit->class = "botonEnviar";
		$submit->setLabel('Enviar:');
				
		$this->addElements(array($name,$surname,$telefono,$cel,$PIN,$email,$Sexo,$fechaNacimiento,$check,$multiselect1,$foto1,$foto2,$foto3,$submit));
		
					 
	}
}

