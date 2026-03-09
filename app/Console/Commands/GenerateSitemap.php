<?php

namespace App\Console\Commands;

use App\Models\Module;
use App\Models\Sector;
use App\Models\Advisor;
use App\Models\Project; // Projeler eklendi
use Illuminate\Console\Command;
use Carbon\Carbon;

class GenerateSitemap extends Command
{
    protected $signature = 'sitemap:generate';
    protected $description = 'Senkroon Yazılım için SEO uyumlu XML sitemap oluşturur';

    public function handle()
    {
        $this->info('Senkroon Yazılım Sitemap oluşturuluyor...');

        $xml = new \DOMDocument('1.0', 'UTF-8');
        $xml->formatOutput = true;

        $urlset = $xml->createElement('urlset');
        $urlset->setAttribute('xmlns', 'http://www.sitemaps.org/schemas/sitemap/0.9');
        $xml->appendChild($urlset);

        $baseUrl = rtrim(config('app.url', 'https://www.senkroonyazilim.com'), '/');
        $today = Carbon::now()->format('Y-m-d');

        // 1. Statik Sayfalar (Yeni rotalar ve öncelikler eklendi)
        $staticPages = [
            ['url' => '/', 'changefreq' => 'daily', 'priority' => '1.0'],
            ['url' => '/hakkimizda', 'changefreq' => 'monthly', 'priority' => '0.8'],
            ['url' => '/iletisim', 'changefreq' => 'monthly', 'priority' => '0.7'],
            ['url' => '/urunler-ve-cozumler', 'changefreq' => 'weekly', 'priority' => '0.9'],
            ['url' => '/projelerimiz', 'changefreq' => 'weekly', 'priority' => '0.9'], // Kritik: Başarı hikayeleri
            ['url' => '/neden-workcube', 'changefreq' => 'monthly', 'priority' => '0.8'],
            ['url' => '/neden-senkroon', 'changefreq' => 'monthly', 'priority' => '0.8'],
            ['url' => '/sıkca-sorulan-sorular', 'changefreq' => 'monthly', 'priority' => '0.6'],
        ];

        foreach ($staticPages as $page) {
            $this->addUrl($xml, $urlset, $baseUrl . $page['url'], $today, $page['changefreq'], $page['priority']);
        }

        // 2. Modüller (ID yerine SLUG kullanımı SEO için zorunludur)
        try {
            $modules = Module::where('is_active', true)->get();
            foreach ($modules as $module) {
                // Not: Controller'da category/slug yapısı kullandığınız için URL'i ona göre güncelledim
                $urlPath = "/moduller/{$module->category}/{$module->slug}";
                $this->addUrl($xml, $urlset, $baseUrl . $urlPath, $module->updated_at->format('Y-m-d'), 'monthly', '0.8');
            }
            $this->info('Modüller eklendi: ' . $modules->count());
        } catch (\Exception $e) {
            $this->warn('Modüller hatası: ' . $e->getMessage());
        }

        // 3. Projeler (Success Stories - Olmazsa Olmaz)
        try {
            $projects = Project::where('is_active', true)->get();
            foreach ($projects as $project) {
                $this->addUrl($xml, $urlset, $baseUrl . '/projelerimiz/' . $project->slug, $project->updated_at->format('Y-m-d'), 'monthly', '0.8');
            }
            $this->info('Projeler eklendi: ' . $projects->count());
        } catch (\Exception $e) {
            $this->warn('Projeler hatası: ' . $e->getMessage());
        }

        // 4. Sektörler
        try {
            $sectors = Sector::where('is_active', true)->get();
            foreach ($sectors as $sector) {
                $this->addUrl($xml, $urlset, $baseUrl . '/sektorler/' . $sector->slug, $sector->updated_at->format('Y-m-d'), 'monthly', '0.7');
            }
            $this->info('Sektörler eklendi: ' . $sectors->count());
        } catch (\Exception $e) {
            $this->warn('Sektörler hatası: ' . $e->getMessage());
        }

        // 5. Danışmanlar
        try {
            $advisors = Advisor::all();
            foreach ($advisors as $advisor) {
                $this->addUrl($xml, $urlset, $baseUrl . '/danismanlar/' . $advisor->slug, $advisor->updated_at->format('Y-m-d'), 'monthly', '0.5');
            }
            $this->info('Danışmanlar eklendi: ' . $advisors->count());
        } catch (\Exception $e) {
            $this->warn('Danışmanlar hatası: ' . $e->getMessage());
        }

        $xml->save(public_path('sitemap.xml'));
        $this->info('Sitemap başarıyla güncellendi.');

        return 0;
    }

    /**
     * URL ekleme işlemini temizlemek için yardımcı fonksiyon
     */
    private function addUrl($xml, $urlset, $loc, $lastmod, $changefreq, $priority)
    {
        $url = $xml->createElement('url');
        $url->appendChild($xml->createElement('loc', $loc));
        $url->appendChild($xml->createElement('lastmod', $lastmod));
        $url->appendChild($xml->createElement('changefreq', $changefreq));
        $url->appendChild($xml->createElement('priority', $priority));
        $urlset->appendChild($url);
    }
}
