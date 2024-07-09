<section id="topbar" class="d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
        <?php preg_match('/(chrome|firefox|avantgo|blackberry|android|blazer|elaine|hiptop|iphone|ipod|kindle|midp|mmp|mobile|o2|opera mini|palm|palm os|pda|plucker|pocket|psp|smartphone|symbian|treo|up.browser|up.link|vodafone|wap|windows ce; iemobile|windows ce; ppc;|windows ce; smartphone;|xiino)/i', $_SERVER['HTTP_USER_AGENT'], $version); ?>
        @if ($version[1] == 'Android' || $version[1] == 'Mobile' || $version[1] == 'iPhone')
            <marquee>
        @endif
        <div class="contact-info d-flex align-items-center">
            <i class="bi bi-envelope-fill"></i><a href="mailto:contact@example.com">{{ $setting[0]->email }}</a>
            <i class="bi bi-phone-fill phone-icon"></i>
            <?php
                $call = explode('|', $setting[0]->call);
                if (count($call) > 1) {
                    for ($i = 0; $i < count($call); $i++) {
                    $call_wa = explode(' : ', $call[$i]);
            ?>
            <a href="https://wa.me/{{ $call_wa[1] }}?text=Halo, Saya ingin mengetahui tentang Sekojor"
                target="_blank">{{ $call[$i] }}</a>
            <?php
                    if($i != count($call) - 1){echo  '&nbsp;|&nbsp;';}
                    }
                }
            ?>
        </div>
        @if ($version[1] == 'Android' || $version[1] == 'Mobile' || $version[1] == 'iPhone')
            </marquee>
        @endif
        <div class="social-links d-none d-md-block">
            @if ($setting[0]->youtube)
                <a href="{{ $setting[0]->youtube }}" target="_blank" class="youtube"><i class="bi bi-youtube"></i></a>
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
</section>
