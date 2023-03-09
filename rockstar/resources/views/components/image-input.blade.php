{{--<div class="flex flex-wrap justify-center">--}}
{{--    <img--}}
{{--        src="https://tecdn.b-cdn.net/img/new/standard/city/041.jpg"--}}
{{--        class="max-w-sm rounded border bg-white p-1 dark:border-neutral-700 dark:bg-neutral-800"--}}
{{--        alt="..."/>--}}
{{--</div>--}}
{{--<div class="flex justify-center">--}}
{{--    <div class="mb-3 w-96">--}}
{{--        <label--}}
{{--            for="formFile"--}}
{{--            class="mb-2 inline-block text-neutral-700 dark:text-neutral-200"--}}
{{--        >Default file input example</label--}}
{{--        >--}}
{{--        <input--}}
{{--            class="relative m-0 block w-full min-w-0 flex-auto rounded border border-solid border-neutral-300 dark:border-neutral-600 bg-clip-padding py-[0.32rem] px-3 text-base font-normal text-neutral-700 dark:text-neutral-200 transition duration-300 ease-in-out file:-mx-3 file:-my-[0.32rem] file:overflow-hidden file:rounded-none file:border-0 file:border-solid file:border-inherit file:bg-neutral-100 dark:file:bg-neutral-700 file:px-3 file:py-[0.32rem] file:text-neutral-700 dark:file:text-neutral-100 file:transition file:duration-150 file:ease-in-out file:[margin-inline-end:0.75rem] file:[border-inline-end-width:1px] hover:file:bg-neutral-200 focus:border-primary focus:text-neutral-700 focus:shadow-[0_0_0_1px] focus:shadow-primary focus:outline-none"--}}
{{--            type="file"--}}
{{--            id="formFile"/>--}}
{{--    </div>--}}
{{--</div>--}}
{{--<div class="flex justify-center mt-8">--}}
{{--    <div class="max-w-2xl rounded-lg shadow-xl bg-gray-50">--}}
{{--        <div class="m-4">--}}
{{--            <label class="inline-block mb-2 text-gray-500">File Upload</label>--}}
{{--            <div class="flex items-center justify-center w-full">--}}
{{--                <label--}}
{{--                    class="flex flex-col w-full h-32 border-4 border-blue-200 border-dashed hover:bg-gray-100 hover:border-gray-300">--}}
{{--                    <div class="flex flex-col items-center justify-center pt-7">--}}
{{--                        <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 text-gray-400 group-hover:text-gray-600"--}}
{{--                             fill="none" viewBox="0 0 24 24" stroke="currentColor">--}}
{{--                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"--}}
{{--                                  d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"/>--}}
{{--                        </svg>--}}
{{--                        <p class="pt-1 text-sm tracking-wider text-gray-400 group-hover:text-gray-600">--}}
{{--                            Attach a file</p>--}}
{{--                    </div>--}}
{{--                    <input type="file" class="opacity-0"/>--}}
{{--                </label>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="flex justify-center p-2">--}}
{{--            <button class="w-full px-4 py-2 text-white bg-blue-500 rounded shadow-xl">Update</button>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
{{--<div class="flex justify-center mt-8">--}}
{{--    <div class="rounded-lg shadow-xl bg-gray-50 lg:w-1/2">--}}
{{--        <div class="m-4">--}}
{{--            <label class="inline-block mb-2 text-gray-500">Upload--}}
{{--                Image(jpg,png,svg,jpeg)</label>--}}
{{--            <div class="flex items-center justify-center w-full">--}}
{{--                <label class="flex flex-col w-full h-32 border-4 border-dashed hover:bg-gray-100 hover:border-gray-300">--}}
{{--                    <div class="flex flex-col items-center justify-center pt-7">--}}
{{--                        <svg xmlns="http://www.w3.org/2000/svg"--}}
{{--                             class="w-12 h-12 text-gray-400 group-hover:text-gray-600" viewBox="0 0 20 20"--}}
{{--                             fill="currentColor">--}}
{{--                            <path fill-rule="evenodd"--}}
{{--                                  d="M4 3a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V5a2 2 0 00-2-2H4zm12 12H4l4-8 3 6 2-4 3 6z"--}}
{{--                                  clip-rule="evenodd"/>--}}
{{--                        </svg>--}}
{{--                        <p class="pt-1 text-sm tracking-wider text-gray-400 group-hover:text-gray-600">--}}
{{--                            Select another image</p>--}}
{{--                    </div>--}}
{{--                    <div class="flex flex-wrap justify-center">--}}
{{--                        <img--}}
{{--                            src="https://tecdn.b-cdn.net/img/new/standard/city/041.jpg"--}}
{{--                            class="max-w-sm rounded border bg-white p-1 dark:border-neutral-700 dark:bg-neutral-800"--}}
{{--                            alt="..."/>--}}
{{--                    </div>--}}
{{--                    <p class="pt-1 text-sm tracking-wider text-gray-400 group-hover:text-gray-600">--}}
{{--                        Select another image</p>--}}
{{--                    <input type="file" class="opacity-0"/>--}}
{{--                </label>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="flex p-2 space-x-4">--}}
{{--            <button class="w-full px-4 py-2 text-white bg-red-500 rounded shadow-xl">Update</button>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}

<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.2/dist/alpine.min.js" defer></script>
<div x-data="showImage()" class="flex items-center justify-center h-screen mt-32 mb-32 bg-gray-200">
    <div class="bg-white rounded-lg shadow-xl md:w-9/12 lg:w-1/2">
        <div class="m-4">
            <label class="inline-block mb-2 text-gray-500">Upload
                Image(jpg,png)</label>
            <div class="flex items-center justify-center w-full">
                <label
                    class="flex flex-col w-full h-32 border-4 border-dashed hover:bg-gray-100 hover:border-gray-300">
                    <div class="relative flex flex-col items-center justify-center pt-7">
{{--                        <img id="preview" class="absolute inset-0 w-full h-32">--}}
                        <img id="preview"
                            src="https://tecdn.b-cdn.net/img/new/standard/city/041.jpg"
                            class="max-w-sm rounded border bg-white p-1 dark:border-neutral-700 dark:bg-neutral-800 group-hover:text-gray-600"
                            alt="..."/>
{{--                        <img--}}
{{--                            src="https://tecdn.b-cdn.net/img/new/standard/city/041.jpg"--}}
{{--                            class="max-w-sm rounded border bg-white p-1 dark:border-neutral-700 dark:bg-neutral-800"--}}
{{--                            alt="..."/>--}}
{{--                        <svg xmlns="http://www.w3.org/2000/svg"--}}
{{--                             class="w-12 h-12 text-gray-400 group-hover:text-gray-600" viewBox="0 0 20 20"--}}
{{--                             fill="currentColor">--}}
{{--                            <path fill-rule="evenodd"--}}
{{--                                  d="M4 3a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V5a2 2 0 00-2-2H4zm12 12H4l4-8 3 6 2-4 3 6z"--}}
{{--                                  clip-rule="evenodd"/>--}}
{{--                        </svg>--}}
                        <p class="pt-1 text-sm tracking-wider text-gray-400 group-hover:text-gray-600">
                            Select a photo</p>
                    </div>
                    <input type="file" class="opacity-0" accept="image/*" @change="showPreview(event)"/>
                </label>
            </div>
        </div>
        <div class="flex p-2 space-x-4">
            <button class="w-full px-4 py-2 text-white bg-red-500 rounded shadow-xl">Update</button>
        </div>
    </div>
</div>
<script>
    function showImage() {
        return {
            showPreview(event) {
                if (event.target.files.length > 0) {
                    var src = URL.createObjectURL(event.target.files[0]);
                    var preview = document.getElementById("preview");
                    preview.src = src;
                    preview.style.display = "block";
                }
            }
        }
    }
</script>
