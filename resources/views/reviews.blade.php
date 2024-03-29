<x-app-layout>

    <x-slot name="header">
        <div class="col-12 text-center dark-grey-text" id="">
            <!-- Section heading -->
            <h2 class="h2 font-weight-bold mb-4 pb-2 font2">Customer <span
                    class="text-primary text-uppercase">Feedback</span></h2>
        </div>
    </x-slot>

    <div class="container">

        <!--Section: Content-->
        <div class="row">

            @if($get_show_reviews->isNotEmpty() && $get_show_reviews->count() >= 1)

                <div class="col">

                    <section class="text-center dark-grey-text">

                        <!-- Carousel Wrapper -->
                        <div id="reviews_carousel"
                             class="carousel slide carousel-dark" data-mdb-ride="carousel"
                             data-mdb-interval="5000">

                            <!--Slides-->
                            <div class="carousel-inner">

                                @foreach($get_show_reviews as $review)

                                    <!--Slide-->
                                    <div class="carousel-item {{ $loop->first ? 'active' : '' }}">

                                        <div class="testimonial">

                                            <!--Avatar-->
                                            <div class="avatar mx-auto mb-4">
                                                <img
                                                    src="{{ asset('/images/default.png') }}"
                                                    class="rounded-circle img-fluid"
                                                    alt="avatar"
                                                    style="width: 150px;">
                                            </div>
                                            <!--Content-->
                                            <p>
                                                <i class="fas fa-quote-left"></i> {{ $review->tell_someone }}
                                            </p>
                                            <h4 class="font-weight-bold">{{ $review->name }}</h4>

                                            <!--Ratings-->
                                            <div class="" id="">

                                                @for($x=0; $x < floor((int)$review->rating); $x++)
                                                    <i class="fas fa-star blue-text"> </i>
                                                @endfor

                                                @if(strlen($review->rating) > 1)
                                                    <i class="fas fa-star-half-alt blue-text"> </i>
                                                @endif
                                            </div>

                                            <!-- Loop Count -->
                                            <div class="pt-5" id="">
                                                <p class="text-muted">{{ $loop->iteration }}
                                                    / {{ $loop->count }}</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!--Slide-->
                                @endforeach

                            </div>
                            <!--Slides-->

                            <!--Controls-->
                            <button class="carousel-control-prev" data-mdb-target="#reviews_carousel"
                                    type="button"
                                    data-mdb-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" data-mdb-target="#reviews_carousel"
                                    type="button"
                                    data-mdb-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                            <!--Controls-->
                        </div>
                    </section>
                    <!--Section: Content-->
                </div>

            @else

                <div class="col-12 text-center dark-grey-text" id="">
                    <!-- Section heading -->
                    <h1 class="font-weight-bold mb-4 pb-2">We do not currently have any reviews to display. If you would
                        like to leave a review, please fill out the form below.</h1>
                </div>

            @endif

            <div class="col-12 my-5" id="">
                <div class="divider-image" id=""></div>
            </div>
        </div>

        <div class="col-12 my-5" id="">
            <h1 class="h1 text-center py-5">Please Leave A Review</h1>

            @include('components.review_form')
        </div>
        <!--Section: Content-->
    </div>

</x-app-layout>
