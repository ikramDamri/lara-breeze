<div>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Interventions') }}
        </h2>
    </x-slot>
    @if (Auth::user()->hasRole('admin') or Auth::user()->hasRole('editor'))

        @if ($isOpen)
            @include('livewire.intervention.update')
        @else
            @include('livewire.intervention.create')
        @endif
    @endif
    <table class="table table-bordered mt-5" id="sampleTable">
        <thead>
            <tr>
                <th>Int Debut</th>
                <th>Int Emp nss</th>
                <th>Int par id</th>
                <th>Int nb jrs</th>
                @if (Auth::user()->hasRole('admin') or Auth::user()->hasRole('editor'))

                    <th>Action</th>
                @endif
            </tr>
        </thead>
        <tbody>
            @foreach ($intervention as $value)
                <tr>
                    <td>{{ $value->Int_Debut }}</td>
                    <td>{{ $value->Int_Emp_Nss }}</td>
                    <td>{{ $value->Int_Par_Id }}</td>
                    <td>{{ $value->Int_Nb_Jours }}</td>
                    @if (Auth::user()->hasRole('admin') or Auth::user()->hasRole('editor'))

                        <td>
                            <button wire:click="edit({{ json_encode($value->Int_Debut) }})"
                                class="btn btn-primary btn-sm">Edit</button>
                            @if (Auth::user()->hasRole('admin'))
                                <button wire:click="delete({{ json_encode($value->Int_Debut) }})"
                                    class="btn btn-danger btn-sm">Delete</button>
                            @endif
                        </td>
                    @endif

                </tr>
            @endforeach
        </tbody>
    </table>
</div>
