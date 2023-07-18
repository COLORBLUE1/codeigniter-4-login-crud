<?php namespace App\Controllers;


use App\Models\CrudModel;


class Dashboard extends BaseController
{
    public function index(){
        return view ("Dashboard/escritorio");
    }
    public function listado(){
        return view ("Dashboard/listado");
    }
    public function crear() {
		$datos = [
					"nombre" => $_POST['nombre'],
					"apellido" => $_POST['apellido'],
					"email" => $_POST['email'],
					"contraseña" => $_POST['contraseña'],
					"telefono" => $_POST['telefono'],
					"direccion" => $_POST['direccion']
				];
		$Crud = new CrudModel();
		$respuesta = $Crud->insertar($datos);

		if ($respuesta > 0) {
			return redirect()->to(base_url().'/')->with('mensaje','1');
		} else {
			return redirect()->to(base_url().'/')->with('mensaje','0');
		}

	}
}