<x-app-layout>
    <div class="bg-navbar-young px-[35px] py-[30px] shadow-inners rounded justify-between flex flex-col gap-x-10">
        @if(session()->has('success'))
            <x-alert-success>
                {{session()->get('success')}}
            </x-alert-success>
        @endif
        <form action="{{ route('diagnosa.store')}}" method="post" class="w-full flex flex-col justify-center">
            @csrf
            <input type="hidden" name="id" value="{{ $id }}">
            <div class="w-full flex flex-col gap-y-2 mt-3">
                <label for="">Nama Penyakit</label>
                <input type="text" class="bg-input border-none h-[50px] shadow-inners" name="nama">
            </div>
            <div class="w-full flex flex-col gap-y-2 mt-3">
                <label for="">Kerusakan Kedelai</label>
                <input type="text" class="bg-input border-none h-[50px] shadow-inners" name="kerusakan">
            </div>
            <div class="w-full flex flex-col gap-y-2 mt-3">
                <label for="">Kelayakan kedelai</label>
                <input type="text" class="bg-input border-none h-[50px] shadow-inners" name="kelayakan">
            </div>
            <div class="w-full flex flex-col gap-y-2 mt-3">
                <label for="">Warna Kedelai</label>
                <input type="text" class="bg-input border-none h-[50px] " name="warna">
            </div>
            <input type="submit" class="py-4 bg-input w-72 mt-5 shadow-inners font-bold text-2xl mx-auto" value="simpan ciri fisik">
        </form>
    </div>
</x-app-layout>