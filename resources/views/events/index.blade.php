@extends('layouts.app')

@section('title', 'Évènements')

@section('content')
    <!-- Content -->
    <div class="ashade-page-title-wrap">
        <h1 class="ashade-page-title">
            <span>foremost music</span>
            Évènements
        </h1>
    </div>

    <main class="ashade-content-wrap">
        <div class="ashade-content-scroll">
            <div class="ashade-content">
                <!-- <section class="ashade-section">
                  <div class="ashade-row">
                    <div class="ashade-col col-12">
                      <p class="ashade-intro">Photography is my passion. Through the lens the world looks different and i would like to show you this difference. You can see it in my albums that are presented here.</p>
                    </div>
                  </div>
                </section> -->



                @if($events->isEmpty())

                    <section class="ashade-section">
                        <div class="ashade-row">
                            <div class="ashade-col col-12">
                                <p class="ashade-intro">Aucun évènement disponible pour le moment.</p>
                            </div>
                        </div>
                    </section>

                @endif

                <section class="ashade-section">
                    <div class="ashade-row">
                        <div class="ashade-col col-12">
                            <div class="ashade-albums-grid ashade-grid ashade-grid-2cols">
                                <div class="ashade-album-item ashade-grid-item">
                                    <div class="ashade-album-item__image">
                                        <img src="https://scontent-frt3-2.xx.fbcdn.net/v/t1.0-9/90877457_10158159937804722_2137169537441726464_o.jpg?_nc_cat=103&_nc_sid=340051&_nc_ohc=qQMz_n620PEAX8fq92Y&_nc_ht=scontent-frt3-2.xx&oh=450673bdb2b91819acf4052ca54a11cb&oe=5FA64F0C" alt="Live Stream">
                                    </div>
                                    <h5>
                                        <span>20 Mars 2020</span>
                                        Live Streaming
                                    </h5>
                                    <a href="{{ route('events.show1') }}" class="ashade-album-item__link"></a>
                                </div><!-- .ashade-album-item -->
                                <div class="ashade-album-item ashade-grid-item">
                                    <div class="ashade-album-item__image">
                                        <img src="https://scontent-frt3-2.xx.fbcdn.net/v/t1.0-9/90877457_10158159937804722_2137169537441726464_o.jpg?_nc_cat=103&_nc_sid=340051&_nc_ohc=qQMz_n620PEAX8fq92Y&_nc_ht=scontent-frt3-2.xx&oh=450673bdb2b91819acf4052ca54a11cb&oe=5FA64F0C" alt="Live Stream">
                                    </div>
                                    <h5>
                                        <span>20 Mars 2020</span>
                                        Live Streaming
                                    </h5>
                                    <a href="{{ route('events.show1') }}" class="ashade-album-item__link"></a>
                                </div><!-- .ashade-album-item -->
                                <div class="ashade-album-item ashade-grid-item">
                                    <div class="ashade-album-item__image">
                                        <img src="https://scontent-frt3-2.xx.fbcdn.net/v/t1.0-9/90877457_10158159937804722_2137169537441726464_o.jpg?_nc_cat=103&_nc_sid=340051&_nc_ohc=qQMz_n620PEAX8fq92Y&_nc_ht=scontent-frt3-2.xx&oh=450673bdb2b91819acf4052ca54a11cb&oe=5FA64F0C" alt="Live Stream">
                                    </div>
                                    <h5>
                                        <span>20 Mars 2020</span>
                                        Live Streaming
                                    </h5>
                                    <a href="{{ route('events.show1') }}" class="ashade-album-item__link"></a>
                                </div><!-- .ashade-album-item -->
                                <div class="ashade-album-item ashade-grid-item">
                                    <div class="ashade-album-item__image">
                                        <img src="https://scontent-frt3-2.xx.fbcdn.net/v/t1.0-9/90877457_10158159937804722_2137169537441726464_o.jpg?_nc_cat=103&_nc_sid=340051&_nc_ohc=qQMz_n620PEAX8fq92Y&_nc_ht=scontent-frt3-2.xx&oh=450673bdb2b91819acf4052ca54a11cb&oe=5FA64F0C" alt="Live Stream">
                                    </div>
                                    <h5>
                                        <span>20 Mars 2020</span>
                                        Live Streaming
                                    </h5>
                                    <a href="{{ route('events.show1') }}" class="ashade-album-item__link"></a>
                                </div><!-- .ashade-album-item -->

                            </div><!-- .ashade-albums-grid -->
                        </div>
                    </div><!-- .ashade-row -->
                </section>
            </div><!-- .ashade-content -->
            @include('partials.footer')
        </div><!-- .ashade-content-scroll -->
    </main>

    <div class="ashade-to-top-wrap ashade-back-wrap">
        <div class="ashade-back is-to-top">
            <span>Back to</span>
            <span>Top</span>
        </div>
    </div>
@stop
