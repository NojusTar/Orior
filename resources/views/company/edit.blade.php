<x-layout>
    {{-- main --}}
    <div class="flex flex-col items-center justify-center">
        {{-- wrapper --}}
        <div class="bg-white w-2/3 md:w-full xl:w-4/5 p-10 border border-solid border-gray-400 mb-36">
            <form method="POST" action="/companies/{{ $company->id }}" enctype="multipart/form-data">
            @csrf
            @method("PUT")
            
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
                            <div class="text-3xl md:text-4xl font-bold">
                                <input class="border-black border w-full text-right" 
                                type="text" name="name" value="{{ $company->name }}">
                                @error("name")
                                <p class=" text-red-600 font-semibold text-sm mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                            <h3 class="text-3xl md:text-4xl font-bold">
                                rekvizitai
                            </h3>
                            <div class="font-bold text-gray-500 md:text-xl md:font-normal">
                                <input class="border-black border w-fit text-right" 
                                type="text" name="companyService" value="{{ $company->companyService }}">
                                @error("companyService")
                                <p class=" text-red-600 font-semibold text-sm mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="font-bold md:text-xl">
                                {{ $company->website }}
                            </div>
                        </div>                
                    </div>
                    
                    <div class="flex flex-col gap-3 justify-center">
                        <h2 class=" font-bold text-2xl">
                            Apie mus
                        </h2>
                        <p class="h-44 overflow-hidden">
                            <textarea class="border border-black px-1 w-full h-full"
                             name="about">{{ $company->about }}</textarea>
                                @error("about")
                                <p class=" text-red-600 font-semibold text-sm mt-1">{{ $message }}</p>
                                @enderror
                        </p>
                    </div>

                </div>
                {{-- logo and about end--}}

                {{-- rekvizitai --}}
                <div class=" grid grid-cols-2 gap-4 mt-16 sm:flex sm:flex-col sm:gap-5">
                    
                    {{-- collumn 1 --}}
                    <div class="m-1 p-2">

                        <div class="font-bold text-2xl">
                            Rekvizitai
                        </div>
                        
                        <hr class="mb-4 w-6/12 h-1 bg-gray-400">

                        <x-edit.two-cols-bold-edit displayText="Įmonės kodas" name="companyCode" value="{{ $company->companyCode }}"/>
                            @error("companyCode")
                            <p class=" text-red-600 font-semibold text-sm mt-1">{{ $message }}</p>
                            @enderror

                        <x-edit.two-cols-bold-edit displayText="PVM kodas" name="pvm" value="{{ $company->pvm }}"/>
                            @error("pvm")
                            <p class=" text-red-600 font-semibold text-sm mt-1">{{ $message }}</p>
                            @enderror

                        <x-edit.two-cols-bold-edit displayText="Vadovas" name="director" value="{{ $company->director }}"/>
                            @error("director")
                            <p class=" text-red-600 font-semibold text-sm mt-1">{{ $message }}</p>
                            @enderror

                        <x-edit.two-cols-bold-edit displayText="Įmonės amžius" name="age" value="{{ $company->age }}" type="date"/>
                            @error("age")
                            <p class=" text-red-600 font-semibold text-sm mt-1">{{ $message }}</p>
                            @enderror

                        <div class="font-bold">Įmonės registracijos Adresas:</div>

                        <x-edit.two-cols-edit displayText="Gatvė" name="location" value="{{ $company->location }}"/>
                            @error("location")
                            <p class=" text-red-600 font-semibold text-sm mt-1">{{ $message }}</p>
                            @enderror
                        <x-edit.two-cols-edit displayText="Pašto kodas" name="postalCode" value="{{ $company->postalCode }}"/>
                            @error("postalCode")
                            <p class=" text-red-600 font-semibold text-sm mt-1">{{ $message }}</p>
                            @enderror
                        <x-edit.two-cols-edit displayText="Valstybė" name="state" value="{{ $company->state }}"/>
                            @error("state")
                            <p class=" text-red-600 font-semibold text-sm mt-1">{{ $message }}</p>
                            @enderror

                        <x-edit.header-description-edit name="activities" header="Veiklos sritys" :description="$company->activities"/>
                            @error("activities")
                            <p class=" text-red-600 font-semibold text-sm mt-1">{{ $message }}</p>
                            @enderror
                        <x-edit.header-description-edit name="services" header="Paslaugos" :description="$company->services"/>
                            @error("services")
                            <p class=" text-red-600 font-semibold text-sm mt-1">{{ $message }}</p>
                            @enderror
                        
                        
                    </div>
                    {{-- collumn 1 end --}}
                        
                    {{-- collumn 2 --}}
                    <div class="m-1 p-2">
                        
                        <h3 class="font-bold text-2xl">
                            Kontaktinė informacija
                        </h3>
                        
                        <hr class="mb-4 w-6/12 h-1 bg-gray-400">

                        <x-edit.two-cols-bold-edit displayText="Telefonas" name="phone" value="{{ $company->phone }}"/>
                            @error("phone")
                            <p class=" text-red-600 font-semibold text-sm mt-1">{{ $message }}</p>
                            @enderror
                        <x-edit.two-cols-bold-edit displayText="Svetainė" name="website" value="{{ $company->website }}"/>
                            @error("website")
                            <p class=" text-red-600 font-semibold text-sm mt-1">{{ $message }}</p>
                            @enderror
                        <x-edit.two-cols-bold-edit displayText="Susisiekti" name="contactWeb" value="{{ $company->contactWeb }}"/>
                            @error("contactWeb")
                            <p class=" text-red-600 font-semibold text-sm mt-1">{{ $message }}</p>
                            @enderror
                        <x-edit.two-cols-bold-edit displayText="El. pašto adresas" name="email" value="{{ $company->email }}"/>
                            @error("email")
                            <p class=" text-red-600 font-semibold text-sm mt-1">{{ $message }}</p>
                            @enderror

                        <h4 class="font-bold">Parduotuvės adresas:</h4>

                        <x-edit.two-cols-edit displayText="Gatvė" value="{{ $company->location }}" name="location"/>
                            @error("location")
                            <p class=" text-red-600 font-semibold text-sm mt-1">{{ $message }}</p>
                            @enderror

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
                                    <div class="grid grid-cols-2 leading-5">
                                        <div>
                                            {{ $workTime["day"] }}
                                        </div>
                                        <div>
                                            {{ $workTime["time"] }}
                                        </div>
                                    </div>
                                    @endforeach
                                    
                                </details>
                            </div>                       
                        </div>

                        <x-company.two-cols displayText="Pietų pertrauka" information="12 AM-1 PM"/>

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

                        <x-edit.two-cols-bold-edit displayText="pajamos 2023m." value="{{ $company->incomeLatest }}" name="incomeLatest"/>
                            @error("incomeLatest")
                            <p class=" text-red-600 font-semibold text-sm mt-1">{{ $message }}</p>
                            @enderror
                            
                        <x-edit.two-cols-bold-edit displayText="Pelnas" value="{{ $company->profit }}" name="profit"/>
                            @error("profit")
                            <p class=" text-red-600 font-semibold text-sm mt-1">{{ $message }}</p>
                            @enderror

                        <x-edit.two-cols-bold-edit displayText="Automobiliai" value="{{ $company->cars }}" name="cars"/>
                            @error("cars")
                            <p class=" text-red-600 font-semibold text-sm mt-1">{{ $message }}</p>
                            @enderror

                        <x-edit.two-cols-bold-edit displayText="Skolos sodrai" value="{{ $company->deptsSodra }}" name="deptsSodra"/>
                            @error("deptsSodra")
                            <p class=" text-red-600 font-semibold text-sm mt-1">{{ $message }}</p>
                            @enderror

                        <x-edit.two-cols-bold-edit displayText="Finansinė būklė" value="{{ $company->financialState }}" name="financialState"/>
                            @error("financialState")
                            <p class=" text-red-600 font-semibold text-sm mt-1">{{ $message }}</p>
                            @enderror
                        

                        <h3 class="font-bold text-2xl mt-7">Darbuotojai</h3>

                        <hr class="mb-4 w-6/12 h-1 bg-gray-400">

                        <x-edit.two-cols-bold-edit displayText="Darbuotojai" value="{{ $company->workers }}" name="workers"/>
                            @error("workers")
                            <p class=" text-red-600 font-semibold text-sm mt-1">{{ $message }}</p>
                            @enderror

                        <x-edit.two-cols-bold-edit displayText="Darbo skelbimai" value="{{ $company->jobAds }}" name="jobAds"/>
                            @error("jobAds")
                            <p class=" text-red-600 font-semibold text-sm mt-1">{{ $message }}</p>
                            @enderror

                        <x-edit.two-cols-bold-edit displayText="Vidutinis darbo atlyginimas" value="{{ $company->avgSalary }}" name="avgSalary"/>
                            @error("avgSalary")
                            <p class=" text-red-600 font-semibold text-sm mt-1">{{ $message }}</p>
                            @enderror
                            
                        <x-edit.two-cols-bold-edit displayText="Atlyginimas į rankas" value="{{ $company->salary }}" name="salary"/>
                            @error("salary")
                            <p class=" text-red-600 font-semibold text-sm mt-1">{{ $message }}</p>
                            @enderror

                    </div>
                    {{-- collumn 1 end --}}
                    {{-- collumn 2 --}}
                    <div class="m-1 p-2 flex flex-col justify-end">

                        <h3 class="font-bold text-2xl mt-7">Atsiliepimai</h3>
                        <hr class="mb-4 w-6/12 h-1 bg-gray-400">

                        <div class="flex">
                            <div class="">
                                <h1 class="p-5 font-bold text-6xl">
                                    4.2
                                </h1>
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

                    <h3 class="font-bold mb-1 text-2xl mt-7">
                        {{ $company->name }} aprašymas
                    </h3>
                    <hr class="mb-4 w-4/12 h-1 bg-gray-400">
                    <textarea class="border border-black w-full h-fit px-1"
                     name="description">{{ $company->description }}</textarea>
                    @error("description")
                        <p class=" text-red-600 font-s asemibold text-sm mt-1">{{ $message }}</p>
                    @enderror

                </div>
                {{-- footer description end --}}
                {{-- footer images --}}
                <div class="m-3">
                    <h3 class="font-bold mb-1 text-2xl mt-7">
                        {{ $company->name }} nuotraukos
                    </h3>
                    <hr class="mb-4 w-4/12 h-1 bg-gray-400">
                    
                    <textarea class="border border-black w-full h-fit px-1"
                     name="imgDescription">{{ $company->imgDescription }}</textarea>
                    @error("imgDescription")
                        <p class=" text-red-600 font-semibold text-sm mt-1">{{ $message }}</p>
                    @enderror

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
                <button>
                    Submit
                </button>
            </form>
        </div>
        {{-- wrapper end --}}
    </div>
    {{-- main end --}}
</x-layout>