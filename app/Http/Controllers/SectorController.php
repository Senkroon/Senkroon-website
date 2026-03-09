<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sector;
use Artesaos\SEOTools\Facades\SEOTools;

class SectorController extends Controller
{
    public function index()
    {
        // Başlık ve açıklama sanayi/üretim odaklı hale getirildi
        SEOTools::setTitle('Sektörel Yazılım Çözümleri | OSB ve Sanayi Deneyimimiz');
        SEOTools::setDescription('Senkroon Yazılım; gıda, tekstil, makine imalatı ve mobilya başta olmak üzere tüm sanayi sektörlerine özel Workcube ERP ve dijital dönüşüm çözümleri sunar.');

        // Yüksek hacimli sektörel anahtar kelimeler
        SEOTools::metatags()->setKeywords([
            'sektörel erp çözümleri', 'gıda fabrikası yazılımı', 'tekstil üretim takip',
            'sanayi yazılımları Malatya', 'makine imalat erp', 'kurumsal yazılım çözümleri',
            'OSB sektör yazılımları', 'Senkroon Yazılım'
        ]);

        SEOTools::metatags()->addMeta('robots', 'index,follow');
        SEOTools::metatags()->addMeta('author', 'Senkroon Yazılım');
        SEOTools::opengraph()->setUrl(url()->current());
        SEOTools::setCanonical(url()->current());
        SEOTools::opengraph()->addProperty('type', 'website');
        SEOTools::opengraph()->addProperty('site_name', 'Senkroon Yazılım');
        SEOTools::opengraph()->addProperty('locale', 'tr_TR');
        SEOTools::opengraph()->addImage(asset('porto/simages/senkroonlogo2.png'));
        SEOTools::twitter()->setSite('@senkroonyazilim');
        SEOTools::twitter()->setType('summary_large_image');
        SEOTools::twitter()->addImage(asset('porto/simages/senkroonlogo2.png'));

        SEOTools::jsonLd()->addValue('@context', 'https://schema.org');
        SEOTools::jsonLd()->addValue('@type', 'ItemList');
        SEOTools::jsonLd()->addValue('name', 'Hizmet Verdiğimiz Sektörler ve Çözümler');
        SEOTools::jsonLd()->addValue('url', url()->current());

        $sectors = Sector::query()
            ->where('is_active', true)
            ->orderBy('name')
            ->get();

        return view('sectors.index', ['sectors' => $sectors]);
    }

    public function show(string $slug)
    {
        $sector = Sector::where('slug', $slug)->where('is_active', true)->first();

        if (! $sector) {
            abort(404);
        }

        // Yerel SEO: "Sektör Adı + Malatya + Çözümleri" kombinasyonu
        SEOTools::setTitle($sector->name . ' Sektörü ERP ve Yazılım Çözümleri | Malatya');

        $fallbackDesc = "Malatya OSB ve çevresindeki " . $sector->name . " firmaları için özel olarak geliştirilmiş Workcube ERP entegrasyonu ve dijital dönüşüm çözümlerimiz.";
        SEOTools::setDescription($sector->description ?? $fallbackDesc);

        // Dinamik ve lokasyon bazlı anahtar kelimeler
        SEOTools::metatags()->setKeywords([
            strtolower($sector->name) . ' yazılımı',
            strtolower($sector->name) . ' erp çözümleri',
            'Malatya ' . strtolower($sector->name) . ' sektörü',
            'OSB ' . strtolower($sector->name) . ' fabrikaları',
            'üretim takip sistemi',
            'Senkroon Yazılım'
        ]);

        SEOTools::metatags()->addMeta('robots', 'index,follow');
        SEOTools::metatags()->addMeta('author', 'Senkroon Yazılım');
        SEOTools::opengraph()->setUrl(url()->current());
        SEOTools::setCanonical(url()->current());
        SEOTools::opengraph()->addProperty('type', 'article');
        SEOTools::opengraph()->addProperty('site_name', 'Senkroon Yazılım');

        if(isset($sector->image)) {
            SEOTools::opengraph()->addImage(asset($sector->image));
            SEOTools::twitter()->addImage(asset($sector->image));
        } else {
            SEOTools::opengraph()->addImage(asset('porto/simages/senkroonlogo2.png'));
            SEOTools::twitter()->addImage(asset('porto/simages/senkroonlogo2.png'));
        }

        SEOTools::jsonLd()->addValue('@context', 'https://schema.org');
        SEOTools::jsonLd()->addValue('@type', 'Service');
        SEOTools::jsonLd()->addValue('name', $sector->name . ' Sektörel Yazılım Hizmetleri');
        SEOTools::jsonLd()->addValue('description', $sector->description ?? $fallbackDesc);
        SEOTools::jsonLd()->addValue('url', url()->current());
        SEOTools::jsonLd()->addValue('provider', [
            '@type' => 'LocalBusiness', // Sanayi odaklı yerel işletme vurgusu
            'name' => 'Senkroon Yazılım',
            'image' => asset('porto/simages/senkroonlogo2.png'),
            'address' => [
                '@type' => 'PostalAddress',
                'addressLocality' => 'Malatya',
                'addressCountry' => 'TR'
            ]
        ]);

        return view('sectors.show', ['sector' => $sector]);
    }
}
