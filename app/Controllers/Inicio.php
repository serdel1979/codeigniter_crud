<?php

namespace App\Controllers;

use App\Models\AlumnosModel;

class Inicio extends BaseController
{
    public function index()
    {

        $model = new AlumnosModel();

        $datos = $model->getAlumnos();

        echo view('/layout/header');
        echo view('/alumnos/listado',compact('datos'));
        echo view('/layout/footer');
    }


    public function add()
    {
        if ($_POST) {
            if ($_POST['nombre']!=null & $_POST['apellido'] != null & $_POST['telefono'] != null){
                    
            }
            $model = new AlumnosModel();
            
            $datos = [
                'nombre' => $_POST['nombre'],
                'apellido' => $_POST['apellido'],
                'telefono' => $_POST['telefono']
            ];

            $model->add($datos);
        }
        echo view('/layout/header');
        echo view('/alumnos/add');
        echo view('/layout/footer');
    }





}