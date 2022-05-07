{{-- <x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="current-password" />
            </div>

            <!-- Remember Me -->
            <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-button class="ml-3">
                    {{ __('Log in') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout> --}}


<x-app-layout>
    <div class="flex gap-x-2 justify-between">
        <img class="w-1/2 hidden sm:block" src="{{ asset('img/kedelai.png') }}" alt="">
        <div class="bg-navbar-young flex w-full flex-col rounded justify-center  box-border items-center py-10 lg:px-28 px-5 gap-y-5">
            <h1 class="md:text-6xl text-2xl sm:text-2xl font-bold mb-8">Login</h1>
            <x-auth-session-status class="mb-4" :status="session('status')" />

            <!-- Validation Errors -->
            <x-auth-validation-errors class="mb-4" :errors="$errors" />
                            <!-- Session Status -->
                            <x-auth-session-status class="mb-4" :status="session('status')" />

                            <!-- Validation Errors -->
                            <x-auth-validation-errors class="mb-4" :errors="$errors" />
            
                            <form method="POST" action="{{ route('login') }}" class="flex flex-col gap-y-5 w-full">
                                @csrf
            
                                <!-- Email Address -->
            
            
                                    <x-input id="email" class="bg-input rounded-md border-none text-black font-bold shadow-inners" type="email" name="email" :value="old('email')" required autofocus placeholder="Email" />
                            
                                <!-- Password -->

                                    <x-input id="password" class="bg-input rounded-md border-none text-black font-bold shadow-inners" type="password" name="password" required autocomplete="current-password" placeholder="Password" />
                  
            
            

            
                                    <x-button>
                                        {{ __('Log in') }}
                                    </x-button>
                              
                            </form>
            {{-- <form method="POST" action="{{ route('login') }}" class="flex flex-col gap-y-5 w-full">
                @csrf
                <input type="text" class="bg-input rounded-md border-none text-black font-bold shadow-inners" placeholder="email">
                <input type="password" class="bg-input rounded-md border-none text-black font-bold shadow-inners" placeholder="password">
                <button type="submit" class="px-10 py-2 bg-input rounded-md border-none text-black font-bold shadow-inners">login</button>
            </form>
            <a href="{{ route('daftar') }}" class="text-black font-bold">lupa password?</a> --}}
        </div>
    </div>
    {{-- <div class="h-screen flex justify-center">
        <div class="bg-gray-400 w-full mx-40 my-10 py-4 px-5 rounded flex justify-center items-center flex-col">
            <h1 class="text-3xl text-white font-bold mb-5">Login</h1>
            <div class="bg-gray-100 h-full w-full p-10 rounded">
                <!-- Session Status -->
                <x-auth-session-status class="mb-4" :status="session('status')" />

                <!-- Validation Errors -->
                <x-auth-validation-errors class="mb-4" :errors="$errors" />

                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <!-- Email Address -->
                    <div>
                        <x-label for="email" :value="__('Email')" />

                        <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
                    </div>

                    <!-- Password -->
                    <div class="mt-4">
                        <x-label for="password" :value="__('Password')" />

                        <x-input id="password" class="block mt-1 w-full"
                                        type="password"
                                        name="password"
                                        required autocomplete="current-password" />
                    </div>

                    <!-- Remember Me -->
                    <div class="block mt-4">
                        <label for="remember_me" class="inline-flex items-center">
                            <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                            <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                        </label>
                    </div>

                    <div class="flex items-center justify-end mt-4">
                        @if (Route::has('password.request'))
                            <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                                {{ __('Forgot your password?') }}
                            </a>
                        @endif

                        <x-button class="ml-3">
                            {{ __('Log in') }}
                        </x-button>
                    </div>
                </form>
            </div>
        </div>
    </div> --}}


    <script src="{{ mix('js/app.js') }}"></script>
</x-app-layout>
