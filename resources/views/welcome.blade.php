<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
        <title>Jlagran Sehat | Login </title>
    </head>
    <body class="bg-blue-900 h-screen max-h-screen flex justify-center items-center">
        <div class="h-1/2 w-1/2 rounded-xl bg-white bg-opacity-10 flex justify-center items-center ">
            @if (Route::has('login'))
                <div class="flex flex-col items-center">
                <div class="text-4xl font-bold mb-3 tracking-widest text-white">RUMAH SAKIT</div>    
                <div class="font-bold text-2xl mb-4 italic text-red-400">JLAGRAN SEHAT</div>
                    @auth
                        <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="bg-blue-500 hover:bg-blue-700 w-3/5 text-center text-white font-bold py-2 px-4 max-h-1/2 rounded">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="bg-green-500 hover:bg-green-700 w-3/5 text-center text-white font-bold mt-3 py-2 px-4 rounded">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
        </div>
    </body>
</html>
