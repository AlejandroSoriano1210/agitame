<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Crear empleado
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <form method="POST" action="{{ route('empleados.store') }}" class="max-w-sm mx-auto">
                @csrf
                <div class="mb-5">
                    <x-input-label for="numero" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                        Número
                    </x-input-label>
                    <x-text-input name="numero" type="text" id="numero" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        :value="old('numero')" />
                    <x-input-error :messages="$errors->get('numero')" class="mt-2" />
                </div>
                <div class="mb-5">
                    <x-input-label for="nombre" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                        Nombre
                    </x-input-label>
                    <x-text-input name="nombre" type="text" id="nombre" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        :value="old('nombre')" />
                    <x-input-error :messages="$errors->get('nombre')" class="mt-2" />
                </div>
                <div class="mb-5">
                    <x-input-label for="apellido" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                        Apellido
                    </x-input-label>
                    <x-text-input name="apellido" type="text" id="apellido" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        :value="old('apellido')" />
                    <x-input-error :messages="$errors->get('apellido')" class="mt-2" />
                </div>
                <div class="mb-5">
                    <x-input-label for="departamento" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                        Departamento
                    </x-input-label>
                    <select name="departamento" id="departamento" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        @foreach($departamentos as $departamento)
                            <option value="{{ $departamento->id }}">
                                {{ $departamento->denominacion }}
                            </option>
                        @endforeach
                    </select>
                    <x-input-error :messages="$errors->get('departamento')" class="mt-2" />
                </div>
                <div class="mb-5">
                    <x-input-label for="acciones" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                        Acciones
                    </x-input-label>
                    <x-text-input name="acciones" type="text" id="acciones" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        :value="old('acciones')" />
                    <x-input-error :messages="$errors->get('acciones')" class="mt-2" />
                </div>
                <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    Crear
                </button>
            </form>
        </div>
    </div>
</x-app-layout>
