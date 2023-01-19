<x-app-layout>
    <x-slot name="header">
        <div class="container-fluid my-n5 pb-5 py-sm-5 bg-primary text-white">
            <div class="row px-4">
                <div class="col-12 col-sm-6 col-md-8 pt-lg-5 pt-sm-0 pb-5">
                    <h2 class="h2 pt-5 pt-xl-5 pt-sm-2">Ovie Solutions</h2>
                    <p class="">Ovie Solutions is an IT firm which aims to provide support and expertise to include
                        program/project management, helpdesk support, hardware repair, software support, database
                        administration, backup and disaster recovery, cloud management services, network security, and
                        IT recycling services.</p>
                </div>

                <div class="col-sm-6 col-md-4">
                    <img src="{{ asset('images/anthony3.png') }}" alt="" class="img-fluid"/>
                </div>
            </div>
        </div>
    </x-slot>

    <div class="container-fluid bg-white" id="mission_statement">
        <div class="row">
            <div class="col-12 col-md-8 px-5 py-3 text-secondary">
                <h1 class="">Vision</h1>
                <p class="">{{ $setting->vision }}.</p>
            </div>
            <div class="col-sm-12"></div>
            <div class="col-12 px-5 py-3 text-secondary">
                <h1 class="">Mission</h1>
                <p class="">{{ $setting->mission }}</p>
            </div>
        </div>
    </div>
</x-app-layout>
