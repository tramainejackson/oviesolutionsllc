<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="container-fluid my-5" id="dashboard">

        <div class="row mb-5">

            <div class="col-12 text-center">

                <h4 class="text-secondary m-0">What We Offer</h4>
                <h1 class="text-black">There Is A Host Of Services To Fit Your Needs</h1>
                <h3 class="small">Just tap or click one of the services to see more detailed information.</h3>
            </div>
        </div>

        <div class="row">

            <div class="col-12">

                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12">
                                <div class="md-form px-4 pt-2 mb-0">
                                    <input type="text" id="name" name="name" class="form-control"
                                           value="{{ old('name') ? old('name') : '' }}"
                                           placeholder="Enter Your Full Name"/>
                                    <label for="name" class="active"><span
                                            class="border rounded-7 font-small p-1">01</span>&nbsp;
                                        What's Your Name?</label>
                                </div>

                                @if ($errors->has('name'))
                                    <p class="red-text">{{ $errors->first('name') }}</p>
                                @endif

                            </div>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>
</x-app-layout>
