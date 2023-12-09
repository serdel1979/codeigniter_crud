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
            session()->setFlashdata('mensaje','Registro agregado');
            return redirect()->to(base_url('inicio'));
        }
        echo view('/layout/header');
        echo view('/alumnos/add');
        echo view('/layout/footer');
    }


    public function edit($id){

        $model = new AlumnosModel();

        $alumno = $model->getAlumno($id);

        echo view('/layout/header');
        //echo view('alumnos/edit', ['alumno' => $alumno]);
        echo view('alumnos/edit', compact('alumno'));
        echo view('/layout/footer');

    }

    public function update(){

        $validacion = $this->validate(['nombre' => 'required', 'apellido' => 'required', 'telefono'=>'required']);

        $id = $_POST['id']; 
        if($_POST && $validacion){



            $dato = [
                'nombre'=>$_POST['nombre'],
                'apellido'=>$_POST['apellido'],
                'telefono'=>$_POST['telefono']
            ];


            $model = new AlumnosModel();

            $model->update($id, $dato);
            
            session()->setFlashdata('mensaje','Registro actualizado');
            return redirect()->to(base_url('inicio'));

        }else{

            $error = $this->validator->listErrors();

            session()->setFlashdata('mensaje',$error);

            return redirect()->to(base_url('inicio/edit/'.$id));
        }


    }

    public function delet($id){


        $model = new AlumnosModel();

        $alumno = $model->deletAlumno($id);
        
        session()->setFlashdata('mensaje','Registro eliminado');
        
        return redirect()->to(base_url('inicio'));

    }


}