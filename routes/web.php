<?php

use App\Http\Controllers\AdvisorController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Homecontroller;
use App\Http\Controllers\ModuleController;
use App\Http\Controllers\SectorController;
use App\Http\Controllers\ProjectController;



Route::controller(Homecontroller::class)->group(function () {
    Route::get('/', 'index')->name('home.index');
    Route::get('/hakkimizda', 'about')->name('home.about');
    Route::get('/iletisim', 'contactUs')->name('contact-us');
    Route::post('/iletisim', 'contactUsSubmit')->name('contact-us.submit');
    Route::get('/neden-workcube', 'whyWorkcube')->name('home.workcube');
    Route::get('/sss', 'faq')->name('home.faq');
    Route::get('/urunler-ve-cozumler', 'productsAndSolutions')->name('home.products-and-solutions');
    Route::get('/kvkk-aydinlatma-metni', 'kvkk')->name('kvkk');


    Route::get('/neden-senkroon', 'whySenkroon')->name('home.why-senkroon');
});


// Birleştirilmiş module route'ları - category ile gruplanmış
Route::prefix('{category}-modulleri')->where(['category' => 'mikro|workcube'])->group(function () {
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
