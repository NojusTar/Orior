@props([
    "number" => "",
    "text" => "",
])

<div>
    <h2 class="text-white text-5xl font-extralight">
        {{ $number }}
    </h2>
    <p class="text-white">
        {{ $text }}
    </p>
</div>