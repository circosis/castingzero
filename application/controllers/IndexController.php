<?php
class IndexController extends Zend_Controller_Action{
    public function init()
    {
		$layout = $this->_helper->layout();
        $layout->setLayout('social');
    }
    public function indexAction()
    {

	}
}



