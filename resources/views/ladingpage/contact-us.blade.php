@extends('ladingpage.layouts.app')

@section('content')

   <!-- ======= Services Section ======= -->




   <div id="services" class="services section-header section-header-container">
            <div class="section-title m-5">
                <h2 class="text-white">Anunciate con nostros</h2>
                <p  class="text-white">

                    <img src="https://cdn-icons-png.flaticon.com/512/134/134937.png" alt="" height="150rem">
                </p>
            </div>
    </div>

    <section id="pricing" class="pricing">
        <div class="container" data-aos="fade-up">

          <div class="section-title">
            <h2>Precios</h2>
            <p>...</p>
          </div>

          <div class="row">

            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
              <div class="box">
                <h3>Plan de prueba</h3>
                <h4><sup>$</sup>10<span>por mes</span></h4>
                <ul>
                    <li><i class="bx bx-check"></i> Opciones</li>
                    {{-- <li><i class="bx bx-check"></i> Nec feugiat nisl pretium</li> --}}
                  {{-- <li><i class="bx bx-check"></i> Nulla at volutpat diam uteera</li>
                  <li class="na"><i class="bx bx-x"></i> <span>Pharetra massa massa ultricies</span></li>
                  <li class="na"><i class="bx bx-x"></i> <span>Massa ultricies mi quis hendrerit</span></li> --}}
                </ul>
                <a href="https://api.whatsapp.com/send?phone=522491503929&text=Quiero%20saber%20m%C3%A1s%20acerca%20del%20plan%20X%20con%20X%20beneficios" class="buy-btn">Comenzar</a>
              </div>
            </div>

            <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="200">
              <div class="box featured">
                <h3>Plan de negocios</h3>
                <h4><sup>$</sup>30<span>por mes</span></h4>
                <ul>
                  <li><i class="bx bx-check"></i> Opciones</li>
                  {{-- <li><i class="bx bx-check"></i> Nec feugiat nisl pretium</li>
                  <li><i class="bx bx-check"></i> Nulla at volutpat diam uteera</li>
                  <li><i class="bx bx-check"></i> Pharetra massa massa ultricies</li>
                  <li><i class="bx bx-check"></i> Massa ultricies mi quis hendrerit</li> --}}
                </ul>
                <a href="https://api.whatsapp.com/send?phone=522491503929&text=Quiero%20saber%20m%C3%A1s%20acerca%20del%20plan%20X%20con%20X%20beneficios" class="buy-btn">Comenzar</a>
              </div>
            </div>

            <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="300">
              <div class="box">
                <h3>Plan mediano</h3>
                <h4><sup>$</sup>60<span>por mes</span></h4>
                <ul>
                    <li><i class="bx bx-check"></i> Opciones</li>

                  {{-- <li><i class="bx bx-check"></i> Quam adipiscing vitae proin</li> --}}
                  {{-- <li><i class="bx bx-check"></i> Nec feugiat nisl pretium</li> --}}
                  {{-- <li><i class="bx bx-check"></i> Nulla at volutpat diam uteera</li>
                  <li><i class="bx bx-check"></i> Pharetra massa massa ultricies</li>
                  <li><i class="bx bx-check"></i> Massa ultricies mi quis hendrerit</li> --}}
                </ul>
                <a href="https://api.whatsapp.com/send?phone=522491503929&text=Quiero%20saber%20m%C3%A1s%20acerca%20del%20plan%20X%20con%20X%20beneficios" class="buy-btn">Comenzar</a>
              </div>
            </div>

          </div>

        </div>
      </section><!-- End Pricing Section -->

  @endsection

