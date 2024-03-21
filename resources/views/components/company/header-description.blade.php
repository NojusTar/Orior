@props([
    "header" => "",
    "description" => "",
    "afterHeader" => "",
    "descriptionStyle" =>""
])

<h3 {{ $attributes->merge(["class" => "font-bold mb-1"]) }}> {{ $header }} {{ $afterHeader }} </h3>

{{ $slot }}

<p class=" leading-4 pb-3 {{ $descriptionStyle }}"> {{ $description }} </p>

