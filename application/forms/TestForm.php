<?php

class Application_Form_TestForm extends Zend_Form
{
	public function init(){
		function dameMultiselect($name){
			return new Zend_Form_Element_Multiselect($name); 
		}

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
							'Equilibrista' =>'Equilibrista',
							'Contorsionista' =>'Contorsionista'																																										
		),1);
		$multiselect3 = dameMultiselect('multiselect2'); 
		$multiselect3 ->class="acrobatas";
		$multiselect3 -> setMultiOptions(array(
							'Parada' => 'Parada de manos',
							'Tela' => 'Tela',
							'Equilibrista' =>'Equilibrista',
							'Contorsionista' =>'Contorsionista'																																										
		),1);
               $multiselect3 = dameMultiselect('multiselect2'); 
		$multiselect3 ->class="acrobatas";
		$multiselect3 -> setMultiOptions(array(
							'Parada' => 'Parada de manos',
							'Tela' => 'Tela',
							'Equilibrista' =>'Equilibrista',
							'Contorsionista' =>'Contorsionista'																																										
		),1);
		
				
		$submit = new Zend_Form_Element_Submit('submit');
		$submit->class = "botonEnviar";
		$submit->setLabel('Enviar');
				
		$this->addElements(array($multiselect1,$multiselect2,$submit));

	}
}

