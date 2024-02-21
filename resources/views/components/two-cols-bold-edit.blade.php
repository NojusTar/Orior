@props([
    "displayText" => "",
    "preDisplay" => "",
    "afterDisplay" => "",
    "name" => "",
    "value" => "",
    "type" => "text",
    ])

<div class="grid grid-cols-2">
    <div class="font-bold">
        {{ $preDisplay }} {{ $displayText }} {{ $afterDisplay }}
    </div>
    <div class="font-bold">
        <input class="border border-black"
        type="{{ $type }}" name="{{ $name }}" value="{{ $value }}">
    </div>
</div>