@extends('base')

@section('title', 'Contatos')

@section('main')

@if (session()->get('success'))
<div class="alert flex flex-row items-center bg-green-200 p-5 rounded border-b-2 border-green-300 mb-5">
    <div class="alert-content ml-4">
        <div class="alert-title font-semibold text-lg text-green-800">
            Sucesso!
        </div>
        <div class="alert-description text-sm text-green-600">
            {{ session()->get('success') }}
        </div>
    </div>
</div>
@endif

<div class="flex flex-col">
    <div class="-my-2 overflow-x-auto sm:-ms-6 lg:-mx-8">
        <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
            <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                        <tr>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Nome/Email
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Telefone
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Cidade
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Estado
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                País
                            </th>
                            <th scope="col" class="px-6 py-3 text-center">
                                <a href="{{ route('contacts.create') }}" class="px-4 py-2 inline-flex text-sm leading-5 font-semibold rounded bg-green-100 text-green-600 hover:bg-green-200 transition duration-300ms ease">Novo contato</a>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($contacts as $contact)
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex flex-col">
                                    <div class="text-sm font-medium text-gray-900">
                                        {{$contact->first_name}} {{$contact->last_name}}
                                    </div>
                                    <div class="text-sm text-gray-500">
                                        {{$contact->email}}
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-500">
                                    {{$contact->phone_number}}
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-500">
                                    {{$contact->city}}
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-500">
                                    {{$contact->state}}
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-500">
                                    {{$contact->country}}
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex justify-center">
                                    <a href="{{ route('contacts.edit', $contact->id) }}" class="px-4 py-2 inline-flex text-sm leading-5 font-semibold rounded bg-indigo-100 text-indigo-800 hover:bg-indigo-200 transition duration-300ms ease">Editar</a>
                                    <form action="{{ route('contacts.destroy', $contact->id) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button class="ml-3 px-4 py-2 inline-flex text-sm leading-5 font-semibold rounded bg-red-100 text-red-800 hover:bg-red-200 transition duration-300ms ease">Deletar</a>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
