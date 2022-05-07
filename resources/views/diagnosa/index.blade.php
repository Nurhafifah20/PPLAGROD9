

<x-app-layout>
    <div class="bg-navbar-young px-[35px] py-[30px] shadow-inner rounded justify-between flex gap-x-10">
        <img class="w-1/2 hidden sm:block" src="{{ asset('img/kedelai.png') }}" alt="">
        <div class="w-[600px] bg-white py-11 px-8 flex flex-col items-center justify-center">
            <h1 class="font-bold sm:text-6xl text-2xl text-diagnosa">Diagnosa</h1>
            <p class="text-center mt-5">diagnosa merupakan fitur untuk mengecek kualitas kedelai yang anda punya yukk !!!</p>
            <p class="text-center">tambahkan data  diagnosa  untuk mengetahui kualitas kedelai anda</p>
            <a href="{{ route('diagnosa.list') }}" class="mt-14 text-white py-5 px-7 font-bold bg-btn rounded-md">Tambahkan Data</a>
        </div>
    </div>
</x-app-layout>



