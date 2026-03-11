<div class="flex items-center space-x-2">

    <a wire:navigate.hover href="{{ route('admin.user.edit', $user) }}">
        <x-button blue xs>
            Editar
        </x-button>
    </a>

    <form wire:navigate.hover action="{{route('admin.user.destroy',$user)}}" method="post"
    class="delete-form">
        @csrf
        @method('DELETE')

        <x-button type="submit" red xs>
            Eliminar
        </x-button>

    </form>

</div>
