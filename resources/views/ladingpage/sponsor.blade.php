@extends('ladingpage.layouts.app')

@section('content')

   <!-- ======= Services Section ======= -->




   <div id="services" class="services section-header section-header-container">
            <div class="section-title m-5">
                <h2 class="text-white">Servicios</h2>
                <p  class="text-white">Nuestros servicios</p>
            </div>
    </div>

   <section id="services" class="services section-bg">
    <div class="container" data-aos="fade-up">



      <div class="row">
        @foreach ( $sponsors_active as $sponsor)
        <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-file"></i></div>
              <h4><a href="">{{ $sponsor->name }}</a></h4>
              <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Veritatis nam fugit quidem eum, cupiditate maxime sit officia quis nesciunt ipsam excepturi exerci</p>
              <div class="row">
                <a href="{{ route('ladingpage.service.page') }}" class="btn">
                    ver sitio web
                </a>
                <button class="btn">
                    ver galleria
                </button>
                <button class="btn">
                    ver mas info
                </button>

                </div>
            </div>

          </div>

        @endforeach









      </div>

    </div>
  </section>
  <!-- End Services Section -->

  @endsection

