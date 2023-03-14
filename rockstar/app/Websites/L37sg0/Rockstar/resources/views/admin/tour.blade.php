@php use L37sg0\Rockstar\Models\TourDate; @endphp
<x-rockstar::layout>
    <x-slot:header>Tour</x-slot:header>
    <h1>Tour edit Section</h1>
    @php
    /** @var TourDate $tourDate */
    @endphp
    @foreach($tourDates as $tourDate)
        <div class="flex flex-row ml-3">
            <div class="basis-1/4">
                <x-input-label for="date" :value="__('Date')"/>
                <x-text-input id="date" class="block mt-1 w-full" type="date" name="date" :value="$tourDate->getAttribute(TourDate::FIELD_DATE)" required
                              autofocus autocomplete="date"/>
                <x-input-error :messages="$errors->get('date')" class="mt-2"/>
            </div>
            <div class="basis-3/4">
                <x-input-label for="place" :value="__('Place')"/>
                <x-text-input id="place" class="block mt-1 w-full" type="text" name="place" :value="$tourDate->getAttribute(TourDate::FIELD_PLACE)"
                              required
                              autofocus autocomplete="place"/>
                <x-input-error :messages="$errors->get('place')" class="mt-2"/>
            </div>
            <div class="basis-1/4">
                <x-input-label for="actions" :value="__('Actions')"/>
                <div id="actions">
                    <x-primary-button>Save</x-primary-button>
                    <x-danger-button>Delete</x-danger-button>
                </div>
            </div>
        </div>
    @endforeach
{{--    <div class="flex flex-row ml-3">--}}
{{--        <div class="basis-1/4">--}}
{{--            <x-input-label for="date" :value="__('Date')"/>--}}
{{--            <x-text-input id="date" class="block mt-1 w-full" type="date" name="date" :value="old('date')" required--}}
{{--                          autofocus autocomplete="date"/>--}}
{{--            <x-input-error :messages="$errors->get('date')" class="mt-2"/>--}}
{{--        </div>--}}
{{--        <div class="basis-3/4">--}}
{{--            <x-input-label for="place" :value="__('Place')"/>--}}
{{--            <x-text-input id="place" class="block mt-1 w-full" type="text" name="place" :value="old('place')" required--}}
{{--                          autofocus autocomplete="place"/>--}}
{{--            <x-input-error :messages="$errors->get('place')" class="mt-2"/>--}}
{{--        </div>--}}
{{--        <div class="basis-1/4">--}}
{{--            <x-input-label for="actions" :value="__('Actions')"/>--}}
{{--            <div id="actions">--}}
{{--                <x-primary-button>Save</x-primary-button>--}}
{{--                <x-danger-button>Delete</x-danger-button>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    <div class="flex flex-row ml-3">--}}
{{--        <div class="basis-1/4">--}}
{{--            <x-input-label for="date" :value="__('Date')"/>--}}
{{--            <x-text-input id="date" class="block mt-1 w-full" type="date" name="date" :value="old('date')" required--}}
{{--                          autofocus autocomplete="date"/>--}}
{{--            <x-input-error :messages="$errors->get('date')" class="mt-2"/>--}}
{{--        </div>--}}
{{--        <div class="basis-3/4">--}}
{{--            <x-input-label for="place" :value="__('Place')"/>--}}
{{--            <x-text-input id="place" class="block mt-1 w-full" type="text" name="place" :value="old('place')" required--}}
{{--                          autofocus autocomplete="place"/>--}}
{{--            <x-input-error :messages="$errors->get('place')" class="mt-2"/>--}}
{{--        </div>--}}
{{--        <div class="basis-1/4">--}}
{{--            <x-input-label for="actions" :value="__('Actions')"/>--}}
{{--            <div id="actions">--}}
{{--                <x-primary-button>Save</x-primary-button>--}}
{{--                <x-danger-button>Delete</x-danger-button>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    <div class="flex flex-row ml-3">--}}
{{--        <div class="basis-1/4">--}}
{{--            <x-input-label for="date" :value="__('Date')"/>--}}
{{--            <x-text-input id="date" class="block mt-1 w-full" type="date" name="date" :value="old('date')" required--}}
{{--                          autofocus autocomplete="date"/>--}}
{{--            <x-input-error :messages="$errors->get('date')" class="mt-2"/>--}}
{{--        </div>--}}
{{--        <div class="basis-3/4">--}}
{{--            <x-input-label for="place" :value="__('Place')"/>--}}
{{--            <x-text-input id="place" class="block mt-1 w-full" type="text" name="place" :value="old('place')" required--}}
{{--                          autofocus autocomplete="place"/>--}}
{{--            <x-input-error :messages="$errors->get('place')" class="mt-2"/>--}}
{{--        </div>--}}
{{--        <div class="basis-1/4">--}}
{{--            <x-input-label for="actions" :value="__('Actions')"/>--}}
{{--            <div id="actions">--}}
{{--                <x-primary-button>Save</x-primary-button>--}}
{{--                <x-danger-button>Delete</x-danger-button>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
</x-rockstar::layout>
