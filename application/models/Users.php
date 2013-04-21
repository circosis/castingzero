<?php

class Application_Model_Users
{	
	private $_dbTableUsers;
	
	public function __construct(){
	
		$this -> _dbTableUsers = new Application_Model_DbTable_User();
	
	}
	public function view($username)
    {
 
    $select = $this -> _dbTableUsers -> select();
    //$select->from($this -> _dbTableUsers, array('username', 'admin'));
	$select->where('username = ?', $username);
         return $this -> _dbTableUsers -> fetchAll($select);
    }

}

