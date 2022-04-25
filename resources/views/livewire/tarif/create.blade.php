<form class="row">
    <div class="form-group col-md-6">
        <x-label for="exampleFormControlInput1">Tarif Description</x-label>
        <x-input type="text" class="w-100" id="exampleFormControlInput1" placeholder="Enter tar description"
            wire:model="Tar_Description"></x-input>
        @error('Tar_Description')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
    <div class="form-group col-md-6">
        <x-label for="exampleFormControlInput1">Tarif Euro</x-label>
        <x-input type="text" class="w-100" id="exampleFormControlInput1" placeholder="Enter tarif by euro"
            wire:model="Tar_Euro"></x-input>
        @error('Tar_Euro')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>

    <div class="col-md-12">
        <x-button wire:click.prevent="store()" class="btn btn-success">Save</x-button>
    </div>
</form>
