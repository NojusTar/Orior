@props([
    "header" => "",
    "name" => "",
    "description" => "",
])


<div class="font-bold mb-1"> {{ $header }} </div>
                        
<textarea class="border border-black w-full px-1" 
name="{{ $name }}">{{ $description }}</textarea>

