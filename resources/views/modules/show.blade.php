@extends('layout.master')

@section('content')
@php
$iconClass = $module->icon ?: 'fas fa-cubes';
@endphp

<section class="sci-fi-section position-relative overflow-hidden">
    <div class="bg-grid"></div>
    <div class="sci-fi-content">

        {{-- Hero Section - Sci-Fi Style --}}
        <section class="page-header page-header-modern section position-relative border-0 m-0"
            style="background-color: #030612; background-image: linear-gradient(rgba(3, 6, 18, 0.85), rgba(3, 6, 18, 0.85)), url({{ asset('images/modules/all.jpg') }}); background-position: center; background-size: cover; background-attachment: fixed; min-height: 400px;">
            <div class="container position-relative pb-5 pt-5 d-flex align-items-center justify-content-center" style="min-height: 400px;">
                <div class="text-center">
                    <div class="mb-4 d-flex justify-content-center">
                        <div class="sci-fi-icon-ring" style="width: 100px; height: 100px; font-size: 3rem;">
                            <i class="{{ $iconClass }}"></i>
                        </div>
                    </div>
                    <h1 class="text-color-light font-weight-bold mb-3 text-7 section-title-glow">{{ $module->title }}</h1>
                    @if($module->short_description)
                    <p class="text-color-light text-4 opacity-8 mb-0">{{ $module->short_description }}</p>
                    @endif
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
                                <img src="{{ asset('storage/' . $module->cover_image) }}"
                                    alt="{{ $module->title }}"
                                    class="img-fluid float-start me-4 mb-3 rounded"
                                    style="max-width: 45%; height: auto; object-fit: cover; box-shadow: 0 0 30px rgba(255, 133, 0, 0.3);" />
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
                                                    <img src="{{ asset($childModule->cover_image) }}"
                                                        alt="{{ $childModule->title }}" width="45" height="45"
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
                                                <a
                                                    class="text-decoration-none text-white">
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

    </div>
</section>
@endsection
