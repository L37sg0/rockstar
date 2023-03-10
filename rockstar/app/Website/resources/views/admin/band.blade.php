<x-rockstar::layout>
    <x-slot:header>Band</x-slot:header>
    <h1>Band edit Section</h1>

    <div class="flex flex-row ml-3">
        <div class="basis-1/3">
            <x-image-input/>
            <x-input-label for="name" :value="__('Member Name')"/>
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required
                          autofocus autocomplete="name"/>
            <x-input-error :messages="$errors->get('name')" class="mt-2"/>
            <x-input-label for="shortDesc" :value="__('Short Description')"/>
            <x-text-input id="shortDesc" class="block mt-1 w-full" type="text" name="shortDesc"
                          :value="old('shortDesc')" required
                          autofocus autocomplete="shortDesc"/>
            <x-input-error :messages="$errors->get('shortDesc')" class="mt-2"/>
        </div>
        <div class="basis-1/3">
            <x-image-input/>
            <x-input-label for="name" :value="__('Member Name')"/>
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required
                          autofocus autocomplete="name"/>
            <x-input-error :messages="$errors->get('name')" class="mt-2"/>
            <x-input-label for="shortDesc" :value="__('Short Description')"/>
            <x-text-input id="shortDesc" class="block mt-1 w-full" type="text" name="shortDesc"
                          :value="old('shortDesc')" required
                          autofocus autocomplete="shortDesc"/>
            <x-input-error :messages="$errors->get('shortDesc')" class="mt-2"/>
        </div>
        <div class="basis-1/3">
            <x-image-input/>
            <x-input-label for="name" :value="__('Member Name')"/>
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required
                          autofocus autocomplete="name"/>
            <x-input-error :messages="$errors->get('name')" class="mt-2"/>
            <x-input-label for="shortDesc" :value="__('Short Description')"/>
            <x-text-input id="shortDesc" class="block mt-1 w-full" type="text" name="shortDesc"
                          :value="old('shortDesc')" required
                          autofocus autocomplete="shortDesc"/>
            <x-input-error :messages="$errors->get('shortDesc')" class="mt-2"/>
        </div>
    </div>
</x-rockstar::layout>
