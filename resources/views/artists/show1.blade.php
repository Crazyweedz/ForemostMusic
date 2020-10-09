@extends('layouts.app')

@section('title', 'Isabela Clerc')

@section('content')

    <!-- Content -->
    <div class="ashade-page-title-wrap">
        <h1 class="ashade-page-title">
            <span>Our Artist</span>
            Isabela Clerc
        </h1>
    </div>

    <main class="ashade-content-wrap">
        <div class="ashade-content-scroll">
            <div class="ashade-content">

                <section class="ashade-section">
                    <div class="ashade-row">
                        <div class="ashade-col col-12">
                            <div class="ashade-service-card">
                                <div class="ashade-service-card__head">
                                    <div class="ashade-service-card__image">
                                        <img src="http://foremostmusic.fr/storage/artists/November2018/gD9MqQUfBnPYtxkGMRzW.jpeg" alt="Isabela Clerc">
                                    </div>
                                    <div class="ashade-service-card__label">
                                        <h4>
                                            <span>FR · BE · LU · NL</span>
                                            Isabela Clerc
                                        </h4>
                                    </div>
                                </div><!-- .ashade-service-card__head -->
                                <div class="ashade-service-card__content">
                                    <p class="is-dropcap">This dynamic DJ from Seville, Spain, is characterised by and stands out from the others for her taste and musical selection in her sets; with lots of groove as well as rhythms full of elegance there is a refined technique to her style of mixing.</p>
                                    <p>Her style spans through deep house, deep tech, tech house and her eternal passion: TECHNO.
                                    Through great harmony and her characteristic style of using deep tech and progressive techno her sets explode with a variety of rhythms that induce dance and enjoyment of music.</p>

                                    <p>She started out in the electronic music scene in the best clubs in Marbella and the Costa del Sol, winning her first residency in Marbella at Oh Yoko!.
                                    In 2014, she began her tour of the most popular halls and festivals of Andalusia: Industrial Copera, Wow Room, Room Metropolis, Room M100 (Córdoba) , Nightclub ON (Jaén), Nightclub Kiu, Passion and Palladium(Torremolinos) , Dasava (Almeria) , Velice (Torrevieja) Metrica Club, Oh Yoko!, Prisma (Sevilla) etc.
                                    Isabela continued to become popular in capitals cities such as Madrid , Asturias, Zaragoza, Segovia, Las Palmas, Lanzarote, Fuerteventura, Gibraltar . Even taking an international leap to Breisah (Germany), Athens (Greece),Rodas (Greece), Kenzingen (Germany), Sunny Beach (Bulgaria).
                                    In the summer of this same year she flew to Ibiza and performed in clubs like Veto Reference Social Club, Dunes, and Ocean Drive,Roof top Nine,Petit Pereyra..</p>

                                    <p>From 2015 she worked at various festivals, from the “Ojeando” (3 years) Circus Festival Nation 2015, Electronic City Festival, Coocon, Rosco Festival, South Moon Festival (2 years), Oli Festival, She Festival 1918,Opening Summer Festival,Los Alamos Festival, amongst others..</p>

                                    <p>As for her productions, in September 2016 she produced EP Orapronobis with Audio Stuff Recordings Mediterranean with The Plot Music (Greg Ignatovich), in April 2017 published EP with STICK RECORDINGS, in November 2017 with HE-ART Music and is ending with NATURA VIVA Music. Her latest creation and the one just put on the market is a new track EP Stick Ade .
                                    She has also collaborated with Deeplomatic and Heathroom records. She is always active through sets and collaborations on national and international radio stations.</p>

                                    <p>In her career Isabela has shared a cabin with national and international DJs such as Sven Väth, Marco Carola, Mind Against, Christian Burkhardt, Markus Fix, Fernanda Martins, Paula Cazenave, Daniela Haverbeck, 2Manydj’s, Ilario Alicante, Carola Pisaturo, Fatima Hajji, Wally López, Ken Ishii, Gaetano Parisio, Rebekah, Alex Under, SteveC, Cristian Varela, Agoria, Ellen Allien, Tiga, Marc Marzenit, James Zabiela, Uner, Mendo,Marco Faraone, Deborah de Luca, ArtDepartment, Nakadia, Traumer, Emanuel Satie …</p>
                                </div>
                            </div><!-- .ashade-service-card -->
                        </div><!-- .ashade-col -->
                    </div><!-- .ashade-row -->
                </section>

                <section class="ashade-section">
                    <div class="ashade-row">
                        {{--                        <div class="ashade-col align-center col-6">--}}
                        {{--                            <a href="#" class="button-link">Voir les prochains événements</a>--}}
                        {{--                        </div><!-- .ashade-col -->--}}
                        <div class="ashade-col align-center col-12">
                            <a href="{{ route('booking.index', ['b' => 'Isabela Clerc']) }}" class="button-link">Réservation · Isabela Clerc</a>
                        </div><!-- .ashade-col -->
                    </div>
                </section>

                <section class="ashade-section">
                    <div class="ashade-row">
                        <div class="ashade-col align-center col-6">
                            <iframe width="100%" height="450" scrolling="no" frameborder="no" allow="autoplay" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/902692231&color=%23313133&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true&visual=true"></iframe><div style="font-size: 10px; color: #cccccc;line-break: anywhere;word-break: normal;overflow: hidden;white-space: nowrap;text-overflow: ellipsis; font-family: Interstate,Lucida Grande,Lucida Sans Unicode,Lucida Sans,Garuda,Verdana,Tahoma,sans-serif;font-weight: 100;"><a href="https://soundcloud.com/isabela-clerc-1" title="isabela clerc" target="_blank" style="color: #cccccc; text-decoration: none;">isabela clerc</a> · <a href="https://soundcloud.com/isabela-clerc-1/isabela-clerc-arrogant" title="Isabela Clerc - Arrogant" target="_blank" style="color: #cccccc; text-decoration: none;">Isabela Clerc - Arrogant</a></div>
                        </div><!-- .ashade-col -->
                        <div class="ashade-col align-center col-6">
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/9k3ja_QNeZc" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                        </div><!-- .ashade-col -->
                    </div>
                </section>

                <section class="ashade-section">
                    <div class="ashade-row row__social">
                        <ul class="flex-socials">
                            <li><a href="https://www.facebook.com" target="_blank">Facebook</a></li>
                            <li><a href="https://www.facebook.com" target="_blank">Twitter</a></li>
                            <li><a href="https://www.facebook.com" target="_blank">Instagram</a></li>
                            <li><a href="https://www.facebook.com" target="_blank">Youtube</a></li>
                            <li><a href="https://www.facebook.com" target="_blank">Beatport</a></li>
                            <li><a href="https://www.facebook.com" target="_blank">Resident Advisor</a></li>
                            <li><a href="https://www.facebook.com" target="_blank">Soundcloud</a></li>
                        </ul>
                    </div>
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

@section('js')
    <script>
        let iframes = document.querySelectorAll('iframe')

        iframes[0].setAttribute('width', '100%')
        iframes[0].setAttribute('height', '350')
        iframes[1].setAttribute('width', '100%')
        iframes[1].setAttribute('height', '350')

        let dropcap = document.getElementsByClassName('ashade-service-card__content')

        dropcap[0].querySelector('p').setAttribute('class', 'is-dropcap')
    </script>
@stop
