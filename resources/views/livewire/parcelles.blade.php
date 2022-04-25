<div>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Parcelles') }}
        </h2>
    </x-slot>
    @if (Auth::user()->hasRole('admin') or Auth::user()->hasRole('editor'))
        @if ($isOpen)
            @include('livewire.parcelle.update')
        @else
            @include('livewire.parcelle.create')
        @endif
    @endif
    <table class="table table-bordered mt-5" id="sampleTable">
        <thead>
            <tr>
                <th>Par id</th>
                <th>Parcelle lieu</th>
                <th>Parcelle nom</th>
                <th>Parcelle superficie</th>
                <th>Parcelle prop</th>
                @if (Auth::user()->hasRole('admin') or Auth::user()->hasRole('editor'))
                    <th>Action</th>
                @endif
            </tr>
        </thead>
        <tbody>
            @foreach ($parcelle as $value)
                <tr>
                    <td>{{ $value->id }}</td>
                    <td>{{ $value->Par_Nom }}</td>
                    <td>{{ $value->Par_Lieu }}</td>
                    <td>{{ $value->Par_Superficie }}</td>
                    <td>{{ $value->Par_Prop }}</td>
                    @if (Auth::user()->hasRole('admin') or Auth::user()->hasRole('editor'))
                        <td>
                            <button wire:click="edit({{ $value->id }})"
                                class="btn btn-primary btn-sm">Edit</button>
                            @if (Auth::user()->hasRole('admin'))
                                <button wire:click="delete({{ $value->id }})"
                                    class="btn btn-danger btn-sm">Delete</button>
                            @endif
                        </td>
                    @endif

                </tr>
            @endforeach
        </tbody>
    </table>
</div>
