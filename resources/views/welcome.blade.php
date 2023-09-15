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
                <h1 class="h1 my-5">At Ovie Solutions, we specialize in delivering comprehensive IT solutions tailored
                    to meet your business needs. With our expertise and dedication to excellence, we help businesses
                    optimize their technology infrastructure and drive growth. Whether you require IT consulting,
                    managed services, cybersecurity solutions, or cloud computing, we have the knowledge and experience
                    to ensure your success.
                </h1>
            </div>
        </div>

        <div class="row justify-content-center justify-content-lg-evenly">
            <div class="col-lg-2 col-md-4 col-4 d-flex align-items-center justify-content-end">
                <img class="img-fluid h-75" src="{{ asset('/images/home_image_vertical1.png') }}" alt=""/>
            </div>
            <div class="col-lg-3 col-12 col-md-4 d-flex align-items-center justify-content-end">
                <div>
                    <h2 class="">Cybersecurity Solutions</h2>
                    <p class>Protect your valuable data and secure your business against cyber threats with our robust
                        cybersecurity solutions. We employ industry-leading tools and practices to identify
                        vulnerabilities, implement advanced security measures, conduct regular audits, and provide
                        employee training to mitigate risks and keep your business safe.</p>
                </div>
            </div>

            <!-- Force next columns to break to new line -->
            <div class="w-100 d-lg-none"></div>

            <div class="col-lg-2 col-4 d-flex align-items-center justify-content-end">
                <img class="img-fluid h-75" src="{{ asset('/images/home_image_vertical2.png') }}" alt=""/>
            </div>
            <div class="col-lg-3 col-12 col-md-4 d-flex align-items-center justify-content-end">
                <div>
                    <h2 class="">Cloud Computing</h2>
                    <p class>Leverage the power of the cloud to enhance collaboration, scalability, and efficiency. Our
                        cloud computing solutions enable you to access your data and applications from anywhere, at any
                        time, while ensuring data security and reducing infrastructure costs. We offer cloud migration,
                        architecture design, and ongoing management services.</p>
                </div>
            </div>
        </div>

        <hr class="hr hr-blurry d-none d-lg-block"/>

        <div class="row justify-content-center justify-content-lg-evenly">
            <div class="col-lg-2 col-4 d-flex align-items-center justify-content-end">
                <img class="img-fluid h-75" src="{{ asset('/images/home_image_vertical3.png') }}" alt=""/>
            </div>
            <div class="col-lg-3 col-12 col-md-4 d-flex align-items-center justify-content-end">
                <div>
                    <h2 class="">IT Consulting</h2>
                    <p class>Our experienced IT consultants will work closely with you to understand your business
                        objectives and design strategic technology solutions to support your goals. From IT
                        infrastructure planning and optimization to business process automation, we provide valuable
                        insights and recommendations to help you make informed decisions.</p>
                </div>
            </div>

            <!-- Force next columns to break to new line -->
            <div class="w-100 d-lg-none"></div>

            <div class="col-lg-2 col-4 d-flex align-items-center justify-content-end">
                <img class="img-fluid h-75" src="{{ asset('/images/home_image_vertical4.png') }}" alt=""/>
            </div>
            <div class="col-lg-3 col-12 col-md-4 d-flex align-items-center justify-content-end">
                <div>
                    <h2 class="">Managed IT Services</h2>
                    <p class>Take the hassle out of managing your IT systems and focus on what matters most - your
                        business. Our proactive managed IT services ensure that your technology is operating at its
                        best, minimizing downtime, and maximizing productivity. We offer 24/7 monitoring, helpdesk
                        support, network management, and comprehensive IT maintenance.</p>
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
