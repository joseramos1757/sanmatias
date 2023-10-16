<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Administrator;
use App\Models\User;
class AdministratorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $administrators =Administrator::all();
        return view('admin.administrator.index',compact('administrators'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    //se orena en descendente los datos para el select 
            $users = User::orderBy('id', 'desc')->pluck('name','id');  
        return view('admin.administrator.create',compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request-> validate([
            'ci'=>'required',
            'nombre'=>'required',
            'paterno'=>'required',
            'materno'=>'',
            'celular'=>'required',
            'fechanac'=>'required',
            'direccion'=>'required',
            'user_id'=>'required | unique:administrators',

        ]);
        return $request -> all();
    }

    /**
     * Display the specified resource.
     */
    public function show(Administrator $administrator)
    {
        return view('admin.administrator.show',compact('administrator'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Administrator $administrator)
    {
        return view('admin.administrator.edit',compact('administrator'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,Administrator $administrator)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Administrator $administrator)
    {
        //
    }
}
