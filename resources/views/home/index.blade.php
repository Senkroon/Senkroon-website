@extends('layout.master')
@section('content')

<div class="owl-carousel owl-carousel-light owl-carousel-light-init-fadeIn owl-theme manual dots-inside dots-horizontal-center show-dots-hover nav-inside nav-inside-plus nav-dark nav-md nav-font-size-md show-nav-hover mb-0"
    data-plugin-options="{'autoplayTimeout': 7000, 'autoHeight': true}"
    style=" height: 650px ; background-color: #030612; background-image: url('{{ $sliders->first() ? asset('storage/' . $sliders->first()->background_image) : '' }}'); background-size: cover; background-position: center; background-attachment: fixed;">
    <div class="owl-stage-outer">
        <div class="owl-stage">

            @foreach ($sliders as $slider)
            <div class="owl-item p-relative {{ $loop->first ? 'active' : '' }}">
                <div class="border-radius-2 p-relative z-index-1">

                    <div class="container py-2 py-md-5 ">
                        <div class="row align-items-center">

                            <!-- Mobil İçin Üst Başlık (Sadece Mobilde Görünür) -->
                            <div class="col-12 d-block d-md-none text-center mt-3 mt-md-0 order-1">
                                <h1 class="text-color-light slider-title-mobile font-weight-bold line-height-2 mb-2">
                                    {!! $slider->title !!}
                                </h1>
                            </div>

                            <!-- Yazılar Col-md-4 (Masaüstünde Başlık + İçerik, Mobilde Sadece İçerik) -->
                            <div class="col-md-4 text-center text-md-start order-3 order-md-1 mt-2 mt-md-0 pb-2 pb-md-0">

                                <!-- Masaüstü Başlık (Sadece Masaüstünde Görünür) -->
                                <h1 class="text-color-light text-md-9 text-lg-12 font-weight-bold line-height-2 mb-3 d-none d-md-block">
                                    {!! $slider->title !!}
                                </h1>

                                <div class="text-color-light text-md-5 line-height-6 mb-2 mb-md-4  slider-subtitle-mobile">
                                    {!! $slider->description !!}
                                </div>

                                @if(is_array($slider->features))
                                <ul class="list list-unstyled text-color-light text-3 text-md-4 font-weight-semibold mb-2 mb-md-4">
                                    @foreach($slider->features as $feature)
                                    <li class="mb-1 mb-md-2 d-flex align-items-center justify-content-center justify-content-md-start text-start">
                                        <i class="fas fa-check text-4 text-md-5 me-2 me-md-3" style="color: #ff8c00;"></i> {!! $feature !!}
                                    </li>
                                    @endforeach
                                </ul>
                                @endif

                                <div class="d-flex flex-column flex-sm-row justify-content-center justify-content-md-start align-items-center mb-0 mb-md-3">
                                    @if($slider->button_text)
                                    <a href="{{ $slider->button_link }}" data-hash data-hash-offset="0" data-hash-offset-lg="0"
                                        class="btn btn-rounded font-weight-bold text-2 text-md-3 px-4 px-md-5 py-2 py-md-3 mb-2 mb-sm-0 me-sm-4 d-inline-flex align-items-center text-color-light"
                                        style="background: linear-gradient(90deg, #ff8c00 0%, #ff5100 100%); border: none;">
                                        {{ $slider->button_text }} <i class="fas fa-chevron-right ms-2 mt-1" style="font-size: 0.8em;"></i>
                                    </a>
                                    @endif
                                    @if($slider->secondary_button_text)
                                    <a href="{{ $slider->secondary_button_link }}" data-hash data-hash-offset="0" data-hash-offset-lg="0"
                                        class="btn btn-light btn-rounded font-weight-bold text-color-dark text-2 text-md-3 px-4 px-md-5 py-2 py-md-3 d-inline-flex align-items-center">
                                        {{ $slider->secondary_button_text }}
                                    </a>
                                    @endif
                                </div>

                                @if($slider->bottom_text)
                                <div class="text-color-light text-1 text-md-2 opacity-7 mt-2 mt-md-3">
                                    {!! str_replace('•', '<span class="mx-2">&bull;</span>', $slider->bottom_text) !!}
                                </div>
                                @endif

                            </div>

                            <!-- Resim Col-md-8 -->
                            <div class="col-md-8 order-2 order-md-2 mb-2 mb-md-0 text-center d-flex align-items-center justify-content-center">
                                <div class="p-relative d-inline-block w-100 text-center">
                                    <img class="img-fluid mx-auto d-block slider-img-mobile"
                                        src="{{ $slider->front_image ? asset('storage/' . $slider->front_image) : asset('storage/' . $slider->background_image) }}"
                                        alt="{{ strip_tags($slider->title) }}" style="max-height: 550px; width: auto; object-fit: contain; mix-blend-mode: lighten; filter: drop-shadow(0px 0px 20px rgba(0,0,0,0.5));">
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    <div class="owl-nav">
        <button type="button" role="presentation" class="owl-prev" aria-label="Previous"></button>
        <button type="button" role="presentation" class="owl-next" aria-label="Next"></button>
    </div>

</div>






<div class="home-intro bg-secondary" id="home-intro">

    <div class="row align-items-center">
        <h2
            class="word-rotator slide font-weight-bold text-white text-3 text-sm-4 text-lg-5 line-height-2 mb-2 text-center ">
            <span>Senkroon; süreçlerinizi girişimci bir bakış açısıyla yeniden tasarlayarak, bugünkü operasyonel
                yükünüzü hafifletip yarın için </span>
            <span class="word-rotator-words bg-primary d-inline-block mx-1">
                <b class="is-visible">esnek</b>
                <b>şeffaf</b>
                <b>yönetilebilir</b>
                <b>sürdürülebilir</b>
            </span>
            <span> bir iş modeli
                kurmanıza yardımcı olur.</span>
        </h2>


    </div>

</div>



<!-- <div class="row py-2 mx-5">
    <div class="col-lg-7  mb-lg-0">
        <div class="appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="300">
            <h3 class="font-weight-bold  ">Hakkımızda</h3>
            <h4 class="text-color-primary font-weight-bold text-4 mb-2">Dönüşümün Mimarı, İşinizin Stratejik Ortağı</h4>

            <p class="text-3 mb-4">
                Senkroon, danışmanlık, yazılım ve dijital dönüşüm alanlarında uzmanlaşmış; işletmelerin dijital ve
                operasyonel yolculuklarında sadece bir rehber değil, uçtan uca dönüşümü yöneten stratejik bir iş
                ortağıdır. ERP danışmanlığından iş süreçleri tasarımına, muhasebe ve finansal yapılandırmadan
                kurumsal yazılım çözümlerine kadar geniş bir yelpazede,
                modern iş dünyasının karmaşık ihtiyaçlarına yanıt veriyoruz.
            </p>

            <h4 class="text-color-primary font-weight-bold text-4 mb-2">Çok Boyutlu Yazılım ve Süreç Yönetimi</h4>
            <p class="text-3 mb-3">
                Bizim için teknoloji, işinizin yaşayan bir parçasıdır. Sahadaki derin deneyimimizi analitik bakış
                açısı ve teknolojiyle birleştirerek; işletmenizin ihtiyaç duyduğu her alanda yanınızdayız:
            </p>
            <ul class="text-3 mb-4 ps-3">
                <li>Uçtan Uca Yönetim: ERP süreç yönetimi, CRM (Müşteri İlişkileri Yönetimi), İnsan Kaynakları ve Proje Yönetimi sistemleri.</li>
                <li>Varlık ve İçerik Kontrolü: Fiziki Varlık Yönetimi, İçerik Yönetimi ve Intranet çözümleri.</li>
                <li>Dijital Ticaret: B2B, B2C ve e-ticaret platformlarının iş modelinize tam entegrasyonu.</li>
            </ul>

            <h4 class="text-color-primary font-weight-bold text-4 mb-2">Yaklaşımımız: Analitik Güç, Sahadaki Tecrübe</h4>
            <p class="text-3 mb-3">
                Hazır kalıplar yerine; kurum kültürünüze, çalışma biçiminize ve güncel ihtiyaçlarınıza en uygun
                "terzi usulü" iş modelleri tasarlıyoruz. Standart yazılımların sınırlarını zorlayarak,
                taleplerinize %100 uyum sağlayan özel yazılım kurguları inşa ediyor; veri disiplinini operasyonel
                hız ve şeffaflıkla birleştiriyoruz.
            </p>
            <ul class="text-3 mb-4 ps-3">
                <li>Süreç ve Organizasyon Tasarımı: Karmaşıklığı gideriyor, verimliliği standardize ediyoruz.</li>
                <li>Muhasebe ve Finansal Modelleme: Güçlü bir finansal yapılandırma ile geleceği öngörülebilir kılıyoruz.</li>
                <li>Stratejik Entegrasyon: Teknolojiyi tek başına bir araç değil, işinizin omurgasını güçlendiren stratejik bir yapı hâline getiriyoruz.</li>
            </ul>

            <h4 class="text-color-primary font-weight-bold text-4 mb-2">Amacımız: Veriyle Yönetilen Sürdürülebilir Gelecek</h4>
            <p class="text-3 mb-0">
                Temel hedefimiz; her aşamada güvenilir, ölçülebilir ve sürdürülebilir bir yönetim altyapısı
                kurmaktır. Senkroon ile dijital dönüşüm; sadece bir sistem geçişi değil, işletmenize rekabet
                avantajı sağlayan ve stratejik karar alma mekanizmanızı güçlendirerek geleceği bugünden inşa eden
                bir başarı hikayesidir.
            </p>
        </div>
    </div>
    <div class="col-lg-5 mb-5">
        <div class="appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="300">
            <img src="{{ asset('porto/simages/workcube-about-us.png') }}" class="img-fluid mt-5 rounded shadow-lg"
                alt="Şirket Hikayesi">
        </div>
    </div>
</div> -->

<!-- about us  -->
<!-- <section class="section section-default border-0  appear-animation animated fadeIn appear-animation-visible"
    data-appear-animation="fadeIn" data-appear-animation-delay="750" style="animation-delay: 750ms;">
    <div class="container py-4">

        <div class="row align-items-center">

            <div class="col-md-6">
                <div class="overflow-hidden mb-2">
                    <h2 class="text-color-primary font-weight-bold text-7 mb-0 pt-0 mt-0 appear-animation animated maskUp appear-animation-visible"
                        data-appear-animation="maskUp" data-appear-animation-delay="1200"
                        style="animation-delay: 1200ms;">Hakkımızda </h2>
                </div>
                <div class="appear-animation" data-appear-animation="fadeInLeftShorter"
                    data-appear-animation-delay="300">
                    <p class="text-3 mb-4">
                        Senkroon ; ERP danışmanlığı, iş süreçleri ve organizasyon tasarımı ile muhasebe ve finansal
                        yapılandırma alanlarında uzmanlaşmış, işletmelerin uçtan uca dijital dönüşümünü hedefleyen bir
                        iş ortağıdır.

                    </p>
                    <p class=" text-3 mb-4">
                        ERP projelerinde; Süreç envanteri çıkarımı, rol ve yetki mimarisi, ana veri yönetişimi ve
                        modüler kurgu (Finans-Muhasebe, Satınalma, Satış, Stok, Üretim, MRP, Proje, CRM) üzerine kurulu
                        bir işletim modeli tasarlarız. Entegrasyon mimarisi (banka, e-belge, dış sistemler), veri
                        migrasyonu, iç kontrol ve denetim mekanizmaları, KPI setleri ve yönetim raporlaması ile finansal
                        doğruluk, operasyonel izlenebilirlik ve gerçek zamanlı karar destek altyapısını tek bir entegre
                        platformda tesis ederiz.
                    </p>
                    <p class=" text-3 mb-4">
                        ERP’nin konumlandırılması ve devreye alınmasının yanı sıra, ihtiyaç duyulan ölçek ve yapılarda
                        kurumsal yazılım çözümlerinin doğru mimariyle kurgulanmasını sağlayan entegre hizmet sunarız.

                        Saha yönetimi ve operasyon deneyimimizi analitik ve teknoloji odaklı bir yaklaşımla birleştirir;
                        hazır kalıplar yerine kurum kültürünüze ve çalışma biçiminize uyumlu, size özgü iş modelleri
                        geliştiririz. Hedefimiz; veriye dayalı, güvenilir ve ölçülebilir bir yönetim altyapısı kurarak
                        ERP’yi bir yazılım olmaktan çıkarıp işinizin omurgası hâline getirmektir.
                    </p>
                </div>
            </div>


            <div class="col-md-6 appear-animation animated fadeInLeftShorter appear-animation-visible"
                data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="1000"
                style="animation-delay: 1000ms;">
                <div class="owl-carousel owl-theme nav-inside mb-0 owl-loaded owl-drag owl-carousel-init"
                    data-plugin-options="{'items': 1, 'margin': 10, 'animateOut': 'fadeOut', 'autoplay': true, 'autoplayTimeout': 6000, 'loop': true}"
                    style="height: auto;">


                    <div class="owl-stage-outer">
                        <div class="owl-stage"
                            style="transform: translate3d(-932px, 0px, 0px); transition: all; width: 2796px;">


                            <div class="owl-item " style="width: 456px; margin-right: 10px;">
                                <div>
                                    <img alt="Senkroon Yazilim ERP danismanligi hakkimizda gorseli" class="img-fluid"
                                        src="{{ asset('porto/simages/workcube-about-us.png') }}">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
</section> -->


<section class="container py-5" id="services">
    <div class="row mb-5">
        <div class="col text-center">
            <h2 class="font-weight-bold line-height-2 text-7 mb-1">Hizmetlerimiz</h2>
        </div>
    </div>
    <div class="row gx-4 gy-4">
        <div class="col-12 col-md-6 col-lg-4 mb-4 appear-animation" data-appear-animation="fadeInUpShorter"
            data-appear-animation-delay="200">
            <div
                class="card card-border card-border-top card-border-hover bg-color-light box-shadow-6 box-shadow-hover anim-hover-translate-top-10px transition-3ms h-100">
                <div class="card-body text-center p-4">
                    <div class="mb-3">
                        <i class="fas fa-cogs text-primary text-6"></i>
                    </div>
                    <h4 class="card-title mb-3 text-5 font-weight-bold"> ERP Satış & Lisanslama</h4>
                    <p class="card-text">ERP'nin tüm modüllerini uygun fiyatlarla temin edin.
                        Lisanslama, kurulum ve ilk konfigürasyon hizmetlerimizle işe başlayın.</p>
                </div>
            </div>
        </div>

        <div class="col-12 col-md-6 col-lg-4 mb-4 appear-animation" data-appear-animation="fadeInUpShorter"
            data-appear-animation-delay="400">
            <div
                class="card card-border card-border-top card-border-hover bg-color-light box-shadow-6 box-shadow-hover anim-hover-translate-top-10px transition-3ms h-100">
                <div class="card-body text-center p-4">
                    <div class="mb-3">
                        <i class="fas fa-project-diagram text-primary text-6"></i>
                    </div>
                    <h4 class="card-title mb-3 text-5 font-weight-bold">Kurulum & Konfigürasyon</h4>
                    <p class="card-text">Uzman ekibimiz ERP'yi işletmenizin ihtiyaçlarına göre
                        kurar ve konfigüre eder. Hızlı ve sorunsuz başlangıç garantisi.</p>
                </div>
            </div>
        </div>

        <div class="col-12 col-md-6 col-lg-4 mb-4 appear-animation" data-appear-animation="fadeInUpShorter"
            data-appear-animation-delay="600">
            <div
                class="card card-border card-border-top card-border-hover bg-color-light box-shadow-6 box-shadow-hover anim-hover-translate-top-10px transition-3ms h-100">
                <div class="card-body text-center p-4">
                    <div class="mb-3">
                        <i class="fas fa-chart-line text-primary text-6"></i>
                    </div>
                    <h4 class="card-title mb-3 text-5 font-weight-bold">Eğitim & Sertifikasyon</h4>
                    <p class="card-text">Kullanıcılarınız için kapsamlı ERP eğitimleri ve
                        sertifikasyon programları. Sistem kullanımında uzmanlaşma sağlayın.</p>
                </div>
            </div>
        </div>

        <div class="col-12 col-md-6 col-lg-4 mb-4 appear-animation" data-appear-animation="fadeInUpShorter"
            data-appear-animation-delay="800">
            <div
                class="card card-border card-border-top card-border-hover bg-color-light box-shadow-6 box-shadow-hover anim-hover-translate-top-10px transition-3ms h-100">
                <div class="card-body text-center p-4">
                    <div class="mb-3">
                        <i class="fas fa-users text-primary text-6"></i>
                    </div>
                    <h4 class="card-title mb-3 text-5 font-weight-bold">Teknik Destek</h4>
                    <p class="card-text">ERP kullanımında karşılaştığınız tüm sorunlar için
                        kesintisiz teknik destek hizmeti. Uzman ekibimiz her zaman yanınızda.</p>
                </div>
            </div>
        </div>

        <div class="col-12 col-md-6 col-lg-4 mb-4 appear-animation" data-appear-animation="fadeInUpShorter"
            data-appear-animation-delay="1000">
            <div
                class="card card-border card-border-top card-border-hover bg-color-light box-shadow-6 box-shadow-hover anim-hover-translate-top-10px transition-3ms h-100">
                <div class="card-body text-center p-4">
                    <div class="mb-3">
                        <i class="fas fa-chart-bar text-primary text-6"></i>
                    </div>
                    <h4 class="card-title mb-3 text-5 font-weight-bold">Özel Yazılım Geliştirme</h4>
                    <p class="card-text">Sektörünüze ve işletmenize özel yazılım çözümleri geliştiriyoruz.
                        Standart çözümlerin yetmediği durumlarda tam uyumlu eklentiler.</p>
                </div>
            </div>
        </div>

        <div class="col-12 col-md-6 col-lg-4 mb-4 appear-animation" data-appear-animation="fadeInUpShorter"
            data-appear-animation-delay="1200">
            <div
                class="card card-border card-border-top card-border-hover bg-color-light box-shadow-6 box-shadow-hover anim-hover-translate-top-10px transition-3ms h-100">
                <div class="card-body text-center p-4">
                    <div class="mb-3">
                        <i class="fas fa-digital-tachograph text-primary text-6"></i>
                    </div>
                    <h4 class="card-title mb-3 text-5 font-weight-bold">Veri Migrasyon Hizmeti</h4>
                    <p class="card-text">Mevcut sisteminizdeki verileri ERP'ye güvenle taşıyoruz.
                        Veri kaybı olmadan güvenli geçiş sağlıyoruz.</p>
                </div>
            </div>
        </div>
    </div>

</section>

<hr>







<section class=" mb-5">
    <div class="row">
        <div class="col">
            <div class="row mb-5">
                <div class="col text-center">
                    <h2 class="font-weight-bold line-height-2 text-7 mb-1">Danışmanlık Alanlarımız</h2>
                    <span class="d-block text-color-dark text-5 pb-2 mb-2 opacity-7">Uzman kadromuzla size özel
                        çözümler sunuyoruz</span>

                </div>
            </div>

            <div class="container pb-5 mb-5">
                <div class="row">
                    @foreach ($advisors->take(3) as $advisor)
                    <div class="col-md-6 col-lg-4 mb-4">
                        <div class="card border-0 shadow-sm h-100">
                            <img src="{{ asset('storage/' . $advisor->image) }}" class="card-img-top"
                                alt="{{ $advisor->title }}">
                            <div class="card-body">
                                <h5 class="card-title font-weight-bold">{{ $advisor->title }}</h5>
                                <p class="card-text">{!! Str::limit($advisor->description, 100) !!}</p>
                                @if ($advisor->slug)
                                <a href="{{ route('advisors.show', $advisor->slug) }}" class="btn btn-primary">Detayları
                                    Görüntüle</a>
                                @endif
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>

                @if ($advisors->count() > 3)
                <div class="row">
                    <div class="col text-center">
                        <a href="{{ route('advisors.index') }}"
                            class="btn btn-primary btn-outline btn-rounded font-weight-semibold text-3 btn-px-4 btn-py-2">
                            Tüm Danışmanlık Alanlarını Görüntüle
                        </a>
                    </div>
                </div>
                @endif
            </div>
        </div>
    </div>
</section>




<section class="sci-fi-section" id="process">
    <div class="bg-grid"></div>
    <div class="container sci-fi-content">
        <!-- HEADER -->
        <div class="row mb-4">
            <div class="col-lg-10 mx-auto text-center appear-animation" data-appear-animation="fadeInUpShorter">
                <h2 class="section-title-glow text-8 mb-4">Senkroon’un ERP Yaklaşımı</h2>
                <p class="text-4 mb-0" style="color: #cbd5e1; line-height: 1.8;">
                    Senkroon Yazılım Danışmanlık Dijital Dönüşüm Ltd. Şti., ERP’yi hazır kalıplarla değil, iş modelinizin mimarisiyle kurar. Süreçlerinizi, organizasyon yapınızı ve finansal işleyişinizi uçtan uca analiz eder; kurumunuza özel ekranlar, iş akışları ve yönetim raporları tasarlar. Amaç, bir yazılım kullanmanız değil; operasyonlarınızı tek bir entegre platformda ölçülebilir, denetlenebilir ve ölçeklenebilir şekilde yönetmenizdir. Proje sonunda “ERP kullanıyoruz” değil, “işimizi veriyle yönetiyoruz” seviyesine geçersiniz.
                </p>
            </div>
        </div>

        <!-- ORB INFOGRAPHIC -->
        <div class="orb-container appear-animation" data-appear-animation="fadeIn">
            <div class="orb-ring orb-ring-1"></div>
            <div class="orb-ring orb-ring-2"></div>
            <div class="orb-ring orb-ring-3"></div>

            <div class="glowing-orb">
                <div>VERİYLE<br>YÖNETİLEN<br>İŞLETME</div>
            </div>

            <div class="orb-node node-1 appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="200">
                <i class="fas fa-search"></i>
                <div>
                    <strong> Firma Analizi</strong>
                    Mevcut yapı netleşir
                </div>
            </div>

            <div class="orb-node node-2 appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="400">
                <i class="fas fa-tasks"></i>
                <div>
                    <strong> Planlama</strong>
                    Kapsam ve bütçe belirlenir
                </div>
            </div>

            <div class="orb-node node-3 appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="600">
                <i class="fas fa-sitemap"></i>
                <div>
                    <strong> Tasarım</strong>
                    Kuruma özel kurgulanır
                </div>
            </div>

            <div class="orb-node node-4 appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="800">
                <i class="fas fa-cogs"></i>
                <div>
                    <strong> Uygulama</strong>
                    Sahada hayat bulur
                </div>
            </div>

            <div class="orb-node node-5 appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="1000">
                <i class="fas fa-sync-alt"></i>
                <div>
                    <strong> İyileştirme</strong>
                    Sürekli geliştirilir
                </div>
            </div>
        </div>



    </div>
</section>
<!-- SCI-FI PROCESS SECTION END -->








<section class="stats stats-section js-stats-counter mega-section">
    <div class="container">
        <div class="stats-inner">
            <div class="row g-4">
                <div class="col-12 col-md-6 col-lg-3 stat-box">
                    <div class="stat-box-inner" data-tilt="data-tilt">
                        <i class="fas fa-diagram-project stat-icon" style="color: #ff8500;"></i>
                        <p class="stat-num">
                            <span class="counter" data-from="1" data-to="100" data-speed="3000" data-refresh-interval="50">0</span><span class="sign">+</span>
                        </p>
                        <span class="stat-desc">Tamamlanan Proje</span>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-3 stat-box">
                    <div class="stat-box-inner" data-tilt="data-tilt">
                        <i class="fas fa-business-time stat-icon" style="color: #ff8500;"></i>
                        <p class="stat-num">
                            <span class="counter" data-from="100" data-to="10000" data-speed="3000" data-refresh-interval="50">0</span><span class="sign">+</span>
                        </p>
                        <span class="stat-desc">Calisma / Saat</span>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-3 stat-box">
                    <div class="stat-box-inner" data-tilt="data-tilt">
                        <i class="fas fa-user-group stat-icon" style="color: #ff8500;"></i>
                        <p class="stat-num">
                            <span class="counter" data-from="0" data-to="200" data-speed="3000" data-refresh-interval="50">0</span><span class="sign">+</span>
                        </p>
                        <span class="stat-desc">Mutlu Musteri</span>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-3 stat-box">
                    <div class="stat-box-inner" data-tilt="data-tilt">
                        <i class="fas fa-bullseye stat-icon" style="color: #ff8500;"></i>
                        <p class="stat-num">
                            <span class="counter" data-from="0" data-to="10" data-speed="3000" data-refresh-interval="50">0</span><span class="sign">+</span>
                        </p>
                        <span class="stat-desc">Yil Deneyim</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



{{--<hr class="mb-5">

   <section class="container mb-5">
        <div class="row">
            <div class="col">
                <h4>Referanslarımız</h4>
                <div class="owl-carousel owl-theme stage-margin nav-style-1 owl-loaded owl-drag owl-carousel-init"
                    data-plugin-options="{'items': 2, 'margin': 10, 'loop': false, 'nav': true, 'dots': false, 'stagePadding': 40}"
                    style="height: auto;">

                    <div class="owl-stage-outer">
                        <div class="owl-stage"
                            style="transform: translate3d(0px, 0px, 0px); transition: all; width: 2967px; padding-left: 40px; padding-right: 40px;">
                            <div class="owl-item active" style="width: 278.667px; margin-right: 10px;">
                                <div>
                                    <img alt="Netline firmasina sunulan ERP danismanlik referans gorseli" class="img-fluid rounded" src="{{ asset('porto/simages/netline.png') }}">
</div>
</div>
<div class="owl-item active" style="width: 278.667px; margin-right: 10px;">
    <div>
        <img alt="YGZ firmasina sunulan ERP danismanlik referans gorseli" class="img-fluid rounded" src="{{ asset('porto/simages/ygz.png') }}">
    </div>
</div>
<div class="owl-item active" style="width: 278.667px; margin-right: 10px;">
    <div>
        <img alt="Ekomaxi firmasina sunulan ERP cozumleri referans gorseli" class="img-fluid rounded" src="{{ asset('porto/simages/ekomaxi.png') }}">
    </div>
</div>
<div class="owl-item" style="width: 278.667px; margin-right: 10px;">
    <div>
        <img alt="Teknosis firmasina sunulan ERP danismanlik referans gorseli" class="img-fluid rounded" src="{{ asset('porto/simages/teknosis.png') }}">
    </div>
</div>
</div>
</div>
<div class="owl-nav"><button type="button" role="presentation"
        class="owl-prev disabled"></button><button type="button" role="presentation"
        class="owl-next"></button></div>
<div class="owl-dots disabled"></div>
</div>
</div>
</div>
</section> --}}






{{-- <div class="container py-4 my-5 mb-5" id="news">
        <div class="row">
            <div class="col text-center">
                <h2 class="font-weight-bold line-height-2 text-7 mb-1">Haberler & Blog</h2>
                <span class="d-block text-color-dark text-5 pb-2 mb-4 opacity-7">Workcube ERP Bayisi</span>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 mb-5 mb-md-0">
                <article>
                    <a href="#" class="text-decoration-none">
                        <span class="thumb-info thumb-info-no-borders custom-thumb-info-style-1 pb-2 mb-2 mb-md-4">
                            <span class="thumb-info-wrapper">
                                <img src="img/demos/seo/blog/blog-1.jpg" class="img-fluid" alt="Workcube ERP neden tercih edilmeli blog kapak gorseli">
                                <span class="custom-thumb-info-date text-color-light bg-primary">
                                    27
                                    <span>KAS</span>
                                </span>
                            </span>
                        </span>
                    </a>
                    <h2 class="font-weight-semibold custom-fs-1 line-height-3 ls-0 mb-2"><a href="#"
                            class="text-color-dark text-decoration-none">Workcube ERP Neden Tercih Edilmeli?</a>
                    </h2>
                    <p class="mb-0">Modern işletmelerin dijital dönüşüm ihtiyaçları her geçen gün artarken,
                        doğru ERP seçimi
                        kritik önem taşıyor. Workcube ERP'nin esnek yapısı ve güçlü özellikleri ile işletmenizi
                        nasıl dönüştürebileceğinizi keşedin..."
                </article>
            </div>
            <div class="col-md-4 mb-5 mb-md-0">
                <article>
                    <a href="#" class="text-decoration-none">
                        <span class="thumb-info thumb-info-no-borders custom-thumb-info-style-1 pb-2 mb-2 mb-md-4">
                            <span class="thumb-info-wrapper">
                                <img src="img/demos/seo/blog/blog-2.jpg" class="img-fluid" alt="Workcube ERP modulleri ve ozellikleri blog kapak gorseli">
                                <span class="custom-thumb-info-date text-color-light bg-primary">
                                    12
                                    <span>ARA</span>
                                </span>
                            </span>
                        </span>
                    </a>
                    <h2 class="font-weight-semibold custom-fs-1 line-height-3 ls-0 mb-2"><a href="#"
                            class="text-color-dark text-decoration-none">Workcube ERP Modülleri ve
                            Özellikleri</a></h2>
                    <p class="mb-0">Workcube ERP'nin sunduğu zengin modül yelpazesi ile işletmenizin her
                        departmanının
                        ihtiyaçlarını karşılayabilirsiniz. Finansman, İK, CRM, üretim, lojistik ve daha
                        fazlası...
                        Hangi modülün işletmenize uygun olduğunu keşedin...</p>
                </article>
            </div>
            <div class="col-md-4">
                <article>
                    <a href="#" class="text-decoration-none">
                        <span class="thumb-info thumb-info-no-borders custom-thumb-info-style-1 pb-2 mb-2 mb-md-4">
                            <span class="thumb-info-wrapper">
                                <img src="img/demos/seo/blog/blog-3.jpg" class="img-fluid" alt="Workcube ERP basari hikayeleri blog kapak gorseli">
                                <span class="custom-thumb-info-date text-color-light bg-primary">
                                    12
                                    <span>ARA</span>
                                </span>
                            </span>
                        </span>
                    </a>
                    <h2 class="font-weight-semibold custom-fs-1 line-height-3 ls-0 mb-2"><a href="#"
                            class="text-color-dark text-decoration-none">Workcube ERP Başarı Hikayeleri</a></h2>
                    <p class="mb-0">Workcube ERP ile dijital dönüşümünü tamamlayan işletmelerin gerçek
                        deneyimlerini okuyun.
                        Farklı sektörlerden referanslarımızın Workcube ERP ile elde ettiği verimlilik artışı ve
                        maliyet tasarrufu hikayelerini keşfedin...</p>
                </article>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col text-center">
                <a href="#"
                    class="btn btn-primary btn-outline btn-rounded font-weight-semibold text-4 btn-px-5 btn-py-2">Tüm
                    Yazıları Görüntüle</a>
            </div>
        </div>
    </div> --}}


<script>
    document.addEventListener("DOMContentLoaded", function() {
        const statsSection = document.querySelector('.stats-section');

        function animateCounter(counterEl) {
            if (counterEl.dataset.animated === 'true') {
                return;
            }

            const from = Number(counterEl.dataset.from ?? 0);
            const to = Number(counterEl.dataset.to ?? counterEl.textContent.trim() ?? 0);
            const duration = Number(counterEl.dataset.speed ?? 2000);
            const startTime = performance.now();

            counterEl.dataset.animated = 'true';

            function update(now) {
                const progress = Math.min((now - startTime) / duration, 1);
                const current = Math.floor(from + (to - from) * progress);
                counterEl.textContent = current;

                if (progress < 1) {
                    requestAnimationFrame(update);
                } else {
                    counterEl.textContent = to;
                }
            }

            requestAnimationFrame(update);
        }

        function runStatsAnimation() {
            if (!statsSection) {
                return;
            }

            statsSection.classList.add('is-visible');
            statsSection.querySelectorAll('.counter').forEach(animateCounter);
        }

        if (statsSection && 'IntersectionObserver' in window) {
            const observer = new IntersectionObserver((entries, obs) => {
                entries.forEach((entry) => {
                    if (entry.isIntersecting) {
                        runStatsAnimation();
                        obs.disconnect();
                    }
                });
            }, {
                threshold: 0.35
            });

            observer.observe(statsSection);
        } else {
            runStatsAnimation();
        }

        // PopupManager'ın yüklenmesini bekle
        setTimeout(() => {
            if (window.popupManager) {
                // 3 saniye sonra WhatsApp popup'ı aç
                setTimeout(() => {
                    window.popupManager.showPopup("wa-popup");
                }, 3000);
            }
        }, 100);
    });
</script>
@endsection