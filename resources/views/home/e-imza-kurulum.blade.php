@extends('layout.master')

@section('content')
<!-- Page Header -->
<section class="page-header mt-5 page-header-modern section position-relative border-0 m-0 py-3 d-none d-md-flex"
    style="background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('{{ asset('porto/simages/about-cover.png') }}'); background-position: center; background-size: cover; min-height: 250px; align-items: center;">
    <div class="col-md-12 align-self-center p-static order-2 text-center">
        <h1 class="text-light font-weight-bold text-8">e-İmza Kurulumu</h1>
        <span class="sub-title text-light text-4">Saniyeler İçinde Kullanıma Hazır</span>
    </div>
</section>

<!-- Mobile Page Header -->
<section class="page-header page-header-modern section position-relative border-0 m-0 d-block d-md-none py-4"
    style="background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('{{ asset('images/modules/all.jpg') }}'); background-position: center; background-size: cover;">
    <div class="col-md-12 align-self-center p-static order-2 text-center">
        <h1 class="text-light font-weight-bold text-6 mb-1">e-İmza</h1>
        <span class="sub-title text-light text-3">Kolay Kurulum Rehberi</span>
    </div>
</section>

<div class="container py-5">
    <div class="row">
        <div class="col-lg-8 mx-auto appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">
            <div class="card glass-panel border-0 p-4 p-md-5 mb-5 shadow-lg">
                <div class="card-body">
                    <div class="text-center mb-4">
                        <i class="fas fa-signature text-color-primary text-8 mb-3"></i>
                        <h2 class="font-weight-bold text-6 text-white mb-3">e-İmza Kurulum Rehberi</h2>
                        <p class="text-4 text-light">e-İmza kurulumu, kullanıcı dostu tasarımı sayesinde saniyeler içerisinde, hiçbir teknik destek veya karmaşık işlem gerektirmeden tamamlanabilmektedir.</p>
                    </div>

                    <hr class="sci-fi-divider my-4">

                    <h4 class="font-weight-bold text-white mb-4">1. e-İmza Uygulaması Kurulumu</h4>

                    <ul class="list list-icons list-icons-style-2 list-icons-lg text-light text-3 mb-4">
                        <li class="mb-3"><i class="fas fa-check text-color-primary"></i> <strong class="text-white">Uygulamayı İndirin:</strong> Aşağıdaki indirme linki üzerinden güncel e-İmza uygulamasını cihazınıza indirin.</li>
                        <li class="mb-3"><i class="fas fa-check text-color-primary"></i> <strong class="text-white">Kurulumu Başlatın:</strong> İndirilen kurulum dosyasına (setup) çift tıklayarak çalıştırın.</li>
                        <li class="mb-3"><i class="fas fa-check text-color-primary"></i> <strong class="text-white">Kolay Kurulum Adımları:</strong> Ekrana gelen kurulum sihirbazında yer alan <strong>"İleri"</strong> butonlarına tıklayarak varsayılan ayarları kabul edin.</li>
                        <li class="mb-3"><i class="fas fa-check text-color-primary"></i> <strong class="text-white">Tamamlanma:</strong> Sadece birkaç saniye süren bu işlemin ardından "Son" veya "Tamamla" butonuna tıklayarak kurulumu bitirin.</li>
                    </ul>

                    <div class="text-center mb-5">
                        <a href="https://downloadark.com/ArkSigner-Installer-StandardUser-v2.2.16.13.2.exe" target="_blank" class="btn btn-primary btn-rounded btn-lg font-weight-bold px-5 py-3">
                            <i class="fas fa-download me-2"></i> e-İmza Uygulamasını İndir
                        </a>
                    </div>

                    <hr class="sci-fi-divider my-4">

                    <h4 class="font-weight-bold text-white mb-4">2. Mükellef E-İmza Onay</h4>

                    <div class="mb-4">
                        <a href="https://giris.turkiye.gov.tr/Giris/Banka-Giris" target="_blank" class="btn btn-dark btn-rounded font-weight-bold px-4 py-2 mb-3">
                            <i class="fas fa-landmark me-2"></i> e-Devlet Banka ile Giriş
                        </a>
                        <p><a href="https://giris.turkiye.gov.tr/Giris/Banka-Giris" target="_blank" class="text-color-primary text-decoration-underline">https://giris.turkiye.gov.tr/Giris/Banka-Giris</a></p>
                    </div>

                    <ul class="list list-icons list-icons-style-2 list-icons-lg text-light text-3 mb-5">
                        <li class="mb-3"><i class="fas fa-check text-color-primary"></i> Yukarıdaki linke tıklayarak e-devlet mobil bankacılık ile giriş sayfasına gidin. Ardından hangi mobil bankacılık uygulamasını kullanıyorsanız onu seçip gerekli bilgileri girmeniz gerekmektedir.</li>
                        <li class="mb-3"><i class="fas fa-check text-color-primary"></i> E-devlete internet bankacılığıyla giriş yaptıktan sonra arama motoruna <strong>E-KAYIT</strong> yazıp <em>Bilgi Teknolojileri ve İletişim Kurumu/e-Kayıt Başvurusu Onay İşlemleri</em> seçin.</li>
                        <li class="mb-3"><i class="fas fa-check text-color-primary"></i> İlk adımda işletme/sağlayıcı Tipi olarak <strong>GÜVENLİ E-İMZA</strong> yı seçmelisiniz. İkinci adımda ise işletme/sağlayıcı kısmında <strong>ARK</strong> imzayı seçerek DEVAM ET butonuna tıklayınız.</li>
                        <li class="mb-3"><i class="fas fa-check text-color-primary"></i> En son karşınıza <strong>İŞLEM BAŞARILI</strong> ekranı gelecektir. Onu tarafımıza bildirmeniz gerekmektedir.</li>
                    </ul>

                    <hr class="sci-fi-divider my-4">

                    <h4 class="font-weight-bold text-white mb-4">3. İlk Adımda İndirdiğiniz Yazılıma Geri Dönüp Pin İşlemlerini Yapabilirsiniz</h4>

                    <div class="text-center mt-5 mb-4">
                        <i class="fas fa-check-circle text-success" style="font-size: 5rem;"></i>
                        <h4 class="font-weight-bold text-success mt-3">İşlem Tamamlandı</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection