<x-rockstar::layout>
    <x-slot:header>Home</x-slot:header>
    <h1>Home edit Section</h1>
    @foreach($homeImages as $imageUrl)
        <x-image-input :image="asset($imageUrl)"/>
    @endforeach
{{--    <x-image-input/>--}}
{{--    <x-image-input/>--}}
{{--    <x-image-input/>--}}
</x-rockstar::layout>
