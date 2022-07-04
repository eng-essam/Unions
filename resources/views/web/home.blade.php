@extends('web.layout_member')

@section('title')
    الصفحة الرئيسية
@endsection

@section('style')
    <link href="{{ asset('style_member/assets/css/team.css') }}" rel="stylesheet">
@endsection

@section('header')
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="hero d-flex align-items-center">

        <div class="container">
            <div class="row">
                <div class="col-lg-6 d-flex flex-column justify-content-center">
                    <h1 style="font-size: 37px;" data-aos="fade-up">خدماتك النقابية من
                        مكان واحد </h1>
                    <h2 style="direction: rtl;" data-aos="fade-up" data-aos-delay="400" class="text-center">هذا
                        الموقع صُمم لكي يساعد الأعضاء على إتمام الخدمات النقابية أونلاين
                        وبسهولة</h2>
                    @guest
                        <div data-aos="fade-up" data-aos-delay="600">
                            <div style="direction: rtl;" class="text-center text-lg-start">
                                <a href="{{ url('login') }}"
                                   class="btn-get-started scrollto d-inline-flex
                            align-items-center justify-content-center align-self-center">
                                    <span style="margin-left: 10px;">تسجيل دخول</span>
                                    <i class="bi bi-arrow-left"></i>
                                </a>
                            </div>
                        </div>
                    @endguest
                </div>
                <div class="col-lg-6 hero-img mobile-hidden" data-aos="zoom-out" data-aos-delay="200">
                    <img src="{{ asset('style_member/assets/img/hero-img.png') }}" class="img-fluid" alt="">
                </div>
            </div>
        </div>

    </section>
    <!-- End Hero -->
@endsection

@section('main')
    <!-- Start #main -->
    <main id="main">

        <!-- ======= Values Section ======= -->
        <section id="values" class="values">

            <div style="direction: rtl" class="container" data-aos="fade-up">

                <header class="section-header text-center">
                    <p>النقابات المتاحة</p>
                </header>

                <div class="container-fluid">
                    <section>
                        <div class="row">
                            <div class="col-xl-3 col-sm-6 col-12 mb-4">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between px-md-1">
                                            <div>
                                                <img src="{{ asset('style_member/assets/img/Teeth.gif') }}"
                                                     class="img-fluid" alt="">
                                                <div style="text-align: center">
                                                    <a style="color: #012970;font-size: 25px;font-weight: bold;"
                                                       href="{{ url('union/showservice/2') }}">نقابة الاسنان</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-3 col-sm-6 col-12 mb-4">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between px-md-1">
                                            <div>
                                                <img src="{{ asset('style_member/assets/img/doctor.gif') }}"
                                                     class="img-fluid" alt="">
                                                <div style="text-align: center"><a
                                                        style="color: #012970;font-size: 25px;font-weight: bold"
                                                        href="{{ url('union/showservice/3') }}">نقابة طب بشري</a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-sm-6 col-12 mb-4">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between px-md-1">
                                            <div>
                                                <img src="{{ asset('style_member/assets/img/veterinary.gif') }}"
                                                     class="img-fluid" alt="">

                                                <div style="text-align: center"><a
                                                        style="color: #012970;font-size: 25px;font-weight: bold"
                                                        href="{{ url('union/showservice/4') }}">نقابة طب بطري</a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-sm-6 col-12 mb-4">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between px-md-1">
                                            <div>
                                                <img src="{{ asset('style_member/assets/img/pharmacy.gif') }}"
                                                     class="img-fluid" alt="">

                                                <div style="text-align: center"><a
                                                        style="color: #012970;font-size: 25px;font-weight: bold"
                                                        href="{{ url('union/showservice/1') }}">نقابة الصيدلة</a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">

                            {{--                            <div class="col-xl-3 col-sm-6 col-12 mb-4">--}}
                            {{--                                <div class="card">--}}
                            {{--                                    <div class="card-body">--}}
                            {{--                                        <div class="d-flex justify-content-between px-md-1">--}}
                            {{--                                            <div>--}}

                            {{--                                                <img src="{{ asset('style_member/assets/img/77366-engineering.gif') }}"--}}
                            {{--                                                     class="img-fluid" alt="">--}}
                            {{--                                                <div style="text-align: center"><a--}}
                            {{--                                                        style="color: #012970;font-size: 25px;font-weight: bold"--}}
                            {{--                                                        href="{{ url('union/showservice/8') }}">نقابة المهندسين </a>--}}
                            {{--                                                </div>--}}
                            {{--                                            </div>--}}
                            {{--                                        </div>--}}
                            {{--                                    </div>--}}
                            {{--                                </div>--}}
                            {{--                            </div>--}}
                            <div class="col-xl-3 col-sm-6 col-12 mb-4">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between px-md-1">
                                            <div>
                                                <img src="{{ asset('style_member/assets/img/sport.gif') }}"
                                                     class="img-fluid" alt="">
                                                <div style="text-align: center"><a
                                                        style="color: #012970;font-size: 25px;font-weight: bold"
                                                        href="{{ url('union/showservice/7') }}">نقابة المهن الرياضية</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-sm-6 col-12 mb-4">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between px-md-1">
                                            <div>
                                                <img src="{{ asset('style_member/assets/img/teacher.png') }}"
                                                     class="img-fluid" alt="">

                                                <div style="text-align: center"><a
                                                        style="color: #012970;font-size: 25px;font-weight: bold"
                                                        href="{{ url('union/showservice/5') }}">نقابة المعلمين</a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-sm-6 col-12 mb-4">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between px-md-1">
                                            <div>
                                                <img src="{{ asset('style_member/assets/img/lawyer.png') }}"
                                                     class="img-fluid" alt="">


                                                <div style="text-align: center"><a
                                                        style="color: #012970;font-size: 25px;font-weight: bold"
                                                        href="{{ url('union/showservice/6') }}">نقابة المحامين</a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>


            </div>

        </section>
        <!-- End Values Section -->

        <!-- ======= About Section ======= -->
        <section id="about" class="about">

            <div class="container" data-aos="fade-up">
                <div style="direction: rtl;" class="row gx-0">

                    <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up"
                         data-aos-delay="200">
                        <div class="content">
                            <h2>الموقع يُتيج للاعضاء تنفيذ الخدمات النقابية اونلاين لتوفير
                                الوقت والجهد على جميع اعضاء النقابات </h2>
                            <ul class="mt-5 mb-5 fs-5">
                                <li class="pb-2">تجديد عضوية النقابة.</li>
                                <li class="pb-2">صرف معاش التقاعد.</li>
                                <li class="pb-2">صرف إعانة العجز الصحي.</li>
                                <li class="pb-2">صرف إعانة زواج لبنات الأعضاء المتوفيين.</li>
                            </ul>
                            @guest
                                <div class="text-center text-lg-start">
                                    <a href="{{ url('/login') }}"
                                       class="btn-read-more d-inline-flexalign-items-center justify-content-centeralign-self-center">
                                        <span style="margin-left: 10px;">المزيد</span>
                                        <i class="bi bi-arrow-left"></i>
                                    </a>
                                </div>
                            @endguest

                        </div>
                    </div>

                    <div class="col-lg-6 d-flex align-items-center mobile-hidden" data-aos="zoom-out"
                         data-aos-delay="200">
                        <img src="{{ asset('style_member/assets/img/about.jpg') }}" class="img-fluid" alt="">
                    </div>

                </div>
            </div>

        </section><!-- End About Section -->

        <!-- ======= Team ======= -->
        <section id="team">
            <div style="direction: rtl" class="container" data-aos="fade-up">

                <header style="padding-bottom: 0" class="section-header text-center">
                    <p>الفريق</p>
                </header>

                <section id="team" class="team section-bg">
                    <div class="row row-cols-1 row-cols-md-3 g-4">
                        <div class="col">
                            <div style="width: 250px;height: 250px;margin: auto">
                                <div class="member" data-aos="zoom-in" data-aos-delay="100">
                                    <img src="{{asset('style_member/assets/img/essam.jpg')}}" class="img-fluid" alt="">
                                    <div class="member-info">
                                        <div class="member-info-content">
                                            <h4>Essam Hamdy AL_agamy</h4>
                                            <span style="font-size: 22px">Full Stack</span>
                                        </div>
                                        <div class="social">
                                            <a href="https://twitter.com/Essam_Alagamy"><i class="bi bi-twitter"></i></a>
                                            <a href="https://github.com/eng-essam"><i class="bi bi-github"></i></a>
                                            <a href="https://www.facebook.com/essam123essam"><i class="bi bi-facebook"></i></a>
                                            <a href="https://www.instagram.com/essam_alagamy/"><i class="bi bi-instagram"></i></a>
                                            <a href="https://www.linkedin.com/in/essam-al-agamy-01b339219/"><i class="bi bi-linkedin"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div style="width: 250px;height: 250px;margin: auto">
                                <div class="member" data-aos="zoom-in" data-aos-delay="100">
                                    <img src="{{asset('style_member/assets/img/essam.jpg')}}" class="img-fluid" alt="">
                                    <div class="member-info">
                                        <div class="member-info-content">
                                            <h4>Essam Hamdy AL_agamy</h4>
                                            <span style="font-size: 22px">Full Stack</span>
                                        </div>
                                        <div class="social">
                                            <a href="https://twitter.com/Essam_Alagamy"><i class="bi bi-twitter"></i></a>
                                            <a href="https://github.com/eng-essam"><i class="bi bi-github"></i></a>
                                            <a href="https://www.facebook.com/essam123essam"><i class="bi bi-facebook"></i></a>
                                            <a href="https://www.instagram.com/essam_alagamy/"><i class="bi bi-instagram"></i></a>
                                            <a href="https://www.linkedin.com/in/essam-al-agamy-01b339219/"><i class="bi bi-linkedin"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div style="width: 250px;height: 250px;margin: auto">
                                <div class="member" data-aos="zoom-in" data-aos-delay="100">
                                    <img src="{{asset('style_member/assets/img/essam.jpg')}}" class="img-fluid" alt="">
                                    <div class="member-info">
                                        <div class="member-info-content">
                                            <h4>Essam Hamdy AL_agamy</h4>
                                            <span style="font-size: 22px">Full Stack</span>
                                        </div>
                                        <div class="social">
                                            <a href="https://twitter.com/Essam_Alagamy"><i class="bi bi-twitter"></i></a>
                                            <a href="https://github.com/eng-essam"><i class="bi bi-github"></i></a>
                                            <a href="https://www.facebook.com/essam123essam"><i class="bi bi-facebook"></i></a>
                                            <a href="https://www.instagram.com/essam_alagamy/"><i class="bi bi-instagram"></i></a>
                                            <a href="https://www.linkedin.com/in/essam-al-agamy-01b339219/"><i class="bi bi-linkedin"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div style="width: 250px;height: 250px;margin: auto">
                                <div class="member" data-aos="zoom-in" data-aos-delay="100">
                                    <img src="{{asset('style_member/assets/img/essam.jpg')}}" class="img-fluid" alt="">
                                    <div class="member-info">
                                        <div class="member-info-content">
                                            <h4>Essam Hamdy AL_agamy</h4>
                                            <span style="font-size: 22px">Full Stack</span>
                                        </div>
                                        <div class="social">
                                            <a href="https://twitter.com/Essam_Alagamy"><i class="bi bi-twitter"></i></a>
                                            <a href="https://github.com/eng-essam"><i class="bi bi-github"></i></a>
                                            <a href="https://www.facebook.com/essam123essam"><i class="bi bi-facebook"></i></a>
                                            <a href="https://www.instagram.com/essam_alagamy/"><i class="bi bi-instagram"></i></a>
                                            <a href="https://www.linkedin.com/in/essam-al-agamy-01b339219/"><i class="bi bi-linkedin"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div style="width: 250px;height: 250px;margin: auto">
                                <div class="member" data-aos="zoom-in" data-aos-delay="100">
                                    <img src="{{asset('style_member/assets/img/essam.jpg')}}" class="img-fluid" alt="">
                                    <div class="member-info">
                                        <div class="member-info-content">
                                            <h4>Essam Hamdy AL_agamy</h4>
                                            <span style="font-size: 22px">Full Stack</span>
                                        </div>
                                        <div class="social">
                                            <a href="https://twitter.com/Essam_Alagamy"><i class="bi bi-twitter"></i></a>
                                            <a href="https://github.com/eng-essam"><i class="bi bi-github"></i></a>
                                            <a href="https://www.facebook.com/essam123essam"><i class="bi bi-facebook"></i></a>
                                            <a href="https://www.instagram.com/essam_alagamy/"><i class="bi bi-instagram"></i></a>
                                            <a href="https://www.linkedin.com/in/essam-al-agamy-01b339219/"><i class="bi bi-linkedin"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div style="width: 250px;height: 250px;margin: auto">
                                <div class="member" data-aos="zoom-in" data-aos-delay="100">
                                    <img src="{{asset('style_member/assets/img/essam.jpg')}}" class="img-fluid" alt="">
                                    <div class="member-info">
                                        <div class="member-info-content">
                                            <h4>Essam Hamdy AL_agamy</h4>
                                            <span style="font-size: 22px">Full Stack</span>
                                        </div>
                                        <div class="social">
                                            <a href="https://twitter.com/Essam_Alagamy"><i class="bi bi-twitter"></i></a>
                                            <a href="https://github.com/eng-essam"><i class="bi bi-github"></i></a>
                                            <a href="https://www.facebook.com/essam123essam"><i class="bi bi-facebook"></i></a>
                                            <a href="https://www.instagram.com/essam_alagamy/"><i class="bi bi-instagram"></i></a>
                                            <a href="https://www.linkedin.com/in/essam-al-agamy-01b339219/"><i class="bi bi-linkedin"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </section><!-- End Team Section -->


        </div>
        </section>

        </div>

        </section>

    </main>
    <!-- End #main -->
@endsection

@section('script')
    <script src="{{ asset('style_member\assets\js\team\main.js') }}"></script>
    <script src="{{ asset('style_member\assets\js\team\aos.js') }}"></script>
    <script src="{{ asset('style_member\assets\js\team\glightbox.min.js') }}"></script>
    <script src="{{ asset('style_member\assets\js\team\swiper-bundle.min.js') }}"></script>


@endsection
