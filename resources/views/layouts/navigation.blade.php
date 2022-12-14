<nav x-data="{ open: false }" class="navbar navbar-light navbar-expand-lg grey lighten-4 mb-5">
    <!-- Primary Navigation Menu -->
    <!-- Container wrapper -->
    <div class="container-fluid">

        <!-- Toggle button -->
        <button class="navbar-toggler" type="button" data-mdb-toggle="collapse"
                data-mdb-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
        </button>

        <!-- Collapsible wrapper -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Logo -->
            <div class="shrink-0 flex items-center">
                <a class="navbar-brand" href="{{ route('welcome') }}">
                    <x-application-logo class="block h-10 w-auto fill-current text-gray-600"/>
                </a>
            </div>

            <!-- Right elements -->
            <div class="d-flex flex-fill justify-content-end">
                @auth
                    <!-- Navigation Links -->
                    <div class="px-2">
                        <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                            {{ __('Dashboard') }}
                        </x-nav-link>
                    </div>
                @endauth

                <!-- Navigation Links -->
                <div class="px-2">
                    <x-nav-link :href="route('services')" :active="request()->routeIs('services')">
                        {{ __('Services') }}
                    </x-nav-link>
                </div>

                <!-- Navigation Links -->
                <div class="px-2">
                    <x-nav-link :href="route('about')" :active="request()->routeIs('about')">
                        {{ __('About') }}
                    </x-nav-link>
                </div>

                <!-- Navigation Links -->
                <div class="px-2">
                    <x-nav-link :href="route('contact')" :active="request()->routeIs('contact')">
                        {{ __('Contact') }}
                    </x-nav-link>
                </div>

                <!-- Navigation Links -->
                <div class="px-2">
                    <x-nav-link :href="route('reviews')" :active="request()->routeIs('reviews')">
                        {{ __('Reviews') }}
                    </x-nav-link>
                </div>

                <!-- Navigation Links -->
                <div class="px-2">
                    <x-nav-link :href="route('terms')" :active="request()->routeIs('terms')">
                        {{ __('Terms') }}
                    </x-nav-link>
                </div>

                @auth
                    <!-- Navigation Links -->
                    <div class="">
                        <x-nav-link :href="route('logout')"
                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </x-nav-link>
                    </div>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                @else
                    <!-- Navigation Links -->
                    <div class="">
                        <x-nav-link :href="route('login')" :active="request()->routeIs('login')">
                            {{ __('Login') }}
                        </x-nav-link>
                    </div>
                @endauth
            </div>
        </div>
    </div>
</nav>
