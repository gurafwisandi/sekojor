<footer id="footer">
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 footer-info">
                    <h3>{{ $setting[0]->apps }}</h3>
                    <p>
                        {{ $setting[0]->address }}<br>
                        {{ $setting[0]->kelurahan }}
                        {{ $setting[0]->kecamatan }}
                        {{ $setting[0]->kota }}
                        {{ $setting[0]->provinsi }}<br>
                        <strong>Email:</strong><br>{{ $setting[0]->email }}<br>
                    </p>
                    <div class="social-links mt-3">
                        @if ($setting[0]->youtube)
                            <a href="{{ $setting[0]->youtube }}" target="_blank" class="youtube"><i
                                    class="bi bi-youtube"></i></a>
                        @endif
                        @if ($setting[0]->facebook)
                            <a href="{{ $setting[0]->facebook }}" target="_blank" class="facebook"><i
                                    class="bi bi-facebook"></i></a>
                        @endif
                        @if ($setting[0]->instagram)
                            <a href="{{ $setting[0]->instagram }}" target="_blank" class="instagram"><i
                                    class="bi bi-instagram"></i></a>
                        @endif
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 footer-links">
                    <h4>Useful Links</h4>
                    <ul>
                        <li><i class="bx bx-chevron-right"></i> <a href="{{ route('index') }}">Home</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="{{ route('blogs') }}">Blog</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="{{ route('about') }}">About Us</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="{{ route('index') }}#produk">Galery</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="{{ route('index') }}#contact">Contact Us</a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6 footer-links">
                    <h4>Contact Person</h4>
                    <?php
                        $call = explode('|', $setting[0]->call);
                        if (count($call) > 1) {
                            for ($i = 0; $i < count($call); $i++) {
                            $call_wa = explode(' : ', $call[$i]);
                    ?>
                    <a style="color: white"
                        href="https://wa.me/{{ $call_wa[1] }}?text=Halo, Saya ingin mengetahui tentang Sekojor"
                        target="_blank">{{ $call[$i] }}</a><br>
                    <?php
                            }
                        }
                    ?>
                </div>
                <div class="col-lg-3 col-md-6 footer-links">
                    <h4>Legalitas</h4>
                    <p>{{ $setting[0]->legalitas }}</p>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="copyright">
            &copy; Copyright <strong><span>{{ $setting[0]->apps }}</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
        </div>
    </div>
</footer>
