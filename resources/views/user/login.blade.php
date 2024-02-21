<x-layout>
    <div class="flex items-center justify-center flex-col">

        <h2 class="text-2xl font-bold uppercase my-5">
            Register
        </h2>

        <form action="/login">
            
            <div class="flex flex-col">
                <label for="username">User name:</label>
                <input type="text" name="username">

                <label for="password">Password</label>
                <input type="text" name="password">

                <button class="bg-laravel text-white rounded py-2 px-4 hover:bg-black">

                        Log-in
                        
                </button>
            </div>
            
        </form>

    </div>
    

</x-layout>