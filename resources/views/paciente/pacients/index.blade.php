<x-app-layout>

  <div class="container mx-auto mt-6">
    <div class="w-full px-6 py-4 rounded-lg bg-white">
      <div class="font-bold text-2 text-center text-2xl mt-2 mb-2">PACIENTES REGISTRADOS</div>
      <div class="w-full px-6 py-4 rounded-lg bg-white mb-6">
        <a href="{{route('paciente.pacients.create')}}" class="inline-block bg-green-700 px-4 py-2 rounded-md items-center">
          <button class="text-white text-center">REGISTRAR PACIENTE NUEVO</button></a>
    </div>
    <div class="container mx-auto my-8">
      <form action="/buscar" method="post" class="flex items-center">
          @csrf
          <input type="text" name="busqueda" placeholder="Buscar" class="border p-2 rounded-l">
          <button type="submit" class="bg-blue-500 text-white p-2 rounded-r">BUSCAR POR CARNET</button>
      </form>
  </div>
      <table class="min-w-full">
        <thead>
          <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
            <th class="py-2 px-4">CARNET</th>
            <th class="py-2 px-4">NOMBRE(S)</th>
            <th class="py-2 px-4">APELLIDO PATERNO</th>
            <th class="py-2 px-4">APELLIDO MATERNO</th>
            <th class="py-2 px-4">SEXO</th>
            <th class="py-2 px-4">CELULAR</th>
            <th class="py-2 px-4 border-b">EDAD</th>
            <th class="colspan-2">OPERACIONES</th>

            <!-- Agrega más columnas según sea necesario -->
          </tr>
        </thead>
        <tbody>
          @foreach($pacientes as $key => $paciente)
          <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
            <td class="py-2 px-4 border-b">{{$paciente->ci}}</td>
            <td class="py-2 px-4 border-b">{{$paciente->nombre}}</td>
            <td class="py-2 px-4 border-b">{{$paciente->paterno}}</td>
            <td class="py-2 px-4 border-b">{{$paciente->materno}}</td>
            <td class="py-2 px-4 border-b">{{$paciente->sexo}}</td>
            <td class="py-2 px-4 border-b">{{$paciente->celular}}</td>
            <td class="py-2 px-4 border-b">{{$paciente->edad}}</td>
            <td>
              <a href="{{ route('paciente.pacients.edit', $paciente) }}" class="inline-block bg-blue-500 px-4 py-2 rounded-md h-6  flex items-center">
                <button class="text-white">EDITAR</button>
            </a>
            </td>
            <td>
              <a href="#" class="inline-block bg-green-700 px-4 py-2 rounded-md h-6 flex items-center">
                <button class="text-white text-center">RECONSULTA</button></a>
            </td>
            <!-- Agrega más celdas según sea necesario -->
          </tr>
          @endforeach
      
          <!-- Agrega más filas según sea necesario -->
        </tbody>
      </table>
    </div>

  </div>

</x-app-layout>
