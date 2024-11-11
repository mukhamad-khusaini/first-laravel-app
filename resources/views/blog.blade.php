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
                <article class="flex max-w-xl flex-col items-start justify-between">
                    <div class="flex items-center gap-x-4 text-xs">
                        <time datetime="2024-11-10" class="text-gray-500">10 November 2024</time>
                        <a href="#"
                            class="relative z-10 rounded-full bg-gray-50 px-3 py-1.5 font-medium text-gray-600 hover:bg-gray-100">Strategy</a>
                    </div>
                    <div class="group relative">
                        <h3 class="mt-3 text-lg/6 font-semibold text-gray-900 group-hover:text-gray-600">
                            <a href="/blog/cck">
                                <span class="absolute inset-0"></span>
                                Cara Cepat Kaya
                            </a>
                        </h3>
                        <p class="mt-5 line-clamp-3 text-sm/6 text-gray-600">Lorem ipsum dolor sit amet consectetur
                            adipisicing elit. Fugiat molestiae expedita aliquam nobis cumque recusandae exercitationem
                            ipsa odio consequatur. Deleniti facilis repellat tempora corporis aperiam sint ratione
                            laborum cupiditate quae?</p>
                    </div>
                    <div class="relative mt-8 flex items-center gap-x-4">
                        <img class="rounded-full w-11" src="https://avatars.githubusercontent.com/u/67376611?v=4">
                        <div class="text-sm/6">
                            <p class="font-semibold text-gray-900">
                                <a href="#">
                                    <span class="absolute inset-0"></span>
                                    Mukhamad Khusaini
                                </a>
                            </p>
                            <p class="text-gray-600">Co-Founder / CTO</p>
                        </div>
                    </div>
                </article>

                <article class="flex max-w-xl flex-col items-start justify-between">
                    <div class="flex items-center gap-x-4 text-xs">
                        <time datetime="2024-11-10" class="text-gray-500">10 November 2024</time>
                        <a href="#"
                            class="relative z-10 rounded-full bg-gray-50 px-3 py-1.5 font-medium text-gray-600 hover:bg-gray-100">Strategy</a>
                    </div>
                    <div class="group relative">
                        <h3 class="mt-3 text-lg/6 font-semibold text-gray-900 group-hover:text-gray-600">
                            <a href="/blog/cmu">
                                <span class="absolute inset-0"></span>
                                Cara Membuat Uang
                            </a>
                        </h3>
                        <p class="mt-5 line-clamp-3 text-sm/6 text-gray-600">Lorem ipsum dolor, sit amet consectetur
                            adipisicing elit. Ducimus magni id itaque quam culpa, commodi laboriosam, sed minima
                            expedita quos fugit illum doloribus unde! Commodi nobis sed corporis vitae esse!</p>
                    </div>
                    <div class="relative mt-8 flex items-center gap-x-4">
                        <img class="rounded-full w-11" src="https://avatars.githubusercontent.com/u/67376611?v=4">
                        <div class="text-sm/6">
                            <p class="font-semibold text-gray-900">
                                <a href="#">
                                    <span class="absolute inset-0"></span>
                                    Mukhamad Khusaini
                                </a>
                            </p>
                            <p class="text-gray-600">Co-Founder / CTO</p>
                        </div>
                    </div>
                </article>

                <!-- More posts... -->
            </div>
        </div>
    </div>

</body>

</html>
