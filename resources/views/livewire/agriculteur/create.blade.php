<form class="row">
    <div class="form-group col-md-6">
        <x-label for="exampleFormControlInput1">Agriculteur nom</x-label>
        <x-input type="text" class="w-100" id="exampleFormControlInput1"
            wire:model="Agr_Nom"></x-input>
        @error('Agr_Nom')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
    <div class="form-group col-md-6">
        <x-label for="exampleFormControlInput2">Agriculteur prenom </x-label>
        <x-input type="text" class="w-100" id="exampleFormControlInput2" wire:model="Agr_Prn"></x-input>
        @error('Agr_Prn')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
    <div class="form-group col-md-6">
        <x-label for="exampleFormControlInput3">Agriculteur Residance</x-label>
        <x-input type="text" class="w-100" id="exampleFormControlInput3" wire:model="Agr_Resid"></x-input>
        @error('Agr_Resid')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
    <div class="col-md-12">
        <x-button wire:click.prevent="store()" class="btn btn-success">Save</x-button>
    </div>
</form>
