<x-app-layout>
    <div class="bg-navbar-young px-[35px] py-[30px] shadow-inners rounded justify-between flex flex-col gap-x-10">
        @if(session()->has('success'))
            <x-alert-success>
                {{session()->get('success')}}
            </x-alert-success>
        @endif
        <form action="{{ route('ciri-fisik.update')}}" method="post" class="w-full flex flex-col justify-center">
            @csrf
     
            <div class="w-full flex flex-col gap-y-2 mt-3">
                <label for="">nama kedelai</label>
                <input type="text" value="{{ $hasil->nama }}" class="bg-input border-none h-[50px] shadow-inners" name="warna">
            </div>
            <div class="w-full flex flex-col gap-y-2 mt-3">
                <label for="">Kelayakan Kedelai</label>
                <input type="text" value="{{ $hasil->kelayakan }}" class="bg-input border-none h-[50px] shadow-inners" name="bentuk">
            </div>
            <div class="w-full flex flex-col gap-y-2 mt-3">
                <label for="">Kerusakan kedelai</label>
                <input type="text" value="{{ $hasil->kerusakan }}" class="bg-input border-none h-[50px] shadow-inners" name="kerusakan">
            </div>
            <div class="w-full flex flex-col gap-y-2 mt-3">
                <label for="">warna Kedelai</label>
                <input type="text" value="{{ $hasil->warna }}" class="bg-input border-none h-[50px] " name="umur">
            </div>

        </form>
    </div>
</x-app-layout>