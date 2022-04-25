<form class="row">
    <div class="form-group col-md-6">
        <input type="hidden" wire:model="agr_id">
        <x-label for="exampleFormControlInput1">Agr_Nom</x-label>
        <x-input type="text" class="w-100" wire:model="Agr_Nom" id="exampleFormControlInput1"></x-input>
        @error('Agr_Nom')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
    <div class="form-group col-md-6">
        <x-label for="exampleFormControlInput2">Agr_Prenom</x-label>
        <x-input type="text" class="w-100" wire:model="Agr_Prn" id="exampleFormControlInput2"></x-input>
        @error('Agr_Prn')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
    <div class="form-group col-md-6">
        <x-label for="exampleFormControlInput3">Agr_Resid</x-label>
        <x-input type="text" class="w-100" wire:model="Agr_Resid" id="exampleFormControlInput3"></x-input>
        @error('Agr_Resid')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
    <div class="col-md-12">
        <x-button wire:click.prevent="update()" class="btn btn-dark">Update</x-button>
        <x-button wire:click.prevent="cancel()" class="btn btn-danger">Cancel</x-button>
    </div>
</form>
