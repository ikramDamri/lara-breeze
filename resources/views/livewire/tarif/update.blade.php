<form class="row">
    <div class="form-group col-md-6">
        <x-label for="exampleFormControlInput1">Tarif description</x-label>
        <x-input type="text" class="w-100" id="exampleFormControlInput1" placeholder="Enter tar description"
            wire:model="Tar_Description"></x-input>
        @error('Tar_Description')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
    <div class="form-group col-md-6">
        <x-label for="exampleFormControlInput1">Tarif Euro</x-label>
        <x-input type="text" class="w-100" wire:model="Tar_Euro" id="exampleFormControlInput1"></x-input>
        @error('Tar_Euro')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>

    <div class="col-md-12">
        <x-button wire:click.prevent="update()" class="btn btn-dark">Update</x-button>
        <x-button wire:click.prevent="cancel()" class="btn btn-danger">Cancel</x-button>
    </div>
</form>
