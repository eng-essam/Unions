@extends('web.layout_member')

@section('title')
    الخدمات
@endsection



@section('main')
    <!-- Start #main -->
    <main id="main">

        <!-- ======= Services Section ======= -->
        <section id="services" class="services">

            <div style="margin-top: 50px" class="container" data-aos="fade-up">

                <header class="section-header text-center">
                    <p>الخدمات المتوفرة لنقابة {{ $union->name }}</p>
                </header>

                <div class="row gy-4" style="direction: rtl;">

                    @foreach ($servicess as $service)
                        <div class="col-lg-3 col-md-4 col-sm-6" data-aos="fade-up" data-aos-delay="700">
                            <div style="padding: 5px" class="service-box blight">
                                <img style="width: 100px;height: 100px;margin-bottom: 5px"
                                    src="{{ asset("web/$service->img") }}">
                                <h3>{{ $service->namear }}</h3>
                                <p>{{ $service->title }}</p>
                                <a href="{{ url("/union/servicedesc/$service->id") }}" class="read-more"><span>إقرأ
                                        المزيد</span><i class="bi bi-arrow-left"></i> </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

        </section>
        <!-- End Services Section -->
        <!-- ======= About Section ======= -->
        <section id="about" class="about">

            <div class="container" data-aos="fade-up">
                <div style="direction: rtl;" class="row gx-0">

                    <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
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

                    <div class="col-lg-6 d-flex align-items-center mobile-hidden" data-aos="zoom-out" data-aos-delay="200">
                        <img src="{{ asset('style_member/assets/img/about.jpg') }}" class="img-fluid" alt="">
                    </div>

                </div>
            </div>

        </section><!-- End About Section -->

    </main>
    <!----- End #main ---->
@endsection
