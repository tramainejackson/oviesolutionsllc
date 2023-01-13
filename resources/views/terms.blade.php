<x-app-layout>
    <x-slot name="header">
        <div class="col-12 text-center dark-grey-text" id="">
            <!-- Section heading -->
            <h2 class="h2 font-weight-bold mb-4 pb-2 font2">Terms of <span class="font2 text-primary text-uppercase">Service</span></h2>
        </div>
    </x-slot>

    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <div class="px-3">
                    <div class="mx-auto">

                        <h1 class="my-4">Overview</h1>

                        <p class="">This website is operated by Ovie Solutions LLC. Throughout the site, the terms “we”,
                            “us”
                            and
                            “our” refer to Ovie Solutions LLC. Ovie Solutions LLC offers this website, including all
                            information,
                            tools and services available from this site to you, the user, conditioned upon your
                            acceptance of
                            all
                            terms, conditions, policies and notices stated here.

                            By visiting our site and/ or purchasing something from us, you engage in our “Service” and
                            agree to
                            be
                            bound by the following terms and conditions (“Terms of Service”, “Terms”), including those
                            additional
                            terms and conditions and policies referenced herein and/or available by hyperlink. These
                            Terms of
                            Service apply to all users of the site, including without limitation users who are browsers,
                            vendors,
                            customers, merchants, and/ or contributors of content.

                            Please read these Terms of Service carefully before accessing or using our website. By
                            accessing or
                            using any part of the site, you agree to be bound by these Terms of Service. If you do not
                            agree to
                            all
                            the terms and conditions of this agreement, then you may not access the website or use any
                            services.
                            If
                            these Terms of Service are considered an offer, acceptance is expressly limited to these
                            Terms of
                            Service.

                            Any new features or tools which are added to the current store shall also be subject to the
                            Terms of
                            Service. You can review the most current version of the Terms of Service at any time on this
                            page.
                            We
                            reserve the right to update, change or replace any part of these Terms of Service by posting
                            updates
                            and/or changes to our website. It is your responsibility to check this page periodically for
                            changes.
                            Your continued use of or access to the website following the posting of any changes
                            constitutes
                            acceptance of those changes.

                            Our store is hosted on Shopify Inc. They provide us with the online e-commerce platform that
                            allows
                            us
                            to sell our products and services to you.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--Accordion wrapper-->
    <div class="accordion accordion-flush" id="termsAccordion">

        @foreach($all_terms as $term)

            <div class="accordion-item">
                <!-- Header -->
                <h2 class="accordion-header" id="heading{{ $loop->iteration }}">
                    <button
                        class="accordion-button fs-3 {{ $loop->first ?: 'collapsed' }}"
                        type="button"
                        data-mdb-toggle="collapse"
                        data-mdb-target="#collapse{{ $loop->iteration }}"
                        aria-expanded="{{ $loop->first ? 'true' : 'false' }}"
                        aria-controls="collapse{{ $loop->iteration }}">

                        SECTION {{ $loop->iteration }} - {{ $term->title }}

                    </button>
                </h2>

                <!-- Body -->
                <div id="collapse{{ $loop->iteration }}" class="accordion-collapse collapse term_section {{ !$loop->first ?: 'show' }}" aria-labelledby="heading{{ $loop->iteration }}">

                    <div class="accordion-body" id="section{{ $loop->iteration }}">
                        <p class="">{{ $term->term_information }}</p>
                    </div>
                </div>
            </div>
        @endforeach

    </div>
</x-app-layout>
