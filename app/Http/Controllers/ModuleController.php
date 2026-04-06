<?php

namespace App\Http\Controllers;

use App\Models\Module;
use Illuminate\Http\Request;
use Artesaos\SEOTools\Facades\SEOTools;

class ModuleController extends Controller
{
    public function index($category = 'workcube')
    {
        // SEO için category'ye göre başlık ayarla

        if ($category === 'uyumsoft') {
            SEOTools::setTitle('Uyumsoft Girus Ticari Yazılım Çözümleri | Senkroon Yazılım');
            SEOTools::setDescription('Uyumsoft Girus Ticari Yönetim Sistemi ile muhasebe, depo yönetimi ve ticari işlemleri entegre şekilde yönetin. KOBİ\'ler için ideal çözüm.');
            SEOTools::metatags()->setKeywords(['Uyumsoft', 'Girus Ticari', 'Ticari yönetim sistemi', 'Muhasebe yazılımı', 'Depo yönetimi', 'KOBİ yazılımı', 'Malatya Uyumsoft', 'Ticari yazılım çözümleri']);
            SEOTools::jsonLd()->addValue('name', 'Uyumsoft Çözümleri');
        } elseif ($category === 'dia') {
            SEOTools::setTitle('DİA ERP ve Ticari Yazılım Çözümleri | Senkroon Yazılım');
            SEOTools::setDescription('DİA ERP, CRM, E-Dönüşüm ve Sektörel yazılımlarla işletmenizin tüm süreçlerini bulutta yönetin.');
            SEOTools::metatags()->setKeywords(['DİA Yazılım', 'DİA ERP', 'Bulut ERP', 'Ticari yazılım', 'E-Dönüşüm', 'DİA CRM', 'Malatya DİA', 'Ön Muhasebe']);
            SEOTools::jsonLd()->addValue('name', 'DİA Çözümleri');
        } else {
            // Jenerik "Özel çözümler" yerine Workcube, OSB ve ERP odaklı terimler eklendi
            SEOTools::setTitle('Workcube ERP Modülleri | Üretim, Finans ve CRM Yönetimi');
            SEOTools::setDescription('OSB fabrikaları ve büyük ölçekli sanayi işletmeleri için Workcube ERP üretim yönetimi (MES), stok, İK ve finans modülleri detayları.');
            SEOTools::metatags()->setKeywords(['Workcube ERP modülleri', 'Üretim yönetim sistemi (MES)', 'Malatya Workcube', 'ERP finans modülü', 'Depo yönetim sistemi (WMS)', 'Fabrika ERP çözümleri', 'Kurumsal kaynak planlama modülleri', 'İşletme yönetim sistemi']);
            SEOTools::jsonLd()->addValue('name', 'Workcube ERP Modülleri');
        }

        SEOTools::metatags()->addMeta('robots', 'index,follow');
        SEOTools::metatags()->addMeta('author', 'Senkroon Yazılım');
        SEOTools::metatags()->addMeta('viewport', 'width=device-width, initial-scale=1');
        SEOTools::opengraph()->setUrl(url()->current());
        SEOTools::setCanonical(url()->current());
        SEOTools::opengraph()->addProperty('type', 'website');
        SEOTools::opengraph()->addProperty('site_name', 'Senkroon Yazılım');
        SEOTools::opengraph()->addProperty('locale', 'tr_TR');
        SEOTools::opengraph()->addImage(asset('porto/simages/senkroonlogo2.png')); // Yazım yanlışı düzeltildi
        SEOTools::twitter()->setSite('@senkroonyazilim');
        SEOTools::twitter()->setType('summary_large_image');
        SEOTools::twitter()->addImage(asset('porto/simages/senkroonlogo2.png'));
        SEOTools::jsonLd()->addValue('@context', 'https://schema.org');
        SEOTools::jsonLd()->addValue('@type', 'ItemList');
        SEOTools::jsonLd()->addValue('logo', [
            '@type' => 'ImageObject',
            'url' => asset('porto/simages/senkroonlogo2.png'),
            'width' => 400,
            'height' => 400
        ]);
        SEOTools::jsonLd()->addValue('url', url()->current());

        $modules = Module::where('is_active', true)
            ->where('category', $category)
            ->whereNull('parent_id') // Sadece ana modülleri getir
            ->orderBy('order')
            ->get();

        // Category'ye göre view seç
        $viewName =  'modules.index';

        return view($viewName, compact('modules', 'category'));
    }

    public function show($category, $moduleSlug)
    {
        $module = Module::with('children')
            ->where('slug', $moduleSlug)
            ->where('category', $category)
            ->where('is_active', true)
            ->firstOrFail();

        abort_if(!$module->is_active, 404);

        // Dinamik başlığa ERP ve marka otoritesi eklendi
        SEOTools::setTitle($module->title . ' Modülü | Kurumsal ERP Çözümleri - Senkroon Yazılım');

        // Eğer kısa açıklama yoksa, fallback (yedek) açıklama bölgesel SEO'ya hizmet edecek şekilde güçlendirildi
        $fallbackDescription = 'Senkroon Yazılım tarafından sunulan ' . $module->title . ' modülü ile işletmenizin verimliliğini artırın. OSB fabrikalarına özel kurumsal yazılım çözümleri.';
        SEOTools::setDescription($module->short_description ?? $fallbackDescription);

        // Anahtar kelimeler dinamik ve yüksek arama hacimli kombinasyonlarla oluşturuldu (Örn: "Üretim modülü", "Üretim programı")
        SEOTools::metatags()->setKeywords([
            strtolower($module->title),
            strtolower($module->title) . ' modülü',
            strtolower($module->title) . ' programı',
            strtolower($module->title) . ' yazılımı',
            'Malatya ' . strtolower($module->title),
            'ERP modülleri',
            'Workcube ' . strtolower($module->title),
            'fabrika yazılım çözümleri',
            'Senkroon Yazılım'
        ]);

        SEOTools::metatags()->addMeta('robots', 'index,follow');
        SEOTools::metatags()->addMeta('author', 'Senkroon Yazılım');
        SEOTools::metatags()->addMeta('viewport', 'width=device-width, initial-scale=1');
        SEOTools::opengraph()->setUrl(url()->current());
        SEOTools::setCanonical(url()->current());
        SEOTools::opengraph()->addProperty('type', 'article');
        SEOTools::opengraph()->addProperty('site_name', 'Senkroon Yazılım');
        SEOTools::opengraph()->addProperty('locale', 'tr_TR');
        SEOTools::opengraph()->addProperty('article:author', 'Senkroon Yazılım');
        SEOTools::twitter()->setSite('@senkroonyazilim');
        SEOTools::twitter()->setType('summary_large_image');

        if ($module->cover_image) {
            SEOTools::opengraph()->addImage(asset('storage/' . $module->cover_image));
            SEOTools::twitter()->addImage(asset('storage/' . $module->cover_image));
        } else {
            SEOTools::opengraph()->addImage(asset('porto/simages/senkroonlogo2.png')); // Yazım yanlışı düzeltildi
            SEOTools::twitter()->addImage(asset('porto/simages/senkroonlogo2.png'));
        }

        SEOTools::jsonLd()->addValue('@context', 'https://schema.org');
        SEOTools::jsonLd()->addValue('@type', 'SoftwareApplication');
        SEOTools::jsonLd()->addValue('name', $module->title);
        SEOTools::jsonLd()->addValue('description', $module->short_description ?? $fallbackDescription);
        SEOTools::jsonLd()->addValue('logo', [
            '@type' => 'ImageObject',
            'url' => asset('porto/simages/senkroonlogo2.png'), // Yazım yanlışı düzeltildi
            'width' => 400,
            'height' => 400
        ]);
        SEOTools::jsonLd()->addValue('url', url()->current());
        SEOTools::jsonLd()->addValue('applicationCategory', 'BusinessApplication');
        SEOTools::jsonLd()->addValue('operatingSystem', 'Web-based, Windows, iOS, Android'); // ERP'nin çoklu platform özelliğini belirtmek SEO'ya katkı sağlar
        SEOTools::jsonLd()->addValue('author', [
            '@type' => 'Organization',
            'name' => 'Senkroon Yazılım', // Yazım yanlışı düzeltildi
            'logo' => [
                '@type' => 'ImageObject',
                'url' => asset('porto/simages/senkroonlogo2.png'),
                'width' => 400,
                'height' => 400
            ]
        ]);

        // Category'ye göre view seç
        $viewName = 'modules.show';

        // Aynı kategorideki diğer modülleri getir (sidebar için)
        $relatedModules = Module::where('is_active', true)
            ->where('category', $category)
            ->whereNull('parent_id')
            ->where('id', '!=', $module->id)
            ->orderBy('order')
            ->get();

        return view($viewName, compact('module', 'category', 'relatedModules'));
    }
}
