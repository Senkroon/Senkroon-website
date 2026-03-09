<?php
/**
 * @see https://github.com/artesaos/seotools
 */

return [
    'inertia' => env('SEO_TOOLS_INERTIA', false),
    'meta' => [
        /*
         * The default configurations to be used by the meta generator.
         */
        'defaults'       => [
            // Ana başlıkta hem özel yazılım hem de yüksek hacimli "ERP" kelimesi birleştirildi.
            'title'        => 'Senkroon Yazılım | Özel Yazılım & Kurumsal ERP Çözümleri',
            'titleBefore'  => false,
            // Açıklamaya "kurumsal kaynak planlama" ve "stok yönetimi" gibi yüksek hacimli terimler eklendi.
            'description'  => 'Malatya ve çevre illerdeki OSB fabrikaları için kurumsal kaynak planlama (ERP), üretim takip (MES), stok yönetimi ve özel yazılım geliştirme hizmetleri sunan yetkili danışmanlık firması.',
            'separator'    => ' | ', // SEO standartlarında daha net okunabilirlik sağlar.
            'keywords'     => [
                // 1. Yerel ve Niş (Dönüşüm Oranı Yüksek)
                'Malatya ERP yazılımı', 'Malatya Workcube bayisi', 'Organize sanayi bölgesi ERP çözümleri', 'Özel yazılım geliştirme Malatya',
                // 2. Yüksek Hacimli ve Jenerik (Trafik Çekici)
                'ERP programları', 'Kurumsal kaynak planlama', 'Stok takip programı', 'KOBİ ERP sistemleri',
                // 3. Sektörel ve Modüler
                'Üretim yönetim sistemi (MES)', 'Fabrika otomasyon sistemleri', 'Depo ve stok yönetim yazılımı'
            ],
            'canonical'    => 'current',
            'robots'       => 'index,follow',
        ],
        /*
         * Webmaster tags are always added.
         */
        'webmaster_tags' => [
            'google'    => null, // Google Search Console verification code
            'bing'      => null, // Bing Webmaster verification code
            'alexa'     => null,
            'pinterest' => null,
            'yandex'    => null,
            'norton'    => null,
        ],

        'add_notranslate_class' => false,
    ],
    'opengraph' => [
        /*
         * The default configurations to be used by the opengraph generator.
         */
        'defaults' => [
            // WhatsApp, LinkedIn vb. paylaşımlarda tıklama oranını artıracak iddialı başlık.
            'title'       => 'Senkroon Yazılım | OSB Fabrikaları İçin Özel Yazılım ve ERP Çözümleri',
            'description' => 'Malatya ve Doğu Anadolu bölgesindeki sanayi işletmeleri için dijital dönüşüm, Workcube ERP entegrasyonu ve ticari yazılım danışmanlığı hizmetleri.',
            'url'         => 'current',
            'type'        => 'website',
            'site_name'   => 'Senkroon Yazılım',
            'images'      => ['/images/Senkroon-logo.png'],
        ],
    ],
    'twitter' => [
        /*
         * The default values to be used by the twitter cards generator.
         */
        'defaults' => [
            'card'        => 'summary_large_image',
            'site'        => '@Senkroonyazilim',
            'creator'     => '@Senkroonyazilim',
            'title'       => 'Senkroon Yazılım - Workcube ERP Çözümleri',
            'description' => 'OSB fabrikaları için Workcube ERP yetkili bayisi. Üretim, stok ve finans yönetiminde profesyonel yazılım çözümleri.',
            'image'       => '/images/Senkroon-logo.png',
        ],
    ],
    'json-ld' => [
        /*
         * The default configurations to be used by the json-ld generator.
         */
        'defaults' => [
            'title'       => 'Senkroon Yazılım | Malatya Workcube ERP & OSB Yazılım Çözümleri',
            'description' => 'Malatya ve çevre illerdeki OSB fabrikaları için Workcube ERP entegrasyonu, üretim takip (MES) ve özel yazılım geliştirme hizmetleri.',
            'url'         => 'current',
            // KRİTİK DEĞİŞİKLİK: 'Organization' yerine 'LocalBusiness' yapıldı. Yerel SEO için şarttır.
            'type'        => 'LocalBusiness',
            'images'      => ['/images/Senkroon-logo.png'],
        ],
    ],
];
