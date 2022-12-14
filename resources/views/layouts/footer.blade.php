<!-- Footer -->
<footer class=" text-center text-white" style="background-color:#004280;">
    <!-- Grid container -->
    <div class="container p-4">

        <!-- Section: Text -->
        <section class="mb-4">
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt
                distinctio earum repellat quaerat voluptatibus placeat nam,
                commodi optio pariatur est quia magnam eum harum corrupti dicta,
                aliquam sequi voluptate quas.
            </p>
        </section>
        <!-- Section: Text -->

        <!-- Section: Links -->
        <section class="">
            <!--Grid row-->
            <div class="row">
                <!--Grid column-->
                <div class="col-6 d-flex flex-column align-items-end mb-4 mb-md-0">
                    <h5 class="text-uppercase pe-1">Links</h5>

                    <ul class="list-unstyled mb-0">
                        <li>
                            <div class="">
                                <x-nav-link :href="route('services')" :active="request()->routeIs('services')" style="color:white">
                                    {{ __('Services') }}
                                </x-nav-link>
                            </div>
                        </li>
                        <li>
                            <div class="">
                                <x-nav-link :href="route('terms')" :active="request()->routeIs('terms')" style="color:white">
                                    {{ __('Terms') }}
                                </x-nav-link>
                            </div>
                        </li>
                        <li>
                            <div class="">
                                <x-nav-link :href="route('about')" :active="request()->routeIs('about')" style="color:white">
                                    {{ __('About') }}
                                </x-nav-link>
                            </div>
                        </li>
                    </ul>
                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-6 d-flex flex-column align-items-start mb-4 mb-md-0">
                    <h5 class="text-uppercase ps-1">Links</h5>

                    <ul class="list-unstyled mb-0">
                        @auth
                            <li>
                                <div class="">
                                    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')" style="color:white">
                                        {{ __('Dashboard') }}
                                    </x-nav-link>
                                </div>
                            </li>
                        @endauth

                        <li>
                            <div class="">
                                <x-nav-link :href="route('contact')" :active="request()->routeIs('contact')" style="color:white">
                                    {{ __('Contact') }}
                                </x-nav-link>
                            </div>
                        </li>

                        <li>
                            <div class="">
                                <x-nav-link :href="route('reviews')" :active="request()->routeIs('reviews')" style="color:white">
                                    {{ __('Reviews') }}
                                </x-nav-link>
                            </div>
                        </li>

                        @auth
                            <li>
                                <div class="">
                                    <x-nav-link :href="route('logout')"
                                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();" style="color:white">
                                        {{ __('Logout') }}
                                    </x-nav-link>
                                </div>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                      style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        @else
                            <li>
                                <x-nav-link :href="route('login')" :active="request()->routeIs('login')" style="color:white">
                                    {{ __('Login') }}
                                </x-nav-link>
                            </li>
                        @endauth
                    </ul>
                </div>
                <!--Grid column-->
            </div>
            <!--Grid row-->
        </section>
        <!-- Section: Links -->

    </div>
    <!-- Grid container -->

    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
        © 2020 Copyright:
        <a class="text-white" href="https://tramainejackson.com/"> Tramaine Jackson Tech LLC</a>
    </div>
    <!-- Copyright -->
    <!-- Copyright -->

</footer>
<!-- Footer -->
