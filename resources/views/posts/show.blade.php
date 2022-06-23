<x-layout>
    <h1 class="text-4xl bg-white p-8 text-black">{{ $post->title }}</h1>
    <section class="flex bg-white p-8 text-black">
        <div class="w-8/12">

            <p> <span class="font-semibold">Vacancy Number:</span> {{ $post->vacancy }}</p>

            <p> <span class="font-semibold">Deadline:</span> {{ $post->publish_date }}</p>

            <p> <span class="font-semibold">CGPA Requirement:</span> {{ $post->cgpa_requirement }}</p>

            <p> <span class="font-semibold">Salary:</span> {{ $post->salary }}</p>

            <p>{{ $post->job_type }}</p>

            <p> <span class="font-semibold">Job Location:</span> {{ $post->location }}</p>

            <p> <span class="font-semibold">Require Experience:</span> {{ $post->experience }}</p>

            <p> <span class="font-semibold">Preferred Program:</span> {{ $post->program }}</p>

            <p> <span class="font-semibold">Website:</span> {{ $post->website }}</p>

            <p> <span class="font-semibold">Email:</span> {{ $post->email }}</p>

           <p> <a> <span class="font-semibold">Job Description:</span> {{ $post->description }}</a></p>

            <a href="#"> <button type="submit" class="text-white bg-teal-600 hover:bg-teal-700 rounded-lg mt-3 mb-6 border px-2 py-1" style="border:2px gray solid; border: none; ">Copy Link</button></a>

        </div>
        <div class="flex w-4/12 justify-end p-2">
            <img src="{{ $post->logo ? asset('/storage/' . $post->logo) : asset('/images/no-image.png') }}" alt="logo">
        </div>

    </section>
</x-layout>
