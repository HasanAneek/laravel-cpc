<x-layout>
    <x-panel class="p-8 max-w-lg mx-auto mt-18 text-black">
        <header class="text-center">
            <h2 class="text-2xl font-bold uppercase mb-1">
               Edit Gig
            </h2>
        </header>
        <form method="POST" action="/posts/{{$post->id}}" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label for="title" class="sr-only">Title</label>
                <input type="text"
                       name="title"
                       placeholder="Title"
                       class="border border-gray-200 rounded p-2 w-full @error('title') border-red-500 mt-1 @enderror"
                       value="{{ $post->title }}">
                @error('title')
                <span class="text-red-500">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-4">
                <label for="company_name" class="sr-only">Company Name</label>
                <input type="text"
                       name="company_name"
                       placeholder="Company Name"
                       class="border border-gray-200 rounded p-2 w-full @error('company_name') border-red-500 mt-1 @enderror"
                       value="{{ $post->company_name }}">
                @error('company_name')
                <span class="text-red-500">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-4">
                <label for="vacancy" class="sr-only">Vacancy</label>
                <input type="text"
                       name="vacancy"
                       placeholder="Vacancy"
                       class="border border-gray-200 rounded p-2 w-full @error('vacancy') border-red-500 mt-1 @enderror"
                       value="{{ $post->vacancy }}">
                @error('vacancy')
                <span class="text-red-500">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-4">
                <label for="publish_date" class="sr-only">Publish Date</label>
                <input type="text"
                       name="publish_date"
                       placeholder="Publish Date"
                       class="border border-gray-200 rounded p-2 w-full @error('publish_date') border-red-500 mt-1 @enderror"
                       value="{{ $post->publish_date }}">
                @error('publish_date')
                <span class="text-red-500">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-4">
                <label for="job_type" class="sr-only">Job Type</label>
                <input type="text"
                       name="job_type"
                       placeholder="Job Type"
                       class="border border-gray-200 rounded p-2 w-full @error('job_type') border-red-500 mt-1 @enderror"
                       value="{{ $post->job_type }}">
                @error('job_type')
                <span class="text-red-500">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-4">
                <label for="cgpa_requirement" class="sr-only">CGPA Requirement</label>
                <input type="text"
                       name="cgpa_requirement"
                       placeholder="CGPA Requirement"
                       class="border border-gray-200 rounded p-2 w-full @error('cgpa_requirement') border-red-500 mt-1 @enderror"
                       value="{{ $post->cgpa_requirement }}">
                @error('cgpa_requirement')
                <span class="text-red-500">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-4">
                <label for="salary" class="sr-only">Salary</label>
                <input type="text"
                       name="salary"
                       placeholder="Salary"
                       class="border border-gray-200 rounded p-2 w-full @error('salary') border-red-500 mt-1 @enderror"
                       value="{{ $post->salary }}">
                @error('salary')
                <span class="text-red-500">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-4">
                <label for="experience" class="sr-only">Experience</label>
                <input type="text"
                       name="experience"
                       placeholder="Experience"
                       class="border border-gray-200 rounded p-2 w-full @error('experience') border-red-500 mt-1 @enderror"
                       value="{{ $post->experience }}">
                @error('experience')
                <span class="text-red-500">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-4">
                <label for="location" class="sr-only">Location</label>
                <input type="text"
                       name="location"
                       placeholder="Location"
                       class="border border-gray-200 rounded p-2 w-full @error('location') border-red-500 mt-1 @enderror"
                       value="{{ $post->location }}">
                @error('location')
                <span class="text-red-500">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-4">
                <label for="program" class="sr-only">Educational Program</label>
                <input type="text"
                       name="program"
                       placeholder="Educational Program"
                       class="border border-gray-200 rounded p-2 w-full @error('program') border-red-500 mt-1 @enderror"
                       value="{{ $post->program }}">
                @error('program')
                <span class="text-red-500">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-4">
                <label for="email" class="sr-only">Email</label>
                <input type="text"
                       name="email"
                       placeholder="Email"
                       class="border border-gray-200 rounded p-2 w-full @error('email') border-red-500 mt-1 @enderror"
                       value="{{ $post->email }}">
                @error('email')
                <span class="text-red-500">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-4">
                <label for="website" class="sr-only">Website</label>
                <input type="text"
                       name="website"
                       placeholder="Website"
                       class="border border-gray-200 rounded p-2 w-full @error('website') border-red-500 mt-1 @enderror"
                       value="{{ $post->website }}">
                @error('website')
                <span class="text-red-500">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-4">
                <label for="logo" class="sr-only">Logo</label>
                <input type="file"
                       name="logo"
                       class="border border-gray-200 rounded p-2 w-full ">
            </div>

            <div class="mb-4">
                <label for="description" class="sr-only">Description</label>
                <textarea name="description"
                          rows="8"
                          placeholder="Job Description"
                          class="border border-gray-200 rounded p-2 w-full @error('description') border-red-500 mt-1 @enderror"
                >{{ $post->description }}</textarea>
                @error('description')
                <span class="text-red-500">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-4">
                <button type="submit" class="text-white bg-teal-600 hover:bg-teal-700 rounded-lg mt-3 mb-6 border px-2 py-1">Update Post</button>
            </div>
        </form>
    </x-panel>
</x-layout>
