<x-app-layout>

    <x-slot name="header">
        <div class="col-12 text-center dark-grey-text" id="">
            <!-- Section heading -->
            <h2 class="h2 font-weight-bold mb-4 pb-2 font2">Admin <span
                    class="text-primary text-uppercase">Reviews</span></h2>
        </div>
    </x-slot>

    <div class="container-fluid my-5" id="admin_reviews">

        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-xl-4 mx-auto gy-4">

            @foreach($reviews as $review)
                <div class="col">

                    <!-- Card -->
                    <div class="card h-100">
                        <div class="card-header">
                            <h2 class="h2">{{ $review->full_name() }}</h2>
                        </div>

                        <div class="card-body">

                            <div>
                                <h5 class="card-title d-flex align-items-center justify-content-between{{ $review->count() < 4 ? '': ' flex-xl-column-reverse' }}">
                                    Suggestions</h5>
                                <p class="card-text">{{ $review->suggestions }}</p>
                            </div>

                            <div>
                                <h5 class="card-title d-flex align-items-center justify-content-between{{ $review->count() < 4 ? '': ' flex-xl-column-reverse' }}">
                                    Comment</h5>
                                <p class="card-text">{{ $review->tell_someone }}</p>
                            </div>

                            <!--Ratings-->
                            <div class="" id="">

                                @for($x=0; $x < floor((int)$review->rating); $x++)
                                    <i class="fas fa-star text-blue"> </i>
                                @endfor

                                @if(strlen($review->rating) > 1)
                                    <i class="fas fa-star-half-alt text-blue"> </i>
                                @endif
                            </div>

                        </div>
                        <div class="card-footer text-muted">

                            <h5 class="h5">Show Review?</h5>

                            <div class="btn-group btnGroup{{ $loop->iteration }}" id="review_num_{{ $review->id }}"
                                 role="group">
                                <input type="radio" class="btn-check show_review_btn" name="show_review"
                                       id="option{{ $loop->first ? $loop->iteration : ($loop->iteration *2) - 1 }}"
                                       onclick="radioSwitch(this)"
                                       autocomplete="off" {{ $review->show_review == 1 ? 'checked' : '' }} />
                                <label class="btn {{ $review->show_review == 0 ? 'btn-secondary' : 'btn-success' }}"
                                       for="option{{ $loop->first ? $loop->iteration : ($loop->iteration *2) - 1 }}">Yes</label>

                                <input type="radio" class="btn-check show_review_btn" name="show_review"
                                       id="option{{ $loop->first ? $loop->iteration + 1 : $loop->iteration * 2 }}"
                                       onclick="radioSwitch(this)"
                                       autocomplete="off" {{ $review->show_review == 0 ? 'checked' : '' }} />
                                <label class="btn {{ $review->show_review == 0 ? 'btn-success' : 'btn-secondary' }}"
                                       for="option{{ $loop->first ? $loop->iteration + 1 : $loop->iteration * 2 }}">No</label>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>

    @section('additional_scripts')
        <script type="text/javascript" src="{{ asset('js/myjs.js') }}"></script>
    @endsection

</x-app-layout>
