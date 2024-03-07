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
    {{-- search & left numbers end --}}

    <div class="p-20">
        <x-number-text-col number="372+" text="TIEKĖJAI" />
        <x-number-text-col number="47+" text="GAMINTOJAI" />
        <x-number-text-col number="541+" text="BALDINĖS PLOKŠTĖS" />
        <x-number-text-col number="1054+" text="PREKĖS, GAMINIAI" />
    </div>

    {{-- why use text --}}
    <div class="flex flex-col items-center justify-center mt-40 mb-60">
        <h2 class="text-3xl font-bold mb-7">
            Kodėl KITI naudojasi Perfect parts?
        </h2>
        <p class="text-base">
            Perfect parts yra geriausia ir patogiausia platforma
        </p>
        <p class="text-base">
            reikiamų dalių ar detalių paieškai ir kontaktų apsikeitimui su panašios srities verslais.
        </p>
        <p class="text-base mt-10 leading-5">
            Paprasta surasti visas reikiamas dalis savo verslui vystyti <br>
            Vykdant bet kokią gamybinę veiklą dažnai atsitinka, kad nereikia visos baldinės plokštės, o tik jos dalies. <br>
            Sutaupykite pirkdami nepanaudotas kokybiškas dalis iš kitų verslų ar savo kolegos. <br>
            Talpinkite šioje svetainėje savo likučius, Publikuokite. <br>
            Lengvai suraskite kolegą, kuris turi reikiamas dalis. <br>
            Rezervuokite sau ir vystykite verslą efektyviau ir sėkmingiau.
        </p>
        <p class="text-base mt-16">
            NAUJI PRITAIKYTI SPRENDIMAI VERSLAMS
        </p>
        <p class="text-base mt-5">
            PUIKI GALIMYBĖ SUKURTI PRITAIKYTI
        </p>

    </div>
    {{-- why use text end --}}
    {{-- how it works --}}
    <div class="flex flex-col items-center justify-center">
        <h2 class="text-3xl font-bold mb-60">
            Kaip veikia Perfect parts?
        </h2>
        <a class="text-center text-blue-500" href="#">
            IEŠKOK, TALPINK, KEISKIS, DALINKISM, PARDUOK <br>
            NEMOKAMAI
        </a>
        <h2 class="text-3xl font-bold mb-10 mt-10">
            Populiariausios prekių kategorijos
        </h2>
        <div class=" grid grid-rows-3 grid-cols-5">
            @for ($i = 0; $i < 15; $i++)
            <div>
                <x-item-card  />
            </div>
            @endfor
        </div>
    </div>
    {{-- how it works end --}}

    {{-- partners --}}
    <h2 class="mt-60 text-3xl font-bold text-center">
        Mūsų sprendimais pasitiki ir naudoja 
    </h2>

    <div class="flex justify-center pt-10 pb-20">
        <div class="w-8/12">
            <div class="grid grid-cols-6 grid-rows-3">
                @for ($i = 0; $i < 18; $i++)
                <div class="">
                    <img src="{{ asset("images/company.png") }}" alt="">
                </div>
                @endfor
            </div>
        </div>
    </div>
    
    {{-- partners end --}}

    {{-- get started --}}

    <div class="bg-blue-400 text-center py-40">
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

    {{-- devider --}}
    <div class="h-32"></div>
    {{-- devider end --}}

    {{-- FAQ --}}

    <div class="bg-gray-200 py-40 flex flex-col items-center">
        <h2 class="text-3xl font-bold mb-20">
            Dažnai užduodami klausimai (D.U.K.)
        </h2>
        <div class="flex gap-5">
            <x-sub-card>

                <x-sub-card-attribute attribute="Commision-free trading"/>
                <hr>
                <x-sub-card-attribute attribute="Multi-layered encryption"/>
                <hr>
                <x-sub-card-attribute attribute="One tip every day"/>
                <hr>
                <x-sub-card-attribute attribute="Invest up to $1,500 each month"/>

            </x-sub-card>
            <x-sub-card plan="Investor" price="7" buttonMessage="Subscribe"
            description="You've been investing for a while. Invest more and grow your wealth faster.">

                <x-sub-card-attribute attribute="Commision-free trading"/>
                <hr>
                <x-sub-card-attribute attribute="Multi-layered encryption"/>
                <hr>
                <x-sub-card-attribute attribute="One tip every day"/>
                <hr>
                <x-sub-card-attribute attribute="Invest up to $1,500 each month"/>
                <hr>
                <x-sub-card-attribute attribute="Basic transaction anonymization"/>

            </x-sub-card>
            <x-sub-card mode="dark" plan="Investor" price="7" buttonMessage="Subscribe"
            description="You've been investing for a while. Invest more and grow your wealth faster.">

                <x-sub-card-attribute mode="dark" attribute="Commision-free trading"/>
                <hr class="border-0 h-[1px] bg-gray-800">
                <x-sub-card-attribute mode="dark" attribute="Multi-layered encryption"/>
                <hr class="border-0 h-[1px] bg-gray-800">
                <x-sub-card-attribute mode="dark" attribute="Real-tine tip notification"/>
                <hr class="border-0 h-[1px] bg-gray-800">
                <x-sub-card-attribute mode="dark" attribute="No investment limits"/>
                <hr class="border-0 h-[1px] bg-gray-800">
                <x-sub-card-attribute mode="dark" attribute="Advanced transaction anonymization"/>
                <hr class="border-0 h-[1px] bg-gray-800">
                <x-sub-card-attribute mode="dark" attribute="Automated tax-loss harvesting"/>

            </x-sub-card>
        </div>
    </div>

    {{-- FAQ end --}}

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
                    <x-details header='What does "lifetime access" mean exactly?'/>
                    <hr class="border-0 h-[1px] bg-gray-200">
                    <x-details header='What does "free updates" include?'/>
                </div>
                <div>
                    <div class="text-gray-400 font-semibold">
                        Compatibility
                    </div>
                    <x-details header='Are Figma, Sketch, or Adobe XD files included?'/>
                    <hr class="border-0 h-[1px] bg-gray-200">
                    <x-details header='What JS framework is used?'/>
                    <hr class="border-0 h-[1px] bg-gray-200">
                    <x-details header='What version of Tailwind CSS is used?'/>
                    <hr class="border-0 h-[1px] bg-gray-200">
                    <x-details header='What browsers are supported?'/>
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