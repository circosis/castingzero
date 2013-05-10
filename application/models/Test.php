<?php

class Application_Model_Test
{	
	private $_dbTableTest;
	
	public function __construct(){
	
		$this -> _dbTableAspirantesTest = new Application_Model_DbTable_Test();
	
	}
	public function add($multiselect1, $multiselect2)
	{
		$data = array ('multiselect1' => $multiselect1 ,'multiselect2' => $multiselect2);
		var_dump($data);
		//$this -> _dbTableAspirantes -> insert($data);

		
	}
	public function updateUser($array, $id)
	{
	
		$this -> _dbTableAspirantes -> update($array,"id=$id");
	
	}

}

