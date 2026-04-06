<?php

namespace App\Http\Controllers;

use Artesaos\SEOTools\Facades\SEOTools;

class ServiceController extends Controller
{
    /**
     * Statik hizmet verileri
     */
    private function getServices(): array
    {
        return [
            'erp-satis-lisanslama' => [
                'title' => 'ERP Satış & Lisanslama',
                'icon' => 'fas fa-cogs',
                'image' => 'images/services/6.png',
                'short' => 'İşletmenize en uygun ERP çözümünü belirliyor, lisanslama sürecini uçtan uca yönetiyoruz.',
                'description' => '
                    <h3>ERP Satış & Lisanslama Hizmeti</h3>
                    <p class="text-white">Senkroon Yazılım olarak, işletmenizin büyüklüğüne, sektörüne ve operasyonel ihtiyaçlarına en uygun ERP çözümünü belirlemenizde yanınızdayız. Workcube ve Uyumsoft gibi güçlü ERP platformlarının yetkili bayisi olarak, size en doğru lisanslama modelini sunuyoruz.</p>

                    <h4>Hizmet Kapsamımız</h4>
                    <ul>
                        <li><strong>İhtiyaç Analizi:</strong> İşletmenizin mevcut süreçlerini detaylı şekilde analiz ederek, hangi modüllerin ve lisans türlerinin sizin için en uygun olduğunu belirliyoruz.</li>
                        <li><strong>Çözüm Önerisi:</strong> Bütçenize ve ölçeğinize uygun ERP paketini, modül kombinasyonlarını ve kullanıcı lisans sayılarını önererek, gereksiz maliyetlerden kaçınmanızı sağlıyoruz.</li>
                        <li><strong>Lisans Yönetimi:</strong> Lisanslarınızın satın alınması, aktivasyonu, yenilenmesi ve genişletilmesi süreçlerini tek noktadan yönetiyoruz.</li>
                        <li><strong>Fiyatlandırma Şeffaflığı:</strong> Sürpriz maliyet içermeyen, net ve anlaşılır fiyatlandırma modelleri sunuyoruz.</li>
                        <li><strong>Sözleşme Danışmanlığı:</strong> Lisans sözleşmelerinin hukuki ve teknik detaylarını sizin adınıza inceliyoruz.</li>
                    </ul>

                    <h4>Neden Senkroon ile ERP Satın Almalısınız?</h4>
                    <p class="text-white">Bir ERP yatırımı, yalnızca yazılım satın almak değildir. Doğru çözümü, doğru fiyatla, doğru zamanda seçmek; işletmenizin geleceğine yapılan stratejik bir yatırımdır. Senkroon olarak sadece bir satıcı değil, dijital dönüşüm yolculuğunuzdaki stratejik ortağınızız.</p>
                    <p class="text-white">Üstelik satış sonrasında da kurulum, eğitim ve teknik destek hizmetlerimizle yanınızda olmaya devam ediyoruz.</p>
                ',
            ],
            'kurulum-konfigurasyon' => [
                'title' => 'Kurulum & Konfigürasyon',
                'icon' => 'fas fa-desktop',
                'image' => 'images/services/urun_conf.png',
                'short' => 'ERP sisteminizi işletmenize özel yapılandırıyor, sorunsuz bir geçiş süreci sağlıyoruz.',
                'description' => '
                    <h3>Kurulum & Konfigürasyon Hizmeti</h3>
                    <p class="text-white">ERP yazılımının satın alınması, sürecin yalnızca başlangıcıdır. Asıl değer, sistemin işletmenizin iş akışlarına, organizasyon yapısına ve raporlama ihtiyaçlarına göre doğru şekilde kurulması ve yapılandırılmasında ortaya çıkar.</p>

                    <h4>Kurulum Sürecimiz</h4>
                    <ul>
                        <li><strong>Sunucu & Altyapı Hazırlığı:</strong> Sisteminizin performanslı çalışması için gerekli sunucu, ağ ve güvenlik altyapısını hazırlıyoruz.</li>
                        <li><strong>Modül Aktivasyonu:</strong> İhtiyaç duyduğunuz modülleri aktifleştiriyor ve birbirleriyle entegre çalışacak şekilde yapılandırıyoruz.</li>
                        <li><strong>İş Süreçleri Konfigürasyonu:</strong> Satış, satın alma, stok, üretim, finans ve insan kaynakları süreçlerinizi sisteme tanımlıyor ve iş akışlarınızı modelliyoruz.</li>
                        <li><strong>Kullanıcı Yetkilendirme:</strong> Departman bazlı kullanıcı rolleri ve erişim yetkilerini tanımlayarak, veri güvenliğinizi sağlıyoruz.</li>
                        <li><strong>Özel Ekran & Rapor Tasarımı:</strong> İşletmenize özel ekranlar, dashboardlar ve yönetim raporları tasarlıyoruz.</li>
                        <li><strong>Entegrasyon:</strong> E-Fatura, e-Defter, banka entegrasyonları ve üçüncü parti sistemlerle bağlantıları kuruyoruz.</li>
                    </ul>

                    <h4>Sorunsuz Geçiş Garantisi</h4>
                    <p class="text-white">Kurulum sürecimiz, canlı ortama geçiş öncesinde kapsamlı test aşamalarını içerir. Pilot uygulama, kullanıcı kabul testleri ve paralel çalışma dönemleriyle, sisteminizin sorunsuz devreye alınmasını garantiliyoruz.</p>
                ',
            ],
            'egitim-sertifikasyon' => [
                'title' => 'Eğitim & Sertifikasyon',
                'icon' => 'fas fa-graduation-cap',
                'image' => 'images/services/2.png',
                'short' => 'Ekiplerinizin ERP sistemini etkin kullanabilmesi için kapsamlı eğitim programları sunuyoruz.',
                'description' => '
                    <h3>Eğitim & Sertifikasyon Hizmeti</h3>
                    <p class= "text-light">Bir ERP sisteminin başarısı, onu kullanan ekiplerin yetkinliğiyle doğru orantılıdır. Senkroon Yazılım olarak, kullanıcılarınızın sistemi en verimli şekilde kullanabilmeleri için kapsamlı ve uygulamalı eğitim programları sunuyoruz.</p>

                    <h4>Eğitim Programlarımız</h4>
                    <ul>
                        <li><strong>Temel Kullanıcı Eğitimi:</strong> ERP sisteminin genel yapısı, menü kullanımı, veri girişi ve temel işlemler hakkında uygulamalı eğitim veriyoruz.</li>
                        <li><strong>Modül Bazlı Uzmanlaşma:</strong> Satış, satın alma, stok, üretim, finans, CRM gibi her modül için departman çalışanlarına özel derinlemesine eğitimler düzenliyoruz.</li>
                        <li><strong>Yönetici Eğitimi:</strong> Dashboard kullanımı, raporlama araçları ve karar destek sistemleri konusunda üst yönetime özel eğitimler sunuyoruz.</li>
                        <li><strong>Sistem Yöneticisi Eğitimi:</strong> IT ekibinize yönelik sistem yönetimi, kullanıcı yetkilendirme, yedekleme ve güvenlik konularında teknik eğitimler veriyoruz.</li>
                        <li><strong>Yeni Personel Oryantasyonu:</strong> İşe yeni başlayan çalışanlarınız için hızlandırılmış ERP eğitim paketleri sunuyoruz.</li>
                    </ul>

                    <h4>Eğitim Yöntemlerimiz</h4>
                    <p class="text-light">Eğitimlerimizi yerinde (on-site), uzaktan (online) veya hibrit modelde sunabiliyoruz. Her eğitim sonunda katılımcılara sertifika veriliyor ve eğitim materyalleri paylaşılıyor. Böylece ekipleriniz her an referans kaynaklarına erişebiliyor.</p>
                ',
            ],
            'teknik-destek' => [
                'title' => 'Teknik Destek',
                'icon' => 'fas fa-headset',
                'image' => 'images/services/3.png',
                'short' => 'ERP sisteminizin kesintisiz çalışması için 7/24 teknik destek hizmeti sağlıyoruz.',
                'description' => '
                    <h3>Teknik Destek Hizmeti</h3>
                    <p class="text-white">ERP sisteminizin kesintisiz ve verimli çalışması, işletme operasyonlarınızın sürekliliği için kritiktir. Senkroon Yazılım olarak, uzman teknik destek ekibimizle her an yanınızdayız.</p>

                    <h4>Destek Kanallarımız</h4>
                    <ul>
                        <li><strong>Telefon Desteği:</strong> Acil durumlar için doğrudan teknik uzmanlarımıza ulaşabilirsiniz.</li>
                        <li><strong>Uzak Bağlantı:</strong> Sorunlarınızı uzaktan erişim ile hızla tespit edip çözüyoruz.</li>
                        <li><strong>Yerinde Destek:</strong> Gerektiğinde teknik ekibimiz işletmenize gelerek yerinde müdahale ediyor.</li>
                        <li><strong>E-posta & Ticket Sistemi:</strong> Taleplerinizi kayıt altına alıyor ve öncelik sırasına göre çözüme kavuşturuyoruz.</li>
                    </ul>

                    <h4>Destek Kapsamımız</h4>
                    <ul>
                        <li>Sistem hataları ve performans sorunlarının giderilmesi</li>
                        <li>Kullanıcı sorunlarının çözümü ve rehberlik</li>
                        <li>Güncelleme ve yama yönetimi</li>
                        <li>Yedekleme ve veri kurtarma</li>
                        <li>Güvenlik denetimleri ve iyileştirmeleri</li>
                        <li>Entegrasyon sorunlarının çözümü</li>
                    </ul>

                    <h4>Proaktif Yaklaşım</h4>
                    <p class="text-white">Sadece sorun oluştuğunda değil, sorun oluşmadan önce müdahale ediyoruz. Düzenli sistem sağlık kontrolleri, performans izleme ve önleyici bakım hizmetlerimizle, sisteminizin her zaman en iyi durumda olmasını sağlıyoruz.</p>
                ',
            ],
            'ozel-yazilim-cozumu' => [
                'title' => 'Özel Yazılım Çözümü',
                'icon' => 'fas fa-lightbulb',
                'image' => 'images/services/1.png',
                'short' => 'İşletmenize özel web, mobil ve masaüstü yazılım çözümleri geliştiriyoruz.',
                'description' => '
                    <h3>Özel Yazılım Çözümü</h3>
                    <p class="text-white">Standart yazılımların karşılayamadığı ihtiyaçlarınız için, tamamen işletmenize özel yazılım çözümleri geliştiriyoruz. Web tabanlı uygulamalar, mobil uygulamalar ve masaüstü yazılımlar ile iş süreçlerinizi dijitalleştiriyoruz.</p>

                    <h4>Geliştirme Alanlarımız</h4>
                    <ul>
                        <li><strong>Web Uygulamaları:</strong> Modern teknolojiler ile ölçeklenebilir, güvenli ve kullanıcı dostu web uygulamaları geliştiriyoruz.</li>
                        <li><strong>Mobil Uygulamalar:</strong> iOS ve Android platformları için native ve cross-platform mobil uygulamalar tasarlıyoruz.</li>
                        <li><strong>API Entegrasyonları:</strong> Farklı sistemlerinizi birbirine bağlayan API katmanları ve entegrasyon çözümleri geliştiriyoruz.</li>
                        <li><strong>Otomasyon Çözümleri:</strong> Tekrarlayan iş süreçlerinizi otomatikleştiren yazılımlar geliştiriyoruz.</li>
                        <li><strong>Raporlama & Dashboard:</strong> Verilerinizi anlamlı bilgiye dönüştüren özel raporlama ve dashboard çözümleri sunuyoruz.</li>
                    </ul>

                    <h4>Geliştirme Sürecimiz</h4>
                    <p class="text-white">Agile metodoloji ile projelerinizi yönetiyoruz. İhtiyaç analizi, prototipleme, geliştirme, test ve canlıya alma aşamalarını şeffaf bir süreçle yürütüyoruz. Her sprint sonunda çalışan bir ürün teslim ederek, projenizin ilerleyişini sürekli takip edebilmenizi sağlıyoruz.</p>
                    <p class="text-white">Proje tamamlandıktan sonra da bakım, güncelleme ve destek hizmetlerimizle yanınızda olmaya devam ediyoruz.</p>
                ',
            ],
            'veri-migrasyon-hizmeti' => [
                'title' => 'Veri Migrasyon Hizmeti',
                'icon' => 'fas fa-cloud-upload-alt',
                'image' => 'images/services/5.png',
                'short' => 'Mevcut sistemlerinizdeki verileri güvenli ve eksiksiz şekilde yeni ERP\'nize aktarıyoruz.',
                'description' => '
                    <h3>Veri Migrasyon Hizmeti</h3>
                    <p class="text-white">Yeni bir ERP sistemine geçiş yaparken en kritik adımlardan biri, mevcut verilerinizin güvenli, doğru ve eksiksiz şekilde yeni sisteme aktarılmasıdır. Senkroon Yazılım olarak, veri migrasyonu sürecini uçtan uca yönetiyoruz.</p>

                    <h4>Migrasyon Sürecimiz</h4>
                    <ul>
                        <li><strong>Veri Envanteri:</strong> Mevcut sistemlerinizden aktarılacak verilerin kapsamını ve hacmini belirliyoruz.</li>
                        <li><strong>Veri Temizleme:</strong> Duplike, eksik ve hatalı verileri tespit ederek temizliyoruz. Tutarsız formatları standartlaştırıyoruz.</li>
                        <li><strong>Eşleştirme (Mapping):</strong> Eski sistemdeki veri alanlarını yeni ERP sistemindeki karşılıklarıyla eşleştiriyoruz.</li>
                        <li><strong>Test Migrasyonu:</strong> Gerçek verilerinizle test ortamında deneme aktarımları yaparak, olası sorunları önceden tespit ediyoruz.</li>
                        <li><strong>Canlı Migrasyon:</strong> Onaylanan test sonuçlarından sonra canlı sisteme güvenli aktarımı gerçekleştiriyoruz.</li>
                        <li><strong>Doğrulama:</strong> Aktarılan verilerin doğruluğunu ve bütünlüğünü kontrol ediyoruz.</li>
                    </ul>

                    <h4>Desteklediğimiz Kaynaklar</h4>
                    <p class="text-white">Excel, Access, eski ERP sistemleri, muhasebe programları, CRM yazılımları ve diğer veri tabanlarından migrasyon yapabiliyoruz. Hangi sistemden gelirseniz gelin, verilerinizi güvenle yeni ortamınıza taşıyoruz.</p>
                    <p class="text-white">Migrasyon sürecinde veri güvenliği en yüksek önceliğimizdir. Tüm aktarım işlemleri şifreli bağlantılar üzerinden gerçekleştirilir ve yedekleme protokolleri uygulanır.</p>
                ',
            ],
        ];
    }

    public function show(string $slug)
    {
        $services = $this->getServices();

        if (!isset($services[$slug])) {
            abort(404);
        }

        $service = $services[$slug];
        $service['slug'] = $slug;

        // Diğer hizmetleri sidebar için gönder
        $allServices = collect($services)->map(function ($s, $key) {
            return [
                'title' => $s['title'],
                'icon' => $s['icon'],
                'slug' => $key,
            ];
        })->values()->all();

        SEOTools::setTitle($service['title'] . ' | Senkroon Yazılım Hizmetleri');
        SEOTools::setDescription($service['short']);
        SEOTools::metatags()->addMeta('robots', 'index,follow');
        SEOTools::metatags()->addMeta('author', 'Senkroon Yazılım');
        SEOTools::opengraph()->setUrl(url()->current());
        SEOTools::setCanonical(url()->current());
        SEOTools::opengraph()->addProperty('type', 'website');
        SEOTools::opengraph()->addProperty('site_name', 'Senkroon Yazılım');
        SEOTools::opengraph()->addProperty('locale', 'tr_TR');
        SEOTools::opengraph()->addImage(asset($service['image']));

        return view('services.show', compact('service', 'allServices'));
    }
}
