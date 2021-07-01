@extends('layouts.template')

@section('title', '首頁')

@section('css')
<link rel="stylesheet" href="{{ asset('https://unpkg.com/swiper/swiper-bundle.css') }}" />
<link rel="stylesheet" href="{{ asset('css/digipack-template.css') }}">
<link rel="stylesheet" href="{{ asset('css/digipack-index.css') }}">
@endsection

@section('content')
<div id="swiper" class="swiper-container">
    <div class="swiper-wrapper">
        <div class="swiper-slide">
        </div>
        <div class="swiper-slide">
        </div>
        <div class="swiper-slide">
        </div>
    </div>
    <!-- Add Arrows -->
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
    <div class="swiper-pagination"></div>
</div>

<div class="container px-0 mx-0 mx-auto">
    <div class="section-1">
        <div class="row">
            <div class="col-12 d-flex flex-column justify-content-center align-items-center px-0">
                <h1 class="mb-3">Raw Denim Heirloom Man Braid</h1>
                <p class="col-lg-8 col-xl-6 blue-line text-center">Blue bottle crucifix vinyl post-ironic four
                    dollar toast vegan
                    taxidermy.
                    Gastropub indxgo juice poutine, ramps microdosing banh mi pug.</p>
            </div>
        </div>
        <div class="row d-flex justify-content-center">
            <div class="col-md-4 d-flex flex-column justify-content-center align-items-center">
                <div class="rounded-circle"> <svg fill="none" stroke="currentColor" stroke-linecap="round"
                        stroke-linejoin="round" stroke-width="2" class="w-10 h-10" viewBox="0 0 24 24">
                        <path d="M22 12h-4l-3 9L9 3l-3 9H2"></path>
                    </svg></div>
                <h2 class="mb-3">Shooting Stars</h2>
                <p class="text-center">Blue bottle crucifix vinyl post-ironic four dollar toast vegan taxidermy.
                    Gastropub indxgo
                    juice poutine, ramps microdosing banh mi pug VHS try-hard.</p>
                <a href="">Learn More<i class="fas fa-arrow-right ml-2"></i></a>
            </div>
            <div class="col-md-4 d-flex flex-column justify-content-center align-items-center">
                <div class="rounded-circle"> <svg fill="none" stroke="currentColor" stroke-linecap="round"
                        stroke-linejoin="round" stroke-width="2" class="w-10 h-10" viewBox="0 0 24 24">
                        <circle cx="6" cy="6" r="3"></circle>
                        <circle cx="6" cy="18" r="3"></circle>
                        <path d="M20 4L8.12 15.88M14.47 14.48L20 20M8.12 8.12L12 12"></path>
                    </svg></div>
                <h2 class="mb-3">The Catalyzer</h2>
                <p class="text-center">Blue bottle crucifix vinyl post-ironic four dollar toast vegan taxidermy.
                    Gastropub indxgo juice poutine, ramps microdosing banh mi pug VHS try-hard.</p>
                <a href="">Learn More<i class="fas fa-arrow-right ml-2"></i></a>
            </div>
            <div class="col-md-4 d-flex flex-column justify-content-center align-items-center">
                <div class="rounded-circle"> <svg fill="none" stroke="currentColor" stroke-linecap="round"
                        stroke-linejoin="round" stroke-width="2" class="w-10 h-10" viewBox="0 0 24 24">
                        <path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"></path>
                        <circle cx="12" cy="7" r="4"></circle>
                    </svg></div>
                <h2 class="mb-3">Neptune</h2>
                <p class="text-center">BBlue bottle crucifix vinyl post-ironic four dollar toast vegan
                    taxidermy. Gastropub indxgo juice poutine, ramps microdosing banh mi pug VHS try-hard.</p>
                <a href="">Learn More<i class="fas fa-arrow-right ml-2"></i></a>
            </div>
            <button type="button" class="btn btn-primary mt-5">Button</button>
        </div>

    </div>

    <div class="section-2">
        <div class="row" style="margin-bottom: 80px;">
            <div class="col-12 col-lg-4">
                <h1>Master Cleanse Reliac Heirloom</h1>
            </div>
            <div class="col-12 col-lg-8">
                <p>Whatever cardigan tote bag tumblr hexagon brooklyn asymmetrical gentrify, subway tile poke
                    farm-to-table. Franzen you probably haven't heard of them man bun deep jianbing selfies
                    heirloom.</p>
            </div>
        </div>


        <div class="row no-gutters m-n2">
            <div class="col-6">
                <div class="row no-gutters">
                    <div class="pic col-6"><img src="https://dummyimage.com/500x300" style="width: 100%;" alt=""></div>
                    <div class="pic col-6"><img src="https://dummyimage.com/500x300" style="width: 100%;" alt=""></div>
                    <div class="pic col-12"><img src="https://dummyimage.com/600x360" style="width: 100%;" alt=""></div>
                </div>


            </div>

            <div class="col-6">
                <div class="row no-gutters">

                    <div class="pic col-6 order-2"><img src="https://dummyimage.com/500x300" style="width: 100%;"
                            alt=""></div>
                    <div class="pic col-6 order-2"><img src="https://dummyimage.com/500x300" style="width: 100%;"
                            alt=""></div>
                    <div class="pic col-12 order-1"><img src="https://dummyimage.com/600x360" style="width: 100%;"
                            alt=""></div>

                </div>
            </div>
        </div>


    </div>

    <div class="section-3">

        <div class="container">
            <h1>Pricing</h1>
            <p>Banh mi cornhole echo park skateboard authentic crucifix neutra tilde lyft biodiesel artisan
                direct trade mumblecore 3 wolf moon twee</p>

            <table class="table mx-auto mb-0">
                <thead class="thead-light" style="font-size: 14px;">
                    <tr>
                        <th scope="col">Plan</th>
                        <th scope="col">Speed</th>
                        <th scope="col">Storage</th>
                        <th scope="col">Price</th>
                        <th scope="col" style="width:40px; height: 44px;"></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">Start</th>
                        <td>5 Mb/s</td>
                        <td>15 GB</td>
                        <td style="font-size: 18px;">Free</td>
                        <td><input name="plan" type="radio"></td>
                    </tr>
                    <tr>
                        <th scope="row">Pro</th>
                        <td>25 Mb/s</td>
                        <td>25 GB</td>
                        <td style="font-size: 18px;">$24</td>
                        <td><input name="plan" type="radio"></td>
                    </tr>
                    <tr>
                        <th scope="row">Business</th>
                        <td>36 Mb/s</td>
                        <td>40 GB</td>
                        <td style="font-size: 18px;">$50</td>
                        <td><input name="plan" type="radio"></td>
                    </tr>
                    <tr>
                        <th scope="row">Exclusive</th>
                        <td>48 Mb/s</td>
                        <td>120 GB</td>
                        <td style="font-size: 18px;">$72</td>
                        <td><input name="plan" type="radio"></td>
                    </tr>
                </tbody>
            </table>
            <hr class="w-100 my-0 mb-3">

            <div class="table-bottomd d-flex justify-content-between align-items-center pl-3">
                <a href="">Learn More<i class="fas fa-arrow-right ml-2"></i></a>
                <button type="button" class="btn btn-primary mt-0" style="width:100px; height:40px;">Button</button>
            </div>


        </div>



    </div>

    <div class="section-4">
        <div class="row no-gutters" style="margin-bottom: 80px; ">
            <div class="col-12 col-lg-6">
                <h1 class="blue-line">Pitchfork Kickstarter Taxidermy</h1>
            </div>
            <div class="col-12 col-lg-6">
                <p class="mt-lg-0 mt-4">Whatever cardigan tote bag tumblr hexagon brooklyn asymmetrical
                    gentrify, subway tile poke
                    farm-to-table. Franzen you probably haven't heard of them man bun deep jianbing selfies
                    heirloom prism food truck ugh squid celiac humblebrag.</p>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12 col-md-6 col-xl-3 p-3">
                <div class="card p-4">
                    <img src="https://dummyimage.com/720x400" class="card-img-top mb-4" alt="...">
                    <div class="card-body p-0">
                        <p class="card-text m-0"><small class="text-muted">SUBTITLE</small></p>
                        <h5 class="card-title">Chichen Itza</h5>
                        <p class="card-text">Fingerstache flexitarian street art 8-bit waistcoat. Distillery
                            hexagon disrupt edison bulbche.</p>
                    </div>
                </div>

            </div>
            <div class="col-sm-12 col-md-6 col-xl-3 p-3">
                <div class="card p-4">
                    <img src="https://dummyimage.com/720x400" class="card-img-top mb-4" alt="...">
                    <div class="card-body p-0">
                        <p class="card-text m-0"><small class="text-muted">SUBTITLE</small></p>
                        <h5 class="card-title">Chichen Itza</h5>
                        <p class="card-text">Fingerstache flexitarian street art 8-bit waistcoat. Distillery
                            hexagon disrupt edison bulbche.</p>
                    </div>
                </div>

            </div>
            <div class="col-sm-12 col-md-6 col-xl-3 p-3">
                <div class="card p-4">
                    <img src="https://dummyimage.com/720x400" class="card-img-top mb-4" alt="...">
                    <div class="card-body p-0">
                        <p class="card-text m-0"><small class="text-muted">SUBTITLE</small></p>
                        <h5 class="card-title">Chichen Itza</h5>
                        <p class="card-text">Fingerstache flexitarian street art 8-bit waistcoat. Distillery
                            hexagon disrupt edison bulbche.</p>
                    </div>
                </div>

            </div>
            <div class="col-sm-12 col-md-6 col-xl-3 p-3">
                <div class="card p-4">
                    <img src="https://dummyimage.com/720x400" class="card-img-top mb-4" alt="...">
                    <div class="card-body p-0">
                        <p class="card-text m-0"><small class="text-muted">SUBTITLE</small></p>
                        <h5 class="card-title">Chichen Itza</h5>
                        <p class="card-text">Fingerstache flexitarian street art 8-bit waistcoat. Distillery
                            hexagon disrupt edison bulbche.</p>
                    </div>
                </div>

            </div>

        </div>
    </div>

    <div class="section-5">
        <div class="row no-gutters">
            <div class="col-12 d-flex justify-content-center col-md-3 justify-content-md-start">
                <div class="rounded-circle"> <svg fill="none" stroke="currentColor" stroke-linecap="round"
                        stroke-linejoin="round" stroke-width="2" class="w-10 h-10" viewBox="0 0 24 24">
                        <path d="M22 12h-4l-3 9L9 3l-3 9H2"></path>
                    </svg></div>
            </div>

            <div class="col-12 col-md-9">
                <h2>Shooting Stars</h2>
                <p>Blue bottle crucifix vinyl post-ironic four dollar toast vegan taxidermy.
                    Gastropub indxgo
                    juice poutine, ramps microdosing banh mi pug VHS try-hard.</p>
                <a href="">Learn More<i class="fas fa-arrow-right ml-2 mt-1"></i></a>
            </div>
            <hr class="w-100 mt-5 mb-0">
        </div>

        <div class="row no-gutters">
            <div class="col-12 d-flex justify-content-center col-md-3 order-md-2 justify-content-md-end">
                <div class="rounded-circle"> <svg fill="none" stroke="currentColor" stroke-linecap="round"
                        stroke-linejoin="round" stroke-width="2" class="w-10 h-10" viewBox="0 0 24 24">
                        <circle cx="6" cy="6" r="3"></circle>
                        <circle cx="6" cy="18" r="3"></circle>
                        <path d="M20 4L8.12 15.88M14.47 14.48L20 20M8.12 8.12L12 12"></path>
                    </svg></div>
            </div>
            <div class="col-12 col-md-9 order-md-1">
                <h2>Shooting Stars</h2>
                <p>Blue bottle crucifix vinyl post-ironic four dollar toast vegan taxidermy.
                    Gastropub indxgo
                    juice poutine, ramps microdosing banh mi pug VHS try-hard.</p>
                <a href="">Learn More<i class="fas fa-arrow-right ml-2 mt-1"></i></a>
            </div>
            <hr class="w-100 mt-5 mb-0 order-md-3">
        </div>
        <div class="row no-gutters">
            <div class="col-12 d-flex justify-content-center col-md-3 justify-content-md-start">
                <div class="rounded-circle"> <svg fill="none" stroke="currentColor" stroke-linecap="round"
                        stroke-linejoin="round" stroke-width="2" class="w-10 h-10" viewBox="0 0 24 24">
                        <path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"></path>
                        <circle cx="12" cy="7" r="4"></circle>
                    </svg></div>
            </div>
            <div class="col-12 col-md-9">
                <h2>Shooting Stars</h2>
                <p>Blue bottle crucifix vinyl post-ironic four dollar toast vegan taxidermy.
                    Gastropub indxgo
                    juice poutine, ramps microdosing banh mi pug VHS try-hard.</p>
                <a href="">Learn More<i class="fas fa-arrow-right ml-2 mt-1"></i></a>
            </div>

        </div>

        <div class="button d-flex justify-content-center"> <button type="button"
                class="btn btn-primary mt-5">Button</button></div>

    </div>
</div>

<div class="section-6">
    <div class="container px-0">
        <div class="row no-gutters">
            <div class="col-12 col-lg-6">
                <img src="https://dummyimage.com/400x400" alt="" style="width: 100%;">
            </div>
            <div class="col-12 col-lg-6 py-lg-3 pl-lg-5 mt-lg-0 mt-4">
                <h2>BRAND NAME</h2>
                <h1>The Catcher in the Rye</h1>
                <div class="review p-0 no-gutters mb-3">
                    <div class="d-flex justify-content-start align-items-center">
                        <svg class="star" fill="currentColor" stroke="currentColor" stroke-linecap="round"
                            stroke-linejoin="round" stroke-width="2" class="w-4 h-4 text-indigo-500"
                            viewBox="0 0 24 24">
                            <path
                                d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z">
                            </path>
                        </svg>
                        <svg class="star" fill="currentColor" stroke="currentColor" stroke-linecap="round"
                            stroke-linejoin="round" stroke-width="2" class="w-4 h-4 text-indigo-500"
                            viewBox="0 0 24 24">
                            <path
                                d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z">
                            </path>
                        </svg>
                        <svg class="star" fill="currentColor" stroke="currentColor" stroke-linecap="round"
                            stroke-linejoin="round" stroke-width="2" class="w-4 h-4 text-indigo-500"
                            viewBox="0 0 24 24">
                            <path
                                d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z">
                            </path>
                        </svg>
                        <svg class="star" fill="currentColor" stroke="currentColor" stroke-linecap="round"
                            stroke-linejoin="round" stroke-width="2" class="w-4 h-4 text-indigo-500"
                            viewBox="0 0 24 24">
                            <path
                                d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z">
                            </path>
                        </svg>
                        <svg class="star" fill="none" stroke="currentColor" stroke-linecap="round"
                            stroke-linejoin="round" stroke-width="2" class="w-4 h-4 text-indigo-500"
                            viewBox="0 0 24 24">
                            <path
                                d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z">
                            </path>
                        </svg>

                        <span>4 Reviews</span>

                        <a href="">
                            <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                class="facebook w-5 h-5" viewBox="0 0 24 24">
                                <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
                            </svg>
                        </a>
                        <a href="">
                            <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                class="w-5 h-5" viewBox="0 0 24 24">
                                <path
                                    d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z">
                                </path>
                            </svg>
                        </a>
                        <a href="">
                            <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                class="w-5 h-5" viewBox="0 0 24 24">
                                <path
                                    d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z">
                                </path>
                            </svg>
                        </a>
                    </div>


                </div>
                <p>Fam locavore kickstarter distillery. Mixtape chillwave tumeric sriracha taximy chia
                    microdosing tilde DIY. XOXO fam indxgo juiceramps cornhole raw denim forage brooklyn.
                    Everyday carry +1 seitan poutine tumeric. Gastropub blue bottle austin listicle pour-over,
                    neutra jean shorts keytar banjo tattooed umami cardigan.</p>
                <div class="p-0 d-flex flex-row align-items-center">
                    <div class="color">
                        <span class="mr-1">Color</span>
                        <div class="btn-group btn-group-toggle" data-toggle="buttons">
                            <label class="btn btn-secondary active white rounded-circle">
                                <input type="radio" name="options" id="option1" autocomplete="off" checked>
                            </label>
                            <label class="btn btn-secondary black rounded-circle">
                                <input type="radio" name="options" id="option2" autocomplete="off">
                            </label>
                            <label class="btn btn-secondary blue rounded-circle">
                                <input type="radio" name="options" id="option3" autocomplete="off">
                            </label>
                        </div>

                    </div>
                    <div class="size d-flex flex-row align-items-center">
                        <span class="ml-3">Size</span>
                        <div class="size-select">
                            <select
                                class="ml-3 rounded border appearance-none border-gray-300 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-200 focus:border-indigo-500 text-base pl-3 pr-10"
                                style="width: 80px;height: 42px;">
                                <option>SM</option>
                                <option>M</option>
                                <option>L</option>
                                <option>XL</option>
                            </select>
                        </div>
                    </div>
                </div>

                <hr>

                <div class="price d-flex align-items-center justify-content-between">
                    <span>$58.00</span>

                    <div class="btn-group d-flex align-items-center">
                        <div class="button d-flex justify-content-center rounded"> <button type="button"
                                class="btn btn-primary mt-0" style="width: 100px;height: 40px;">Button</button>
                        </div>

                        <button class="rounded-circle ml-3" style="width:40px; height:40px; border: 0;"><svg
                                fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                class="w-5 h-5" viewBox="0 0 24 24" style="width:20px; height:20px;">
                                <path
                                    d="M20.84 4.61a5.5 5.5 0 00-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 00-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 000-7.78z">
                                </path>
                            </svg></button>
                    </div>


                </div>
            </div>
        </div>
    </div>
</div>

<div class="section-7">
    <div class="container">
        <div class="row no-gutters ">

            {{-- @foreach ($products as $product)
                <div class="col-12 col-md-6 col-lg-3 p-3">
                    <a href="">
                        <div class="img">{{ $product->photo }}</div>
        <img class="rounded" src="https://dummyimage.com/425x265" alt="" style="width: 100%; height: 12rem">
        </a>
        <div class="mt-3">
            <h3>{{ $product->type->type_name }}</h3>
            <h2>{{ $product->product_name }}</h2>
            <p class="mt-1 mb-0">{{ $product->price }}</p>
        </div>
    </div>
    @endforeach --}}
    <div class="col-12 col-md-6 col-lg-3 p-3">
        <a href="">
            <img class="rounded" src="https://dummyimage.com/425x265" alt="" style="width: 100%; height: 12rem">
        </a>
        <div class="mt-3">
            <h3>CATEGORY</h3>
            <h2>The Catalyzer</h2>
            <p class="mt-1 mb-0">$16.00</p>
        </div>
    </div>

    <div class="col-12 col-md-6 col-lg-3 p-3">
        <a href="">
            <img class="rounded" src="https://dummyimage.com/425x265" alt="" style="width: 100%; height: 12rem">
        </a>
        <div class="mt-3">
            <h3>CATEGORY</h3>
            <h2>The Catalyzer</h2>
            <p class="mt-1 mb-0">$16.00</p>
        </div>
    </div>

    <div class="col-12 col-md-6 col-lg-3 p-3">
        <a href="">
            <img class="rounded" src="https://dummyimage.com/425x265" alt="" style="width: 100%; height: 12rem">
        </a>
        <div class="mt-3">
            <h3>CATEGORY</h3>
            <h2>The Catalyzer</h2>
            <p class="mt-1 mb-0">$16.00</p>
        </div>
    </div>

    <div class="col-12 col-md-6 col-lg-3 p-3">
        <a href="">
            <img class="rounded" src="https://dummyimage.com/425x265" alt="" style="width: 100%; height: 12rem">
        </a>
        <div class="mt-3">
            <h3>CATEGORY</h3>
            <h2>The Catalyzer</h2>
            <p class="mt-1 mb-0">$16.00</p>
        </div>
    </div>


</div>
<div class="row no-gutters ">
    <div class="col-12 col-md-6 col-lg-3 p-3">
        <a href="">
            <img class="rounded" src="https://dummyimage.com/425x265" alt="" style="width: 100%; height: 12rem">
        </a>
        <div class="mt-3">
            <h3>CATEGORY</h3>
            <h2>The Catalyzer</h2>
            <p class="mt-1 mb-0">$16.00</p>
        </div>
    </div>

    <div class="col-12 col-md-6 col-lg-3 p-3">
        <a href="">
            <img class="rounded" src="https://dummyimage.com/425x265" alt="" style="width: 100%; height: 12rem">
        </a>
        <div class="mt-3">
            <h3>CATEGORY</h3>
            <h2>The Catalyzer</h2>
            <p class="mt-1 mb-0">$16.00</p>
        </div>
    </div>

    <div class="col-12 col-md-6 col-lg-3 p-3">
        <a href="">
            <img class="rounded" src="https://dummyimage.com/425x265" alt="" style="width: 100%; height: 12rem">
        </a>
        <div class="mt-3">
            <h3>CATEGORY</h3>
            <h2>The Catalyzer</h2>
            <p class="mt-1 mb-0">$16.00</p>
        </div>
    </div>

    <div class="col-12 col-md-6 col-lg-3 p-3">
        <a href="">
            <img class="rounded" src="https://dummyimage.com/425x265" alt="" style="width: 100%; height: 12rem">
        </a>
        <div class="mt-3">
            <h3>CATEGORY</h3>
            <h2>The Catalyzer</h2>
            <p class="mt-1 mb-0">$16.00</p>
        </div>
    </div>


</div>

</div>
</div>

<div class="section-8 position-relative">
    <div class="position-absolute fixed-top" style="width: 100%; height: 100%;">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d8651.958828751922!2d120.71984214883342!3d24.252248919523726!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x34691a3d81132aa9%3A0xf0101d452f6d9c9f!2zNDIw5Y-w5Lit5biC6LGQ5Y6f5Y2A!5e0!3m2!1szh-TW!2stw!4v1619622464337!5m2!1szh-TW!2stw"
            marginheight="0" marginwidth="0" title="map" scrolling="no" style="width: 100%; height: 100%;border:0;"
            allowfullscreen="" loading="lazy"></iframe>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-0 col-lg-6 col-xl-8"></div>
            <div class="col-md-12 col-lg-6 col-xl-4 d-flex flex-column p-4">
                <form id="contact-form" name="contact-form" action="/contactus/send" method="POST">
                    <h2 class="mb-1">Feedback</h2>
                    <p class="mb-4">Post-ironic portland shabby chic echo park, banjo fashion axe</p>
                    <div class="name d-flex flex-column">
                        <label for="name">Name</label>
                        <input type="text" id="name" name="name" class="px-3 py-1 mb-4 rounded">
                    </div>
                    <div class="email d-flex flex-column">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" class="px-3 py-1 mb-4 rounded">
                    </div>
                    <div class="Title d-flex flex-column">
                        <label for="Title">Title</label>
                        <input type="text" id="title" name="title" class="px-3 py-1 mb-4 rounded">
                    </div>
                    <div class="message d-flex flex-column">
                        <label for="message">Message</label>
                        <textarea name="message" id="message" cols="20" rows="5" class="px-3 py-1 mb-4"></textarea>
                    </div>
                    <div class="button d-flex justify-content-center"> <button type="submit"
                            class="btn btn-primary mt-0">Button</button></div>
                    <p class="mt-2">Chicharrones blog helvetica normcore iceland tousled brook viral artisan.</p>
                </form>

            </div>
        </div>
    </div>
</div>

@endsection


@section('js')

<script>
    var swiper = new Swiper('#swiper', {
    // autoplay:{
    //     delay: 500,
    // },

    loop: true,

    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
    pagination: {
        el: '.swiper-pagination',
    },
});

</script>

@endsection