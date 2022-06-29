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
                    <p>الخدمات المتوفرة لنقابة {{$union->name}}</p>
                </header>

                <div class="row gy-4" style="direction: rtl;">

                    @foreach ($servicess as $service)
                        <div  class="col-lg-3 col-md-4 col-sm-6" data-aos="fade-up" data-aos-delay="700">
                            <div style="padding: 5px" class="service-box blight">
                                <img style="width: 100px;height: 100px;margin-bottom: 5px" src="{{ $service->img }}">
                                <h3>{{ $service->namear }}</h3>
                                <p>{{ $service->title }}</p>
                                <a  href="{{ url("/union/servicedesc/$service->id") }}" class="read-more"><span>إقرأ
                                        المزيد</span><i class="bi bi-arrow-left"></i> </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

        </section>
        <!-- End Services Section -->


    </main>
    <!----- End #main ---->
@endsection
