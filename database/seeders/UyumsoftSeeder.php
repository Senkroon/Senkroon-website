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
                'content' => '<p>Girus Ticari; KOBİ ve ticari işletmelerin muhasebe, depo, satış ve satın alma süreçlerini bulut altyapıda yönetmesini sağlar.</p>',
                'icon' => 'fas fa-balance-scale',
                'cover_image' => 'porto/simages/uyumsoft.png',
                'extra_description' => 'Ticari operasyonlar için entegre yönetim çözümüdür.',
                'order' => 10,
                'children' => [
                    [
                        'title' => 'Muhasebe ve Finans',
                        'slug' => 'girus-ticari-muhasebe-finans',
                        'short_description' => 'Genel muhasebe, cari hesap ve finans işlemleri.',
                        'content' => '<p>Muhasebe kayıtları, banka hareketleri, cari hesaplar ve finansal raporlamayı Uyumsoft üzerinden yönetin.</p>',
                        'icon' => 'fas fa-calculator',
                        'order' => 1,
                    ],
                    [
                        'title' => 'Stok ve Depo',
                        'slug' => 'girus-ticari-stok-depo',
                        'short_description' => 'Stok takibi, envanter ve depo operasyonları.',
                        'content' => '<p>Stok seviyeleri, ürün hareketleri ve depo operasyonlarını gerçek zamanlı olarak takip edin.</p>',
                        'icon' => 'fas fa-warehouse',
                        'order' => 2,
                    ],
                ],
            ],
            [
                'title' => 'Girus CRM',
                'slug' => 'girus-crm',
                'short_description' => 'Müşteri ilişkileri, satış fırsatları ve teklif sürecini yönetin.',
                'content' => '<p>Girus CRM ile müşteri verilerini merkezileştirin, satış fırsatlarını takip edin ve ekip performansını artırın.</p>',
                'icon' => 'fas fa-users',
                'cover_image' => 'porto/simages/uyumsoft.png',
                'extra_description' => 'Müşteri odaklı satış ve ilişki yönetimi çözümüdür.',
                'order' => 20,
                'children' => [
                    [
                        'title' => 'Fırsat Yönetimi',
                        'slug' => 'girus-crm-firsat-yonetimi',
                        'short_description' => 'Satış fırsatlarını aşama bazlı yönetin.',
                        'content' => '<p>Lead, fırsat ve teklif süreçlerini Uyumsoft üzerinden takip ederek dönüşüm oranlarını iyileştirin.</p>',
                        'icon' => 'fas fa-funnel-dollar',
                        'order' => 1,
                    ],
                    [
                        'title' => 'Müşteri ve Aktivite Takibi',
                        'slug' => 'girus-crm-musteri-aktivite-takibi',
                        'short_description' => 'Arama, ziyaret ve görev takibini merkezileştirin.',
                        'content' => '<p>Müşteri görüşmeleri, görevler ve takım aktivitelerini tek platformda kaydederek süreklilik sağlayın.</p>',
                        'icon' => 'fas fa-address-book',
                        'order' => 2,
                    ],
                ],
            ],
            [
                'title' => 'Girus HR',
                'slug' => 'girus-hr',
                'short_description' => 'İK, personel ve izin süreçlerini dijital olarak yönetin.',
                'content' => '<p>Girus HR; personel kartları, izin yönetimi, organizasyon yapısı ve İK süreçlerinde hızlı ve kolay yönetim sunar.</p>',
                'icon' => 'fas fa-user-tie',
                'cover_image' => 'porto/simages/uyumsoft.png',
                'extra_description' => 'İK süreçlerini hızlandıran bulut tabanlı çözümdür.',
                'order' => 30,
                'children' => [
                    [
                        'title' => 'Personel ve Organizasyon',
                        'slug' => 'girus-hr-personel-organizasyon',
                        'short_description' => 'Personel kartları ve organizasyon yapısını yönetin.',
                        'content' => '<p>Personel bilgileri, departman yapısı ve görev dağılımlarını merkezi olarak yönetebilirsiniz.</p>',
                        'icon' => 'fas fa-sitemap',
                        'order' => 1,
                    ],
                    [
                        'title' => 'İzin ve Mesai Yönetimi',
                        'slug' => 'girus-hr-izin-mesai-yonetimi',
                        'short_description' => 'İzin, fazla mesai ve süreç onaylarını yönetin.',
                        'content' => '<p>İzin talepleri, onay akışları ve mesai kayıtlarını tek noktadan takip ederek İK operasyonunu kolaylaştırın.</p>',
                        'icon' => 'fas fa-clock',
                        'order' => 2,
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
