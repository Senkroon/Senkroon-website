<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Artesaos\SEOTools\Facades\SEOTools;


class ProjectController extends Controller
{
      /**
     * Tüm projeleri listele
     */
    public function index(Request $request)
    {
        SEOTools::setTitle('Projelerimiz - Senkroon Yazılım | Başarı Hikayeleri ve Referanslar');
        SEOTools::setDescription('Senkroon Yazılım\'ın gerçekleştirdiği başarılı ERP projeleri. Çeşitli sektörlerden referanslarımız ve çözümlerimiz.');
        SEOTools::metatags()->setKeywords(['projeler', 'referanslar', 'başarı hikayeleri', 'ERP projeleri', 'müşteri referansları', 'case study', 'Senkroon projeler', 'yazılım projeleri']);
        SEOTools::metatags()->addMeta('robots', 'index,follow');
        SEOTools::metatags()->addMeta('author', 'Senkroon Yazılım');
        SEOTools::opengraph()->setUrl(url()->current());
        SEOTools::setCanonical(url()->current());
        SEOTools::opengraph()->addProperty('type', 'website');
        SEOTools::opengraph()->addProperty('site_name', 'Senkroon Yazılım');
        SEOTools::opengraph()->addProperty('locale', 'tr_TR');
        SEOTools::opengraph()->addImage(asset('porto/simages/senkroonlogo2.png'));
        SEOTools::twitter()->setSite('@Senkroonyazilim');
        SEOTools::twitter()->setType('summary_large_image');
        SEOTools::twitter()->addImage(asset('porto/simages/senkroonlogo2.png'));
        SEOTools::jsonLd()->addValue('@context', 'https://schema.org');
        SEOTools::jsonLd()->addValue('@type', 'CollectionPage');
        SEOTools::jsonLd()->addValue('name', 'Projelerimiz - Başarı Hikayeleri');
        SEOTools::jsonLd()->addValue('description', 'Senkroon Yazılım\'ın gerçekleştirdiği başarılı ERP projeleri');
        SEOTools::jsonLd()->addValue('url', url()->current());

        // Filtreleme
        $query = Project::active()->ordered();

        // Sektöre göre filtreleme
        if ($request->has('sector') && $request->sector) {
            $query->bySector($request->sector);
        }

        // Duruma göre filtreleme
        if ($request->has('status') && $request->status) {
            $query->byStatus($request->status);
        }

        // Öne çıkanları getir
        if ($request->has('featured') && $request->featured == '1') {
            $query->featured();
        }

        $projects = $query->paginate(12);

        // Filtreleme için sektör ve durum listesi
        $sectors = Project::active()
            ->whereNotNull('sector')
            ->distinct()
            ->pluck('sector');

        $statuses = Project::active()
            ->whereNotNull('status')
            ->distinct()
            ->pluck('status');

        return view('projects.index', compact('projects', 'sectors', 'statuses'));
    }

    /**
     * Tek bir projeyi göster
     */
    public function show($slug)
    {
        $project = Project::where('slug', $slug)
            ->where('is_active', true)
            ->firstOrFail();

        // SEO Ayarları
        $metaTitle = $project->meta_title ?? ($project->title . ' - Senkroon Yazılım Projesi');
        $metaDescription = $project->meta_description ??
            ($project->short_description ?? 'Senkroon Yazılım tarafından gerçekleştirilen ' . $project->title . ' projesi hakkında detaylı bilgiler.');

        SEOTools::setTitle($metaTitle);
        SEOTools::setDescription($metaDescription);

        $keywords = [
            strtolower($project->title),
            'ERP projesi',
            'yazılım projesi',
            'Senkroon yazılım',
            'başarı hikayesi',
            'case study'
        ];

        if ($project->sector) {
            $keywords[] = strtolower($project->sector);
            $keywords[] = strtolower($project->sector) . ' ERP';
        }

        if ($project->client_name) {
            $keywords[] = strtolower($project->client_name);
        }

        SEOTools::metatags()->setKeywords($keywords);
        SEOTools::metatags()->addMeta('robots', 'index,follow');
        SEOTools::metatags()->addMeta('author', 'Senkroon Yazılım');
        SEOTools::opengraph()->setUrl(url()->current());
        SEOTools::setCanonical(url()->current());
        SEOTools::opengraph()->addProperty('type', 'article');
        SEOTools::opengraph()->addProperty('site_name', 'Senkroon Yazılım');
        SEOTools::opengraph()->addProperty('locale', 'tr_TR');

        if ($project->cover_image_url) {
            SEOTools::opengraph()->addImage($project->cover_image_url);
            SEOTools::twitter()->addImage($project->cover_image_url);
        } else {
            SEOTools::opengraph()->addImage(asset('porto/simages/senkroonlogo2.png'));
            SEOTools::twitter()->addImage(asset('porto/simages/senkroonlogo2.png'));
        }

        if ($project->completion_date) {
            SEOTools::opengraph()->addProperty('article:published_time', $project->completion_date->toIso8601String());
        }

        SEOTools::twitter()->setSite('@Senkroonyazilim');
        SEOTools::twitter()->setType('summary_large_image');

        // JSON-LD Schema
        SEOTools::jsonLd()->addValue('@context', 'https://schema.org');
        SEOTools::jsonLd()->addValue('@type', 'Article');
        SEOTools::jsonLd()->addValue('headline', $project->title);
        SEOTools::jsonLd()->addValue('description', $project->short_description ?? $metaDescription);
        SEOTools::jsonLd()->addValue('url', url()->current());

        if ($project->completion_date) {
            SEOTools::jsonLd()->addValue('datePublished', $project->completion_date->toIso8601String());
        }

        SEOTools::jsonLd()->addValue('author', [
            '@type' => 'Organization',
            'name' => 'Senkroon Yazılım',
            'logo' => [
                '@type' => 'ImageObject',
                'url' => asset('porto/simages/senkroonlogo2.png')
            ]
        ]);

        if ($project->cover_image_url) {
            SEOTools::jsonLd()->addValue('image', [
                '@type' => 'ImageObject',
                'url' => $project->cover_image_url
            ]);
        }

        // İlgili projeler
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
