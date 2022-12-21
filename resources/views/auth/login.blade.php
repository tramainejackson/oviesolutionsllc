<x-app-layout>

    <x-slot name="header"></x-slot>

    <div class="container-fluid vh-100">
        <div class="row" style="height: inherit; margin-top: -3em;">
            <div class="col-1 col-md-3 bg-primary"></div>
            <div class="col-10 col-md-6 d-flex align-items-center justify-content-center flex-column">
                <div class="mt-n5 pb-5">
                    <a href="/">
                        <x-application-logo-v2 class=""/>
                    </a>
                </div>

                <div class="">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <!-- Email Address -->
                        <div class="form-outline my-2">
                            <x-input id="email" class="" type="email" name="email" :value="old('email')" required
                                     autofocus/>

                            <x-label for="email" :value="__('Email')"/>
                        </div>

                        <!-- Password -->
                        <div class="form-outline my-2">
                            <x-input id="password" class=""
                                     type="password"
                                     name="password"
                                     required autocomplete="current-password"/>

                            <x-label for="password" :value="__('Password')"/>
                        </div>

                        <!-- Remember Me -->
                        {{--        <div class="block mt-4">--}}
                        {{--            <label for="remember_me" class="inline-flex items-center">--}}
                        {{--                <input id="remember_me" type="checkbox"--}}
                        {{--                       class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"--}}
                        {{--                       name="remember">--}}
                        {{--                <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>--}}
                        {{--            </label>--}}
                        {{--        </div>--}}

                        <div class="pt-5 text-center">
                            <x-button class="btn-lg bg-third text-white">
                                {{ __('Log in') }}
                            </x-button>
                        </div>

                        <div class="flex items-center justify-end mt-4 text-center">
                            @if (Route::has('password.request'))
                                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                                    {{ __('Forgot your password?') }}
                                </a>
                            @endif
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-1 col-md-3 bg-primary"></div>
        </div>
    </div>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')"/>

    <!-- Validation Errors -->
    <x-auth-validation-errors class="mb-4" :errors="$errors"/>

</x-app-layout>
