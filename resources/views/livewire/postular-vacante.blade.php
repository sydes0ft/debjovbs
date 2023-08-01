<div class="bg-gray-100 p-5 mt-10 flex flex-col justify-center items-center">
    <h3 class="text-center text-2xl font-bold my-4"> Postularme a esta Vacante</h3>

    @if(session()->has('mensaje'))
        <p class="uppercase border border-green-600 bg-green-100 text-green-600 font-bold p-2 my-5 text-sm rounded-lg">
            {{ session('mensaje') }}
        </p>
    @else
        <form wire:submit.prevent='postularme' class="w-96 mt-5">
            <div class="mb-4">
                <x-input-label for="cv" wire:model="cv" :value="__('Curriculium PDF')" />
                <input id="cv" type="file" wire:model="cv" accept=".pdf" class="block mt-1 w-full">
            </div>

            @error('cv')
                <x-input-error :messages="$errors->get('cv')" class="mt-2" />  
            @enderror

            <x-primary-button class="my-5">
                {{__('Postularme')}}
            </x-primary-button>
        </form>
    @endif

</div>
