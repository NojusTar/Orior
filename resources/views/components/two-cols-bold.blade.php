@props([
    "displayText" => "",
    "information" => "",
    "preDisplay" => "",
    "afterDisplay" => "",
    "preInfo" => "",
    "afterInfo" => ""
    ])

<div class="grid grid-cols-2">
    <div class="font-bold">
        {{ $preDisplay }} {{ $displayText }} {{ $afterDisplay }}
    </div>
    <div class="font-bold">
        {{ $preInfo }} {{ $information }} {{ $afterInfo }}
    </div>
</div>