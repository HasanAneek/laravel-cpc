<div class="flex justify-end w-full">
    <section class="flex bg-white p-1 rounded-lg mb-2 mr-2">
        <form class="flex" action="/posts">
            @csrf
            <label class="sr-only" for="search">Search</label>
            <input type="text"
                name="search"
                class="text-black h-14 w-full pl-10 pr-20 rounded-lg z-0 focus:shadow focus:outline-none"
                placeholder="Search"
                value="{{ request('search') }}"
            />
            <div class="flex">
                <button type="submit"
                        class="h-10 w-20 text-white rounded-lg bg-red-500 hover:bg-red-600 mt-2">
                    Search
                </button>
            </div>
        </form>
    </section>
</div>
