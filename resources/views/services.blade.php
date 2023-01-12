<x-app-layout>

    @section('additional_css')
        <style type="text/css">
            .card:hover {
                transform: scale(1.15); /* (150% zoom - Note: if the zoom is too large, it will go outside of the viewport) */
            }
        </style>
    @endsection

    <x-slot name="header">
        <div class="container-fluid">
            <div class="row">
                <div class="offset-3 col-9 offset-md-1 col-md-4 px-4">
                    <h1 class="display-1 fw-bold text-black">analyse<span class="text-third" style="font-family: 'Bakbak One', cursive;">,</span></h1>

                    <h1 class="display-1 fw-bold text-black">advise<span class="text-third" style="font-family: 'Bakbak One', cursive;">,</span></h1>

                    <h1 class="display-1 fw-bold text-black">manage<span class="text-third" style="font-family: 'Bakbak One', cursive;">,</span></h1>

                    <h1 class="display-1 fw-bold text-black">support<span class="text-third" style="font-family: 'Bakbak One', cursive;">.</span></h1>
                </div>

                <div class="col-1 col-md-1 align-self-center text-center pb-4 d-none d-md-block">
                    <div class="vr" style="min-height: 250px;"></div>
                </div>

                <div class="col-6 col-md-6 align-self-center text-center pb-4 d-none d-md-block">
                    <img src="/images/character_computer.png" alt="Character Computer" class="img-fluid"/>
                </div>
            </div>
        </div>
    </x-slot>

    <div class="container-fluid my-5" id="services">

        <div class="row mb-5">
            <div class="col-12 text-center">
                <h4 class="text-secondary m-0">What We Offer</h4>
                <h1 class="text-black">There Is A Host Of Services To Fit Your Needs</h1>
                <h3 class="small">Just tap or click one of the services to see more detailed information.</h3>
            </div>
        </div>

        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-4 mx-md-5">
            <div class="col"
                 data-mdb-toggle="animation"
                 data-mdb-animation-show-on-load="false"
                 data-mdb-animation-start="onScroll"
                 data-mdb-animation-delay="300"
                 data-mdb-animation="drop-in">
                <div class="card bg-third bg-opacity-25">
                    <div class="card-body">
                        <i class="fas fa-2x fa-question text-secondary"
                           data-mdb-toggle="animation"
                           data-mdb-animation="jiggle"
                           data-mdb-animation-start="onHover"
                           data-mdb-animation-reset="true"></i>
                        <h4 class="card-title mt-3 mb-2 text-black">Software Support</h4>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt distinctio
                            earum repellat quaerat voluptatibus placeat nam.</p>
                    </div>
                </div>
            </div>
            <div class="col"
                 data-mdb-toggle="animation"
                 data-mdb-animation-show-on-load="false"
                 data-mdb-animation-start="onScroll"
                 data-mdb-animation-delay="500"
                 data-mdb-animation="drop-in">
                <div class="card bg-third bg-opacity-25">
                    <div class="card-body">
                        <i class="fas fa-2x fa-headset text-secondary"
                           data-mdb-toggle="animation"
                           data-mdb-animation="jiggle"
                           data-mdb-animation-start="onHover"
                           data-mdb-animation-reset="true"></i>
                        <h4 class="card-title mt-3 mb-2 text-black">Helpdesk Support</h4>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt distinctio
                            earum repellat quaerat voluptatibus placeat nam.</p>
                    </div>
                </div>
            </div>
            <div class="col"
                 data-mdb-toggle="animation"
                 data-mdb-animation-show-on-load="false"
                 data-mdb-animation-start="onScroll"
                 data-mdb-animation-delay="700"
                 data-mdb-animation="drop-in">
                <div class="card bg-third bg-opacity-25">
                    <div class="card-body">
                        <i class="fas fa-2x fa-tools text-secondary"
                           data-mdb-toggle="animation"
                           data-mdb-animation="jiggle"
                           data-mdb-animation-start="onHover"
                           data-mdb-animation-reset="true"></i>
                        <h4 class="card-title mt-3 mb-2 text-black">Hardware Repair</h4>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt distinctio
                            earum repellat quaerat voluptatibus placeat nam.</p>
                    </div>
                </div>
            </div>
            <div class="col"
                 data-mdb-toggle="animation"
                 data-mdb-animation-show-on-load="false"
                 data-mdb-animation-start="onScroll"
                 data-mdb-animation-delay="300"
                 data-mdb-animation="drop-in">
                <div class="card bg-third bg-opacity-25">
                    <div class="card-body">
                        <i class="fas fa-2x fa-tasks text-secondary"
                           data-mdb-toggle="animation"
                           data-mdb-animation="jiggle"
                           data-mdb-animation-start="onHover"
                           data-mdb-animation-reset="true"></i>
                        <h4 class="card-title mt-3 mb-2 text-black">Program/Project Management</h4>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt distinctio
                            earum repellat quaerat voluptatibus placeat nam.</p>
                    </div>
                </div>
            </div>
            <div class="col"
                 data-mdb-toggle="animation"
                 data-mdb-animation-show-on-load="false"
                 data-mdb-animation-start="onScroll"
                 data-mdb-animation-delay="500"
                 data-mdb-animation="drop-in">
                <div class="card bg-third bg-opacity-25">
                    <div class="card-body">
                        <i class="fas fa-2x fa-database text-secondary"
                           data-mdb-toggle="animation"
                           data-mdb-animation="jiggle"
                           data-mdb-animation-start="onHover"
                           data-mdb-animation-reset="true"></i>
                        <h4 class="card-title mt-3 mb-2 text-black">Database Administration</h4>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt distinctio
                            earum repellat quaerat voluptatibus placeat nam.</p>
                    </div>
                </div>
            </div>
            <div class="col"
                 data-mdb-toggle="animation"
                 data-mdb-animation-show-on-load="false"
                 data-mdb-animation-start="onScroll"
                 data-mdb-animation-delay="700"
                 data-mdb-animation="drop-in">
                <div class="card bg-third bg-opacity-25">
                    <div class="card-body">
                        <i class="fas fa-2x fa-folder-open text-secondary"
                           data-mdb-toggle="animation"
                           data-mdb-animation="jiggle"
                           data-mdb-animation-start="onHover"
                           data-mdb-animation-reset="true"></i>
                        <h4 class="card-title mt-3 mb-2 text-black">Backup & Disaster Recovery</h4>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt distinctio
                            earum repellat quaerat voluptatibus placeat nam..</p>
                    </div>
                </div>
            </div>
            <div class="col"
                 data-mdb-toggle="animation"
                 data-mdb-animation-show-on-load="false"
                 data-mdb-animation-start="onScroll"
                 data-mdb-animation-delay="300"
                 data-mdb-animation="drop-in">
                <div class="card bg-third bg-opacity-25">
                    <div class="card-body">
                        <i class="fas fa-2x fa-cloud text-secondary"
                           data-mdb-toggle="animation"
                           data-mdb-animation="jiggle"
                           data-mdb-animation-start="onHover"
                           data-mdb-animation-reset="true"></i>
                        <h4 class="card-title mt-3 mb-2 text-black">Cloud Management</h4>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt distinctio
                            earum repellat quaerat voluptatibus placeat nam.</p>
                    </div>
                </div>
            </div>
            <div class="col"
                 data-mdb-toggle="animation"
                 data-mdb-animation-show-on-load="false"
                 data-mdb-animation-start="onScroll"
                 data-mdb-animation-delay="500"
                 data-mdb-animation="drop-in">
                <div class="card bg-third bg-opacity-25">
                    <div class="card-body">
                        <i class="fas fa-2x fa-lock text-secondary"
                           data-mdb-toggle="animation"
                           data-mdb-animation="jiggle"
                           data-mdb-animation-start="onHover"
                           data-mdb-animation-reset="true"></i>
                        <h4 class="card-title mt-3 mb-2 text-black">Network Security</h4>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt distinctio
                            earum repellat quaerat voluptatibus placeat nam.</p>
                    </div>
                </div>
            </div>
            <div class="col"
                 data-mdb-toggle="animation"
                 data-mdb-animation-show-on-load="false"
                 data-mdb-animation-start="onScroll"
                 data-mdb-animation-delay="700"
                 data-mdb-animation="drop-in">
                <div class="card bg-third bg-opacity-25">
                    <div class="card-body">
                        <i class="fas fa-2x fa-server text-secondary"
                           data-mdb-toggle="animation"
                           data-mdb-animation="jiggle"
                           data-mdb-animation-start="onHover"
                           data-mdb-animation-reset="true"></i>
                        <h4 class="card-title mt-3 mb-2 text-black">Hardware Recycling</h4>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt distinctio
                            earum repellat quaerat voluptatibus placeat nam.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
