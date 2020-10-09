@extends('layouts.app')

@section('title', 'Live Streaming')


@section('content')
    <link type="text/css" rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">

    <style>
        /* padding-bottom and top for image */
        .mfp-no-margins img.mfp-img {
            padding: 0;
        }
        /* position of shadow behind the image */
        .mfp-no-margins .mfp-figure:after {
            top: 0;
            bottom: 0;
        }
        /* padding for main container */
        .mfp-no-margins .mfp-container {
            padding: 0;
        }
    </style>

    <main class="ashade-content-wrap">
        <div class="ashade-content-scroll">
            <div class="ashade-content">
                <section class="ashade-section">
                    <div class="ashade-row">
                        <div class="ashade-col col-6">
                            <h2>
                                <span>20 Mars 2020</span>
                                Live Streaming
                            </h2>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec libero purus, ullamcorper luctus eleifend ut, tempor eu massa. Proin consectetur non diam eu ullamcorper. Quisque.</p>
                            <div class="fb-share-button" data-href="{{ route('events.show1') }}" data-layout="button" data-size="large">
                                <a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u={{ route('events.show1') }}&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Partager</a>
                            </div>
                        </div>
                        <div class="ashade-col col-6">
                            <a class="ashade-lightbox-link" href="https://scontent-frt3-2.xx.fbcdn.net/v/t1.0-9/90877457_10158159937804722_2137169537441726464_o.jpg?_nc_cat=103&_nc_sid=340051&_nc_ohc=qQMz_n620PEAX8fq92Y&_nc_ht=scontent-frt3-2.xx&oh=450673bdb2b91819acf4052ca54a11cb&oe=5FA64F0C">
                                <img src="https://scontent-frt3-2.xx.fbcdn.net/v/t1.0-9/90877457_10158159937804722_2137169537441726464_o.jpg?_nc_cat=103&_nc_sid=340051&_nc_ohc=qQMz_n620PEAX8fq92Y&_nc_ht=scontent-frt3-2.xx&oh=450673bdb2b91819acf4052ca54a11cb&oe=5FA64F0C" alt="Live Streaming">
                            </a>
                        </div>
                    </div><!-- .ashade-row -->
                </section>
                <section class="ashade-section">
                    <iframe width="100%" height="600" frameborder="0" scrolling="yes" marginheight="0" marginwidth="0" src="https://maps.google.fr/maps?q=Berghain&output=embed"></iframe>
                </section>
            </div><!-- .ashade-content -->
            @include('partials.footer')
        </div><!-- .ashade-content-scroll -->
    </main>
@stop

@section('js')
    <script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('.ashade-lightbox-link').magnificPopup({
                type: 'image',
                closeOnContentClick: true,
                closeBtnInside: false,
                fixedContentPos: true,
                mainClass: 'mfp-no-margins mfp-with-zoom', // class to remove default margin from left and right side
                image: {
                    verticalFit: true
                },
                zoom: {
                    enabled: true,
                    duration: 300 // don't foget to change the duration also in CSS
                }
            });

        });
    </script>
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v8.0" nonce="xuKGCKki"></script>
@stop
