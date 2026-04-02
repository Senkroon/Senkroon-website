<?php

namespace App\Http\Controllers;

use App\Models\Advisor;
use Artesaos\SEOTools\Facades\SEOTools;
use Illuminate\Http\Request;

class AdvisorController extends Controller
{

    public function index()
    {
        // Başlıkta marka otoritesi ve uzmanlık vurgusu
        SEOTools::setTitle('Uzman ERP Danışmanlarımız | Senkroon Yazılım Deneyimli Ekip');
        SEOTools::setDescription('Malatya ve OSB projelerimizde görev alan, Workcube ERP ve dijital dönüşüm süreçlerinde uzmanlaşmış deneyimli danışman ekibimizle tanışın.');

        // Ticari aramalar için optimize edilmiş anahtar kelimeler
        SEOTools::metatags()->setKeywords([
            'ERP danışmanları',
            'Workcube uzmanı',
            'yazılım danışmanlığı Malatya',
            'dijital dönüşüm uzmanı',
            'Senkroon yazılım ekibi',
            'kurumsal yazılım danışmanı',
            'iş süreçleri analisti',
            'Malatya teknoloji danışmanlığı'
        ]);

        SEOTools::metatags()->addMeta('robots', 'index,follow');
        SEOTools::metatags()->addMeta('author', 'Senkroon Yazılım');
        SEOTools::opengraph()->setUrl(url()->current());
        SEOTools::setCanonical(url()->current());
        SEOTools::opengraph()->addProperty('type', 'website');
        SEOTools::opengraph()->addProperty('site_name', 'Senkroon Yazılım');
        SEOTools::opengraph()->addProperty('locale', 'tr_TR');
        SEOTools::twitter()->setSite('@senkroonyazilim');
        SEOTools::twitter()->setType('summary_large_image');

        SEOTools::jsonLd()->addValue('@context', 'https://schema.org');
        SEOTools::jsonLd()->addValue('@type', 'ItemList');
        SEOTools::jsonLd()->addValue('name', 'Senkroon Yazılım Uzman Danışman Kadrosu');
        SEOTools::jsonLd()->addValue('url', url()->current());

        $advisors = Advisor::all();

        return view('advisors.index', compact('advisors'));
    }

    public function show($slug)
    {
        $advisor = Advisor::where('slug', $slug)->firstOrFail();

        // Başlıkta "Workcube ERP Danışmanı" vurgusu eklendi
        SEOTools::setTitle($advisor->name . ' | Uzman Workcube ERP Danışmanı - Senkroon Yazılım');

        $fallbackDescription = $advisor->name . " - Senkroon Yazılım bünyesinde Malatya ve çevresindeki OSB fabrikalarına Workcube ERP danışmanlığı ve dijital dönüşüm hizmeti sunan uzman ekip üyemiz.";
        SEOTools::setDescription($advisor->title ?? $fallbackDescription);

        // Kişi bazlı SEO anahtar kelimeleri
        SEOTools::metatags()->setKeywords([
            strtolower($advisor->name),
            strtolower($advisor->name) . ' erp danışmanı',
            strtolower($advisor->name) . ' workcube uzmanı',
            'yazılım danışmanı',
            'Malatya ERP uzmanı',
            'Senkroon Yazılım danışmanlık'
        ]);

        SEOTools::metatags()->addMeta('robots', 'index,follow');
        SEOTools::metatags()->addMeta('author', 'Senkroon Yazılım');
        SEOTools::metatags()->addMeta('viewport', 'width=device-width, initial-scale=1');
        SEOTools::opengraph()->setUrl(url()->current());
        SEOTools::setCanonical(url()->current());
        SEOTools::opengraph()->addProperty('type', 'profile');
        SEOTools::opengraph()->addProperty('site_name', 'Senkroon Yazılım');
        SEOTools::opengraph()->addProperty('profile:first_name', $advisor->name);

        // Logo ve görsel yolları standart hale getirildi
        SEOTools::opengraph()->addImage(asset('porto/simages/senkroonlogo2.png'));
        SEOTools::twitter()->setSite('@senkroonyazilim');
        SEOTools::twitter()->setType('summary_large_image');
        SEOTools::twitter()->addImage(asset('porto/simages/senkroonlogo2.png'));

        // Dinamik Person Şeması (Google'ın kişiyi tanımasını sağlar)
        SEOTools::jsonLd()->addValue('@context', 'https://schema.org');
        SEOTools::jsonLd()->addValue('@type', 'Person');
        SEOTools::jsonLd()->addValue('name', $advisor->name);
        SEOTools::jsonLd()->addValue('jobTitle', $advisor->title ?? 'ERP Danışmanı');
        SEOTools::jsonLd()->addValue('url', url()->current());
        SEOTools::jsonLd()->addValue('worksFor', [
            '@type' => 'Organization',
            'name' => 'Senkroon Yazılım',
            'location' => [
                '@type' => 'Place',
                'name' => 'Malatya'
            ]
        ]);

        return view('advisors.show', compact('advisor'));
    }
}
