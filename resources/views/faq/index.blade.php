@extends('layout.master')

@section('content')
    <!-- Page Header -->
    <section class="page-header page-header-modern section position-relative border-0 m-0 mb-5"
        style="background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url({{ asset('images/modules/all.jpg') }}); background-position: center; background-size: cover;">
        <div class="container position-relative pb-2 mb-2 d-flex align-items-center justify-content-center">
            <h2 class="font-weight-bold text-white text-9 mb-0">Sık Sorulan Sorular </h2>
        </div>
    </section>



    <!-- FAQ Section -->
    <section class=" border-0 m-0 py-5">
        <div class="container">
            <div class="row">

                <div class="container py-4">

                    <div class="row">
                        <div class="col">


                            <div class="toggle toggle-primary m-0" data-plugin-toggle>
                                <section class="toggle active">
                                    <a class="toggle-title">Workcube ERP kimler için gerekli?</a>
                                    <div class="toggle-content container">
                                        <p>Üretim yapan, birden fazla departmanı olan, şube/depo yapısıyla çalışan ve büyüme hedefi bulunan işletmeler için Workcube ERP lüks değil, gerçek bir ihtiyaçtır.</p>
                                    </div>
                                </section>

                                <section class="toggle">
                                    <a class="toggle-title">Muhasebe programım varken neden Workcube'e geçeyim?</a>
                                    <div class="toggle-content container">
                                        <p>Muhasebe programı yasal kayıt tutar; Workcube ise satıştan üretime, stoktan finansa tüm işi tek platformda yönetmenizi ve resmi bütün olarak görmenizi sağlar.</p>
                                    </div>
                                </section>

                                <section class="toggle">
                                    <a class="toggle-title">Workcube ERP'ye geçmek işi aksatır mı?</a>
                                    <div class="toggle-content container">
                                        <p>Doğru planlandığında hayır. Proje fazlara bölünür, önce kritik süreçler devreye alınır, işletme adım adım yeni sisteme taşınır.</p>
                                    </div>
                                </section>

                                <section class="toggle">
                                    <a class="toggle-title">Workcube ERP'nin maliyeti nasıl belirleniyor?</a>
                                    <div class="toggle-content container">
                                        <p>Kullanıcı sayısı, modül kapsamı, sektörünüze özel ihtiyaçlar ve altyapı tercihinize (bulut / sunucu) göre proje bazlı olarak hesaplanır.</p>
                                    </div>
                                </section>

                                <section class="toggle">
                                    <a class="toggle-title">Tüm süreçleri aynı anda sisteme taşımak zorunda mıyız?</a>
                                    <div class="toggle-content container">
                                        <p>Hayır. Genellikle omurga süreçler (satış-satınalma-stok-finans) önce kurulur, diğer süreçler kontrollü şekilde sonra eklenir.</p>
                                    </div>
                                </section>

                                <section class="toggle">
                                    <a class="toggle-title">Workcube ERP firmama özel uyarlanabilir mi?</a>
                                    <div class="toggle-content container">
                                        <p>Evet. Ekranlar, raporlar ve iş akışları; sektörünüze, iş modelinize ve firma ihtiyaçlarınıza göre parametrik ve geliştirilebilir yapıdadır.</p>
                                    </div>
                                </section>

                                <section class="toggle">
                                    <a class="toggle-title">Kullanıcılar Workcube'e alışmakta zorlanır mı?</a>
                                    <div class="toggle-content container">
                                        <p>Sürece dahil edilir, gerçek iş senaryolarıyla eğitim alır ve ilk dönemde desteklenirlerse; zorluk yerine konfor artışı yaşarlar.</p>
                                    </div>
                                </section>

                                <section class="toggle">
                                    <a class="toggle-title">Workcube bulut ortamda mı, kendi sunucumuzda mı çalışır?</a>
                                    <div class="toggle-content container">
                                        <p>Her iki model de mümkündür. Güvenlik, BT altyapısı ve bütçe tercihinize göre bulut veya on-premise kurulabilir.</p>
                                    </div>
                                </section>

                                <section class="toggle">
                                    <a class="toggle-title">"Workcube + Senkroon" yaklaşımı ne kazandırır?</a>
                                    <div class="toggle-content container">
                                        <p>Yalnızca yazılım kurulmaz; süreç, organizasyon ve raporlama birlikte tasarlanır. Böylece ERP, sadece program değil, şirketin işletim sistemi haline gelir.</p>
                                    </div>
                                </section>

                                <section class="toggle">
                                    <a class="toggle-title">Workcube ERP için doğru zamanı geldiğini nasıl anlarım?</a>
                                    <div class="toggle-content container">
                                        <p>Her departman farklı Excel kullanıyorsa, rakamlar çelişiyorsa, toplantılarda tablo toplamak saatler alıyorsa ve büyüdükçe karmaşa artıyorsa, zaman gelmiş demektir.</p>
                                    </div>
                                </section>
                            </div>

                        </div>

                    </div>

                </div>


            </div>

            <!-- CTA Section -->


        </div>
    </section>

@endsection
