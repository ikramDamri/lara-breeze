<div>
    @if (Auth::user()->hasRole('admin') or Auth::user()->hasRole('editor'))
        @if ($isOpen)
            @include('livewire.agriculteur.update')
        @else
        @if (Auth::user()->hasRole('admin'))
            @include('livewire.agriculteur.create')
        @endif
        @endif
    @endif
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white leading-tight">
            {{ __('Agricultures') }}
        </h2>
    </x-slot>
    <table class="table table-bordered mt-5" id="sampleTable">
        <thead>
            <tr>
                <th>Agr_id</th>
                <th>Agr_nom</th>
                <th>Agr_prenom</th>
                <th>Agr_resid</th>
            @if (Auth::user()->hasRole('admin') or Auth::user()->hasRole('editor'))
                <th>Action</th>
            @endif
            </tr>
        </thead>
        <tbody>
            @foreach ($agriculteur as $value)
                <tr>
                    <td>{{ $value->id }}</td>
                    <td>{{ $value->Agr_Nom }}</td>
                    <td>{{ $value->Agr_Prn }}</td>
                    <td>{{ $value->Agr_Resid }}</td>

                        <td>
                        @if (Auth::user()->hasRole('admin') or Auth::user()->hasRole('editor'))
                            <button wire:click="edit({{ $value->id }})"
                                class="btn btn-primary btn-sm">Edit</button>
                                @if (Auth::user()->hasRole('admin'))
                                <button wire:click="delete({{ $value->id }})"
                                    class="btn btn-danger btn-sm">Delete</button>
                                @endif
                            @endif
                        </td>


                </tr>
            @endforeach
        </tbody>
    </table>
</div>

