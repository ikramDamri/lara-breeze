<div>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tarifs') }}
        </h2>
    </x-slot>
    @if (Auth::user()->hasRole('admin') or Auth::user()->hasRole('editor'))
        @if ($isOpen)
            @include('livewire.tarif.update')
        @else
            @include('livewire.tarif.create')
        @endif
    @endif
    <table class="table table-bordered mt-5" id="sampleTable">
        <thead>
            <tr>
                <th>Tarif Description</th>
                <th>Tarif Euro</th>
                @if (Auth::user()->hasRole('admin') or Auth::user()->hasRole('editor'))
                    <th>Action</th>
                @endif
            </tr>
        </thead>
        <tbody>
            @foreach ($tarif as $value)
                <tr>
                    <td>{{ $value->Tar_Description }}</td>
                    <td>{{ $value->Tar_Euro }}</td>
                    @if (Auth::user()->hasRole('admin') or Auth::user()->hasRole('editor'))
                        <td>
                            <button wire:click="edit({{ json_encode($value->Tar_Description) }})"
                                class="btn btn-primary btn-sm">Edit</button>
                            @if (Auth::user()->hasRole('admin'))
                                <button wire:click="delete({{ json_encode($value->Tar_Description) }})"
                                    class="btn btn-danger btn-sm">Delete</button>
                            @endif
                        </td>
                    @endif
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
