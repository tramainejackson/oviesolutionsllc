<nav x-data="{ open: false }" class="navbar navbar-light navbar-expand-lg mb-5">
    <!-- Primary Navigation Menu -->
    <!-- Container wrapper -->
    <div class="container-fluid">

        <!-- Toggle button -->
        <button class="navbar-toggler"
                type="button"
                data-mdb-toggle="collapse"
                data-mdb-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent"
                aria-expanded="false"
                aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
        </button>

        <!-- Collapsible wrapper -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Logo -->
            <div class="d-flex flex-column align-items-center ms-3 ms-lg-0">
                <a class="navbar-brand px-lg-2" href="{{ route('welcome') }}">
                    <x-application-logo class="block h-10 w-auto fill-current text-gray-600"/>
                </a>
            </div>

            <!-- Right elements -->
            <div class="d-flex flex-fill flex-column align-items-center justify-content-lg-end flex-lg-row">
                @auth
                    <!-- Navigation Links -->
                    <div class="px-lg-2 my-1 my-lg-0">
                        <div class="container-fluid">
                            <ul class="navbar-nav">
                                <!-- Dropdown -->
                                <li class="dropdown">
                                    <a
                                        class="dropdown-toggle text-primary"
                                        href="#"
                                        id="navbarDropdownMenuLink"
                                        role="button"
                                        data-mdb-toggle="dropdown"
                                        aria-expanded="false"
                                    >Admin</a>

                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                        <li class="my-1">
                                            <x-nav-link :href="route('dashboard')"
                                                        :active="request()->routeIs('dashboard')">
                                                {{ __('Dashboard') }}
                                            </x-nav-link>
                                        </li>
                                        <li class="my-1">
                                            <x-nav-link :href="route('admin_messages')"
                                                        :active="request()->routeIs('admin_messages')">
                                                {{ __('Messages') }}
                                            </x-nav-link>
                                        </li>
                                        <li class="my-1">
                                            <x-nav-link :href="route('admin_reviews')"
                                                        :active="request()->routeIs('admin_reviews')">
                                                {{ __('Reviews') }}
                                            </x-nav-link>
                                        </li>
                                        <li class="my-1">
                                            <x-nav-link :href="route('admin_terms')"
                                                        :active="request()->routeIs('admin_terms')">
                                                {{ __('Terms') }}
                                            </x-nav-link>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                @endauth

                <!-- Navigation Links -->
                <div class="px-lg-2 my-1 my-lg-0">
                    <x-nav-link :href="route('services')" :active="request()->routeIs('services')">
                        {{ __('Services') }}
                    </x-nav-link>
                </div>

                <!-- Navigation Links -->
                <div class="px-lg-2 my-1 my-lg-0">
                    <x-nav-link :href="route('about')" :active="request()->routeIs('about')">
                        {{ __('About') }}
                    </x-nav-link>
                </div>

                <!-- Navigation Links -->
                <div class="px-lg-2 my-1 my-lg-0">
                    <x-nav-link :href="route('contact')" :active="request()->routeIs('contact')">
                        {{ __('Contact') }}
                    </x-nav-link>
                </div>

                <!-- Navigation Links -->
                <div class="px-lg-2 my-1 my-lg-0">
                    <x-nav-link :href="route('reviews.index')" :active="request()->routeIs('reviews.index')">
                        {{ __('Reviews') }}
                    </x-nav-link>
                </div>

                <!-- Navigation Links -->
                <div class="px-lg-2 my-1 my-lg-0">
                    <x-nav-link :href="route('terms')" :active="request()->routeIs('terms')">
                        {{ __('Terms') }}
                    </x-nav-link>
                </div>

                @auth
                    <!-- Navigation Links -->
                    <div class="px-lg-2 my-1 my-lg-0">
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
                    <div class="px-lg-2 my-1 my-lg-0">
                        <x-nav-link :href="route('login')" :active="request()->routeIs('login')">
                            {{ __('Login') }}
                        </x-nav-link>
                    </div>
                @endauth
            </div>
        </div>
    </div>
</nav>
