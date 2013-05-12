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
	public function add($name,$surname,$telefono,$cel,$PIN,$email,$Sexo,$fechaNacimiento,$Categorias,$multiselect1,$multiselect2,$multiselect3,$multiselect4,$multiselect5,$multiselect6,$regC,$multiselect7,$AceptaDesnudo,$AceptaRopaInterior,$Fuma,$Tatuajes,$Piercings,$Altura,$Peso,$Busto,$Cintura,$Cadera, $ColorDeOjos, $ColorDeCabello,$TipoDeCabello,$LargoDelCabello, $Etnia ,$Tez ,$TallePantalon,$TalleCamisa,$TalleCalzado,$multiselect8,$foto1,$foto2,$foto3)
	{
		$data = array (
                    'pendiente' => 'false',
                    'nombre' => $name , 
                    'apellido' => $surname,
                    'telefono' => $telefono,
                    'cel' => $cel,'PIN' => $PIN,
                    'email' => $email,
                    'Categorias' => $Categorias,
                    'multiselect1' => $multiselect1,
                    'multiselect2' => $multiselect2,
                    'multiselect3' => $multiselect3,
                    'multiselect4' => $multiselect4,
                    'multiselect5' => $multiselect5,
                    'multiselect6' => $multiselect6,
                    'Sexo' => $Sexo,
                    'fechaNac' => $fechaNacimiento,
                    'regC' => $regC,
                    'multiselect7' => $multiselect7,
                    'AceptaDesnudo' => $AceptaDesnudo,
                    'AceptaRopaInterior' => $AceptaRopaInterior,
                    'Fuma' => $Fuma,
                    'Tatuajes' => $Tatuajes,
                    'Piercings' => $Piercings,
                    'Altura' => $Altura,
                    'Peso' => $Peso,
                    'Busto' => $Busto,
                    'Cintura' => $Cintura,
                    'Cadera' => $Cadera, 
                    'ColorDeOjos' => $ColorDeOjos, 
                    'ColorDeCabello' => $ColorDeCabello,
                    'TipoDeCabello' => $TipoDeCabello,
                    'LargoDelCabello' => $LargoDelCabello, 
                    'Etnia' => $Etnia,
                    'Tez' => $Tez,
                    'TallePantalon' => $TallePantalon,
                    'TalleCamisa' => $TalleCamisa,
                    'TalleCalzado' => $TalleCalzado,
                    'multiselect8' => $multiselect8,
                    'foto1' => $foto1,
                    'foto2' => $foto2,
                    'foto3' => $foto3
                        );
               //var_dump($data);
               $this -> _dbTableAspirantes -> insert($data);

		
	}
	public function updateUser($array, $id)
	{
	
		$this -> _dbTableAspirantes -> update($array,"id=$id");
	
	}

}

