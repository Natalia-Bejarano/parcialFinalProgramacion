<?php

namespace app\models\drivers;
use mysqli;  

class conexDB { 

    private $host = 'localhost';
    private $user = 'root';
    private $pwd = '';
    private $nameDB = 'inventario_db';
    private $conex = null;

    public function __construct()    
{ 
  $this->conex = new mysqli( 
    $this -> host,
    $this -> user,
    $this -> pwd,
    $this -> nameDB
  );
}
    public function exeSQL($sql){
       return $this -> conex -> query($sql); 
    }
    public function close(){
        $this -> conex->close(); 
    }
}