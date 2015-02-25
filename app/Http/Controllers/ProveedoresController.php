<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Proveedores;
use Auth;
use Request as Pedir;
class ProveedoresController extends Controller {

	public function __construct()
	{
		$this->middleware('auth');
	}

	//
	public function index()
	{
		$proveedores = Proveedores::all();

		return view('proveedores.index')->with('proveedores', $proveedores);
	}

	public function create()
	{
		return view('proveedores.create');
	}

	public function confirmar(Requests\PrepararProveedoresRequest $request)
	{
		$proveedor = new Proveedores;
		$proveedor->nombre = $request->nombre;
		$proveedor->direccion = $request->direccion;
		$proveedor->pais = $request->get('pais');
		$proveedor->telefono = $request->get('telefono');
		$proveedor->descripcion = $request->get('descripcion');
		$proveedor->users_id = $request->get('users_user_id');
		$proveedor->save();
		return redirect('proveedores');
	}

	public function eliminar()
	{
		$eliminar_id = Pedir::get('proveedorid');
		Proveedores::destroy($eliminar_id);
		return redirect('proveedores');
	}

}
