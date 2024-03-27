@props([
    "title" => "Title",
    "attribute" => "Attribute"
])

<div class="font-semibold">
    {{ $title }}
</div>
<div class="text-gray-500">
    {{ $attribute }}
</div>