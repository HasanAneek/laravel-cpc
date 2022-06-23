<x-layout>
    <x-panel class="p-10 rounded max-w-lg mx-auto mt-24 mb-20">
        <header class="text-center">
            <h2 class="text-2xl font-bold uppercase mb-1 text-black">
                Register
            </h2>
            <p class="mb-4 text-black">Create an account to post gigs</p>
        </header>

        <form action="/users" method="POST">
            @csrf

            <div class="mb-4">
                <label for="name" class="sr-only">Name</label>
                <input type="text"
                       name="name"
                       placeholder="Name"
                       class="border border-gray-200 rounded text-black p-2 w-full @error('name') border-red-500 @enderror"
                       value="{{ old('name') }}" >
                @error('name')
                    <span class="text-red-500">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-4">
                <label for="email" class="sr-only">Email</label>
                <input type="email"
                       name="email"
                       placeholder="Email"
                       class="border border-gray-200 text-black rounded p-2 w-full @error('email') border-red-500 @enderror"
                       value="{{ old('email') }}" >
                @error('email')
                    <span class="text-red-500">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-4">
                <label for="phone_number" class="sr-only">Phone Number</label>
                <input type="number"
                       name="phone_number"
                       placeholder="Phone Number"
                       class="border border-gray-200 text-black rounded p-2 w-full @error('phone_number') border-red-500 @enderror"
                       value="{{ old('phone_number') }}" >
                @error('phone_number')
                <span class="text-red-500">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-4">
                <label for="nsu_id" class="sr-only">NSU ID</label>
                <input type="number"
                       name="nsu_id"
                       placeholder="NSU ID"
                       class="border border-gray-200 text-black rounded p-2 w-full @error('nsu_id') border-red-500 @enderror"
                       value="{{ old('nsu_id') }}" >
                @error('nsu_id')
                <span class="text-red-500">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-4">
                <label for="department" class="sr-only">Department</label>
                <input type="text"
                       name="department"
                       placeholder="Department"
                       class="border border-gray-200 text-black rounded p-2 w-full @error('department') border-red-500 @enderror"
                       value="{{ old('department') }}" >
                @error('department')
                <span class="text-red-500">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-4">
                <label for="secondary_email" class="sr-only">Secondary Email</label>
                <input type="email"
                       name="secondary_email"
                       placeholder="Secondary Email"
                       class="border border-gray-200 text-black rounded p-2 w-full @error('secondary_email') border-red-500 @enderror"
                       value="{{ old('secondary_email') }}" >
                @error('secondary_email')
                <span class="text-red-500">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-4">
                <label for="credit_complete" class="sr-only">Credit Complete</label>
                <input type="number"
                       name="credit_complete"
                       placeholder="Credit Complete"
                       class="border border-gray-200 text-black rounded p-2 w-full @error('credit_complete') border-red-500 @enderror"
                       value="{{ old('credit_complete') }}" >
                @error('credit_complete')
                <span class="text-red-500">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-4">
                <label for="major_1" class="sr-only">Major-1</label>
                <input type="text"
                       name="major_1"
                       placeholder="Major-1"
                       class="border border-gray-200 text-black rounded p-2 w-full @error('major_1') border-red-500 @enderror"
                       value="{{ old('major_1') }}" >
                @error('major_1')
                <span class="text-red-500">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-4">
                <label for="major_2" class="sr-only">Major-2</label>
                <input type="text"
                       name="major_2"
                       placeholder="Major-2"
                       class="border border-gray-200 text-black rounded p-2 w-full @error('major_2') border-red-500 @enderror"
                       value="{{ old('major_2') }}" >
                @error('major_2')
                <span class="text-red-500">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-4">
                <label for="password" class="sr-only">Password</label>
                <input type="password"
                       name="password"
                       placeholder="Password"
                       class="border border-gray-200 text-black rounded p-2 w-full @error('password') border-red-500 @enderror">
                @error('password')
                    <span class="text-red-500">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-4">
                <label for="password_confirmation" class="sr-only">Repeat Password</label>
                <input type="password"
                       name="password_confirmation"
                       placeholder="Repeat Password"
                       class="border border-gray-200 text-black rounded p-2 w-full @error('password_confirmation') border-red-500 @enderror">
                @error('password_confirmation')
                    <span class="text-red-500">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-4">
                <button type="submit" class="text-white bg-teal-600 hover:bg-teal-700 rounded-lg mt-3 mb-6 border px-2 py-1">Register</button>
            </div>

            <div class="mt-8">
                <p class="text-black">
                    Already have an account?
                    <a href="/login" class="text-red-500"
                    >Login</a
                    >
                </p>
            </div>
        </form>
    </x-panel>
</x-layout>
