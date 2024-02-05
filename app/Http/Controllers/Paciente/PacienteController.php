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
    public function index(Request $request)
    {
        $pacient =Paciente::all();
            // Verifica si se ha enviado un parámetro de búsqueda
    if ($request->has('carnet')) {
        // Realiza la búsqueda solo si se proporciona un carné
        $carnet = $request->input('carnet');
        $pacient = Paciente::where('ci', $carnet)->get();
    }

        return view('paciente.pacients.index',compact('pacient'));
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

      $pacient = Paciente::create($request->all());
        return redirect()->route('paciente.pacients.show' , $pacient);
    }

    /**
     * Display the specified resource.
     */
    public function show($pacient)
    {
     
        return view('paciente.pacients.show',compact('pacient'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Paciente $pacient)
    {
        return view('paciente.pacients.edit', compact('pacient'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Paciente $pacient)
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

      $pacient->update($request->all());
        return redirect()->route('paciente.pacients.edit',$pacient);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
    

}
