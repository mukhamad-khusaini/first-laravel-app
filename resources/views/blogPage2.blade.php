<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Cara Membuat Uang</title>

    <script src="//unpkg.com/alpinejs" defer></script>
</head>

<body>
    <div x-data="{ open: false }" class="w-full h-[100vh] flex flex-col px-[20rem] align-middle justify-center">
        <h3 class="font-bold text-blue-800 mb-2">Cara Membuat Uang</h3>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sapiente, possimus quidem soluta debitis adipisci
            reiciendis iure molestiae consequuntur porro nobis quos, consequatur repellat, aut accusantium? Sapiente ea
            consequuntur delectus rem.
            Sapiente quidem nobis, reiciendis accusantium eveniet quam nesciunt distinctio, reprehenderit commodi dolore
            at necessitatibus recusandae, provident repellat placeat voluptatibus dolorum officia similique quae error
            soluta fugit? Minima facilis odit iste.
            Cumque, reiciendis, eveniet enim error expedita fugit aspernatur, quas quod quos eius numquam iste vitae
            suscipit officia sed! Modi aut corrupti accusamus quod mollitia commodi similique, saepe reprehenderit quia
            officia?</p>
        Button
        <button @click="open=!open"
            class="w-[5rem] mt-2 bg-blue-500 hover:bg-blue-400 text-white font-bold py-2 px-4 border-b-4 border-blue-700 hover:border-blue-500 rounded">
            Toggle
        </button>

        <div x-show="open" x-transition:enter="transition ease-out duration-300 origin-top-left"
            x-transition:enter-start="opacity-0 scale-90" x-transition:enter-end="opacity-100 scale-100"
            x-transition:leave="transition ease-in duration-300" x-transition:leave-start="opacity-100 scale-100"
            x-transition:leave-end="opacity-0 scale-90 origin-top-left" class="mt-4 rounded-md  p-5 bg-slate-500">
            <label for="price" class="block text-sm/6 font-medium text-white">Price</label>
            <div class="relative mt-2 rounded-md shadow-sm">
                <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                    <span class="text-gray-500 sm:text-sm">$</span>
                </div>
                <input type="text" name="price" id="price"
                    class="block w-full rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6"
                    placeholder="0.00">
                <div class="absolute inset-y-0 right-0 flex items-center">
                    <label for="currency" class="sr-only">Currency</label>
                    <select id="currency" name="currency"
                        class="h-full rounded-md border-0 bg-transparent py-0 pl-2 pr-7 text-gray-500 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm">
                        <option>USD</option>
                        <option>CAD</option>
                        <option>EUR</option>
                    </select>
                </div>
            </div>
        </div>

    </div>

</body>

</html>
