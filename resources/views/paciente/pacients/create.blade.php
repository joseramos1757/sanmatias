<x-app-layout>


    <div class="container ml-auto mr-auto flex mt-6 ">
        <div class="w-full md:w-full">
         
          <!-- Formulario -->
          {!! Form::open(['route' => 'paciente.pacients.store', 'class' => 'bg-white px-8 pt-6 pb-8 mb-4']) !!}
          <div class="mb-4">
              <div class="mt-2 mb-6 font-semibold text-3xl text-gray-800 leading-tight w-full justify-center">
                  <center><h1>FORMULARIO DE REGISTRO DE PACIENTES</h1></center>
              </div>
      
              <div class="grid grid-flow-row sm:grid-flow-col gap-3 ">
                  <div class="sm:col-span-4 justify-center">
                      {!! Form::label('ci', 'CARNET DE IDENTIDAD:', ['class' => 'block text-sm font-semibold text-gray-600']) !!}
                      {!! Form::text('ci', null, ['class' => 'w-full mt-1 p-2 border rounded-md', 'required']) !!}
                    </div>
      
                  <div class="sm:col-span-4 justify-center">
                      {!! Form::label('nombre', 'NOMBRE(S):', ['class' => 'block text-sm font-semibold text-gray-600']) !!}
                      {!! Form::text('nombre', null, ['class' => 'w-full mt-1 p-2 border rounded-md', 'required']) !!}
       
                    </div>
      
                  <div class="sm:col-span-4 justify-center">
                      {!! Form::label('paterno', 'APELLIDO PATERNO:', ['class' => 'block text-sm font-semibold text-gray-600']) !!}
                      {!! Form::text('paterno', null, ['class' => 'w-full mt-1 p-2 border rounded-md', 'required']) !!}
                  
                    </div>
      
                  <div class="sm:col-span-4 justify-center">
                      {!! Form::label('materno', 'APELLIDO MATERNO:', ['class' => 'block text-sm font-semibold text-gray-600']) !!}
                      {!! Form::text('materno', null, ['class' => 'w-full mt-1 p-2 border rounded-md', 'required']) !!}
                  </div>
      
                  <div class="sm:col-span-4 justify-center">
                      {!! Form::label('celular', 'CELULAR:', ['class' => 'block text-sm font-semibold text-gray-600']) !!}
                      {!! Form::text('celular', null, ['class' => 'w-full mt-1 p-2 border rounded-md', 'required']) !!}
              
                    </div>
              </div>
          </div>
      
          <div class="mb-4">
              <div class="grid grid-flow-row sm:grid-flow-col gap-3">
                  <div class="sm:col-span-8 justify-center">
                      {!! Form::label('direccion', 'DIRECCIÓN:', ['class' => 'block text-sm font-semibold text-gray-600']) !!}
                      {!! Form::text('direccion', null, ['class' => 'w-full mt-1 p-2 border rounded-md', 'required']) !!}
                
                  </div>

                  <div class="sm:col-span-1 justify-center">
                    {!! Form::label('edad', 'EDAD:', ['class' => 'block text-sm font-semibold text-gray-600']) !!}
                    {!! Form::text('edad', null, ['class' => 'w-full mt-1 p-2 border rounded-md', 'required']) !!}
              
                </div>
                  
      
                  <div class="sm:col-span-4 justify-center">
                      {!! Form::label('estadocivil', 'ESTADO CIVIL:', ['class' => 'block text-sm font-semibold text-gray-600']) !!}
                      {!! Form::select('estadocivil', ['' => 'SELECCIONE UNA OPCIÓN', 'SOLTERO' => 'SOLTERO (A)', 'CASADO' => 'CASADO (A)', 'DIVORCIADO' => 'DIVORCIADO (A)', 'VIUDO' => 'VIUDO (A)'], null, ['class' => 'w-full mt-1 p-2 border rounded-md', 'required']) !!}
                
                    </div>

      
                  <div class="mb-3">
                      {!! Form::label(null, 'SEXO:', ['class' => 'block text-sm font-semibold text-gray-600']) !!}
                      <div class="mt-1">
                          <label class="inline-flex items-center">
                              {!! Form::radio('sexo', 'MASCULINO', false, ['class' => 'form-radio', 'required']) !!}
                              <span class="ml-1 text-sm">MASCULINO</span>
                          </label>
                          <label class="inline-flex items-center ml-6">
                              {!! Form::radio('sexo', 'FEMENINO', false, ['class' => 'form-radio', 'required']) !!}
                              <span class="ml-1 text-sm">FEMENINO</span>
                          </label>
                      </div>
                  </div>
        
              </div>
          </div>
      
          <div class="mb-4">
              <div class="grid grid-flow-row sm:grid-flow-col gap-3">
                  <div class="sm:col-span-4 justify-center">
                      {!! Form::label('fechanac', 'FECHA DE NACIMIENTO:', ['class' => 'block text-sm font-semibold text-gray-600']) !!}
                      {!! Form::date('fechanac', null, ['class' => 'w-full mt-1 p-2 border rounded-md', 'required']) !!}
              
                    </div>
      
                  <div class="sm:col-span-4 justify-center">
                      {!! Form::label('ocupacion', 'OCUPACIÓN:', ['class' => 'block text-sm font-semibold text-gray-600']) !!}
                      {!! Form::text('ocupacion', null, ['class' => 'w-full mt-1 p-2 border rounded-md', 'required']) !!}
                    
                    </div>
      
                  <div class="sm:col-span-8 justify-center">
                      {!! Form::label('observaciones', 'OBSERVACIONES:', ['class' => 'block text-sm font-semibold text-gray-600']) !!}
                      {!! Form::text('observaciones', null, ['class' => 'w-full mt-1 p-2 border rounded-md']) !!}
                  </div>
              </div>
          </div>
      
          <div class="flex items-center mt-8">
              {!! Form::submit('REGISTRAR PACIENTE', ['class' => 'bg-blue-700 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline']) !!}
          </div>
      {!! Form::close() !!}            
          
        </div>

      </div> 

</x-app-layout>
