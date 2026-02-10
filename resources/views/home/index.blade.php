@extends('layout.master')
@section('content')
    <div class="owl-carousel owl-carousel-light owl-carousel-light-init-fadeIn owl-theme manual nav-style-1 nav-arrows-thin nav-inside nav-inside-plus nav-dark nav-lg nav-font-size-lg rounded-nav nav-borders show-nav-hover mb-0 home-hero-carousel"
        data-plugin-options="{'autoplay': true, 'autoplayTimeout': 14000}" style=" min-height: 500px; max-height: 1000px;
                                          height: calc(80vh - 20px); background-color:#f4f4f4">
        <div class="owl-stage-outer">
            <div class="owl-stage">

                <!-- Carousel Slide 1 -->
                @foreach ($sliders as $slider)
                    <div class="owl-item p-relative overflow-hidden {{ $loop->first ? 'active' : '' }}">
                        <div class=" border-radius-2 p-relative z-index-1 overflow-hidden">
                            <div class="mx-5">
                                <div class="row justify-content-center align-items-center">


                                    <div class=" col-lg-5 text-center text-lg-start   order-2 order-lg-1">

                                        <h1 class="text-4 text-lg-6 font-weight-semibold line-height-1  mb-4 appear-animation"
                                            data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">
                                            {{ $slider->title }}
                                        </h1>
                                        <div class="appear-animation" data-appear-animation="fadeInUpShorter"
                                            data-appear-animation-delay="400">
                                            <h4 class="text-2 text-lg-4 font-weight-light  line-height-5 mb-4 appear-animation"
                                                data-appear-animation="fadeInUpShorter" data-appear-animation-delay="0">
                                                {{ $slider->subtitle }}
                                            </h4>

                                            <h4
                                                class="text-2 text-lg-4 pe-lg-5  font-weight-light line-height-5   mb-2 mb-lg-4">
                                                {{ $slider->description }}
                                            </h4>
                                        </div>
                                        @if($slider->button_text)
                                            <div class="appear-animation" data-appear-animation="fadeIn"
                                                data-appear-animation-delay="600">
                                                <a href="{{ $slider->button_link }}" data-hash data-hash-offset="0"
                                                    data-hash-offset-lg="0"
                                                    class="
                                                                                                                                                                                            btn btn-light btn-effect-2 transition-3ms border-0 btn-rounded
                                                                                                                                                                                            text-2 text-sm-3 text-lg-3
                                                                                                                                                                                            py-2 py-sm-3 py-lg-4
                                                                                                                                                                                            px-4 px-sm-5 px-lg-5
                                                                                                                                                                                            btn-with-arrow-solid mt-1
                                                                                                                                                                                        ">
                                                    <strong class="d-inline-flex text-dark font-weight-medium me-3 px-2 px-lg-3">
                                                        {{ $slider->button_text }}
                                                    </strong>
                                                    <span class="bg-transparent box-shadow-6">
                                                        <i class="fa-solid fa-arrow-right text-dark"></i>
                                                    </span>
                                                </a>
                                            </div>
                                        @endif
                                    </div>
                                    <div class="col-8 col-lg-6  mt-lg-3 px-2 px-md-5 ps-xl-5 pe-xxl-0 order-1 order-lg-2">
                                        <div class="p-relative">
                                            <div class="custom-mask-img custom-mask-img-1">
                                                <img class="" src="{{ asset('storage/' . $slider->background_image) }}"
                                                    loading="lazy" alt="{{ $slider->title }}">
                                            </div>

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
        @if ($sliders->count() > 1)
            <div class="owl-dots mb-5">
                @foreach ($sliders as $slider)
                    <button role="button" class="owl-dot {{ $loop->first ? 'active' : '' }}"><span></span></button>
                @endforeach
            </div>
        @endif
    </div>



    <section class="section bg-secondary border-0 m-0">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-12 mx-auto ">

                    <h2 class="text-white slide font-weight-bold text-4 mb-2 ">Senkroon; danışmanlık, yazılım ve dijital dönüşüm alanlarında uzman, işletmelerin uçtan uca
                        dönüşümünü üstlenen bir iş ortağıdır.</h2>

                    <h2 class="word-rotator slide font-weight-bold text-white text-3 mb-2">
                        <span>ERP, süreç, İK, finans ve e-ticaret başlıklarında; sahadaki deneyimi analitik bakış ve teknolojiyle birleştirerek  </span>
                        <span class="word-rotator-words bg-transparent">
                            <b class="is-visible">ölçülebilir</b>
                            <b>sürdürülebilir</b>
                            <b>güvenilir</b>
                        </span>
                        <span> iş modelleri tasarlarız.</span>
                    </h2>


                </div>
            </div>
        </div>
    </section>






    <!-- about us  -->
    <section class="section section-default border-0  appear-animation animated fadeIn appear-animation-visible"
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
                            Senkroon; ERP danışmanlığı, iş süreçleri ve organizasyon tasarımı, muhasebe & finansal
                            yapılandırma
                            ve Workcube ERP başta olmak üzere kurumsal yazılım çözümlerine odaklanan, işletmelerin uçtan uca
                            dönüşümünü hedefleyen bir iş ortağıdır.
                        </p>
                        <p class=" text-3 mb-4">
                            ERP projeleri, süreç ve organizasyon danışmanlığı, muhasebe–finans modellemesi ile Workcube
                            ERP’nin
                            konumlandırılması ve devreye alınması; ayrıca ihtiyaç duyulan ölçek ve yapılarda Mikro ve Watom
                            yazılımlarının doğru kurgulanması alanlarında entegre hizmet sunuyoruz.
                        </p>
                        <p class=" text-3 mb-4">
                            Sahadaki yönetim ve operasyon tecrübemizi analitik bakış açısı ve teknoloji odaklı
                            yaklaşımımızla
                            birleştirerek; hazır kalıplar yerine kurum kültürünüze ve çalışma biçiminize uygun, size özel iş
                            modelleri tasarlıyoruz. Amacımız; veriye dayalı karar almanızı sağlayan, güvenilir, ölçülebilir
                            ve
                            sürdürülebilir bir yönetim altyapısı kurmak; ERP’yi tek başına bir yazılım değil, işinizin
                            omurgasını güçlendiren stratejik bir araç hâline getirmek.
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
                                        <img alt="" class="img-fluid"
                                            src="{{ asset('porto/simages/workcube-about-us.png') }}">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>


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
                        <h4 class="card-title mb-3 text-5 font-weight-bold">Workcube ERP Satış & Lisanslama</h4>
                        <p class="card-text">Workcube ERP'nin tüm modüllerini uygun fiyatlarla temin edin.
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
                        <p class="card-text">Uzman ekibimiz Workcube ERP'yi işletmenizin ihtiyaçlarına göre
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
                        <p class="card-text">Kullanıcılarınız için kapsamlı Workcube ERP eğitimleri ve
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
                        <h4 class="card-title mb-3 text-5 font-weight-bold">7/24 Teknik Destek</h4>
                        <p class="card-text">Workcube ERP kullanımında karşılaştığınız tüm sorunlar için
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
                        <h4 class="card-title mb-3 text-5 font-weight-bold">Özel Modül Geliştirme</h4>
                        <p class="card-text">Sektörünüze ve işletmenize özel Workcube modülleri geliştiriyoruz.
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
                        <p class="card-text">Mevcut sisteminizdeki verileri Workcube ERP'ye güvenle taşıyoruz.
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


    <section class="container py-5" id="process">
        <div class="row mb-5">
            <div class="col text-center">
                <h2 class="font-weight-bold line-height-2 text-7 mb-1">Nasıl Çalışıyoruz?</h2>
                <span class="d-block text-color-dark text-5 pb-2 mb-4 opacity-7">Her projede aynı disiplinle
                    ilerliyoruz</span>
                <p class="text-4 mb-4">Workcube güçlü bir platform, Senkroon ise onu sizin iş modelinize çeviren
                    mimardır. Hazır şablon dayatmıyor; süreç, organizasyon ve finans yapınızı birlikte analiz
                    ederek Workcube üzerinde kurumunuza özel ekranlar, akışlar ve raporlar tasarlıyoruz.</p>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <div class="process process-vertical py-4">
                    <div class="process-step appear-animation" data-appear-animation="fadeInUpShorter"
                        data-appear-animation-delay="200">
                        <div class="process-step-circle">
                            <strong class="process-step-circle-content">1</strong>
                        </div>
                        <div class="process-step-content">
                            <h4 class="mb-3 text-5 font-weight-bold text-primary">Keşif & Analiz</h4>
                            <p class="mb-0">İşletmenizin mevcut durumunu, ihtiyaçlarını ve hedeflerini detaylı
                                olarak analiz ediyoruz.
                                Hangi Workcube modüllerinin size uygun olacağını, mevcut sistemlerinizle
                                entegrasyon imkanlarını
                                ve özel geliştirme gereksinimlerinizi belirliyoruz.</p>
                        </div>
                    </div>
                    <div class="process-step appear-animation" data-appear-animation="fadeInUpShorter"
                        data-appear-animation-delay="400">
                        <div class="process-step-circle">
                            <strong class="process-step-circle-content">2</strong>
                        </div>
                        <div class="process-step-content">
                            <h4 class="mb-3 text-5 font-weight-bold text-primary">Teklif & Planlama</h4>
                            <p class="mb-0">İhtiyaç analiziniz doğrultusunda size özel Workcube ERP çözümü
                                hazırlayıp
                                detaylı teklif sunuyoruz. Lisans türleri, kurulum süreci, eğitim planı ve
                                destek hizmetleri dahil şeffaf bir fiyatlandırma ile net yol haritası
                                çıkarıyoruz.</p>
                        </div>
                    </div>
                    <div class="process-step appear-animation" data-appear-animation="fadeInUpShorter"
                        data-appear-animation-delay="600">
                        <div class="process-step-circle">
                            <strong class="process-step-circle-content">3</strong>
                        </div>
                        <div class="process-step-content">
                            <h4 class="mb-3 text-5 font-weight-bold text-primary">Kurulum & Konfigürasyon</h4>
                            <p class="mb-0">Workcube ERP'yi işletmenizin altyapısına kuruyoruz ve
                                ihtiyaçlarınıza göre
                                konfigüre ediyoruz. Kullanıcı yetkileri, iş akışları, özel alanlar ve raporları
                                işletmenizin süreçlerine uyacak şekilde ayarlıyor, test ortamında doğruluyoruz.
                            </p>
                        </div>
                    </div>
                    <div class="process-step appear-animation" data-appear-animation="fadeInUpShorter"
                        data-appear-animation-delay="800">
                        <div class="process-step-circle">
                            <strong class="process-step-circle-content">4</strong>
                        </div>
                        <div class="process-step-content">
                            <h4 class="mb-3 text-5 font-weight-bold text-primary">Eğitim & Devreye Alma</h4>
                            <p class="mb-0">Kullanıcılarınız için kapsamlı Workcube ERP eğitimi düzenliyoruz.
                                Teorik ve pratik eğitimlerle
                                ekibinizin sistemi etkin kullanmasını sağlıyoruz. Kontrollü geçiş süreciyle
                                canlıya alıyor ve ilk günden itibaren verimli kullanım garantisi veriyoruz.</p>
                        </div>
                    </div>
                    <div class="process-step appear-animation" data-appear-animation="fadeInUpShorter"
                        data-appear-animation-delay="1000">
                        <div class="process-step-circle">
                            <strong class="process-step-circle-content">5</strong>
                        </div>
                        <div class="process-step-content">
                            <h4 class="mb-3 text-5 font-weight-bold text-primary">Destek & Güncelleme
                            </h4>
                            <p class="mb-0">Canlıya geçiş sonrası da yanınızdayız. 7/24 teknik destek, düzenli
                                sistem
                                güncellemeleri ve yeni özelliklerin eklenmesi için sürekli hizmet veriyoruz.
                                İşletmeniz büyüdükçe Workcube ERP çözümünüz de gelişiyor ve genişletiyor.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <hr class="mb-5">

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
                                    <img alt="" class="img-fluid rounded" src="{{ asset('porto/simages/netline.png') }}">
                                </div>
                            </div>
                            <div class="owl-item active" style="width: 278.667px; margin-right: 10px;">
                                <div>
                                    <img alt="" class="img-fluid rounded" src="{{ asset('porto/simages/ygz.png') }}">
                                </div>
                            </div>
                            <div class="owl-item active" style="width: 278.667px; margin-right: 10px;">
                                <div>
                                    <img alt="" class="img-fluid rounded" src="{{ asset('porto/simages/ekomaxi.png') }}">
                                </div>
                            </div>
                            <div class="owl-item" style="width: 278.667px; margin-right: 10px;">
                                <div>
                                    <img alt="" class="img-fluid rounded" src="{{ asset('porto/simages/teknosis.png') }}">
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
    </section>






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
                                <img src="img/demos/seo/blog/blog-1.jpg" class="img-fluid" alt="">
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
                                <img src="img/demos/seo/blog/blog-2.jpg" class="img-fluid" alt="">
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
                                <img src="img/demos/seo/blog/blog-3.jpg" class="img-fluid" alt="">
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
        document.addEventListener("DOMContentLoaded", function () {
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
