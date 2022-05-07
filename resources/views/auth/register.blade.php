{{-- <x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-label for="name" :value="__('Name')" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="ml-4">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout> --}}



<x-app-layout>
    <div class="flex gap-x-2 justify-between">
        <img class="w-1/2 hidden sm:block" src="{{ asset('img/kedelai.png') }}" alt="">
        <div class="bg-navbar-young flex w-full flex-col rounded justify-center  box-border items-center py-10 lg:px-28 px-5 gap-y-5">
            <h1 class="md:text-6xl text-2xl sm:text-2xl font-bold mb-8">SIGN UP</h1>
            <form method="POST" action="{{ route('register') }}" class="flex flex-col gap-y-5 w-full">
                    @csrf

                    <!-- Name -->
  
                        <x-input id="name" class="bg-input rounded-md border-none text-black font-bold shadow-inners"  type="text" name="name" :value="old('name')" required autofocus placeholder="name"/>
           


                    <!-- addrees -->
    
                        <x-input id="address" class="bg-input rounded-md border-none text-black font-bold shadow-inners"  type="text" name="address" :value="old('address')" placeholder="address" required />
         
                    <!-- phone -->
     
                        <x-input id="phone" class="bg-input rounded-md border-none text-black font-bold shadow-inners"  type="text" name="phone" :value="old('phone')" placeholder="phone" required />
 
                        <x-input id="gender" class="bg-input rounded-md border-none text-black font-bold shadow-inners"  type="text" name="gender" :value="old('gender')" placeholder="gender" required />
  
                        <x-input id="email" class="bg-input rounded-md border-none text-black font-bold shadow-inners"  type="email" name="email" :value="old('email')" placeholder="email" required />

                        <x-input id="password" class="bg-input rounded-md border-none text-black font-bold shadow-inners" placeholder="password"
                                        type="password"
                                        name="password"
                                        required autocomplete="new-password" />
          

      
                        <x-input id="password_confirmation" class="bg-input rounded-md border-none text-black font-bold shadow-inners" placeholder="confirmasi password"
                                        type="password"
                                        name="password_confirmation" required />
           


                        <x-button class="ml-4">
                            {{ __('Register') }}
                        </x-button>
               
                </form>
            
            </div>
        </div>
    </x-app-layout>
    


{{-- 
<x-app-layout>
    <div class="flex gap-x-2 justify-between">
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
</x-app-layout> --}}
