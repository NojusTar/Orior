@props([
    "displayText" => "",
    "information" => "",
    "preDisplay" => "",
    "afterDisplay" => "",
    "preInfo" => "",
    "afterInfo" => ""
    ])

<div class="grid grid-cols-2 sm:w-10/12 sm:justify-center sm:items-center">
    <div class="font-bold">
        {{ $preDisplay }} {{ $displayText }} {{ $afterDisplay }}
    </div>
    <div class="font-bold">
        {{ $preInfo }} {{ $information }} {{ $afterInfo }}
    </div>
</div>