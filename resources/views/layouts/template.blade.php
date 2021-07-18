<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css"
        integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <link rel="stylesheet" href="{{ asset('/css/digipack-template.css') }}">
    @yield('css')

</head>

<body>

    <nav>
        <div class="container px-lg-2 px-xl-0" style="max-width: 1280px">
            <nav class="navbar navbar-expand-lg navbar-light bg-white">
                <a class="navbar-brand ml-3" href="{{ asset('/') }}">
                    <div class="logo">
                        <img src="{{ asset('img/logo.svg') }}" alt="">
                    </div>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02"
                    aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse justify-content-end mx-auto" id="navbarTogglerDemo02">
                    <ul class="navbar-nav mr-0 mt-2 mt-lg-0 d-flex align-items-center mr-1">
                        <button type="button" class="btn btn-outline-light" style="border-radius: 10px;">
                            <li class="nav-item active">
                                <a class="nav-link" href="{{ asset('product') }}">product</a>
                            </li>
                        </button>

                        <button type="button" class="btn btn-outline-light ml-lg-2" style="border-radius: 10px;">
                            <li class="nav-item active">
                                <a class="nav-link" href="">Portfolio</a>
                            </li>
                        </button>

                        <button type="button" class="btn btn-outline-light ml-lg-1" style="border-radius: 10px;">
                            <li class="nav-item active">
                                <a class="nav-link" href="#">About</a>
                            </li>
                        </button>

                        <button type="button" class="btn btn-outline-light px-1 ml-lg-3" style="border-radius: 10px;">
                            <li class="nav-item active">
                                <a class="nav-link" href="#">Contact</a>
                            </li>
                        </button>

                        <!-- <a class="d-flex justify-content-center px-0" href="">
                            <i
                                class="shop-cart fas fa-shopping-cart d-flex justify-content-center align-items-center"></i>

                            <i class="account fas fa-user-circle d-flex justify-content-center align-items-center"></i>
                        </a> -->

                        <div class="dropdown d-flex flex-row align-items-center py-3">

                            <a href="{{ asset('/shopping-cart/cart-1') }}">
                                <i
                                    class="shop-cart fas fa-shopping-cart d-flex justify-content-center align-items-center"></i></a>

                            <a class="btn dropdown-toggle p-0 d-flex flex-column" href="#" role="button"
                                id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                                <i class="account fas fa-user-circle d-flex justify-content-center align-items-center pr-0">
                                </i>

                                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                    <a class="dropdown-item" href="{{ asset('/member') }}">Login</a>
                                </div>
                            </a>
                        </div>
                    </ul>
                </div>
            </nav>
        </div>
    </nav>


    <main>
        @if (Session::has('message'))
            <div class="alert alert-success" role="alert">
                {{ Session::get('message') }}
            </div>
        @endif
        @yield('content')
    </main>

    <footer>
        <div class="container px-0">
            <div class="row footer-up no-gutters d-flex flex-lg-row">
                <div class="col-12 col-md-4 col-lg-3 col-xl-3 mr-md-5 mr-lg-0 d-flex flex-column">

                    <a class="d-flex justify-content-start align-items-center" href="">
                        <svg class="w-10 h-10 text-white " xmlns="http://www.w3.org/2000/svg" viewBox="0 0 40 40"
                            style="width: 40px; height: 40px;">
                            <defs>
                                <style>
                                    .cls-1 {
                                        fill: #162446;
                                    }

                                    .cls-2 {
                                        fill: #fff;
                                    }
                                </style>
                            </defs>
                            <title>資產 2</title>
                            <g id="圖層_2" data-name="圖層 2">
                                <g id="圖層_1-2" data-name="圖層 1">
                                    <circle class="cls-1" cx="20" cy="20" r="20"></circle>
                                    <path class="cls-2"
                                        d="M20,7l7.13,4.11a7.91,7.91,0,0,1,3.95,6.84v6.8l-8.61-5V18.32l7.37,4.26V18.63a7.89,7.89,0,0,0-3.95-6.85L21.28,9.1V33.25L9,26.14V13.35l5.89,3.4a7.91,7.91,0,0,1,3.95,6.85v4.76l-1.23-.71V24.31a7.92,7.92,0,0,0-4-6.85l-3.42-2v9.94L20,31.11Z">
                                    </path>
                                </g>
                            </g>
                        </svg>
                        <p class="ml-3 mb-0 ">數位方塊</p>
                    </a>
                    <p class="mt-2">Air plant banjo lyft occupy retro<br> adaptogen indego</p>

                </div>

                <div class="col-12 col-md-6 col-lg-9 col-xl-9 ml-md-5 ml-lg-0">
                    <div class="row">
                        <div class="text-center text-md-left col-md-6 col-lg-3">
                            <h2 class="mb-3" style="letter-spacing: 1px;">CATEGORIES</h2>
                            <ul class="mb-lg-5 mb-xl-0">
                                <li>First Link</li>
                                <li>Second Link</li>
                                <li>Third Link</li>
                                <li>Fourth Link</li>
                            </ul>
                        </div>
                        <div class="text-center text-md-left col-md-6 col-lg-3">
                            <h2 class="mb-3" style="letter-spacing: 1px;">CATEGORIES</h2>
                            <ul class="mb-0">
                                <li>First Link</li>
                                <li>Second Link</li>
                                <li>Third Link</li>
                                <li>Fourth Link</li>
                            </ul>
                        </div>
                        <div class="text-center text-md-left col-md-6 col-lg-3">
                            <h2 class="mb-3" style="letter-spacing: 1px;">CATEGORIES</h2>
                            <ul class="mb-0">
                                <li>First Link</li>
                                <li>Second Link</li>
                                <li>Third Link</li>
                                <li>Fourth Link</li>
                            </ul>
                        </div>
                        <div class="text-center text-md-left col-md-6 col-lg-3">
                            <h2 class="mb-3" style="letter-spacing: 1px;">CATEGORIES</h2>
                            <ul class="mb-0">
                                <li>First Link</li>
                                <li>Second Link</li>
                                <li>Third Link</li>
                                <li>Fourth Link</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="footer-down no-gutters">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-6">
                        <p class="mb-0 py-sm-3">© 2020 Tailblocks —<a href="https://twitter.com/knyttneve">
                                @knyttneve</a></p>
                    </div>
                    <div class="col-12 col-sm-6 d-flex justify-content-end">
                        <span>
                            <a href=""><svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24"
                                    style="width: 20px; height: 20px">
                                    <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
                                </svg></a>
                            <a href="">
                                <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    class="w-5 h-5" viewBox="0 0 24 24" style="width: 20px; height: 20px">
                                    <path
                                        d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z">
                                    </path>
                                </svg>
                            </a>
                            <a href="">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24"
                                    style="width: 20px; height: 20px">
                                    <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
                                    <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
                                </svg>
                            </a>
                            <a href="">
                                <svg fill="currentColor" stroke="currentColor" stroke-linecap="round"
                                    stroke-linejoin="round" stroke-width="0" class="w-5 h-5" viewBox="0 0 24 24"
                                    style="width: 20px; height: 20px">
                                    <path stroke="none"
                                        d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z">
                                    </path>
                                    <circle cx="4" cy="4" r="2" stroke="none"></circle>
                                </svg>
                            </a>
                        </span>
                    </div>
                </div>


            </div>

        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"
        integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"
        integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k"
        crossorigin="anonymous"></script>

    <script src="https://unpkg.com/swiper/swiper-bundle.js"></script>

    @yield('js')
    

</body>

</html>
