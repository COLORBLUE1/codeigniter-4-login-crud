<?php namespace App\Controllers;

	use App\Models\CrudModel;

class Crud extends BaseController
{
	public function listado()
	{
		$Crud = new CrudModel();
		$datos = $Crud->listarNombres();

		$mensaje = session('mensaje');

		$data = [
					"datos" => $datos,
					"mensaje" => $mensaje
				];

		return view('listado', $data);
	}

	public function crear() {
		$datos = [
			"name" => $_POST['nombre'],
			"apellido" => $_POST['apellido'],
			"email" => $_POST['email'],
			"contraseña" => $_POST['clave'],
			"telefono" => $_POST['telefono'],
			"direccion" => $_POST['direccion']
		];
$Crud = new CrudModel();
$respuesta = $Crud->insertar($datos);

if ($respuesta > 0) {
	return redirect()->to(base_url().'listado')->with('mensaje','1');
} else {
	return redirect()->to(base_url().'listado')->with('mensaje','0');
}
	}

	public function actualizar(){
		$datos = [
			
			"name" => $_POST['nombre'],
			"apellido" => $_POST['apellido'],
			"email" => $_POST['email'],
			"contraseña" => $_POST['clave'],
			"telefono" => $_POST['telefono'],
			"direccion" => $_POST['direccion']
				];
		$id = $_POST['id'];

		$Crud = new CrudModel();

		$respuesta = $Crud->actualizar($datos, $id);

		if ($respuesta) {
			return redirect()->to(base_url().'listado')->with('mensaje','2');
		} else {
			return redirect()->to(base_url().'listado')->with('mensaje','3');
		}
	}

	public function obtenerNombre($id) {
		$data = ["id" => $id];
		$Crud = new CrudModel();
		$respuesta = $Crud->obtenerNombre($data);

		$datos = ["datos" => $respuesta];

		return view('actualizar', $datos);
	}

	public function eliminar($id){
		$Crud = new CrudModel();
		$data = ["id" => $id];

		$respuesta = $Crud->eliminar($data);

		if ($respuesta) {
			return redirect()->to(base_url().'listado')->with('mensaje','4');
		} else {
			return redirect()->to(base_url().'listado')->with('mensaje','5');
		}
	}

	//--------------------------------------------------------------------

}
