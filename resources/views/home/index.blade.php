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






<div class="home-intro glass-panel mt-0" style="border-radius: 0; border-left: none; border-right: none;" id="home-intro">

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


<section class="container py-5 z-index-2 position-relative" id="services">
    <div class="row mb-5">
        <div class="col text-center">
            <h2 class="section-title-glow text-8 mb-2">Hizmetlerimiz</h2>
            <p class="text-color-light opacity-7 text-4">İşletmenizin dijital dönüşüm yolculuğunda yanınızdayız</p>
        </div>
    </div>
    <div class="row gx-4 gy-4 services-row-centered">
        <!-- Hizmet 1 -->
        <div class="col-12 col-md-6 col-lg-4 mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">
            <div class="service-card-modern">
                <div class="service-card-icon-box">
                    <i class="fas fa-cogs"></i>
                </div>
                <div class="service-card-image-box">
                    <img src="{{ asset('images/services/6.png') }}" alt="ERP Satış & Lisanslama">
                </div>
                <h4 class="service-card-title-bottom">ERP Satış & Lisanslama</h4>
            </div>
        </div>

        <!-- Hizmet 2 -->
        <div class="col-12 col-md-6 col-lg-4 mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400">
            <div class="service-card-modern">
                <div class="service-card-icon-box">
                    <i class="fas fa-desktop"></i>
                </div>
                <div class="service-card-image-box">
                    <img src="{{ asset('images/services/urun_conf.png') }}" alt="Kurulum & Konfigürasyon">
                </div>
                <h4 class="service-card-title-bottom">Kurulum & Konfigürasyon</h4>
            </div>
        </div>

        <!-- Hizmet 3 -->
        <div class="col-12 col-md-6 col-lg-4 mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="600">
            <div class="service-card-modern">
                <div class="service-card-icon-box">
                    <i class="fas fa-graduation-cap"></i>
                </div>
                <div class="service-card-image-box">
                    <img src="{{ asset('images/services/2.png') }}" alt="Eğitim & Sertifikasyon">
                </div>
                <h4 class="service-card-title-bottom">Eğitim & Sertifikasyon</h4>
            </div>
        </div>

        <!-- Hizmet 4 -->
        <div class="col-12 col-md-6 col-lg-4 mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="800">
            <div class="service-card-modern">
                <div class="service-card-icon-box">
                    <i class="fas fa-headset"></i>
                </div>
                <div class="service-card-image-box">
                    <img src="{{ asset('images/services/3.png') }}" alt="7/24 Teknik Destek">
                </div>
                <h4 class="service-card-title-bottom">7/24 Teknik Destek</h4>
            </div>
        </div>

        <!-- Hizmet 5 -->
        <div class="col-12 col-md-6 col-lg-4 mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1000">
            <div class="service-card-modern">
                <div class="service-card-icon-box">
                    <i class="fas fa-lightbulb"></i>
                </div>
                <div class="service-card-image-box">
                    <img src="{{ asset('images/services/1.png') }}" alt="Özel Yazılım Çözümü">
                </div>
                <h4 class="service-card-title-bottom">Özel Yazılım Çözümü</h4>
            </div>
        </div>

        <!-- Hizmet 6 -->
        <div class="col-12 col-md-6 col-lg-4 mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1200">
            <div class="service-card-modern">
                <div class="service-card-icon-box">
                    <i class="fas fa-cloud-upload-alt"></i>
                </div>
                <div class="service-card-image-box">
                    <img src="{{ asset('images/services/5.png') }}" alt="Veri Migrasyon Hizmeti">
                </div>
                <h4 class="service-card-title-bottom">Veri Migrasyon Hizmeti</h4>
            </div>
        </div>
    </div>
</section>


<hr class="sci-fi-divider">

<section class=" mb-5">
    <div class="row">
        <div class="col">
            <div class="row mb-5">
                <div class="col text-center">
                    <h2 class="font-weight-bold line-height-2 text-7 mb-1 text-white">Danışmanlık Alanlarımız</h2>
                    <span class="d-block text-color-light text-5 pb-2 mb-2 opacity-7">Uzman kadromuzla size özel
                        çözümler sunuyoruz</span>

                </div>
            </div>

            <div class="container pb-5 mb-5">
                <div class="row">
                    @foreach ($advisors->take(3) as $advisor)
                    <div class="col-md-6 col-lg-4 mb-4">
                        <div class="card card-sci-fi h-100">
                            <img src="{{ asset('storage/' . $advisor->image) }}" class="card-img-top"
                                alt="{{ $advisor->title }}">
                            <div class="card-body p-4">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="sci-fi-icon-ring me-3">
                                        <i class="fas fa-user-tie"></i>
                                    </div>
                                    <h5 class="card-title font-weight-bold text-white mb-0" style="line-height:1.3;">{{ $advisor->title }}</h5>
                                </div>
                                <p class="card-text text-light" style="font-size: 0.95rem;">{!! Str::limit($advisor->description, 100) !!}</p>
                                @if ($advisor->slug)
                                <a href="{{ route('advisors.show', $advisor->slug) }}" class="btn sci-fi-btn btn-rounded mt-3 w-100">Detayları
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

<hr class="sci-fi-divider">

<section class="py-5 position-relative" id="process">
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
                    <strong>1- Firma Analizi</strong>
                    Mevcut süreçlerinizi kullandığınız Erp/yazılımlar, Organizasyon yapınızı ve finansal işleyişinizi analiz ediyoruz.
                </div>
            </div>

            <div class="orb-node node-4 appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="400">
                <i class="fas fa-tasks"></i>
                <div>
                    <strong>2- Planlama</strong>
                    Kapsam ve fazlar ve bütçe netleştirilir. Şeffaf ve süpriz maliyet oluşturmayan bir model kurulur.

                </div>
            </div>

            <div class="orb-node node-2 appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="600">
                <i class="fas fa-sitemap"></i>
                <div>
                    <strong>3- Tasarım</strong>
                    iş süreçleri, ekranlar ve raporlar kurulumunuza özel modellenir. Sistem gerçek işleyinize göre kurgulanır.
                </div>
            </div>

            <div class="orb-node  node-3 appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="800">
                <i class="fas fa-cogs"></i>
                <div>
                    <strong>4- Uygulama</strong>
                    Sistem test edilir ve devreye alınır. Kullanıcılar eğitilir.
                </div>
            </div>

            <div class="orb-node node-5 appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="1000">
                <i class="fas fa-sync-alt"></i>
                <div>
                    <strong>5- İyileştirme</strong>
                    Canlıya geöiş sonrası destek ve geliştirme ve optimizasyon ile sistem sürekli iyileştirilir.
                </div>
            </div>
        </div>



    </div>
</section>
<!-- SCI-FI PROCESS SECTION END -->
<hr class="sci-fi-divider">
<section class="stats stats-section js-stats-counter mega-section mb-0 pb-5">
    <div class="container">
        <div class="stats-inner stats-glow-panel text-white">
            <div class="row g-4">
                <div class="col-12 col-md-6 col-lg-3 stat-box ">
                    <div class="stat-box-inner " data-tilt="data-tilt">
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