

<x-app-layout>
    <div class="flex gap-x-2 justify-between">
        <img class="w-1/2 hidden sm:block" src="{{ asset('img/kedelai.png') }}" alt="">
        <div class="bg-navbar-young flex w-full flex-col rounded justify-center  box-border items-center py-10 lg:px-28 px-5 gap-y-5">
            <h1 class="md:text-6xl text-2xl sm:text-2xl font-bold mb-8">Login</h1>
            <x-auth-session-status class="mb-4" :status="session('status')" />

            <!-- Validation Errors -->
            <x-auth-validation-errors class="mb-4" :errors="$errors" />
            <form method="POST" action="{{ route('login') }}" class="flex flex-col gap-y-5 w-full">
                @csrf
                <input type="text" class="bg-input rounded-md border-none text-black font-bold shadow-inners" placeholder="email">
                <input type="password" class="bg-input rounded-md border-none text-black font-bold shadow-inners" placeholder="password">
                <button type="submit" class="px-10 py-2 bg-input rounded-md border-none text-black font-bold shadow-inners">login</button>
            </form>
            <a href="{{ route('daftar') }}" class="text-black font-bold">lupa password?</a>
        </div>
    </div>
</x-app-layout>



