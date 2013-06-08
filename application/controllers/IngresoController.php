<?php
class IngresoController extends Zend_Controller_Action
{
    public function init()
    {
    }
    public function indexAction()
    {
        
	function implotar($value){
		if($value== NULL || $value==''){
		return '';
		}else{
		return implode(',' , $value);
		}
	}

		$formulario = new Application_Form_AspirantesForm();
		$this->view->form = $formulario;
		if ($this->_request->isPost())
		{
			$formData = $this->_request->getPost();
			if ($formulario->isValid($formData))
			{
			$name = $formulario->getValue('name');
			$surname = $formulario->getValue('surname');
                        $nacionalidad = $formulario->getValue('Nacionalidad');
			$telefono = $formulario->getValue('telefono');
			$cel = $formulario->getValue('cel');
			$PIN = $formulario->getValue('PIN');
			$email = $formulario->getValue('email');
			$tipoD= $formulario->getValue('tipoD');
			$ndocumento= $formulario->getValue('ndocumento');
			$namepadre= $formulario->getValue('namepadre');
			$tipoPadre= $formulario->getValue('tipoPadre');
			$ndocumentoPadre= $formulario->getValue('ndocumentoPadre');
			$namemadre= $formulario->getValue('namemadre');
			$tipoMadre= $formulario->getValue('tipoMadre');
			$ndocumentoMadre= $formulario->getValue('ndocumentoMadre');
			$Categorias = implotar($formulario->getValue('Categorias'));
			$multiselect1 = implotar($formulario->getValue('multiselect1'));
			$multiselect2 = implotar($formulario->getValue('multiselect2'));
			$multiselect3 = implotar($formulario->getValue('multiselect3'));
			$multiselect4 = implotar($formulario->getValue('multiselect4'));
			$multiselect5 = implotar($formulario->getValue('multiselect5'));
			$multiselect6 = implotar($formulario->getValue('multiselect6'));
			$Sexo = $formulario->getValue('Sexo');
			$fechaNacimiento = $formulario->getValue('fechaNac');
                        if($formulario->getValue('cv')== NULL || $formulario->getValue('cv')==''){
                            $cv='';
                        }else{    
                            $cv= $formulario->getValue('cv');
                        }
                        $foto1 = $formulario->getValue('foto1');
			$foto2 = $formulario->getValue('foto2');
			$foto3 = $formulario->getValue('foto3');
			$regC = $formulario->getValue('regC');
			$multiselect7 = implotar($formulario->getValue('multiselect7'));
			$AceptaDesnudo = $formulario->getValue('AceptaDesnudo');
			$AceptaRopaInterior = $formulario->getValue('AceptaRopaInterior');
			$Fuma = $formulario->getValue('Fuma');
			$Tatuajes = $formulario->getValue('Tatuajes');
			$Piercings = $formulario->getValue('Piercings');
			$Altura = $formulario->getValue('Altura');
			$Peso = $formulario->getValue('Peso');
			$Busto = $formulario->getValue('Busto');
			$Cintura = $formulario->getValue('Cintura');
			$Cadera = $formulario->getValue('Cadera');
			$ColorDeOjos = $formulario->getValue('ColorDeOjos');
			$ColorDeCabello = $formulario->getValue('ColorDeCabello');
			$TipoDeCabello = $formulario->getValue('TipoDeCabello');
			$LargoDelCabello = $formulario->getValue('LargoDelCabello');
			$Etnia = $formulario->getValue('Etnia');
			$Tez = $formulario->getValue('Tez');
			$TallePantalon = $formulario->getValue('TallePantalon');
			$TalleCamisa = $formulario->getValue('TalleCamisa');
			$TalleCalzado = $formulario->getValue('TalleCalzado');
			$multiselect8 = implotar($formulario->getValue('multiselect8'));
                        $terms = implotar($formulario->getValue('terms'));
			$register = new Application_Model_Aspirantes();
			$register -> add($name,$surname,$nacionalidad,$telefono,$cel,$PIN,$tipoD,$ndocumento,$namepadre,$tipoPadre,$ndocumentoPadre,$namemadre,$tipoMadre,$ndocumentoMadre,$cv,$email,$Sexo,$fechaNacimiento,$Categorias,$multiselect1,$multiselect2,$multiselect3,$multiselect4,$multiselect5,$multiselect6,$regC,$multiselect7,$AceptaDesnudo,$AceptaRopaInterior,$Fuma,$Tatuajes,$Piercings,$Altura,$Peso,$Busto,$Cintura,$Cadera, $ColorDeOjos, $ColorDeCabello,$TipoDeCabello,$LargoDelCabello, $Etnia ,$Tez ,$TallePantalon,$TalleCamisa,$TalleCalzado,$multiselect8,$foto1,$foto2,$foto3,$terms);
			$this->view->form = 'Tus datos fueron enviados correctamente. Casting Zero los avaluará.'; 
			}
		}
	}
}

