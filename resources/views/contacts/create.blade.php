@extends('base')

@section('title', 'Novo contato')

@section('main')
<form method="POST" action="{{ route('contacts.store') }}">
    @csrf
    <div class="shadow rounded-md sm:overflow-hidden max-w-6xl">
        <div class="px-4 py-5 space-y-6 sm:p-6">
            <div class="grid grid-cols-6 gap-6">
                <div class="col-span-3">
                    <label for="first_name" class="block text-sm font-medium text-gray-700">
                        Primeiro Nome
                    </label>
                    <input type="text" name="first_name" id="first_name" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                </div>

                <div class="col-span-3">
                    <label for="last_name" class="block text-sm font-medium text-gray-700">
                        Último Nome
                    </label>
                    <input type="text" name="last_name" id="last_name" autocomplete="family-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                </div>
                <div class="col-span-4">
                    <label for="email" class="block text-sm font-medium text-gray-700">E-mail</label>
                    <input type="text" name="email" id="email" autocomplete="email" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                </div>

                <div class="col-span-2">
                    <label for="phone_number" class="block text-sm font-medium text-gray-700">Telefone</label>
                    <input type="text" name="phone_number" id="phone_number" autocomplete="phone-number" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                </div>

                <div class="col-span-2">
                    <label for="city" class="block text-sm font-medium text-gray-700">Cidade</label>
                    <input type="text" name="city" id="city" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                </div>

                <div class="col-span-2">
                    <label for="state" class="block text-sm font-medium text-gray-700">Estado</label>
                    <input type="text" name="state" id="state" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                </div>

                <div class="col-span-2">
                    <label for="country" class="block text-sm font-medium text-gray-700">País</label>
                    <select id="country" name="country" autocomplete="country" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                        <option>Brasil</option>
                        <option>Estados Unidos</option>
                        <option>Inglaterra</option>
                        <option>Alemanha</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="px-4 py-3 bg-gray-50 flex justify-end">
            <a href="{{ route('contacts.index') }}" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-red-600 hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500">
                Cancelar
            </a>
            <button type="submit" class="ml-3 inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                Salvar
            </button>
        </div>
    </div>
</form>
@endsection
