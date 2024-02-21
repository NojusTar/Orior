<x-layout>
    {{-- main --}}
    <div class="flex flex-col items-center justify-center">
        {{-- wrapper --}}
        <div class="bg-white w-2/3 md:w-full xl:w-4/5 p-10 border border-solid border-gray-400 mb-36">
            {{-- logo and about--}}
            <div class=" grid grid-cols-2 gap-5 m-3 md:flex md:flex-col">

                <div class="grid grid-cols-2 pe-4 md:flex md:flex-col
                border-e-[6px] border-sky-500 md:border-b-[6px] md:border-e-0 sm:pb-1">
                    <div class="flex justify-end sm:block sm:w-full">
                        <div class="border border-solid border-black
                         w-full h-fit md:w-full md:h-72 sm:h-48 items-center justify-center flex">
                            <img class="md:h-full
                            " src="{{ asset("images/logo.png") }}" alt="">
                        </div>
                    </div>
                    
                    <div class="flex flex-col justify-center text-right md:text-center md:py-14">
                        <h1 class="text-3xl md:text-4xl font-bold">
                            {{ $company->name }}
                        </h1>
                        <div class="text-3xl md:text-4xl font-bold">
                            rekvizitai
                        </div>
                        <div class="font-bold text-gray-500 md:text-xl md:font-normal">
                            {{ $company->companyService }}
                        </div>
                        <a class="font-bold md:text-xl" href="{{ $company->website }}">
                            {{ $company->website }}
                        </a>
                    </div>                
                </div>
                
                <div class="flex flex-col gap-3 justify-center">
                    <h2 class=" font-bold text-2xl">
                        Apie mus
                    </h2>
                    <p class="h-44 overflow-hidden">
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                        Deserunt exercitationem in harum? Saepe fuga cumque qui consequuntur
                        unde porro quasi non ipsum aperiam. Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                        Deserunt exercitationem in harum? Saepe fuga cumque qui consequuntur
                        unde porro quasi non ipsum aperiam.Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                        Deserunt exercitationem in harum? Saepe fuga cumque qui consequuntur
                        unde porro quasi non ipsum aperiam.
                    </p>
                </div>

            </div>
            {{-- logo and about end--}}

            {{-- rekvizitai --}}
            <div class=" grid grid-cols-2 gap-4 mt-16 sm:flex sm:flex-col sm:gap-5">
                
                {{-- collumn 1 --}}
                <div class="m-1 p-2">

                    <h3 class="font-bold text-2xl">
                        Rekvizitai
                    </h3>
                    
                    <hr class="mb-4 w-6/12 h-1 bg-gray-400">

                    <x-two-cols-bold displayText="Įmonės kodas" :information="$company->companyCode"/>
                    <x-two-cols-bold displayText="PVM kodas" :information="$company->pvm"/>
                    <x-two-cols-bold displayText="Vadovas" :information="$company->director"/>
                    @php
                        $currentAge = date("Y");
                        $companyAge = date('Y', strtotime($company->age));
                        $age = $currentAge - $companyAge;
                    @endphp
                    <x-two-cols-bold displayText="Įmonės amžius" :information="$age"/>

                    <div class="grid grid-cols-2">
                        <div class="font-bold">
                            Prekių ženklai
                        </div>
                        <div class="font-bold">
                            <a href="#">Peržiurėti sąrašą</a>
                        </div>
                    </div>

                    <div class="font-bold">Įmonės registracijos Adresas:</div>

                    <x-two-cols displayText="Gatvė" :information="$company->location"/>
                    <x-two-cols displayText="Pašto kodas" :information="$company->postalCode"/>
                    <x-two-cols displayText="Valstybė" :information="$company->state"/>

                    <x-header-description class="pt-3" header="Veiklos sritys" :description="$company->activities"
                        descriptionStyle="pb-3"/>

                    <x-header-description header="Paslaugos" :description="$company->services"/>

                    
                    
                    
                </div>
                {{-- collumn 1 end --}}
                    
                {{-- collumn 2 --}}
                <div class="m-1 p-2">
                    
                    <h3 class="font-bold text-2xl">
                        Kontaktinė informacija
                    </h3>
                    
                    <hr class="mb-4 w-6/12 h-1 bg-gray-400">

                    <x-two-cols-bold displayText="Telefonas" :information="$company->phone"/>
                    <x-two-cols-bold displayText="Svetainė" :information="$company->website"/>
                    <x-two-cols-bold displayText="Susisiekti" :information="$company->contactWeb"/>
                    <x-two-cols-bold displayText="El. pašto adresas" :information="$company->email"/>

                    <h4 class="font-bold">Parduotuvės adresas:</h4>

                    <x-two-cols displayText="Gatvė" :information="$company->location" :afterInfo="$company->state"/>

                    @php
                        $workTimeArr = [
                            [
                                "index" => 0,
                                "day" => "Sunday",
                                "time" => "8 AM-10 PM",
                            ],
                            [
                                "index" => 1,
                                "day" => "Monday",
                                "time" => "8 AM-10 PM",
                            ],
                            [
                                "index" => 2,
                                "day" => "Tuesday",
                                "time" => "8 AM-10 PM",
                            ],
                            [
                                "index" => 3,
                                "day" => "Wednesday",
                                "time" => "8 AM-10 PM",
                            ],
                            [
                                "index" => 4,
                                "day" => "Thursday",
                                "time" => "8 AM-10 PM",
                            ],
                            [
                                "index" => 5,
                                "day" => "Friday",
                                "time" => "8 AM-10 PM",
                            ],
                            [
                                "index" => 6,
                                "day" => "Saturday",
                                "time" => "8 AM-10 PM",
                            ],
                        ];
                    
                        $currentWorkTime;

                        foreach ($workTimeArr as $workTime) 
                        {
                            if ($workTime["index"] == date("w")) 
                            {
                                $currentWorkTime = $workTime;
                            }
                        }

                        

                        $part1 = array_slice($workTimeArr, date("w"));
                        $part2 = array_slice($workTimeArr, 0, date("w"));
                        $sortedArray = array_merge($part1, $part2);
                        array_splice($sortedArray, 0, 1);

                    @endphp

                    

                    <div class="grid grid-cols-2">
                        <div class="">
                             Darbo laikas
                        </div>
                        <div class="">
                            <details class="cursor-pointer pb-4">
                                <summary class="grid grid-cols-2 font-bold leading-6 text-nowrap">
                                    <div>
                                        {{ $currentWorkTime["day"] }}
                                    </div>
                                    <div>
                                        {{ $currentWorkTime["time"] }}
                                    </div>
                                </summary>
                                @foreach ($sortedArray as $workTime)
                                <div class="grid grid-cols-2 leading-5 text-nowrap">
                                    <div>
                                        {{ $workTime["day"] }}
                                    </div>
                                    <div class="lg:text-right">
                                        {{ $workTime["time"] }}
                                    </div>
                                </div>
                                @endforeach
                                
                            </details>
                        </div>                       
                    </div>

                    <x-two-cols displayText="Pietų pertrauka" information="12 AM-1 PM"/>

                </div>
                {{-- collumn 2 end --}}

            </div>
            {{-- rekvizitai end --}}

            {{-- darbuotojai/atsiliepimai --}}
            <div class="grid grid-cols-2 gap-4 sm:grid-cols-1 sm:grid-rows-2">
                {{-- collumn 1 --}}
                
                <div class="m-1 p-2">

                    
                    <h3 class="font-bold text-2xl mt-7">{{ $company->name }} informacija </h3>

                    <hr class="mb-4 w-6/12 h-1 bg-gray-400">

                    <x-two-cols-bold displayText="pajamos 2023m." :information="$company->incomeLatest" afterInfo="Eur"/>
                    <x-two-cols-bold displayText="Pelnas" :information="$company->profit" afterInfo="Eur"/>
                    <x-two-cols-bold displayText="Automobiliai" :information="$company->cars"/>
                    <x-two-cols-bold displayText="Skolos sodrai" :information="$company->deptsSodra"/>
                    <x-two-cols-bold displayText="Finansinė būklė" :information="$company->financialState"/>
                    

                    <h3 class="font-bold text-2xl mt-7">Darbuotojai</h3>

                    <hr class="mb-4 w-6/12 h-1 bg-gray-400">

                    <x-two-cols-bold displayText="Darbuotojai" :information="$company->workers" afterInfo="darbuotojai"/>
                    <x-two-cols-bold displayText="Darbo skelbimai" :information="$company->jobAds" afterInfo="darbo skelbimai"/>
                    <x-two-cols-bold displayText="Vidutinis darbo atlyginimas" :information="$company->avgSalary" afterInfo="Eur"/>
                    <x-two-cols-bold displayText="Atlyginimas į rankas" :information="$company->salary" afterInfo="Eur"/>

                    <div class="grid grid-cols-2">
                        <div class="font-bold">
                            Atlyginimo skaičiuoklė -
                        </div>
                        <div class="font-bold">
                            <a href="#">Pasitikrink koks tai atlyginimas į rankas</a>
                        </div>
                    </div>
                </div>
                {{-- collumn 1 end --}}
                {{-- collumn 2 --}}
                <div class="m-1 p-2 flex flex-col justify-end">

                    <h3 class="font-bold text-2xl mt-7">Atsiliepimai</h3>
                    <hr class="mb-4 w-6/12 h-1 bg-gray-400">

                    <div class="flex">
                        <div class="">
                            <div class="p-5 font-bold text-6xl">
                                4.2
                            </div>
                        </div>
                        <div class="flex flex-col justify-center items-start">
                            <div>
                                ⭐⭐⭐⭐⭐
                            </div>
                            <div>
                                <a class="text-blue-700" href="#">
                                    2015 reviews
                                </a>
                            </div>
                        </div>
                    </div>

                    <div>
                        <p>Skaityti visus atsiliepimus apie {{ $company->name }}</p>
                    </div>
                </div>
                {{-- collumn 2 end --}}
            </div>
            {{-- darbuotojai/atsiliepimai end --}}

            {{-- footer description --}}
            <div class="m-3">
                <x-header-description class="text-2xl mt-7" :header="$company->name" 
                    afterHeader="aprašymas" :description="$company->description"
                    descriptionStyle="leading-7">
                    <hr class="mb-4 w-6/12 h-1 bg-gray-400">
                </x-header-description>
            </div>
            {{-- footer description end --}}
            {{-- footer images --}}
            <div class="m-3">
                <x-header-description class="text-2xl mt-7" :header="$company->name" 
                    afterHeader="nuotraukos" :description="$company->imgDescription"
                    descriptionStyle="leading-7">
                    <hr class="mb-4 w-6/12 h-1 bg-gray-400">
                </x-header-description>

                <div class="flex gap-2 mt-7 sm:flex-col sm:justify-center sm:items-center">
                    <div class="flex items-center justify-center w-1/3 sm:w-full h-60 overflow-hidden">
                        <img src="{{ asset("images/image.png") }}" alt="">
                    </div>
                    <div class="flex items-center justify-center w-1/3 sm:w-full h-60 overflow-hidden">
                        <img src="{{ asset("images/image.png") }}" alt="">
                    </div>
                    <div class="flex items-center justify-center w-1/3 sm:w-full h-60 overflow-hidden">
                        <img src="{{ asset("images/image.png") }}" alt="">
                    </div>
                </div>
            </div>
            {{-- footer images end --}}
            <a href="/companies/{{ $company->id }}/edit">
                <div>
                    Edit
                </div>
            </a>
        </div>
        {{-- wrapper end --}}
    </div>
    {{-- main end --}}
</x-layout>