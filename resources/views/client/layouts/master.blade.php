
    @include('client.layouts.top_asset')
    <body>
        <!-- top-header -->
        @include('client.layouts.header')
    
        <!-- navigation -->
        @include('client.layouts.menu')
        <!-- //navigation -->
    
        <!-- banner -->
            @yield('banner')
        <!-- //banner -->
    
        <!-- top Products -->
        <div class="ads-grid py-sm-5 py-4">
            <div class="container py-xl-4 py-lg-2">
                @yield('content')
            </div>
        </div>
        <!-- //top products -->
    
        <!-- middle section -->
        {{-- <div class="join-w3l1 py-sm-5 py-4">
            <div class="container py-xl-4 py-lg-2">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="join-agile text-left p-4">
                            <div class="row">
                                <div class="col-sm-7 offer-name">
                                    <h6>Smooth, Rich & Loud Audio</h6>
                                    <h4 class="mt-2 mb-3">Branded Headphones</h4>
                                    <p>Sale up to 25% off all in store</p>
                                </div>
                                <div class="col-sm-5 offerimg-w3l">
                                    <img src="assets/client/images/off1.png" alt="" class="img-fluid">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 mt-lg-0 mt-5">
                        <div class="join-agile text-left p-4">
                            <div class="row ">
                                <div class="col-sm-7 offer-name">
                                    <h6>A Bigger Phone</h6>
                                    <h4 class="mt-2 mb-3">Smart Phones 5</h4>
                                    <p>Free shipping order over $100</p>
                                </div>
                                <div class="col-sm-5 offerimg-w3l">
                                    <img src="assets/client/images/off2.png" alt="" class="img-fluid">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
        <!-- middle section -->
    
        <!-- footer -->
        @include('client.layouts.footer')
        <!-- //footer -->
        <!-- copyright -->
        <div class="copy-right py-3">
            <div class="container">
                <p class="text-center text-white">© 2018 Electro Store. All rights reserved | Design by
                    <a href="http://w3layouts.com"> W3layouts.</a>
                </p>
            </div>
        </div>
        <!-- //copyright -->
    
        <!-- js-files -->
        @include('client.layouts.bottom_asset')
    </body>
    
    </html>