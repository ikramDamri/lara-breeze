<div>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Results') }}
        </h2>
    </x-slot>
    <button wire:click="question1" class="btn btn-primary btn-sm">Show Arg</button>

    @if (is_array($agriculteur) || is_object($agriculteur))
    @foreach($agriculteur as $value)
            <ul>
                <li>{{ $value->Agr_Nom}}</li>
            </ul>

    @endforeach
    @endif

    <button wire:click="question2" class="btn btn-primary btn-sm">Parcelle</button>

    @if (is_array($parcelle) || is_object($parcelle))
    @foreach($parcelle as $value)
            <ul>
                <li>{{ $value->Par_Nom}}</li>
            </ul>

    @endforeach
    @endif

    <button wire:click="question3" class="btn btn-primary btn-sm">ParcelleInfo</button>

    @if (is_array($parcelles) || is_object($parcelles))
    @foreach($parcelles as $value)
            <ul>
                <li>{{ $value->id}}</li>
                <li>{{ $value->Par_Nom}}</li>
                <li>{{ $value->Par_Lieu}}</li>
            </ul>

    @endforeach
    @endif


    <button wire:click="question4" class="btn btn-primary btn-sm">ParcelleAgr</button>

    @if (is_array($parcelle3) || is_object($parcelle3))
    @foreach($parcelle3 as $value)
            <ul>
                <li>{{ $value->Par_Nom}}</li>
                <li>{{ $value->Agr_Nom}}</li>
            </ul>

    @endforeach
    @endif

    <button wire:click="question5" class="btn btn-primary btn-sm">Intervention</button>

    @if (is_array($intervention) || is_object($intervention))
    @foreach($intervention as $value)
            <ul>
                <li>{{ $value->Int_Emp_Nss}}</li>
            </ul>

    @endforeach
    @endif

    <button wire:click="question6" class="btn btn-primary btn-sm">InterPar</button>

    @if (is_array($intervention2) || is_object($intervention2))
    @foreach($intervention2 as $value)
            <ul>
                <li>{{ $value->id}}</li>
                <li>{{ $value->Par_Nom}}</li>
            </ul>

    @endforeach
    @endif

    <button wire:click="question7" class="btn btn-primary btn-sm">InterParEmp</button>

    @if (is_array($intervention3) || is_object($intervention3))
    @foreach($intervention3 as $value)
            <ul>
                <li>{{ $value->id}}</li>
                <li>{{ $value->Par_Nom}}</li>
                <li>{{ $value->Emp_Nom}}</li>
            </ul>
    @endforeach
    @endif

    <button wire:click="question8" class="btn btn-primary btn-sm">InterEmp</button>

    @if (is_array($intervention4) || is_object($intervention4))
    @foreach($intervention4 as $value)
            <ul>
                <li>{{ $value->id}}</li>
                <li>{{ $value->Emp_Nom}}</li>
            </ul>

    @endforeach
    @endif

    <button wire:click="question9" class="btn btn-primary btn-sm">countpar</button>
    <ul><li>{{$parcelle4}}</li></ul>


    <button wire:click="question10" class="btn btn-primary btn-sm">maxPar</button>
    <ul><li>{{ $maximum}}</li></ul>

    <button wire:click="question11" class="btn btn-primary btn-sm" data-toggle="collapse">minPar</button>
    <ul><li>{{ $minimum}}</li></ul>


    </div>
