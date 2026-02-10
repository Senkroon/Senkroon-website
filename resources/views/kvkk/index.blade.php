@extends('layout.master')

@section('content')
    <section class="page-header page-header-modern section position-relative border-0 m-0 mb-5"
        style="background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url({{ asset('images/modules/all.jpg') }}); background-position: center; background-size: cover;">
        <div class="container position-relative pb-2 mb-2 d-flex align-items-center justify-content-center">
            <h2 class="font-weight-bold text-white text-9 mb-0">Gizlilik ve Hizmet Politikası</h2>
        </div>
    </section>

    <section class="section bg-transparent position-relative border-0 m-0">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="blog-posts single-post">
                        <article class="post">
                            <div class="post-content">
                                <h2 class="font-weight-bold text-6 mb-4">Gizlilik ve Hizmet Politikası</h2>

                                <p class="text-4 line-height-8 mb-4">
                                    <strong>Hazırlama Tarihi:</strong> {{ now()->format('d.m.Y') }}
                                </p>

                                <h3 class="font-weight-bold text-5 mt-5 mb-3">Gizlilik Politikamız</h3>
                                <p class="text-4 line-height-8 mb-4">
                                    Senkroon Yazılım kişisel verilerin korunmasına ve gizliliğinize önem verir.
                                    Bu nedenle, kişisel verilerinizi sadece ürünlerimiz, hizmetlerimiz, web sitelerimiz
                                    ve mobil uygulamalarımızı size sunmamız için gerekli şekilde toplar ve kullanırız.
                                </p>

                                <h3 class="font-weight-bold text-5 mt-5 mb-3">Kişisel Bilgi Nedir?</h3>
                                <p class="text-4 line-height-8 mb-4">
                                    Bu gizlilik politikasında kullanılan "kişisel bilgi" terimi Kanunda belirtilen anlamı taşır.
                                    Genel olarak, sizi kişisel olarak tanımlamak için kullanılabilecek herhangi bir bilgidir.
                                    Bu adınız, soyadınız, adresiniz, telefon numaranız, e-posta adresiniz, doğrudan veya
                                    dolaylı olarak sizi tanımlayabilecek diğer bilgiler olabilir. Topladığımız bilgiler sizi
                                    kişisel olarak tanımlarsa veya makul bir şekilde tanımlanabilirseniz, bu bilgiler kişisel
                                    bilgiler olarak kabul edilecektir.
                                </p>

                                <h3 class="font-weight-bold text-5 mt-5 mb-3">Hangi Kişisel Bilgileri Topluyoruz?</h3>
                                <p class="text-4 line-height-8 mb-4">
                                    Hizmetlerimizi kullandığınızda mümkün olan en iyi deneyimi sağlayabilmek için
                                    bilgilerinizi topluyoruz. Aşağıdaki türde kişisel bilgilerinizi toplayabiliriz:
                                </p>
                                <ul class="text-4 line-height-8 list-style-1 mb-4">
                                    <li>Ad, Soyad</li>
                                    <li>E-Posta</li>
                                    <li>Telefon</li>
                                    <li>Şirket</li>
                                    <li>Bizden satın aldığınız veya talep ettiğiniz ürün ve hizmetlerin ayrıntıları</li>
                                    <li>Bu ürün ve hizmetleri sunmak ve sorularınızı yanıtlamak için gerekli olan ek bilgiler</li>
                                    <li>Web sitelerimizden bize doğrudan sağladığınız herhangi bir ek bilgiler</li>
                                    <li>Web sitelerimizin kullanımı veya çevrimiçi varlığımız aracılığıyla dolaylı olarak sağlanan bilgiler</li>
                                </ul>

                                <h3 class="font-weight-bold text-5 mt-5 mb-3">Topladığımız Bilgileri Nasıl Kullanıyoruz?</h3>
                                <p class="text-4 line-height-8 mb-4">
                                    Hizmetlerimizle ilgili satın alma davranışlarınızı, kullanım veya etkileşimlerinizle ilgili
                                    çeşitli bilgileri topluyoruz. Bu bilgiler kapsamında şunları yapıyoruz:
                                </p>
                                <ul class="text-4 line-height-8 list-style-1 mb-4">
                                    <li>Hizmetlerimizin kullanımı hakkında istatistiklerin toplanıp raporlanması</li>
                                    <li>Hizmetlerimizde ve sistemlerimizdeki sahtekarlık ve kötüye kullanımı önleme</li>
                                    <li>Hizmetlerimizi nasıl kullandığınızı ve hangi ürün ve hizmetlerin sizin için uygun olduğunun tespit ve analiz edilmesi</li>
                                    <li>Hizmetlerimizle ilgili sorunları tespit edip hataların giderilmesi ve gerekli iyileştirmelerin yapılması</li>
                                </ul>

                                <h3 class="font-weight-bold text-5 mt-5 mb-3">Verilerinizi Nasıl Koruyor ve Saklıyoruz?</h3>
                                <p class="text-4 line-height-8 mb-4">
                                    Topladığımız kişisel verilerinizi depolamak ve korumak için genel kabul görmüş standartları
                                    uygularız. Kişisel verilerinizi, yalnızca talep ettiğiniz hizmetleri sağlamak için gerekli
                                    olan süre boyunca ve sonrasında çeşitli yasal veya ticari amaçlarla saklarız.
                                </p>

                                <h3 class="font-weight-bold text-5 mt-5 mb-3">Bize Ulaşın</h3>
                                <p class="text-4 line-height-8 mb-4">
                                    Bu Gizlilik Politikası ile ilgili herhangi bir sorunuz varsa, kişisel verilerinizin
                                    gizliliğiyle ilgili herhangi bir endişeniz veya şikayetiniz varsa, lütfen aşağıdaki
                                    bilgileri kullanarak bize ulaşın veya web sitemizdeki iletişim bağlantısını kullanın.
                                </p>
                                <p class="text-4 line-height-8 mb-4">
                                    <strong>E-posta:</strong> info@senkroon.com<br>
                                    <strong>Telefon:</strong> +90 530 669 04 44<br>
                                    <strong>Adres:</strong> Polatlar Office, Tecde, Mıhlıdut Sk. A Blok No: 37/B, 44090,
                                    Yeşilyurt/Malatya
                                </p>

                                <div class="alert alert-info mt-5">
                                    <p class="text-4 mb-0">
                                        Gizliliğiniz bizim için çok önemlidir. Verilerinizle ilgili herhangi bir sorunuz
                                        varsa lütfen çekinmeden bizele iletişime geçin.
            </div>
        </div>
    </section>
@endsection
