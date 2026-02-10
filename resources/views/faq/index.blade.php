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
                                    <a class="toggle-title">Workcube ERP kimler icin gerekli?</a>
                                    <div class="toggle-content container">
                                        <p>Uretim yapan, birden fazla departmani olan, sube/depo yapisiyla calisan ve buyume hedefi bulunan isletmeler icin Workcube ERP luks degil, gercek bir ihtiyactir.</p>
                                    </div>
                                </section>

                                <section class="toggle">
                                    <a class="toggle-title">Muhasebe programim varken neden Workcube'e geceyim?</a>
                                    <div class="toggle-content container">
                                        <p>Muhasebe programi yasal kayit tutar; Workcube ise satistan uretime, stoktan finansa tum isi tek platformda yonetmenizi ve resmi butun olarak gormenizi saglar.</p>
                                    </div>
                                </section>

                                <section class="toggle">
                                    <a class="toggle-title">Workcube ERP'ye gecmek isi aksatir mi?</a>
                                    <div class="toggle-content container">
                                        <p>Dogru planlandiginda hayir. Proje fazlara bolunur, once kritik surecler devreye alinir, isletme adim adim yeni sisteme tasinir.</p>
                                    </div>
                                </section>

                                <section class="toggle">
                                    <a class="toggle-title">Workcube ERP'nin maliyeti nasil belirleniyor?</a>
                                    <div class="toggle-content container">
                                        <p>Kullanici sayisi, modul kapsami, sektorunuze ozel ihtiyaclar ve altyapi tercihinize (bulut / sunucu) gore proje bazli olarak hesaplanir.</p>
                                    </div>
                                </section>

                                <section class="toggle">
                                    <a class="toggle-title">Tum surecleri ayni anda sisteme tasimak zorunda miyiz?</a>
                                    <div class="toggle-content container">
                                        <p>Hayir. Genellikle omurga surecler (satis-satinalma-stok-finans) once kurulur, diger surecler kontrollu sekilde sonra eklenir.</p>
                                    </div>
                                </section>

                                <section class="toggle">
                                    <a class="toggle-title">Workcube ERP firmama ozel uyarlanabilir mi?</a>
                                    <div class="toggle-content container">
                                        <p>Evet. Ekranlar, raporlar ve is akislari; sektorunuze, is modelinize ve firma ihtiyaclariniza gore parametrik ve gelistirilebilir yapidadir.</p>
                                    </div>
                                </section>

                                <section class="toggle">
                                    <a class="toggle-title">Kullanicilar Workcube'e alismakta zorlanir mi?</a>
                                    <div class="toggle-content container">
                                        <p>Surece dahil edilir, gercek is senaryolariyla egitim alir ve ilk donemde desteklenirlerse; zorluk yerine konfor artisi yasarlar.</p>
                                    </div>
                                </section>

                                <section class="toggle">
                                    <a class="toggle-title">Workcube bulut ortamda mi, kendi sunucumuzda mi calisir?</a>
                                    <div class="toggle-content container">
                                        <p>Her iki model de mumkundur. Guvenlik, BT altyapisi ve butce tercihinize gore bulut veya on-premise kurulabilir.</p>
                                    </div>
                                </section>

                                <section class="toggle">
                                    <a class="toggle-title">"Workcube + Senkroon" yaklasimi ne kazandirir?</a>
                                    <div class="toggle-content container">
                                        <p>Yalnizca yazilim kurulmaz; surec, organizasyon ve raporlama birlikte tasarlanir. Boylece ERP, sadece program degil, sirketin isletim sistemi haline gelir.</p>
                                    </div>
                                </section>

                                <section class="toggle">
                                    <a class="toggle-title">Workcube ERP icin dogru zaman geldigini nasil anlarim?</a>
                                    <div class="toggle-content container">
                                        <p>Her departman farkli Excel kullaniyorsa, rakamlar celisiyorsa, toplantilarda tablo toplamak saatler aliyorsa ve buyudukce karmasa artiyorsa, zaman gelmis demektir.</p>
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
