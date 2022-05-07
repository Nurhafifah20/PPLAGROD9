

<x-app-layout>
    <div class="container flex gap-x-2 justify-between">
        <img class="w-1/2 hidden sm:block" src="{{ asset('img/kedelai.png') }}" alt="">
        <div class="bg-navbar-young flex w-full flex-col rounded justify-center  box-border items-center py-10 lg:px-28 px-5 gap-y-5">
            <h1 class="md:text-6xl text-2xl sm:text-2xl font-bold mb-8">SIGN UP</h1>
            <form method="POST" action="{{ route('register') }}" class="flex flex-col gap-y-5 w-full">
                @csrf
                <input type="text" class="bg-input rounded-md border-none text-black font-bold shadow-inners" name="name" placeholder="name">
                <input type="text" class="bg-input rounded-md border-none text-black font-bold shadow-inners" name="address" placeholder="alamat">
                <input type="text" class="bg-input rounded-md border-none text-black font-bold shadow-inners" name="phone" placeholder="nomer hp">
                <input type="email" class="bg-input rounded-md border-none text-black font-bold shadow-inners" name="email" placeholder="email">
                <input type="password" class="bg-input rounded-md border-none text-black font-bold shadow-inners" name="password" placeholder="password">
                <input type="text" class="bg-input rounded-md border-none text-black font-bold shadow-inners" name="gender" placeholder="jenis kelamin">
                <button type="submit" class="px-10 py-2 bg-input rounded-md border-none text-black font-bold shadow-inners">Sign Up</button>
            </form>
            
        </div>
    </div>
</x-app-layout>



