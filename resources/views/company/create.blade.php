<x-layout>

    <header class="text-center">
        <h2 class="text-2xl font-bold uppercase my-5">
            Add a company
        </h2>
    </header>
    
    <div class="flex flex-col items-center">
        <div class=" w-1/2">

            <form method="POST" action="/companies" enctype="multipart/form-data">
                @csrf

                <div class="mb-6">
                    <label
                        for="name"
                        class="inline-block text-lg mb-2"
                        >Company Name</label
                    >
                    <input
                        type="text"
                        class="border border-gray-200 rounded p-2 w-full"
                        name="name"
                        value="{{ old("name") }}"
                    />
                    @error("name")
                        <p class=" text-red-600 font-semibold text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>
        
                <div class="mb-6">
                    <label for="companyCode" class="inline-block text-lg mb-2"
                        >Company code</label
                    >
                    <input
                        type="text"
                        class="border border-gray-200 rounded p-2 w-full"
                        name="companyCode"
                        placeholder="Example: 958545541"
                        value="{{ old("companyCode") }}"
                    />
                    @error("companyCode")
                        <p class=" text-red-600 font-semibold text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label for="pvm" class="inline-block text-lg mb-2"
                        >PVM</label
                    >
                    <input
                        type="text"
                        class="border border-gray-200 rounded p-2 w-full"
                        name="pvm"
                        placeholder="Example: LT958123241"
                        value="{{ old("pvm") }}"
                    />
                    @error("pvm")
                        <p class=" text-red-600 font-semibold text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label for="director" class="inline-block text-lg mb-2"
                        >Director</label
                    >
                    <input
                        type="text"
                        class="border border-gray-200 rounded p-2 w-full"
                        name="director"
                        placeholder="Example: Muriel Lueilwitz"
                        value="{{ old("director") }}"
                    />
                    @error("director")
                        <p class=" text-red-600 font-semibold text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>
        
                <div class="mb-6">
                    <label
                        for="location"
                        class="inline-block text-lg mb-2"
                        >Company location</label
                    >
                    <input
                        type="text"
                        class="border border-gray-200 rounded p-2 w-full"
                        name="location"
                        placeholder="Example: Remote, Boston MA, etc"
                        value="{{ old("location") }}"
                    />
                    @error("location")
                        <p class=" text-red-600 font-semibold text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label for="phone" class="inline-block text-lg mb-2"
                        >Phone</label
                    >
                    <input
                        type="text"
                        class="border border-gray-200 rounded p-2 w-full"
                        name="phone"
                        value="{{ old("phone") }}"
                    />
                    @error("phone")
                        <p class=" text-red-600 font-semibold text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label for="logo" class="inline-block text-lg mb-2"
                        >Logo</label
                    >
                    <input
                        type="file"
                        class="border border-gray-200 rounded p-2 w-full"
                        name="logo"
                    />
                    @error("logo")
                        <p class=" text-red-600 font-semibold text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>
        
                <div class="mb-6">
                    <label for="email" class="inline-block text-lg mb-2"
                        >Contact Email</label
                    >
                    <input
                        type="text"
                        class="border border-gray-200 rounded p-2 w-full"
                        name="email"
                        value="{{ old("email") }}"
                    />
                    @error("email")
                        <p class=" text-red-600 font-semibold text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>
        
                <div class="mb-6">
                    <label
                        for="website"
                        class="inline-block text-lg mb-2"
                    >
                        Website
                    </label>
                    <input
                        type="text"
                        class="border border-gray-200 rounded p-2 w-full"
                        name="website"
                        value="{{ old("website") }}"
                    />
                    @error("website")
                        <p class=" text-red-600 font-semibold text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label for="socials" class="inline-block text-lg mb-2"
                        >Socials</label
                    >
                    <input
                        type="text"
                        class="border border-gray-200 rounded p-2 w-full"
                        name="socials"
                        value="{{ old("socials") }}"
                    />
                    @error("socials")
                        <p class=" text-red-600 font-semibold text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>
        
                <div class="mb-6">
                    <label for="workers" class="inline-block text-lg mb-2"
                        >Workers in the company</label
                    >
                    <input
                        type="number"
                        class="border border-gray-200 rounded p-2 w-full"
                        name="workers"
                        value="{{ old("workers") }}"
                    />
                    @error("workers")
                        <p class=" text-red-600 font-semibold text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label for="capital" class="inline-block text-lg mb-2"
                        >Capital</label
                    >
                    <input
                        type="number"
                        class="border border-gray-200 rounded p-2 w-full"
                        name="capital"
                        value="{{ old("capital") }}"
                    />
                    @error("capital")
                        <p class=" text-red-600 font-semibold text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label for="age" class="inline-block text-lg mb-2"
                        >When did the company start</label
                    >
                    <input
                        type="date"
                        class="border border-gray-200 rounded p-2 w-full"
                        name="age"
                        value="{{ old("age") }}"
                    />
                    @error("age")
                        <p class=" text-red-600 font-semibold text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label for="tags" class="inline-block text-lg mb-2">
                        Tags (Comma Separated)
                    </label>
                    <input
                        type="text"
                        class="border border-gray-200 rounded p-2 w-full"
                        name="tags"
                        placeholder="Example: Laravel, Backend, Postgres, etc"
                        value="{{ old("tags") }}"
                    />
                    @error("tags")
                        <p class=" text-red-600 font-semibold text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>
        
                <div class="mb-6">
                    <label
                        for="description"
                        class="inline-block text-lg mb-2"
                    >
                        Company description
                    </label>
                    <textarea
                        class="border border-gray-200 rounded p-2 w-full"
                        name="description"
                        rows="10"
                        placeholder="Include tasks, requirements, salary, etc"
                    > {{ old("description") }} </textarea>
                    @error("description")
                        <p class=" text-red-600 font-semibold text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>
        
                <div class="mb-6">
                    <button
                        class="text-white rounded py-2 px-4 hover:bg-black"
                    >
                        Add company
                    </button>
        
                    <a href="/" class="text-black ml-4"> Back </a>
                </div>
            </form>
        </div>
    </div>



    
    
</x-layout>