<?php

namespace App\Http\Controllers;

use App\Models\message;
use Illuminate\Http\Request;
use Artesaos\SEOTools\Facades\SEOTools;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;
use App\Models\Advisor;
use App\Models\Module;
use App\Models\Slider;

class Homecontroller extends Controller
{

    public function index()
    {
        SEOTools::setTitle('Senkroon Yazılım | Malatya Workcube ERP & Özel Yazılım Çözümleri');
        SEOTools::setDescription('Malatya ve OSB sanayi işletmeleri için Workcube ERP entegrasyonu, üretim takip (MES), stok yönetimi ve kurumsal kaynak planlama hizmetleri sunan yetkili bayi.');
        SEOTools::metatags()->setKeywords(['Malatya ERP yazılımı', 'Workcube bayisi', 'Kurumsal kaynak planlama', 'Stok takip programı', 'Organize sanayi bölgesi ERP', 'Özel yazılım geliştirme Malatya', 'KOBİ ERP sistemleri', 'Üretim yönetim sistemi']);
        SEOTools::metatags()->addMeta('robots', 'index,follow');
        SEOTools::metatags()->addMeta('author', 'Senkroon Yazılım');
        SEOTools::metatags()->addMeta('viewport', 'width=device-width, initial-scale=1');
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
        SEOTools::jsonLd()->addValue('@type', 'LocalBusiness');
        SEOTools::jsonLd()->addValue('name', 'Senkroon Yazılım');
        SEOTools::jsonLd()->addValue('logo', [
            '@type' => 'ImageObject',
            'url' => asset('porto/simages/senkroonlogo2.png'),
            'width' => 400,
            'height' => 400
        ]);
        SEOTools::jsonLd()->addValue('url', url()->current());
        SEOTools::jsonLd()->addValue('sameAs', [
            'https://twitter.com/senkroonyazilim',
            'https://linkedin.com/company/senkroon-yazilim'
        ]);
        SEOTools::jsonLd()->addValue('contactPoint', [
            '@type' => 'ContactPoint',
            'contactType' => 'customer service',
            'availableLanguage' => 'Turkish'
        ]);

        $advisors = Advisor::all();
        $sliders = Slider::getActiveSliders();
        return view('home.index',compact('advisors', 'sliders'));
    }

    public function about()
    {
        SEOTools::setTitle('Hakkımızda | Malatya\'nın Lider ERP ve Yazılım Danışmanlık Firması');
        SEOTools::setDescription('Senkroon Yazılım olarak Doğu Anadolu\'daki sanayi tesislerine ve KOBİ\'lere Workcube ERP, dijital dönüşüm ve özel yazılım geliştirme hizmetleri sunuyoruz.');
        SEOTools::metatags()->setKeywords(['hakkımızda', 'Senkroon yazılım ekibi', 'Malatya yazılım firmaları', 'ERP danışmanlık şirketi', 'kurumsal yazılım çözümleri', 'dijital dönüşüm danışmanlığı']);
        SEOTools::metatags()->addMeta('robots', 'index,follow');
        SEOTools::metatags()->addMeta('author', 'Senkroon Yazılım');
        SEOTools::metatags()->addMeta('viewport', 'width=device-width, initial-scale=1');
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
        SEOTools::jsonLd()->addValue('@type', 'AboutPage');
        SEOTools::jsonLd()->addValue('name', 'Hakkımızda - Senkroon Yazılım');
        SEOTools::jsonLd()->addValue('logo', [
            '@type' => 'ImageObject',
            'url' => asset('porto/simages/senkroonlogo2.png'),
            'width' => 400,
            'height' => 400
        ]);
        SEOTools::jsonLd()->addValue('url', url()->current());

        return view('home.about');
    }

    public function contactUs()
    {
        SEOTools::setTitle('İletişim | Fabrikanızın Dijital Dönüşümü İçin Bize Ulaşın');
        SEOTools::setDescription('Workcube ERP entegrasyonu, özel yazılım projeleriniz ve ücretsiz sistem analizi için Malatya\'daki uzman ekibimizle iletişime geçin.');
        SEOTools::metatags()->setKeywords(['iletişim', 'Senkroon yazılım iletişim', 'Malatya ERP firması telefonu', 'yazılım proje teklifi', 'Workcube demo talebi', 'ücretsiz ERP analizi']);
        SEOTools::metatags()->addMeta('robots', 'index,follow');
        SEOTools::metatags()->addMeta('author', 'Senkroon Yazılım');
        SEOTools::metatags()->addMeta('viewport', 'width=device-width, initial-scale=1');
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
        SEOTools::jsonLd()->addValue('@type', 'ContactPage');
        SEOTools::jsonLd()->addValue('name', 'Senkroon Yazılım İletişim');
        SEOTools::jsonLd()->addValue('logo', [
            '@type' => 'ImageObject',
            'url' => asset('porto/simages/senkroonlogo2.png'),
            'width' => 400,
            'height' => 400
        ]);
        SEOTools::jsonLd()->addValue('url', url()->current());

        return view('home.contact-us');
    }

    public function contactUsSubmit(Request $request)
    {
        try {
            $validated = $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|email|max:255',
                'message' => 'required|string|max:5000',
                'phone' => 'required|string|max:20',
                'subject' => 'required|string|max:255',
                'company' => 'nullable|string|max:255',
                'kvkk' => 'required|accepted',
            ], [
                'kvkk.required' => 'KVKK Aydınlatma Metni\'ni kabul etmelisiniz.',
                'kvkk.accepted' => 'KVKK Aydınlatma Metni\'ni kabul etmelisiniz.',
            ]);

            // KVKK ve IP adresi bilgilerini ekle
            $data = array_merge($validated, [
                'kvkk_approved' => true,
                'kvkk_approved_at' => now(),
                'ip_address' => $request->ip(),
            ]);

            message::create($data);

            try {
                Mail::to("info@senkroon.com")->send(new ContactMail($validated));
                $message = 'Mesajınız başarıyla gönderildi!';
            } catch (\Exception $e) {
                $message = 'Mesajınız veritabanına kaydedildi ancak e-posta gönderilemedi.';
            }

            // AJAX isteği ise JSON döndür
            if ($request->ajax()) {
                return response()->json([
                    'success' => true,
                    'message' => $message
                ]);
            }

            return redirect()->route('contact-us')->with('success', $message);
        } catch (\Illuminate\Validation\ValidationException $e) {
            // AJAX isteği ise validation hatalarını JSON olarak döndür
            if ($request->ajax()) {
                return response()->json([
                    'success' => false,
                    'errors' => $e->errors()
                ], 422);
            }

            return redirect()->back()->withErrors($e->errors())->withInput();
        } catch (\Exception $e) {
            // AJAX isteği ise genel hatayı JSON olarak döndür
            if ($request->ajax()) {
                return response()->json([
                    'success' => false,
                    'message' => 'Bir hata oluştu: ' . $e->getMessage()
                ], 500);
            }

            return redirect()->route('contact-us')->with('error', 'Bir hata oluştu: ' . $e->getMessage());
        }
    }

    public function whyWorkcube()
    {
        SEOTools::setTitle('Neden Workcube ERP? | %100 Web Tabanlı İşletme Yönetimi');
        SEOTools::setDescription('Üretim, finans, CRM ve stok yönetiminde Workcube ERP\'nin sanayi işletmelerine ve KOBİ\'lere sağladığı avantajları, hız ve esnekliği keşfedin.');
        SEOTools::metatags()->setKeywords(['neden workcube', 'workcube erp avantajları', 'web tabanlı erp', 'bulut erp sistemleri', 'B2B erp çözümleri', 'fabrika erp programı']);
        SEOTools::metatags()->addMeta('robots', 'index,follow');
        SEOTools::opengraph()->setUrl(url()->current());
        SEOTools::setCanonical(url()->current());

        return view('home.WhyWorkcube');
    }

    public function faq()
    {
        SEOTools::setTitle('Sıkça Sorulan Sorular | Workcube ERP Kurulum ve Entegrasyon');
        SEOTools::setDescription('Workcube ERP kurulum süreçleri, modül fiyatlandırmaları, sunucu gereksinimleri ve sanayi entegrasyonları hakkında en çok merak edilen soruların yanıtları.');
        SEOTools::metatags()->setKeywords(['sıkça sorulan sorular', 'Workcube ERP kurulumu', 'ERP fiyatları', 'Workcube sunucu gereksinimleri', 'ERP entegrasyon süreci']);
        SEOTools::metatags()->addMeta('robots', 'index,follow');
        SEOTools::metatags()->addMeta('author', 'Senkroon Yazılım');
        SEOTools::metatags()->addMeta('viewport', 'width=device-width, initial-scale=1');
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
        SEOTools::jsonLd()->addValue('@type', 'FAQPage');
        SEOTools::jsonLd()->addValue('name', 'Sıkça Sorulan Sorular - Workcube ERP');

        return view('faq.index');
    }

    public function productsAndSolutions()
    {
        SEOTools::setTitle('Kurumsal ERP Çözümleri ve Modüller | Üretim, Stok, CRM');
        SEOTools::setDescription('İşletmenizin tüm süreçlerini optimize eden üretim yönetim sistemi (MES), stok takip programı, CRM ve finans modüllerimizle tanışın.');
        SEOTools::metatags()->setKeywords(['ERP programları', 'Üretim planlama yazılımı', 'Stok takip programı', 'Müşteri ilişkileri yönetimi (CRM)', 'B2B sipariş sistemi', 'Workcube modülleri', 'Uyumsoft Girus Ticari', 'Ticari yönetim sistemi']);
        SEOTools::metatags()->addMeta('robots', 'index,follow');
        SEOTools::opengraph()->setUrl(url()->current());
        SEOTools::setCanonical(url()->current());

        $advisors = Advisor::all();
        $WorkcubeModules = Module::where('category', 'workcube')->get();
         $uyumsoftModules = Module::where('category', 'uyumsoft')
            ->whereNull('parent_id')
            ->where('is_active', true)
            ->get();
        return view('home.products-and-solutions', compact('advisors', 'WorkcubeModules', 'uyumsoftModules'));
    }

    public function kvkk()
    {
        SEOTools::setTitle('KVKK Aydınlatma Metni | Senkroon Yazılım');
        SEOTools::setDescription('Senkroon Yazılım tarafından kişisel verilerinizin işlenmesine ve korunmasına ilişkin KVKK Aydınlatma Metni.');
        SEOTools::metatags()->addMeta('robots', 'index,follow');
        return view('kvkk.index');
    }

    public function whySenkroon()
    {
        SEOTools::setTitle('Neden Senkroon Yazılım? | Güvenilir Dijital Dönüşüm Partneriniz');
        SEOTools::setDescription('Bölgesel deneyimimiz, hızlı teknik desteğimiz ve OSB fabrikalarına özel geliştirdiğimiz başarılı ERP projeleriyle neden Senkroon\'u seçmelisiniz?');
        SEOTools::metatags()->setKeywords(['neden senkroon', 'güvenilir yazılım firması', 'Malatya yazılım destek', 'OSB dijital dönüşüm', 'uzman erp danışmanları']);
        SEOTools::metatags()->addMeta('robots', 'index,follow');
        SEOTools::opengraph()->setUrl(url()->current());
        SEOTools::setCanonical(url()->current());

        return view('home.why-senkroon');
    }

    public function media()
    {
        SEOTools::setTitle('Medya Galerisi | Senkroon Yazılım Ofis ve Etkinlikler');
        SEOTools::setDescription('Senkroon Yazılım ofis ortamı, ekip çalışmaları, etkinlikler ve projelerimizden kareler. Medya galerimizdeki fotoğraflarla bizi daha yakından tanıyın.');
        SEOTools::metatags()->setKeywords(['Senkroon medya', 'ofis fotoğrafları', 'yazılım ekibi', 'şirket galerisi', 'Malatya yazılım ofisi']);
        SEOTools::metatags()->addMeta('robots', 'index,follow');
        SEOTools::metatags()->addMeta('author', 'Senkroon Yazılım');
        SEOTools::opengraph()->setUrl(url()->current());
        SEOTools::setCanonical(url()->current());
        SEOTools::opengraph()->addProperty('type', 'website');
        SEOTools::opengraph()->addProperty('site_name', 'Senkroon Yazılım');
        SEOTools::opengraph()->addProperty('locale', 'tr_TR');
        SEOTools::opengraph()->addImage(asset('porto/simages/senkroonlogo2.png'));

        // images/media klasöründeki fotoğrafları tara
        $mediaPath = public_path('images/media');
        $photos = [];

        if (is_dir($mediaPath)) {
            $files = scandir($mediaPath);
            $allowedExtensions = ['jpg', 'jpeg', 'png', 'webp', 'gif'];

            foreach ($files as $file) {
                if ($file === '.' || $file === '..') continue;
                $ext = strtolower(pathinfo($file, PATHINFO_EXTENSION));
                if (in_array($ext, $allowedExtensions)) {
                    $photos[] = [
                        'src' => asset('images/media/' . $file),
                        'alt' => pathinfo($file, PATHINFO_FILENAME),
                    ];
                }
            }
        }

        return view('home.media', compact('photos'));
    }
}
