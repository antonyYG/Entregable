<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Editar Usuario
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-5xl mx-auto sm:px-6 lg:px-8">
            <div class="shadow-xl sm:rounded-2xl overflow-hidden" style="background:#f8faf5;">

                {{-- Header --}}
                <div style="background: linear-gradient(135deg, #2d6a2d 0%, #4a9e3f 60%, #6abf5e 100%); padding: 2rem;">
                    <div class="flex items-center gap-4">

                        <div style="width:60px;height:60px;border-radius:50%;background:rgba(255,255,255,0.15);border:2px solid rgba(255,255,255,0.4);display:flex;align-items:center;justify-content:center;">
                            <svg style="width:32px;height:32px;color:white;" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"/>
                            </svg>
                        </div>

                        <div>
                            <div class="flex items-center gap-2 mb-0.5">
                                <span style="background:rgba(255,255,255,0.2);color:white;font-size:0.65rem;font-weight:600;letter-spacing:0.08em;padding:2px 8px;border-radius:999px;text-transform:uppercase;">
                                    Gestión de usuarios
                                </span>
                            </div>
                        </div>

                        <div class="ml-auto opacity-20">
                            <svg style="width:64px;height:64px;color:white;" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M17 8C8 10 5.9 16.17 3.82 21.34L5.71 22l1-2.3A4.49 4.49 0 008 20C19 20 22 3 22 3c-1 2-8 2-8 8z"/>
                            </svg>
                        </div>

                    </div>
                </div>

                {{-- Banda decorativa --}}
                <div style="height:6px;background:repeating-linear-gradient(90deg, #2d6a2d 0px, #2d6a2d 20px, #6abf5e 20px, #6abf5e 40px, #f0c040 40px, #f0c040 60px);"></div>

                {{-- Formulario --}}
                <form action="{{ route('admin.user.store') }}" method="post" class="px-8 py-8">
                    @csrf

                    <div class="grid grid-cols-2 gap-8">

                        {{-- Columna izquierda: Datos personales --}}
                        <div class="space-y-5">
                            <div class="flex items-center gap-2">
                                <svg style="width:16px;height:16px;color:#2d6a2d;" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                                </svg>
                                <span style="font-size:0.7rem;font-weight:700;letter-spacing:0.1em;text-transform:uppercase;color:#2d6a2d;">Datos personales</span>
                            </div>

                            {{-- Nombre --}}
                            <div class="space-y-1">
                                <label for="name" style="display:block;font-size:0.82rem;font-weight:600;color:#374151;">Nombre completo</label>
                                <div class="relative">
                                    <span class="absolute inset-y-0 left-0 pl-3 flex items-center" style="color:#4a9e3f;">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                                        </svg>
                                    </span>
                                    <input id="name" type="text" name="name" value="{{ old('name') }}"
                                        style="width:100%;padding:0.6rem 1rem 0.6rem 2.4rem;border:1.5px solid #d1e7c8;border-radius:10px;font-size:0.875rem;color:#1f2937;background:#fff;outline:none;transition:border 0.2s;box-sizing:border-box;"
                                        onfocus="this.style.borderColor='#4a9e3f'" onblur="this.style.borderColor='#d1e7c8'"
                                    >
                                </div>
                                @error('name') <p style="color:#dc2626;font-size:0.72rem;margin-top:2px;">{{ $message }}</p> @enderror
                            </div>

                            {{-- Correo --}}
                            <div class="space-y-1">
                                <label for="email" style="display:block;font-size:0.82rem;font-weight:600;color:#374151;">Correo electrónico</label>
                                <div class="relative">
                                    <span class="absolute inset-y-0 left-0 pl-3 flex items-center" style="color:#4a9e3f;">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                        </svg>
                                    </span>
                                    <input id="email" type="email" name="email" value="{{ old('email') }}"
                                        style="width:100%;padding:0.6rem 1rem 0.6rem 2.4rem;border:1.5px solid #d1e7c8;border-radius:10px;font-size:0.875rem;color:#1f2937;background:#fff;outline:none;transition:border 0.2s;box-sizing:border-box;"
                                        onfocus="this.style.borderColor='#4a9e3f'" onblur="this.style.borderColor='#d1e7c8'"
                                    >
                                </div>
                                @error('email') <p style="color:#dc2626;font-size:0.72rem;margin-top:2px;">{{ $message }}</p> @enderror
                            </div>
                        </div>

                        {{-- Columna derecha: Seguridad --}}
                        <div class="space-y-5">
                            <div class="flex items-center gap-2">
                                <svg style="width:16px;height:16px;color:#2d6a2d;" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/>
                                </svg>
                                <span style="font-size:0.7rem;font-weight:700;letter-spacing:0.1em;text-transform:uppercase;color:#2d6a2d;">Seguridad</span>
                            </div>

                            <p style="color:#6b7280;font-size:0.75rem;margin-top:-8px;">Dejá los campos en blanco si no querés cambiar la contraseña.</p>

                            {{-- Contraseña --}}
                            <div class="space-y-1">
                                <label for="password" style="display:block;font-size:0.82rem;font-weight:600;color:#374151;">Nueva contraseña</label>
                                <div class="relative">
                                    <span class="absolute inset-y-0 left-0 pl-3 flex items-center" style="color:#4a9e3f;">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/>
                                        </svg>
                                    </span>
                                    <input id="password" type="password" name="password" placeholder="••••••••"
                                        style="width:100%;padding:0.6rem 1rem 0.6rem 2.4rem;border:1.5px solid #d1e7c8;border-radius:10px;font-size:0.875rem;color:#1f2937;background:#fff;outline:none;transition:border 0.2s;box-sizing:border-box;"
                                        onfocus="this.style.borderColor='#4a9e3f'" onblur="this.style.borderColor='#d1e7c8'"
                                    >
                                </div>
                                @error('password') <p style="color:#dc2626;font-size:0.72rem;margin-top:2px;">{{ $message }}</p> @enderror
                            </div>

                            {{-- Repetir contraseña --}}
                            <div class="space-y-1">
                                <label for="password_confirmation" style="display:block;font-size:0.82rem;font-weight:600;color:#374151;">Repetir contraseña</label>
                                <div class="relative">
                                    <span class="absolute inset-y-0 left-0 pl-3 flex items-center" style="color:#4a9e3f;">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                                        </svg>
                                    </span>
                                    <input id="password_confirmation" type="password" name="password_confirmation" placeholder="••••••••"
                                        style="width:100%;padding:0.6rem 1rem 0.6rem 2.4rem;border:1.5px solid #d1e7c8;border-radius:10px;font-size:0.875rem;color:#1f2937;background:#fff;outline:none;transition:border 0.2s;box-sizing:border-box;"
                                        onfocus="this.style.borderColor='#4a9e3f'" onblur="this.style.borderColor='#d1e7c8'"
                                    >
                                </div>
                            </div>
                        </div>

                    </div>

                    {{-- Acciones --}}
                    <div style="display:flex;align-items:center;justify-content:space-between;padding-top:1.5rem;border-top:1.5px solid #d1e7c8;margin-top:1.5rem;">
                        <a wire:navigate.hover href="{{ route('admin.user.index') }}"
                            style="display:inline-flex;align-items:center;gap:6px;font-size:0.82rem;color:#4a9e3f;font-weight:500;text-decoration:none;transition:color 0.2s;"
                            onmouseover="this.style.color='#2d6a2d'" onmouseout="this.style.color='#4a9e3f'">
                            <svg style="width:14px;height:14px;" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
                            </svg>
                            Volver
                        </a>

                        <button type="submit"
                            style="display:inline-flex;align-items:center;gap:8px;background:linear-gradient(135deg,#2d6a2d,#4a9e3f);color:white;padding:0.6rem 1.5rem;border-radius:10px;font-size:0.875rem;font-weight:600;border:none;cursor:pointer;transition:opacity 0.2s;box-shadow:0 2px 8px rgba(45,106,45,0.35);"
                            onmouseover="this.style.opacity='0.88'" onmouseout="this.style.opacity='1'">
                            <svg style="width:15px;height:15px;" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/>
                            </svg>
                            Guardar cambios
                        </button>
                    </div>

                </form>
            </div>
        </div>
    </div>

</x-app-layout>
