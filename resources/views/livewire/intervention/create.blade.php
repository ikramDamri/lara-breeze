<form class="row">
    <div class="form-group col-md-6">
        <x-label for="exampleFormControlInput1">Int Debut</x-label>
        <x-input type="date" class="w-100" id="exampleFormControlInput1" placeholder="Enter Title"
            wire:model="Int_Debut"></x-input>
        @error('Int_Debut')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
    <div class="form-group col-md-6">
        <x-label for="tarif">Employe Tarif</x-label>
        <select name="tarif" id="tarif" style="width: 100%;" wire:model="Int_Par_Id"
            class="block rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
            required>
            <option value=""> </option>
            @foreach ($emp as $value)
                <option value={{ $value->Emp_Nss }}>{{ $value->Emp_Nss }}</option>
            @endforeach
        </select>
        @error('Int_Par_Id')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
    {{-- <div class="form-group col-md-6">
        <x-label for="exampleFormControlInput1">Int emp nss</x-label>
        <x-input type="text" class="w-100" id="exampleFormControlInput1" placeholder="Enter Title"
            wire:model="Int_Par_Id"></x-input>
        @error('Int_Par_Id')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div> --}}
    {{-- <div class="form-group col-md-6">
        <x-label for="exampleFormControlInput2">Int par id</x-label>
        <x-input type="text" class="w-100" id="exampleFormControlInput2" wire:model="Int_Par_Id"></x-input>
        @error('Int_Par_Id')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div> --}}
    <div class="form-group col-md-6">
        <x-label for="tarif">Int_Par_Id</x-label>
        <select name="tarif" id="tarif" style="width: 100%;" wire:model="Int_Par_Id"
            class="block rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
            required>
            <option value=""> </option>
            @foreach ($parc as $value)
                <option value={{ $value->id }}>{{ $value->id }}</option>
            @endforeach
        </select>
        @error('Int_Par_Id')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
    <div class="form-group col-md-6">
        <x-label for="exampleFormControlInput3">Int_Nb_Jours</x-label>
        <x-input type="text" class="w-100" id="exampleFormControlInput3" wire:model="Int_Nb_Jours"></x-input>
        @error('Int_Nb_Jours')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
    <div class="col-md-12">
        <x-button wire:click.prevent="store()" class="btn btn-success">Save</x-button>
    </div>
</form>
