@extends('layout.master')

@section('content')

{{-- ===== HERO SECTION ===== --}}
<section class="page-header mt-5 page-header-modern section position-relative border-0 m-0"
    style="background-image: linear-gradient(rgba(3, 6, 18, 0.82), rgba(3, 6, 18, 0.82)), url({{ asset('images/modules/all.jpg') }}); background-position: center; background-size: cover;">
    <div class="container position-relative d-flex align-items-center justify-content-center text-center">
        <div class="d-flex flex-column align-items-center">
            <h1 class="text-white font-weight-bold section-title-glow">{{ $advisor->title }}</h1>
            <a href="{{ route('advisors.index') }}" class="btn btn-outline-light btn-sm mt-4 rounded-pill px-4">
                <i class="fas fa-arrow-left me-2"></i>Tüm Danışmanlık Alanları
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
                        @if($advisor->image)
                        {{-- OPTİMİZASYON 1: loading="lazy" ve decoding="async" eklendi. --}}
                        {{-- OPTİMİZASYON 2: box-shadow yayılımı performance için 15px'e düşürüldü --}}
                        <img src="{{ asset('storage/' . $advisor->image) }}"
                            alt="{{ $advisor->title }}"
                            class="img-fluid float-start me-4 mb-3 rounded"
                            loading="lazy"
                            decoding="async"
                            style="max-width: 45%; height: auto; object-fit: cover; box-shadow: 0 0 15px rgba(255, 133, 0, 0.2);" />
                        @endif

                        <div class="text-content text-light">
                            {!! $advisor->description !!}
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

{{-- İletişim CTA Section --}}
<section class="py-5 position-relative">
    <div class="container">
        <div class="card card-sci-fi text-center">
            <div class="card-body p-5">
                <h3 class="text-white font-weight-bold mb-3">{{ $advisor->title }} Hakkında Daha Fazla Bilgi</h3>
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

@endsection