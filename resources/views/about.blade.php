<x-app-layout>
    <x-slot name="header">
        <div class="container-fluid my-n5 pb-5 py-sm-5 bg-primary text-white">
            <div class="row px-4">
                <div class="col-12 col-sm-6 col-md-8 pt-lg-5 pt-sm-0 pb-5 d-flex flex-column justify-content-center justify-content-xl-start justify-content-xxl-center">
                    <div>
                        <h2 class="h2 pt-5 pt-xl-5 pt-sm-2 font2">Ovie Solutions</h2>
                        <p class="">At Ovie Solutions, we are a team of dedicated IT professionals with a passion for
                            delivering exceptional service and driving business success. With over 10 years of
                            experience in
                            the IT industry, we have a broad range of knowledge at our disposal and have built a
                            reputation
                            for our technical expertise, reliable solutions, and customer-centric approach. We believe
                            in
                            building long-term partnerships with our clients and providing personalized support to meet
                            their evolving needs.</p>
                    </div>

                    <div id="carouselExampleCaptions" class="carousel slide" data-mdb-ride="carousel">
                        <div class="carousel-indicators">
                            <button
                                type="button"
                                data-mdb-target="#carouselExampleCaptions"
                                data-mdb-slide-to="0"
                                class="active"
                                aria-current="true"
                                aria-label="Slide 1"
                            ></button>
                            <button
                                type="button"
                                data-mdb-target="#carouselExampleCaptions"
                                data-mdb-slide-to="1"
                                aria-label="Slide 2"
                            ></button>
                            <button
                                type="button"
                                data-mdb-target="#carouselExampleCaptions"
                                data-mdb-slide-to="2"
                                aria-label="Slide 3"
                            ></button>
                            <button
                                type="button"
                                data-mdb-target="#carouselExampleCaptions"
                                data-mdb-slide-to="3"
                                aria-label="Slide 4"
                            ></button>
                            <button
                                type="button"
                                data-mdb-target="#carouselExampleCaptions"
                                data-mdb-slide-to="4"
                                aria-label="Slide 5"
                            ></button>
                        </div>

                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="mx-1 white-text p-3"
                                     style="border-width: 3px; border-style: solid; border-image: linear-gradient(to bottom, #6E204B, dimgray, rgba(0, 0, 0, 0)) 1 100%;">
                                    <h3 class="font2">Experience</h3>
                                    <p>With a proven track record of delivering successful IT
                                        solutions, we bring extensive industry experience to the
                                        table.</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="mx-1 white-text p-3"
                                     style="border-width: 3px; border-style: solid; border-image: linear-gradient(to bottom, #6E204B, dimgray, rgba(0, 0, 0, 0)) 1 100%;">
                                    <h3 class="font2">Expertise</h3>
                                    <p>Our team of certified professionals stays updated with the latest technologies
                                        and best practices to provide cutting-edge solutions.</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="mx-1 white-text p-3"
                                     style="border-width: 3px; border-style: solid; border-image: linear-gradient(to bottom, #6E204B, dimgray, rgba(0, 0, 0, 0)) 1 100%;">
                                    <h3 class="font2">Client-Centric Approach</h3>
                                    <p>We prioritize understanding your unique business requirements and tailor our
                                        solutions accordingly.</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="mx-1 white-text p-3"
                                     style="border-width: 3px; border-style: solid; border-image: linear-gradient(to bottom, #6E204B, dimgray, rgba(0, 0, 0, 0)) 1 100%;">
                                    <h3 class="font2">Timely Support</h3>
                                    <p>We are committed to providing prompt and efficient
                                        support whenever you need it, ensuring minimal
                                        disruptions to your operations.</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="mx-1 white-text p-3"
                                     style="border-width: 3px; border-style: solid; border-image: linear-gradient(to bottom, #6E204B, dimgray, rgba(0, 0, 0, 0)) 1 100%;">
                                    <h3 class="font2">Competitive Pricing</h3>
                                    <p>We offer cost-effective solutions without compromising on quality, maximizing the
                                        value for your investment.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4 align-self-center">
                    <img src="{{ asset('images/anthony3.png') }}" alt="" class="img-fluid float-end" />
                </div>
            </div>
        </div>
    </x-slot>

    <div class="container-fluid bg-white" id="mission_statement">
        <div class="row">
            <div class="col-12 col-md-8 px-5 py-3 text-secondary">
                <h1 class="font2">Vision</h1>
                <p class="">{{ $setting->vision }}.</p>
            </div>
            <div class="col-sm-12"></div>
            <div class="col-12 px-5 py-3 text-secondary">
                <h1 class="font2">Mission</h1>
                <p class="">{{ $setting->mission }}</p>
            </div>
        </div>
    </div>
</x-app-layout>
