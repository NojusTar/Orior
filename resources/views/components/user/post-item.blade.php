@props([
    "image" => asset("images/image.png"),
    "name" => "Product name",
    "price" => 5.12,

])

<div class="border border-gray-300 p-5 rounded-md">
    <div class="flex flex-col items-center">
        <div class="w-5/12 aspect-[1.3/1] bg-blue-50">
            <img class="object-cover w-full h-full" src="{{  $image  }}" alt="">
        </div>
        <div class="leading-5 w-full">
            {{ $name }}
        </div>
        <div class="leading-5 w-full">
            {{ number_format((float)$price, 2, ".", "") }}$
        </div>
    </div>
</div>