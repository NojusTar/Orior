@props([
    "displayText" => "",
    "preDisplay" => "",
    "afterDisplay" => "",
    "name" => "",
    "value" => "",
    "type" => "text",
    ])

<div class="grid grid-cols-2">
    <div class="">
        {{ $preDisplay }} {{ $displayText }} {{ $afterDisplay }}
    </div>
    <div class="">
        <input class="border border-black"
        type="{{ $type }}" name="{{ $name }}" value="{{ $value }}">
    </div>
</div>