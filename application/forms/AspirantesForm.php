<?php

class Application_Form_AspirantesForm extends Zend_Form
{
	public function init(){
		function dameMultiselect($name){
			return new Zend_Form_Element_Multiselect($name); 
		}

		$translateValidators = array(
        				Zend_Validate_NotEmpty::IS_EMPTY => 'Los campos no pueden estar vacios',
        				Zend_Validate_Regex::NOT_MATCH => 'Invalid value entered',
        				Zend_Validate_StringLength::TOO_SHORT => 'Debe contener al menos %min% caracteres',
        				Zend_Validate_StringLength::TOO_LONG => 'No puede tener mas de %max% caracteres',
        				Zend_Validate_EmailAddress::INVALID => 'Direccion de e-mail invalida'
        			);
		$translator = new Zend_Translate('array', $translateValidators);
		Zend_Validate_Abstract::setDefaultTranslator($translator);
		/*
                 * Datos personales
                 * 
                 */
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
		->setJqueryParam('yearRange', "1920:2013")
		->addValidator(new Zend_Validate_Date(
		array(
		'format' => 'dd.mm.yyyy',
		)))
		->setRequired(true);
                /*
                 * Skills
                 */
		$Categorias = new Zend_Form_Element_MultiCheckbox('Categorias', array(
			'multiOptions' => array(
                                                'Cantante' => 'Cantante',
                                                'Modelo' => 'Modelo',
                                                'ActorActriz'=>'Actor/actriz',
                                                'AcróbataGimnasta' =>'Acróbata/Gimnasta:',
                                                'ArtistaCircense' =>'Artista circense:',
                                                'Deportista' =>'Deportista',
                                                'Bailarin' =>'Bailarín/a',
                                                'Musico' =>'Músico',
                                                'ParkourFreeruning' =>'Parkour / Freerunning',
                                                'Danza aérea' =>'Danza aérea (arneses)',
                                                'Profesionales' =>'Profesionales')
		));
		$Categorias->setLabel('Categorias:');

		$multiselect1 = dameMultiselect('multiselect1'); 
		$multiselect1 ->class="acrobatas";
		$multiselect1 -> setMultiOptions(array(
							'cama' => 'Cama elástica',
							'Gimnasiar' => 'Gimnasia rítmica',
							'Gimnasiaa'=>'Gimnasia artística',
							'Acrobaciap' =>'Acrobacia de piso (tumbling)'
		),1);
		$multiselect2 = dameMultiselect('multiselect2'); 
		$multiselect2 ->class="acrobatas";
		$multiselect2 -> setMultiOptions(array(
							'Parada' => 'Parada de manos',
							'Tela' => 'Tela',
							'Aro'=>'Aro',
							'TrapecioF' =>'Trapecio Fijo',
							'TrapecioV' =>'Trapecio Volante',
							'TrapecioAV' =>'Trapecio a vuelo',
							'MalabaresC' =>'Malabares - Contact',
							'MalabaresR' =>'Malabares - Rolling',
							'MalabaresP' =>'Malabares  - Pelotas',
							'Clavas' =>'Clavas',
							'Diavolo' =>'Diávolo',																																										
							'PaloC' =>'Palo chino',																																								
							'Equilibrista' =>'Equilibrista',
							'Contorsionista' =>'Contorsionista'																																										
		),1);
       		$multiselect3 = dameMultiselect('multiselect3'); 
		$multiselect3 ->class="acrobatas";
		$multiselect3 -> setMultiOptions(array(
                                                        'Futbol'=>'Fútbol',
                                                        'Rugby'=>'Rugby',
                                                        'Boxeo'=>'Boxeo',
                                                        'ArtesMarciales'=>'ArtesMarciales',
                                                        'Atletismo'=>'Atletismo'
                ),1);
       		$multiselect4 = dameMultiselect('multiselect4'); 
		$multiselect4 ->class="acrobatas";
		$multiselect4 -> setMultiOptions(array(
                                                        'Contemporaneo'=>'Contemporáneo',
                                                        'Clasico'=>'Clásico',
                                                        'Tango'=>'Tango',
                                                        'HipHop'=>'Hip hop',
                                                        'BreakDance'=>'Break dance',
                                                        'PoleDance'=>'Pole Dance'
                ),1);
       		$multiselect5 = dameMultiselect('multiselect5'); 
		$multiselect5 ->class="acrobatas";
		$multiselect5 -> setMultiOptions(array(
                                                        'Guitarra'=>'Guitarra',
                                                        'Piano'=>'Piano',
                                                        'Bajo'=>'Bajo',
                                                        'Bateria'=>'Batería',
                                                        'Saxo'=>'Saxo',
                                                        'Trompeta'=>'Trompeta',
                                                        'Violin'=>'Violín',
                                                        'Contrabajo'=>'Contrabajo',
                                                        'Violoncelo'=>'Violoncelo'
                ),1);
       		$multiselect6 = dameMultiselect('multiselect6'); 
		$multiselect6 ->class="acrobatas";
		$multiselect6 -> setMultiOptions(array(
                                                        'Médico'=>'Médico',
                                                        'Odontólogo'=>'Odontólogo',
                                                        'Psicólogo'=>'Psicólogo',
                                                        'Arquitecto'=>'Arquitecto',
                                                        'Ingeniero'=>'Ingeniero'
                ),1);
                /*
                 * Perfil
                 * 
                 */
                
                $regC = new Zend_Form_Element_Select('regC'); 
		$regC->setLabel('Registro de conducir:')
				  	  -> setMultiOptions(array(
							'no' => 'no',
							'si' => 'si'
		));
       		$multiselect7 = dameMultiselect('multiselect7'); 
		$multiselect7->class="tipo";
		$multiselect7->setLabel('Tipo de vehiculo') 
                             -> setMultiOptions(array(
                                                        'Auto'=>'Auto',
                                                        'Moto'=>'Moto',
                                                        'Camion'=>'Camion'
                ),1);
  
                $AceptaDesnudo = new Zend_Form_Element_Select('AceptaDesnudo'); 
		$AceptaDesnudo->setLabel('Acepta desnudo:')
				  	  -> setMultiOptions(array(
							'no' => 'no',
							'si' => 'si'
		));
                $AceptaRopaInterior = new Zend_Form_Element_Select('AceptaRopaInterior'); 
		$AceptaRopaInterior->setLabel('Acepta ropa interior:')
				  	  -> setMultiOptions(array(
							'no' => 'no',
							'si' => 'si'
		));
                $Fuma = new Zend_Form_Element_Select('Fuma'); 
		$Fuma->setLabel('Fuma:')
				  	  -> setMultiOptions(array(
							'no' => 'no',
							'si' => 'si'
		));
                $Tatuajes = new Zend_Form_Element_Select('Tatuajes'); 
		$Tatuajes->setLabel('Tatuajes:')
				  	  -> setMultiOptions(array(
							'no' => 'no',
							'si' => 'si'
		));
                $Piercings = new Zend_Form_Element_Select('Piercings'); 
		$Piercings->setLabel('Piercings:')
				  	  -> setMultiOptions(array(
							'no' => 'no',
							'si' => 'si'
		));

		$Altura = new Zend_Form_Element_Text('Altura');
		$Altura->setLabel('Altura:')
			 ->setRequired(true);
		//$Altura->addValidator('alpha', false, array('messages' => 'El campo nombre solo puede contener letras'));
                
		$Peso = new Zend_Form_Element_Text('Peso');
		$Peso->setLabel('Peso:')
			 ->setRequired(true);
		//$Peso->addValidator('alpha', false, array('messages' => 'El campo nombre solo puede contener letras'));
                
		$Busto = new Zend_Form_Element_Text('Busto');
		$Busto->setLabel('Busto:')
			 ->setRequired(true);
		//$Busto->addValidator('alpha', false, array('messages' => 'El campo nombre solo puede contener letras'));

		$Cintura = new Zend_Form_Element_Text('Cintura');
		$Cintura->setLabel('Cintura:')
			 ->setRequired(true);
		//$Cintura->addValidator('alpha', false, array('messages' => 'El campo nombre solo puede contener letras'));
                
		$Cadera = new Zend_Form_Element_Text('Cadera');
		$Cadera->setLabel('Cadera:')
			 ->setRequired(true);
		//$Cadera->addValidator('alpha', false, array('messages' => 'El campo nombre solo puede contener letras'));

                $ColorDeOjos = new Zend_Form_Element_Select('ColorDeOjos'); 
                $ColorDeOjos->setLabel('Color de ojos:')
                            -> setMultiOptions(array(
                                          'Marrones' => 'Marrones',
                                          'Negros' => 'Negros',
                                          'Celestes' => 'Celestes',
                                          'Verdes' => 'Verdes'    
                ));

                $ColorDeCabello = new Zend_Form_Element_Select('ColorDeCabello'); 
                $ColorDeCabello->setLabel('Color de cabello:')
                               -> setMultiOptions(array(
                                          'castaño' => 'castaño',
                                          'Rubio' => 'Rubio',
                                          'Pelirojo' => 'Pelirojo',
                                          'Canoso' => 'Canoso',
                                          'Negro' => 'Negro'
                ));

                $TipoDeCabello = new Zend_Form_Element_Select('TipoDeCabello'); 
                $TipoDeCabello->setLabel('Tipo de cabello:')
                              -> setMultiOptions(array(
                                          'Ondulado' => 'Ondulado',
                                          'Lacio' => 'Lacio',
                                          'Rulos' => 'Rulos',
                                          'Canoso' => 'Canoso',
                                          'Rastas' => 'Rastas'
                ));

                $LargoDelCabello = new Zend_Form_Element_Select('LargoDelCabello'); 
                $LargoDelCabello->setLabel('Largo del cabello:')
                                -> setMultiOptions(array(
                                              'Largo' => 'Largo',
                                              'Medio' => 'Medio',
                                              'Corto' => 'Corto',
                                              'Pelado' => 'Pelado'
                ));
                $Etnia = new Zend_Form_Element_Select('Etnia'); 
                $Etnia->setLabel('Etnia:')
                      -> setMultiOptions(array(
                                  'Anglosajona' => 'Anglosajona',
                                  'Latina' => 'Latina',
                                  'Oriental' => 'Oriental',
                                  'Afroamericano' => 'Afroamericano',
                                  'ArabeTurco' => 'Arabe / Turco',
                                  'AborigenLatinoamericano' => 'Aborigen latinoamericano'
                ));
                
                $Tez = new Zend_Form_Element_Select('Tez'); 
                $Tez->setLabel('Tez:')
                    -> setMultiOptions(array(
                                  'Blanca' => 'Blanca',
                                  'Negra' => 'Negra',
                                  'Amarilla' => 'Amarilla',
                                  'Trigueña' => 'Trigueña'
                ));
                
		$TallePantalon  = new Zend_Form_Element_Text('TallePantalon');
		$TallePantalon->setLabel('Talle de pantalón:')
                              ->setRequired(true);
		//$TallePantalon->addValidator('alpha', false, array('messages' => 'El campo nombre solo puede contener letras'));
                

		$TalleCamisa  = new Zend_Form_Element_Text('TalleCamisa');
		$TalleCamisa->setLabel('Talle de camisa:')
                              ->setRequired(true);
		//$TalleCamisa->addValidator('alpha', false, array('messages' => 'El campo nombre solo puede contener letras'));
                
		$TalleCalzado  = new Zend_Form_Element_Text('TalleCalzado');
		$TalleCalzado->setLabel('Talle de Calzado:')
                              ->setRequired(true);
		//$TalleCalzado->addValidator('alpha', false, array('messages' => 'El campo nombre solo puede contener letras'));

       		$multiselect8 = dameMultiselect('multiselect8'); 
		$multiselect8->class="tipo";
                             
		$multiselect8 ->setLabel('Idioma')
                              -> setMultiOptions(array(
                                                        'Ingles'=>'Ingles',
                                                        'Frances'=>'Francés',
                                                        'Aleman'=>'Alemán',
                                                        'Portugues'=>'Portugués',
                                                        'Italiano'=>'Italiano',
                                                        'Aleman'=>'Alemán'
                ),1);

		/*
                 * Fotos!!
                 */
		$foto1 = new Zend_Form_Element_File('foto1');
		$foto1->setLabel('Imagen 1 // Recorda que no puede pesar mas de 3mb:')
			  ->setDestination('../htdocs/upload')
			 // ->setRequired(true)
			  ->setDescription('Click Browse and choose an image');
		$foto1->addValidator('Count', false, 1);
		$foto1->addValidator('Size', false, 202400);
		$foto1->addValidator('Extension', false, 'jpg');

		$foto2 = new Zend_Form_Element_File('foto2');
		$foto2->setLabel('Imagen 2 // Recorda que no puede pesar mas de 3mb:')
			  ->setDestination('../htdocs/upload');
  			 // ->setRequired(true);
		$foto2->addValidator('Count', false, 1);
		$foto2->addValidator('Size', false, 202400);
		$foto2->addValidator('Extension', false, 'jpg');

		$foto3 = new Zend_Form_Element_File('foto3');
		$foto3->setLabel('Imagen 3 // Recorda que no puede pesar mas de 3mb:')
			  ->setDestination('../htdocs/upload');
			  //->setRequired(true);
		$foto3->addValidator('Count', false, 1);
		$foto3->addValidator('Size', false, 202400);
		$foto3->addValidator('Extension', false, 'jpg');
                /*
                 * Submit y addElements
                 */
		$submit = new Zend_Form_Element_Submit('submit');
		$submit->class = "botonEnviar";
		$submit->setLabel('Enviar');
				
		$this->addElements(array(
                    $name,
                    $surname,
                    $telefono,
                    $cel,
                    $PIN,
                    $email,
                    $Sexo,
                    $fechaNacimiento,
                    $Categorias,
                    $multiselect1,
                    $multiselect2,
                    $multiselect3,
                    $multiselect4,
                    $multiselect5,
                    $multiselect6,
                    $regC,
                    $multiselect7,
                    $AceptaDesnudo,
                    $AceptaRopaInterior,
                    $Fuma,
                    $Tatuajes,
                    $Piercings,
                    $Altura,
                    $Peso,
                    $Busto,
                    $Cintura,
                    $Cadera, 
                    $ColorDeOjos, 
                    $ColorDeCabello,
                    $TipoDeCabello,
                    $LargoDelCabello, 
                    $Etnia ,
                    $Tez ,
                    $TallePantalon,
                    $TalleCamisa,
                    $TalleCalzado,
                    $multiselect8,
                    $foto1,
                    $foto2,
                    $foto3,
                    $submit));
	}
}

