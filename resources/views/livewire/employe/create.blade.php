<form class="row">
    <div class="form-group col-md-6">
        <x-label for="exampleFormControlInput1">Employe nss</x-label>
        <x-input type="text" class="w-100" class="block mt-1 w-full" id="exampleFormControlInput1"
            placeholder="Enter name" wire:model="Emp_Nss"></x-input>
        @error('Emp_Nss')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
    <div class="form-group col-md-6">
        <x-label for="exampleFormControlInput1">Employe nom</x-label>
        <x-input type="text" class="w-100" id="exampleFormControlInput1" placeholder="Enter name"
            wire:model="Emp_Nom"></x-input>
        @error('Emp_Nom')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
    <div class="form-group col-md-6">
        <x-label for="exampleFormControlInput2">Employe prenom </x-label>
        <x-input type="text" class="w-100" id="exampleFormControlInput2" wire:model="Emp_Prn"></x-input>
        @error('Emp_Prn')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
    <div class="form-group col-md-6">
        <x-label for="tarif">Employe Tarif</x-label>
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

        <x-input type="text" class="w-100" id="exampleFormControlInput3" wire:model="Emp_Tarif"></x-input>
        @error('Emp_Tarif')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div> --}}
    
    <div class="col-md-12">
        <x-button wire:click.prevent="store()" class="btn btn-success">Save</x-button>
    </div>
</form>
