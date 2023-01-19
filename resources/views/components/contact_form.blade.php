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

<!-- Contact Form -->
<form method="POST" action="{{ route('contact_post') }}">
    @csrf

    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="md-form px-4 pt-2 mb-0">
                    <input type="text" id="name" name="name" class="form-control"
                           value="{{ old('name') ? old('name') : '' }}"
                           placeholder="Enter Your Full Name"/>
                    <label for="name" class="active"><span
                            class="border rounded-7 font-small p-1">01</span>&nbsp;
                        What's Your Name?</label>
                </div>

                @if ($errors->has('name'))
                    <p class="red-text">{{ $errors->first('name') }}</p>
                @endif

            </div>

            <div class="col-12">
                <div class="md-form px-4 pt-2 mb-0">
                    <input type="email" id="email" name="email" class="form-control"
                           value="{{ old('email') ? old('email') : '' }}"
                           placeholder="Enter Your Email Address"/>
                    <label for="email" class="active"><span
                            class="border rounded-7 font-small p-1">02</span>&nbsp;
                        What's Your Email Address</label>
                </div>

                @if ($errors->has('email'))
                    <p class="red-text">{{ $errors->first('email') }}</p>
                @endif

            </div>

            <div class="col-12">
                <div class="md-form px-4 pt-2 mb-0">
                    <input type="text" id="phone" name="phone" class="form-control"
                           value="{{ old('phone') ? old('phone') : '' }}"
                           placeholder="Enter Your Phone Number"/>
                    <label for="phone" class="active"><span
                            class="border rounded-7 font-small p-1">03</span>&nbsp;
                        What's Your Phone</label>
                </div>

                @if ($errors->has('phone'))
                    <p class="red-text">{{ $errors->first('phone') }}</p>
                @endif

            </div>

            <div class="col-12">
                <div class="md-form px-4 pt-2 mb-0">
                    <input type="text" id="organization" name="organization" class="form-control"
                           value="{{ old('organization') ? old('organization') : '' }}"
                           placeholder="Enter Your Company/Organization Name"/>
                    <label for="organization" class="active"><span
                            class="border rounded-7 font-small p-1">04</span>&nbsp;
                        What's Your Company/Organization Name</label>
                </div>

                @if ($errors->has('organization'))
                    <p class="red-text">{{ $errors->first('organization') }}</p>
                @endif

            </div>

            <div class="col-12">
                <div class="md-form px-4 pt-2 mb-0">
                    <input type="text" id="reason" name="reason" class="form-control"
                           value="{{ old('reason') ? old('reason') : '' }}"
                           placeholder="Please Type Your Project Description"/>
                    <label for="reason" class="active"><span
                            class="border rounded-7 font-small p-1">05</span>&nbsp;
                        Tell Us About Your Project</label>
                </div>

                @if ($errors->has('reason'))
                    <p class="red-text">{{ $errors->first('reason') }}</p>
                @endif
            </div>

            <div class="col-12 mt-4 text-left">
                <button class='btn btn-outline-mdb-color rounded-9' type='submit'>Send Message <i
                        class="fas fa-location-arrow"></i>
                </button>
            </div>

        </div>
    </div>
</form>
<!-- Contact Form -->
