<?php
class VistaUController extends Zend_Controller_Action
{
    public function init()
    {
    }
    public function indexAction()
    {
		$dates_form = new Application_Model_Users();
		$lala = $dates_form->view('manu');
		foreach($lala as $datos){
		 	$this->view->prueba  = $datos->admin;
		}
	}
}



