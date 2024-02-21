<x-layout>
    <div class="flex items-center justify-center flex-col">

        <h2 class="text-2xl font-bold uppercase my-5">
            Register
        </h2>

        <form method="POST" action="/users">
            @csrf
            <div class="flex flex-col">
                <label for="name">User name:</label>
                <input type="text" name="name" value="{{ old("name") }}">
                @error("name")
                    <p class=" text-red-600 font-semibold text-sm mt-1">{{ $message }}</p>
                @enderror

                <label for="email">Email</label>
                <input type="text" name="email" value="{{ old("email") }}">
                @error("email")
                    <p class=" text-red-600 font-semibold text-sm mt-1">{{ $message }}</p>
                @enderror

                <label for="password">Password</label>
                <input type="text" name="password" value="{{ old("password") }}">
                @error("password")
                    <p class=" text-red-600 font-semibold text-sm mt-1">{{ $message }}</p>
                @enderror

                <label for="password_confirmation">Confirm password</label>
                <input type="text" name="password_confirmation" value="{{ old("password_confirmation") }}">
                @error("password_confirmation")
                    <p class=" text-red-600 font-semibold text-sm mt-1">{{ $message }}</p>
                @enderror

                <div class="mt-8 flex flex-row gap-5">
                    <p>Already have an account?</p>
                    <a href="/login">Login</a>
                </div>

                <button class="bg-laravel text-white rounded py-2 px-4 hover:bg-black">

                        Register

                </button>
            </div>
            
        </form>

    </div>
    

</x-layout>