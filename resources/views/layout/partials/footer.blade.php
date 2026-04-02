<footer id="footer">
    <div class="container">
        <div class="row py-5 my-4">
            <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
                <a href="{{ route('home.index') }}" class="d-inline-block mb-4">
                    <img alt="Senkroon Logo" src="{{ asset('porto/simages/senkroon_koyu.png') }}"
                        class="img-fluid" width="250px">
                </a>
                <p class="mt-2 mb-2 text-color-light opacity-7">GÜVEN, BİLGİ VE TEKNOLOJİNİN SENKROON’U</p>
                <div class="sci-fi-divider mb-4" style="width: 60px; height: 2px; background: linear-gradient(90deg, #ff8c00, transparent);"></div>
            </div>
            <div class="col-md-6 col-lg-3 mb-4 mb-lg-0">
                <h5 class="text-3 mb-3 section-title-glow text-white">İLETİŞİM</h5>
                <ul class="list list-icons list-icons-lg list-light">
                    <li class="mb-2"><i class="far fa-dot-circle text-color-primary"></i>
                        <p class="m-0 text-color-light opacity-8">Polatlar Office, Tecde, Mıhlıdut Sk. A Blok No: 37/B, 44090 Yeşilyurt/Malatya
                        </p>
                    </li>
                    <li class="mb-2"><i class="fab fa-whatsapp text-color-primary"></i>
                        <p class="m-0"><a href="tel:05306690444" class="text-color-light opacity-8">0530 669 0444</a></p>
                    </li>
                    <li class="mb-2"><i class="far fa-envelope text-color-primary"></i>
                        <p class="m-0"><a href="mailto:info@senkroon.com" class="text-color-light opacity-8">info@senkroon.com</a></p>
                    </li>
                </ul>
            </div>
            <div class="col-md-6 col-lg-3">
                <h5 class="text-3 mb-3 section-title-glow text-white">MENÜ</h5>
                <ul class="list list-icons list-icons-sm list-light">
                    <li><i class="fas fa-angle-right text-color-primary"></i><a href="{{ route('home.index') }}"
                            class="link-hover-style-1 ms-1 text-color-light opacity-8"> Anasayfa</a></li>
                    <li><i class="fas fa-angle-right text-color-primary"></i><a href="{{ route('modules.index', 'workcube') }}"
                            class="link-hover-style-1 ms-1 text-color-light opacity-8"> Workcube Modülleri</a></li>
                    <li><i class="fas fa-angle-right text-color-primary"></i><a href="{{ route('advisors.index') }}"
                            class="link-hover-style-1 ms-1 text-color-light opacity-8"> Danışmanlık Çözümleri</a></li>
                    <li><i class="fas fa-angle-right text-color-primary"></i><a href="{{ route('contact-us') }}"
                            class="link-hover-style-1 ms-1 text-color-light opacity-8"> İletişim</a></li>
                </ul>
            </div>
            <div class="col-md-6 col-lg-2">
                <h5 class="text-3 mb-3 section-title-glow text-white">BİZİ TAKİP EDİN</h5>
                <ul class="social-icons social-icons-clean social-icons-icon-light">
                    <li class="social-icons-instagram">
                        <a href="https://www.instagram.com/senkroon_yazilim?igsh=MWtvc2U0ZGJwZ3M4aA%3D%3D&utm_source=qr"
                            target="_blank" title="Instagram" class="border-0 bg-transparent">
                            <i class="fab fa-instagram" style="font-size: 1.5rem;"></i>
                        </a>
                    </li>
                    <li class="social-icons-youtube">
                        <a href="https://www.youtube.com/@Senkroon_yazilim" target="_blank"
                            title="YouTube" class="border-0 bg-transparent">
                            <i class="fab fa-youtube" style="font-size: 1.5rem;"></i>
                        </a>
                    </li>
                    <li class="social-icons-linkedin">
                        <a href="https://www.linkedin.com/company/aisenkroonyazilim"
                            target="_blank" title="Linkedin" class="border-0 bg-transparent">
                            <i class="fab fa-linkedin-in" style="font-size: 1.5rem;"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="footer-copyright footer-copyright-style-2 bg-transparent">
        <div class="container py-2">
            <div class="row py-4">
                <div class="col d-flex align-items-center justify-content-center">
                    <p class="text-color-light opacity-4">© Copyright 2025. Senkroon. Tüm Hakları Saklıdır.</p>
                </div>
            </div>
        </div>
    </div>
</footer>