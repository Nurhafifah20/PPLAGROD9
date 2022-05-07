

<x-app-layout>
    <div class="bg-navbar-young px-[35px] py-[30px] shadow-inners rounded justify-between flex gap-x-10">
        <img class="w-1/2 hidden sm:block" src="{{ asset('img/kedelai.png') }}" alt="">
        <div class="w-[600px] bg-white py-11 px-8 flex flex-col items-center justify-center">
            <h1 class="font-bold sm:text-6xl text-2xl text-diagnosa">Ciri Fisik</h1>
            <p class="text-center mt-5">yukk !!!</p>
            <p class="text-center">tambahkan data  diagnosa  untuk mengetahui kualitas kedelai  anda</p>
            <a href="{{ route('ciri-fisik.form') }}" class="mt-14 text-white py-5 px-7 font-bold bg-btn rounded-md">Isi Form</a>
            <a href="{{ route('ciri-fisik.list') }}" class="mt-14 text-white py-5 px-7 font-bold bg-btn rounded-md">Daftar ciri fisik</a>
        </div>
    </div>
</x-app-layout>



