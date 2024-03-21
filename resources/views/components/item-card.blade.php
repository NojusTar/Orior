@props([
    "category" => "CATEGORY",
    "image" => asset("images/image.png"),
    "title" => "Title",
    "description" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit.",
    "description2" => "Description 2",
    "rating" => "3.3",
])

<div class="p-3 bg-gray-200 relative">
    <div class="ps-3 absolute top-[-10px]">
        <div class="font-bold absolute">{{ $category }}</div>
    </div>
    <div style="background-image: url({{ $image }})" 
    class="h-36 w-56 bg-blue-400 rounded-t-xl bg-cover bg-center">
        
    </div>
    <div class="h-40 w-56 bg-gray-100 p-5 rounded-b-xl">
        <h2 class="font-bold">
            {{ $title }}
        </h2>
        <p class="text-gray-400 text-xs">
            {{ $description }}
        </p>
        <div class="grid grid-cols-2 grid-rows-2 mt-2 gap-1">
            <div class="text-xs text-gray-400">
                {{ $description2 }}
            </div>
            <div class="col-start-1 row-start-2">
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                {{ $rating }}
            </div>
            <div class="row-span-2 col-start-2 row-start-1 flex justify-end items-end cursor-pointer">
                <div class="flex justify-center items-center
                rounded-full border bg-white border-black w-10 h-10">
                    +
                </div>
            </div>
        </div>
        

    </div>
        
</div>