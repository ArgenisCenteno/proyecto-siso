<?php
namespace App\Http\Controllers;

use App\Models\Servicio;
use App\Models\User;
use App\Models\Vehicle;
use App\Models\Vehiculo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Yajra\DataTables\DataTables;

class VehicleController extends Controller
{
    public function index(Request $request)
    {
        $vehiculos = Vehicle::all(); // Fetch vehicles for the authenticated user
    
        if ($request->ajax()) {
            return DataTables::of($vehiculos)
                ->addColumn('actions', function ($row) {
                    $editUrl = route('vehiculos.edit', $row->id);
                    $deleteUrl = route('vehiculos.destroy', $row->id);
    
                    return '<a href="' . $editUrl . '" class="btn btn-warning btn-sm">Editar</a>
                            <form action="' . $deleteUrl . '" method="POST" style="display:inline;" class="btn-delete">
                                ' . csrf_field() . '
                                ' . method_field('DELETE') . '
                                <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                            </form>';
                })
                ->rawColumns(['actions']) // Allow HTML in the actions column
                ->make(true);
        }
    
        return view('vehiculos.index'); // Regular view for non-AJAX requests
    }

    public function create()
    {
        $servicios = Servicio::all();
        $conductores = User::role('conductor')->get(); // Fetch users with role 'conductor'
        //dd($conductores);
        return view('vehiculos.create')->with('servicios', $servicios)->with('conductores', $conductores); // Return the view to create a new vehicle
    }

    public function store(Request $request)
    {
        // Validate the request
        $request->validate([
            'tipo' => 'required|string|max:50',
            'marca' => 'required|string|max:50',
            'modelo' => 'required|string|max:50',
            'color' => 'required|string|max:30',
            'placa' => 'required|string|max:10',
            'anio' => 'required|integer|min:1900|max:' . date('Y'),
            'servicio_id' => 'required|exists:servicios,id', // Assuming there's a servicios table
        ]);

        // Create a new vehicle
        $vehiculo = new Vehicle();
        $vehiculo->user_id = $request->user_id; // Set the user_id to the authenticated user
        $vehiculo->tipo = $request->tipo;
        $vehiculo->marca = $request->marca;
        $vehiculo->modelo = $request->modelo;
        $vehiculo->color = $request->color;
        $vehiculo->placa = $request->placa;
        $vehiculo->anio = $request->anio;
        $vehiculo->servicio_id = $request->servicio_id;
        $vehiculo->save();

        return redirect()->route('vehiculos.index')->with('success', 'Vehículo creado con éxito.');
    }

    public function edit($id)
    {
        $vehiculo = Vehicle::findOrFail($id); // Find the vehicle by ID
        $servicios = Servicio::all();
        $conductores = User::role('conductor')->get(); // Fetch users with role 'conductor'
        return view('vehiculos.edit', compact('vehiculo', 'servicios', 'conductores'));
    }

    public function update(Request $request, $id)
    {
        // Validate the request
        $request->validate([
            'tipo' => 'required|string|max:50',
            'marca' => 'required|string|max:50',
            'modelo' => 'required|string|max:50',
            'color' => 'required|string|max:30',
            'placa' => 'required|string|max:10',
            'anio' => 'required|integer|min:1900|max:' . date('Y'),
            'servicio_id' => 'required|exists:servicios,id',
        ]);

        // Find the vehicle and update it
        $vehiculo = Vehicle::findOrFail($id);
        $vehiculo->tipo = $request->tipo;
        $vehiculo->marca = $request->marca;
        $vehiculo->user_id = $request->user_id;
        $vehiculo->modelo = $request->modelo;
        $vehiculo->color = $request->color;
        $vehiculo->placa = $request->placa;
        $vehiculo->anio = $request->anio;
        $vehiculo->servicio_id = $request->servicio_id;
        $vehiculo->save();

        return redirect()->route('vehiculos.index')->with('success', 'Vehículo actualizado con éxito.');
    }

    public function destroy($id)
    {
        $vehiculo = Vehiculo::findOrFail($id);
        $vehiculo->delete();

        return redirect()->route('vehiculos.index')->with('success', 'Vehículo eliminado con éxito.');
    }
}
