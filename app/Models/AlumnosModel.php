<?php

namespace App\Models;

use CodeIgniter\Model;


class AlumnosModel extends Model{

    protected $table = 'alumnos';
 //   protected $primaryKey = 'id';
    protected $allowedFields = ['id','nombre','apellido','telefono'];



    public function getAlumnos(){
        return $this->findAll();
    }


    public function add($dato){
       return $this->save($dato);
    }



}

