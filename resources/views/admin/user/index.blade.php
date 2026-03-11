<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Usuarios
            </h2>
            <a href="{{ route('admin.user.create') }}"
                style="display:inline-flex;align-items:center;gap:8px;background:linear-gradient(135deg,#2d6a2d,#4a9e3f);color:white;padding:0.5rem 1.2rem;border-radius:10px;font-size:0.875rem;font-weight:600;text-decoration:none;transition:opacity 0.2s;box-shadow:0 2px 8px rgba(45,106,45,0.35);"
                onmouseover="this.style.opacity='0.88'" onmouseout="this.style.opacity='1'">
                <svg style="width:15px;height:15px;" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4"/>
                </svg>
                Añadir nuevo usuario
            </a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-10">
            <div class="bg-white shadow-xl sm:rounded-lg overflow-auto p-12" >
    @livewire('UserTable')
</div>
        </div>
    </div>

</x-app-layout>
