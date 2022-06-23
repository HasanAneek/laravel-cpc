<x-layout>
    <x-panel class="p-10 rounded max-w-lg mx-auto mt-24 mb-20">
        <header class="text-center">
            <h2 class="text-2xl font-bold uppercase mb-1 text-black">
                Login
            </h2>
            <p class="mb-4 text-black">Login an account to create gigs</p>
        </header>

        <form action="/users/authenticate" method="POST">
            @csrf

            <div class="mb-4">
                <label for="email" class="sr-only">Email</label>
                <input type="email"
                       name="email"
                       placeholder="Email"
                       class="text-black border border-gray-200 rounded p-2 w-full @error('email') border-red-500 @enderror"
                       value="{{ old('email') }}" >
                @error('email')
                <span class="text-red-500">{{ $message }}</span>
                @enderror
            </div>


            <div class="relative w-full mb-3 text-black" x-data="{ show: true }">
                <label for="password" class="sr-only">Password</label>
                <input :type="show ? 'password' : 'text'" name="password" class="border-0 p-4 placeholder-gray-400 text-gray-700 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full" placeholder="Password" />
                <div class=" absolute inset-y-0 right-0 pr-3 flex items-center text-sm leading-5 ">
                    <p class="mt-2" @click="show=! show" x-text=" show ? 'Show' : 'Hide' "></p>
                </div>

                @error('password')
                    <span class="text-red-500">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-4">
                <div class="flex items-center text-black">
                    <input type="checkbox" name="remember" id="remember" class="mr-2">
                    <label for="remember" >Remember me </label>
                </div>
            </div>

            <div class="mb-4">
                <button type="submit" class="text-white bg-teal-600 hover:bg-teal-700 rounded-lg mt-3 mb-6 border px-2 py-1">Login</button>
            </div>

            <div class="mt-8">
                <p class="text-black">
                    Don't have an account?
                    <a href="/register" class="text-green-500"
                    >Register</a
                    >
                </p>
            </div>
        </form>
    </x-panel>
</x-layout>
