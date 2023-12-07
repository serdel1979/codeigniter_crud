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
}