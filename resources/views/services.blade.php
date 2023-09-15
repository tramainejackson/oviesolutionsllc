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
                    <h1 class="display-1 fw-bold text-black">analyse<span class="text-third"
                                                                          style="font-family: 'Bakbak One', cursive;">,</span>
                    </h1>

                    <h1 class="display-1 fw-bold text-black">advise<span class="text-third"
                                                                         style="font-family: 'Bakbak One', cursive;">,</span>
                    </h1>

                    <h1 class="display-1 fw-bold text-black">manage<span class="text-third"
                                                                         style="font-family: 'Bakbak One', cursive;">,</span>
                    </h1>

                    <h1 class="display-1 fw-bold text-black">support<span class="text-third"
                                                                          style="font-family: 'Bakbak One', cursive;">.</span>
                    </h1>
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
                <div class="card bg-third bg-opacity-25 h-100">
                    <div class="card-body">
                        <i class="fas fa-2x fa-diagram-project text-secondary"
                           data-mdb-toggle="animation"
                           data-mdb-animation="jiggle"
                           data-mdb-animation-start="onHover"
                           data-mdb-animation-reset="true"></i>
                        <h4 class="card-title mt-3 mb-2 text-black">Program/Project Management</h4>
                        <p class="card-text">We specialize in getting and keeping you on the right track. We have a
                            structured approach to planning, executing, monitoring and completing a project efficiently
                            and effectively. It involves coordinating various elements, resources, and tasks to achieve
                            specific project objectives with defined constraints such as time, budget, and scope.</p>
                    </div>
                </div>
            </div>
            <div class="col"
                 data-mdb-toggle="animation"
                 data-mdb-animation-show-on-load="false"
                 data-mdb-animation-start="onScroll"
                 data-mdb-animation-delay="500"
                 data-mdb-animation="drop-in">
                <div class="card bg-third bg-opacity-25 h-100">
                    <div class="card-body">
                        <i class="fas fa-2x fa-server text-secondary"
                           data-mdb-toggle="animation"
                           data-mdb-animation="jiggle"
                           data-mdb-animation-start="onHover"
                           data-mdb-animation-reset="true"></i>
                        <h4 class="card-title mt-3 mb-2 text-black">Network Security</h4>
                        <p class="card-text">It's highly important to keep your network protected at all time. Security
                            threats seems to always pop up at the most inopportune times. We use a comprehensive set of
                            measures and practices designed to protect a computer network infrastructure, data, and
                            systems from unauthorized access, cyberattacks, data breaches, and other security
                            threats.</p>
                    </div>
                </div>
            </div>
            <div class="col"
                 data-mdb-toggle="animation"
                 data-mdb-animation-show-on-load="false"
                 data-mdb-animation-start="onScroll"
                 data-mdb-animation-delay="700"
                 data-mdb-animation="drop-in">
                <div class="card bg-third bg-opacity-25 h-100">
                    <div class="card-body">
                        <i class="fas fa-2x fa-tools text-secondary"
                           data-mdb-toggle="animation"
                           data-mdb-animation="jiggle"
                           data-mdb-animation-start="onHover"
                           data-mdb-animation-reset="true"></i>
                        <h4 class="card-title mt-3 mb-2 text-black">Hardware Repair</h4>
                        <p class="card-text">In this day and age, our hardware and devices may be our most important
                            assets. Many of our businesses will struggle if our hardware doesn't function as expected.
                            Our technicians will diagnosis any problem and figure out the best course of action. Whether
                            its disassembling a device or replacing it altogether.</p>
                    </div>
                </div>
            </div>
            <div class="col"
                 data-mdb-toggle="animation"
                 data-mdb-animation-show-on-load="false"
                 data-mdb-animation-start="onScroll"
                 data-mdb-animation-delay="300"
                 data-mdb-animation="drop-in">
                <div class="card bg-third bg-opacity-25 h-100">
                    <div class="card-body">
                        <i class="fas fa-2x fa-tasks text-secondary"
                           data-mdb-toggle="animation"
                           data-mdb-animation="jiggle"
                           data-mdb-animation-start="onHover"
                           data-mdb-animation-reset="true"></i>
                        <h4 class="card-title mt-3 mb-2 text-black">IT Consulting</h4>
                        <p class="card-text">Our experienced IT consultants will work closely with you to understand
                            your business objectives and design strategic technology solutions to support your goals.
                            From IT infrastructure planning and optimization to business process automation, we provide
                            valuable insights and recommendations to help you make informed decisions.</p>
                    </div>
                </div>
            </div>
            <div class="col"
                 data-mdb-toggle="animation"
                 data-mdb-animation-show-on-load="false"
                 data-mdb-animation-start="onScroll"
                 data-mdb-animation-delay="500"
                 data-mdb-animation="drop-in">
                <div class="card bg-third bg-opacity-25 h-100">
                    <div class="card-body">
                        <i class="fas fa-2x fa-database text-secondary"
                           data-mdb-toggle="animation"
                           data-mdb-animation="jiggle"
                           data-mdb-animation-start="onHover"
                           data-mdb-animation-reset="true"></i>
                        <h4 class="card-title mt-3 mb-2 text-black">Database Administration</h4>
                        <p class="card-text">Having a reliable and secure database will always be a high priority for
                            any company. We install and configure databases to meet organization's needs. Including the
                            implementation of strict security measures to protect sensitive data, including user access
                            controls, encryption, and auditing. We make sure the organization's data is accessible,
                            secure and efficiently managed.</p>
                    </div>
                </div>
            </div>
            <div class="col"
                 data-mdb-toggle="animation"
                 data-mdb-animation-show-on-load="false"
                 data-mdb-animation-start="onScroll"
                 data-mdb-animation-delay="700"
                 data-mdb-animation="drop-in">
                <div class="card bg-third bg-opacity-25 h-100">
                    <div class="card-body">
                        <i class="fas fa-2x fa-folder-open text-secondary"
                           data-mdb-toggle="animation"
                           data-mdb-animation="jiggle"
                           data-mdb-animation-start="onHover"
                           data-mdb-animation-reset="true"></i>
                        <h4 class="card-title mt-3 mb-2 text-black">Managed IT Services</h4>
                        <p class="card-text">Take the hassle out of managing your IT systems and focus on what matters
                            most - your business. Our proactive managed IT services ensure that your technology is
                            operating at its best, minimizing downtime, and maximizing productivity. We offer 24/7
                            monitoring, helpdesk support, network management, and comprehensive IT maintenance.</p>
                    </div>
                </div>
            </div>
            <div class="col"
                 data-mdb-toggle="animation"
                 data-mdb-animation-show-on-load="false"
                 data-mdb-animation-start="onScroll"
                 data-mdb-animation-delay="300"
                 data-mdb-animation="drop-in">
                <div class="card bg-third bg-opacity-25 h-100">
                    <div class="card-body">
                        <i class="fas fa-2x fa-cloud text-secondary"
                           data-mdb-toggle="animation"
                           data-mdb-animation="jiggle"
                           data-mdb-animation-start="onHover"
                           data-mdb-animation-reset="true"></i>
                        <h4 class="card-title mt-3 mb-2 text-black">Cloud Computing</h4>
                        <p class="card-text">Leverage the power of the cloud to enhance collaboration, scalability, and
                            efficiency. Our cloud computing solutions enable you to access your data and applications
                            from anywhere, at any time, while ensuring data security and reducing infrastructure costs.
                            We offer cloud migration, architecture design, and ongoing management services.</p>
                    </div>
                </div>
            </div>
            <div class="col"
                 data-mdb-toggle="animation"
                 data-mdb-animation-show-on-load="false"
                 data-mdb-animation-start="onScroll"
                 data-mdb-animation-delay="500"
                 data-mdb-animation="drop-in">
                <div class="card bg-third bg-opacity-25 h-100">
                    <div class="card-body">
                        <i class="fas fa-2x fa-lock text-secondary"
                           data-mdb-toggle="animation"
                           data-mdb-animation="jiggle"
                           data-mdb-animation-start="onHover"
                           data-mdb-animation-reset="true"></i>
                        <h4 class="card-title mt-3 mb-2 text-black">Cybersecurity Solutions</h4>
                        <p class="card-text">Protect your valuable data and secure your business against cyber threats
                            with our robust cybersecurity solutions. We employ industry-leading tools and practices to
                            identify vulnerabilities, implement advanced security measures, conduct regular audits, and
                            provide employee training to mitigate risks and keep your business safe.</p>
                    </div>
                </div>
            </div>
            <div class="col"
                 data-mdb-toggle="animation"
                 data-mdb-animation-show-on-load="false"
                 data-mdb-animation-start="onScroll"
                 data-mdb-animation-delay="700"
                 data-mdb-animation="drop-in">
                <div class="card bg-third bg-opacity-25 h-100">
                    <div class="card-body">
                        <i class="fas fa-2x fa-sim-card text-secondary"
                           data-mdb-toggle="animation"
                           data-mdb-animation="jiggle"
                           data-mdb-animation-start="onHover"
                           data-mdb-animation-reset="true"></i>
                        <h4 class="card-title mt-3 mb-2 text-black">Hardware Recycling</h4>
                        <p class="card-text">Hardware recycling is the process of recovering and reusing old or
                            discarded electronic devices. This process includes: collections, sorting and evaluation,
                            data sanitization, refurbishment, dismantling and component recovery, material recycling,
                            proper disposal, environmental compliance, certification and reporting, and reuse and
                            donation. </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
