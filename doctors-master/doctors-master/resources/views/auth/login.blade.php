{{-- <x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-jet-checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-jet-button class="ml-4">
                    {{ __('Log in') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
 --}}

@extends('layouts.dashboard.app')

@section('content')
<div class="sign_box">
    <div class="row">
        <div class="col">
            <h2>Sign In To Account</h2>
            <span></span>
            <div class="with_box">
                <a href="#"><i class="fab fa-google"></i></a>
            </div>
            <p>or use your email account</p>

             <form class="form" method="POST" action="{{ route('login') }}">
            @csrf
                <label for="email">Email</label>
                <input type="email" name="email" id="email" type="email" name="email" :value="old('email')" required autofocus required>
                <label for="password">Password</label>
                <input type="password" name="password" id="password" type="password" name="password" required autocomplete="current-password" required>
                <div class="check_line">
                   <div>
                    <input type="checkbox" name="checkbox" id="checkbox">
                    <label for="checkbox">Remember Me</label>
                   </div>
                   <a href="./assets/html/forget_one.html">Forgot Password?</a>
                </div>
                <input type="submit" class="btn sign_in" value="Sign In">
            </form>



        </div>
        <div class="col">
            <div class="content">
                <h2>Hello, Friend!</h2>
                <span></span>
                <p>Fill Your Personal Information and start your journey with us</p>
                <a href="{{ url('register') }}">
                    <input type="button" value="Sign Up" class="signup_btn btn">
                </a>
            </div>
        </div>
    </div>
</div>

@endsection