<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Halaman Blog</title>
</head>

<body>
    <div class="bg-white py-24 sm:py-32">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <div class="mx-auto max-w-2xl lg:mx-0">
                <h2 class="text-pretty text-4xl font-semibold tracking-tight text-gray-900 sm:text-5xl">Baca Artikel
                </h2>
                <p class="mt-2 text-lg/8 text-gray-600">Belajar hal yang baru dengan membaca artikel setiap hari.</p>
            </div>
            <div
                class="mx-auto mt-10 grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 border-t border-gray-200 pt-10 sm:mt-16 sm:pt-16 lg:mx-0 lg:max-w-none lg:grid-cols-3">

                @foreach ($posts as $post)
                    <x-article title="{{ $post['title'] }}" author="{{ $post->user->name }}"
                        location="/blog/{{ $post['slug'] }}" tag="{{ $post['tag'] }}">
                        {{-- content --}}
                        {{ Str::limit($post['content'], 200) }}
                    </x-article>
                @endforeach

            </div>
        </div>
    </div>

</body>

</html>
