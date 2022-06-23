@props(['post'])

<section class="items-center border-gray-300 bg-white p-6 w-full">
    <div class="flex items-center border-2 border-gray-300 bg-white p-4 w-full rounded-lg hover:bg-gray-200">
           <div class="w-2/10 mr-40">
               <img style="height: 150px" src="{{ $post->logo ? asset('/storage/' . $post->logo) : asset('/images/no-image.png') }}" alt="logo">
           </div>

        <div class="w-3/12">
            <h1 class="w-full text-3xl text-black">{{ $post->title }}</h1>
            <p class="text-gray-700 text-sm p-2">{{ $post->company_name }}</p>
            <p class="text-gray-700 text-sm p-2">{{ $post->salary }}</p>
            <div class="mt-2">
                <a href="/posts/{{ $post->id }}"><button type="submit" class="text-white bg-teal-600 hover:bg-teal-700 rounded-lg mt-3 mb-2 border px-2 py-1" style="border: 1px gray solid; border: none">View Details</button></a>
            </div>
        </div>
        <div class="w-3/12">
            <p class="text-gray-700 text-sm p-2">{{ $post->publish_date }}</p>
            <p class="text-gray-700 text-sm p-2"> {{ $post->job_type }}</p>
        </div>
        <div class="w-3/12 mb-4">
            <p class="text-gray-700 text-sm p-2">{{ $post->vacancy }}</p>
            <p class="text-gray-700 text-sm p-2">{{ $post->cgpa_requirement }}</p>
        </div>
        </div>
    </div>
</section>
