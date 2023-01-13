<x-app-layout>

    @section('additional_css')
        <!-- Style For Input Formatting -->
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{ asset('css/style2.min.css')}}">

        <style type="text/css">
            .navbar {
                font-weight: inherit;
            }
        </style>
    @endsection

    <x-slot name="header">
        <div class="col-12 text-center dark-grey-text" id="">
            <!-- Section heading -->
            <h2 class="h2 font-weight-bold mb-4 pb-2 font2">Admin <span
                    class="text-primary text-uppercase">Messages</span></h2>
        </div>
    </x-slot>

    <div class="container-fluid my-5" id="admin_messages">

        <div class="row mb-5">

            <div class="col-12 col-md-6 mx-auto text-justify">
                <h3 class="small text-muted text-uppercase">Here you will be able to change some of the website's
                    standard information that show in multiple places such as email address, phone number and
                    address.</h3>
            </div>
        </div>

        <div class="row">

            <div class="col-12">

                <form method="POST" id=settings-form" action="{{ route('login') }}">
                    @csrf

                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12">
                                <h2 class="h2 text-muted text-left text-decoration-underline">Settings</h2>
                            </div>

                            <div class="col-12">
                                <div class="md-form px-4 pt-2 mb-0">
                                    <input type="email" name="email" class="form-control"
                                           value="{{ $setting->email != null ? $setting->email : '' }}"
                                           placeholder="Enter The Email Address"/>
                                    <label for="email" class="active"><span
                                            class="border rounded-7 font-small p-1">01</span>&nbsp;
                                        Email Address</label>
                                </div>

                                @if ($errors->has('email'))
                                    <p class="red-text">{{ $errors->first('email') }}</p>
                                @endif

                            </div>

                            <div class="col-12">
                                <div class="md-form px-4 pt-2 mb-0">
                                    <input type="text" name="phone" class="form-control"
                                           value="{{ $setting->phone != null ? $setting->phone : '' }}"
                                           placeholder="Enter The Phone Number"/>
                                    <label for="phone" class="active"><span
                                            class="border rounded-7 font-small p-1">02</span>&nbsp;
                                        Phone Number</label>
                                </div>

                                @if ($errors->has('phone'))
                                    <p class="red-text">{{ $errors->first('phone') }}</p>
                                @endif

                            </div>

                            <div class="col-12">
                                <div class="md-form px-4 pt-2 mb-0">
                                    <input type="text" name="address" class="form-control"
                                           value="{{ $setting->address != null ? $setting->address : '' }}"
                                           placeholder="Enter The Address"/>
                                    <label for="address" class="active"><span
                                            class="border rounded-7 font-small p-1">03</span>&nbsp;
                                        Address</label>
                                </div>

                                @if ($errors->has('address'))
                                    <p class="red-text">{{ $errors->first('address') }}</p>
                                @endif

                            </div>

                            <div class="col-12 col-md-4">
                                <div class="md-form px-4 pt-2 mb-0">
                                    <input type="text" name="city" class="form-control"
                                           value="{{ $setting->city != null ? $setting->city : '' }}"
                                           placeholder="Enter The City"/>
                                    <label for="city" class="active"><span
                                            class="border rounded-7 font-small p-1">04</span>&nbsp;
                                        City</label>
                                </div>

                                @if ($errors->has('city'))
                                    <p class="red-text">{{ $errors->first('city') }}</p>
                                @endif

                            </div>

                            <div class="col-12 col-md-4">
                                <div class="md-form px-4 pt-2 mb-0">
                                    <input type="text" name="state" class="form-control"
                                           value="{{ $setting->state != null ? $setting->state : '' }}"
                                           placeholder="Enter The State"/>
                                    <label for="state" class="active"><span
                                            class="border rounded-7 font-small p-1">05</span>&nbsp;
                                        State</label>
                                </div>

                                @if ($errors->has('state'))
                                    <p class="red-text">{{ $errors->first('state') }}</p>
                                @endif

                            </div>

                            <div class="col-12 col-md-4">
                                <div class="md-form px-4 pt-2 mb-0">
                                    <input type="number" name="zip" class="form-control"
                                           value="{{ $setting->zip != null ? $setting->zip : '' }}"
                                           placeholder="Enter The Zip Code"/>
                                    <label for="zip" class="active"><span
                                            class="border rounded-7 font-small p-1">06</span>&nbsp;
                                        Zip Code</label>
                                </div>

                                @if ($errors->has('zip'))
                                    <p class="red-text">{{ $errors->first('zip') }}</p>
                                @endif

                            </div>

                            <div class="col-12">
                                <div class="md-form px-4 pt-2 mb-0">
                                    <textarea rows="4" name="mission" class="form-control md-textarea"
                                              placeholder="Enter The Mission Statement">{{ $setting->mission != null ? $setting->mission : '' }}</textarea>
                                    <label for="mission" class="active"><span
                                            class="border rounded-7 font-small p-1">07</span>&nbsp;
                                        Mission Statement</label>
                                </div>

                                @if ($errors->has('mission'))
                                    <p class="red-text">{{ $errors->first('mission') }}</p>
                                @endif

                            </div>

                            <div class="col-12">
                                <div class="md-form px-4 pt-2 mb-0">
                                    <textarea rows="4" name="vision" class="form-control md-textarea"
                                              placeholder="Enter The Company Vision">{{ $setting->vision != null ? $setting->vision : '' }}</textarea>
                                    <label for="vision" class="active"><span
                                            class="border rounded-7 font-small p-1">08</span>&nbsp;
                                        Company Vision</label>
                                </div>

                                @if ($errors->has('vision'))
                                    <p class="red-text">{{ $errors->first('vision') }}</p>
                                @endif

                            </div>

                            <div class="col-12 mt-4 text-left">
                                <a class="btn btn-outline-mdb-color rounded-9"
                                   onclick="document.getElementById('settings-form').submit();">Update Settings&nbsp;&nbsp;<i
                                        class="fas fa-location-arrow"></i></a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>

</x-app-layout>
