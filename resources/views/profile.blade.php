<x-app-layout>

    <div class="flex justify-center gap-x-10">
        <div class="bg-navbar-young px-20 py-10 justify-center items-center  shadow-inners rounded">
            <img src="{{ asset('img/profile.png') }}" class="w-[200px]" alt="">
            <h1 class="text-3xl text-center mt-10">{{ Auth::user()->name }}</h1>
        </div>
        <div class="bg-navbar-young px-20 py-10 w-full shadow-inners rounded ml-20">
            <form action="" method="post"  class="flex flex-col gap-y-5 w-full">
                @csrf
                <input type="text" class="bg-input rounded-md border-none text-black font-bold shadow-inners" placeholder="Name" value="{{ Auth::user()->name }}">
                <input type="text" class="bg-input rounded-md border-none text-black font-bold shadow-inners" placeholder="Name" value="{{ Auth::user()->address }}">
                <input type="text" class="bg-input rounded-md border-none text-black font-bold shadow-inners" placeholder="phone" value="{{ Auth::user()->phone }}">
                <input type="text" class="bg-input rounded-md border-none text-black font-bold shadow-inners" placeholder="email" value="{{ Auth::user()->email }}">
                <input type="text" class="bg-input rounded-md border-none text-black font-bold shadow-inners" placeholder="gender" value="{{ Auth::user()->gender }}">
            </form>
        </div>
    </div>
    
</x-app-layout>