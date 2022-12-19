<x-app-layout>
    <x-slot name="header">
        <div class="container-fluid my-n5 py-5 bg-primary text-white">
            <div class="row px-4">
                <div class="col-8 pt-5">
                    <h2 class="h2 pt-5">Ovie Solutions</h2>
                    <p class="">Ovie Solutions is an IT firm which aims to provide support and expertise to include
                        program/project management, helpdesk support, hardware repair, software support, database
                        administration, backup and disaster recovery, cloud management services, network security, and
                        IT recycling services.</p>
                </div>

                <div class="col-4">
                    <img src="{{ asset('images/anthony1.png') }}" alt="" class="img-fluid h-100"/>
                </div>
            </div>
        </div>
    </x-slot>

    <div class="container-fluid bg-white" id="mission_statement">
        <div class="row">
            <div class="col-12 px-5 py-3 text-secondary">
                <h1 class="">Vision</h1>
                <p class="">Deliver competent service and superior customer experience.</p>
            </div>
            <div class="col-12 px-5 py-3 text-secondary">
                <h1 class="">Mission</h1>
                <p class="">To provide customer driven business solutions to key problems faced during daily
                    operations</p>
            </div>
        </div>
    </div>
</x-app-layout>
