<form class="row">
    <div class="form-group col-md-6">
        <input type="hidden" wire:model="Emp_Nss">
        <x-label for="exampleFormControlInput1">Employe nom</x-label>
        <x-input type="Emp_Nom" class="w-100" wire:model="Emp_Nom" id="exampleFormControlInput1"></x-input>
        @error('Emp_Nom')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
    <div class="form-group col-md-6">
        <x-label for="exampleFormControlInput2">Employe prenom</x-label>
        <x-input type="text" class="w-100" wire:model="Emp_Prn" id="exampleFormControlInput2"></x-input>
        @error('Emp_Prn')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
    <div class="form-group col-md-6">
        <x-label for="tarif" class="block mt-3 mb-1 font-medium text-sm text-gray-700">Employe Tarif</x-label>
        <select name="tarif" id="tarif" style="width: 100%;" wire:model="Emp_Tarif"
            class="block rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
            required>
            <option value=""> </option>
            @foreach ($tarif as $value)
                <option value={{ $value->Tar_Description }}>{{ $value->Tar_Description }}</option>
            @endforeach

        </select>
        @error('Emp_Tarif')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
    {{-- <div class="form-group col-md-6">
        <x-label for="exampleFormControlInput3">Employe Tarif</x-label>
        <x-input type="text" class="w-100" wire:model="Emp_Tarif" id="exampleFormControlInput3"></x-input>
        @error('Emp_Tarif')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div> --}}

    <div class="col-md-12">
        <x-button wire:click.prevent="update()" class="btn btn-dark">Update</x-button>
        <x-button wire:click.prevent="cancel()" class="btn btn-danger">Cancel</x-button>
    </div>
</form>
