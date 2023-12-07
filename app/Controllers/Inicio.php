<?php

namespace App\Controllers;

class Inicio extends BaseController
{
    public function index()
    {
        echo view('/layout/header');
        echo view('/alumnos/listado');
        echo view('/layout/footer');
    }
}