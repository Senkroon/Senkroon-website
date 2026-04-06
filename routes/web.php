<?php

use App\Http\Controllers\AdvisorController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Homecontroller;
use App\Http\Controllers\ModuleController;
use App\Http\Controllers\SectorController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ServiceController;



Route::controller(Homecontroller::class)->group(function () {
    Route::get('/', 'index')->name('home.index');
    Route::get('/hakkimizda', 'about')->name('home.about');
    Route::get('/iletisim', 'contactUs')->name('contact-us');
    Route::post('/iletisim', 'contactUsSubmit')->name('contact-us.submit');
    Route::get('/neden-workcube', 'whyWorkcube')->name('home.workcube');
    Route::get('/sikca-sorulan-sorular', 'faq')->name('home.faq');
    Route::get('/urunler-ve-cozumler', 'productsAndSolutions')->name('home.products-and-solutions');
    Route::get('/kvkk-aydinlatma-metni', 'kvkk')->name('kvkk');


    Route::get('/neden-senkroon', 'whySenkroon')->name('home.why-senkroon');
    Route::get('/medya', 'media')->name('home.media');
});


// Birleştirilmiş module route'ları - category ile gruplanmış mikro kaldıırldı
Route::prefix('{category}-modulleri')->where(['category' => 'workcube|uyumsoft|dia'])->group(function () {
    Route::get('/', [ModuleController::class, 'index'])->name('modules.index');
    Route::get('/{module}', [ModuleController::class, 'show'])->name('modules.show');
});


Route::prefix('sektorel-uygulamalar')->group(function () {
    Route::get('/', [SectorController::class, 'index'])->name('sectors.index');
    Route::get('/{slug}', [SectorController::class, 'show'])->name('sectors.show');
});



Route::prefix("danismanlik-cozumleri")->group(function () {
    Route::get('/', [AdvisorController::class, 'index'])->name('advisors.index');
    Route::get('/{slug}', [AdvisorController::class, 'show'])->name('advisors.show');
});


Route::prefix("projelerimiz")->group(function () {
    Route::get('/', [ProjectController::class, 'index'])->name('projects.index');
    Route::get('/{slug}', [ProjectController::class, 'show'])->name('projects.show');
});


Route::prefix("hizmetlerimiz")->group(function () {
    Route::get('/{slug}', [ServiceController::class, 'show'])->name('services.show');
});
