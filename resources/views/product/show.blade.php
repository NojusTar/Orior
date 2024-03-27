<x-layout>
    <div class="flex flex-col items-center">
        {{-- wrapper --}}
        <div class="bg-white border border-gray-500 w-8/12 px-7">
            {{-- product 1st part grid --}}
            <div class="grid grid-cols-2 gap-20 pt-20">
                {{-- left --}}
                <div class="">
                    <h1 class="text-3xl font-bold">
                        Product Name
                    </h1>
                    {{-- product id and info --}}
                    <div class="grid grid-cols-2">
                        <div class="text-sm">
                            Product ID: 123123123
                        </div>
                        <div class="text-sm justify-end flex gap-x-5">
    
                            <div class="">
                                <p class="font-semibold ">
                                    Atnaujinta:
                                </p>
                                <p class="">
                                    👁️ 20145
                                </p>
                            </div>
                            <div class="">
                                <p class="">
                                    2024.04.19
                                </p>
                                <p class="">
                                    👆 134
                                </p>
                            </div>
                            
                        </div>
                    </div>
                    {{-- product id and info end--}}
                    {{-- info and description --}}
                    <div class="grid grid-cols-2 mt-5">
                        <div class="flex justify-between">
                            <div class="">
                                <p class="text-sm">
                                    Kaina
                                </p>
                                <div class="text-lg">
                                    220$
                                </div>
                            </div>
                            <div class="">
                                <p class="text-sm">
                                    Kiekis
                                </p>
                                <div class="text-lg">
                                    20
                                </div>
                            </div>
                            <div class="">
                                <p class="text-sm">
                                    Būklė
                                </p>
                                <div class="text-lg">
                                    Nauja
                                </div>
                            </div>
                        </div>
                        <div class="flex justify-end items-end">
                            ⭐⭐⭐⭐⭐ 1624 reviews
                        </div>
                    </div>
                    <div class="text-sm text-gray-500 py-5">
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing
                         elit. Atque ducimus iure magnam quaerat incidunt
                          provident veritatis suscipit deserunt nulla! Provident
                           sint aut voluptate! Accusamus, ducimus. Laboriosam
                            doloremque doloribus voluptatum sit?
                        </p>
                    </div>
                    {{-- info and description end --}}
    
                    <div class="grid grid-cols-[20%_80%] text-left">
                        <x-product.title-attribute title="Produkto tipas" attribute="Baldinė plokštė" />
                        <x-product.title-attribute title="Gamintojas" attribute="Baldinė plokštė" />
                        <x-product.title-attribute title="Modelis" attribute="Baldinė plokštė" />
                        <x-product.title-attribute title="Gamintojo kodas" attribute="Baldinė plokštė" />
                        <x-product.title-attribute title="Matmenys" attribute="Baldinė plokštė" />
                        <x-product.title-attribute title="Prekės būklė" attribute="Baldinė plokštė" />
                        <x-product.title-attribute title="Prekės vieta" attribute="Baldinė plokštė" />
                        <x-product.title-attribute title="Pristatymo kaina" attribute="Baldinė plokštė" />
                        <x-product.title-attribute title="Pristatymo laikas" attribute="Baldinė plokštė" />
                        <x-product.title-attribute title="Pardavėjas" attribute="Baldinė plokštė" />
                    </div>
    
                    <div class="flex flex-col items-center">
                        <div class="text-2xl font-bold">
                            Reikia šios prekės?
                        </div>
                        <div class="text-gray-500">
                            Nori sužinoti daugiau apie prekę ir pabendrauti su vadybininku?
                        </div>
                        <div class="py-5">
                            <a class="bg-[#088306] px-44 py-3 rounded-lg
                            text-xl text-white font-semibold" href="#">
                                Susisiekti dabar
                            </a>
                        </div>
                        <div class="py-5">
                            <a class="bg-[#186fb2] px-44 py-3 rounded-lg
                            text-xl text-white font-semibold" href="#">
                                Rezervuoti prekę
                            </a>
                        </div>
                    </div>
                </div>
                {{-- left end --}}
                {{-- right --}}
                <div class="grid grid-rows-[80%_20%] gap-3">
                    <div class="bg-red-50 flex justify-center items-center">
                        <img class="bg-yellow-50 object-cover w-full h-full" src="{{ asset("images/image.png") }}" alt="">
                    </div>
                    <div class="flex bg-blue-50 gap-3">
                        <div class="bg-red-50 w-1/5 flex justify-center items-center">
                            <img class="bg-yellow-50 object-cover w-full h-full" src="{{ asset("images/image.png") }}" alt="">
                        </div>
                        <div class="bg-red-50 w-1/5 flex justify-center items-center">
                            <img class="bg-yellow-50 object-cover w-full h-full" src="{{ asset("images/image.png") }}" alt="">
                        </div>
                        <div class="bg-red-50 w-1/5 flex justify-center items-center">
                            <img class="bg-yellow-50 object-cover w-full h-full" src="{{ asset("images/image.png") }}" alt="">
                        </div>
                        <div class="bg-red-50 w-1/5 flex justify-center items-center">
                            <img class="bg-yellow-50 object-cover w-full h-full" src="{{ asset("images/image.png") }}" alt="">
                        </div>
                        <div class="bg-red-50 w-1/5 flex justify-center items-center">
                            <img class="bg-yellow-50 object-cover w-full h-full" src="{{ asset("images/image.png") }}" alt="">
                        </div>
                    </div>
                </div>
                {{-- right end --}}
            </div>
            {{-- product 1st part grid end --}}
    
            {{-- full product description --}}
            <div>
                <h2 class="text-xl font-semibold mt-10 mb-3">
                    Išsamus produkto aprašy mas
                </h2>
                <p class="text-gray-500 leading-5 text-justify">
                    Lorem, ipsum dolor sit amet consectetur
                    adipisicing elit. Quibusdam iure laudantium
                    cumque alias est recusandae ea illum exercitationem.
                    Minima dolor similique ea sapiente, dolorum
                    iste dolore commodi? Accusamus, voluptatum sit?
                    Lorem, ipsum dolor sit amet consectetur
                    adipisicing elit. Quibusdam iure laudantium
                    cumque alias est recusandae ea illum exercitationem.
                    Minima dolor similique ea sapiente, dolorum
                    iste dolore commodi? Accusamus, voluptatum sit?
                    Lorem, ipsum dolor sit amet consectetur
                    adipisicing elit. Quibusdam iure laudantium
                    cumque alias est recusandae ea illum exercitationem.
                    Minima dolor similique ea sapiente, dolorum
                    iste dolore commodi? Accusamus, voluptatum sit?
                    Lorem, ipsum dolor sit amet consectetur
                    adipisicing elit. Quibusdam iure laudantium
                    cumque alias est recusandae ea illum exercitationem.
                    Minima dolor similique ea sapiente, dolorum
                    iste dolore commodi? Accusamus, voluptatum sit?
                </p>
                <div class="flex mt-4 mb-20">
                    <div class="font-semibold pe-2">
                        Žymės:
                    </div>
                    <div class="flex text-gray-500 gap-5">
                        @for ($i = 0; $i < 3; $i++)
                            <p>
                                Žymė
                            </p>
                        @endfor
                    </div>
                </div>
            </div>
            {{-- full product description end --}}
            {{-- reviews --}}
            <div class="grid grid-cols-[40%_60%]">
                {{-- left --}}
                <div class="pe-32">
                    <h2 class="text-xl font-bold">
                        Atsiliepimai apie pardavėją
                    </h2>
                    <div class="py-3">
                        ⭐⭐⭐⭐⭐ Based on 1624 reviews
                    </div>
                    <x-product.progress-bar progress=63 text="5" />
                    <x-product.progress-bar progress=10 text="4" />
                    <x-product.progress-bar progress=6 text="3" />
                    <x-product.progress-bar progress=12 text="2" />
                    <x-product.progress-bar progress=9 text="1" />

                    <div class="flex flex-col items-center">
                        <div class="mt-7">
                            <h2 class="text-lg font-semibold">
                                Share your thoughts
                            </h2>
                            <p class="leading-5 text-gray-500">
                                If you've used this product, share
                                your thoughts with other customers
                            </p>
                        </div>
                        
                        <div class="flex justify-center my-5">
                            <a href="#">
                                <div class="text-nowrap text-base border border-gray-300 px-32 py-2 rounded-md"> 
                                    Write a review
                                </div>
                            </a>
                        </div>
                        
                    </div>
                </div>
                {{-- left end --}}
                {{-- right --}}
                <div class="">
                    <x-product.user-review />
                    <x-product.user-review />
                    <x-product.user-review :devide="false" />
                </div>
                {{-- right end --}}
            </div>
            {{-- reviews end --}}
        </div>
        {{-- wrapper end --}}
    </div>
    
</x-layout>