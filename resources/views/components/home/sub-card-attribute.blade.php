@props([
    "attribute" => "Attribute",
    "mode" => "light",
])

@if ($mode == "light")
    <div class="flex items-center gap-x-5 py-1">
        <i class="fa-regular fa-circle-check text-lg text-cyan-500"></i>
        <p class="text-base text-gray-600">
            {{ $attribute }}
        </p>
    </div>
@endif

@if ($mode == "dark")
    <div class="flex items-center gap-x-5 py-1">
        <i class="fa-regular fa-circle-check text-lg text-gray-300"></i>
        <p class="text-base text-gray-300">
            {{ $attribute }}
        </p>
    </div>
@endif

