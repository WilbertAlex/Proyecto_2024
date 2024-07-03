<div class="py-5">
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-600 leading-tight">
            Lista de Integrantes
        </h2>
    </x-slot>
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="flex items-center justify-between gap-4 mb-2">
            <x-input icon="search" placeholder="Buscar registro" wire:model.live="search" />

            <div>
                <x-button href="{{route('categorypdf')}}" icon="document" target="_blank" gray label="PDF" teal class="w-full md:w-auto" />
                <x-button wire:click="create()" wire:click.preventDefault="" wire:click.stop="" primary label="Nuevo" icon="plus" spinner="create" />
                @if ($isOpen)
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
                        <th scope="col" class="px-6 py-3">Img</th>
                        <th scope="col" class="px-6 py-3">Nombre</th>
                        <th scope="col" class="px-6 py-3">descripcion</th>
                        <th scope="col" class="px-6 py-3 text-center">Opciones</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200 dark:text-gray-400">
                    @foreach ($categorias as $item)
                        <tr class="text-sm font-medium text-gray-900">
                            <td class="px-6 py-4">
                                <span
                                    class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-indigo-500 text-white">
                                    {{ $item->id }}
                                </span>
                            </td>
                            <td> @if ($item->image && $item->image->exists())
                                <img src="{{ Storage::url($item->image->url) }}" alt="" width="20%">
                            @else
                                <p>Sin imagen</p>
                            @endif</td>
                            <td class="px-6 py-4 dark:text-gray-200">{{ $item->nombre }}</td>
                            <td class="px-6 py-4 dark:text-gray-200">{{ $item->descripcion }}</td>

                            <td class="px-6 py-4 text-right">
                                <x-button.circle wire:click="edit({{ $item }})" primary icon="pencil" />
                                <x-button.circle negative icon="x"
                                    x-on:confirm="{
                                    title: '¿Seguro que deseas eliminar?',
                                    icon: 'error',
                                    method: 'destroy',
                                    params: {{ $item->id }}
                                }" />
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <!-- Mensaje si no hay registros -->
        @if (!$categorias->count())
            <p class="dark:text-gray-200 mt-4">No existe ningún registro coincidente</p>
        @endif

        <!-- Paginación -->
        @if ($categorias->hasPages())
            <div class="px-6 py-3">
                {{ $categorias->links() }}
            </div>
        @endif
    </div>
</div>
