@extends('layout.master')

@section('content')
@php
$iconClass = $module->icon ?: 'fas fa-cubes';
use Illuminate\Support\Str;
@endphp

{{-- ===== HERO SECTION ===== --}}
<section class="page-header mt-5 page-header-modern section position-relative border-0 m-0"
    style="background-image: linear-gradient(rgba(3, 6, 18, 0.82), rgba(3, 6, 18, 0.82)), url({{ asset('images/modules/all.jpg') }}); background-position: center; background-size: cover;">
    <div class="container position-relative d-flex align-items-center justify-content-center text-center">
        <div class="d-flex flex-column align-items-center">
            <h1 class="text-white font-weight-bold section-title-glow">{{ $module->title }}</h1>
            <a href="{{ route('modules.index', $category) }}" class="btn btn-outline-light btn-sm mt-4 rounded-pill px-4">
                <i class="fas fa-arrow-left me-2"></i>Tüm {{ ucfirst($category) }} Modülleri
            </a>
        </div>
    </div>
</section>

{{-- Main Content --}}
<div class="container py-5">
    <div class="row">
        <div class="col-lg-12">

            {{-- Ana İçerik Kartı --}}
            <div class="card card-sci-fi mb-4">
                <div class="card-body p-4 p-md-5">
                    <div class="clearfix">
                        @if($module->cover_image)
                        {{-- OPTİMİZASYON 1: loading="lazy" ve decoding="async" eklendi. --}}
                        {{-- OPTİMİZASYON 2: box-shadow yayılımı 30px'den 15px'e düşürüldü (Scroll performansını artırır) --}}
                        <img src="{{ asset('storage/' . $module->cover_image) }}"
                            alt="{{ $module->title }}"
                            class="img-fluid float-start me-4 mb-3 rounded"
                            loading="lazy"
                            decoding="async"
                            style="max-width: 45%; height: auto; object-fit: cover; box-shadow: 0 0 15px rgba(255, 133, 0, 0.2);" />
                        @endif

                        <div class="text-content text-light">
                            {!! $module->content !!}
                        </div>
                    </div>
                </div>
            </div>

            {{-- Alt Modüller Bölümü --}}
            @if ($module->children->count() > 0)
            <div class="card card-sci-fi mb-4">
                <div class="card-header" style="background: linear-gradient(135deg, #ff8500 0%, #ff5100 100%); border: none;">
                    <h4 class="mb-0 text-white font-weight-bold section-title-glow">
                        <i class="fas fa-layer-group me-2"></i>Alt Modüller
                    </h4>
                </div>
                <div class="card-body p-0">
                    <div class="row g-0">
                        @foreach ($module->children as $childModule)
                        <div class="col-md-6 col-lg-4 p-4"
                            style="border-right: 1px solid rgba(255, 133, 0, 0.2); border-bottom: 1px solid rgba(255, 133, 0, 0.2);">
                            <div class="d-flex align-items-start h-100">
                                <div class="me-3 flex-shrink-0">
                                    @if ($childModule->cover_image)
                                    <div class="me-3">
                                        {{-- OPTİMİZASYON 3: Tarayıcıyı yormamak için alt modül resimlerine tembel yükleme (lazy) eklendi --}}
                                        <img src="{{ asset($childModule->cover_image) }}"
                                            alt="{{ $childModule->title }}" width="45" height="45"
                                            loading="lazy"
                                            decoding="async"
                                            style="object-fit:contain;">
                                    </div>
                                    @else
                                    <div class="sci-fi-icon-ring" style="width: 60px; height: 60px; font-size: 1.5rem;">
                                        <i class="{{ $childModule->icon ?: 'fas fa-cube' }}"></i>
                                    </div>
                                    @endif
                                </div>
                                <div class="flex-grow-1">
                                    <h5 class="mb-2 text-white font-weight-bold">
                                        <a class="text-decoration-none text-white">
                                            {{ $childModule->title }}
                                        </a>
                                    </h5>
                                    @if ($childModule->short_description)
                                    <p class="text-light opacity-7 mb-0 small" style="line-height: 1.6;">
                                        {{ Str::limit($childModule->short_description, 100) }}
                                    </p>
                                    @endif
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            @endif

            {{-- Ek Açıklama --}}
            @if($module->extra_description)
            <div class="card card-sci-fi">
                <div class="card-body p-4 p-md-5">
                    <div class="text-content text-light">
                        {!! $module->extra_description !!}
                    </div>
                </div>
            </div>
            @endif

        </div>
    </div>
</div>

{{-- İletişim CTA Section --}}
<section class="py-5 position-relative">
    <div class="container">
        <div class="card card-sci-fi text-center">
            <div class="card-body p-5">
                <h3 class="text-white font-weight-bold mb-3">{{ $module->title }} Hakkında Daha Fazla Bilgi</h3>
                <p class="text-light text-4 mb-4 opacity-8">
                    Uzman ekibimiz size özel çözümler sunmak için hazır
                </p>
                <a href="{{ route('contact-us') }}"
                    class="btn btn-rounded font-weight-bold text-3 px-5 py-3 d-inline-flex align-items-center text-color-light"
                    style="background: linear-gradient(90deg, #ff8c00 0%, #ff5100 100%); border: none;">
                    Bize Ulaşın <i class="fas fa-chevron-right ms-2"></i>
                </a>
            </div>
        </div>
    </div>
</section>

{{-- OPTİMİZASYON 4: Sayfanın en altındaki hatalı ve fazladan olan </div> ve </section> etiketleri silindi --}}

@endsection