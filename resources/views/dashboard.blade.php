<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div class="container ml-auto mr-auto flex mt-6 ">
        <div class="w-full md:w-full">

        </div>
    </div>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="flex space-x-4">
                    <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                    <a href="{{route('paciente.pacients.index')}}" class="text-white hover:bg-blue-950 hover:text-white block rounded-md px-3 py-2 text-base font-sans font-bold ">PACIENTES</a>
             
                    <a href="{{route('register')}}" class="text-white hover:bg-blue-950 hover:text-white block rounded-md px-3 py-2 text-base font-sans font-bold">HISTORIAL CLÍNICO</a>
        <a href="#" class="text-white hover:bg-blue-950 hover:text-white block rounded-md px-3 py-2 text-base font-sans font-bold">LABORATORIOS</a>
                    <a href="#" class="text-white hover:bg-blue-950 hover:text-white block rounded-md px-3 py-2 text-base font-sans font-bold">REPORTES EPIDEMIOLÓGICOS</a>
                  </div>
             
            </div>
        </div>
    </div>
</x-app-layout>
