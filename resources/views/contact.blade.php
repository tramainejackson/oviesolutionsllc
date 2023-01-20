<x-app-layout>

    <x-slot name="header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-md-9 px-4">
                    <h2 class="display-1 pb-4 font2">Let's work <span class="text-primary text-uppercase">together</span></h2>

                    <div class="pb-4">
                        <p class="my-0 py-0">Let's build ad work together to get it done.</p>
                        <p class="my-0 py-0">Fill out the following form and we will get back to you as soon as
                            possible.</p>
                    </div>
                </div>

                <div class="col-12 col-md-3 align-self-center text-center pb-4">
                    <img src="/images/ovie_logo_v2.png" alt="Ovie Logo" class="img-fluid" height="100px" width="100px"/>
                </div>
            </div>
        </div>
    </x-slot>

    <div class="container-fluid mb-5" id="contact-form">
        <div class="row">
            <div class="col-12 col-md-9">

                @include('components.contact_form')
            </div>

            <div class="col-12 col-md-3 pb-4 pt-5 pt-md-2 px-4 text-left text-md-center">
                <div class="">
                    <h4 class="uppercase">Call Us</h4>

                    <p>{{ $setting->concat_phone() }}</p>
                </div>

                @if($setting->address !== null)
                    <div class="">
                        <h4 class="uppercase">Address</h4>

                        <p>{{ $setting->concat_address() }}</p>
                    </div>
                @endif
            </div>
        </div>
    </div>

</x-app-layout>
