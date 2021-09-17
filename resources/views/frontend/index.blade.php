@extends('frontend.layouts.app')

@section('title') {{app_name()}} @endsection

@section('content')
    <!-- <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-10 text-center">
                <h1 class="display-1 mb-4">{{app_name()}}</h1>
                <p class="lead text-muted">
                    {!! setting('meta_description') !!}
                </p>

                @include('frontend.includes.messages')
            </div>
        </div>
    </div> -->
        <div>
            <div class="glide">
                <div class="glide__track" data-glide-el="track">
                    <ul class="glide__slides">
                        <li style="background-image: url('https://lumiere-a.akamaihd.net/v1/images/p_shangchi_disneyplus_21155_c1b60b55.jpeg'); background-size: cover; height:500px"  class="glide__slide">
                            <!-- <div></div> -->
                        </li>
                        <li style="background-image: url('https://q7h8x4g8.stackpathcdn.com/wp-content/uploads/2017/07/GettyImages-1225642179-1024x696.jpg'); background-size: cover; height:500px"  class="glide__slide">
                            <!-- <div></div> -->
                        </li>
                        <li style="background-image: url('https://cdn-b.william-reed.com/var/wrbm_gb_hospitality/storage/images/5/9/1/4/844195-1-eng-GB/Sky-Sports-to-exclusively-air-11-Formula-One-races_wrbm_large.jpg'); background-size: cover; height:500px"  class="glide__slide">
                            <!-- <div></div> -->
                        </li>
                        <li style="background-image: url('https://ichef.bbci.co.uk/images/ic/1200x675/p07kfjyp.jpg'); background-size: cover; height:500px"  class="glide__slide">
                            <!-- <div></div> -->
                        </li>
                        <li style="background-image: url('https://d.newsweek.com/en/full/1787416/mitchells-vs-machines.jpg?w=790&f=c9c477d32d90dbd2d7df4b53f722f7bb'); background-size: cover; height:500px"  class="glide__slide">
                            <!-- <div></div> -->
                        </li>

                    </ul>
                </div>
                <div class="glide__arrows" data-glide-el="controls">
                    <button class="glide__arrow glide__arrow--left" data-glide-dir="<">prev</button>
                    <button class="glide__arrow glide__arrow--right" data-glide-dir=">">next</button>
                </div>
            </div>
        </div>

<section class="section section-ld">
    <div class="conatiner">
        <div class="wrap">
            
            <div class="box one">
                <div class="date">
                    <h5>6/29/2020</h5>
                </div>
                <h1>Artemis Fowl</h1>
                <!-- <div class="poster p1">
                    <h4>A</h4>
                </div> -->
            </div>
            
            <div class="box two">
                <div class="date">
                    <h5>6/29/2021</h5>
                </div>
                <H1>Black Adam</H1>
                <div class="poster p2">
                    <!-- <h4> -->
                        <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                            <linearGradient id="SVGID_1_" gradientUnits="userSpaceOnUse" x1="256" y1="514" x2="256" y2="2" gradientTransform="matrix(1 0 0 -1 0 514)">
                                <stop  offset="0" style="stop-color:#2AF598"/>
                                <stop  offset="1" style="stop-color:#009EFD"/>
                            </linearGradient>
                            <path style="fill:url(#SVGID_1_);" d="M256,512c-68.38,0-132.667-26.629-181.02-74.98C26.629,388.667,0,324.38,0,256
                                S26.629,123.333,74.98,74.98C123.333,26.629,187.62,0,256,0s132.667,26.629,181.02,74.98C485.371,123.333,512,187.62,512,256
                                s-26.629,132.667-74.98,181.02C388.667,485.371,324.38,512,256,512z M256,40C136.897,40,40,136.897,40,256s96.897,216,216,216
                                s216-96.897,216-216S375.103,40,256,40z M165,390.562V121.438L399.138,256L165,390.562z M205,190.562v130.877L318.862,256
                                L205,190.562z"/>
                            <g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g>
                        </svg>
                    <!-- </h4> -->
                </div>
            </div>
            
            <div class="box three">
                <div class="date">
                    <h5>6/29/18</h5>
                </div>
                <h1>Anything</h1>
                <!-- <div class="poster p3">
                    <h4>G</h4>
                </div> -->
            </div>
            
            <div class="box five">
                <div class="date">
                    <h5>6/29/18</h5>
                </div>
                <h1>Clash Of Clans</h1>
                <!-- <div class="poster p4">
                    <h4></h4>
                </div> -->
            </div>
            
            <div class="box six">
                <div class="date">
                    <h5>6/29/18</h5>
                </div>
                <h1>Final Round</h1>
                <!-- <div class="poster p5">
                    <h4>N</h4>
                </div> -->
            </div>
            
            <div class="box seven">
                <div class="date">
                    <h5>6/29/18</h5>
                </div>
                <h1>Hotel Translovania</h1>
                <!-- <div class="poster p6">
                    <h4>K</h4>
                </div> -->
            </div>
            
            <div class="box eight">
                <div class="date">
                    <h5>6/29/18</h5>
                </div>
                <h1>Living In Bondage</h1>
                <!-- <div class="poster p7">
                    <h4>Q</h4>
                </div> -->
            </div>
            
            <div class="box nine">
                <div class="date">
                    <h5>6/29/18</h5>
                </div>
                <h1>Gangubai</h1>
                <!-- <div class="poster p8">
                    <h4>L</h4>
                </div> -->
            </div>
            <!-- 
            <div class="box ten">
                <div class="date">
                    <h4>6/29/18</h4>
                </div>
                <h1>AMAZING</h1>
                <div class="poster p9">
                    <h4>J</h4>
                </div>
            </div>
            
            <div class="box eleven">
                <div class="date">
                    <h4>6/29/18</h4>
                </div>
                <h1>LOVE</h1>
                <div class="poster p10">
                    <h4>H</h4>
                </div>
            </div>
            
            <div class="box tlv">
                <div class="date">
                    <h4>6/29/18</h4>
                </div>
                <h1>LEARN</h1>
                <div class="poster p11">
                    <h4>W</h4>
                </div>
            </div>
            
            <div class="box thirteen">
                <div class="date">
                    <h4>6/29/18</h4>
                </div>
                <h1>YEP</h1>
                <div class="poster p12">
                    <h4>S</h4>
                </div>
            </div>
            
            <div class="box ftn">
                <div class="date">
                    <h4>6/29/18</h4>
                </div>
                <h1>SMILE</h1>
                <div class="poster p13">
                    <h4>E</h4>
                </div>
            </div>
            
            <div class="box fith">
                <div class="date">
                    <h4>6/29/18</h4>
                </div>
                <h1>CODE</h1>
                <div class="poster p14">
                    <h4>R</h4>
                </div>
            </div>
            
            <div class="box sith">
                <div class="date">
                    <h4>6/29/18</h4>
                </div>
                <h1>CARDS</h1>
                <div class="poster p15">
                    <h4>U</h4>
                </div>
            </div>
            
            <div class="box sevth">
                <div class="date">
                    <h4>6/29/18</h4>
                </div>
                <h1>FLEXBOX</h1>
                <div class="poster p16">
                    <h4>A</h4>
                </div>
            </div> -->
            
        </div>
    </div>
    
    <div>
            <div class="glide">
                <div class="glide__track" data-glide-el="track">
                    <ul class="glide__slides">
                        <li style="background-image: url('https://lumiere-a.akamaihd.net/v1/images/p_shangchi_disneyplus_21155_c1b60b55.jpeg'); background-size: cover; height:500px"  class="glide__slide">
                            <!-- <div></div> -->
                        </li>
                        <li style="background-image: url('https://q7h8x4g8.stackpathcdn.com/wp-content/uploads/2017/07/GettyImages-1225642179-1024x696.jpg'); background-size: cover; height:500px"  class="glide__slide">
                            <!-- <div></div> -->
                        </li>
                        <li style="background-image: url('https://cdn-b.william-reed.com/var/wrbm_gb_hospitality/storage/images/5/9/1/4/844195-1-eng-GB/Sky-Sports-to-exclusively-air-11-Formula-One-races_wrbm_large.jpg'); background-size: cover; height:500px"  class="glide__slide">
                            <!-- <div></div> -->
                        </li>
                        <li style="background-image: url('https://ichef.bbci.co.uk/images/ic/1200x675/p07kfjyp.jpg'); background-size: cover; height:500px"  class="glide__slide">
                            <!-- <div></div> -->
                        </li>
                        <li style="background-image: url('https://d.newsweek.com/en/full/1787416/mitchells-vs-machines.jpg?w=790&f=c9c477d32d90dbd2d7df4b53f722f7bb'); background-size: cover; height:500px"  class="glide__slide">
                            <!-- <div></div> -->
                        </li>

                    </ul>
                </div>
                <div class="glide__arrows" data-glide-el="controls">
                    <button class="glide__arrow glide__arrow--left" data-glide-dir="<">prev</button>
                    <button class="glide__arrow glide__arrow--right" data-glide-dir=">">next</button>
                </div>
            </div>
        </div>

</section>

@endsection
