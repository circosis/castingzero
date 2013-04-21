<?php

class Application_Model_Register
{	
	private $_dbTable;
	public function __construct(){
	
		$this -> _dbTable = new Application_Model_DbTable_User();

	}
	public function createUser($array)
	{
	
		$this -> _dbTable -> insert($array);
	
	}
	public function updateUser($array, $id)
	{
	
		$this -> _dbTable -> update($array,"id=$id");
	
	}
	public function add($user, $password)
	{
		
		$data = array ('username' => $user , 'password' => sha1($password));
		$this -> _dbTable -> insert($data);
		
	}


}

