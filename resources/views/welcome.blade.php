@extends('layout.master')

@section('content')




<div class="container position-relative py-5" style="min-height: 643px;" id="home">
        <svg class="custom-svg-style-1" viewBox="0 0 180 470" x="0px" y="0px" width="100%" height="100%">
            <g>
                <path id="shape_one_start" opacity="0.098" fill="#00a3d5"
                    d="M 847.5703 23.7939 C 847.5703 23.7939 581.8154 -245.1675 394.2842 33.9375 C 305.4043 166.2183 345.0537 358.8125 253.5615 364.6631 C 162.0684 370.5146 129.5303 342.542 70.9883 383.9072 C 3.0254 431.9297 17.8926 499.2158 17.8926 499.2158 L 847.5703 499.2158 L 847.5703 23.7939 Z" />
                <path id="shape_one_end" opacity="0.098" fill="#00a3d5"
                    d="m847.5703,24.7939c0,0 -85.7549,-346.9614 -273.2861,-67.8564c149.1201,176.2808 52.7695,313.875 -46.7227,312.7256c-99.4922,-1.1494 -59.0312,107.8789 -117.5732,149.2441c-67.9629,48.0225 -186.0957,167.3086 -207.0957,167.3086l644.6777,-86l0,-475.4219z"
                    style="visibility:hidden" />

                <path id="shape_two_start" opacity="0.149" fill="#00a3d5"
                    d="M 847.5703 239.9771 C 847.5703 239.9771 806.873 141.5913 733.1348 164.937 C 622.249 200.0459 648.416 318.083 566.6426 342.042 C 484.8682 365.999 247.9814 345.0283 168.6406 371.8037 C 89.3008 398.5781 85.5703 499.3408 85.5703 499.3408 L 847.5693 499.3408 L 847.5703 239.9771 Z" />
                <path id="shape_two_end" opacity="0.149" fill="#00a3d5"
                    d="m907.5703,89.9771c0,0 29.3027,-9.3858 -95.4355,112.9599c-124.7382,122.3457 -254.7188,64.146 -300.4922,167.105c-45.7734,102.959 -79.6612,61.9863 -209.002,106.7617c-129.3408,44.7754 -218.0703,21.5371 -218.0703,21.5371l761.999,0l0.001,-265.3637z"
                    style="visibility:hidden" />
            </g>
        </svg>
        <div class="row align-items-center py-5 p-relative z-index-1">
            <div class="col-lg-6 pt-4 pt-lg-0 mt-5 mt-lg-0 mb-5 mb-lg-0">
                <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400">
                    <h1 class="mb-4 mb-md-0 mb-xl-3" data-plugin-float-element
                        data-plugin-options="{'startPos': 'none', 'speed': 1, 'transition': true, 'horizontal': false}">
                        <strong>Workcube ERP ile</strong> işletmenizi dijitalleştirin
                    </h1>
                </div>
                <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="600">
                    <p class="text-4 mb-5 mb-md-2" data-plugin-float-element
                        data-plugin-options="{'startPos': 'none', 'speed': 0.5, 'transition': true, 'horizontal': false}">
                        Türkiye'nin önde gelen Workcube ERP bayisi olarak, işletmelerin dijital dönüşüm
                        sürecinde
                        güçlü teknoloji çözümleri ve profesyonel destek hizmetleri sunuyoruz.</p>
                </div>
                <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="800">
                    <a data-hash data-hash-offset="0" data-hash-offset-lg="95" href="#pricing"
                        class="btn btn-primary btn-outline btn-rounded font-weight-semibold text-4 btn-px-5 btn-py-2"
                        data-plugin-float-element
                        data-plugin-options="{'startPos': 'none', 'speed': 0.3, 'transition': true, 'horizontal': false}">Hemen
                        Başlayın</a>
                </div>
            </div>
            <div class="col-lg-6 text-center mt-5 appear-animation" data-appear-animation="fadeInRightShorter"
                data-appear-animation-delay="550">
                <img src="{{ asset('porto/simages/erp_main.png') }}" class="img-fluid" alt="Workcube ERP ile dijital donusum surecini gosteren Senkroon Yazilim ana gorseli" data-plugin-float-element
                    data-plugin-options="{'startPos': 'none', 'speed': 8, 'transition': true, 'horizontal': true}" />
            </div>
        </div>
    </div>







    <section class="section bg-secondary border-0 m-0">
        <div class="container">
            <div class="row align-items-center py-3">
                <div class="col-lg-8">
                    <div class="call-to-action-content">
                        <h3 class="text-white mb-2">
                            <strong class="font-weight-extra-bold">Ücretsiz</strong> Workcube ERP demo için
                            <strong class="font-weight-extra-bold">randevu alın!</strong>
                        </h3>
                        <p class="mb-0 text-white opacity-8">
                            <i class="fas fa-clock me-2"></i>30 dakikalık online demoda Workcube ERP'nin
                            işletmenize uygun çözümlerini keşfedin
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 text-center text-lg-end">
                    <div class="call-to-action-btn">
                        <a href="#randevu-form"
                            class="btn btn-light font-weight-bold text-primary text-3 btn-px-5 btn-py-3 popup-with-form">
                            <i class="fas fa-calendar-alt me-2"></i>Randevu Al
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Randevu Form Modal -->
        <form id="randevu-form" class="contact-form white-popup-block mfp-hide" method="POST">
            <div class="row mt-2">
                <div class="col-sm-12">
                    <h2 class="font-weight-bold text-center text-7 mb-4">Ücretsiz Workcube ERP Demo</h2>
                    <p class="text-center mb-4">30 dakikalık online demoda Workcube ERP'nin işletmenize özel
                        çözümlerini keşfedin.</p>
                </div>
            </div>

            <div class="custom-form-style-1 custom-form-style-1-rounded">
                <div class="row">
                    <div class="form-group col-lg-6 mb-3">
                        <input type="text" name="name" class="form-control" value=""
                            placeholder="Adınız Soyadınız*" required>
                    </div>
                    <div class="form-group col-lg-6 mb-3">
                        <input type="text" name="company" class="form-control" value="" placeholder="Şirket Adı*"
                            required>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-lg-6 mb-3">
                        <input type="email" name="email" class="form-control" value="" placeholder="E-posta*"
                            required>
                    </div>
                    <div class="form-group col-lg-6 mb-3">
                        <input type="tel" name="phone" class="form-control" value="" placeholder="Telefon*"
                            required>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-lg-6 mb-3">
                        <select name="sector" class="form-control" required>
                            <option value="">Sektörünüz*</option>
                            <option value="imalat">İmalat</option>
                            <option value="ticaret">Ticaret</option>
                            <option value="hizmet">Hizmet</option>
                            <option value="lojistik">Lojistik</option>
                            <option value="teknoloji">Teknoloji</option>
                            <option value="diger">Diğer</option>
                        </select>
                    </div>
                    <div class="form-group col-lg-6 mb-3">
                        <select name="employee_count" class="form-control" required>
                            <option value="">Çalışan Sayısı*</option>
                            <option value="1-10">1-10 kişi</option>
                            <option value="11-50">11-50 kişi</option>
                            <option value="51-100">51-100 kişi</option>
                            <option value="101+">100+ kişi</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col mb-3">
                        <textarea name="message" class="form-control" rows="4"
                            placeholder="Workcube ERP hakkında merak ettiklerinizi ve işletmenizin ihtiyaçlarını belirtiniz..."></textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col mb-0">
                        <input type="submit"
                            class="btn btn-primary font-weight-semibold text-center text-4 btn-py-3 w-100 mb-3"
                            value="Demo Talebimi Gönder" data-loading-text="Gönderiliyor...">
                    </div>
                </div>
                <div class="row">
                    <div class="col text-center">
                        <small class="text-muted">
                            <i class="fas fa-shield-alt me-1"></i>Bilgileriniz güvenli, sadece randevu
                            koordinasyonu için kullanılacaktır.
                        </small>
                    </div>
                </div>
            </div>
        </form>
    </section>




    <!-- about us  -->
    <section class="section section-default border-0 my-5 appear-animation animated fadeIn appear-animation-visible"
        data-appear-animation="fadeIn" data-appear-animation-delay="750" style="animation-delay: 750ms;">
        <div class="container py-4">

            <div class="row align-items-center">
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
                                        <img alt="Senkroon Yazilim Workcube ERP danismanligi hakkimizda gorseli" class="img-fluid" src="simages/workcube-about-us.png">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="overflow-hidden mb-2">
                        <h2 class="text-color-dark font-weight-normal text-7 mb-0 pt-0 mt-0 appear-animation animated maskUp appear-animation-visible"
                            data-appear-animation="maskUp" data-appear-animation-delay="1200"
                            style="animation-delay: 1200ms;">Hakkımızda <strong class="font-weight-extra-bold">Malatya
                                Workcube</strong></h2>
                    </div>
                    <p class="appear-animation animated fadeInUpShorter appear-animation-visible"
                        data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1400"
                        style="animation-delay: 1400ms;">Malatya ve çevresinde faaliyet gösteren işletmelerin
                        dijital dönüşüm yolculuğunda güvenilir teknoloji partneri olarak, <strong>Workcube ERP</strong>
                        çözümlerini yerel pazar ihtiyaçlarına uygun şekilde sunmaktayız.</p>
                    <p class="mb-0 appear-animation animated fadeInUpShorter appear-animation-visible"
                        data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1600"
                        style="animation-delay: 1600ms;">Deneyimli teknik kadromuz ve 7/24 destek hizmetimizle,
                        işletmenizin operasyonel verimliliğini artırmak, maliyetlerinizi optimize etmek ve
                        rekabet avantajı kazanmanızı sağlamak için en uygun <strong>Workcube ERP</strong>
                        çözümünü birlikte belirliyor ve hayata geçiriyoruz.</p>
                </div>
            </div>

        </div>
    </section>


    <section class="container py-5" id="services">
        <div class="row mb-5">
            <div class="col text-center">
                <h2 class="font-weight-bold line-height-2 text-7 mb-1">Hizmetlerimiz</h2>
                <span class="d-block text-color-dark text-5 pb-2 mb-4 opacity-7">Workcube ERP Bayisi</span>
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
                                    <img alt="Netline firmasina sunulan ERP danismanlik referans gorseli" class="img-fluid rounded" src="simages/netline.png">
                                </div>
                            </div>
                            <div class="owl-item active" style="width: 278.667px; margin-right: 10px;">
                                <div>
                                    <img alt="Protermo firmasina sunulan ERP danismanlik referans gorseli" class="img-fluid rounded"
                                        src="{{ asset('simages/protermo.png') }}">
                                </div>
                            </div>
                            <div class="owl-item active" style="width: 278.667px; margin-right: 10px;">
                                <div>
                                    <img alt="Ekomaxi firmasina sunulan ERP cozumleri referans gorseli" class="img-fluid rounded"
                                        src="{{ asset('porto/simages/ekomaxi.png') }}">
                                </div>
                            </div>
                            <div class="owl-item" style="width: 278.667px; margin-right: 10px;">
                                <div>
                                    <img alt="Teknosis firmasina sunulan ERP danismanlik referans gorseli" class="img-fluid rounded"
                                        src="{{ asset('porto/simages/teknosis.png') }}">
                                </div>
                            </div>
                            <div class="owl-item" style="width: 278.667px; margin-right: 10px;">
                                <div>
                                    <img alt="Senkroon Yazilim proje referans gorseli 2" class="img-fluid rounded"
                                        src="{{ asset('porto/img/projects/project-2.jpg') }}">
                                </div>
                            </div>
                            <div class="owl-item" style="width: 278.667px; margin-right: 10px;">
                                <div>
                                    <img alt="Senkroon Yazilim proje referans gorseli 3" class="img-fluid rounded"
                                        src="{{ asset('porto/img/projects/project-3.jpg') }}">
                                </div>
                            </div>
                            <div class="owl-item" style="width: 278.667px; margin-right: 10px;">
                                <div>
                                    <img alt="Senkroon Yazilim proje referans gorseli 1" class="img-fluid rounded"
                                        src="{{ asset('porto/img/projects/project-1.jpg') }}">
                                </div>
                            </div>
                            <div class="owl-item" style="width: 278.667px; margin-right: 10px;">
                                <div>
                                    <img alt="Senkroon Yazilim proje referans gorseli 2 tekrar" class="img-fluid rounded"
                                        src="{{ asset('porto/img/projects/project-2.jpg') }}">
                                </div>
                            </div>
                            <div class="owl-item" style="width: 278.667px; margin-right: 10px;">
                                <div>
                                    <img alt="Senkroon Yazilim proje referans gorseli 3 tekrar" class="img-fluid rounded"
                                        src="{{ asset('porto/img/projects/project-3.jpg') }}">
                                </div>
                            </div>
                            <div class="owl-item" style="width: 278.667px; margin-right: 10px;">
                                <div>
                                    <img alt="Senkroon Yazilim proje referans gorseli 4" class="img-fluid rounded"
                                        src="{{ asset('porto/img/projects/project-4.jpg') }}">
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



    {{-- <div class="container py-4 my-5" id="news">
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
@endsection
