@props([
    "plan" => "Starter",
    "price" => "0",
    "description" => "You're new to investing but want to do it right. Get started for free.",
    "buttonMessage" => "Get started for free",
    "mode" => "light",
])

@if ($mode == "light")
    <div class="flex flex-col bg-white rounded-3xl h-fit p-5 w-96">
        <div class="font-semibold flex items-center gap-x-2 pb-2">
            <i class="fa-solid fa-circle-half-stroke text-lg text-gray-500"></i> 
            {{ $plan }}
        </div>
        <div class="text-2xl">
            ${{ $price }}
        </div>
        <p class="">
            {{ $description }}
        </p>
        <a class="text-white font-semibold bg-black text-center rounded-lg py-1 my-5" href="#">
            {{ $buttonMessage }}
        </a>
        <div class="flex flex-col">
            {{ $slot }}
        </div>
    </div>
@endif

@if ($mode == "dark")
    <div class="flex flex-col bg-black rounded-3xl h-fit p-5 w-96">
        <div class="font-semibold flex items-center gap-x-2 pb-2 text-white">
            <i class="fa-solid fa-circle-half-stroke text-lg text-cyan-500"></i> 
            {{ $plan }}
        </div>
        <div class="text-2xl text-white">
            ${{ $price }}
        </div>
        <p class="text-white">
            {{ $description }}
        </p>
        <a class="text-white font-semibold bg-cyan-500 text-center rounded-lg py-1 my-5" href="#">
            {{ $buttonMessage }}
        </a>
        <div class="flex flex-col">
            {{ $slot }}
        </div>
    </div>
@endif

