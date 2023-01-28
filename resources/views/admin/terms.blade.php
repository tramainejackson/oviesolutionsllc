<x-app-layout>

    <x-slot name="header">
        <div class="col-12 text-center dark-grey-text" id="">
            <!-- Section heading -->
            <h2 class="h2 font-weight-bold mb-4 pb-2 font2">Admin <span
                    class="text-primary text-uppercase">Terms</span></h2>
        </div>
    </x-slot>

    <div class="container-fluid my-5" id="admin_terms">

        <div class="row mb-5">

            <div class="col-12 col-md-6 mx-auto text-justify">
                <h3 class="text-center small text-muted text-uppercase">Terms and Conditions.</h3>
            </div>
        </div>

        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-xl-4 mx-auto gy-4">

            @foreach($all_terms as $term)
                <div class="col">

                    <!-- Card -->
                    <div class="card h-100">
                        <div class="card-header">
                            <h4 class="h4">{{ $term->title }}</h4>
                        </div>

                        <div class="card-body">

                            <div>
                                <p class="card-text">{{ \Illuminate\Support\Str::of($term->term_information)->limit(150) }}</p>
                            </div>

                        </div>

                        <div class="card-footer text-muted">

                            <h5 class="h5">Show Term/Condition?</h5>

                            <div class="btn-group btnGroup{{ $loop->iteration }}" id="term_num_{{ $term->id }}"
                                 role="group">
                                <input type="radio" class="btn-check show_term_btn" name="show_term"
                                       id="option{{ $loop->first ? $loop->iteration : $loop->iteration * 2 }}"
                                       onclick="radioSwitch(this)"
                                       autocomplete="off" {{ $term->show_term == 1 ? 'checked' : '' }} />
                                <label class="btn {{ $term->show_term == 0 ? 'btn-secondary' : 'btn-success' }}"
                                       for="option{{ $loop->first ? $loop->iteration : $loop->iteration * 2 }}">Yes</label>

                                <input type="radio" class="btn-check show_term_btn" name="show_term"
                                       id="option{{ $loop->first ? $loop->iteration + 1 : ($loop->iteration * 2) - 1 }}"
                                       onclick="radioSwitch(this)"
                                       autocomplete="off" {{ $term->show_term == 0 ? 'checked' : '' }} />
                                <label class="btn {{ $term->show_term == 0 ? 'btn-success' : 'btn-secondary' }}"
                                       for="option{{ $loop->first ? $loop->iteration + 1 : ($loop->iteration * 2) - 1 }}">No</label>
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
