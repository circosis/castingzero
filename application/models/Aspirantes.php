<?php

class Application_Model_Aspirantes
{	
	private $_dbTableAspirantes;
	
	public function __construct(){
	
		$this -> _dbTableAspirantes = new Application_Model_DbTable_Aspirantes();
	
	}
	public function view()
        {
        $select = $this -> _dbTableAspirantes -> select();
            $select->from($this -> _dbTableAspirantes,array('id','nombre', 'apellido','telefono', 'cel', 'PIN', 'email','Categorias','multiselect1','multiselect2','multiselect3','multiselect4','multiselect5','multiselect6','Sexo', 'fechaNac','foto1','foto2','foto3'));

             return $this -> _dbTableAspirantes -> fetchAll($select);
        }
	public function add($name, $surname, $telefono, $cel, $PIN, $mail, $Categorias,$multiselect1,$multiselect2,$multiselect3,$multiselect4,$multiselect5,$multiselect6, $Sexo, $fechaNacimiento, $foto1, $foto2, $foto3)
	{
		$data = array (
                    'pendiente' => 'false',
                    'nombre' => $name , 
                    'apellido' => $surname,
                    'telefono' => $telefono,
                    'cel' => $cel,'PIN' => $PIN,
                    'email' => $mail,
                    'Categorias' => $Categorias,
                    'multiselect1' => $multiselect1,
                    'multiselect2' => $multiselect2,
                    'multiselect3' => $multiselect3,
                    'multiselect4' => $multiselect4,
                    'multiselect5' => $multiselect5,
                    'multiselect6' => $multiselect6,
                    'Sexo' => $Sexo,
                    'fechaNac' => $fechaNacimiento,
                    'foto1' => $foto1,
                    'foto2' => $foto2,
                    'foto3' => $foto3
                        );
               // var_dump($data);
		$this -> _dbTableAspirantes -> insert($data);

		
	}
	public function updateUser($array, $id)
	{
	
		$this -> _dbTableAspirantes -> update($array,"id=$id");
	
	}

}

