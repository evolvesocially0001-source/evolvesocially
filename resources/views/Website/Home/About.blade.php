@include('Website.Home.Header')
<main>

    <div class="pp-top-wrap">

        <!-- hero area start -->
        <div class="pp-about-me-area pp-about-me-ptb z-index-1" data-bg-color="#2F1F19">
            <div class="container-fluid">
                <div class="pp-about-me-heading text-center z-index-1 d-none d-md-block">
                    <h4 class="pp-about-me-title tp-char-animation">Hello, I’m EvolveSocially</h4>
                </div>
                <div class="pp-about-me-heading-slider text-center z-index-1 d-block d-md-none">
                    <div class="swiper-container tp-brand-active">
                        <div class="swiper-wrapper slide-transtion">
                            <div class="swiper-slide">
                                <h4 class="pp-about-me-title">Hello, I’m EvolveSocially</h4>
                            </div>
                            <div class="swiper-slide">
                                <h4 class="pp-about-me-title">Hello, I’m EvolveSocially</h4>
                            </div>
                            <div class="swiper-slide">
                                <h4 class="pp-about-me-title">Hello, I’m EvolveSocially</h4>
                            </div>
                            <div class="swiper-slide">
                                <h4 class="pp-about-me-title">Hello, I’m EvolveSocially</h4>
                            </div>
                            <div class="swiper-slide">
                                <h4 class="pp-about-me-title">Hello, I’m EvolveSocially</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container container-1350">
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-12">
                        <div class="pp-hero-left z-index-1">
                            <div class="pp-about-me-hero-left pt-90 pb-100 z-index-1">
                                <div class="pp-about-me-btn">
                                    <a href="#">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16">
                                            <path d="M1 1L15 15" stroke="white" stroke-width="2" />
                                            <path d="M15 1V15H1" stroke="white" stroke-width="2" />
                                        </svg>
                                    </a>
                                </div>
                                <span class="pp-hero-text tp-split-text tp-split-right">
                                    Expert graphics <br>designer based <br>in Inida
                                </span>
                                <p>Open to work</p>
                            </div>
                        </div>
                    </div>

                    <!-- UPDATED IMAGE PATH -->
                    <div class="col-xl-7 col-lg-7 order-lg-2 order-3">
                        <div class="pp-about-me-thumb z-index-1 text-center">
                            <img src="{{ asset('Website/assets/img/about-me/about-me-thumb-1.png') }}" alt="">
                        </div>
                    </div>

                    <div class="col-xl-1 col-lg-1 col-md-12 order-lg-3 order-2">
                        <div class="pp-about-me-social text-start text-lg-end pt-160 z-index-2">
                            <div class="tp-footer-widget-social">
                                <a href="#"><span><svg width="18" height="18">
                                            <path ... />
                                        </svg></span></a>
                                <a href="#"><span><svg width="14" height="13">
                                            <path ... />
                                        </svg></span></a>
                                <a href="#"><span><svg width="16" height="16">
                                            <path ... />
                                        </svg></span></a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- hero area end -->

        <!-- brand area start -->
        <div class="pp-brand-area ar-brand-style z-index-4" data-bg-color="#FFF669">
            <div class="pp-about-me-shape">

                <!-- UPDATED IMAGE PATHS -->
                <div class="shape-left">
                    <img src="{{ asset('Website/assets/img/about-me/about-me-hand-left.png') }}" alt="">
                </div>

                <div class="shape-right">
                    <img src="{{ asset('Website/assets/img/about-me/about-me-hand-right.png') }}" alt="">
                </div>

            </div>

            <div class="tp-brand-wrapper pp-about-me-brand-wrap z-index-1">
                <div class="swiper-container tp-brand-active">
                    <div class="swiper-wrapper slide-transtion">

                        <!-- Only SVGs below—no image paths needed -->
                        <div class="swiper-slide">
                            <div class="pp-brand-item pp-about-me-brand">
                                <span class="pp-brand-title"><i>86 /</i>Satisfied Clients</span>
                                <span class="pp-brand-icon"><svg width="31" height="30">
                                        <path ... />
                                    </svg></span>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="pp-brand-item pp-about-me-brand">
                                <span class="pp-brand-title"><i>24 /</i> Projects Finished</span>
                                <span class="pp-brand-icon"><svg width="31" height="30">
                                        <path ... />
                                    </svg></span>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="pp-brand-item pp-about-me-brand">
                                <span class="pp-brand-title"><i>>95% /</i>Years of Experience</span>
                                <span class="pp-brand-icon"><svg width="31" height="30">
                                        <path ... />
                                    </svg></span>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="pp-brand-item pp-about-me-brand">
                                <span class="pp-brand-title"><i>86 /</i>Client Retention Rate</span>
                                <span class="pp-brand-icon"><svg width="31" height="30">
                                        <path ... />
                                    </svg></span>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="pp-brand-item pp-about-me-brand">
                                <span class="pp-brand-title"><i>86 /</i>Satisfied Clients</span>
                                <span class="pp-brand-icon"><svg width="31" height="30">
                                        <path ... />
                                    </svg></span>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
        <!-- brand area end -->

    </div>



    <!-- about area start -->
    <div class="pp-about-area pp-about-ptb p-relative z-index-3 pt-160 pb-160" data-bg-color="#ffff"
        style="background: black">
        <div class="pp-about-shape">
            <img data-speed=".8" src="{{ asset('Website/assets/img/home-14/about/about-shape.png') }}" alt="">
        </div>

        <div class="container container-1430">
            <div class="row">
                <div class="col-lg-3">
                    <div class="pp-about-left">
                        <span class="tp-section-subtitle-clash clash-subtitle-pos body-ff" style="color: black">
                            About Me
                            <i>
                                <svg width="102" height="9" viewBox="0 0 102 9" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M98 8L101.5 4.5L98 1M1 4H101V5H1V4Z" stroke="currentcolor"
                                        stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg>
                            </i>
                        </span>
                    </div>
                </div>

                <div class="col-lg-9">
                    <div class="pp-about-heading pb-55">
                        <h3 class="tp-section-title-teko fs-80 tp_fade_anim" style="color: black">
                            {!! $about->heading !!}
                        </h3>

                    </div>

                    <div class="pp-about-wrap">
                        <div class="pp-about-bottom-btn smooth">
                            <a href="#down">
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="10" height="21"
                                        viewBox="0 0 10 21" fill="none">
                                        <path
                                            d="M4.57574 20.4243C4.81005 20.6586 5.18995 20.6586 5.42426 20.4243L9.24264 16.6059C9.47696 16.3716 9.47696 15.9917 9.24264 15.7574C9.00833 15.523 8.62843 15.523 8.39411 15.7574L5 19.1515L1.60589 15.7574C1.37157 15.523 0.991674 15.523 0.757359 15.7574C0.523045 15.9917 0.523045 16.3716 0.757359 16.6059L4.57574 20.4243ZM4.4 0L4.4 20H5.6L5.6 0L4.4 0Z"
                                            fill="currentColor" />
                                    </svg>
                                </span>
                            </a>
                        </div>

                        <div class="pp-about-content tp_text_anim">
                            <p style="color: black">
                                {{ $about->paragraph ?? 'Welcome to EvolveSocially' }}
                            </p>

                            <div class="pp-about-btn">
                                <div class="tp-btn-red-circle-box tp-pp-btn-style tp_fade_anim" data-delay=".7"
                                    data-fade-from="top" data-ease="bounce">

                                    <!-- UPDATED CV DOWNLOAD PATH -->
                                    <a class="tp-btn-red-circle-icon">
                                        <span>
                                            <svg width="12" height="12" viewBox="0 0 12 12" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path d="M1 11L11 1M11 1H1M11 1V11" stroke="currentcolor"
                                                    stroke-width="1.5" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                            </svg>
                                        </span>
                                    </a>

                                    <a class="tp-btn-red-circle-text" style="color: black">
                                        Hover Here
                                    </a>

                                    <a class="tp-btn-red-circle-icon">
                                        <span>
                                            <svg width="12" height="12" viewBox="0 0 12 12" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path d="M1 11L11 1M11 1H1M11 1V11" stroke="currentcolor"
                                                    stroke-width="1.5" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                            </svg>
                                        </span>
                                    </a>

                                </div>
                            </div>

                        </div> <!-- content end -->

                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- about area end -->


    <!-- service area start -->
    <div id="down" class="pp-about-me-service-area pp-about-me-service-ptb z-index-3 p-relative pb-170">
        <div class="pp-service-shape">
            <img data-speed="1.1" src="{{ asset('Website/assets/img/home-14/about/about-shape-2.png') }}"
                alt="">
        </div>
        <div class="container container-1430">
            <div class="pp-about-me-service-item pb-60">
                <div class="pp-about-me-service-heading d-flex align-items-center mb-50">
                    <span class="pp-about-me-service-subtitle" style="color: black">About</span>
                    <img src="{{ asset('Website/assets/img/about-me/about-me-line.png') }}" alt="">
                </div>
                <div class="row">
                    <div class="col-lg-5">
                        <h3 class="pp-about-me-service-title" style="color: black">Skills</h3>
                    </div>
                    <div class="col-lg-7">
                        <div class="pp-skill-list-wrap pp-about-me-skill">
                            <div class="row">

                                <div class="col-sm-6 tp_fade_anim" data-delay=".3">
                                    <div class="pp-skill-list mb-60">
                                        <h4 class="pp-skill-list-title" style="color: black">Product Design</h4>
                                        <ul>
                                            <li style="color: black">UX/UI Design</li>
                                            <li style="color: black">Prototyping</li>
                                            <li style="color: black">Design System</li>
                                            <li style="color: black">Developer Handoff</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-sm-6 tp_fade_anim" data-delay=".5">
                                    <div class="pp-skill-list mb-60">
                                        <h4 class="pp-skill-list-title" style="color: black">Brand Design</h4>
                                        <ul>
                                            <li style="color: black">Logo Design</li>
                                            <li style="color: black">Brand Guidelines</li>
                                            <li style="color: black">Presentations</li>
                                            <li style="color: black">Digital & Print assets</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-sm-6 tp_fade_anim" data-delay=".3">
                                    <div class="pp-skill-list mb-60">
                                        <h4 class="pp-skill-list-title" style="color: black">Motion Design</h4>
                                        <ul>
                                            <li style="color: black">UI Animations</li>
                                            <li style="color: black">Logo Animations</li>
                                            <li style="color: black">Illustration Animations</li>
                                            <li style="color: black">Explainer Videos</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-sm-6 tp_fade_anim" data-delay=".5">
                                    <div class="pp-skill-list mb-60">
                                        <h4 class="pp-skill-list-title" style="color: black">Web Development</h4>
                                        <ul>
                                            <li style="color: black">Front-End Development</li>
                                            <li style="color: black">WordPress Theme</li>
                                            <li style="color: black">SEO</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <style>
                .pp-about-me-service-item * {
                    color: #000 !important;
                }
            </style>
            <!-- TOOLBOX SECTION -->
            <div class="pp-about-me-service-item pb-110">
                <div class="pp-about-me-service-heading d-flex align-items-center mb-50">
                    <span class="pp-about-me-service-subtitle" style="color: black">About</span>
                    <img src="{{ asset('Website/assets/img/about-me/about-me-line.png') }}" alt="">
                </div>

                <div class="row">
                    <div class="col-xxl-5 col-xl-3">
                        <h3 class="pp-about-me-service-title" style="color: black">Toolbox</h3>
                    </div>

                    <div class="col-xxl-7 col-xl-9">
                        <div class="pp-about-me-tool-warp">
                            <div class="row row-cols-xl-3 gx-20">

                                @php
                                    $tools = [
                                        ['img' => 'about-me-tool-1.svg', 'percent' => '94%', 'name' => 'Laravel'],
                                        ['img' => 'about-me-tool-2.svg', 'percent' => '85%', 'name' => 'Codeigniter'],
                                        ['img' => 'about-me-tool-3.svg', 'percent' => '74%', 'name' => 'PHP'],
                                        ['img' => 'about-me-tool-4.svg', 'percent' => '63%', 'name' => 'Shophyfy'],
                                        ['img' => 'about-me-tool-5.svg', 'percent' => '69%', 'name' => 'Javascript'],
                                        ['img' => 'about-me-tool-6.svg', 'percent' => '55%', 'name' => 'CSS'],
                                        ['img' => 'about-me-tool-7.svg', 'percent' => '40%', 'name' => 'HTML'],
                                        ['img' => 'about-me-tool-8.svg', 'percent' => '49%', 'name' => 'WordPress'],
                                    ];
                                @endphp

                                @foreach ($tools as $index => $tool)
                                    <div class="col">
                                        <div class="pp-about-me-tool-item d-flex align-items-center mb-20 tp_fade_anim"
                                            data-delay=".{{ $index % 3 == 0 ? '3' : ($index % 3 == 1 ? '5' : '7') }}">
                                            <div class="pp-about-me-tool-item-icon">
                                                <span>
                                                    <img src="{{ asset('Website/assets/img/about-me/' . $tool['img']) }}"
                                                        alt="">
                                                </span>
                                            </div>
                                            <div class="pp-about-me-tool-item-content">
                                                <span>{{ $tool['percent'] }}</span>
                                                <p>{{ $tool['name'] }}</p>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach

                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <!-- EXPERIENCE SECTION -->
            <div class="pp-about-me-service-item pb-50">
                <div class="pp-about-me-service-heading d-flex align-items-center mb-50">
                    <span class="pp-about-me-service-subtitle" style="color: black">About</span>
                    <img src="{{ asset('Website/assets/img/about-me/about-me-line.png') }}" alt="">
                </div>

                <div class="row">
                    <div class="col-lg-5">
                        <h3 class="pp-about-me-service-title" style="color: black">Experience</h3>
                    </div>

                    <div class="col-lg-7">
                        <div class="pp-about-me-experience-wrap">
                            <div class="row">

                                <div class="col-sm-6">
                                    <div class="pp-about-me-experience-item pb-75 tp_fade_anim" data-delay=".3">
                                        <p>Aug. 2025 - Present</p>
                                        <h4 class="pp-about-me-experience-title" style="color: black">Motion Designer
                                        </h4>
                                        <p style="color: black">BarberShop Studio</p>
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="pp-about-me-experience-item pb-75 tp_fade_anim" data-delay=".5">
                                        <p style="color: black">Nov. 2018- Mar. 2022</p>
                                        <h4 class="pp-about-me-experience-title">UI/UX Lead Designer</h4>
                                        <p style="color: black">Amazon INC</p>
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="pp-about-me-experience-item pb-75 tp_fade_anim" data-delay=".3">
                                        <p style="color: black">Nov. 2018- Mar. 2023</p>
                                        <h4 class="pp-about-me-experience-title" style="color: black">Digital Art
                                            Director</h4>
                                        <p style="color: black">BarberShop Studio</p>
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="pp-about-me-experience-item pb-75 tp_fade_anim" data-delay=".5">
                                        <p style="color: black">Nov. 2018- Mar. 2025</p>
                                        <h4 class="pp-about-me-experience-title" style="color: black">Product Designer
                                        </h4>
                                        <p style="color: black">(internship)</p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <!-- RECOGNITIONS SECTION -->
            <div class="pp-about-me-service-item">
                <div class="pp-about-me-service-heading d-flex align-items-center mb-50">
                    <span class="pp-about-me-service-subtitle" style="color: black">About</span>
                    <img src="{{ asset('Website/assets/img/about-me/about-me-line.png') }}" alt="">
                </div>

                <div class="row">
                    <div class="col-lg-5">
                        <h3 class="pp-about-me-service-title" style="color: black">Recognitions</h3>
                    </div>

                    <div class="col-lg-7">
                        <div class="pp-about-me-recognitions">
                            <div class="row gx-55">

                                <div class="col-md-4 mb-30">
                                    <div class="studio-award-item tp_fade_anim" data-delay=".3">
                                        <div class="studio-award-icon">
                                            <img src="{{ asset('Website/assets/img/home-06/award/award-1.png') }}"
                                                alt="">
                                        </div>
                                        <span style="color: black">3x Site of the Day</span>
                                    </div>
                                </div>

                                <div class="col-md-4 mb-30">
                                    <div class="studio-award-item tp_fade_anim" data-delay=".5">
                                        <div class="studio-award-icon">
                                            <img src="{{ asset('Website/assets/img/home-06/award/award-2.png') }}"
                                                alt="">
                                        </div>
                                        <span style="color: black">Site of the year</span>
                                    </div>
                                </div>

                                <div class="col-md-4 mb-30">
                                    <div class="studio-award-item tp_fade_anim" data-delay=".7">
                                        <div class="studio-award-icon">
                                            <img src="{{ asset('Website/assets/img/home-06/award/award-3.png') }}"
                                                alt="">
                                        </div>
                                        <spanc style="color: black">2x Site of the Day</span>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>

    <!-- service area end -->


</main>
@include('Website.Home.Footer')
