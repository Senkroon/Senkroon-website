<?php

namespace Database\Seeders;

use App\Models\Module;
use Illuminate\Database\Seeder;

class DiaSeeder extends Seeder
{
    /**
     * DİA Yazılım modüllerini ekle.
     * Kaynak: https://www.dia.com.tr/cozumler/
     */
    public function run(): void
    {
        $mainModules = [
            // ───────────────────────────────────
            // 1) DİA ERP
            // ───────────────────────────────────
            [
                'title' => 'DİA ERP',
                'slug' => 'dia-erp',
                'short_description' => 'İşletmenizin tüm kaynak planlama süreçlerini bulut teknolojisi farkıyla tek platformda yönetin.',
                'content' => '<p>DİA ERP, işletmelerin ön muhasebe, genel muhasebe, stok & depo, üretim, dış ticaret, personel & bordro, demirbaş, talep ve proje yönetimi gibi tüm operasyonel süreçlerini bulut tabanlı tek bir platformda birleştiren kapsamlı bir kurumsal kaynak planlama çözümüdür.</p><p>Türkiye\'nin en gelişmiş bulut ERP yazılımlarından biri olan DİA ile gerçek zamanlı veri akışı, anlık raporlama ve mobil erişim avantajlarından yararlanarak işletme verimliliğinizi artırabilirsiniz.</p><p>Tüm modüller birbiriyle entegre çalıştığı için veri tekrarı ortadan kalkar, süreçler hızlanır ve karar mekanizmaları güçlenir.</p>',
                'icon' => 'fas fa-cubes',
                'cover_image' => null,
                'extra_description' => 'DİA Bulut ERP – Türkiye\'nin lider bulut ERP çözümü.',
                'order' => 10,
                'children' => [
                    [
                        'title' => 'Ön Muhasebe Yönetimi',
                        'slug' => 'dia-on-muhasebe-yonetimi',
                        'short_description' => 'Finansal işlemlerin takibi ve daha birçok özelliği ile DİA Ön Muhasebe Yönetimi yanınızda!',
                        'content' => '<p>DİA Ön Muhasebe Yönetimi, işletmenizin günlük finansal işlemlerini hızlı ve güvenli bir şekilde takip etmenizi sağlar.</p><p>Cari hesap yönetimi, alış-satış faturaları, tahsilat ve ödeme takibi, çek-senet yönetimi gibi temel ön muhasebe operasyonlarını bulut teknolojisi ile yönetebilirsiniz.</p><p>Kullanıcı dostu arayüzü sayesinde muhasebe bilgisi gerektirmeden işletmenizin mali durumunu anlık olarak izleyebilir, gelir-gider dengelerini kontrol altında tutabilirsiniz.</p>',
                        'icon' => 'fas fa-calculator',
                        'order' => 1,
                    ],
                    [
                        'title' => 'Stok & Depo Yönetimi',
                        'slug' => 'dia-stok-depo-yonetimi',
                        'short_description' => 'Verimli Stok - Depo Yönetimi İçin DİA\'yı Tercih Edin! Depolarınızın ve stoklarınızın takip ve yönetimini bulut bilişim farkıyla yapın.',
                        'content' => '<p>DİA Stok & Depo Yönetimi, işletmenizin depo ve stok süreçlerini bulut teknolojisi ayrıcalığıyla yönetmenizi sağlar.</p><p>Ürün giriş-çıkış takibi, depolar arası transfer, kritik stok seviyesi uyarıları, barkod entegrasyonu ve lot/seri bazlı takip gibi gelişmiş özelliklerle stok doğruluğunuzu artırabilirsiniz.</p><p>Çoklu depo desteği ve anlık envanter raporları sayesinde satın alma planlamanızı optimize edebilir, gereksiz stok maliyetlerini azaltabilirsiniz.</p>',
                        'icon' => 'fas fa-warehouse',
                        'order' => 2,
                    ],
                    [
                        'title' => 'Genel Muhasebe Yönetimi',
                        'slug' => 'dia-genel-muhasebe-yonetimi',
                        'short_description' => 'DİA Genel Muhasebe Programı ile Değişime İlk Adımı Atın! Şirketinizin tüm finansal süreçlerini bulut bilişim farkıyla yönetin!',
                        'content' => '<p>DİA Genel Muhasebe Yönetimi, şirketinizin tüm muhasebe süreçlerini planlı ve düzenli yönetmenizi sağlayan kapsamlı bir çözümdür.</p><p>Yevmiye kayıtları, mizan, bilanço, gelir tablosu, KDV beyannameleri ve e-beyanname entegrasyonu gibi tüm genel muhasebe ihtiyaçlarınızı tek platformda karşılayabilirsiniz.</p><p>Otomatik muhasebe entegrasyonu sayesinde ön muhasebeden gelen veriler genel muhasebeye sorunsuz aktarılır, dönem sonu kapanış işlemleri hızlanır.</p>',
                        'icon' => 'fas fa-book',
                        'order' => 3,
                    ],
                    [
                        'title' => 'Personel ve Bordro Yönetimi',
                        'slug' => 'dia-personel-bordro-yonetimi',
                        'short_description' => 'İşe giriş çıkış takibi, puantaj hazırlama ve daha birçok özelliği ile DİA Personel ve Bordro Yönetimi yanınızda!',
                        'content' => '<p>DİA Personel ve Bordro Yönetimi, çalışanlarınızın özlük bilgilerinden bordro hesaplamalarına kadar tüm İK süreçlerini dijital ortamda yönetmenizi sağlar.</p><p>İşe giriş-çıkış takibi, puantaj hazırlama, maaş hesaplama, SGK bildirge ve beyanname hazırlama, izin yönetimi gibi fonksiyonlarla İK operasyonlarınızı hızlandırabilirsiniz.</p><p>Yasal mevzuata uyumlu altyapısı sayesinde bordro süreçlerinizdeki hata riskini minimize eder, personel yönetiminizi daha verimli hale getirirsiniz.</p>',
                        'icon' => 'fas fa-users-cog',
                        'order' => 4,
                    ],
                    [
                        'title' => 'Demirbaş Yönetimi',
                        'slug' => 'dia-demirbas-yonetimi',
                        'short_description' => 'Anlık demirbaş durum takibi, amortisman hesaplama ve daha birçok özelliği ile DİA Demirbaş Yönetimi yanınızda!',
                        'content' => '<p>DİA Demirbaş Yönetimi, işletmenizin sabit kıymet ve demirbaş varlıklarını yaşam döngüsü boyunca takip etmenizi sağlar.</p><p>Demirbaş tanımlama, zimmet atama, konum takibi, amortisman hesaplama ve elden çıkarma süreçlerini sistematik olarak yönetebilirsiniz.</p><p>Anlık demirbaş durum raporları ve amortisman tabloları ile mali planlamanızı daha sağlıklı yapabilir, denetim süreçlerine hazırlıklı olabilirsiniz.</p>',
                        'icon' => 'fas fa-desktop',
                        'order' => 5,
                    ],
                    [
                        'title' => 'Talep Yönetimi',
                        'slug' => 'dia-talep-yonetimi',
                        'short_description' => 'Depo talep yönetimi, teklif - sipariş entegrasyonu ve daha birçok özelliği ile DİA Talep Yönetimi yanınızda!',
                        'content' => '<p>DİA Talep Yönetimi, departmanlar arası malzeme ve hizmet taleplerini dijital ortamda oluşturmanızı, onay süreçlerini yönetmenizi ve satın alma ile entegre çalışmanızı sağlar.</p><p>Depo talep yönetimi, teklif-sipariş entegrasyonu, onay mekanizmaları ve talep durum takibi gibi özellikler sayesinde tedarik süreçleriniz hızlanır.</p><p>Merkezi talep yönetimi ile gereksiz satın almaların önüne geçebilir, bütçe kontrolünü artırabilirsiniz.</p>',
                        'icon' => 'fas fa-hand-holding',
                        'order' => 6,
                    ],
                    [
                        'title' => 'Proje Yönetimi',
                        'slug' => 'dia-proje-yonetimi',
                        'short_description' => 'Proje takibi, proje dağıtım tanımları ve daha birçok özelliği ile DİA Proje Yönetimi yanınızda!',
                        'content' => '<p>DİA Proje Yönetimi, işletmenizin projelerini planlama aşamasından tamamlanma sürecine kadar takip etmenizi sağlar.</p><p>Proje bazlı maliyet takibi, gelir-gider analizi, kaynak dağıtımı ve ilerleme raporları ile projelerinizin finansal performansını detaylı olarak izleyebilirsiniz.</p><p>Muhasebe entegrasyonu sayesinde proje bazlı karlılık analizleri yapabilir ve stratejik kararlarınızı veriye dayalı şekilde alabilirsiniz.</p>',
                        'icon' => 'fas fa-project-diagram',
                        'order' => 7,
                    ],
                    [
                        'title' => 'Dış Ticaret Yönetimi',
                        'slug' => 'dia-dis-ticaret-yonetimi',
                        'short_description' => 'İthalat - ihracat kartları, hizmet maliyet dağıtımları ve daha birçok özelliği ile DİA Dış Ticaret Yönetimi yanınızda!',
                        'content' => '<p>DİA Dış Ticaret Yönetimi, ithalat ve ihracat süreçlerinizi uçtan uca yönetmenizi sağlayan kapsamlı bir çözümdür.</p><p>İthalat-ihracat kartları, gümrük masraf dağıtımları, dövizli fatura ve maliyet hesaplamaları, navlun ve sigorta takibi gibi dış ticaret operasyonlarınızı tek platformda yürütebilirsiniz.</p><p>Çoklu döviz desteği ve maliyet dağıtım mekanizması sayesinde gerçek ürün maliyetlerinizi doğru hesaplayabilir, karlılığınızı artırabilirsiniz.</p>',
                        'icon' => 'fas fa-globe',
                        'order' => 8,
                    ],
                    [
                        'title' => 'Üretim Yönetimi',
                        'slug' => 'dia-uretim-yonetimi',
                        'short_description' => 'Gelişmiş reçete, operatör bazında işlem takibi ve daha birçok özelliği ile DİA Üretim Yönetimi yanınızda!',
                        'content' => '<p>DİA Üretim Yönetimi, üretim süreçlerinizi planlama aşamasından tamamlanmaya kadar takip etmenizi sağlar.</p><p>Gelişmiş reçete tanımlama, iş emri yönetimi, operatör bazında işlem takibi, üretim maliyet hesaplama ve kalite kontrol süreçleri ile üretim operasyonlarınızı optimize edebilirsiniz.</p><p>Hammadde tüketimi, yarı mamul hareketleri ve mamul üretim kayıtları entegre olarak izlenerek kapasite kullanımınızı artırabilir, maliyetlerinizi düşürebilirsiniz.</p>',
                        'icon' => 'fas fa-industry',
                        'order' => 9,
                    ],
                    [
                        'title' => 'İnsan Kaynakları Yönetimi',
                        'slug' => 'dia-insan-kaynaklari-yonetimi',
                        'short_description' => 'DİA İnsan Kaynakları Programı, işletmenizin en değerli varlığı olan insan kaynağını yönetmeyi kolaylaştıran güçlü ve kullanıcı dostu bir çözümdür.',
                        'content' => '<p>DİA İnsan Kaynakları Yönetimi, çalışan yaşam döngüsünün tamamını kapsayan modern bir İK çözümüdür.</p><p>İşe alımdan performans değerlendirmeye, eğitim planlamasından kariyer yönetimine kadar tüm İK süreçlerini dijital ortamda yönetebilirsiniz.</p><p>Organizasyon şeması, yetkinlik haritaları, çalışan self-servis portalı ve gelişmiş raporlama araçları ile İK ekibinizin stratejik odağını güçlendirebilirsiniz.</p>',
                        'icon' => 'fas fa-user-tie',
                        'order' => 10,
                    ],
                    [
                        'title' => 'İş Akış ve Süreç Yönetimi',
                        'slug' => 'dia-is-akis-surec-yonetimi',
                        'short_description' => 'İş akışlarınızı dijitalleştirin, onay mekanizmalarını otomatikleştirin ve süreçlerinizi standartlaştırın.',
                        'content' => '<p>DİA İş Akış ve Süreç Yönetimi, işletmenizin tekrarlayan iş süreçlerini otomatikleştirmenizi ve standartlaştırmanızı sağlar.</p><p>Onay akışları, bildirim mekanizmaları, görev atamaları ve süreç izleme araçları ile operasyonel verimliğinizi artırabilirsiniz.</p><p>Süreçlerin dijital olarak takip edilmesi sayesinde darboğazlar hızla tespit edilir, iş tamamlanma süreleri kısalır ve kurumsal disiplin güçlenir.</p>',
                        'icon' => 'fas fa-sitemap',
                        'order' => 11,
                    ],
                    [
                        'title' => 'İş Zekası – BI Çözümleri',
                        'slug' => 'dia-is-zekasi-bi-cozumleri',
                        'short_description' => 'DİA İş Zekası - BI Çözümleri modülü ile görsellerle zenginleştirilmiş özel raporlar hazırlamaya hemen başlayın.',
                        'content' => '<p>DİA İş Zekası (BI) Çözümleri, işletmenizdeki verileri anlamlı bilgilere dönüştüren güçlü bir analiz ve raporlama platformudur.</p><p>Özelleştirilebilir dashboard\'lar, grafik ve tablo bazlı görsel raporlar, trend analizleri ve karşılaştırmalı performans ölçümleri ile veriye dayalı karar alma sürecinizi hızlandırabilirsiniz.</p><p>Tüm DİA modüllerinden beslenen BI altyapısı sayesinde satış, stok, finans ve üretim verilerinizi 360 derece analiz edebilirsiniz.</p>',
                        'icon' => 'fas fa-chart-bar',
                        'order' => 12,
                    ],
                ],
            ],

            // ───────────────────────────────────
            // 2) DİA CRM
            // ───────────────────────────────────
            [
                'title' => 'DİA CRM',
                'slug' => 'dia-crm',
                'short_description' => 'Müşteri ilişkilerinizi güçlendiren, satış süreçlerinizi hızlandıran bulut tabanlı CRM çözümü.',
                'content' => '<p>DİA CRM, müşteri adaylarından mevcut müşterilere, tekliflerden siparişlere kadar tüm satış ve müşteri ilişkileri süreçlerini tek platformda yönetmenizi sağlar.</p><p>Potansiyel müşteri tanımı, aktivite takibi, teklif hazırlama, sipariş yönetimi ve satış performans raporları ile satış ekiplerinizin verimliliğini artırabilirsiniz.</p><p>Mobil saha satış, iş takip ve satın alma modülleri ile CRM süreçlerinizi sahadan ofise kadar kesintisiz yönetebilirsiniz.</p>',
                'icon' => 'fas fa-handshake',
                'cover_image' => null,
                'extra_description' => 'DİA CRM – Müşteri odaklı satış ve ilişki yönetimi.',
                'order' => 20,
                'children' => [
                    [
                        'title' => 'CRM – Müşteri İlişkileri Yönetimi',
                        'slug' => 'dia-crm-musteri-iliskileri-yonetimi',
                        'short_description' => 'Potansiyel müşteri tanımı, müşteri profili tanımlama ve daha birçok özelliği ile DİA CRM yanınızda!',
                        'content' => '<p>DİA CRM Müşteri İlişkileri Yönetimi, müşteri ve potansiyel müşterilerinize ait tüm bilgileri merkezi olarak yönetmenizi sağlar.</p><p>Müşteri profili tanımlama, temas geçmişi, notlar, dosyalar ve aktivite kayıtları ile 360 derece müşteri görünümü elde edebilirsiniz.</p><p>Segmentasyon, müşteri sınıflandırma ve performans analizleri ile müşteri portföyünüzü daha etkin yönetebilirsiniz.</p>',
                        'icon' => 'fas fa-users',
                        'order' => 1,
                    ],
                    [
                        'title' => 'Mobil Saha Satış',
                        'slug' => 'dia-mobil-saha-satis',
                        'short_description' => 'Cari hesap yönetimi, sipariş, teklif ve daha birçok özelliği ile DİA Mobil Saha Satış yanınızda!',
                        'content' => '<p>DİA Mobil Saha Satış, saha satış ekiplerinizin müşteri ziyaretlerini, sipariş ve teklif süreçlerini mobil cihazlardan yönetmesini sağlar.</p><p>Cari hesap görüntüleme, sipariş oluşturma, teklif hazırlama, tahsilat kaydı ve GPS koordinatlı ziyaret takibi gibi işlemler sahadan anlık olarak sisteme aktarılır.</p><p>Offline çalışma desteği sayesinde internet bağlantısı olmayan bölgelerde bile işlemlerinize devam edebilir, bağlantı sağlandığında verileri otomatik senkronize edebilirsiniz.</p>',
                        'icon' => 'fas fa-mobile-alt',
                        'order' => 2,
                    ],
                    [
                        'title' => 'İş Takip Yönetimi',
                        'slug' => 'dia-is-takip-yonetimi',
                        'short_description' => 'Personel görev takibi, ajanda entegrasyonu ve daha birçok özelliği ile DİA İş Takip Yönetimi yanınızda!',
                        'content' => '<p>DİA İş Takip Yönetimi, ekiplerinizin görev ve iş süreçlerini planlı bir şekilde yönetmenizi sağlar.</p><p>Görev atama, süre takibi, ajanda entegrasyonu, hatırlatıcılar ve durum güncelleme mekanizmaları ile ekip koordinasyonunu güçlendirebilirsiniz.</p><p>İş yükü dağılımı ve performans raporları ile kaynaklarınızı daha verimli kullanabilir, proje teslim sürelerini kısaltabilirsiniz.</p>',
                        'icon' => 'fas fa-tasks',
                        'order' => 3,
                    ],
                    [
                        'title' => 'Satın Alma Yönetimi',
                        'slug' => 'dia-satin-alma-yonetimi',
                        'short_description' => 'Depo talep, onay, teklif, sipariş ve daha birçok özelliği ile DİA Satın Alma Yönetimi yanınızda.',
                        'content' => '<p>DİA Satın Alma Yönetimi, tedarik süreçlerinizi talepten teslimata kadar uçtan uca yönetmenizi sağlar.</p><p>Depo talep yönetimi, tedarikçi teklif karşılaştırma, onay mekanizmaları, sipariş oluşturma ve teslimat takibi gibi süreçleri standartlaştırabilirsiniz.</p><p>Tedarikçi performans değerlendirmesi ve maliyet analizi raporları ile satın alma stratejinizi optimize edebilirsiniz.</p>',
                        'icon' => 'fas fa-shopping-cart',
                        'order' => 4,
                    ],
                    [
                        'title' => 'Sipariş Yönetimi',
                        'slug' => 'dia-siparis-yonetimi',
                        'short_description' => 'Rezervasyon, kısmi sevk, ön ödeme ve daha birçok özelliği ile DİA Sipariş Programı yanınızda!',
                        'content' => '<p>DİA Sipariş Yönetimi, müşteri siparişlerini girişten teslimata kadar tüm aşamalarında takip etmenizi sağlar.</p><p>Sipariş oluşturma, rezervasyon, kısmi sevk, ön ödeme takibi, sipariş durumu izleme ve müşteri bildirimleri gibi süreçleri tek platformda yönetebilirsiniz.</p><p>Stok ve depo modülü ile entegre çalışarak sevkiyat planlamanızı optimize edebilir, müşteri memnuniyetini artırabilirsiniz.</p>',
                        'icon' => 'fas fa-clipboard-list',
                        'order' => 5,
                    ],
                    [
                        'title' => 'Teklif Yönetimi',
                        'slug' => 'dia-teklif-yonetimi',
                        'short_description' => 'Gelişmiş teklif tasarımı, alınan teklifleri karşılaştırma ve daha birçok özelliği ile DİA Teklif Yönetimi yanınızda!',
                        'content' => '<p>DİA Teklif Yönetimi, profesyonel ve etkileyici teklifler hazırlamanızı ve teklif süreçlerinizi merkezi olarak yönetmenizi sağlar.</p><p>Gelişmiş teklif tasarım şablonları, otomatik fiyatlandırma, indirim yönetimi, alınan teklifleri karşılaştırma ve teklif onay süreçleri ile satış dönüşüm oranlarınızı artırabilirsiniz.</p><p>Teklif geçmişi ve performans raporları ile hangi ürün/hizmetlerin daha çok ilgi gördüğünü analiz edebilirsiniz.</p>',
                        'icon' => 'fas fa-file-invoice',
                        'order' => 6,
                    ],
                ],
            ],

            // ───────────────────────────────────
            // 3) DİA E-Dönüşüm
            // ───────────────────────────────────
            [
                'title' => 'DİA E-Dönüşüm',
                'slug' => 'dia-e-donusum',
                'short_description' => 'E-Fatura, E-İrsaliye, E-Defter ve tüm e-dönüşüm süreçlerinizi DİA ile yönetin.',
                'content' => '<p>DİA E-Dönüşüm, GİB (Gelir İdaresi Başkanlığı) entegrasyonlu olarak tüm e-belge süreçlerinizi tek platformdan yönetmenizi sağlayan kapsamlı bir çözümdür.</p><p>E-Fatura, E-İrsaliye, E-Defter, E-SMM, E-Müstahsil Makbuzu, E-Mutabakat, E-Banka ve E-Arşiv modülleri ile yasal yükümlülüklerinizi sorunsuzca karşılayabilirsiniz.</p><p>Otomatik belge oluşturma, toplu gönderim ve arşivleme özellikleri sayesinde e-dönüşüm süreçlerinizdeki iş yükünü minimuma indirirsiniz.</p>',
                'icon' => 'fas fa-exchange-alt',
                'cover_image' => null,
                'extra_description' => 'DİA E-Dönüşüm – GİB entegrasyonlu tam uyumlu çözüm.',
                'order' => 30,
                'children' => [
                    [
                        'title' => 'E-Fatura',
                        'slug' => 'dia-e-fatura',
                        'short_description' => 'Cep telefonundan özgürce e-fatura hazırlama ve daha birçok özelliği ile DİA E-Fatura Programı yanınızda!',
                        'content' => '<p>DİA E-Fatura, GİB entegrasyonu ile e-fatura oluşturma, gönderme ve alma süreçlerini hızlı ve güvenli şekilde yönetmenizi sağlar.</p><p>Mobil cihazlardan e-fatura hazırlama, toplu fatura gönderimi, otomatik muhasebeleştirme ve fatura durum takibi gibi gelişmiş özellikler sunar.</p><p>Kullanıcı dostu arayüzü ve bulut teknolojisi sayesinde her yerden e-fatura işlemlerinizi yönetebilirsiniz.</p>',
                        'icon' => 'fas fa-file-alt',
                        'order' => 1,
                    ],
                    [
                        'title' => 'E-İrsaliye',
                        'slug' => 'dia-e-irsaliye',
                        'short_description' => 'GİB entegrasyonu, gelişmiş mobil destek ve daha birçok özelliği ile DİA E-İrsaliye yanınızda!',
                        'content' => '<p>DİA E-İrsaliye, sevkiyat süreçlerinizde e-irsaliye oluşturma ve gönderim işlemlerini dijital ortamda yönetmenizi sağlar.</p><p>GİB entegrasyonu, mobil irsaliye düzenleme, toplu gönderim ve otomatik muhasebe kaydı oluşturma özellikleri ile sevkiyat operasyonlarınızı hızlandırabilirsiniz.</p><p>Kağıt irsaliye maliyetlerini ortadan kaldırarak hem çevreci hem de verimli bir sevkiyat süreci oluşturabilirsiniz.</p>',
                        'icon' => 'fas fa-truck',
                        'order' => 2,
                    ],
                    [
                        'title' => 'E-Defter',
                        'slug' => 'dia-e-defter',
                        'short_description' => 'GİB entegrasyonu, sürekli destek, bulut teknolojisi ve daha birçok özelliği ile DİA E-Defter yanınızda!',
                        'content' => '<p>DİA E-Defter, yevmiye defteri ve büyük defterin elektronik ortamda hazırlanması, imzalanması ve GİB\'e gönderilmesi süreçlerini yönetir.</p><p>Otomatik defter oluşturma, dönem bazlı kontrol ve GİB onay takibi özellikleri ile e-defter yükümlülüklerinizi sorunsuzca karşılayabilirsiniz.</p><p>Muhasebe modülü ile tam entegre çalışarak veri tutarlılığını sağlar ve denetim süreçlerini kolaylaştırır.</p>',
                        'icon' => 'fas fa-book-open',
                        'order' => 3,
                    ],
                    [
                        'title' => 'E-SMM',
                        'slug' => 'dia-e-smm',
                        'short_description' => 'Hızlı gönderim, otomatik hesaplama ve daha birçok özelliği ile DİA E-SMM yanınızda!',
                        'content' => '<p>DİA E-SMM (Serbest Meslek Makbuzu), serbest meslek erbabının makbuz düzenleme süreçlerini elektronik ortamda yönetmesini sağlar.</p><p>Hızlı gönderim, otomatik stopaj ve KDV hesaplama, toplu makbuz düzenleme ve GİB entegrasyonu ile SMM süreçlerinizi kolaylaştırabilirsiniz.</p><p>Dijital arşivleme özelliği sayesinde tüm makbuzlarınıza her yerden güvenli erişim sağlayabilirsiniz.</p>',
                        'icon' => 'fas fa-receipt',
                        'order' => 4,
                    ],
                    [
                        'title' => 'E-Müstahsil Makbuzu',
                        'slug' => 'dia-e-mustahsil-makbuzu',
                        'short_description' => 'Otomatik hesaplama, hızlı gönderim ve daha birçok özelliği ile DİA E-Müstahsil Makbuzu yanınızda!',
                        'content' => '<p>DİA E-Müstahsil Makbuzu, tarım ve hayvancılık sektöründe müstahsil makbuzu düzenleme süreçlerini elektronik ortamda yönetmenizi sağlar.</p><p>Otomatik hesaplama, hızlı gönderim, toplu makbuz düzenleme ve GİB entegrasyonu ile müstahsil makbuzu süreçlerinizi hızlandırabilirsiniz.</p><p>Stok ve cari modülleri ile entegre çalışarak veri bütünlüğünü sağlar.</p>',
                        'icon' => 'fas fa-seedling',
                        'order' => 5,
                    ],
                    [
                        'title' => 'E-Mutabakat',
                        'slug' => 'dia-e-mutabakat',
                        'short_description' => 'Anlık kontrol, karşılaştırma, özel tasarım ve daha birçok özelliği ile DİA E-Mutabakat yanınızda!',
                        'content' => '<p>DİA E-Mutabakat, iş ortaklarınız ve müşterileriniz ile cari hesap mutabakatlarını elektronik ortamda hızlı ve güvenli şekilde yapmanızı sağlar.</p><p>Anlık bakiye kontrolü, otomatik karşılaştırma, özelleştirilmiş mutabakat tasarımları ve toplu gönderim özellikleri ile dönem sonu yoğunluğunuzu azaltabilirsiniz.</p><p>Dijital onay mekanizması sayesinde mutabakat süreçleri hızlanır ve kağıt israfı önlenir.</p>',
                        'icon' => 'fas fa-balance-scale',
                        'order' => 6,
                    ],
                    [
                        'title' => 'E-Banka',
                        'slug' => 'dia-e-banka',
                        'short_description' => 'DİA E-Banka ile şirketinizin tüm e-banka süreçlerini anlık olarak takip edin, muhasebe süreçlerinizi hızlandırın.',
                        'content' => '<p>DİA E-Banka, banka hesaplarınızdaki hareketleri otomatik olarak sisteme aktarmanızı ve muhasebe kayıtlarıyla eşleştirmenizi sağlar.</p><p>Anlık bakiye görüntüleme, otomatik virman, toplu ödeme ve hesap hareket raporları ile banka operasyonlarınızı merkezi olarak yönetebilirsiniz.</p><p>Manuel veri girişini ortadan kaldırarak hata riskini azaltır ve muhasebe süreçlerinizi önemli ölçüde hızlandırır.</p>',
                        'icon' => 'fas fa-university',
                        'order' => 7,
                    ],
                    [
                        'title' => 'E-Arşiv',
                        'slug' => 'dia-e-arsiv',
                        'short_description' => 'GİB entegrasyonu, sürekli destek, bulut teknolojisi ve daha birçok özelliği ile DİA E-Arşiv yanınızda!',
                        'content' => '<p>DİA E-Arşiv, e-fatura mükellefi olmayan müşterilerinize düzenlediğiniz faturaları elektronik ortamda arşivlemenizi ve göndermenizi sağlar.</p><p>GİB entegrasyonu, otomatik e-posta gönderimi, toplu fatura oluşturma ve dijital arşivleme özellikleri ile e-arşiv süreçlerinizi kolaylıkla yönetebilirsiniz.</p><p>Fiziksel arşiv ihtiyacını ortadan kaldırarak hem maliyet tasarrufu sağlar hem de belgelere anında erişim imkanı sunar.</p>',
                        'icon' => 'fas fa-archive',
                        'order' => 8,
                    ],
                ],
            ],

            // ───────────────────────────────────
            // 4) DİA E-Ticaret
            // ───────────────────────────────────
            [
                'title' => 'DİA E-Ticaret',
                'slug' => 'dia-e-ticaret',
                'short_description' => 'B2B, B2C ve Pazaryeri entegrasyonları ile e-ticaret süreçlerinizi tek platformda yönetin.',
                'content' => '<p>DİA E-Ticaret çözümleri, işletmenizin online satış kanallarını ERP sistemiyle entegre olarak yönetmenizi sağlar.</p><p>B2B (bayiler arası satış), B2C (son tüketiciye satış) ve Pazaryeri entegrasyonları ile tüm e-ticaret operasyonlarınızı tek bir merkezden kontrol edebilirsiniz.</p><p>Stok, fatura, kargo ve sipariş süreçleri otomatik senkronize edildiği için operasyonel yük azalır ve müşteri deneyimi iyileşir.</p>',
                'icon' => 'fas fa-shopping-bag',
                'cover_image' => null,
                'extra_description' => 'DİA E-Ticaret – E-Power altyapısı ile güçlü online satış.',
                'order' => 40,
                'children' => [
                    [
                        'title' => 'B2B',
                        'slug' => 'dia-b2b',
                        'short_description' => 'DİA E-Power ile tüm B2B süreçlerinizi bulut teknolojisi farkıyla ve modern yapıyla özgürce yönetin.',
                        'content' => '<p>DİA B2B çözümü, bayileriniz ve iş ortaklarınızla olan toptan satış süreçlerinizi dijital platformda yönetmenizi sağlar.</p><p>Bayi bazlı özel fiyatlandırma, sipariş yönetimi, stok görüntüleme, cari hesap takibi ve kampanya yönetimi gibi özellikler ile B2B operasyonlarınızı güçlendirebilirsiniz.</p><p>ERP entegrasyonu sayesinde tüm B2B işlemleri otomatik olarak muhasebe ve stok sistemine yansır.</p>',
                        'icon' => 'fas fa-building',
                        'order' => 1,
                    ],
                    [
                        'title' => 'B2C',
                        'slug' => 'dia-b2c',
                        'short_description' => 'DİA E-Power ile tüm B2C süreçlerinizi bulut teknolojisi farkıyla ve modern yapıyla özgürce yönetin.',
                        'content' => '<p>DİA B2C çözümü, son tüketiciye yönelik online satış mağazanızı oluşturmanızı ve yönetmenizi sağlar.</p><p>Ürün kataloğu yönetimi, online ödeme entegrasyonu, kargo takibi, müşteri hesap yönetimi ve kampanya araçları ile modern bir e-ticaret deneyimi sunabilirsiniz.</p><p>Responsive tasarımı sayesinde masaüstü, tablet ve mobil cihazlarda sorunsuz bir alışveriş deneyimi sağlar.</p>',
                        'icon' => 'fas fa-store',
                        'order' => 2,
                    ],
                    [
                        'title' => 'Pazaryeri Entegrasyonu',
                        'slug' => 'dia-pazaryeri',
                        'short_description' => 'DİA Pazaryeri Entegrasyonu ile, popüler pazaryerlerini bulut teknolojisi farkıyla tek ekrandan yönetin!',
                        'content' => '<p>DİA Pazaryeri Entegrasyonu, Trendyol, Hepsiburada, N11, Amazon ve diğer popüler pazaryerlerindeki satış operasyonlarınızı tek panelden yönetmenizi sağlar.</p><p>Ürün listeleme, fiyat güncelleme, sipariş yönetimi ve stok senkronizasyonu otomatik olarak gerçekleştirilir.</p><p>Çoklu pazaryeri desteği sayesinde satış kanallarınızı genişletebilir, tüm operasyonları merkezi olarak kontrol edebilirsiniz.</p>',
                        'icon' => 'fas fa-store-alt',
                        'order' => 3,
                    ],
                ],
            ],

        ];

        // ───────────────────────────────────
        // Veritabanına Ekle
        // ───────────────────────────────────
        foreach ($mainModules as $main) {
            $mainModule = Module::updateOrCreate(
                ['slug' => $main['slug']],
                [
                    'title' => $main['title'],
                    'short_description' => $main['short_description'],
                    'content' => $main['content'],
                    'category' => 'dia',
                    'icon' => $main['icon'],
                    'cover_image' => $main['cover_image'],
                    'extra_description' => $main['extra_description'],
                    'is_active' => 1,
                    'order' => $main['order'],
                    'parent_id' => null,
                ]
            );

            $this->command->info('✅ Ana modül hazırlandı: ' . $mainModule->title);

            foreach ($main['children'] as $child) {
                Module::updateOrCreate(
                    ['slug' => $child['slug']],
                    [
                        'title' => $child['title'],
                        'short_description' => $child['short_description'],
                        'content' => $child['content'],
                        'category' => 'dia',
                        'icon' => $child['icon'],
                        'cover_image' => null,
                        'is_active' => 1,
                        'order' => $child['order'],
                        'parent_id' => $mainModule->id,
                    ]
                );

                $this->command->info('   └─ Alt modül: ' . $child['title']);
            }
        }

        $this->command->info('');
        $this->command->info('🎉 DİA Yazılım modülleri başarıyla eklendi!');
    }
}
