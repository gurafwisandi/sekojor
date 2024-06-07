<!DOCTYPE html>
<html lang="en">

<head>
    @include('frontend.header_js')
</head>

<body>
    @include('sweetalert::alert')
    <!-- ======= Top Bar ======= -->
    @include('frontend.topbar')
    <!-- ======= Header ======= -->
    <header id="header" class="d-flex align-items-center">
        <div class="container d-flex align-items-center">
            <div class="logo me-auto">
                <h1><a href="#">{{ $setting[0]->apps }}</a></h1>
            </div>
            @include('frontend.nav')
        </div>
    </header>
    <!-- End Header -->
    <!-- ======= Hero Section ======= -->
    @include('frontend.sliders')
    <!-- End Hero -->
    <main id="main">
        <!-- ======= Our Team Section ======= -->
        @include('frontend.blog')
        <!-- End Our Team Section -->
        <section>
            <div class="container">
                <div class="row no-gutters">
                    <div class="col-lg-12 col-md-6 content-item aos-init aos-animate" data-aos="fade-up">
                        <div class="section-title">
                            <h2><b style="color: red">Sanggar</b> Seni Budaya Betawi</h2>
                        </div>
                        <p><?php echo substr($about[0]->deskripsi, 0, 288); ?></p><br>
                        <a class="btn btn-primary btn-lg" href="{{ route('about') }}" role="button">Cari tau tentang
                            kami</a>
                    </div>
                </div>
            </div>
        </section>
        <section id="portfolio-details" class="portfolio-details">
            <div class="container" data-aos="fade-up">
                <div class="row no-gutters">
                    <div class="col-lg-12 col-md-6 content-item aos-init aos-animate" data-aos="fade-up">
                        <div class="section-title">
                            <h2>Sanggar <b style="color: red">Sekojor Lima Kurung</b></h2>
                        </div>
                        <p>Telah berbadan hukum dan diakui oleh lembaga-lembaga kebudayaan maupun instansi pemerintah
                            sebagai
                            organisasi non profit yang bergerak dibidang kesenian & kebudayaan betawi yang sah</p><br>
                    </div>
                </div>
                <div class="row gy-4">
                    <div class="col-lg-4">
                    </div>
                    <div class="col-lg-4">
                        <div class="portfolio-details-slider swiper">
                            <div class="swiper-wrapper align-items-center">
                                <?php
                                $no = 1;
                                $partner = ['partner1.png', 'partner2.png', 'partner3.png', 'partner4.png'];
                                ?>
                                @foreach ($partner as $item)
                                    <div class="swiper-slide">
                                        <img src="{{ URL::asset('files/galery/' . $item) }}" height="306px"
                                            width="306px">
                                    </div>
                                @endforeach
                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                    </div>
                </div>
            </div>
        </section>
        <!-- ======= Our Portfolio Section ======= -->
        @include('frontend.galery')
        <!-- End Our Portfolio Section -->
        <!-- ======= Contact Us Section ======= -->
        @include('frontend.contact_us')
        <!-- End Contact Us Section -->
    </main>
    <!-- End #main -->
    <!-- ======= Footer ======= -->
    @include('frontend.footer')
    <!-- End Footer -->

    @include('frontend.footer_js')
</body>

</html>
