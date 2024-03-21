<x-layout>

    {{-- search & left numbers --}}
    <div class="flex flex-col items-center justify-center pt-60">

        <div class="w-3/12 flex flex-col justify-center gap-3 items-center">

        <h2 class="text-white text-2xl font-light">
            LENGVAI IR GREITAI
        </h2>

        <h1 class="text-white text-4xl font-light">
            ATRASK REIKIAMAS DALIS
        </h1>

        <input class="ps-5 py-1 w-full mt-5"
         type="text" name="detales" placeholder="Ieškoti detalių">

        <p class="text-white w-full">
            Ieškok, atrask ir sutaupyk
        </p>

        </div>

    </div>

    <div class="p-20">
        <x-home.number-text-col number="372+" text="TIEKĖJAI" />
        <x-home.number-text-col number="47+" text="GAMINTOJAI" />
        <x-home.number-text-col number="541+" text="BALDINĖS PLOKŠTĖS" />
        <x-home.number-text-col number="1054+" text="PREKĖS, GAMINIAI" />
    </div>
    {{-- search & left numbers end --}} 

    {{-- popular categories --}}
    <div class="flex justify-center">
        <div class="bg-white px-40 pb-20">
            <div class="flex flex-col items-center justify-center">
                <h2 class="text-3xl font-bold mb-10 mt-10">
                    Populiariausios kategorijos
                </h2>
                <div class=" grid grid-rows-1 grid-cols-5">
                    @for ($i = 0; $i < 5; $i++)
                    <div>
                        <x-home.item-card />
                    </div>
                    @endfor
                </div>
            </div>
        </div>
    </div>
    
    {{-- popular categories end --}}
    
    {{-- making or selling --}}
    <div class="flex flex-col items-center gap-3 mt-20">
        <h2 class="text-center text-3xl font-bold mb-14">
            Gamini ir / ar parduodi komponentus ar gaminius?
        </h2>
        <div class="flex gap-4 justify-center items-end">
            <div class="w-80">
                <img src="{{ asset("images/PerfectParts/perfect-parts-logo.svg") }}" alt="">
                
            </div>
        </div>
        <div>
            <p class="text-[1.75rem] font-light">Padeda atrasti daug daugiau</p>
        </div>
    </div>
    {{-- making or selling end --}}

    {{-- how does it work --}}
    <div class="flex flex-col items-center gap-3 mt-20">
        <h2 class="text-center text-3xl font-bold mb-10">
            Kaip veikia Perfect parts?
        </h2>

        <div class="flex">
            {{-- 1 --}}
            <div>
                <div class="flex flex-col items-center gap-3 p-5 border border-black w-40 h-80">
                     <img class="w-14" src="{{ asset("images/PerfectParts/building.svg") }}" alt="">
                     <img class="w-14" src="{{ asset("images/PerfectParts/building.svg") }}" alt="">
                     <img class="w-14" src="{{ asset("images/PerfectParts/building.svg") }}" alt="">
                     <div class="w-full leading-none mt-3">EVERY</div>
                     <div class="w-full leading-none">BUSINESS</div>
                     <div class="w-full leading-none">CREATING GOODS</div>
                 </div>

                 <div class="w-full text-nowrap flex items-center justify-center">
                    <h2 class="w-1 flex items-center justify-center text-center
                     text-[#003888] text-3xl font-bold mt-4">
                        TO SELL MORE
                    </h2>
                </div>
            </div>
            {{-- 1 end--}}

             <div class="flex flex-col items-center justify-center px-10 pb-20">
                <div class="flex gap-5 ">
                    <img class="w-14" src="{{ asset("images/PerfectParts/export.svg") }}" alt="">
                    <img class="w-14" src="{{ asset("images/PerfectParts/right-arrow.svg") }}" alt="">
                </div>

                <div>
                    EXPORT / ADD DATA
                </div>
             </div>
             <div class="w-[20.25rem] h-[20.25rem] -mx-32 -ms-44 flex items-center justify-center"> 
                 <img class="w-9/12 -rotate-90" src="{{ asset("images/PerfectParts/perfect-parts-logo.svg") }}" alt="">
             </div>
             {{-- 2 --}}
             <div>
                 <div class="flex flex-col items-center gap-3 p-5 border border-black w-40 h-80">
                    <img class="w-2/3" src="{{ asset("images/PerfectParts/logo.svg") }}" alt="">
                    <img class="w-2/3" src="{{ asset("images/PerfectParts/data-flow-cross.svg") }}" alt="">
                    <div class="w-full leading-6 font-bold text-[#009eff] text-center">
                        HELPS <br> PROCESS
                    </div>
                    <div class="flex justify-around w-full">
                        <img class="w-5" src="{{ asset("images/PerfectParts/building.svg") }}" alt="">
                        <img class="w-5" src="{{ asset("images/PerfectParts/building.svg") }}" alt="">
                    </div>
                </div>

                <div class="w-full text-nowrap flex items-center justify-center">
                    <h2 class="w-1 flex items-center justify-center text-center
                     text-[#003888] text-3xl font-bold mt-4">
                        SETUP & <br>
                        PREPARE DATA
                    </h2>
                </div>
             </div>
             {{-- 2 end--}}

            <div class="flex flex-col items-center justify-center px-10 pb-20">
                <div class="flex gap-5">
                    <img class="w-14" src="{{ asset("images/PerfectParts/share.svg") }}" alt="">
                    <img class="w-14" src="{{ asset("images/PerfectParts/right-arrow.svg") }}" alt="">
                </div>

                <div>
                    EASILY SHARE
                </div>
             </div>
             {{-- 3 --}}
             <div>
                <div class="flex flex-col items-center justify-center gap-3 p-5 border border-black w-40 h-80">
                    <div class="flex">
                        <img class="w-14 h-14" src="{{ asset("images/PerfectParts/store.svg") }}" alt="">
                        <img class="w-9 absolute translate-x-8 translate-y-7"
                         src="{{ asset("images/PerfectParts/shop-color.svg") }}" alt="">
                    </div>
                    
                    <div class="flex">
                        <img class="w-14 h-14" src="{{ asset("images/PerfectParts/store.svg") }}" alt="">
                        <img class="w-9 absolute -translate-x-4 translate-y-7"
                         src="{{ asset("images/PerfectParts/shop-color.svg") }}" alt="">
                    </div>

                    <div class="flex">
                        <img class="w-14 h-14" src="{{ asset("images/PerfectParts/store.svg") }}" alt="">
                        <img class="w-9 absolute translate-x-8 translate-y-7"
                         src="{{ asset("images/PerfectParts/shop-color.svg") }}" alt="">
                    </div>
                </div>
                <div class="w-full text-nowrap flex items-center justify-center">
                    <h2 class="w-1 flex items-center justify-center text-center
                     text-[#003888] text-3xl font-bold mt-4">
                        & EASILY SHARE <br>
                        WITH OTHERS
                    </h2>
                </div>
                {{-- 3 end--}}
             </div>
             
            
        </div>
        
    </div>
    {{-- how does it work end --}}

    {{-- uses for you buisness --}}
    <div class="flex flex-col items-center gap-3 mt-20">
        <h2 class="text-center text-3xl font-bold mb-14">
            Perfect parts nauda tavo verslui
        </h2>
        <div class="grid gap-x-5 grid-cols-4 grid-rows-2">
            <x-home.uses-comp title="Kurk/Importuok" description="naujus produktus" 
            :image="asset('images/PerfectParts/add_new_product.svg')" />

            <x-home.uses-comp title="Redaguok" description="esamus produktus" 
            :image="asset('images/PerfectParts/edit-2.svg')" />

            <x-home.uses-comp title="Publikuok" description="esamus produktus" 
            :image="asset('images/PerfectParts/paper-plane.svg')"  />

            <x-home.uses-comp title="Dalinkis" description="savo produktais" 
            :image="asset('images/PerfectParts/share.svg')"  />

            <x-home.uses-comp title="Eksportuok" description="naujus produktus" 
            :image="asset('images/PerfectParts/download.svg')"  />

            <x-home.uses-comp title="Ieškok" description="naujus produktus" 
            :image="asset('images/PerfectParts/search.svg')"  />

            <x-home.uses-comp title="Atrask partnerius" description="naujus produktus" 
            :image="asset('images/PerfectParts/add-user.svg')"  />

            <x-home.uses-comp title="Parduok daugiau" description="naujus produktus" 
            :image="asset('images/PerfectParts/add_new_product.svg')"  />
        </div>
    </div>
    {{-- uses for you buisness end --}}

    {{-- work more efective --}}
    <div class="flex flex-col items-center gap-3 mt-20">
        <h2 class="text-center text-3xl font-bold">
            Norisi darbuotis efektyviau?
        </h2>
        <p class="text-lg">
            PerfectParts visada pasiruošę padėti!
        </p>
        <a class="bg-[#009eff] text-white px-24 py-3 mt-4" href="#">
            Pradėk savo kelionę jau dabar
        </a>
    </div>
    {{-- work more efective end --}}

    {{-- partners --}}
    <h2 class="mt-20 text-3xl font-bold text-center">
        Mūsų sprendimais pasitiki ir naudoja 
    </h2>

    <div class="flex justify-center pt-10 pb-20">
        <div class="w-8/12">
            <div class="grid grid-cols-6 grid-rows-2">
                @for ($i = 0; $i < 12; $i++)
                <div class="">
                    <img src="{{ asset("images/company.png") }}" alt="">
                </div>
                @endfor
            </div>
        </div>
    </div>
    {{-- partners end --}}

    {{-- get started --}}

    <div id="getStarted" class="bg-blue-400 text-center py-40">
        <h2 class="text-white text-4xl font-semibold mb-7">
            Get started today
        </h2>
        <p class="text-white text-lg mb-14">
            It's time to take control of your books. Buy our software so you <br>
            can feel like you're doing something productive
        </p>
        <a class="bg-white mt-32 py-3 px-3 rounded-full font-semibold" href="#">
            Get 6 months free
        </a>
    </div>

    {{-- get started end --}}

    {{-- subscriptions  --}}

    <div class="bg-gray-200 py-40 flex flex-col items-center">
        <h2 class="text-3xl font-bold mb-20">
            Planai, funkcijos ir kainos
        </h2>
        <div class="flex gap-5">
            <x-home.sub-card>

                <x-home.sub-card-attribute attribute="Commision-free trading"/>
                <hr>
                <x-home.sub-card-attribute attribute="Multi-layered encryption"/>
                <hr>
                <x-home.sub-card-attribute attribute="Commision-free trading"/>
                <hr>
                <x-home.sub-card-attribute attribute="Multi-layered encryption"/>
                <hr>
                <x-home.sub-card-attribute attribute="One tip every day"/>
                <hr>
                <x-home.sub-card-attribute attribute="Invest up to $1,500 each month"/>

            </x-home.sub-card>
            <x-home.sub-card plan="Investor" price="7" buttonMessage="Subscribe"
            description="You've been investing for a while. Invest more and grow your wealth faster.">

                <x-home.sub-card-attribute attribute="Commision-free trading"/>
                <hr>
                <x-home.sub-card-attribute attribute="Multi-layered encryption"/>
                <hr>
                <x-home.sub-card-attribute attribute="One tip every day"/>
                <hr>
                <x-home.sub-card-attribute attribute="Invest up to $15,000 each month"/>
                <hr>
                <x-home.sub-card-attribute attribute="Basic transaction anonymization"/>
                <hr>
                <x-home.sub-card-attribute attribute="Invest up to $1,500 each month"/>

            </x-home.sub-card>
            <x-home.sub-card mode="dark" plan="VIP" price="199" buttonMessage="Subscribe"
            description="You've been investing for a while. Invest more and grow your wealth faster.">

                <x-home.sub-card-attribute mode="dark" attribute="Commision-free trading"/>
                <hr class="border-0 h-[1px] bg-gray-800">
                <x-home.sub-card-attribute mode="dark" attribute="Multi-layered encryption"/>
                <hr class="border-0 h-[1px] bg-gray-800">
                <x-home.sub-card-attribute mode="dark" attribute="Real-tine tip notification"/>
                <hr class="border-0 h-[1px] bg-gray-800">
                <x-home.sub-card-attribute mode="dark" attribute="No investment limits"/>
                <hr class="border-0 h-[1px] bg-gray-800">
                <x-home.sub-card-attribute mode="dark" attribute="Advanced transaction anonymization"/>
                <hr class="border-0 h-[1px] bg-gray-800">
                <x-home.sub-card-attribute mode="dark" attribute="Automated tax-loss harvesting"/>

            </x-home.sub-card>
        </div>

        <div>
            <div class="text-3xl font-bold mt-10">
                Reikia daugiau funkcijų?
            </div>
            <div class="text-center leading-none">
                Perfect parts - visada pasiruošę padėti!
            </div>
        </div>
        <a class="bg-[#009eff] text-white px-5 py-4 mt-1" href="#">
            Susisiek su PerfectParts komanda dabar
        </a>

    </div>

    {{-- subscriptions end --}}

    {{-- foldable FAQ --}}

    <div class="pt-40 pb-10 flex flex-col">
        <h2 class="text-3xl font-bold mb-20 text-center">
            Dažnai užduodami klausimai (D.U.K.)
        </h2>

        <div class="grid grid-cols-2 mx-60">
            <div class="">
                <p class="text-blue-700 mb-3">
                    Frequently asked questions
                </p>
                <h2 class="text-5xl font-bold">
                    Everything you <br>
                    need to know
                </h2>
            </div>
            <div>
                <div class="pb-10">
                    <div class="text-gray-400 font-semibold">
                        General
                    </div>
                    <x-home.details header='What does "lifetime access" mean exactly?'/>
                    <hr class="border-0 h-[1px] bg-gray-200">
                    <x-home.details header='What does "free updates" include?'/>
                </div>
                <div>
                    <div class="text-gray-400 font-semibold">
                        Compatibility
                    </div>
                    <x-home.details header='Are Figma, Sketch, or Adobe XD files included?'/>
                    <hr class="border-0 h-[1px] bg-gray-200">
                    <x-home.details header='What JS framework is used?'/>
                    <hr class="border-0 h-[1px] bg-gray-200">
                    <x-home.details header='What version of Tailwind CSS is used?'/>
                    <hr class="border-0 h-[1px] bg-gray-200">
                    <x-home.details header='What browsers are supported?'/>
                </div>
            </div>
        </div>
    </div>

    {{-- foldable FAQ end --}}

    {{-- website usefulness --}}

    <div class="bg-blue-600 mt-40 py-20 ps-28 flex gap-10">
        <h2 class="text-white text-3xl font-bold">
            Gauk daugiau naudos iš savo internetinės svetainės
        </h2>
        <a class="text-white border border-white rounded-lg py-1 px-5" href="#">
            Pradėti naują projektą
        </a>
    </div>

    {{-- website usefulness end --}}

    {{-- footer --}}

    <div class="bg-slate-900 pt-20 px-56">
        <div class="grid grid-cols-3">
            <div class="flex flex-col">
                <h3 class="text-lg font-bold text-gray-600">
                    PASLAUGOS
                </h3>
                <a href="#" class="text-gray-400">
                    Interneto svetainiu kurimas
                </a>
                <a href="#" class="text-gray-400">
                    El. parduotuvių kūrimas
                </a>
                <a href="#" class="text-gray-400">
                    Reklama internete
                </a>
                <a href="#" class="text-gray-400">
                    Dizaino darbai
                </a>
                <a href="#" class="text-gray-400">
                    SEO paslaugos
                </a>
            </div>
            <div class="flex flex-col">
                <h3 class="text-lg font-bold text-gray-600">
                    DIZAINO PASLAUGOS
                </h3>
                <a href="#" class="text-gray-400">
                    Firminio stiliaus kūrimas
                </a>
                <a href="#" class="text-gray-400">
                    Logotipo atnaujinimas
                </a>
                <a href="#" class="text-gray-400">
                    Logotipų kūrimas
                </a>
                <a href="#" class="text-gray-400">
                    Grafinis dizainas
                </a>
                <a href="#" class="text-gray-400">
                    Web dizainas
                </a>
            </div>
            <div>
                <h3 class="text-lg font-bold text-gray-600">
                    APIE MUS
                </h3>
                <div class="text-gray-400 leading-5">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Est laborum recusandae, quisquam cumque cum dolorum molestias minima. Velit nulla recusandae enim molestias, laudantium aliquam quos accusamus error, doloremque beatae cumque.
                </div>
            </div>
        </div>
    

        <div class="flex items-center mt-10 pb-5">
            <div class="">
                <h2 class="text-white font-bold text-lg">
                    Perfect parts
                </h2>
                <div class="text-[10px] leading-[10px] text-white text-right">
                    Find & Sell any parts
                </div>
            </div>
            <div class="mx-auto">
                <p class="text-gray-400">
                    Visos teises saugomos ©️ www.dimax.lt &nbsp; Privatumas &nbsp; Sveitainė sukurta Dimax
                </p>
            </div>
        </div>
    </div>
    {{-- footer end --}}
</x-layout>