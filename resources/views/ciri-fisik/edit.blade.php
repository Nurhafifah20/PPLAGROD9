<x-app-layout>
    <div class="bg-navbar-young px-[35px] py-[30px] shadow-inners rounded justify-between flex flex-col gap-x-10">
        @if(session()->has('success'))
            <x-alert-success>
                {{session()->get('success')}}
            </x-alert-success>
        @endif
        <form action="{{ route('ciri-fisik.update')}}" method="post" class="w-full flex flex-col justify-center">
            @csrf
            <input type="hidden" name="id" value="{{ Auth::user()->id }}">
            <div class="w-full flex flex-col gap-y-2 mt-3">
                <label for="">Warna kedelai</label>
                <input type="text" value="{{ $data->warna }}" class="bg-input border-none h-[50px] shadow-inners" name="warna">
            </div>
            <div class="w-full flex flex-col gap-y-2 mt-3">
                <label for="">Bentuk Kedelai</label>
                <input type="text" value="{{ $data->bentuk }}" class="bg-input border-none h-[50px] shadow-inners" name="bentuk">
            </div>
            <div class="w-full flex flex-col gap-y-2 mt-3">
                <label for="">Kerusakan kedelai</label>
                <input type="text" value="{{ $data->kerusakan }}" class="bg-input border-none h-[50px] shadow-inners" name="kerusakan">
            </div>
            <div class="w-full flex flex-col gap-y-2 mt-3">
                <label for="">Umur Kedelai</label>
                <input type="text" value="{{ $data->umur }}" class="bg-input border-none h-[50px] " name="umur">
            </div>
            <input type="submit" class="py-4 bg-input w-72 mt-5 shadow-inners font-bold text-2xl mx-auto" value="simpan ciri fisik">
        </form>
    </div>
</x-app-layout>