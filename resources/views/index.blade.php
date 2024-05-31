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
        <section class="about-lists">
            <div class="container">
                <div class="row no-gutters">
                    <div class="col-lg-12 col-md-6 content-item aos-init aos-animate" data-aos="fade-up">
                        <div class="section-title">
                            <h2>Sanggar Seni Budaya Betawi</h2>
                        </div>
                        <p><?php echo substr($about[0]->deskripsi, 0, 288); ?></p><br>
                        <a class="btn btn-primary btn-lg" href="{{ route('about') }}" role="button">Cari tau tentang
                            kami</a>
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
