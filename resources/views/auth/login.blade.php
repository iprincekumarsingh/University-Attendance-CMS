<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <!-- Primary Meta Tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">

    @include('links/css')

    <!-- NOTICE: You can use the _analytics.html partial to include production code specific code & trackers -->

</head>

<body>

    <!-- NOTICE: You can use the _analytics.html partial to include production code specific code & trackers -->


    <main>

        <!-- Section -->
        <section class="vh-lg-100 mt-5 mt-lg-0 bg-soft d-flex align-items-center">
            <div class="container">

                <div class="row justify-content-center form-bg-image"
                    data-background-lg="assets/img/illustrations/signin.svg">
                    <div class="col-12 d-flex align-items-center justify-content-center">
                        <div class="bg-white shadow border-0 rounded border-light p-4 p-lg-5 w-100 fmxw-500">
                            <div class="text-center text-md-center mb-4 mt-md-0">
                                <h1 class="mb-0 h3">Student Login</h1>
                            </div>
                            <form action="{{ route('login') }}" method="POST" class="mt-4">
                                <!-- Form -->
                                @csrf
                                <div class="form-group mb-4">
                                    <label for="email">Your Registration Number</label>
                                    <div class="input-group">
                                        <span class="input-group-text" id="basic-addon1">
                                            <svg class="icon icon-xs text-gray-600" fill="currentColor"
                                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z">
                                                </path>
                                                <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z">
                                                </path>
                                            </svg>
                                        </span>
                                        <input type="text" class="form-control" name="email" placeholder="21410410XX"
                                            id="email" autofocus required>
                                    </div>
                                </div>
                                <!-- End of Form -->
                                <div class="form-group">
                                    <!-- Form -->
                                    <div class="form-group mb-4">
                                        <label for="password">Your Password</label>
                                        <div class="input-group">
                                            <span class="input-group-text" id="basic-addon2">
                                                <svg class="icon icon-xs text-gray-600" fill="currentColor"
                                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd"
                                                        d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z"
                                                        clip-rule="evenodd"></path>
                                                </svg>
                                            </span>
                                            <input type="password" name="password" placeholder="Password"
                                                class="form-control" id="password" required>
                                        </div>
                                    </div>
                                    <!-- End of Form -->
                                    <div class="d-flex justify-content-between align-items-top mb-4">
                                        <div class="form-check">
                                            {{-- <input class="form-check-input" type="checkbox" value="" id="remember"> --}}
                                            <label class="form-check-label mb-0" for="remember">
                                                {{-- Remember me --}}
                                            </label>
                                        </div>
                                        <div>
                                            @if (Route::has('password.request'))
                                                <a href="{{ route('password.request') }}"
                                                    class="small text-right">Lost
                                                    password?</a>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="d-grid">
                                    <x-jet-button class="btn btn-gray-800">
                                        {{ __('Log in') }}
                                    </x-jet-button>

                                </div>
                            </form>


                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>


</body>

</html>
