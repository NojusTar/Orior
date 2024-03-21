@props([
    "displayText" => "",
    "information" => "",
    "preDisplay" => "",
    "afterDisplay" => "",
    "preInfo" => "",
    "afterInfo" => ""
    ])

<div class="grid grid-cols-2 leading-5 sm:w-10/12">
    <div class="">
        {{ $preDisplay }} {{ $displayText }} {{ $afterDisplay }}
    </div>
    <div class="">
        {{ $preInfo }} {{ $information }} {{ $afterInfo }}
    </div>
</div>