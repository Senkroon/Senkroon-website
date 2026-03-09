<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Artesaos\SEOTools\Facades\SEOTools;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Tüm projeleri listele - Başarı Hikayeleri Sayfası
     */
    public function index(Request $request)
    {
        // Başlıkta "Referanslar" yerine "Başarı Hikayeleri" vurgusu güveni artırır.
        SEOTools::setTitle('ERP Başarı Hikayeleri ve Proje Referansları | Senkroon Yazılım');
        SEOTools::setDescription('Malatya OSB ve Türkiye genelinde gerçekleştirdiğimiz Workcube ERP, üretim takip ve dijital dönüşüm projelerimizin başarı hikayelerini inceleyin.');

        // Yüksek hacimli ve niyet odaklı anahtar kelimeler
        SEOTools::metatags()->setKeywords([
            'ERP başarı hikayeleri', 'yazılım projesi referansları', 'Workcube ERP referans',
            'üretim takip sistemi projeleri', 'Malatya yazılım referansları', 'fabrikalarda dijital dönüşüm',
            'case studies', 'Senkroon Yazılım projeleri', 'sanayi yazılım çözümleri'
        ]);

        SEOTools::metatags()->addMeta('robots', 'index,follow');
        SEOTools::metatags()->addMeta('author', 'Senkroon Yazılım');
        SEOTools::opengraph()->setUrl(url()->current());
        SEOTools::setCanonical(url()->current());
        SEOTools::opengraph()->addProperty('type', 'website');
        SEOTools::opengraph()->addProperty('site_name', 'Senkroon Yazılım');
        SEOTools::opengraph()->addImage(asset('porto/simages/senkroonlogo2.png'));
        SEOTools::twitter()->setSite('@senkroonyazilim');
        SEOTools::twitter()->setType('summary_large_image');

        // JSON-LD: Liste sayfası için Schema
        SEOTools::jsonLd()->addValue('@context', 'https://schema.org');
        SEOTools::jsonLd()->addValue('@type', 'CollectionPage');
        SEOTools::jsonLd()->addValue('name', 'Senkroon Yazılım ERP ve Yazılım Projeleri');
        SEOTools::jsonLd()->addValue('description', 'Farklı sektörlerde tamamladığımız dijital dönüşüm ve ERP entegrasyon projeleri.');
        SEOTools::jsonLd()->addValue('url', url()->current());

        // Filtreleme
        $query = Project::active()->ordered();
        if ($request->has('sector') && $request->sector) { $query->bySector($request->sector); }
        if ($request->has('status') && $request->status) { $query->byStatus($request->status); }
        if ($request->has('featured') && $request->featured == '1') { $query->featured(); }

        $projects = $query->paginate(12);

        $sectors = Project::active()->whereNotNull('sector')->distinct()->pluck('sector');
        $statuses = Project::active()->whereNotNull('status')->distinct()->pluck('status');

        return view('projects.index', compact('projects', 'sectors', 'statuses'));
    }

    /**
     * Tek bir projeyi göster - Vaka Analizi (Case Study)
     */
    public function show($slug)
    {
        $project = Project::where('slug', $slug)
            ->where('is_active', true)
            ->firstOrFail();

        // SEO Başlığı: Proje Adı + Sektör + Başarı Hikayesi kombinasyonu
        $sectorSuffix = $project->sector ? " (" . $project->sector . " Sektörü)" : "";
        $metaTitle = $project->meta_title ?? ($project->title . $sectorSuffix . ' Başarı Hikayesi | Senkroon Yazılım');

        $metaDescription = $project->meta_description ??
            ($project->short_description ?? $project->title . ' projesi ile işletme süreçlerini nasıl dijitalleştirdik? İşte başarı hikayemiz ve uyguladığımız ERP çözümleri.');

        SEOTools::setTitle($metaTitle);
        SEOTools::setDescription($metaDescription);

        // Dinamik anahtar kelime havuzu
        $keywords = [
            strtolower($project->title),
            'ERP başarı hikayesi',
            'dijital dönüşüm projesi',
            'Workcube ERP vaka analizi',
            'Malatya yazılım projesi',
            'Senkroon Yazılım referans',
            'üretim verimliliği artışı'
        ];

        if ($project->sector) {
            $keywords[] = strtolower($project->sector) . ' fabrikası yazılımı';
            $keywords[] = strtolower($project->sector) . ' ERP referans';
        }

        SEOTools::metatags()->setKeywords($keywords);
        SEOTools::metatags()->addMeta('robots', 'index,follow');
        SEOTools::opengraph()->setUrl(url()->current());
        SEOTools::setCanonical(url()->current());
        SEOTools::opengraph()->addProperty('type', 'article');

        // Görsel Optimizasyonu
        $coverImage = $project->cover_image_url ?: asset('porto/simages/senkroonlogo2.png');
        SEOTools::opengraph()->addImage($coverImage);
        SEOTools::twitter()->addImage($coverImage);

        if ($project->completion_date) {
            SEOTools::opengraph()->addProperty('article:published_time', $project->completion_date->toIso8601String());
        }

        // JSON-LD: Daha zengin bir Article ve Breadcrumb şeması
        SEOTools::jsonLd()->addValue('@context', 'https://schema.org');
        SEOTools::jsonLd()->addValue('@type', 'TechArticle'); // Yazılım projesi olduğu için daha uygun
        SEOTools::jsonLd()->addValue('headline', $project->title . ' Dijital Dönüşüm Projesi');
        SEOTools::jsonLd()->addValue('description', $project->short_description ?? $metaDescription);
        SEOTools::jsonLd()->addValue('image', $coverImage);
        SEOTools::jsonLd()->addValue('author', [
            '@type' => 'Organization',
            'name' => 'Senkroon Yazılım',
            'logo' => asset('porto/simages/senkroonlogo2.png')
        ]);

        // Yerel SEO için lokasyon ekleme
        SEOTools::jsonLd()->addValue('publisher', [
            '@type' => 'LocalBusiness',
            'name' => 'Senkroon Yazılım',
            'address' => [
                '@type' => 'PostalAddress',
                'addressLocality' => 'Malatya',
                'addressCountry' => 'TR'
            ]
        ]);

        $relatedProjects = Project::active()
            ->where('id', '!=', $project->id)
            ->when($project->sector, function ($query) use ($project) {
                $query->where('sector', $project->sector);
            })
            ->ordered()
            ->limit(3)
            ->get();

        return view('projects.show', compact('project', 'relatedProjects'));
    }
}
