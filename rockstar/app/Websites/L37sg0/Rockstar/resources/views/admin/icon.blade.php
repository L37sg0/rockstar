
<x-rockstar::layout>
    <x-slot:header>Icon</x-slot:header>
    <h1>Icon edit Section</h1>
    <form method="post"
          action="{{route('dashboard.icon-section.update')}}"
          enctype="multipart/form-data">
        @csrf
        <x-image-input :image="asset($icon)" :id="'icon'"/>
{{--        <input type="file" name="icon">--}}
{{--        <button type="submit">Update</button>--}}
{{--        @if ($errors->any())--}}
{{--            <div class="alert alert-danger">--}}
{{--                <ul>--}}
{{--                    @foreach ($errors->all() as $error)--}}
{{--                        <li>{{ $error }}</li>--}}
{{--                    @endforeach--}}
{{--                </ul>--}}
{{--            </div>--}}
{{--        @endif--}}
        <x-input-error :messages="$errors->all()" class="mt-2"/>
{{--        <x-input-success :messages="$messages ?? []" class="mt-2"/>--}}
    </form>
</x-rockstar::layout>
