<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>{{ $post['title'] }}</title>
</head>

<body>
    <div class="w-full h-[100vh] flex flex-col px-[20rem] align-middle justify-center">
        <h3 class="font-bold text-blue-800 mb-2">{{ $post['title'] }}</h3>
        <p class="text-slate-500 mb-2 border-b border-slate-300">{{ $post['author'] }}</p>
        <p>{{ $post['content'] }}</p>
    </div>
</body>

</html>
