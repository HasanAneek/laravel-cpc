<x-layout>
    @include('partials._search')

    <div class="bg-white">
        @unless(count($posts) ==0)
            @foreach($posts as $post)
                <x-post-card :post="$post"/>
            @endforeach
        @else
            <p class="text-red-500">No posts Found!</p>
        @endunless

            <div class="mt-6 p-4">
                {{ $posts->links() }}
            </div>
    </div>

</x-layout>
