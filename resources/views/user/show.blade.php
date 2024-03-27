<x-layout>
    <div class="px-10">
        <div class="flex gap-1">
            <img class="w-3" src="{{ asset("images/PerfectParts/left-arrow.svg") }}" alt="">
            Atgal
        </div>
        <div class="rounded-md p-10 bg-gray-200">
            <div>
                Pardavėjo Profilis
            </div>
            {{-- profile --}}
            <div class="mt-5 mb-8">
                <div class="flex flex-col w-fit justify-center items-center">
                    <div class="h-16 w-16 rounded-full overflow-hidden">
                        <img class="w-full h-full object-cover" src="{{ asset("images/image.png") }}" alt="">
                    </div>
                    <div>
                        Privatus Asmuo
                    </div>
                    <div class="flex gap-1">
                        <div class="font-semibold">
                            Užsiregistravo: 
                        </div>
                        <div>
                            2024-02-19 11:09:30
                        </div>
                    </div>
                    <div class="flex gap-1">
                        <div class="font-semibold">
                            Miestas: 
                        </div>
                        <div>
                            kaunas
                        </div>
                    </div>
                    <div class="flex gap-1">
                        <div class="font-semibold">
                            Tel. Numeris: 
                        </div>
                        <div>
                            863828900
                        </div>
                    </div>
                    <div class="flex gap-1">
                        <div class="font-semibold">
                            Įkeltų Skelbimų: 
                        </div>
                        <div>
                            6
                        </div>
                    </div>
                </div>
            </div>
            
            {{-- profile end --}}
            <div class="w-full h-[2px] bg-gray-300"></div> {{-- devider --}}
            {{-- seller postings --}}
            <div class="">
                <div class="my-5 text-center text-lg font-bold">
                    Pardvėjo skelbimai
                </div>
                <div class="grid grid-cols-3 grid-rows-2 gap-5">
                    <x-user.post-item name="Stalas" :price="5" :image='asset("images/logo.png")'/>
                    <x-user.post-item/>
                    <x-user.post-item/>
                    <x-user.post-item/>
                    <x-user.post-item/>
                    <x-user.post-item/>
                </div>
            </div>
            {{-- seller postings end --}}
        </div>
        <div class="grid grid-cols-6 pt-32 pb-20">

            <div class="col-span-2 flex flex-col gap-1">
                <img class="w-32" src="{{ asset("images/PerfectParts/perfect-parts-logo.svg") }}" alt="">
                <p class="leading-5 text-gray-500">
                    "Perfect Parts" yra geriausia
                    skelbimų svetainė, kurioje paduodamos
                    nereikalingos likusios medžiagos ir kiti daiktai
                </p>
            </div>
            <div class="flex flex-col gap-3">
                <div class="text-gray-500">
                    RESURSAI
                </div>
                <a href="#">
                    Dokumentacija
                </a>
                <a href="#">
                    Svetainės struktūra
                </a>
                <a href="#">
                    B pavizdys
                </a>
                <a href="#">
                    C pavizdys
                </a>
                <a href="#">
                    D pavizdys
                </a>
            </div>
            <div class="flex flex-col gap-3">
                <div class="text-gray-500">
                    PAGALBA & KLIENTU APTARNAVIMAS
                </div>
                <a href="#">
                    Kontaktai
                </a>
                <a href="#">
                    Pagalbos centras
                </a>
                <a href="#">
                    Dirbkite su mumis
                </a>
            </div>
            <div class="flex flex-col gap-3">
                <div class="text-gray-500">
                    SEKITE MUS
                </div>
                <a href="#">
                    Discord
                </a>
                <a href="#">
                    Github
                </a>
                <a href="#">
                    Twitter
                </a>
            </div>
            <div class="flex flex-col gap-3">
                <div class="text-gray-500">
                    TEISĖS
                </div>
                <a href="#">
                    Privatumo politika
                </a>
                <a href="#">
                    Nuostatos ir sąlygos
                </a>
                <a href="#">
                    Prekės ženklo gairės
                </a>
            </div>
        </div>
        <div class="w-full h-[2px] bg-gray-300"></div>
        <div class="text-center py-20">
            ©️ 2019-2023 Dimax.lt™️ is a registered trademark. All Rights Reserved.
        </div>
    </div>
</x-layout>