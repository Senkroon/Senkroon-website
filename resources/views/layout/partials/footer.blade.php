<footer id="footer">
    <div class="container">

        <div class="row py-5 my-4">
            <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
                <a href="{{ route('home.index') }}" class="">
                    <img alt="Senkroon Logo" src="{{ asset('porto/simages/senkroon_koyu.png') }}" class="opacity-7 bottom-4 img-fluid mb-4"
                        width="250px">
                </a>
                <p class="mt-2 mb-2">GÜVEN, BİLGİ VE TEKNOLOJİNİN SENKROON’U</p>
                {{-- <p class="mb-0"><a href="{{ route('home.about') }}" class="btn-flat btn-xs text-color-light"><strong class="text-2">DAHA FAZLA</strong><i class="fas fa-angle-right p-relative top-1 ps-2"></i></a></p> --}}
            </div>
            <div class="col-md-6 col-lg-3 mb-4 mb-lg-0">
                <h5 class="text-3 mb-3">İLETİŞİM</h5>
                <ul class="list list-icons list-icons-lg">
                    <li class="mb-1"><i class="far fa-dot-circle text-color-primary"></i>
                        <p class="m-0">Polatlar Office, Tecde, Mıhlıdut Sk. A Blok No: 37/B, 44090 Yeşilyurt/Malatya
                        </p>
                    </li>
                    <li class="mb-1"><i class="fab fa-whatsapp text-color-primary"></i>
                        <p class="m-0"><a href="tel:05306690444">0530 669 0444</a></p>
                    </li>
                    <li class="mb-1"><i class="far fa-envelope text-color-primary"></i>
                        <p class="m-0"><a href="mailto:info@senkroon.com">info@senkroon.com</a></p>
                    </li>
                </ul>
            </div>
            <div class="col-md-6 col-lg-3">
                <h5 class="text-3 mb-3">MENÜ</h5>
                <ul class="list list-icons list-icons-sm">
                    <li><i class="fas fa-angle-right"></i><a href="{{ route('home.index') }}"
                            class="link-hover-style-1 ms-1"> Anasayfa</a></li>
                    {{-- <li><i class="fas fa-angle-right"></i><a href="{{ route('home.about') }}" class="link-hover-style-1 ms-1"> Hakkımızda</a></li> --}}
                    <li><i class="fas fa-angle-right"></i><a href="{{ route('modules.index', 'workcube') }}"
                            class="link-hover-style-1 ms-1"> Workcube Modülleri</a></li>
                    <li><i class="fas fa-angle-right"></i><a href="{{ route('modules.index', 'mikro') }}"
                            class="link-hover-style-1 ms-1"> Mikro Modülleri</a></li>
                    <li><i class="fas fa-angle-right"></i><a href="{{ route('sectors.index') }}"
                            class="link-hover-style-1 ms-1"> Sektörel Uygulamalar</a></li>
                    <li><i class="fas fa-angle-right"></i><a href="{{ route('advisors.index') }}"
                            class="link-hover-style-1 ms-1"> Danışmanlık Çözümleri</a></li>
                    <li><i class="fas fa-angle-right"></i><a href="{{ route('contact-us') }}"
                            class="link-hover-style-1 ms-1"> İletişim</a></li>
                </ul>
            </div>
            <div class="col-md-6 col-lg-2">
                <h5 class="text-3 mb-3">BİZİ TAKİP EDİN</h5>
                <ul class="social-icons">
                    <li class="social-icons-instagram"><a
                            href="https://www.instagram.com/senkroon_?igsh=MWtvc2U0ZGJwZ3M4aA%3D%3D&utm_source=qr"
                            target="_blank" title="Facebook"><i class="fab fa-instagram"></i></a></li>
                    <li class="social-icons-youtube"><a
                            href="https://youtube.com/@senkroon_danismanlik?si=XX8n0lWNscFMN9cP" target="_blank"
                            title="Twitter"><i class="fab fa-youtube"></i></a></li>
                    <li class="social-icons-linkedin"><a
                            href="https://www.linkedin.com/company/green-world-enerji%CC%87-teksti%CC%87l-i%CC%87n%C5%9Faat-taah-di%C5%9F-ti%CC%87caret-ltd-%C5%9Fti%CC%87/"
                            target="_blank" title="Linkedin"><i class="fab fa-linkedin-in"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="footer-copyright footer-copyright-style-2">
        <div class="container py-2">
            <div class="row py-4">
                <div class="col d-flex align-items-center justify-content-center">
                    <p>© Copyright 2025. Senkroon. Tüm Hakları Saklıdır.</p>
                </div>
            </div>
        </div>
    </div>
</footer>
