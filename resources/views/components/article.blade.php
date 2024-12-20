@props(['title' => $title, 'author' => $author, 'location' => $location, 'category' => $category, 'id' => $id])

<article class="flex max-w-xl flex-col items-start justify-between">
    <div class="flex items-center gap-x-4 text-xs">
        <time datetime="2024-11-10" class="text-gray-500">10 November 2024</time>
        <a href="/blog?category={{ $category }}"
            class="relative z-10 rounded-full bg-gray-50 px-3 py-1.5 font-medium text-gray-600 hover:bg-gray-100">{{ $category }}</a>
    </div>
    <div class="group relative">
        <h3 class="mt-3 text-lg/6 font-semibold text-gray-900 group-hover:text-gray-600">
            <a href="{{ $location }}">
                <span class="absolute inset-0"></span>
                {{ $title }}
            </a>
        </h3>
        <p class="mt-5 line-clamp-3 text-sm/6 text-gray-600">{{ $slot }}</p>
    </div>
    <div class="relative mt-8 flex items-center gap-x-4">
        <img class="rounded-full w-11" src="https://avatars.githubusercontent.com/u/67376611?v=4">
        <div class="text-sm/6">
            <p class="font-semibold text-gray-900">
                <a href="/blog?author={{ $author }}">
                    <span class="absolute inset-0"></span>
                    {{ $author }}
                </a>
            </p>
            <p class="text-gray-600">Co-Founder / CTO</p>
        </div>
    </div>
    <form action="{{ route('blog.destroy', $id) }}" method="post">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn">Delete Ya</button>
    </form>
    <form action="{{ route('blog.edit', $id) }}" method="GET">
        @csrf
        <button type="submit" class="btn">Edit Ya</button>
    </form>
</article>
