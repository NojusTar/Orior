@props([
    "progress" => 50,
    "text" => "5",

])

<div class="grid grid-cols-[5%_90%_5%]">
    <div class="flex gap-1">
        <div>{{ $text }}</div>
        <div>⭐</div>
    </div>

    <div class="flex items-center justify-center ps-3 pe-5">
        <div class="rounded-xl w-full h-[40%] bg-gray-200 border border-gray-300">
            <div class="rounded-xl h-full bg-yellow-400"
            style="width: {{ $progress }}%">
        
            </div>
        </div>
    </div>
    <div class="flex justify-end items-center">
        {{ $progress }}%
    </div>
</div>
