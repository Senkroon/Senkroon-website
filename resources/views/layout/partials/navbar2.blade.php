<header id="header"
    data-plugin-options="{'stickyEnabled': true, 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': false, 'stickyStartAt': 45, 'stickySetTop': '-45px', 'stickyChangeLogo': true}">
    <div class="header-body">
        <div class="header-container mx-1 mx-lg-5">
            <div class="header-row">
                <div class="header-column">
                    <div class="header-row">
                        <div class="header-logo">
                            <a href="{{ route('home.index') }}">
                                <img src="{{ asset('porto/simages/Normal.png') }}" width="250px" alt="senkroon logo"
                                    class="img-fluid" />
                            </a>
                        </div>
                    </div>
                </div>
                <div class="header-column justify-content-end">
                    <div class="header-row pt-3">
                        <nav class="header-nav-top">
                            <ul class="nav nav-pills">





                                <li class="nav-item nav-item-anim-icon d-none d-md-block">
                                    <a class="nav-link ps-0 text-3 text-secondary" href="{{ route('home.about') }}"><i
                                            class="fas fa-angle-right"></i>
                                        Güven, Bilgi ve Teknolojinin Senkroon'u</a>
                                </li>


                                <li
                                    class="  d-none d-md-block nav-item nav-item-left-border nav-item-left-border-remove nav-item-left-border-md-show">
                                    <a href="mailto:info@senkroon.com"
                                        class=" text-secondary ws-nowrap text-decoration-none"><i
                                            class="fas fa-envelope"></i> info@senkroon.com</a>
                                </li>

                                <li
                                    class="  d-none d-md-block nav-item nav-item-left-border nav-item-left-border-remove nav-item-left-border-md-show">
                                    <a href="tel:+905306690444"
                                        class=" text-secondary ws-nowrap text-decoration-none"><i
                                            class="fas fa-phone"></i> 0530 669 04 44 </a>
                                </li>

                                <ul class="header-social-icons social-icons d-none d-sm-block">
                                    <li class="social-icons-instagram"><a
                                            href="https://www.instagram.com/senkroon_yazilim?igsh=MWtvc2U0ZGJwZ3M4aA%3D%3D&utm_source=qr"
                                            target="_blank" title="Facebook"><i class="fab fa-instagram"></i></a></li>
                                    <li class="social-icons-youtube"><a
                                            href="https://www.youtube.com/@Senkroon_yazilim"
                                            target="_blank" title="Twitter"><i class="fab fa-youtube"></i></a></li>
                                    <li class="social-icons-linkedin"><a
                                            href="https://www.linkedin.com/company/aisenkroonyazilim"
                                            target="_blank" title="Linkedin"><i class="fab fa-linkedin-in"></i></a></li>
                                </ul>

                            </ul>
                        </nav>

                    </div>
                    <div class="header-row">
                        <div class="header-nav pt-1">
                            <div class="header-nav-main header-nav-main-effect-1 header-nav-main-sub-effect-1">
                                <nav class="collapse">
                                    <ul class="nav nav-pills" id="mainNav">


                                        <li>
                                            <a class="nav-link" href="{{ route('home.index') }}">
                                                Anasayfa
                                            </a>
                                        </li>

                                        <li class="dropdown">
                                            <a class="dropdown-item dropdown-toggle " href="{{ route('home.about') }}">
                                                Kurumsal
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a class="dropdown-item" href="{{ route('home.about') }}">
                                                        Hakkımızda
                                                    </a>
                                                </li>

                                                <li class=" ">
                                                    <a class="dropdown-item" href="{{ route('home.faq') }}">
                                                        Sık sorulan sorular
                                                    </a>
                                                </li>
                                                <li class=" ">
                                                    <a class="dropdown-item" href="{{ route('home.why-senkroon') }}">
                                                        Neden Senkroon ?
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>

                                        <li class="dropdown dropdown-mega d-none d-lg-block">
                                            <a class="nav-link dropdown-toggle"
                                                href="{{ route('home.products-and-solutions') }}">
                                                Ürünler & Çözümler
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <div class="dropdown-mega-content">
                                                        <div class="row">
                                                            <div class="col-lg-4">
                                                                <div class="dropdown-mega-sub-title">
                                                                    <a class="font-weight-bold text-4 "
                                                                        href="{{ route('modules.index', 'workcube') }}">
                                                                        Tüm Workcube Çözümleri</a>

                                                                </div>
                                                                <a href="{{ route('modules.index', 'workcube') }}"
                                                                    class="d-block mb-3">
                                                                    <img src="{{ asset('porto/simages/W3_logo.png') }}"
                                                                        alt="Workcube" class="img-fluid rounded mb-2">
                                                                    <p class="text-2 mb-0">ERP + CRM + HR + PMS
                                                                        +
                                                                        PAM + CMS + DAM + LMS SUBO + Intranet +
                                                                        E-Devlet ve daha fazlası...</p>
                                                                </a>
                                                                <div class="dropdown-mega-sub-nav">
                                                                    <div class="row">
                                                                        <div class="col-6">
                                                                            <ul class="list list-unstyled">
                                                                                <li><a class="dropdown-item"
                                                                                        href="{{ route('modules.show', ['workcube', 'erp-satis-satinalma-dagitim-sd-scm']) }}">Workcube
                                                                                        ERP</a></li>
                                                                                <li><a class="dropdown-item"
                                                                                        href="{{ route('modules.show', ['workcube', 'crm-musteri-iliskileri-yonetimi']) }}">Workcube
                                                                                        CRM</a></li>
                                                                                <li><a class="dropdown-item"
                                                                                        href="{{ route('modules.show', ['workcube', 'insan-kaynaklari-ik']) }}">Workcube
                                                                                        HR</a></li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="col-6">
                                                                            <ul class="list list-unstyled">
                                                                                <li><a class="dropdown-item"
                                                                                        href="{{ route('modules.show', ['workcube', 'pam-fiziki-varlik-tesis-yonetimi-tamir-bakim']) }}">Workcube
                                                                                        PAM</a></li>
                                                                                <li><a class="dropdown-item"
                                                                                        href="{{ route('modules.show', ['workcube', 'proje-yonetim-sistemi']) }}">Workcube
                                                                                        PMS</a></li>
                                                                                <li><a class="dropdown-item"
                                                                                        href="{{ route('modules.show', ['workcube', 'cms-intranet-icerik-yonetimi']) }}">Workcube
                                                                                        CMS</a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                    <a href="{{ route('modules.index', 'workcube') }}"
                                                                        class="btn btn-link text-decoration-none ps-0">
                                                                        <i class="fas fa-angle-right me-1"></i>
                                                                        Tüm Workcube Çözümleri
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4">

                                                                <div class="dropdown-mega-sub-title">
                                                                    <a class="font-weight-bold text-4 "
                                                                        href="{{ route('modules.index', 'mikro') }}">
                                                                        Tüm Mikro Çözümleri</a>

                                                                </div>
                                                                <a href="{{ route('modules.index', 'mikro') }}"
                                                                    class="d-block mb-3">
                                                                    <img src="{{ asset('porto/simages/mikro.png') }}"
                                                                        alt="Mikro" class="img-fluid rounded mb-2 ">
                                                                    <p class="text-2 mb-0">Mikro Run + Mikro
                                                                        Jump +
                                                                        Mikro Fly + Mikro Jump Basic ve daha
                                                                        fazlası...</p>
                                                                </a>
                                                                <div class="dropdown-mega-sub-nav">
                                                                    <div class="row">
                                                                        <div class="col-6">
                                                                            <ul class="list list-unstyled">
                                                                                <li><a class="dropdown-item"
                                                                                        href="{{ route('modules.show', ['mikro', 'mikro-run']) }}">Mikro
                                                                                        Run</a></li>
                                                                                <li><a class="dropdown-item"
                                                                                        href="{{ route('modules.show', ['mikro', 'mikro-jump']) }}">Mikro
                                                                                        Jump</a></li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="col-6">
                                                                            <ul class="list list-unstyled">
                                                                                <li><a class="dropdown-item"
                                                                                        href="{{ route('modules.show', ['mikro', 'mikro-fly']) }}">Mikro
                                                                                        Fly</a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                    <a href="{{ route('modules.index', 'mikro') }}"
                                                                        class="btn btn-link text-decoration-none ps-0">
                                                                        <i class="fas fa-angle-right me-1"></i>
                                                                        Tüm Mikro Çözümleri
                                                                    </a>
                                                                </div>
                                                            </div>

                                                            <div class="col-lg-4">
                                                                <div class="dropdown-mega-sub-title">
                                                                    <a class="font-weight-bold text-4 "
                                                                        href="{{ route('advisors.index') }}">
                                                                        Danışmalık Hizmetleri </a>

                                                                </div>
                                                                <div class="dropdown-mega-sub-nav">


                                                                    <div class="dropdown-mega-sub-nav">
                                                                        <ul class="list list-unstyled">
                                                                            <li>
                                                                                <a class="dropdown-item d-flex align-items-center"
                                                                                    href="{{ url('danismanlik-cozumleri/finans-muhasebe-ic-denetim-ic-kontrol') }}">
                                                                                    <span>Finans, Muhasebe, İç
                                                                                        Denetim &
                                                                                        İç Kontrol </span>
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a class="dropdown-item d-flex align-items-center"
                                                                                    href="{{ url('danismanlik-cozumleri/is-surecleri-yonetim-ve-organizasyon') }}">

                                                                                    <span>İş Süreçleri, Yönetim
                                                                                        ve
                                                                                        Organizasyon</span>
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a class="dropdown-item d-flex align-items-center"
                                                                                    href="{{ url('danismanlik-cozumleri/erp-mrp-danismanligi') }}">

                                                                                    <span>ERP & MRP
                                                                                        Danışmanlığı</span>
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a class="dropdown-item d-flex align-items-center"
                                                                                    href="{{ url('danismanlik-cozumleri/raporlama-ve-analiz-danismanligi') }}">
                                                                                    <span>Raporlama ve Analiz
                                                                                        Danışmanlığı</span>
                                                                                </a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                    <a href="{{ url('danismanlik-cozumleri') }}"
                                                                        class="btn btn-link text-decoration-none ps-0">
                                                                        <i class="fas fa-angle-right me-1"></i>
                                                                        Tüm Danışmanlık Çözümleri
                                                                    </a>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>

                                        {{-- <li>
                                            <a class="nav-link" href="{{ route('projects.index') }}">
                                                Projelerimiz
                                            </a>
                                        </li> --}}

                                        <!-- Ürünler & Çözümler - Basit Dropdown (Mobil) -->
                                        <li class="dropdown d-lg-none">
                                            <a class="nav-link dropdown-toggle"
                                                href="{{ route('modules.index', 'workcube') }}">
                                                Çözümler & Hizmetlerimiz
                                            </a>
                                            <ul class="dropdown-menu">
                                                <!-- Workcube Çözümleri -->
                                                <li class="dropdown-header text-primary fw-bold">
                                                    <i class="fas fa-cube me-1"></i> Workcube Çözümleri
                                                </li>
                                                <li><a class="dropdown-item py-2"
                                                        href="{{ route('modules.show', ['workcube', 'erp-satis-satinalma-dagitim-sd-scm']) }}">
                                                        <i class="fas fa-chart-line me-2 text-muted"></i>Workcube
                                                        ERP</a></li>
                                                <li><a class="dropdown-item py-2"
                                                        href="{{ route('modules.show', ['workcube', 'crm-musteri-iliskileri-yonetimi']) }}">
                                                        <i class="fas fa-users me-2 text-muted"></i>Workcube
                                                        CRM</a>
                                                </li>
                                                <li><a class="dropdown-item py-2"
                                                        href="{{ route('modules.show', ['workcube', 'insan-kaynaklari-ik']) }}">
                                                        <i class="fas fa-user-tie me-2 text-muted"></i>Workcube
                                                        HR</a>
                                                </li>
                                                <li><a class="dropdown-item fw-bold text-primary py-2"
                                                        href="{{ route('modules.index', 'workcube') }}">
                                                        <i class="fas fa-arrow-right me-2"></i>Tüm Workcube
                                                        Çözümleri</a></li>
                                                <li>
                                                    <hr class="dropdown-divider my-2">
                                                </li>

                                                <!-- Mikro Çözümleri -->
                                                <li class="dropdown-header text-primary fw-bold">
                                                    <i class="fas fa-microchip me-1"></i> Mikro Çözümleri
                                                </li>
                                                <li><a class="dropdown-item py-2"
                                                        href="{{ route('modules.show', ['mikro', 'mikro-run']) }}">
                                                        <i class="fas fa-play me-2 text-muted"></i>Mikro Run</a>
                                                </li>
                                                <li><a class="dropdown-item py-2"
                                                        href="{{ route('modules.show', ['mikro', 'mikro-jump']) }}">
                                                        <i class="fas fa-arrow-up me-2 text-muted"></i>Mikro
                                                        Jump</a>
                                                </li>
                                                <li><a class="dropdown-item py-2"
                                                        href="{{ route('modules.show', ['mikro', 'mikro-fly']) }}">
                                                        <i class="fas fa-paper-plane me-2 text-muted"></i>Mikro
                                                        Fly</a>
                                                </li>
                                                <li><a class="dropdown-item fw-bold text-primary py-2"
                                                        href="{{ route('modules.index', 'mikro') }}">
                                                        <i class="fas fa-arrow-right me-2"></i>Tüm Mikro
                                                        Çözümleri</a>
                                                </li>
                                                <li>
                                                    <hr class="dropdown-divider my-2">
                                                </li>

                                                <!-- Danışmanlık Çözümleri -->

                                                <li class="dropdown-header text-primary fw-bold">
                                                    <i class="fas fa-microchip me-1"></i> Danışmanlık Çözümleri
                                                </li>

                                                <li><a class="dropdown-item py-2"
                                                        href="{{ url('danismanlik-cozumleri/finans-muhasebe-ic-denetim-ic-kontrol') }}">
                                                        <i class="fas fa-chart-line me-2 text-muted"></i>Finans,
                                                        Muhasebe, İç Denetim & İç Kontrol</a>
                                                </li>
                                                <li><a class="dropdown-item py-2"
                                                        href="{{ url('danismanlik-cozumleri/is-surecleri-yonetim-ve-organizasyon') }}">
                                                        <i class="fas fa-sitemap me-2 text-muted"></i>İş
                                                        Süreçleri,
                                                        Yönetim ve Organizasyon</a>
                                                </li>
                                                <li><a class="dropdown-item py-2"
                                                        href="{{ url('danismanlik-cozumleri/erp-mrp-danismanligi') }}">
                                                        <i class="fas fa-cubes me-2 text-muted"></i>ERP & MRP
                                                        Danışmanlığı</a>
                                                </li>
                                                <li><a class="dropdown-item py-2"
                                                        href="{{ url('danismanlik-cozumleri/raporlama-ve-analiz-danismanligi') }}">
                                                        <i class="fas fa-chart-pie me-2 text-muted"></i>Raporlama
                                                        ve
                                                        Analiz Danışmanlığı</a>
                                                </li>
                                                <li>
                                                    <hr class="dropdown-divider my-2">
                                                </li>



                                                <li><a class="dropdown-item fw-bold text-success py-2"
                                                        href="{{ route('sectors.index') }}">
                                                        <i class="fas fa-arrow-right me-2"></i>Tüm Danışmanlık
                                                        Çözümlerimiz</a></li>
                                            </ul>
                                        </li>
                                        {{-- <li class="dropdown d-lg-none">
                                            <a class="nav-link dropdown-toggle"
                                                href="{{ url('danismanlik-cozumleri') }}">
                                                Hizmetlerimiz
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item"
                                                        href="{{ url('danismanlik-cozumleri/finans-muhasebe-ic-denetim-ic-kontrol') }}">Finans,
                                                        Muhasebe, İç Denetim & İç Kontrol</a></li>
                                                <li><a class="dropdown-item"
                                                        href="{{ url('danismanlik-cozumleri/is-surecleri-yonetim-ve-organizasyon') }}">İş
                                                        Süreçleri, Yönetim ve Organizasyon</a></li>
                                                <li><a class="dropdown-item"
                                                        href="{{ url('danismanlik-cozumleri/erp-mrp-danismanligi') }}">ERP
                                                        & MRP Danışmanlığı</a></li>
                                                <li><a class="dropdown-item"
                                                        href="{{ url('danismanlik-cozumleri/raporlama-ve-analiz-danismanligi') }}">Raporlama
                                                        ve Analiz Danışmanlığı</a></li>
                                                <li>
                                                    <hr class="dropdown-divider">
                                                </li>
                                                <li><a class="dropdown-item fw-bold"
                                                        href="{{ url('danismanlik-cozumleri') }}">Tümünü Gör</a>
                                                </li>
                                            </ul>
                                        </li> --}}

                                        <!-- Hizmetlerimiz - Mega Menu (Desktop) -->
                                        <li class="dropdown dropdown-mega d-none d-lg-block">

                                            <ul class="dropdown-menu">
                                                <li>
                                                    <div class="dropdown-mega-content">
                                                        <div class="row">
                                                            <!-- Sol Taraf - Görsel ve Açıklama -->
                                                            <div class="col-lg-5">
                                                                <div class="dropdown-mega-sub-title">Danışmanlık
                                                                    Çözümleri</div>
                                                                <a href="{{ url('danismanlik-cozumleri') }}"
                                                                    class="d-block mb-3">
                                                                    <img src="{{ asset('images/danismanlik-cozumleri.jpg') }}"
                                                                        alt="Danışmanlık Çözümleri"
                                                                        class="img-fluid rounded mb-2">
                                                                    <p class="text-2 mb-0">ERP + MRP + EĞİTİM +
                                                                        TEKNİK DESTEK + RAPORLAMA + ANALİZ +
                                                                        UYGULAMA + İDARİ DANIŞMANLIK ve daha
                                                                        fazlası...</p>
                                                                </a>
                                                            </div>

                                                            <!-- Sağ Taraf - Hizmet Listesi -->
                                                            <div class="col-lg-7">
                                                                <div class="dropdown-mega-sub-title">Danışmanlık
                                                                    Çözümleri</div>
                                                                <div class="dropdown-mega-sub-nav">
                                                                    <ul class="list list-unstyled">
                                                                        <li>
                                                                            <a class="dropdown-item d-flex align-items-center"
                                                                                href="{{ url('danismanlik-cozumleri/idari-danismanlik-hizmetleri') }}">
                                                                                <span>İdari Danışmanlık
                                                                                    Hizmetleri</span>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a class="dropdown-item d-flex align-items-center"
                                                                                href="{{ url('danismanlik-cozumleri/raporlama-ve-analiz-hizmetleri') }}">

                                                                                <span>Raporlama ve Analiz
                                                                                    Hizmetleri</span>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a class="dropdown-item d-flex align-items-center"
                                                                                href="{{ url('danismanlik-cozumleri/teknik-destek-hizmetleri') }}">

                                                                                <span>Teknik Destek
                                                                                    Hizmetleri</span>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a class="dropdown-item d-flex align-items-center"
                                                                                href="{{ url('danismanlik-cozumleri/erp-mrp-proje-danismanligi') }}">
                                                                                <span>ERP – MRP Proje
                                                                                    Danışmanlığı</span>
                                                                            </a>
                                                                        </li>
                                                                        <a href="{{ url('danismanlik-cozumleri') }}"
                                                                            class="btn btn-link text-decoration-none ps-0">
                                                                            <i class="fas fa-angle-right me-1"></i>
                                                                            Tüm Danışmanlık Çözümleri
                                                                        </a>

                                                                    </ul>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>



                                        <!-- Ürünler & Çözümler - Mega Menu (Desktop) -->

                                        <li>
                                            <a class="nav-link" href="{{ route('contact-us') }}">
                                                İletişim
                                            </a>
                                        </li>


                                    </ul>
                                </nav>
                            </div>

                            <button class="btn header-btn-collapse-nav" data-bs-toggle="collapse"
                                data-bs-target=".header-nav-main nav">
                                <i class="fas fa-bars"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
