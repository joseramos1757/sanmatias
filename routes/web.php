<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Paciente\PacienteController;
use Laravel\Fortify\Features;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\UserController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
Route::get('prueba', function(){
    return "accediste a la cuenta";
})->middleware(['auth:sanctum','age']);
Route::get('no-autorizado', function(){
    return "usted no es mayor de edad";
});
Route::middleware(['guest'])->get('/register', function () {
    return view('auth.register');
})->name('register');

Route::get('pacients',[PacienteController::class,'index'])->name('paciente.home');
Route::resource('pacients', PacienteController::class)->names('paciente.pacients');
//Route::get('/buscar_paciente', [PacienteController::class, 'buscarPaciente'])->name('buscar_paciente');

