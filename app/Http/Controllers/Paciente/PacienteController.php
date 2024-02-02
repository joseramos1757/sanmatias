<?php

namespace App\Http\Controllers\Paciente;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Paciente;

class PacienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pacientes=Paciente::all(); 
        return view('paciente.pacients.index', compact('pacientes'));    
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('paciente.pacients.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request-> validate([
            'ci'=>'required|numeric',
            'nombre'=>'required',
            'paterno'=>'required',
            'materno'=>'',
            'celular'=>'required',
            'fechanac'=>'required',
            'observaciones'=>''

        ]);

      $Paciente = Paciente::create($request->all());
        return redirect()->route('paciente.pacients.show' , $Paciente);
    }

    /**
     * Display the specified resource.
     */
    public function show($paciente)
    {
     
        return view('paciente.pacients.edit',compact('paciente'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Paciente $paciente)
    {
        return view('paciente.pacients.edit', compact('paciente'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Paciente $paciente)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
    

}
