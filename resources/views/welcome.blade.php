<x-app-layout>
    <x-slot name="header">
        <!-- Background image -->
        <div class="p-5 mt-n5 text-center bg-image"
             style="background-image: url('/images/server_bgrd.png'); height: 400px;">
            <div class="h-100 d-inline">
                <div class="d-flex justify-content-center align-items-center h-100">
                    <img src="/images/ovie_logo.png"
                         data-mdb-toggle="animation"
                         data-mdb-animation-start="onLoad"
                         data-mdb-animation-reset="false"
                         data-mdb-animation="fade-in-down"
                         data-mdb-animation-duration="3000"
                         class="p-3 rounded-5"
                         width="300"
                         style="background-color: rgba(0, 0, 0, 0.5); position: absolute;"
                    />
                    <img src="/images/ovie_logo.png"
                         data-mdb-toggle="animation"
                         data-mdb-animation-start="onLoad"
                         data-mdb-animation-reset="false"
                         data-mdb-animation="fade-in-up"
                         data-mdb-animation-duration="3000"
                         class="p-3 rounded-5"
                         width="300"
                         style="background-color: rgba(0, 0, 0, 0.5); position: absolute;"
                    />
                </div>
            </div>
        </div>
        <!-- Background image -->
    </x-slot>

    <div id="solution_options" class="container-fluid">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="h1 my-5">We Are The Solution</h1>
            </div>
        </div>

        <div class="row justify-content-center justify-content-lg-evenly">
            <div class="col-lg-2 col-md-4 col-4 d-flex align-items-center justify-content-end">
                <img class="img-fluid h-75" src="{{ asset('/images/home_image_vertical1.png') }}" alt=""/>
            </div>
            <div class="col-lg-3 col-12 col-md-4 d-flex align-items-center justify-content-end">
                <div>
                    <h2 class="">Program/Project Management</h2>
                    <p class>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repellendus praesentium
                        labore accusamus sequi, voluptate debitis tenetur in deleniti possimus modi voluptatum
                        neque maiores dolorem unde? Aut dolorum quod excepturi fugit.</p>
                </div>
            </div>

            <!-- Force next columns to break to new line -->
            <div class="w-100 d-lg-none"></div>

            <div class="col-lg-2 col-4 d-flex align-items-center justify-content-end">
                <img class="img-fluid h-75" src="{{ asset('/images/home_image_vertical2.png') }}" alt=""/>
            </div>
            <div class="col-lg-3 col-12 col-md-4 d-flex align-items-center justify-content-end">
                <div>
                    <h2 class="">Software Support</h2>
                    <p class>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repellendus praesentium
                        labore accusamus sequi, voluptate debitis tenetur in deleniti possimus modi voluptatum
                        neque maiores dolorem unde? Aut dolorum quod excepturi fugit.</p>
                </div>
            </div>
        </div>

        <hr class="hr hr-blurry d-none d-lg-block" />

        <div class="row justify-content-center justify-content-lg-evenly">
            <div class="col-lg-2 col-4 d-flex align-items-center justify-content-end">
                <img class="img-fluid h-75" src="{{ asset('/images/home_image_vertical3.png') }}" alt=""/>
            </div>
            <div class="col-lg-3 col-12 col-md-4 d-flex align-items-center justify-content-end">
                <div>
                    <h2 class="">Hardware Repair</h2>
                    <p class>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repellendus praesentium
                        labore accusamus sequi, voluptate debitis tenetur in deleniti possimus modi voluptatum
                        neque maiores dolorem unde? Aut dolorum quod excepturi fugit.</p>
                </div>
            </div>

            <!-- Force next columns to break to new line -->
            <div class="w-100 d-lg-none"></div>

            <div class="col-lg-2 col-4 d-flex align-items-center justify-content-end">
                <img class="img-fluid h-75" src="{{ asset('/images/home_image_vertical4.png') }}" alt=""/>
            </div>
            <div class="col-lg-3 col-12 col-md-4 d-flex align-items-center justify-content-end">
                <div>
                    <h2 class="">Backup and Disaster Recovery</h2>
                    <p class>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repellendus praesentium
                        labore accusamus sequi, voluptate debitis tenetur in deleniti possimus modi voluptatum
                        neque maiores dolorem unde? Aut dolorum quod excepturi fugit.</p>
                </div>
            </div>
        </div>

        <div>
            <div class="row align-items-center justify-content-center">
                <div class="col my-5 text-center">
                    <a href="{{ route('services') }}" class="btn btn-lg btn-secondary">See All Services</a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
