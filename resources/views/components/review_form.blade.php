@section('additional_css')
    <!-- Style For Input Formatting -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('css/style2.min.css')}}">

    <style type="text/css">
        .navbar {
            font-weight: inherit;
        }
    </style>
@endsection

<!-- Testimonial Form -->
<form method="POST" action="{{ route('reviews.store') }}" class="form">
    @csrf

    @empty($survey_id)
        <div class="form-row" id="">
            <div class="col-6">
                <!-- Material input -->
                <div class="md-form">
                    <input name="first_name" type="text" class="form-control" id="" value="{{ old('first_name') }}"
                           placeholder="Enter First Name" {{ $errors->has('first_name') ? 'autofocus' : '' }} />

                    <label for="first_name">First Name</label>

                    @if ($errors->has('first_name'))
                        <span class="text-danger">{{ $errors->first('first_name') }}</span>
                    @endif
                </div>
            </div>

            <div class="col-6">
                <!-- Material input -->
                <div class="md-form">
                    <input name="last_name" type="text" class="form-control" id="" value="{{ old('last_name') }}"
                           placeholder="Enter Last Name" {{ $errors->has('last_name') ? 'autofocus' : '' }} />

                    <label for="last_name">Last Name</label>

                    @if ($errors->has('last_name'))
                        <span class="text-danger">{{ $errors->first('last_name') }}</span>
                    @endif
                </div>
            </div>
        </div>

        <div class="form-row" id="">
            <div class="col-12">
                <!-- Material input -->
                <div class="md-form">
                    <input name="email" type="email" class="form-control" id="" value="{{ old('email') }}"
                           placeholder="Enter Email Address" {{ $errors->has('email') ? 'autofocus' : '' }} />

                    <label for="email">Email Address</label>

                    @if ($errors->has('email'))
                        <span class="text-danger">{{ $errors->first('email') }}</span>
                    @endif
                </div>
            </div>
        </div>
    @endempty

    <div class="form-row" id="">
        <!-- Grid column -->
        <div class="col-12 col-md-6 col-xl-4">
            <!--Blue select-->
            <select name="meet_needs" class="mdb-select md-form">
                <option value="1">Yes</option>
                <option value="0">No</option>
            </select>
            <label class="mdb-main-label" for="meet_needs">Did we meet all your expectations/accounting needs?</label>
            <!--/Blue select-->

            @if ($errors->has('meet_needs'))
                <span class="text-danger">{{ $errors->first('meet_needs') }}</span>
            @endif
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-12 col-md-6 col-xl-4">
            <!--Blue select-->
            <select name="recommend" class="mdb-select md-form">
                <option value="1">Yes</option>
                <option value="0">No</option>
            </select>

            <label class="mdb-main-label" for="recommend">Would you recommend our service to others?</label>
            <!--/Blue select-->

            @if ($errors->has('recommend'))
                <span class="text-danger">{{ $errors->first('recommend') }}</span>
            @endif
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-12 col-xl-4">
            <!-- Material input -->
            <div class="md-form">
                <input name="rating" type="number" class="form-control" id="" step="0.5" min="0" max="5"
                       placeholder="Enter a Number" {{ $errors->has('rating') ? 'autofocus' : '' }} />

                <label for="rating" class="mdb-main-label">Rate us from 1-5? 5 being the best</label>

                @if ($errors->has('rating'))
                    <span class="text-danger">{{ $errors->first('rating') }}</span>
                @endif
            </div>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-12 mb-3">
            <!--Material textarea-->
            <div class="md-form">
                <textarea name="suggestions" id="" class="md-textarea form-control" rows="5"
                          placeholder="Is there anything we could have done differently?">{{ old('suggestions') ? old('suggestions') : '' }}</textarea>

                <label for="suggestions" class="mdb-main-label">Is there anything we could have done
                    differently?</label>

                @if ($errors->has('suggestions'))
                    <span class="text-danger">{{ $errors->first('suggestions') }}</span>
                @endif
            </div>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-12 mb-3">
            <!--Material textarea-->
            <div class="md-form">
                <textarea name="tell_someone" id="" class="md-textarea form-control" rows="5"
                          placeholder="Please provide a review or comment.">{{ old('tell_someone') ? old('tell_someone') : '' }}</textarea>

                <label for="tell_someone" class="mdb-main-label">Please provide a review or comment.</label>

                @if ($errors->has('tell_someone'))
                    <span class="text-danger">{{ $errors->first('tell_someone') }}</span>
                @endif
            </div>
        </div>
        <!-- Grid column -->

        <!-- Hidden Field-->
        <input type="text" name="survey_id" class="hide" value="{{ isset($survey_id) ? $survey_id : null }}" hidden/>

        <!-- Grid column -->
        <div class="col-12 mb-3">
            <button class='btn btn-outline-mdb-color rounded-9' type='submit'>Send Review <i class="fas fa-location-arrow"></i>
            </button>
        </div>
        <!-- Grid column -->
    </div>
</form>
<!-- Testimonial Form -->

@section('additional_scripts')
    <!-- JQuery -->
    <script type="text/javascript" src="{{ asset('js/jquery.min.js')}}"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="{{ asset('js/popper.min.js')}}"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="{{ asset('js/bootstrap.min.js')}}"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="{{ asset('js/mdb.min.js')}}"></script>
    <!-- Additional Scripts Needed For Form -->
    <script type="text/javascript" src="{{ asset('js/myjs.js')}}"></script>
@endsection
