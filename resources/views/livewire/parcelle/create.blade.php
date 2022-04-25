<form class="row">
    <div class="form-group col-md-6">
        <x-label for="exampleFormControlInput1">Parcelle nom </x-label>
        <x-input type="text" class="w-100" id="exampleFormControlInput1" wire:model="Par_Nom"></x-input>
        @error('Par_Nom')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
    <div class="form-group col-md-6">
        <x-label for="exampleFormControlInput2">Parcelle lieu</x-label>
        <x-input type="text" class="w-100" id="exampleFormControlInput2"
            wire:model="Par_Lieu"></x-input>
        @error('Par_Lieu')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
    <div class="form-group col-md-6">
        <x-label for="exampleFormControlInput3">Parcelle superficie</x-label>
        <x-input type="text" class="w-100" id="exampleFormControlInput3" wire:model="Par_Superficie"></x-input>
        @error('Par_Superficie')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
    <div class="form-group col-md-6">
        <x-label for="tarif">Parcelle prop</x-label>
        
        <select name="tarif" id="tarif" style="width: 100%;" wire:model="Par_Prop"
            class="block rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 mb-4"
            required>
            <option value=""> </option>
            @foreach ($agr as $value)
                <option value={{ $value->id }}>{{ $value->id }}</option>
            @endforeach
        </select>
        @error('Par_Prop')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
    {{-- <div class="form-group col-md-6">
        <x-label for="exampleFormControlInput3">Parcelle prop</x-label>
        <x-input type="text" class="w-100" id="exampleFormControlInput3" wire:model="par_prop"></x-input>
        @error('par_prop')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div> --}}

    <div class="col-md-12">
        <x-button wire:click.prevent="store()" class="btn btn-success">Save</x-button>
    </div>
</form>
