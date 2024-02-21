<x-layout>

    <div class="flex items-center justify-center">
    </div>

    <div class="text-center">
        <div class="text-5xl font-bold py-10 text-center">
            Companies
        </div>
    </div>

    <div class="flex flex-col justify-center items-center ">
        @foreach ($companies as $company)
            <div class="bg-gray-300 grid grid-cols-3 grid-rows-3
                gap-1 my-1 w-1/2 h-64 rounded border-solid
                border-black border">
                <div class="row-span-1 p-4 w-full h-full m-1 rounded border-solid border-black border
                xl:row-span-3">

                    <img class="h-full" src="{{ $company->logo ? asset("storage/" . $company->logo) : asset("images/test.png") }}" alt="">

                </div>
                <a class="m-1 col-span-2 row-span-1 rounded border-solid border-black border" 
                    href="/company/{{ $company->id }}">
                <div class=" flex h-full items-center justify-center text-xl">
                        <h2>{{ $company->name }}</h2>
                    </div>
                </a>
                <div class="m-1 col-start-1 col-span-4 row-span-2 rounded border-solid
                    border-black border xl:col-span-2 p-1 overflow-hidden"> 
                        <p>
                            {{ $company->description }}
                        </p>
                </div>
            </div>
        @endforeach
    </div>
    
</x-layout>

<div class="mt-6 p4">
    {{ $companies->links() }}
</div>