<div>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Employes') }}
        </h2>
    </x-slot>
    @if (Auth::user()->hasRole('admin') or Auth::user()->hasRole('editor'))
        @if ($isOpen)
            @include('livewire.employe.update')
        @else
            @include('livewire.employe.create')
        @endif
    @endif
    <table class="table table-bordered mt-5" id="sampleTable">
        <thead>
            <tr>
                <th>Emp_nss</th>
                <th>Emp_nom</th>
                <th>Emp_prn</th>
                <th>Emp_tarif</th>
                @if (Auth::user()->hasRole('admin') or Auth::user()->hasRole('editor'))
                    <th>Action</th>
                @endif
            </tr>
        </thead>
        <tbody>
            @foreach ($employe as $value)
                <tr>
                    <td>{{ $value->Emp_Nss }}</td>
                    <td>{{ $value->Emp_Nom }}</td>
                    <td>{{ $value->Emp_Prn }}</td>
                    <td>{{ $value->Emp_Tarif }}</td>
                    @if (Auth::user()->hasRole('admin') or Auth::user()->hasRole('editor'))
                        <td>
                            <button wire:click="edit({{ json_encode($value->Emp_Nss) }})"
                                class="btn btn-primary btn-sm">Edit</button>
                            @if (Auth::user()->hasRole('admin'))
                                <button wire:click="delete({{ json_encode($value->Emp_Nss) }})"
                                    class="btn btn-danger btn-sm">Delete</button>
                            @endif
                        </td>
                    @endif

                </tr>
            @endforeach
        </tbody>
    </table>
</div>

