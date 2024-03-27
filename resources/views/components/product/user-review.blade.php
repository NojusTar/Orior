@props([
    "username" => "User name",
    "rating" => 5,
    "review" => "Lorem ipsum dolor sit amet consectetur
        adipisicing elit. Accusamus aperiam
        dignissimos recusandae dolorum laborum?
        Cupiditate facilis impedit doloribus
        exercitationem neque sint, magnam
        inventore eveniet et, odit iste
        minima. Provident, quos!",
    "profilePic" => asset("images/test.png"),
    "devide" => true,
])

<div class="flex flex-col p-3">
    <div class="flex">
        <div class="w-1/12 pe-3 pb-3 rounded-full items-center justify-center">
            <img class="rounded-full" src="{{ $profilePic }}" alt="">
        </div>
        <div class="flex flex-col">
            <div class="font-semibold">
                {{ $username }}
            </div>
            <div class="text-xs tracking-[-0.25em]">
                @for ($i = 0; $i < $rating; $i++)
                    ⭐
                @endfor
            </div>
        </div>
    </div>
    
    <p class="text-gray-500 leading-5 mb-8">
        {{ $review }}
    </p>
    @if ($devide)
        <hr>
    @endif
    

</div>