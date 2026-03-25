<?php

namespace Database\Seeders;

use App\Models\Module;
use Illuminate\Database\Seeder;

class UyumsoftSeeder extends Seeder
{
    /**
     * Run the database seeder.
     */
    public function run(): void
    {
        $mainModules = [
            [
                'title' => 'Girus Ticari',
                'slug' => 'girus-ticari',
                'short_description' => 'Muhasebe, stok, satış ve satın alma süreçlerini tek merkezden yönetin.',
                'content' => '<p>Girus Ticari; KOBİ ve ticari işletmelerin muhasebe, depo, satış ve satın alma süreçlerini tek platform üzerinden yönetmesini sağlayan bulut tabanlı bir ticari yönetim çözümüdür.</p><p>Tekliften siparişe, siparişten sevkiyata ve sevkiyattan tahsilata kadar tüm adımlar birbiriyle entegre çalışır. Bu sayede veri tekrarının önüne geçilir, operasyonel hatalar azalır ve karar süreçleri hızlanır.</p><p>Anlık raporlama ekranları sayesinde nakit akışı, karlılık, stok durumu ve müşteri performansı gibi kritik göstergeleri kolayca izleyebilir; işletmenizin büyümesini güvenli şekilde yönetebilirsiniz.</p>',
                'icon' => 'fas fa-balance-scale',
                'cover_image' => 'porto/simages/uyumsoft.png',
                'extra_description' => 'Ticari operasyonlar için entegre yönetim çözümüdür.',
                'order' => 10,
                'children' => [
                    [
                        'title' => 'Muhasebe ve Finans',
                        'slug' => 'girus-ticari-muhasebe-finans',
                        'short_description' => 'Genel muhasebe, cari hesap ve finans işlemleri.',
                        'content' => '<p>Muhasebe ve finans modülü ile yevmiye kayıtları, banka hareketleri, cari hesap mutabakatları ve ödeme planlarını tek ekrandan yönetebilirsiniz.</p><p>Gelir-gider dengenizi anlık izleyerek nakit akışınızı daha doğru planlar, dönem sonu işlemlerinde zaman kaybını azaltırsınız.</p><p>Detaylı finansal raporlama yapısı sayesinde yönetim, muhasebe ve denetim ekipleri aynı veri seti üzerinden hızlıca analiz yapabilir.</p>',
                        'icon' => 'fas fa-calculator',
                        'order' => 1,
                    ],
                    [
                        'title' => 'Stok ve Depo',
                        'slug' => 'girus-ticari-stok-depo',
                        'short_description' => 'Stok takibi, envanter ve depo operasyonları.',
                        'content' => '<p>Stok ve depo modülü, ürün giriş-çıkış hareketlerini gerçek zamanlı takip ederek envanter doğruluğunu artırır.</p><p>Depolar arası transfer, kritik stok seviyesi uyarıları ve lot-bazlı takip gibi özelliklerle satın alma ve üretim planlamasını daha sağlıklı yapabilirsiniz.</p><p>Böylece hem fazla stok maliyetini düşürür hem de stok yetersizliği nedeniyle yaşanan sipariş gecikmelerini önlersiniz.</p>',
                        'icon' => 'fas fa-warehouse',
                        'order' => 2,
                    ],
                    [
                        'title' => 'Üretim',
                        'slug' => 'girus-ticari-uretim',
                        'short_description' => 'Üretim planlama, iş emri ve maliyet süreçlerini yönetin.',
                        'content' => '<p>Üretim modülü ile iş emirlerini planlayabilir, operasyon adımlarını takip edebilir ve üretim süreçlerini standartlaştırabilirsiniz.</p><p>Hammadde tüketimi, yarı mamul hareketleri ve üretim tamamlama kayıtları sistemde izlenebilir hale gelir.</p><p>Bu yapı, üretim maliyetlerinin doğru hesaplanmasını sağlar ve kapasite kullanımını iyileştirerek verimliliği artırır.</p>',
                        'icon' => 'fas fa-industry',
                        'order' => 3,
                    ],
                    [
                        'title' => 'E-Ticaret',
                        'slug' => 'girus-ticari-e-ticaret',
                        'short_description' => 'Pazaryeri ve web mağaza siparişlerinizi tek panelde toplayın.',
                        'content' => '<p>E-Ticaret modülü, web mağaza ve pazaryerlerinden gelen siparişleri tek bir panelde toplar.</p><p>Sipariş, stok, fatura ve kargo süreçleri otomatik olarak senkronize edildiği için manuel işlem yükü azalır.</p><p>Operasyon ekipleri daha hızlı çalışır, müşteriler ise daha doğru ve zamanında teslimat deneyimi yaşar.</p>',
                        'icon' => 'fas fa-shopping-bag',
                        'order' => 4,
                    ],
                    [
                        'title' => 'ÜTS (Ürün Takip Sistemi)',
                        'slug' => 'girus-ticari-uts-urun-takip-sistemi',
                        'short_description' => 'Ürünlerinizi mevzuata uygun şekilde uçtan uca izleyin.',
                        'content' => '<p>ÜTS modülü, ürünlerin sisteme kaydı, hareket takibi ve raporlanması gibi adımları mevzuata uygun şekilde dijital ortama taşır.</p><p>Ürün yaşam döngüsündeki kritik kayıtlar düzenli ve izlenebilir biçimde tutulur.</p><p>Bu sayede denetim süreçleri kolaylaşır, uyumluluk riskleri azalır ve operasyonlar daha güvenli ilerler.</p>',
                        'icon' => 'fas fa-barcode',
                        'order' => 5,
                    ],
                    [
                        'title' => 'İthalat',
                        'slug' => 'girus-ticari-ithalat',
                        'short_description' => 'İthalat operasyonlarını siparişten maliyetlendirmeye kadar takip edin.',
                        'content' => '<p>İthalat modülü ile tedarik siparişlerinden gümrük işlemlerine kadar tüm ithalat adımlarını tek süreçte izleyebilirsiniz.</p><p>Nakliye, sigorta, vergi ve diğer masrafları doğru kalemlere dağıtarak gerçek ürün maliyetini hesaplayabilirsiniz.</p><p>Bu görünürlük, fiyatlandırma ve karlılık kararlarını daha sağlıklı vermenize yardımcı olur.</p>',
                        'icon' => 'fas fa-ship',
                        'order' => 6,
                    ],
                    [
                        'title' => 'İhracat',
                        'slug' => 'girus-ticari-ihracat',
                        'short_description' => 'İhracat sipariş, evrak ve sevkiyat süreçlerini düzenli yönetin.',
                        'content' => '<p>İhracat modülü, dış ticaret süreçlerinde teklif, sipariş, teslimat ve evrak yönetimini merkezi hale getirir.</p><p>Müşteri talepleri ile sevkiyat planları arasında tutarlılık sağlanır, operasyonel gecikmeler azaltılır.</p><p>Böylece uluslararası ticarette süreç kontrolü artar ve müşteri memnuniyeti güçlenir.</p>',
                        'icon' => 'fas fa-globe-europe',
                        'order' => 7,
                    ],
                    [
                        'title' => 'KVKK',
                        'slug' => 'girus-ticari-kvkk',
                        'short_description' => 'Kişisel veri işleme süreçlerini KVKK uyumlu hale getirin.',
                        'content' => '<p>KVKK modülü, kişisel verilerin toplanması, işlenmesi, saklanması ve erişim yetkilendirmesi süreçlerini sistematik şekilde yönetmenizi sağlar.</p><p>Politika, onay ve kayıt adımları düzenli tutulduğu için denetim süreçleri kolaylaşır.</p><p>Kurumsal veri güvenliği yaklaşımınızı güçlendirerek yasal uyumluluğu sürdürülebilir hale getirir.</p>',
                        'icon' => 'fas fa-shield-alt',
                        'order' => 8,
                    ],
                    [
                        'title' => 'Mobil Uygulama',
                        'slug' => 'girus-ticari-mobil-uygulama',
                        'short_description' => 'Saha ve ofis ekiplerine her yerden erişim ve işlem kolaylığı sağlayın.',
                        'content' => '<p>Mobil uygulama modülü sayesinde saha satış, stok kontrol, cari hareket ve onay süreçlerine ofis dışından da erişebilirsiniz.</p><p>Gerçek zamanlı veri girişi ile ekipler aynı bilgi üzerinden çalışır, iletişim kopuklukları azalır.</p><p>Bu esneklik, özellikle saha operasyonlarında hız ve kontrol avantajı sağlar.</p>',
                        'icon' => 'fas fa-mobile-alt',
                        'order' => 9,
                    ],
                    [
                        'title' => 'Sabit Kıymet Yönetimi',
                        'slug' => 'girus-ticari-sabit-kiymet-yonetimi',
                        'short_description' => 'Demirbaş ve sabit kıymetlerinizi yaşam döngüsü boyunca yönetin.',
                        'content' => '<p>Sabit Kıymet Yönetimi modülü ile demirbaş ve varlıkların alım, zimmet, yer değişikliği ve amortisman süreçlerini düzenli takip edebilirsiniz.</p><p>Varlıkların güncel durumu ve mali etkileri raporlanabilir hale gelir.</p><p>Böylece hem denetim süreçleri kolaylaşır hem de kurumsal varlık yönetimi disiplinli bir yapıya kavuşur.</p>',
                        'icon' => 'fas fa-building',
                        'order' => 10,
                    ],
                    [
                        'title' => 'Periyodik Sözleşme Yönetimi',
                        'slug' => 'girus-ticari-periyodik-sozlesme-yonetimi',
                        'short_description' => 'Tekrarlayan sözleşme ve yenileme süreçlerini düzenli takip edin.',
                        'content' => '<p>Periyodik Sözleşme Yönetimi modülü, düzenli yenilenen hizmet, bakım ve abonelik sözleşmelerini tek ekranda toplar.</p><p>Başlangıç-bitiş tarihleri, yenileme dönemleri ve faturalama adımları otomatik hatırlatmalarla takip edilir.</p><p>Bu sayede sözleşme kaçırma riski azalır, gelir sürekliliği ve müşteri memnuniyeti artar.</p>',
                        'icon' => 'fas fa-file-contract',
                        'order' => 11,
                    ],
                ],
            ],
            [
                'title' => 'Girus CRM',
                'slug' => 'girus-crm',
                'short_description' => 'Müşteri ilişkileri, satış fırsatları ve teklif sürecini yönetin.',
                'content' => '<p>Girus CRM; müşteri, aday müşteri ve satış ekiplerine ait tüm bilgileri tek merkezde toplayan ilişki yönetimi çözümüdür.</p><p>Teklif, fırsat ve aktivite süreçlerinin görünür olması sayesinde satış ekipleri hedef odaklı çalışır.</p><p>Yönetim tarafında ise dönüşüm oranları, ekip performansı ve müşteri temas geçmişi ölçülebilir hale gelir.</p>',
                'icon' => 'fas fa-users',
                'cover_image' => 'porto/simages/uyumsoft.png',
                'extra_description' => 'Müşteri odaklı satış ve ilişki yönetimi çözümüdür.',
                'order' => 20,
                'children' => [
                    [
                        'title' => 'Fırsat Yönetimi',
                        'slug' => 'girus-crm-firsat-yonetimi',
                        'short_description' => 'Satış fırsatlarını aşama bazlı yönetin.',
                        'content' => '<p>Fırsat Yönetimi modülü ile potansiyel ve mevcut müşterilere ait fırsatları tek akışta takip edebilir, teklif ve belge süreçlerini merkezi olarak yönetebilirsiniz.</p><p>Her fırsata ait faaliyet geçmişi, sorumlu kişi, durum ve dönüşüm olasılığı sistemde izlenebilir olur.</p><p>Bu sayede satış ekipleri müşteri bazlı 360 derece görünürlük kazanır; yönetim ekibi ise fırsat performansını detaylı raporlarla analiz edebilir.</p>',
                        'icon' => 'fas fa-funnel-dollar',
                        'order' => 1,
                    ],
                    [
                        'title' => 'Kampanya Yönetimi',
                        'slug' => 'girus-crm-kampanya-yonetimi',
                        'short_description' => 'Hedef kitleye özel kampanya planı ve iletişimi yönetin.',
                        'content' => '<p>Kampanya Yönetimi modülü ile müşteri ve müşteri adaylarınızı kanal, ürün, bölge ve sektör kırılımlarında sınıflandırabilirsiniz.</p><p>Belirlenen segmentlere KVKK uyumlu toplu e-posta veya SMS kampanyaları kurgulayarak pazarlama etkinliğini artırabilirsiniz.</p><p>Kampanya geri dönüşleri ve performans sonuçları raporlanarak bir sonraki aksiyonlar için ölçülebilir bir pazarlama altyapısı oluşturulur.</p>',
                        'icon' => 'fas fa-bullhorn',
                        'order' => 2,
                    ],
                    [
                        'title' => 'Satış Süreç Yönetimi',
                        'slug' => 'girus-crm-satis-surec-yonetimi',
                        'short_description' => 'Tekliften siparişe satış adımlarını uçtan uca yönetin.',
                        'content' => '<p>Satış Süreç Yönetimi modülü, teklif, sipariş, fırsat ve geçmiş aktiviteleri tek sistemde bir araya getirerek satış akışını standartlaştırır.</p><p>Görev, randevu, arama ve e-posta gibi aktivite türleri planlanabilir; her adım müşteri kartı ile eşleştirilerek tam izlenebilirlik sağlanır.</p><p>Böylece satış ekipleri süreçlerin tamamına hakim olur, darboğazları erken tespit eder ve kapanış oranlarını artırır.</p>',
                        'icon' => 'fas fa-project-diagram',
                        'order' => 3,
                    ],
                    [
                        'title' => 'Yardım Masası Yönetimi',
                        'slug' => 'girus-crm-yardim-masasi-yonetimi',
                        'short_description' => 'Destek kayıtlarını öncelik bazlı takip ederek hizmet kalitesini yükseltin.',
                        'content' => '<p>Yardım Masası Yönetimi modülü ile müşteri taleplerini kayıt altına alabilir, kategori ve öncelik bazında ilgili ekiplere yönlendirebilirsiniz.</p><p>Sıkça sorulan sorular, bilgi bankası ve çözüm geçmişi sayesinde destek süreçleri hızlanır, tekrar eden talepler azalır.</p><p>Detaylı performans raporları ile ekip yoğunluğu, çözüm süreleri ve müşteri memnuniyeti ölçülebilir hale gelir.</p>',
                        'icon' => 'fas fa-headset',
                        'order' => 4,
                    ],
                    [
                        'title' => 'Rakip Analizi Yönetimi',
                        'slug' => 'girus-crm-rakip-analizi-yonetimi',
                        'short_description' => 'Rakip verilerini toplayın, fiyat ve bölge analizleri yapın.',
                        'content' => '<p>Rakip Analizi Yönetimi modülü ile rakip firmalara ait fiyat, kampanya, bölge ve ürün verilerini sistematik olarak kaydedebilirsiniz.</p><p>Toplanan veriler sayesinde satış ve pazarlama stratejileri için daha doğru konumlandırma kararları alınır.</p><p>Müşteri özelinde rekabet avantajı sağlayacak teklif ve kampanya modelleri veriye dayalı olarak geliştirilebilir.</p>',
                        'icon' => 'fas fa-chess',
                        'order' => 5,
                    ],
                    [
                        'title' => 'SLA Yönetimi',
                        'slug' => 'girus-crm-sla-yonetimi',
                        'short_description' => 'Servis seviyelerini tanımlayıp destek süreçlerini SLA ile yönetin.',
                        'content' => '<p>SLA Yönetimi modülü ile farklı müşteri grupları için servis seviye matrisleri tanımlayabilir, destek süreçlerini hedef sürelerle takip edebilirsiniz.</p><p>Talep kabul, yönlendirme ve çözüm adımları sistemde denetlenebilir şekilde ilerler.</p><p>Bu yapı, müşteri beklentilerinin karşılanmasını kolaylaştırır ve destek ekiplerinin performansını ölçülebilir hale getirir.</p>',
                        'icon' => 'fas fa-stopwatch',
                        'order' => 6,
                    ],
                    [
                        'title' => 'Girus MobilCRM',
                        'slug' => 'girus-crm-mobilcrm',
                        'short_description' => 'Saha ekipleri için fırsat, teklif ve aktivite yönetimini mobilleştirin.',
                        'content' => '<p>Girus MobilCRM ile saha ekipleri yeni müşteri adayı, fırsat, faaliyet ve teklif bilgilerini mobil cihazlardan anında sisteme girebilir.</p><p>Yönetim ekipleri eş zamanlı raporlara erişerek sahadaki performansı ve pipeline durumunu gerçek zamanlı izleyebilir.</p><p>Konum ve arama bilgisi gibi sahadan gelen verilerle faaliyet doğrulama ve operasyon takibi daha güvenilir hale gelir.</p>',
                        'icon' => 'fas fa-mobile-alt',
                        'order' => 7,
                    ],
                    [
                        'title' => 'Müşteri Aday Yönetimi',
                        'slug' => 'girus-crm-musteri-aday-yonetimi',
                        'short_description' => 'Aday müşteri kayıtlarını ve geçmiş etkileşimlerini yönetin.',
                        'content' => '<p>Müşteri Aday Yönetimi modülü, firma ya da bireysel aday kayıtlarını merkezi olarak tutar ve aday geçmişini görünür kılar.</p><p>Randevu, arama, e-posta, fırsat ve görev gibi tüm temas adımları aday kartı üzerinde izlenebilir.</p><p>Bu sayede satış ekipleri adayların olgunluk seviyesine göre doğru zamanda doğru aksiyon alabilir.</p>',
                        'icon' => 'fas fa-user-plus',
                        'order' => 8,
                    ],
                    [
                        'title' => 'Sözleşme Yönetimi',
                        'slug' => 'girus-crm-sozlesme-yonetimi',
                        'short_description' => 'Teklif sonrası sözleşme hazırlık ve takip adımlarını yönetin.',
                        'content' => '<p>Sözleşme Yönetimi modülü ile olumlu sonuçlanan tekliflerden sonra sözleşme oluşturma, sürüm takibi ve onay süreçlerini standartlaştırabilirsiniz.</p><p>Sözleşme maddeleri, geçerlilik tarihleri ve sorumlu taraflar sistemde kayıtlı kalır.</p><p>Böylece satıştan operasyona devir süreci hızlanır ve sözleşme kaynaklı riskler azaltılır.</p>',
                        'icon' => 'fas fa-file-signature',
                        'order' => 9,
                    ],
                    [
                        'title' => 'Entegrasyon Yönetimi',
                        'slug' => 'girus-crm-entegrasyon-yonetimi',
                        'short_description' => 'Outlook, Google Calendar, Slack ve iletişim kanallarıyla entegre çalışın.',
                        'content' => '<p>Entegrasyon Yönetimi modülü ile Outlook, Google Calendar ve Slack gibi araçlarla CRM süreçlerini eş zamanlı hale getirebilirsiniz.</p><p>E-posta, takvim etkinliği ve ekip bildirimlerinin CRM kayıtlarıyla birleşmesi operasyonel görünürlüğü artırır.</p><p>Ayrıca toplu iletişim entegrasyonları ile kampanya ve bilgilendirme süreçleri merkezi bir yapıda yönetilebilir.</p>',
                        'icon' => 'fas fa-plug',
                        'order' => 10,
                    ],
                    [
                        'title' => 'Dashboard ve Rapor Yönetimi',
                        'slug' => 'girus-crm-dashboard-rapor-yonetimi',
                        'short_description' => 'Fırsat, satış ve aktivite verilerini tek ekranda analiz edin.',
                        'content' => '<p>Dashboard ve Rapor Yönetimi modülü ile fırsat, satış ve aktivite metriklerini özelleştirilebilir panolarda anlık takip edebilirsiniz.</p><p>İhtiyaca uygun raporlar oluşturularak PDF ve Excel çıktılarıyla ekipler arası bilgi paylaşımı kolaylaştırılır.</p><p>Yöneticiler bu görünürlük sayesinde stratejik kararlarını daha hızlı ve veriye dayalı şekilde alabilir.</p>',
                        'icon' => 'fas fa-chart-pie',
                        'order' => 11,
                    ],
                    [
                        'title' => 'Sosyal CRM Yönetimi',
                        'slug' => 'girus-crm-sosyal-crm-yonetimi',
                        'short_description' => 'Sosyal medya etkileşimlerini CRM süreçleriyle birleştirin.',
                        'content' => '<p>Sosyal CRM Yönetimi modülü ile farklı sosyal medya hesaplarını tek ekrandan izleyebilir, mesaj ve etkileşimleri merkezi olarak yönetebilirsiniz.</p><p>Anahtar kelime takibi sayesinde marka hakkında yapılan paylaşımlar filtrelenir ve hızlı aksiyon alınır.</p><p>Böylece müşteri deneyimi güçlenir, marka algısı korunur ve sosyal kanallardan gelen fırsatlar satış sürecine dahil edilir.</p>',
                        'icon' => 'fas fa-hashtag',
                        'order' => 12,
                    ],
                    [
                        'title' => 'Müşteri ve Aktivite Takibi',
                        'slug' => 'girus-crm-musteri-aktivite-takibi',
                        'short_description' => 'Arama, ziyaret ve görev takibini merkezileştirin.',
                        'content' => '<p>Müşteri ve Aktivite Takibi modülü, telefon görüşmeleri, ziyaret notları, toplantılar ve görevleri tek zaman akışında toplar.</p><p>Satış ve müşteri temsilcileri arasında bilgi kopukluğu yaşanmaz, müşteri geçmişi herkes için erişilebilir olur.</p><p>Böylece ekip değişikliklerinde bile müşteri ilişkisi kesintisiz ve profesyonel şekilde sürdürülebilir.</p>',
                        'icon' => 'fas fa-address-book',
                        'order' => 13,
                    ],
                ],
            ],
            [
                'title' => 'Girus HR',
                'slug' => 'girus-hr',
                'short_description' => 'İK, personel ve izin süreçlerini dijital olarak yönetin.',
                'content' => '<p>Girus HR; insan kaynakları süreçlerini dijitalleştirerek personel yönetimini daha şeffaf, hızlı ve izlenebilir hale getirir.</p><p>Personel özlük bilgileri, izin süreçleri, organizasyon yapısı ve temel İK operasyonları merkezi olarak yönetilir.</p><p>Bu sayede manuel takip azalır, süreç standartları güçlenir ve İK ekibi stratejik konulara daha fazla odaklanabilir.</p>',
                'icon' => 'fas fa-user-tie',
                'cover_image' => 'porto/simages/uyumsoft.png',
                'extra_description' => 'İK süreçlerini hızlandıran bulut tabanlı çözümdür.',
                'order' => 30,
                'children' => [
                    [
                        'title' => 'Personel ve Organizasyon',
                        'slug' => 'girus-hr-personel-organizasyon',
                        'short_description' => 'Personel kartları ve organizasyon yapısını yönetin.',
                        'content' => '<p>Personel ve Organizasyon modülü ile çalışan kartları, unvanlar, departman yapıları ve raporlama ilişkileri güncel tutulur.</p><p>Kurumsal organizasyon şeması netleşir; görev, yetki ve sorumluluklar daha sağlıklı yönetilir.</p><p>İşe girişten departman değişikliğine kadar tüm temel hareketler kayıt altına alınarak kurumsal hafıza güçlendirilir.</p>',
                        'icon' => 'fas fa-sitemap',
                        'order' => 1,
                    ],
                    [
                        'title' => 'Özlük Uygulamaları',
                        'slug' => 'girus-hr-ozluk-uygulamalari',
                        'short_description' => 'Çalışan özlük bilgilerini güvenli ve düzenli yönetin.',
                        'content' => '<p>Özlük Uygulamaları modülü, personel özlük dosyalarının tek merkezde güncel, düzenli ve güvenli şekilde tutulmasını sağlar.</p><p>Kimlik, iletişim, sözleşme, görev ve yan hak bilgileri standart bir yapıda yönetilir.</p><p>Bu sayede İK operasyonlarında belge erişimi hızlanır, veri tutarlılığı artar ve denetim süreçleri kolaylaşır.</p>',
                        'icon' => 'fas fa-id-card',
                        'order' => 2,
                    ],
                    [
                        'title' => 'Bordro Uygulamaları',
                        'slug' => 'girus-hr-bordro-uygulamalari',
                        'short_description' => 'Bordro süreçlerini hızlı, doğru ve sürdürülebilir yönetin.',
                        'content' => '<p>Bordro Uygulamaları modülü ile puantaj, kesinti, ek ödeme ve yasal yükümlülük hesaplamaları sistematik şekilde yürütülür.</p><p>Hatalı hesaplama riskini azaltan yapı sayesinde bordro hazırlama süresi kısalır.</p><p>İK ve finans ekipleri için daha şeffaf, izlenebilir ve güvenilir bir bordro yönetimi sağlanır.</p>',
                        'icon' => 'fas fa-file-invoice-dollar',
                        'order' => 3,
                    ],
                    [
                        'title' => 'İzin ve Mesai Yönetimi',
                        'slug' => 'girus-hr-izin-mesai-yonetimi',
                        'short_description' => 'İzin, fazla mesai ve süreç onaylarını yönetin.',
                        'content' => '<p>İzin ve Mesai Yönetimi modülü, çalışan izin taleplerinin onay süreçlerini dijitalleştirir ve fazla mesai kayıtlarını düzenli hale getirir.</p><p>Yöneticiler anlık onay verebilir, İK ekipleri ise güncel izin ve mesai durumunu tek ekranda izleyebilir.</p><p>Böylece bordro hazırlığı hızlanır, süreç hataları azalır ve çalışan deneyimi iyileşir.</p>',
                        'icon' => 'fas fa-clock',
                        'order' => 4,
                    ],
                    [
                        'title' => 'Ölçme ve Değerlendirme',
                        'slug' => 'girus-hr-olcme-degerlendirme',
                        'short_description' => 'Çalışan performansını objektif kriterlerle değerlendirin.',
                        'content' => '<p>Ölçme ve Değerlendirme modülü, çalışan performansını hedef, yetkinlik ve dönemsel kriterler üzerinden değerlendirme imkanı sunar.</p><p>Yöneticiler, ekip performansını karşılaştırmalı raporlarla analiz ederek gelişim alanlarını net şekilde belirleyebilir.</p><p>Bu yaklaşım, performans kültürünü güçlendirir ve kurum genelinde verimlilik artışına katkı sağlar.</p>',
                        'icon' => 'fas fa-chart-line',
                        'order' => 5,
                    ],
                    [
                        'title' => 'Eğitim Yönetimi',
                        'slug' => 'girus-hr-egitim-yonetimi',
                        'short_description' => 'Çalışan eğitim planlarını ve gelişim süreçlerini yönetin.',
                        'content' => '<p>Eğitim Yönetimi modülü ile kurum içi ve dışı eğitim planlarını organize edebilir, katılım ve başarı durumlarını takip edebilirsiniz.</p><p>Pozisyona ve yetkinliğe göre eğitim ihtiyaçları belirlenerek gelişim yol haritaları oluşturulur.</p><p>Böylece çalışan gelişimi sürdürülebilir hale gelir ve kurumsal yetenek havuzu güçlenir.</p>',
                        'icon' => 'fas fa-graduation-cap',
                        'order' => 6,
                    ],
                    [
                        'title' => 'İş Sağlığı ve Güvenliği',
                        'slug' => 'girus-hr-is-sagligi-guvenligi',
                        'short_description' => 'İSG süreçlerini izleyerek güvenli çalışma ortamı oluşturun.',
                        'content' => '<p>İş Sağlığı ve Güvenliği modülü, risk takibi, önleyici aksiyonlar ve yasal gerekliliklerin düzenli yönetimini destekler.</p><p>İSG kayıtları merkezi biçimde tutulduğu için denetim ve raporlama süreçleri hızlanır.</p><p>Bu sayede iş kazası riskleri azaltılır ve çalışan güvenliği standartları kurumsal düzeyde yükseltilir.</p>',
                        'icon' => 'fas fa-hard-hat',
                        'order' => 7,
                    ],
                    [
                        'title' => 'İş Kazaları Yönetimi',
                        'slug' => 'girus-hr-is-kazalari-yonetimi',
                        'short_description' => 'İş kazası kayıt ve aksiyon süreçlerini sistemli yönetin.',
                        'content' => '<p>İş Kazaları Yönetimi modülü, yaşanan olayların kayıt altına alınması, kök neden analizi ve takip aksiyonlarının yönetimini kolaylaştırır.</p><p>Kaza türleri, etki düzeyi ve alınan önlemler raporlanarak sürekli iyileştirme kültürü desteklenir.</p><p>Böylece benzer olayların tekrar etme olasılığı düşürülür ve güvenlik farkındalığı artırılır.</p>',
                        'icon' => 'fas fa-first-aid',
                        'order' => 8,
                    ],
                    [
                        'title' => 'Ödül ve Cezalar',
                        'slug' => 'girus-hr-odul-cezalar',
                        'short_description' => 'Performans ve disiplin uygulamalarını dengeli yönetin.',
                        'content' => '<p>Ödül ve Cezalar modülü, çalışan motivasyonunu destekleyen ödül süreçleri ile disiplin uygulamalarını aynı sistemde yönetir.</p><p>Karar süreçlerinin kayıtlı ve şeffaf olması, kurum içi adalet algısını güçlendirir.</p><p>Yöneticiler, performans odaklı kültürü daha tutarlı politikalarla sürdürebilir.</p>',
                        'icon' => 'fas fa-award',
                        'order' => 9,
                    ],
                    [
                        'title' => 'Seyahat Yönetimi',
                        'slug' => 'girus-hr-seyahat-yonetimi',
                        'short_description' => 'İş seyahati planlama ve maliyet süreçlerini yönetin.',
                        'content' => '<p>Seyahat Yönetimi modülü, iş amaçlı seyahat taleplerinin planlanması, onaylanması ve gider takibinin düzenli yürütülmesini sağlar.</p><p>Konaklama, ulaşım ve harcırah süreçleri standartlaştırılarak maliyet kontrolü artırılır.</p><p>Bu yapı, hem operasyonel düzeni hem de bütçe disiplinini güçlendirir.</p>',
                        'icon' => 'fas fa-plane',
                        'order' => 10,
                    ],
                    [
                        'title' => 'Malzeme Dağıtımı',
                        'slug' => 'girus-hr-malzeme-dagitimi',
                        'short_description' => 'Personel zimmet ve malzeme dağıtım süreçlerini izleyin.',
                        'content' => '<p>Malzeme Dağıtımı modülü, çalışanlara teslim edilen ekipman ve sarf malzemelerin zimmet süreçlerini kayıt altına alır.</p><p>Teslim, iade ve kullanım bilgileri takip edilerek kayıp ve yanlış kullanım riskleri azaltılır.</p><p>Böylece kaynak yönetimi daha verimli hale gelir ve operasyonel kontrol artar.</p>',
                        'icon' => 'fas fa-boxes',
                        'order' => 11,
                    ],
                    [
                        'title' => 'Seçme ve Yerleştirme',
                        'slug' => 'girus-hr-secme-yerlestirme',
                        'short_description' => 'İşe alım süreçlerinde doğru adayları hızlıca yönetin.',
                        'content' => '<p>Seçme ve Yerleştirme modülü, pozisyon ihtiyacından aday değerlendirmesine kadar tüm işe alım adımlarını tek akışta yönetmenizi sağlar.</p><p>Aday havuzu, mülakat notları ve değerlendirme kriterleri merkezi tutulduğu için karar süreçleri hızlanır.</p><p>İşletmenizin ihtiyaçlarına en uygun yetenekleri daha doğru ve veriye dayalı şekilde işe alabilirsiniz.</p>',
                        'icon' => 'fas fa-user-check',
                        'order' => 12,
                    ],
                ],
            ],
        ];

        foreach ($mainModules as $main) {
            $mainModule = Module::updateOrCreate(
                ['slug' => $main['slug']],
                [
                    'title' => $main['title'],
                    'short_description' => $main['short_description'],
                    'content' => $main['content'],
                    'category' => 'uyumsoft',
                    'icon' => $main['icon'],
                    'cover_image' => $main['cover_image'],
                    'extra_description' => $main['extra_description'],
                    'is_active' => 1,
                    'order' => $main['order'],
                    'parent_id' => null,
                ]
            );

            $this->command->info('Ana modül hazırlandı: ' . $mainModule->title);

            foreach ($main['children'] as $child) {
                Module::updateOrCreate(
                    ['slug' => $child['slug']],
                    [
                        'title' => $child['title'],
                        'short_description' => $child['short_description'],
                        'content' => $child['content'],
                        'category' => 'uyumsoft',
                        'icon' => $child['icon'],
                        'cover_image' => null,
                        'is_active' => 1,
                        'order' => $child['order'],
                        'parent_id' => $mainModule->id,
                    ]
                );

                $this->command->info('Alt modül hazırlandı: ' . $child['title']);
            }
        }
    }
}
