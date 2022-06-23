<x-layout>
    <x-panel class="text-black">
        <header class="text-black">
            <h2 class=" text-2xl font-bold uppercase mb-1 text-black">
               My Account
            </h2>
            <p class="mb-4 mt-6 text-black justify-start font-semibold">My Profile</p>
        </header>

        <form action="/users/profile" method="POST">
            @csrf
            @method('PUT')

           <div class="border max-w-lg p-4 m-4 mx-auto">
               <label for="name">Name</label>
               <input type="text" class="border border-gray-200 rounded p-2 w-full" name="name" id="name" placeholder="Name" value="{{ auth()->user()->name }}">

               @error('name')
                <span class="text-red-500">{{ $message }}</span>
               @enderror
           </div>
            <div class="border-2 max-w-lg p-4 m-4 mx-auto">
                <label for="email">Email</label>
                <input type="email" class="border border-gray-200 rounded p-2 w-full" name="email" id="email" placeholder="Email" value="{{ auth()->user()->email }}">

                @error('email')
                <span class="text-red-500">{{ $message }}</span>
                @enderror
            </div>
            <div class="border-2 max-w-lg p-4 m-4 mx-auto">
                <label for=phone>Phone</label>
                <input type="number" name="phone" id="phone" class="border border-gray-200 rounded p-2 w-full" placeholder="Phone" value="{{ auth()->user()->phone_number }}">
                @error('phone')
                <span class="text-red-500">{{ $message }}</span>
                @enderror
            </div>
            <div class="border-2 max-w-lg p-4 m-4 mx-auto">
                <label for=nsu_id>NSU ID</label>
                <input type="text" name="nsu_id" id="nsu_id" class="border border-gray-200 rounded p-2 w-full" placeholder="NSU ID" value="{{ auth()->user()->nsu_id }}">
                @error('nsu_id')
                <span class="text-red-500">{{ $message }}</span>
                @enderror
            </div>
            <div class="border-2 max-w-lg p-4 m-4 mx-auto">
                <label for=secondary_email>Secondary Email</label>
                <input type="email" name="secondary_email" class="border border-gray-200 rounded p-2 w-full" id="secondary_email" placeholder="Secondary Email" value="{{ auth()->user()->secondary_email }}">
                @error('secondary_email')
                <span class="text-red-500">{{ $message }}</span>
                @enderror
            </div>
            <div class="border-2 max-w-lg p-4 m-4 mx-auto">
                <label for=department>Department</label>
                <input type="text" name="department" id="Department" class="border border-gray-200 rounded p-2 w-full" placeholder="department" value="{{ auth()->user()->department }}">
                @error('department')
                <span class="text-red-500">{{ $message }}</span>
                @enderror
            </div>
            <div class="border-2 max-w-lg p-4 m-4 mx-auto">
                <label for=credit_complete>Credit Complete</label>
                <input type="text" name="credit_complete" class="border border-gray-200 rounded p-2 w-full" id="credit_complete" placeholder="Credit Complete" value="{{ auth()->user()->credit_complete }}">
                @error('credit_complete')
                <span class="text-red-500">{{ $message }}</span>
                @enderror
            </div>
            <div class="border-2 max-w-lg p-4 m-4 mx-auto">
                <label for=major_1>Major-1</label>
                <input type="text" name="major_1" id="major_1" class="border border-gray-200 rounded p-2 w-full" placeholder="Major-1" value="{{ auth()->user()->major_1 }}">
                @error('major_1')
                <span class="text-red-500">{{ $message }}</span>
                @enderror
            </div>
            <div class="border-2 max-w-lg p-4 m-4 mx-auto">
                <label for=major_2>Major-2</label>
                <input type="text" name="major_2" id="major_2" class="border border-gray-200 rounded p-2 w-full" placeholder="Major-2" value="{{ auth()->user()->major_2 }}">
                @error('major_2')
                <span class="text-red-500">{{ $message }}</span>
                @enderror
            </div>

            <div>
                   <button type="submit"
                            class="text-white bg-teal-600 hover:bg-teal-700 rounded-lg mt-8 mb-6 border px-2 py-1">
                            Update profile
                   </button>
            </div>
        </form>
    </x-panel>
</x-layout>
