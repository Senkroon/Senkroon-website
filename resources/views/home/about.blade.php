@extends('layout.master')

@section('content')
    <!-- Header Breadcrumb -->



    <section class="page-header page-header-modern section position-relative border-0 m-0"
        style="background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url({{ asset('images/modules/all.jpg') }}); background-position: center; background-size: cover;">
        <div class="col-md-12 align-self-center p-static order-2 text-center">
            <h1 class="text-light font-weight-bold text-8">Hakkımızda</h1>
            <span class="sub-title text-light">Dijital Dönüşümde Güvenilir Ortağınız</span>
        </div>
    </section>


    <!-- Main Content -->
    <div class="container py-5">
        <!-- Şirket Hikayesi -->
        <div class="row py-2">
            <div class="col-lg-7  mb-lg-0">
                <div class="appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="300">
                    <h2 class="text-color-primary font-weight-bold text-6 mb-2">Hakkımızda</h2>
                    <p class="text-3 mb-4">
                        Senkroon; ERP danışmanlığı, iş süreçleri ve organizasyon tasarımı, muhasebe & finansal yapılandırma
                        ve  ERP başta olmak üzere kurumsal yazılım çözümlerine odaklanan, işletmelerin uçtan uca
                        dönüşümünü hedefleyen bir iş ortağıdır.
                    </p>
                    <p class=" text-3 mb-4">
                        ERP projeleri, süreç ve organizasyon danışmanlığı, muhasebe–finans modellemesi ile  ERP’nin
                        konumlandırılması ve devreye alınması; ayrıca ihtiyaç duyulan ölçek ve yapılarda Mikro ve Watom
                        yazılımlarının doğru kurgulanması alanlarında entegre hizmet sunuyoruz.
                    </p>
                    <p class=" text-3 mb-4">
                        Sahadaki yönetim ve operasyon tecrübemizi analitik bakış açısı ve teknoloji odaklı yaklaşımımızla
                        birleştirerek; hazır kalıplar yerine kurum kültürünüze ve çalışma biçiminize uygun, size özel iş
                        modelleri tasarlıyoruz. Amacımız; veriye dayalı karar almanızı sağlayan, güvenilir, ölçülebilir ve
                        sürdürülebilir bir yönetim altyapısı kurmak; ERP’yi tek başına bir yazılım değil, işinizin
                        omurgasını güçlendiren stratejik bir araç hâline getirmek.
                    </p>
                </div>
            </div>
            <div class="col-lg-5 mb-5">
                <div class="appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="300">
                    <img src="{{ asset('porto/simages/workcube-about-us.png') }}" class="img-fluid mt-5 rounded shadow-lg"
                        alt="Şirket Hikayesi">
                </div>
            </div>
        </div>


        <!-- Misyon & Vizyon -->
        <div class="row py-5">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <div class="card  text-white border-0 h-100">
                    <div class="card-body p-5">
                        <div class="text-center mb-4">
                            <i class="fas fa-bullseye  text-primary text-6"></i>
                        </div>
                        <h3 class="font-weight-bold text-center ">Misyonumuz</h3>
                        <p class=" ">
                            Senkroon olarak misyonumuz; işletmelerin ERP yatırımlarını doğru konumlandırmasını, iş
                            süreçlerini sadeleştirmesini ve finansal yapılarını şeffaf, ölçülebilir ve yönetilebilir hâle
                            getirmesini sağlamaktır.
                        </p>
                        <p>

                            Bunu; ERP danışmanlığı, süreç ve organizasyon tasarımı ile muhasebe ve finansal modellemeyi,
                            kurumsal yazılım çözümleriyle bütüncül bir mimari altında birleştirerek gerçekleştiririz.
                        </p>
                        <p class="">
                            Amacımız, yalnızca yazılım kurmak değil; kurum kültürüyle uyumlu, sürdürülebilir ve kurum içinde
                            bağımsız şekilde yönetilebilen bir iş modeli teslim ederek hem mevcut ihtiyaçları hem de
                            gelecekteki büyüme hedeflerini desteklemektir.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="card  bg-color-red text-white border-0 h-100">
                    <div class="card-body p-5">
                        <div class="text-center mb-4">
                            <i class="fas fa-eye text-primary text-6"></i>
                        </div>
                        <h3 class="font-weight-bold text-center mb-4">Vizyonumuz</h3>
                        <p class="text-3 ">
                            Senkroon olarak vizyonumuz; Türkiye’de ve bölgemizde ERP danışmanlığı, iş süreçleri ve finansal
                            yapılandırma denince ilk akla gelen; ERP ve kurumsal yazılım çözümleri projelerinde referans
                            gösterilen çözüm ortağı olmaktır.
                        </p>

                        <p>
                            Şirketleri kişiye bağlı işleyişten çıkarıp veriye, sürece ve kurumsal yönetişime dayalı yapılara
                            dönüştüren; karar anlarında güven veren ve veri temelli, ikna edici önerileriyle ayrışan bir
                            marka olmayı hedefliyoruz.
                        </p>
                    </div>
                </div>
            </div>
        </div>


        {{-- <div class="row py-5 bg-light rounded">
            <div class="col-12">
                <div class="text-center mb-5">
                    <h2 class="text-color-primary font-weight-bold text-6 mb-3">Hizmetlerimiz</h2>
                    <p class="text-4">Türkiye’de ve bölgemizde; ERP danışmanlığı, iş süreçleri ve finansal yapılandırma
                        denince ilk akla gelen, özellikle  ERP tabanlı projelerde referans gösterilen çözüm ortağı
                        olmak.</p>



                </div>
            </div>

            <div class="col-lg-6 mb-4">
                <div class="feature-box feature-box-style-2 appear-animation" data-appear-animation="fadeInUpShorter"
                    data-appear-animation-delay="300">
                    <div class="feature-box-icon">
                        <i class="icons icon-graph text-color-primary text-6"></i>

                    </div>
                    <div class="feature-box-info">
                        <h4 class="font-weight-bold text-4 mb-2">Finans, Muhasebe, İç Denetim & İç Kontrol</h4>
                        <p>İşletme stratejisi geliştirme, yönetim danışmanlığı ve süreç optimizasyonu
                            hizmetleriyle işletmelerin stratejik hedeflerine ulaşmalarına destek oluyoruz.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 mb-4">
                <div class="feature-box feature-box-style-2 appear-animation" data-appear-animation="fadeInUpShorter"
                    data-appear-animation-delay="500">
                    <div class="feature-box-icon">
                        <i class="icons icon-settings text-color-primary text-6"></i>
                    </div>
                    <div class="feature-box-info">
                        <h4 class="font-weight-bold text-4 mb-2">İş Süreçleri, Yönetim ve Organizasyon</h4>
                        <p>
                            İş süreçlerinizi uçtan uca analiz ederek organizasyon yapınızı daha verimli,
                            şeffaf ve yönetilebilir hale getiriyoruz. Operasyonel darboğazları tespit ediyor,
                            görev ve sorumlulukları netleştirerek sürdürülebilir bir yönetim modeli
                            oluşturmanıza destek oluyoruz.
                        </p>

                    </div>
                </div>
            </div>

            <div class="col-lg-6 mb-4">
                <div class="feature-box feature-box-style-2 appear-animation" data-appear-animation="fadeInUpShorter"
                    data-appear-animation-delay="700">
                    <div class="feature-box-icon">
                        <i class="icons icon-support text-color-primary text-6"></i>
                    </div>
                    <div class="feature-box-info">
                        <h4 class="font-weight-bold text-4 mb-2">ERP & MRP Danışmanlığı</h4>
                        <p>İşletmelerin verimliliğini artırmak ve iş süreçlerini optimize etmek için
                            kullanılan yazılım sistemleri konusunda profesyonel danışmanlık hizmeti sunuyoruz.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 mb-4">
                <div class="feature-box feature-box-style-2 appear-animation" data-appear-animation="fadeInUpShorter"
                    data-appear-animation-delay="900">
                    <div class="feature-box-icon">
                        <i class="icons icon-graduation text-color-primary text-6"></i>
                    </div>
                    <div class="feature-box-info">
                        <h4 class="font-weight-bold text-4 mb-2">Raporlama ve Analiz Danışmanlığı</h4>
                        <p>Veri analizi ve raporlama çözümleriyle işletmelerin karar verme süreçlerini destekliyoruz. Gerçek
                            zamanlı analitik ve öngörülebilir raporlar sunuyoruz.</p>
                    </div>
                </div>
            </div>

        </div> --}}


        <!-- Workcube Çözümleri -->
        {{-- <div class="row py-5">
            <div class="col-12">
                <div class="text-center mb-5">
                    <h2 class="text-color-primary font-weight-bold text-6 mb-3">ERP Çözüm Alanlarımız</h2>
                    <p class="text-4">İşletmenizin dijital dönüşümü için kapsamlı ERP modülleri</p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card border-0 shadow-sm h-100">
                    <div class="card-body text-center p-4">
                        <div class="mb-3">
                            <i class="fas fa-cogs text-color-primary text-6"></i>
                        </div>
                        <h5 class="font-weight-bold mb-3">ERP</h5>
                        <p class="text-3">Entegre işletme kaynak planlaması sistemi</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card border-0 shadow-sm h-100">
                    <div class="card-body text-center p-4">
                        <div class="mb-3">
                            <i class="fas fa-users text-color-primary text-6"></i>
                        </div>
                        <h5 class="font-weight-bold mb-3">CRM</h5>
                        <p class="text-3">Müşteri ilişkileri yönetim sistemi</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card border-0 shadow-sm h-100">
                    <div class="card-body text-center p-4">
                        <div class="mb-3">
                            <i class="fas fa-user-tie text-color-primary text-6"></i>
                        </div>
                        <h5 class="font-weight-bold mb-3">HR</h5>
                        <p class="text-3">İnsan kaynakları yönetim sistemi</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card border-0 shadow-sm h-100">
                    <div class="card-body text-center p-4">
                        <div class="mb-3">
                            <i class="fas fa-shield-alt text-color-primary text-6"></i>
                        </div>
                        <h5 class="font-weight-bold mb-3">PAM</h5>
                        <p class="text-3">Fiziki varlık yönetim sistemi</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card border-0 shadow-sm h-100">
                    <div class="card-body text-center p-4">
                        <div class="mb-3">
                            <i class="fas fa-project-diagram text-color-primary text-6"></i>
                        </div>
                        <h5 class="font-weight-bold mb-3">PMS</h5>
                        <p class="text-3">Proje yönetim sistemi</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card border-0 shadow-sm h-100">
                    <div class="card-body text-center p-4">
                        <div class="mb-3">
                            <i class="fas fa-graduation-cap text-color-primary text-6"></i>
                        </div>
                        <h5 class="font-weight-bold mb-3">LMS</h5>
                        <p class="text-3">Öğrenme yönetim sistemi</p>
                    </div>
                </div>
            </div>
        </div> --}}



        <!-- Değerlerimiz ve İlkelerimiz -->
        <div class="row py-5 bg-light rounded px-2 px-md-4">
            <div class="col-12">
                <div class="text-center mb-5">
                    <h2 class="text-color-primary font-weight-bold text-6 mb-3">Değerlerimiz</h2>
                    <p class="text-4 mb-0">Senkroon olarak tüm projelerimizde aşağıdaki temel değerlere bağlı kalırız:</p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
                <div class="h-100 p-4 bg-white rounded shadow-sm">
                    <div class="mb-3 text-color-primary text-center"><i class="fas fa-handshake text-6"></i></div>
                    <h5 class="font-weight-bold mb-3 text-center">Güven</h5>
                    <p class="text-3 mb-0">İlişkilerimizi şeffaflık, dürüstlük ve karşılıklı saygı üzerine kurarız. Verdiğimiz sözleri tutar, uzun vadeli ve sürdürülebilir iş ilişkileri kurmayı hedefleriz.</p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
                <div class="h-100 p-4 bg-white rounded shadow-sm">
                    <div class="mb-3 text-color-primary text-center"><i class="fas fa-graduation-cap text-6"></i></div>
                    <h5 class="font-weight-bold mb-3 text-center">Bilgi ve Uzmanlık</h5>
                    <p class="text-3 mb-0">Deneyimimizi güncel bilgiyle sürekli besler, her projede en doğru ve güncel yaklaşımları uygulamaya özen gösteririz. Öğrenen ve öğreten bir ekip kültürüne sahibiz.</p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
                <div class="h-100 p-4 bg-white rounded shadow-sm">
                    <div class="mb-3 text-color-primary text-center"><i class="fas fa-microchip text-6"></i></div>
                    <h5 class="font-weight-bold mb-3 text-center">Teknoloji Odaklılık</h5>
                    <p class="text-3 mb-0">Teknolojiyi tek başına bir amaç olarak değil, doğru kullanıldığında değer üreten stratejik bir araç olarak görürüz. Tüm projelerimizi bu anlayışla kurgularız.</p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
                <div class="h-100 p-4 bg-white rounded shadow-sm">
                    <div class="mb-3 text-color-primary text-center"><i class="fas fa-puzzle-piece text-6"></i></div>
                    <h5 class="font-weight-bold mb-3 text-center">Çözüm Odaklılık</h5>
                    <p class="text-3 mb-0">Sorunları yalnızca tespit etmekle yetinmez, uygulanabilir ve ölçülebilir çözümler üretmeye odaklanırız. Sonuç almayan hiçbir öneriyi başarı olarak görmeyiz.</p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
                <div class="h-100 p-4 bg-white rounded shadow-sm">
                    <div class="mb-3 text-color-primary text-center"><i class="fas fa-people-arrows text-6"></i></div>
                    <h5 class="font-weight-bold mb-3 text-center">Şeffaflık ve İşbirliği</h5>
                    <p class="text-3 mb-0">Tüm süreçleri müşterilerimizle birlikte ve açık bir iletişimle yürütür, ortak akılla şekillenen projeler üretiriz. Karar süreçlerine müşterilerimizi dâhil etmeyi önemseriz.</p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
                <div class="h-100 p-4 bg-white rounded shadow-sm">
                    <div class="mb-3 text-color-primary text-center"><i class="fas fa-infinity text-6"></i></div>
                    <h5 class="font-weight-bold mb-3 text-center">Süreklilik</h5>
                    <p class="text-3 mb-0">Projeyi teslim etmekle sorumluluğun bitmediğine inanırız. Üretilen çıktının yaşaması, gelişmesi ve kuruma gerçek değer katması için gerekli desteği sürdürmeyi asli görevimiz kabul ederiz.</p>
                </div>
            </div>
        </div>





        <!-- Sektörel Uygulamalar -->
        {{-- <div class="row py-5">
            <div class="col-12">
                <div class="text-center mb-5">
                    <h2 class="text-color-primary font-weight-bold text-6 mb-3">Sektörel Uygulamalar</h2>
                    <p class="text-4">Farklı sektörlere özel çözümler geliştiriyoruz</p>
                </div>
            </div>

            <div class="col-lg-2 col-md-4 col-6 mb-4">
                <div class="text-center">
                    <div class="bg-color-light rounded p-4 mb-3">
                        <i class="fas fa-industry text-color-primary text-5"></i>
                    </div>
                    <h6 class="font-weight-bold">Üretim Odaklı İşletmeler</h6>
                </div>
            </div>

            <div class="col-lg-2 col-md-4 col-6 mb-4">
                <div class="text-center">
                    <div class="bg-color-light rounded p-4 mb-3">
                        <i class="fas fa-boxes text-color-primary text-5"></i>
                    </div>
                    <h6 class="font-weight-bold">Toptan Ticaret</h6>
                </div>
            </div>

            <div class="col-lg-2 col-md-4 col-6 mb-4">
                <div class="text-center">
                    <div class="bg-color-light rounded p-4 mb-3">
                        <i class="fas fa-store text-color-primary text-5"></i>
                    </div>
                    <h6 class="font-weight-bold">Perakendecilik</h6>
                </div>
            </div>

            <div class="col-lg-2 col-md-4 col-6 mb-4">
                <div class="text-center">
                    <div class="bg-color-light rounded p-4 mb-3">
                        <i class="fas fa-concierge-bell text-color-primary text-5"></i>
                    </div>
                    <h6 class="font-weight-bold">Hizmet Sektörü</h6>
                </div>
            </div>

            <div class="col-lg-2 col-md-4 col-6 mb-4">
                <div class="text-center">
                    <div class="bg-color-light rounded p-4 mb-3">
                        <i class="fas fa-hard-hat text-color-primary text-5"></i>
                    </div>
                    <h6 class="font-weight-bold">Taahhüt Sektörü</h6>
                </div>
            </div>

            <div class="col-lg-2 col-md-4 col-6 mb-4">
                <div class="text-center">
                    <div class="bg-color-light rounded p-4 mb-3">
                        <i class="fas fa-hands-helping text-color-primary text-5"></i>
                    </div>
                    <h6 class="font-weight-bold">Sivil Toplum</h6>
                </div>
            </div>
        </div> --}}





        <!-- Çağrı-İçin-Eylem -->
         <div class="row py-5">
            <div class="col-12">
                <div class="bg-color-primary rounded text-center py-5 px-4">
                    <h3 class="text-white font-weight-bold mb-3">Dijital Dönüşüme Hazır Mısınız?</h3>
                    <p class="text-white text-4 mb-4">
                        İşletmenizin potansiyelini en üst düzeye çıkarmak, kurumsal bir yapılanmayla
                        yarınlara hazırlanmak için bizimle iletişime geçin.
                    </p>
                    <div class="row justify-content-center">
                        <div class="col-auto">
                            <a href="{{ route('contact-us') }}"
                                class="btn btn-light btn-rounded font-weight-semibold text-3 btn-px-5 btn-py-3 me-3">
                                İletişime Geçin
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
