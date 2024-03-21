@props([
    "image" => asset("images/test.png"),
    "title" => "Title",
    "description" => "description",
])

<div class="flex flex-col items-center">
    <div class="w-20 flex items-center justify-center px-7 py-5">
        <img class="" src="{{ $image }}" alt="">
    </div>
    <h2 class="font-bold text-lg leading-3">
        {{ $title }}
    </h2>
    <p class="text-gray-500 pb-5 leading-6">
        {{ $description }}
    </p>
</div>