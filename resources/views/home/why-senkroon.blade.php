@extends("layout.master")

@section("content")

{{-- Hero Section - Sci-Fi Style --}}
<section class="page-header mt-5 page-header-modern section position-relative border-0 m-0"
    style=" background-image: linear-gradient(rgba(3, 6, 18, 0.85), rgba(3, 6, 18, 0.85)), url({{ asset('images/modules/all.jpg') }}); background-position: center; background-size: cover;  ">
    <div class=" container position-relative d-flex align-items-center justify-content-center">
        <div class="text-center">
            <h1 class="text-color-light font-weight-bold text-8 section-title-glow">Neden Senkroon Yazılım?</h1>
            <p class="text-color-light text-4 opacity-8">Dijital Dönüşümde Güvenilir Ortağınız</p>
        </div>
    </div>
</section>

{{-- Main Content --}}
<div class="container py-5">
    <div class="row">
        <div class="col">
            <div class="card card-sci-fi mb-5">
                <div class="card-body p-2 p-md-2">
                    <h4 class="mb-4 text-white font-weight-bold text-6">
                        <i class="fas fa-star me-2" style="color: #ff8500;"></i>
                        Neden Senkroon Yazılım?
                    </h4>

                    <p class="text-light text-4" style="line-height: 1.8;">
                        Senkroon; ERP, süreç, organizasyon, finans, İK ve dijital çözümleri tek çatı altında toplayan, uçtan uca
                        dijital dönüşüm odağında çalışan bir iş ortağıdır. Amacımız; size yazılım satmak değil, ölçülebilir iş
                        sonuçları üretmek ve yatırımınızın geri dönüşünü (ROI) somutlaştırmaktır.
                    </p>
                </div>
            </div>

            {{-- Process Steps --}}
            <div class="process process-vertical py-4">
                <div class="process-step appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">
                    <div class="process-step-circle" style="background: linear-gradient(135deg, #ff8500 0%, #ff5100 100%); border: 2px solid #ff8500;">
                        <strong class="process-step-circle-content text-white">1</strong>
                    </div>
                    <div class="process-step-content">
                        <div class="card card-sci-fi mb-3">
                            <div class="card-body p-4">
                                <h4 class="mb-3 text-white font-weight-bold text-5">
                                    <i class="fas fa-hand-holding-heart me-2" style="color: #ff8500;"></i>
                                    Tek noktadan çözüm ortağı
                                </h4>
                                <p class="mb-0 text-light" style="line-height: 1.8;">
                                    ERP, süreç tasarımı, organizasyon, finans, İK, web ve donanım altyapısını ayrı
                                    ayrı değil, entegre bir model olarak kurguluyoruz. Böylece "her işi başka firmayla çözme"
                                    dağınıklığını ortadan kaldırıyoruz.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="process-step appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400">
                    <div class="process-step-circle" style="background: linear-gradient(135deg, #ff8500 0%, #ff5100 100%); border: 2px solid #ff8500;">
                        <strong class="process-step-circle-content text-white">2</strong>
                    </div>
                    <div class="process-step-content">
                        <div class="card card-sci-fi mb-3">
                            <div class="card-body p-4">
                                <h4 class="mb-3 text-white font-weight-bold text-5">
                                    <i class="fas fa-user-tie me-2" style="color: #ff8500;"></i>
                                    Saha deneyimi olan danışmanlık
                                </h4>
                                <p class="mb-0 text-light" style="line-height: 1.8;">
                                    Ekibimiz; üretim, inşaat, perakende ve hizmet sektörlerinde saha tecrübesi olan
                                    isimlerden oluşur. Teoriyi değil, gerçekte çalışan modelleri öneriyoruz.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="process-step appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="600">
                    <div class="process-step-circle" style="background: linear-gradient(135deg, #ff8500 0%, #ff5100 100%); border: 2px solid #ff8500;">
                        <strong class="process-step-circle-content text-white">3</strong>
                    </div>
                    <div class="process-step-content">
                        <div class="card card-sci-fi mb-3">
                            <div class="card-body p-4">
                                <h4 class="mb-3 text-white font-weight-bold text-5">
                                    <i class="fas fa-cogs me-2" style="color: #ff8500;"></i>
                                    Hazır paket değil, kuruma özel model
                                </h4>
                                <p class="mb-0 text-light" style="line-height: 1.8;">
                                    "Standart paket" dayatmıyoruz. İşinizi, kültürünüzü ve ekibinizi analiz edip;
                                    size özel süreç, organizasyon ve ERP mimarisi tasarlıyoruz.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="process-step appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="800">
                    <div class="process-step-circle" style="background: linear-gradient(135deg, #ff8500 0%, #ff5100 100%); border: 2px solid #ff8500;">
                        <strong class="process-step-circle-content text-white">4</strong>
                    </div>
                    <div class="process-step-content">
                        <div class="card card-sci-fi mb-3">
                            <div class="card-body p-4">
                                <h4 class="mb-3 text-white font-weight-bold text-5">
                                    <i class="fas fa-brain me-2" style="color: #ff8500;"></i>
                                    ERP'de derin uzmanlık
                                </h4>
                                <p class="mb-0 text-light" style="line-height: 1.8;">
                                    ERP'yi sadece kuran değil, modül, süreç, rol, yetki ve raporlama
                                    yapısını birlikte tasarlayan bir ekibiz. Hedefimiz: ERP'yi günlük işleyişin doğal bir
                                    parçası haline getirmek.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="process-step appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1000">
                    <div class="process-step-circle" style="background: linear-gradient(135deg, #ff8500 0%, #ff5100 100%); border: 2px solid #ff8500;">
                        <strong class="process-step-circle-content text-white">5</strong>
                    </div>
                    <div class="process-step-content">
                        <div class="card card-sci-fi mb-3">
                            <div class="card-body p-4">
                                <h4 class="mb-3 text-white font-weight-bold text-5">
                                    <i class="fas fa-chart-line me-2" style="color: #ff8500;"></i>
                                    Veri odaklı yönetim & şeffaf raporlama
                                </h4>
                                <p class="mb-0 text-light" style="line-height: 1.8;">
                                    Kararların "hisse dayalı" değil, veri odaklı alınmasını sağlıyoruz. Yönetimin
                                    kolay okuyabildiği, kârlılık, nakit, risk ve performans odaklı rapor setleri kuruyoruz.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="process-step appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1200">
                    <div class="process-step-circle" style="background: linear-gradient(135deg, #ff8500 0%, #ff5100 100%); border: 2px solid #ff8500;">
                        <strong class="process-step-circle-content text-white">6</strong>
                    </div>
                    <div class="process-step-content">
                        <div class="card card-sci-fi mb-3">
                            <div class="card-body p-4">
                                <h4 class="mb-3 text-white font-weight-bold text-5">
                                    <i class="fas fa-users-cog me-2" style="color: #ff8500;"></i>
                                    Değişim yönetimi ve kullanıcı odağı
                                </h4>
                                <p class="mb-0 text-light" style="line-height: 1.8;">
                                    Kullanıcı deneyimini merkeze alıyor, ekiplerin sisteme adaptasyonunu hızlandırıyoruz.
                                    Değişim sürecini yönetimsel ve eğitimsel destekle kolaylaştırıyoruz.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="process-step appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1400">
                    <div class="process-step-circle" style="background: linear-gradient(135deg, #ff8500 0%, #ff5100 100%); border: 2px solid #ff8500;">
                        <strong class="process-step-circle-content text-white">7</strong>
                    </div>
                    <div class="process-step-content">
                        <div class="card card-sci-fi mb-3">
                            <div class="card-body p-4">
                                <h4 class="mb-3 text-white font-weight-bold text-5">
                                    <i class="fas fa-handshake me-2" style="color: #ff8500;"></i>
                                    Uzun vadeli iş ortaklığı yaklaşımı
                                </h4>
                                <p class="mb-0 text-light" style="line-height: 1.8;">
                                    Bizim için proje sonu bitiş çizgisi değil, başlangıçtır. Sürekli iyileştirme,
                                    yeni ihtiyaçlar ve büyüme hedeflerinizde yanınızda kalmayı taahhüt ediyoruz.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- CTA Section --}}
<section class="py-5 position-relative">
    <div class="container">
        <div class="card card-sci-fi text-center">
            <div class="card-body p-5">
                <h3 class="text-white font-weight-bold mb-3">Dijital Dönüşüm Yolculuğunuza Başlayın</h3>
                <p class="text-light text-4 mb-4 opacity-8">
                    Uzman ekibimizle tanışın, işletmeniz için özel çözümler keşfedin
                </p>
                <a href="{{ route('contact-us') }}"
                    class="btn btn-rounded font-weight-bold text-3 px-5 py-3 d-inline-flex align-items-center text-color-light"
                    style="background: linear-gradient(90deg, #ff8c00 0%, #ff5100 100%); border: none;">
                    Hemen İletişime Geçin <i class="fas fa-chevron-right ms-2"></i>
                </a>
            </div>
        </div>
    </div>
</section>

<style>
    /* Process Step Line Override */
    .process.process-vertical .process-step:not(:last-child):after {
        background: linear-gradient(to bottom, #ff8500 0%, rgba(255, 133, 0, 0.3) 100%);
        width: 3px;
        box-shadow: 0 0 10px rgba(255, 133, 0, 0.5);
    }

    /* Hover Effects */
    .process-step:hover .card-sci-fi {
        transform: translateX(10px);
        box-shadow: 0 0 30px rgba(255, 133, 0, 0.4);
    }

    .card-sci-fi {
        transition: all 0.3s ease;
    }
</style>

@endsection
