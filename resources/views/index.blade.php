@extends('master')

@section('konten')
    <!-- preloader
    ================================================== -->
    <div id="preloader">
        <div id="loader" class="dots-fade">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    
        <!-- # site main content
        ================================================== -->
        <section id="content" class="s-content">

            <!-- intro
            ----------------------------------------------- -->
            <section id="intro" class="s-intro">

                <div class="row s-intro__content width-sixteen-col">

                    <div class="column lg-12 s-intro__content-inner grid-block">
                        
                        <div class="s-intro__content-text">
                            <div class="s-intro__content-pretitle text-pretitle">Hello, I'm Aman Zulkifli</div>
                            <h1 class="s-intro__content-title">
                            I'm one of Wikrama<br>
                            students majoring in <br>
                            software and game <br>
                            development.
                            </h1>
                        </div> <!-- s-intro__content-text -->

                        <div class="s-intro__content-media"> 
                            <div class="s-intro__content-media-inner">                               
                                <img src="../assets/img/intro-bg.jpg" srcset="../assets/img/intro-bg.jpg 1x, ../assets/img/intro-kecil.jpg 2x" alt="">
                                <div class="lines">                               
                                    <span></span>                                  
                                </div>
                            </div>
                        </div> <!-- s-intro__content-media -->                      

                        <div class="s-intro__scroll-down">
                            <a href="#about" class="smoothscroll">
                                <div class="scroll-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="36" height="36" fill="none" stroke="#97b34a" stroke-width="1" stroke-linecap="round" stroke-linejoin="round">&lt;!--!  Atomicons Free 1.00 by @atisalab License - https://atomicons.com/license/ (Icons: CC BY 4.0) Copyright 2021 Atomicons --&gt;<polyline points="7 13 12 18 17 13"></polyline><line x1="12" y1="18" x2="12" y2="6"></line></svg>
                                </div>
                                <span>Scroll for more</span>
                            </a>
                        </div> <!-- s-intro__scroll-down -->
                        
                    </div> <!-- s-intro__content-inner -->

                </div> <!-- s-intro__content -->

            </section> <!-- end s-intro -->

            <!-- about
            ----------------------------------------------- -->
            <section id="about" class="s-about target-section">

                <div class="row s-about__content width-sixteen-col">
                    <div class="column grid-block grid-section-split">

                        <img src="images/geometric_shape.svg" alt="" class="s-about__content-imgbg">

                        <div class="section-header grid-section-split__header">
                            <div class="text-pretitle">About</div>                           
                            <h2 class="text-display-title">
                            Siapakah saya dan apa yang saya lakukan
                            </h2>                           
                        </div> <!-- end section-header -->

                        <div class="s-about__content-main grid-section-split__primary">
                            <p class="attention-getter">
                            Tegar Badruzzaman Zulkifli atau yang biasa dipanggil Aman Zulkifli,
                            merupakan seseorang yang mempunyai mimpi yang besar. Yaitu mimpi menjadi
                            salah satu programmer terbaik di Indonesia, setidaknya pendapatannya cukup
                            untuk menyejahterahkan keluarganya, namun yang ia inginkan saat ini hanya satu,
                            yakni membahagiakan orangtuanya.
                            </p>

                            <p class="attention-getter">
                            Sekarang ia telah menginjakkan kakinya ke tempat pertama dia dapat mewujudkan
                            mimpi itu, bisakah ia melakukannya? SMK Wikrama Bogor adalah panggung pertama
                            yang dari awal SMP ia inginkan. Ia berharap sekolah ini bisa membuatnya maju
                            lebih jauh lagi.
                            </p>

                            <p class="attention-getter">
                            Semoga dengan dibuatnya website ini, semua pencapaian yang saya dapatkan saat
                            di sekolah dan seterusnya dapat di unjukkan kepada dunia. Semoga kalian menikmati
                            pengalaman ini.
                            </p>
                        </div> <!-- end s-about__content-main -->

                        <div class="s-about__content-btn grid-section-split__bottom">
                            <a href="/blog/about" class="btn btn--stroke u-fullwidth">lebih banyak tentang saya</a>

                            <ul class="s-about__social social-list">
                                <li>
                                    <a href="https://www.instagram.com/swa.nirvana/">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"/></svg>
                                        <span class="u-screen-reader-text">Instagram</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://x.com/NotAmanZulkifli">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M389.2 48h70.6L305.6 224.2 487 464H345L233.7 318.6 106.5 464H35.8L200.7 275.5 26.8 48H172.4L272.9 180.9 389.2 48zM364.4 421.8h39.1L151.1 88h-42L364.4 421.8z"/></svg>
                                        <span class="u-screen-reader-text">X-Twitter</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.linkedin.com/in/tegar-badruzzaman-zulkifli-2b2079301/">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M416 32H31.9C14.3 32 0 46.5 0 64.3v383.4C0 465.5 14.3 480 31.9 480H416c17.6 0 32-14.5 32-32.3V64.3c0-17.8-14.4-32.3-32-32.3zM135.4 416H69V202.2h66.5V416zm-33.2-243c-21.3 0-38.5-17.3-38.5-38.5S80.9 96 102.2 96c21.2 0 38.5 17.3 38.5 38.5 0 21.3-17.2 38.5-38.5 38.5zm282.1 243h-66.4V312c0-24.8-.5-56.7-34.5-56.7-34.6 0-39.9 27-39.9 54.9V416h-66.4V202.2h63.7v29.2h.9c8.9-16.8 30.6-34.5 62.9-34.5 67.2 0 79.7 44.3 79.7 101.9V416z"/></svg>
                                    <span class="u-screen-reader-text">Linked-in</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://github.com/AmanZulkifli">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 496 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M165.9 397.4c0 2-2.3 3.6-5.2 3.6-3.3 .3-5.6-1.3-5.6-3.6 0-2 2.3-3.6 5.2-3.6 3-.3 5.6 1.3 5.6 3.6zm-31.1-4.5c-.7 2 1.3 4.3 4.3 4.9 2.6 1 5.6 0 6.2-2s-1.3-4.3-4.3-5.2c-2.6-.7-5.5 .3-6.2 2.3zm44.2-1.7c-2.9 .7-4.9 2.6-4.6 4.9 .3 2 2.9 3.3 5.9 2.6 2.9-.7 4.9-2.6 4.6-4.6-.3-1.9-3-3.2-5.9-2.9zM244.8 8C106.1 8 0 113.3 0 252c0 110.9 69.8 205.8 169.5 239.2 12.8 2.3 17.3-5.6 17.3-12.1 0-6.2-.3-40.4-.3-61.4 0 0-70 15-84.7-29.8 0 0-11.4-29.1-27.8-36.6 0 0-22.9-15.7 1.6-15.4 0 0 24.9 2 38.6 25.8 21.9 38.6 58.6 27.5 72.9 20.9 2.3-16 8.8-27.1 16-33.7-55.9-6.2-112.3-14.3-112.3-110.5 0-27.5 7.6-41.3 23.6-58.9-2.6-6.5-11.1-33.3 2.6-67.9 20.9-6.5 69 27 69 27 20-5.6 41.5-8.5 62.8-8.5s42.8 2.9 62.8 8.5c0 0 48.1-33.6 69-27 13.7 34.7 5.2 61.4 2.6 67.9 16 17.7 25.8 31.5 25.8 58.9 0 96.5-58.9 104.2-114.8 110.5 9.2 7.9 17 22.9 17 46.4 0 33.7-.3 75.4-.3 83.6 0 6.5 4.6 14.4 17.3 12.1C428.2 457.8 496 362.9 496 252 496 113.3 383.5 8 244.8 8zM97.2 352.9c-1.3 1-1 3.3 .7 5.2 1.6 1.6 3.9 2.3 5.2 1 1.3-1 1-3.3-.7-5.2-1.6-1.6-3.9-2.3-5.2-1zm-10.8-8.1c-.7 1.3 .3 2.9 2.3 3.9 1.6 1 3.6 .7 4.3-.7 .7-1.3-.3-2.9-2.3-3.9-2-.6-3.6-.3-4.3 .7zm32.4 35.6c-1.6 1.3-1 4.3 1.3 6.2 2.3 2.3 5.2 2.6 6.5 1 1.3-1.3 .7-4.3-1.3-6.2-2.2-2.3-5.2-2.6-6.5-1zm-11.4-14.7c-1.6 1-1.6 3.6 0 5.9 1.6 2.3 4.3 3.3 5.6 2.3 1.6-1.3 1.6-3.9 0-6.2-1.4-2.3-4-3.3-5.6-2z"/></svg>
                                        <span class="u-screen-reader-text">Github</span>
                                    </a>
                                </li>


                                </ul> <!-- end s-footer__social -->
                        </div> <!-- end s-about__content-btn -->
                    
                    </div> <!-- content-inner -->
                </div>
                
            </section> <!-- end s-about -->

            <!-- expertise
            ----------------------------------------------- -->
            <section id="expertise" class="s-expertise">

                <div class="row s-expertise__content width-sixteen-col">
                    <div class="column xl-12 grid-block grid-section-split">

                        <div class="section-header grid-section-split__header">
                            <div class="text-pretitle">Keahlian</div>                           
                            <h2 class="text-display-title">
                            Beberapa keahlian saya.
                            </h2>     
                            
                            <p class="lead">
                                Berikut, adalah daftar keahlian-keahlian saya. 
                                Yang beberapa saya dapatkan di sekolah SMK Wikrama Bogor.
                            </p>
                        </div> <!-- end section-header -->

                        <div class="s-expertise__content-main grid-section-split__primary">

                            <div class="grid-list-items list-items show-ctr">
                                <div class="grid-list-items__item list-items__item">
                                    <div class="grid-list-items__title list-items__item-header">
                                        <h3 class="list-items__item-title">Digital Marketing</h3>
                                    </div>
                                    <div class="grid-list-items__text list-items__item-text">
                                        <p>
                                            Saya sempat menguasai beberapa kunci-kunci elemen penting
                                            dari Digital Marketing, keahlian ini saya dapatkan dari
                                            ekskul Digital Marketing.
                                        </p>
                                    </div>
                                </div> <!-- list-item -->
                                <div class="grid-list-items__item list-items__item">
                                    <div class="grid-list-items__title list-items__item-header">
                                        <h3 class="list-items__item-title">Dasar HTML dan CSS</h3>
                                    </div>
                                    <div class="grid-list-items__text list-items__item-text">
                                        <p>
                                            Saya telah menguasai dasar-dasar dari HTML dan CSS
                                            dalam pembuatan sebuah website statik maupun dinamis.
                                        </p>
                                    </div>
                                </div> <!-- list-expertise__item -->
                                <div class="grid-list-items__item list-items__item">
                                    <div class="grid-list-items__title list-items__item-header">
                                        <h3 class="list-items__item-title">Kepanitiaan</h3>
                                    </div>
                                    <div class="grid-list-items__text list-items__item-text">
                                        <p>
                                            Saya mengikuti Organisasi Siswa Intra Sekolah(OSIS),
                                            dan dari situ saya mempelajari hal-hal tentang kepanitiaan dari
                                            jobdesk-jobdesk yang telah diberikan dan saya laksanakan.
                                        </p>
                                    </div>
                                </div> <!-- list-expertise__item -->
                                <div class="grid-list-items__item list-items__item">
                                    <div class="grid-list-items__title list-items__item-header">
                                        <h3 class="list-items__item-title">Kepemimpinan</h3>
                                    </div>
                                    <div class="grid-list-items__text list-items__item-text">
                                        <p>
                                            Dengan beberapa tugas-tugas kelompok yang diberikan, dan saya kedapatan
                                            menjadi penanggung jawab, Saya belajar cara memimpin.
                                        </p>
                                    </div>
                                </div> <!-- list-expertise__item -->

                            </div> <!-- grid-list-items -->
                        </div>

                    </div> <!-- end grid-block-->
                </div> <!-- end s-expertise__content -->

            </section> <!-- end s-expertise -->


        </section>  
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>
@endsection