@extends('frontend.layouts.app')

@section('title') {{ __("Tags") }} @endsection

@section('content')

<!-- <section class="section-header bg-primary text-white pb-7 pb-lg-11">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8 text-center">
                <h1 class="display-2 mb-4">
                    {{ __("TV") }}
                </h1>
                <p class="lead">
                    The list of tags.
                </p>

                @include('frontend.includes.messages')
            </div>
        </div>
    </div>
    <div class="pattern bottom"></div>
</section> -->
<section class="">
<!-- <video class="vjs-matrix video-js"> -->
<video
    id="my-video"
    class="video-js  vjs-default-skin"
    controls
    preload="auto"
    width="auto"
    height="600"
    poster="https://deadline.com/wp-content/uploads/2021/09/Nighmare-alley.jpg?w=681&h=383&crop=1"
    data-setup="{
        'liveui': true,
        'aspectRatio':'640:267', 
        'playbackRates': [1, 1.5, 2]
    }"
  >
    <source src="/tv/NightmareAlley.mp4" type="video/mp4" />
    <source src="/tv/NightmareAlley.webm" type="video/webm" />
  </video>
</section>
<!-- <section class="section section-lg line-bottom-light">
    <div class="container mt-n7 mt-lg-n12 z-2">
        <div class="row">
            @foreach ($$module_name as $$module_name_singular)
            @php
            $details_url = route("frontend.$module_name.show",[encode_id($$module_name_singular->id), $$module_name_singular->slug]);
            @endphp
            <div class="col-12 col-md-4 mb-4">
                <div class="card bg-white border-light shadow-soft p-4 rounded">
                    <div class="card-body p-0 pt-4">
                        <a href="{{$details_url}}" class="h3">
                            {{$$module_name_singular->name}}
                        </a>

                        <p class="mb-3">
                            {{$$module_name_singular->description}}
                        </p>
                        <p class="mb-3 font-weight-bold">
                            Total {{$$module_name_singular->posts->count()}} posts.
                        </p>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
        <div class="d-flex justify-content-center w-100 mt-3">
            {{$$module_name->links()}}
        </div>
    </div>
</section> -->

@endsection
