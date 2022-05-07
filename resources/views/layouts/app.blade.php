

<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}
  <link rel="stylesheet" href="{{ mix('css/app.css') }}">
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  <title>SIAPA TAHU</title>
</head>
<body>

    <div class="bg-navbar-old h-[118px] flex justify-center items-center relative">
        <img class="absolute top-2 left-10" src="{{ asset('img/logo.png') }}" width="60" alt="">
        <h3 class="text-white text-2xl font-extrabold">SIAPA TAHU</h3>
        @if ( !Auth::user())            
            <div class="absolute top-[25%] sm:top-[35%] flex-col sm:flex-row right-10 flex gap-y-5 gap-x-5 text-white text-center">
                <a class="" href="{{ route('login') }}">Login</a>
                <a class="" href="{{ route('register') }}">Register</a>
            </div>
        @endif
    </div>

    <nav class="m-[14px] bg-navbar py-[14px] px-5 sm:px-[43px] rounded shadow-inners flex justify-end">
        <div class="hidden sm:block">
            <ul class="flex gap-[30px] justify-end">
                <li>
                    <a class="block @if (Route::is('home')) active @endif font-extrabold" href="{{ route('home') }}">Beranda</a>
                </li>
                <li>
                    <a class="block @if (Route::is('diagnosa.*')) active @endif font-extrabold" href="{{ route('diagnosa.index') }}">Diagnosa</a>
                </li>
                <li>
                    <a class="block @if (Route::is('ciri-fisik.*')) active @endif  font-extrabold" href="{{ route('ciri-fisik.index') }}">ciri fisik</a>
                </li>
                <li>
                    <a class="block @if (Route::is('profile')) active @endif font-extrabold" href="{{ route('profile') }}">profile</a>
                </li>
                <li>
                    <a class="block font-extrabold" href="/dashboard">konsultasi</a>
                </li>
            </ul>
        </div>
        <div class="block sm:hidden">
            <img width="25px" src="{{ asset('img/menu.png') }}" alt="">
        </div>
    </nav>

    <main class="m-[14px]">
        {{ $slot }}
    </main>


    <script src="{{ mix('js/app.js') }}"></script>
</body>
</html>