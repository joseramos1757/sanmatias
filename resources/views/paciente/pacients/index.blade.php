<x-app-layout>


    <div class="container ml-auto mr-auto flex mt-6 ">
        <div class="w-full md:w-full">
         
          <!-- Formulario -->
          <form class="bg-white px-8 pt-6 pb-8 mb-4">
            <div class="mb-4">
                <div class="mt-2 mb-6 font-semibold text-3xl text-gray-800 leading-tight w-full justify-center">
                    <center><h1>FORMULARIO DE REGISTRO DE PACIENTES</h1></center>
                </div>
              <div class="grid grid-flow-row sm:grid-flow-col gap-3 ">
             
                <div class="sm:col-span-4 justify-center">
                    <label for="carnet" class="block text-sm font-semibold text-gray-600">CARNET DE IDENTIDAD:</label>
                    <input type="text" id="carnet" name="carnet" class="w-full mt-1 p-2 border rounded-md" required>
                </div>
                <div class="sm:col-span-4 justify-center">
                    <label for="carnet" class="block text-sm font-semibold text-gray-600">NOMBRE(S):</label>
                    <input type="text" id="nombre" name="nombre" class="w-full mt-1 p-2 border rounded-md" required>
                </div>
                <div class="sm:col-span-4 justify-center">
                    <label for="carnet" class="block text-sm font-semibold text-gray-600">APELLIDO PATERNO:</label>
                    <input type="text" id="paterno" name="paterno" class="w-full mt-1 p-2 border rounded-md" required>
                </div>
                <div class="sm:col-span-4 justify-center">
                    <label for="carnet" class="block text-sm font-semibold text-gray-600">APELLIDO MATERNO:</label>
                    <input type="text" id="materno" name="materno" class="w-full mt-1 p-2 border rounded-md" required>
                </div>
                <div class="sm:col-span-4 justify-center">
                    <label for="carnet" class="block text-sm font-semibold text-gray-600">CELULAR:</label>
                    <input type="text" id="cel" name="cel" class="w-full mt-1 p-2 border rounded-md" required>
                </div>
              
              </div>
            </div>
            <div class="mb-4">
                <div class="grid grid-flow-row sm:grid-flow-col gap-3">
                    <div class="sm:col-span-8 justify-center">
                      <label for="carnet" class="block text-sm font-semibold text-gray-600">DIRECCIÓN:</label>
                      <input type="text" id="dir" name="dir" class="w-full mt-1 p-2 border rounded-md" required>
                  </div>
                  <div class="sm:col-span-4 justify-center">
                    <label for="estado_civil" class="block text-sm font-semibold text-gray-600">ESTADO CIVIL:</label>
                    <select id="estado_civil" name="estado_civil" class="w-full mt-1 p-2 border rounded-md" required>
                        <option value="" disabled selected>SELECCIONE UNA OPCIÓN</option>
                        <option value="Casado">SOLTERO (A)</option>
                        <option value="Soltero">CASADO (A)</option>
                        <option value="Divorciado">DIVORCIADO (A)</option>
                        <option value="Divorciado">VIUDO (A)</option>
                    </select>
                </div>
    
                    <div class="mb-3">
                        <label class="block text-sm font-semibold text-gray-600">SEXO:</label>
                        <div class="mt-1">
                            <label class="inline-flex items-center">
                                <input type="radio" name="sexo" value="Masculino" class="form-radio" required>
                                <span class="ml-1 text-sm">MASCULINO</span>
                            </label>
                            <label class="inline-flex items-center ml-6">
                                <input type="radio" name="sexo" value="Femenino" class="form-radio" required>
                                <span class="ml-1 text-sm" >FEMENINO</span>
                            </label>
                        </div>
                    </div>
           
                </div>
              </div>
              <div class="mb-4">
                <div class="grid grid-flow-row sm:grid-flow-col gap-3">
             
                  <div class="sm:col-span-4 justify-center">
                    <label for="fecha_nacimiento" class="block text-sm font-semibold text-gray-600">FECHA DE NACIMIENTO:</label>
                    <input type="date" id="fecha_nacimiento" name="fecha_nacimiento" class="w-full mt-1 p-2 border rounded-md" required>
                     </div>
                  <div class="sm:col-span-4 justify-center">
                      <label for="carnet" class="block text-sm font-semibold text-gray-600">OCUPACIÓN:</label>
                      <input type="text" id="ocupacion" name="ocupacion" class="w-full mt-1 p-2 border rounded-md" required>
                  </div>
        
                  <div class="sm:col-span-8 justify-center">
                      <label for="carnet" class="block text-sm font-semibold text-gray-600">OBSERVACIONES:</label>
                      <input type="text" id="obs" name="obs" class="w-full mt-1 p-2 border rounded-md" required>
                  </div>
                
                </div>
              </div>
           
            <div class="flex items-center  mt-8">
              <button class="bg-blue-700 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit"> REGISTRAR PACIENTE </button>
            </div>
          </form>              
          
        </div>

      </div> 

</x-app-layout>
