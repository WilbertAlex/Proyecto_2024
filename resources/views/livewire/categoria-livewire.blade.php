<div class="py-5">
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-600 leading-tight">
            Lista de Integrantes
        </h2>
    </x-slot>
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="flex flex-wrap items-center justify-between dark:text-gray-400 gap-4 mb-2">
            <x-input icon="search" placeholder="Buscar registro" wire:model.live="search" class="w-full md:w-auto"/>
            <div class="flex flex-wrap gap-2">
                <!-- Botones PDF y Nuevo -->
                <x-button href="" icon="document" target="_blank" gray label="PDF" teal class="w-full md:w-auto"/>
                <x-button wire:click="create()" spinner="create" icon="plus" primary label="Nuevo" class="w-full md:w-auto"/>
                @if($isOpen)
                    @include('livewire.category-create')
                @endif
            </div>
        </div>

        <!-- Tabla lista de items -->
        <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
            <table class="w-full divide-y divide-gray-200 table-auto">
                <thead class="bg-indigo-500 text-white">
                    <tr class="text-left text-xs font-bold uppercase">
                        <th scope="col" class="px-6 py-3">ID</th>
                        <th scope="col" class="px-6 py-3">Nombre</th>
                        <th scope="col" class="px-6 py-3 text-center">Opciones</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200 dark:text-gray-400">
                    @foreach($integrantes as $item)
                        <tr class="text-sm font-medium text-gray-900">
                            <td class="px-6 py-4">
                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-indigo-500 text-white">
                                    {{$item->id}}
                                </span>
                            </td>
                            <td class="px-6 py-4 dark:text-gray-200">{{$item->nombre}}</td>
                            <td class="px-6 py-4 text-right">
                                <x-button.circle wire:click="edit({{$item}})" primary icon="pencil" />
                                <x-button.circle negative icon="x" x-on:confirm="{
                                    title: '¿Seguro que deseas eliminar?',
                                    icon: 'error',
                                    method: 'destroy',
                                    params: {{$item->id}}
                                }"/>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <!-- Mensaje si no hay registros -->
        @if(!$integrantes->count())
            <p class="dark:text-gray-200 mt-4">No existe ningún registro coincidente</p>
        @endif

        <!-- Paginación -->
        @if($integrantes->hasPages())
            <div class="px-6 py-3">
                {{$integrantes->links()}}
            </div>
        @endif
    </div>
</div>
