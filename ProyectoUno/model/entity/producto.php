<?php

namespace app\model\entities;
use app\models\drivers\conexDB;

class Person extends Entity
{

    protected $id = null;
    protected $name = "";
    protected $email = "";
    protected $age = null;


    }

    public function all() { 
        $sql = "select * from productos"; 
        $conex = new conexDB();
        $resultDb = $conex->exeSQL($sql); 
        $persons = []; 
        if ($resultDb->num_rows>0){ 
            while ($rowDb = $resultDb->fetch_assoc()){ 
                $person = new Person(); 
                $person -> set('id', $rowDb['id']); 
                $person -> set('nombre', $rowDb['nombre']);
                $person -> set('cantidad', $rowDb['cantidad']);
                $person -> set('precio_unitario', $rowDb['precio_unitario']);
                array_push($persons, $person); 
                 
            }
        }
        $conex->close(); 
        return $persons;

    }
    public function save(){
    }

    public function update(){}

    public function delete(){
    }

