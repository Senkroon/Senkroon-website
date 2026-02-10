<header id="header" class="header-effect-shrink" style="margin-top: 0 !important; padding-top: 0 !important;"
    data-plugin-options="{'stickyEnabled': true, 'stickyEffect': 'shrink', 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': false, 'stickyChangeLogo': true, 'stickyStartAt': 30, 'stickyHeaderContainerHeight': 70}">
    <div class="header-body header-body-bottom-border border-top-0">
        <div class="header-container mx-1 mx-lg-5 ">
            <div class="header-row">
                <div class="header-column">
                    <div class="header-row">
                        <div class="">
                            <a href="{{ url('/') }}">
                                <img src="{{ asset('porto/simages/Normal.png') }}" width="250px" alt="senkroon logo"
                                    class="img-fluid" />
                            </a>
                        </div>
                    </div>
                </div>
                <div class="header-column justify-content-end">
                    <div class="header-row">
                        <div class="header-nav header-nav-links">
                            <div
                                class="header-nav-main header-nav-main-text-capitalize header-nav-main-effect-2 header-nav-main-sub-effect-1">
                                <nav class="collapse">
                                    <ul class="nav nav-pills" id="mainNav">
                                        <li>
                                            <a class="nav-link" href="{{ route('home.index') }}">
                                                Anasayfa
                                            </a>
                                        </li>
                                        <li>
                                            <a class="nav-link" href="{{ route('home.about') }}">
                                                Hakkımızda
                                            </a>
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
                                                                    <p class="text-2 mb-0">ERP + CRM + HR + PMS +
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
                                                                    <p class="text-2 mb-0">Mikro Run + Mikro Jump +
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
                                                        <i class="fas fa-users me-2 text-muted"></i>Workcube CRM</a>
                                                </li>
                                                <li><a class="dropdown-item py-2"
                                                        href="{{ route('modules.show', ['workcube', 'insan-kaynaklari-ik']) }}">
                                                        <i class="fas fa-user-tie me-2 text-muted"></i>Workcube HR</a>
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
                                                        <i class="fas fa-play me-2 text-muted"></i>Mikro Run</a></li>
                                                <li><a class="dropdown-item py-2"
                                                        href="{{ route('modules.show', ['mikro', 'mikro-jump']) }}">
                                                        <i class="fas fa-arrow-up me-2 text-muted"></i>Mikro Jump</a>
                                                </li>
                                                <li><a class="dropdown-item py-2"
                                                        href="{{ route('modules.show', ['mikro', 'mikro-fly']) }}">
                                                        <i class="fas fa-paper-plane me-2 text-muted"></i>Mikro Fly</a>
                                                </li>
                                                <li><a class="dropdown-item fw-bold text-primary py-2"
                                                        href="{{ route('modules.index', 'mikro') }}">
                                                        <i class="fas fa-arrow-right me-2"></i>Tüm Mikro Çözümleri</a>
                                                </li>
                                                <li>
                                                    <hr class="dropdown-divider my-2">
                                                </li>

                                                <!-- Danışmanlık Çözümleri -->

                                                <li class="dropdown-header text-primary fw-bold">
                                                    <i class="fas fa-microchip me-1"></i> Danışmanlık Çözümleri
                                                </li>

                                                <li><a class="dropdown-item py-2"
                                                        href="{{ url('danismanlik-cozumleri/idari-danismanlik-hizmetleri') }}">
                                                        <i class="fas fa-building-shield me-2 text-muted"></i>İdari
                                                        Danışmanlık
                                                        Hizmetleri</a>
                                                </li>
                                                <li><a class="dropdown-item py-2"
                                                        href="{{ url('danismanlik-cozumleri/raporlama-ve-analiz-hizmetleri') }}">
                                                        <i class="fas fa-chart-pie me-2 text-muted"></i>Raporlama ve
                                                        Analiz
                                                        Hizmetleri</a>
                                                </li>
                                                <li><a class="dropdown-item py-2"
                                                        href="{{ url('danismanlik-cozumleri/teknik-destek-hizmetleri') }}">
                                                        <i class="fas fa-headset me-2 text-muted"></i>Teknik Destek
                                                        Hizmetleri</a>
                                                </li>
                                                <li><a class="dropdown-item py-2"
                                                        href="{{ url('danismanlik-cozumleri/erp-mrp-proje-danismanligi') }}">
                                                        <i class="fas fa-project-diagram me-2 text-muted"></i>ERP – MRP
                                                        Proje
                                                        Danışmanlığı</a>
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
                                        <li class="dropdown d-lg-none">
                                            <a class="nav-link dropdown-toggle"
                                                href="{{ url('danismanlik-cozumleri') }}">
                                                Hizmetlerimiz
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item"
                                                        href="{{ url('danismanlik-cozumleri/idari-danismanlik-hizmetleri') }}">İdari
                                                        Danışmanlık Hizmetleri</a></li>
                                                <li><a class="dropdown-item"
                                                        href="{{ url('danismanlik-cozumleri/raporlama-ve-analiz-hizmetleri') }}">Raporlama
                                                        ve Analiz Hizmetleri</a></li>
                                                <li><a class="dropdown-item"
                                                        href="{{ url('danismanlik-cozumleri/teknik-destek-hizmetleri') }}">Teknik
                                                        Destek Hizmetleri</a></li>
                                                <li><a class="dropdown-item"
                                                        href="{{ url('danismanlik-cozumleri/egitim-ve-uygulama-hizmetleri') }}">Eğitim
                                                        ve Uygulama Hizmetleri</a></li>
                                                <li><a class="dropdown-item"
                                                        href="{{ url('danismanlik-cozumleri/erp-mrp-proje-danismanligi') }}">ERP
                                                        – MRP Proje Danışmanlığı</a></li>
                                                <li>
                                                    <hr class="dropdown-divider">
                                                </li>
                                                <li><a class="dropdown-item fw-bold"
                                                        href="{{ url('danismanlik-cozumleri') }}">Tümünü Gör</a>
                                                </li>
                                            </ul>
                                        </li>

                                        <!-- Hizmetlerimiz - Mega Menu (Desktop) -->
                                        <li class="dropdown dropdown-mega d-none d-lg-block">
                                            {{-- <a class="nav-link dropdown-toggle"
                                                href="{{ url('danismanlik-cozumleri') }}">
                                                Hizmetlerimiz
                                            </a> --}}
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



                                        <li class="d-none d-lg-block d-sm-block hide-1000-1100">
                                            <a class="nav-link " href="{{ route('home.faq') }}">
                                                Sık sorulan sorular
                                            </a>
                                        </li>


                                    </ul>
                                    <div class="d-flex   justify-content-center align-items-center mt-3 mt-lg-0 ">
                                        <a class="  d-lg-block d-none  btn btn-primary"
                                            href="{{ route('contact-us') }}">
                                            Demo Talep Et
                                        </a>
                                    </div>


                                </nav>


                            </div>
                        </div>
                        {{-- <div class="header-nav-features header-nav-features-no-border">
                            <div class="header-nav-feature header-nav-features-search d-inline-flex">
                                <a href="#" class="header-nav-features-toggle text-decoration-none"
                                    data-focus="headerSearch" aria-label="Search">
                                    <i
                                        class="icons icon-magnifier header-nav-top-icon font-weight-bold text-4 top-2 text-color-hover-primary"></i>
                                </a>
                                <div class="header-nav-features-dropdown header-nav-features-dropdown-mobile-fixed"
                                    id="headerTopSearchDropdown">
                                    <form role="search" action="page-search-results.html" method="get">
                                        <div class="simple-search input-group">
                                            <input class="form-control text-1" id="headerSearch" name="q" type="search"
                                                value="" placeholder="Search...">
                                            <button class="btn" type="submit" aria-label="Search">
                                                <i
                                                    class="icons icon-magnifier header-nav-top-icon font-weight-bold text-color-dark text-4 text-color-hover-primary top-2"></i>
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div> --}}
                        <button class="btn header-btn-collapse-nav" data-bs-toggle="collapse"
                            data-bs-target=".header-nav-main nav">
                            <i class="fas fa-bars"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>


