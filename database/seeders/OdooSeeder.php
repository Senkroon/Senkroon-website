<?php

namespace Database\Seeders;

use App\Models\Module;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class OdooSeeder extends Seeder
{
    /**
     * Odoo modüllerini ekle.
     */
    public function run(): void
    {
        $mainModules = [
            [
                'title' => 'Web Sitesi',
                'slug' => 'odoo-web-sitesi',
                'short_description' => 'Web sitesi, e-ticaret ve dijital varlığınızı oluşturun ve yönetin.',
                'content' => '<p>Web sitesi, e-ticaret, blog, forum ve e-öğrenme gibi dijital çözümlerle çevrimiçi varlığınızı güçlendirin.</p>',
                'icon' => 'fas fa-globe',
                'order' => 10,
                'children' => [
                    [
                        'title' => 'Web Sitesi',
                        'short_description' => 'Kurumsal web sitesi oluşturucu',
                        'icon' => asset('images/modules/odoo/website.svg'),
                    ],
                    [
                        'title' => 'eTicaret',
                        'short_description' => 'Çevrim içi ürün satışı',
                        'icon' => asset('images/modules/odoo/e_ticaret.svg'),
                    ],
                    [
                        'title' => 'Blog',
                        'short_description' => 'Blog yazıları, duyurular, haberler yayımlayın',
                        'icon' => asset('images/modules/odoo/blog.svg'),
                    ],
                    [
                        'title' => 'Forum',
                        'short_description' => 'Sık Sorulan Sorular ve Soru-Cevap seçenekleri ile bir Forum yönetin',
                        'icon' => asset('images/modules/odoo/forum.svg'),
                    ],
                    [
                        'title' => 'eÖğrenme',
                        'short_description' => 'Kurslar tasarlayın ve yayımlayın',
                        'icon' => asset('images/modules/odoo/e_ogrenme.svg'),
                    ],
                    [
                        'title' => 'Canlı Sohbet',
                        'short_description' => 'Web sitenizi ziyaret edenlerle sohbet edin',
                        'icon' => asset('images/modules/odoo/canlı_sohbet.svg'),
                    ],
                ]
            ],
            [
                'title' => 'Satış',
                'slug' => 'odoo-satis',
                'short_description' => 'Müşteri ilişkileri, satış ve abonelik süreçlerinizi yönetin.',
                'content' => '<p>Müşteri adaylarını takip edin, teklifler oluşturun ve satışlarınızı tek bir platformdan yönetin.</p>',
                'icon' => 'fas fa-shopping-cart',
                'order' => 20,
                'children' => [
                    [
                        'title' => 'Müşteri İlişkileri Yönetimi',
                        'short_description' => 'Müşteri adaylarını takip edin ve fırsatları bağlayın',
                        'icon' => asset('images/modules/odoo/musteri_ilişkileri.svg'),
                    ],
                    [
                        'title' => 'Satış',
                        'short_description' => 'Teklifler ve faturaları yönetin',
                        'icon' => asset('images/modules/odoo/satış.svg'),
                    ],
                    [
                        'title' => 'Satış Noktası',
                        'short_description' => 'Mağaza ve restoranlar için Satış Noktası arayüzü',
                        'icon' => asset('images/modules/odoo/satış_noktası.svg'),
                    ],
                    [
                        'title' => 'Abonelikler',
                        'short_description' => 'Tekrarlayan faturalar ve yenilemeler',
                        'icon' => asset('images/modules/odoo/abonelikler.svg'),
                    ],
                    [
                        'title' => 'Kiralama',
                        'short_description' => 'Sözleşmeleri, teslimatları ve iadeleri yönetin',
                        'icon' => asset('images/modules/odoo/kiralama.svg'),
                    ],
                ]
            ],
            [
                'title' => 'Finans',
                'slug' => 'odoo-finans',
                'short_description' => 'Muhasebe, faturalama ve masraf süreçlerinizi kolaylaştırın.',
                'content' => '<p>Mali muhasebe, faturalama ve gider yönetimi operasyonlarınızı verimli bir şekilde yürütün.</p>',
                'icon' => 'fas fa-chart-line',
                'order' => 30,
                'children' => [
                    [
                        'title' => 'Muhasebe',
                        'short_description' => 'Mali ve analitik muhasebe yönetimi',
                        'icon' => asset('images/modules/odoo/muhasebe.svg'),
                    ],
                    [
                        'title' => 'Faturalama',
                        'short_description' => 'Faturalar ve Ödemeler',
                        'icon' => asset('images/modules/odoo/faturalama.svg'),
                    ],
                    [
                        'title' => 'Masraf Yönetimi',
                        'short_description' => 'Çalışan giderlerini yönetin',
                        'icon' => asset('images/modules/odoo/masraf_yonetimi.svg'),
                    ],
                    [
                        'title' => 'Belgeler',
                        'short_description' => 'Belge yönetimi',
                        'icon' => asset('images/modules/odoo/belgeler.svg'),
                    ],
                    [
                        'title' => 'Elektronik Çizelgeler',
                        'short_description' => 'Belgeler için elektronik çizelgeler',
                        'icon' => asset('images/modules/odoo/elektronik_çizelgeler.svg'),
                    ],
                    [
                        'title' => 'İmza',
                        'short_description' => 'Çevrim içi belge imzalama',
                        'icon' => asset('images/modules/odoo/imza.svg'),
                    ],
                ]
            ],
            [
                'title' => 'Envanter ve Üretim',
                'slug' => 'odoo-envanter-uretim',
                'short_description' => 'Stok, üretim ve satın alma işlemlerinizi optimize edin.',
                'content' => '<p>Lojistik, üretim planlama ve kalite kontrol süreçlerinizi tam entegre olarak kontrol altında tutun.</p>',
                'icon' => 'fas fa-industry',
                'order' => 40,
                'children' => [
                    [
                        'title' => 'Envanter',
                        'short_description' => 'Stok ve lojistik faaliyetlerinizi yönetin',
                        'icon' => asset('images/modules/odoo/envanter.svg'),
                    ],
                    [
                        'title' => 'Üretim',
                        'short_description' => 'Üretim Siparişleri ve Ürün Reçeteleri (BOMs)',
                        'icon' => asset('images/modules/odoo/üretim.svg'),
                    ],
                    [
                        'title' => 'PLM (Ürün Yaşam Döngüsü Yönetimi)',
                        'short_description' => 'Ürün Yaşam Döngüsü Yönetimi',
                        'icon' => asset('images/modules/odoo/pml.svg'),
                    ],
                    [
                        'title' => 'Satın Alma',
                        'short_description' => 'Satın alma emirleri, ihaleler ve sözleşmeler',
                        'icon' => asset('images/modules/odoo/satın_alma.svg'),
                    ],
                    [
                        'title' => 'Bakım',
                        'short_description' => 'Ekipman takibi ve talep yönetimi',
                        'icon' => asset('images/modules/odoo/bakım.svg'),
                    ],
                    [
                        'title' => 'Kalite',
                        'short_description' => 'Ürünleriniz için kalite kontrol',
                        'icon' => asset('images/modules/odoo/kalite.svg'),
                    ],
                ]
            ],
            [
                'title' => 'İnsan Kaynakları',
                'slug' => 'odoo-insan-kaynaklari',
                'short_description' => 'İşe alım, çalışan yönetimi ve izin süreçlerini otomatikleştirin.',
                'content' => '<p>Tüm personel, işe alım, değerlendirme ve filo yönetim operasyonlarınızı kolaylıkla yönetin.</p>',
                'icon' => 'fas fa-users',
                'order' => 50,
                'children' => [
                    [
                        'title' => 'Çalışanlar',
                        'short_description' => 'Çalışan bilgilerini tek bir yerde toplayın',
                        'icon' => asset('images/modules/odoo/calışanlar.svg'),
                    ],
                    [
                        'title' => 'İşe Alım',
                        'short_description' => 'İşe alım pipeline\'ınızı takip edin',
                        'icon' => asset('images/modules/odoo/işe_alım.svg'),
                    ],
                    [
                        'title' => 'İzin',
                        'short_description' => 'Çalışanların ücretli izinlerini belirleyin ve izin taleplerini takip edin',
                        'icon' => asset('images/modules/odoo/izin.svg'),
                    ],
                    [
                        'title' => 'Değerlendirme',
                        'short_description' => 'Çalışanlarınızı değerlendirin',
                        'icon' => asset('images/modules/odoo/değerlendirme.svg'),
                    ],
                    [
                        'title' => 'Referans',
                        'short_description' => 'İş ilanlarını paylaşın ve arkadaşlarınızı yönlendirin',
                        'icon' => asset('images/modules/odoo/referans.svg'),
                    ],
                    [
                        'title' => 'Filo Yönetimi',
                        'short_description' => 'Filonuzu yönetin ve araç maliyetlerini takip edin',
                        'icon' => asset('images/modules/odoo/filo_yonetimi.svg'),
                    ],
                ]
            ],
            [
                'title' => 'Pazarlama',
                'slug' => 'odoo-pazarlama',
                'short_description' => 'Pazarlama otomasyonu, e-posta ve sosyal medya kampanyalarınızı yönetin.',
                'content' => '<p>Pazarlama faaliyetlerinizi planlayın, otomatikleştirin ve müşteri etkileşimlerinizi artırın.</p>',
                'icon' => 'fas fa-bullhorn',
                'order' => 60,
                'children' => [
                    [
                        'title' => 'Pazarlama Otomasyonu',
                        'short_description' => 'Otomatik posta kampanyaları oluşturun',
                        'icon' => asset('images/modules/odoo/pazarlama_otomasyonu.svg'),
                    ],
                    [
                        'title' => 'E-posta ile Pazarlama',
                        'short_description' => 'E-postalarınızı tasarlayın, gönderin ve takip edin',
                        'icon' => asset('images/modules/odoo/e_posta.svg'),
                    ],
                    [
                        'title' => 'SMS ile Pazarlama',
                        'short_description' => 'SMSlerinizi tasarlayın, gönderin ve takip edin',
                        'icon' => asset('images/modules/odoo/sms_pazarlama.svg'),
                    ],
                    [
                        'title' => 'Sosyal Medyada Pazarlama',
                        'short_description' => 'Sosyal medya ve web sitesi ziyaretçilerinizi yönetin.',
                        'icon' => asset('images/modules/odoo/sosyal_meyda.svg'),
                    ],
                    [
                        'title' => 'Etkinlikler',
                        'short_description' => 'Etkinlikler yayımlayın, bilet satın',
                        'icon' => asset('images/modules/odoo/etkinlikler.svg'),
                    ],
                    [
                        'title' => 'Anket',
                        'short_description' => 'Anketlerinizi gönderin veya canlı olarak paylaşın',
                        'icon' => asset('images/modules/odoo/anket.svg'),
                    ],
                ]
            ],
            [
                'title' => 'Hizmetler',
                'slug' => 'odoo-hizmetler',
                'short_description' => 'Projelerinizi, yardım masasını ve randevularınızı düzenleyin.',
                'content' => '<p>Hizmet operasyonlarınızı, saha hizmetlerini ve müşteri destek süreçlerini yönetin.</p>',
                'icon' => 'fas fa-concierge-bell',
                'order' => 70,
                'children' => [
                    [
                        'title' => 'Proje Yönetimi',
                        'short_description' => 'Projelerinizi düzenleyin ve planlayın',
                        'icon' => asset('images/modules/odoo/proje_yonetimi.svg'),
                    ],
                    [
                        'title' => 'Çalışma Çizelgeleri',
                        'short_description' => 'Çalışanların görevlere ayırdığı zamanı takip edin',
                        'icon' => asset('images/modules/odoo/çalışma_çizelgesi.svg'),
                    ],
                    [
                        'title' => 'Saha Hizmeti',
                        'short_description' => 'Saha operasyonlarını, harcanan süre ve malzem planlayın ve takip edin',
                        'icon' => asset('images/modules/odoo/saha_hizmeti.svg'),
                    ],
                    [
                        'title' => 'Yardım Masası',
                        'short_description' => 'Müşteri biletlerini takip edin, öncelik sırasına koyun ve çözüme ulaştırın',
                        'icon' => asset('images/modules/odoo/yardım_masası.svg'),
                    ],
                    [
                        'title' => 'Planlama',
                        'short_description' => 'Çalışanlarınızın programını kolayca yönetin',
                        'icon' => asset('images/modules/odoo/planlama.svg'),
                    ],
                    [
                        'title' => 'Randevular',
                        'short_description' => 'Ajandanızda toplantı randevuları oluşturulmasına izin verin',
                        'icon' => asset('images/modules/odoo/randevular.svg'),
                    ],
                ]
            ],
            [
                'title' => 'Üretkenlik',
                'slug' => 'odoo-uretkenlik',
                'short_description' => 'İç iletişim, bilgi yönetimi ve onay süreçlerinizi iyileştirin.',
                'content' => '<p>Sohbet, bilgi bankası ve IoT çözümleri ile takımınızın üretkenliğini en üst düzeye çıkarın.</p>',
                'icon' => 'fas fa-bolt',
                'order' => 80,
                'children' => [
                    [
                        'title' => 'Sohbet',
                        'short_description' => 'Sohbet, e-posta geçidi ve özel kanallar',
                        'icon' => asset('images/modules/odoo/sohbet.svg'),
                    ],
                    [
                        'title' => 'Onay',
                        'short_description' => 'Onay talepleri oluşturun ve tasdik edin',
                        'icon' => asset('images/modules/odoo/onay.svg'),
                    ],
                    [
                        'title' => 'Nesnelerin İnterneti',
                        'short_description' => 'Nesnelerin İnternetini desteklemek için temel model ve yardımcılar',
                        'icon' => asset('images/modules/odoo/nesnelerin.svg'),
                    ],
                    [
                        'title' => 'VoIP',
                        'short_description' => 'Telefonla arayın ve aranın',
                        'icon' => asset('images/modules/odoo/voip.svg'),
                    ],
                    [
                        'title' => 'Bilgi Bankası',
                        'short_description' => 'Bilgi bankanızı yönetin',
                        'icon' => asset('images/modules/odoo/bilgi_bankası.svg'),
                    ],
                ]
            ],
            [
                'title' => 'Kişiselleştirme',
                'slug' => 'odoo-kisisellestirme',
                'short_description' => 'Uygulamalarınızı ihtiyaçlarınıza göre kişiselleştirin.',
                'content' => '<p>Odoo uygulamalarınızı oluşturun ve süreçlerinize en uygun şekilde uyarlayın.</p>',
                'icon' => 'fas fa-sliders-h',
                'order' => 90,
                'children' => [
                    [
                        'title' => 'Stüdyo',
                        'short_description' => 'Odoo uygulamalarınızı oluşturun ve kişiselleştirin',
                        'icon' => asset('images/modules/odoo/studio.svg'),
                    ],
                ]
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
                    'category' => 'odoo',
                    'icon' => $main['icon'],
                    'cover_image' => null,
                    'extra_description' => null,
                    'is_active' => 1,
                    'order' => $main['order'],
                    'parent_id' => null,
                ]
            );

            $this->command->info('✅ Ana modül hazırlandı: ' . $mainModule->title);

            foreach ($main['children'] as $index => $child) {
                Module::updateOrCreate(
                    ['slug' => Str::slug('odoo-' . $child['title'])],
                    [
                        'title' => $child['title'],
                        'short_description' => $child['short_description'],
                        'content' => '<p>' . $child['short_description'] . '</p>',
                        'category' => 'odoo',
                        'icon' => $child['icon'],
                        'cover_image' => null,
                        'is_active' => 1,
                        'order' => $index + 1,
                        'parent_id' => $mainModule->id,
                    ]
                );

                $this->command->info('   └─ Alt modül: ' . $child['title']);
            }
        }

        $this->command->info('');
        $this->command->info('🎉 Odoo modülleri başarıyla eklendi!');
    }
}
