<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Taller Tales</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-yellow-300 text-black">
    <div class="px-10">
        <nav class="flex justify-between items-center py-4 border-b border-black/30">
            <div>
                <a href="/">
                    <img src="{{ Vite::asset('resources/images/icons8-firing-gun.svg') }}" alt="logo-firing-gun">
                </a>
            </div>

            <div class="space-x-6 font-bold">
                <a href="#">Jobs</a>
                <a href="#">Careers</a>
                <a href="#">Salaries</a>
                <a href="#">Companies</a>
            </div>

            <div>
                <a href="">Post a Job</a>
            </div>
        </nav>

        <main class="rounded-lg bg-gradient-to-b from-pink-400 via-orange-400 to-yellow-400  mt-10 max-w-[986px] mx-auto">
            {{ $slot }}
        </main>
    </div>

</body>
</html>