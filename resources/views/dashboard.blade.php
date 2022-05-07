{{-- <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    You're logged in!
                </div>
            </div>
        </div>
    </div>
</x-app-layout> --}}



<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}
  <link rel="stylesheet" href="{{ mix('css/app.css') }}">
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

    <div class="bg-green-900 h-16 flex justify-center items-center">
        <h3 class="text-white italic">Website Resmi Siapa-tahu</h3>
    </div>
    <div class="flex px-10 bg-green-400 items-center">
        <img src="{{ asset('img/logo.png') }}" width="60" alt="">
        <div class="w-full flex justify-center items-center">
            <h2 class="text-center text-white text-2xl">Selamat Datang Di Website</h2>
        </div>
    </div>

    <div class="h-screen bg-img flex justify-center">
        Dashboard
    </div>


    <script src="{{ mix('js/app.js') }}"></script>
</body>
</html>
