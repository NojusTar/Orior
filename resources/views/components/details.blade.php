@props([
    "header" => "Header",
    "description" => "Description"
])

<details class="py-2">
    <summary class="font-semibold list-none flex justify-between items-center">
        <p>
            {{ $header }}
        </p>
        <i class="fa-solid fa-plus"></i>
    </summary>
    <p>
        {{ $description }} Lorem, ipsum dolor sit amet consectetur adipisicing elit. Repudiandae officiis
    </p>
</details>