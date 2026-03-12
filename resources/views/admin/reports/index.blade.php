<x-app-layout title="Sistema | Reportes">
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Reportes
            </h2>
        </div>
    </x-slot>

    <div class="py-6">
        <div class="w-full px-4 sm:px-6 lg:px-8">
            <div class="bg-white shadow-xl sm:rounded-lg overflow-auto p-6">
                @livewire('ReportTable')
            </div>
        </div>
    </div>

</x-app-layout>
