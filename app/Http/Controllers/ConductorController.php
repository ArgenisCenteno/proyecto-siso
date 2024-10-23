<?php
// app/Http/Controllers/ConductorController.php

namespace App\Http\Controllers;

use App\Models\User; // Assuming User model is used for conductores
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use Alert;
class ConductorController extends Controller
{
    public function index(Request $request)
    {
        // Fetch conductores with role "conductor"
        if ($request->ajax()) {
            $users = User::role('conductor')->get(); // Use `with` to eager load roles

            return DataTables::of($users)
               
                ->addColumn('fecha', function ($row) {
                    return $row->created_at->format('m-d-Y'); // Use getRoleNames() to get assigned roles
    
                })
                ->addColumn('actions', function ($row) {
                    $viewUrl = route('conductores.show', $row->id);
                    
                    return '<a href="' . $viewUrl . '" class="btn btn-info btn-sm">Ver</a>
                            
                         ';
                })
                ->rawColumns(['role', 'actions'])
                ->make(true);
        } else {
            return view('conductores.index');
        }
    }

    public function show($id)
    {
        $conductor = User::with(['vehicles', 'registroConductores', 'tramites'])->findOrFail($id);
        return view('conductores.show', compact('conductor'));
    }
}
