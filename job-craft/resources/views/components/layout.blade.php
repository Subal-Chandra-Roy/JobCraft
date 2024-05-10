<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JobCraft</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:ital,wght@400;500;600&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>

<body class="bg-gray-200 text-black font-hanken-grotesk pb-10">
    <div>
        <nav class="bg-white navbar flex justify-between items-center pr-4 border-b border-white ">
            <div>
                <a href="/">
                    <img src="{{ Vite::asset('resources/images/logo.png') }}" alt="" height="30px" width="180">
                </a>
            </div>

            <div class="space-x-6 font-bold">
                <a href="#" class="hover:text-blue-500">Jobs</a>
                <a href="#" class="hover:text-blue-500">Careers</a>
                <a href="#" class="hover:text-blue-500">Salaries</a>
                <a href="#" class="hover:text-blue-500">Companies</a>
            </div>

            @auth
            <div class="text-white rounded flex gap-x-5">
                <a href="/jobs/create" class="px-4 py-1 bg-blue-600 hover:bg-blue-500 rounded-md">Post a Job</a>
                <form method="POST" action="/logout">
                    @csrf
                    @method('DELETE')
                    <button class="px-2 py-1 bg-blue-600 hover:bg-blue-500 rounded-md">Log Out</button>
                </form>
            </div>
            @endauth

            @guest()
            <div class="space-x-6 text-white">
                <a href="/register" class="px-2 py-1 bg-blue-600 hover:bg-blue-500 rounded-md">Sign Up</a>
                <a href="/login" class="px-2 py-1 bg-blue-600 hover:bg-blue-500 rounded-md">Log In</a>
            </div>
            @endguest

        </nav>






        <div class="px-10">
            <main class="mt-10 max-w-[986px] mx-auto">
                {{ $slot }}
            </main>
        </div>
    </div>

</body>

</html>