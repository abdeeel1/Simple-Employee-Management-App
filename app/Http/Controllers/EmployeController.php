<?php

namespace App\Http\Controllers;

use App\Models\Employe;
use Illuminate\Http\Request;

class EmployeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        //
        $query = Employe::query();

    
        if ($request->filled('nom')) {
            $query->where('nom', 'like', '%' . $request->nom . '%');
        }
        
        if ($request->filled('status')) {
            $query->where('status', '=', $request->status);
        }

    
        

        $employees = $query
        ->paginate(4)
        ->withQueryString();

        return view('employees.index', compact('employees'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //

        return view('employees.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validated = $request->validate([
            "nom" => "required|string|min:3|max:255",
            "email" => "required|email|unique:employes,email",
            "poste" => "required",
            "salaire" => "numeric|required",
            "status" => "required",

        ]);

        Employe::create($validated);

        return redirect()->route('employees.index')->with('success', 'Employee Ajouté !');


    }

    /**
     * Display the specified resource.
     */
    public function show(Employe $employe)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Employe $employe)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Employe $employee)
    {
        //
        $statusUpdated = null;
        if($employee->status === 'active'){
            $statusUpdated = 'inactive';
        }else{
            $statusUpdated = 'active';
        }

        $employee->update(['status' => $statusUpdated]);

        return redirect()->back()->withInput();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Employe $employee)
    {
        //
        $employee->delete();

        return redirect()->route('employees.index')->with('success', 'Employee Supprime !');
    }
}
