<header id="header"
    data-plugin-options="{'stickyEnabled': true, 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': false, 'stickyStartAt': 88, 'stickySetTop': '0px', 'stickyChangeLogo': true}">

    {{-- ===== TOP BAR ===== --}}
    <div class="navbar-top-bar d-none d-lg-block">
        <div class="container-fluid px-4">
            <div class="d-flex align-items-center justify-content-between" style="height: 44px;">
                {{-- Left: Brand slogan --}}
                <div class="d-flex align-items-center gap-2">
                    <i class="fas fa-shield-alt navbar-top-bar-icon"></i>
                    <span class="navbar-top-bar-slogan">GÜVEN, BİLGİ VE TEKNOLOJİNİN SENKROON'U</span>
                </div>
                {{-- Right: Contact + Socials --}}
                <div class="d-flex align-items-center gap-3">
                    <a href="mailto:info@senkroon.com" class="navbar-top-bar-link">
                        <i class="fas fa-envelope me-1"></i>info@senkroon.com
                    </a>
                    <span class="navbar-top-bar-divider">|</span>
                    <a href="tel:+905306690444" class="navbar-top-bar-link">
                        <i class="fas fa-phone me-1"></i>0530 669 04 44
                    </a>
                    <span class="navbar-top-bar-divider">|</span>
                    <div class="d-flex align-items-center gap-2">
                        <a href="https://www.instagram.com/senkroon_yazilim?igsh=MWtvc2U0ZGJwZ3M4aA%3D%3D&utm_source=qr"
                            target="_blank" class="navbar-top-bar-social" title="Instagram">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="https://www.youtube.com/@Senkroon_yazilim" target="_blank"
                            class="navbar-top-bar-social" title="YouTube">
                            <i class="fab fa-youtube"></i>
                        </a>
                        <a href="https://www.linkedin.com/company/aisenkroonyazilim" target="_blank"
                            class="navbar-top-bar-social" title="LinkedIn">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- ===== MAIN NAVBAR ===== --}}
    <div class="header-body">
        <div class="header-container mx-1 mx-lg-4">
            <div class="header-row">

                {{-- Logo --}}
                <div class="header-column">
                    <div class="header-row">
                        <div class="header-logo">
                            <a href="{{ route('home.index') }}">
                                <img src="{{ asset('porto/simages/Normal.png') }}" width="230px"
                                    alt="Senkroon Logo" class="img-fluid" />
                            </a>
                        </div>
                    </div>
                </div>

                {{-- Nav + CTA --}}
                <div class="header-column justify-content-end">
                    <div class="header-row">
                        <div class="header-nav pt-1">
                            <div class="header-nav-main header-nav-main-effect-1 header-nav-main-sub-effect-1">
                                <nav class="collapse">
                                    <ul class="nav nav-pills" id="mainNav">

                                        {{-- ANASAYFA --}}
                                        <li class="d-none d-lg-block">
                                            <a class="nav-link navbar-main-link" href="{{ route('home.index') }}">
                                                ANASAYFA
                                            </a>
                                        </li>
                                        <li class="navbar-separator d-none d-lg-block"><span>|</span></li>

                                        {{-- ÇÖZÜMLER (Desktop Mega Menu) --}}
                                        <li class="dropdown dropdown-mega d-none d-lg-block">
                                            <a class="nav-link navbar-main-link dropdown-toggle"
                                                href="{{ route('home.products-and-solutions') }}">
                                                ÇÖZÜMLER
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <div class="dropdown-mega-content">
                                                        <div class="row">
                                                            {{-- Workcube --}}
                                                            <div class="col-lg-3">
                                                                <div class="dropdown-mega-sub-title">
                                                                    <a class="font-weight-bold text-4"
                                                                        href="{{ route('modules.index', 'workcube') }}">
                                                                        Tüm Workcube Çözümleri</a>
                                                                </div>
                                                                <a href="{{ route('modules.index', 'workcube') }}" class="d-block mb-3">
                                                                    <img src="{{ asset('porto/simages/W3_logo.png') }}"
                                                                        alt="Workcube" class="img-fluid rounded mb-2">
                                                                    <p class="text-2 mb-0 text-default ">ERP + CRM + HR + PMS + PAM + CMS + DAM + LMS SUBO + Intranet + E-Devlet ve daha fazlası...</p>
                                                                </a>
                                                                <div class="dropdown-mega-sub-nav">
                                                                    <div class="row">
                                                                        <div class="col-6">
                                                                            <ul class="list list-unstyled">
                                                                                <li><a class="dropdown-item" href="{{ route('modules.show', ['workcube', 'erp-satis-satinalma-dagitim-sd-scm']) }}">Workcube ERP</a></li>
                                                                                <li><a class="dropdown-item" href="{{ route('modules.show', ['workcube', 'crm-musteri-iliskileri-yonetimi']) }}">Workcube CRM</a></li>
                                                                                <li><a class="dropdown-item" href="{{ route('modules.show', ['workcube', 'insan-kaynaklari-ik']) }}">Workcube HR</a></li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="col-6">
                                                                            <ul class="list list-unstyled">
                                                                                <li><a class="dropdown-item" href="{{ route('modules.show', ['workcube', 'pam-fiziki-varlik-tesis-yonetimi-tamir-bakim']) }}">Workcube PAM</a></li>
                                                                                <li><a class="dropdown-item" href="{{ route('modules.show', ['workcube', 'proje-yonetim-sistemi']) }}">Workcube PMS</a></li>
                                                                                <li><a class="dropdown-item" href="{{ route('modules.show', ['workcube', 'cms-intranet-icerik-yonetimi']) }}">Workcube CMS</a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                    <a href="{{ route('modules.index', 'workcube') }}" class="btn btn-link text-decoration-none ps-0">
                                                                        <i class="fas fa-angle-right me-1"></i>Tüm Workcube Çözümleri
                                                                    </a>
                                                                </div>
                                                            </div>

                                                            {{-- Uyumsoft --}}
                                                            <div class="col-lg-3">
                                                                <div class="dropdown-mega-sub-title">
                                                                    <a class="font-weight-bold text-4"
                                                                        href="{{ route('modules.index', 'uyumsoft') }}">
                                                                        Tüm Uyumsoft Çözümleri</a>
                                                                </div>
                                                                <a href="{{ route('modules.index', 'uyumsoft') }}" class="d-block mb-3">
                                                                    <img src="{{ asset('porto/simages/uyumsoft.png') }}"
                                                                        alt="Uyumsoft" class="img-fluid rounded mb-2">
                                                                    <p class="text-2 mb-0 text-default ">Girus Ticari + Girus CRM + Girus HR ile ticari, müşteri ve insan kaynakları süreçlerinizi tek platformda yönetin.</p>
                                                                </a>
                                                                <div class="dropdown-mega-sub-nav">
                                                                    <div class="row">
                                                                        <div class="col-6">
                                                                            <ul class="list list-unstyled">
                                                                                <li><a class="dropdown-item" href="{{ route('modules.show', ['uyumsoft', 'girus-ticari']) }}">Girus Ticari</a></li>
                                                                                <li><a class="dropdown-item" href="{{ route('modules.show', ['uyumsoft', 'girus-crm']) }}">Girus CRM</a></li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="col-6">
                                                                            <ul class="list list-unstyled">
                                                                                <li><a class="dropdown-item" href="{{ route('modules.show', ['uyumsoft', 'girus-hr']) }}">Girus HR</a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                    <a href="{{ route('modules.index', 'uyumsoft') }}" class="btn btn-link text-decoration-none ps-0">
                                                                        <i class="fas fa-angle-right me-1"></i>Tüm Uyumsoft Çözümleri
                                                                    </a>
                                                                </div>
                                                            </div>

                                                            {{-- Dia --}}
                                                            <div class="col-lg-3">
                                                                <div class="dropdown-mega-sub-title">
                                                                    <a class="font-weight-bold text-4"
                                                                        href="{{ route('modules.index', 'dia') }}">
                                                                        Tüm DİA Çözümleri</a>
                                                                </div>


                                                                <a href="{{ route('modules.index', 'dia') }}" class="d-block mb-3">
                                                                    <img src="{{ asset('porto/simages/dia.png') }}"
                                                                        alt="dia" class="img-fluid rounded mb-2">
                                                                    <p class="text-2 mb-0 text-default ">Ön muhasebe, genel muhasebe, stok-depo ve daha fazlası.</p>
                                                                </a>


                                                                <div class="dropdown-mega-sub-nav">
                                                                    <div class="row">
                                                                        <div class="col-6">
                                                                            <ul class="list list-unstyled">
                                                                                <li><a class="dropdown-item" href="{{ route('modules.show', ['dia', 'dia-erp']) }}">DİA ERP</a></li>
                                                                                <li><a class="dropdown-item" href="{{ route('modules.show', ['dia', 'dia-crm']) }}">DİA CRM</a></li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="col-6">
                                                                            <ul class="list list-unstyled">
                                                                                <li><a class="dropdown-item" href="{{ route('modules.show', ['dia', 'dia-e-donusum']) }}">E-Dönüşüm</a></li>
                                                                                <li><a class="dropdown-item" href="{{ route('modules.show', ['dia', 'dia-e-ticaret']) }}">E-Ticaret</a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                    <a href="{{ route('modules.index', 'dia') }}" class="btn btn-link text-decoration-none ps-0">
                                                                        <i class="fas fa-angle-right me-1"></i>Tüm DİA Çözümleri
                                                                    </a>
                                                                </div>
                                                            </div>

                                                            {{-- Danışmanlık --}}
                                                            <div class="col-lg-3">
                                                                <div class="dropdown-mega-sub-title">
                                                                    <a class="font-weight-bold text-4"
                                                                        href="{{ route('advisors.index') }}">
                                                                        Danışmanlık Hizmetleri</a>
                                                                </div>
                                                                <div class="dropdown-mega-sub-nav">
                                                                    <ul class="list list-unstyled">
                                                                        <li><a class="dropdown-item d-flex align-items-center" href="{{ url('danismanlik-cozumleri/finans-muhasebe-ic-denetim-ic-kontrol') }}">Finans, Muhasebe, İç Denetim & İç Kontrol</a></li>
                                                                        <li><a class="dropdown-item d-flex align-items-center" href="{{ url('danismanlik-cozumleri/is-surecleri-yonetim-ve-organizasyon') }}">İş Süreçleri, Yönetim ve Organizasyon</a></li>
                                                                        <li><a class="dropdown-item d-flex align-items-center" href="{{ url('danismanlik-cozumleri/erp-mrp-danismanligi') }}">ERP & MRP Danışmanlığı</a></li>
                                                                        <li><a class="dropdown-item d-flex align-items-center" href="{{ url('danismanlik-cozumleri/raporlama-ve-analiz-danismanligi') }}">Raporlama ve Analiz Danışmanlığı</a></li>
                                                                    </ul>
                                                                    <a href="{{ url('danismanlik-cozumleri') }}" class="btn btn-link text-decoration-none ps-0">
                                                                        <i class="fas fa-angle-right me-1"></i>Tüm Danışmanlık Çözümleri
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="navbar-separator d-none d-lg-block"><span>|</span></li>



                                        {{-- KURUMSAL dropdown --}}
                                        <li class="dropdown d-none d-lg-block">
                                            <a class="nav-link navbar-main-link dropdown-toggle" href="{{ route('home.about') }}">
                                                KURUMSAL
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a class="dropdown-item" href="{{ route('home.about') }}">
                                                        <i class="fas fa-building me-2 text-muted"></i>Hakkımızda
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="{{ route('home.faq') }}">
                                                        <i class="fas fa-question-circle me-2 text-muted"></i>Sıkça Sorulan Sorular
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="{{ route('home.why-senkroon') }}">
                                                        <i class="fas fa-star me-2 text-muted"></i>Neden Senkroon?
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="{{ route('home.media') }}">
                                                        <i class="fas fa-images me-2 text-muted"></i>Medya Galerisi
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="navbar-separator d-none d-lg-block"><span>|</span></li>

                                        {{-- İLETİŞİM --}}
                                        <li class="d-none d-lg-block">
                                            <a class="nav-link navbar-main-link" href="{{ route('contact-us') }}">
                                                İLETİŞİM
                                            </a>
                                        </li>

                                        {{-- ===== MOBİL MENU (d-lg-none) ===== --}}
                                        <li class="d-lg-none">
                                            <a class="nav-link" href="{{ route('home.index') }}">Anasayfa</a>
                                        </li>
                                        <li class="dropdown d-lg-none">
                                            <a class="nav-link dropdown-toggle" href="{{ route('modules.index', 'workcube') }}">
                                                Çözümler & Hizmetlerimiz
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li class="dropdown-header text-primary fw-bold"><i class="fas fa-cube me-1"></i> Workcube Çözümleri</li>
                                                <li><a class="dropdown-item py-2" href="{{ route('modules.show', ['workcube', 'erp-satis-satinalma-dagitim-sd-scm']) }}"><i class="fas fa-chart-line me-2 text-muted"></i>Workcube ERP</a></li>
                                                <li><a class="dropdown-item py-2" href="{{ route('modules.show', ['workcube', 'crm-musteri-iliskileri-yonetimi']) }}"><i class="fas fa-users me-2 text-muted"></i>Workcube CRM</a></li>
                                                <li><a class="dropdown-item py-2" href="{{ route('modules.show', ['workcube', 'insan-kaynaklari-ik']) }}"><i class="fas fa-user-tie me-2 text-muted"></i>Workcube HR</a></li>
                                                <li><a class="dropdown-item fw-bold text-primary py-2" href="{{ route('modules.index', 'workcube') }}"><i class="fas fa-arrow-right me-2"></i>Tüm Workcube Çözümleri</a></li>
                                                <li>
                                                    <hr class="dropdown-divider my-2">
                                                </li>
                                                <li class="dropdown-header text-primary fw-bold"><i class="fas fa-layer-group me-1"></i> Uyumsoft Çözümleri</li>
                                                <li><a class="dropdown-item py-2" href="{{ route('modules.show', ['uyumsoft', 'girus-ticari']) }}"><i class="fas fa-briefcase me-2 text-muted"></i>Girus Ticari</a></li>
                                                <li><a class="dropdown-item py-2" href="{{ route('modules.show', ['uyumsoft', 'girus-crm']) }}"><i class="fas fa-address-book me-2 text-muted"></i>Girus CRM</a></li>
                                                <li><a class="dropdown-item py-2" href="{{ route('modules.show', ['uyumsoft', 'girus-hr']) }}"><i class="fas fa-user-friends me-2 text-muted"></i>Girus HR</a></li>

                                                <li class="dropdown-header text-primary fw-bold mt-2"><i class="fas fa-cloud me-1"></i> DİA Çözümleri</li>
                                                <li><a class="dropdown-item py-2" href="{{ route('modules.show', ['dia', 'dia-erp']) }}"><i class="fas fa-cubes me-2 text-muted"></i>DİA ERP</a></li>
                                                <li><a class="dropdown-item py-2" href="{{ route('modules.show', ['dia', 'dia-crm']) }}"><i class="fas fa-handshake me-2 text-muted"></i>DİA CRM</a></li>
                                                <li><a class="dropdown-item py-2" href="{{ route('modules.show', ['dia', 'dia-e-donusum']) }}"><i class="fas fa-exchange-alt me-2 text-muted"></i>E-Dönüşüm</a></li>
                                                <li>
                                                    <hr class="dropdown-divider my-2">
                                                </li>
                                                <li class="dropdown-header text-primary fw-bold"><i class="fas fa-microchip me-1"></i> Danışmanlık Çözümleri</li>
                                                <li><a class="dropdown-item py-2" href="{{ url('danismanlik-cozumleri/finans-muhasebe-ic-denetim-ic-kontrol') }}"><i class="fas fa-chart-line me-2 text-muted"></i>Finans, Muhasebe, İç Denetim & İç Kontrol</a></li>
                                                <li><a class="dropdown-item py-2" href="{{ url('danismanlik-cozumleri/erp-mrp-danismanligi') }}"><i class="fas fa-cubes me-2 text-muted"></i>ERP & MRP Danışmanlığı</a></li>
                                                <li><a class="dropdown-item fw-bold text-success py-2" href="{{ route('advisors.index') }}"><i class="fas fa-arrow-right me-2"></i>Tüm Danışmanlık Çözümlerimiz</a></li>
                                            </ul>
                                        </li>
                                        <li class="d-lg-none">
                                            <a class="nav-link" href="{{ route('home.about') }}">Hakkımızda</a>
                                        </li>
                                        <li class="d-lg-none">
                                            <a class="nav-link" href="{{ route('home.media') }}">Medya Galerisi</a>
                                        </li>
                                        <li class="d-lg-none">
                                            <a class="nav-link" href="{{ route('contact-us') }}">İletişim</a>
                                        </li>

                                    </ul>
                                </nav>
                            </div>

                            {{-- Desktop: Demo Talep Et CTA --}}
                            <div class="d-none d-lg-flex align-items-center ms-3">
                                <a href="{{ route('contact-us') }}" class="navbar-cta-btn">
                                    <i class="fas fa-calendar-alt me-2"></i>Demo Talep Et
                                    <i class="fas fa-chevron-right ms-2"></i>
                                </a>
                            </div>

                            {{-- Mobile toggle --}}
                            <button class="btn header-btn-collapse-nav d-lg-none" data-bs-toggle="collapse"
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