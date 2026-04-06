@extends('layout.master')

@section('content')

{{-- ===== HERO SECTION ===== --}}
<section class="page-header mt-5 page-header-modern section position-relative border-0 m-0"
    style="background-image: linear-gradient(rgba(3, 6, 18, 0.82), rgba(3, 6, 18, 0.82)), url({{ asset('images/modules/all.jpg') }}); background-position: center; background-size: cover;">
    <div class="container position-relative d-flex align-items-center justify-content-center text-center">
        <div class="d-flex flex-column align-items-center">
            <div class="sci-fi-icon-ring mb-3" style="width: 64px; height: 64px; font-size: 1.6rem;">
                <i class="{{ $service['icon'] }}"></i>
            </div>
            <h1 class="text-white font-weight-bold section-title-glow">{{ $service['title'] }}</h1>
            <p class="text-light opacity-7 text-4 mb-3">{{ $service['short'] }}</p>
            <a href="{{ url('/') }}#services" class="btn btn-outline-light btn-sm mt-2 rounded-pill px-4">
                <i class="fas fa-arrow-left me-2"></i>Tüm Hizmetlerimiz
            </a>
        </div>
    </div>
</section>

{{-- ===== MAIN CONTENT ===== --}}
<div class="container py-5">
    <div class="row">

        {{-- Sol: Ana İçerik --}}
        <div class="col-lg-8">
            <div class="card card-sci-fi mb-4">
                <div class="card-body p-4 p-md-5">
                    <div class="clearfix">
                        @if($service['image'])
                        <img src="{{ asset($service['image']) }}"
                            alt="{{ $service['title'] }}"
                            class="img-fluid float-start me-4 mb-3 rounded"
                            loading="lazy"
                            decoding="async"
                            style="max-width: 45%; height: auto; object-fit: cover; box-shadow: 0 0 15px rgba(255, 133, 0, 0.2);" />
                        @endif

                        <div class="text-content text-light">
                            {!! $service['description'] !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Sağ: Sidebar - Diğer Hizmetler --}}
        <div class="col-lg-4">
            <div class="card card-sci-fi mb-4">
                <div class="card-body p-4">
                    <h5 class="text-white font-weight-bold mb-4">
                        <i class="fas fa-th-list me-2" style="color: #ff8c00;"></i>Tüm Hizmetlerimiz
                    </h5>
                    <ul class="list-unstyled mb-0">
                        @foreach($allServices as $s)
                        <li class="mb-2">
                            <a href="{{ route('services.show', $s['slug']) }}"
                                class="d-flex align-items-center p-3 rounded text-decoration-none transition-all
                                {{ $s['slug'] === $service['slug'] ? 'service-sidebar-active' : 'service-sidebar-item' }}">
                                <div class="sci-fi-icon-ring me-3 flex-shrink-0" style="width: 38px; height: 38px; font-size: 0.9rem;">
                                    <i class="{{ $s['icon'] }}"></i>
                                </div>
                                <span class="text-light font-weight-semibold" style="font-size: 0.9rem;">{{ $s['title'] }}</span>
                            </a>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>

            {{-- CTA Card --}}
            <div class="card card-sci-fi">
                <div class="card-body p-4 text-center">
                    <i class="fas fa-headset text-6 mb-3" style="color: #ff8c00;"></i>
                    <h5 class="text-white font-weight-bold mb-2">Bilgi Almak İster misiniz?</h5>
                    <p class="text-light opacity-7 small mb-3">
                        Hizmetlerimiz hakkında detaylı bilgi için bizimle iletişime geçin.
                    </p>
                    <a href="{{ route('contact-us') }}"
                        class="btn btn-rounded font-weight-bold text-2 px-4 py-2 d-inline-flex align-items-center text-color-light w-100 justify-content-center"
                        style="background: linear-gradient(90deg, #ff8c00 0%, #ff5100 100%); border: none;">
                        Bize Ulaşın <i class="fas fa-chevron-right ms-2"></i>
                    </a>
                </div>
            </div>
        </div>

    </div>
</div>

{{-- ===== İletişim CTA Section ===== --}}
<section class="py-5 position-relative">
    <div class="container">
        <div class="card card-sci-fi text-center">
            <div class="card-body p-5">
                <h3 class="text-white font-weight-bold mb-3">{{ $service['title'] }} Hakkında Daha Fazla Bilgi</h3>
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

<style>
    .service-sidebar-item {
        background: rgba(255, 255, 255, 0.03);
        border: 1px solid rgba(255, 255, 255, 0.06);
        transition: all 0.3s ease;
    }

    .service-sidebar-item:hover {
        background: rgba(255, 133, 0, 0.08);
        border-color: rgba(255, 133, 0, 0.2);
        transform: translateX(4px);
    }

    .service-sidebar-active {
        background: rgba(255, 133, 0, 0.12);
        border: 1px solid rgba(255, 133, 0, 0.3);
        box-shadow: 0 0 12px rgba(255, 133, 0, 0.1);
    }

    .service-sidebar-active .sci-fi-icon-ring {
        box-shadow: 0 0 10px rgba(255, 133, 0, 0.3);
    }

    .text-content h3 {
        color: #fff;
        font-weight: 700;
        margin-bottom: 1rem;
        font-size: 1.4rem;
    }

    .text-content h4 {
        color: #ff8c00;
        font-weight: 600;
        margin-top: 1.5rem;
        margin-bottom: 0.8rem;
        font-size: 1.15rem;
    }

    .text-content ul {
        padding-left: 1.2rem;
    }

    .text-content ul li {
        margin-bottom: 0.5rem;
        line-height: 1.7;
    }

    .text-content p {
        line-height: 1.8;
        margin-bottom: 1rem;
    }
</style>

@endsection