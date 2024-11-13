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

                <x-article title="Cara Cepat Kaya" location="/blog/cck" tag="Strategy">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit consectetur maiores iure, ipsa et
                    architecto dolore reprehenderit aliquid ducimus molestias vero eaque ad omnis voluptates aut, earum
                    quasi consequatur ex?Tempora iusto, cumque deserunt voluptates reiciendis, saepe et illo
                    necessitatibus, maxime quibusdam ratione est? Et, voluptas voluptatem? Excepturi eius aut eveniet,
                    nesciunt quod quaerat doloribus enim quisquam placeat modi at?
                </x-article>
                <x-article title="Cara Membuat Uang" location="/blog/cmu" tag="Strategy">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum harum dicta assumenda dignissimos
                    quae illum, cumque consequatur dolores labore architecto in consectetur, mollitia quo eum odit
                    facilis ratione. Pariatur, sunt!
                    Atque doloremque maiores mollitia ipsa vel aspernatur, neque facere quo eos eligendi inventore
                    voluptatum, optio quos minus unde. Ratione sapiente amet nisi iste accusantium consequatur, esse
                    deleniti ipsam quo temporibus?
                    Molestiae asperiores animi nobis libero aut autem iure, hic at et saepe magni soluta nam vero natus
                    nesciunt explicabo ex ipsam voluptatem repudiandae non ipsa itaque distinctio ratione a? Tenetur!
                </x-article>


                <!-- More posts... -->
            </div>
        </div>
    </div>

</body>

</html>
