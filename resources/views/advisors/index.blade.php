@extends('layout.master')

@section('content')
@php use Illuminate\Support\Str; @endphp

{{-- ===== HERO SECTION ===== --}}
<section class="page-header mt-5 page-header-modern section position-relative border-0 m-0 mb-5"
    style="background-image: linear-gradient(rgba(0, 0, 0, 0.65), rgba(0, 0, 0, 0.65)), url({{ asset('images/modules/all.jpg') }}); background-position: center; background-size: cover;">
    <div class="container position-relative text-center d-flex align-items-center justify-content-center">
        <div>
            <h1 class="section-title-glow text-white font-weight-bold">Danışmanlık Çözümleri</h1>
            <p class="text-light opacity-7 mb-0">Uzman ekibimizle işletmenizin ihtiyaçlarına özel çözümler sunuyoruz.</p>
        </div>
    </div>
</section>

{{-- ===== ADVISOR CARDS ===== --}}
<div class="container py-4 pb-5">
    <div class="row g-4">
        @foreach ($advisors as $advisor)
        <div class="col-md-6 col-lg-3 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="{{ $loop->index * 80 }}">
            <div class="card card-sci-fi h-100 border-0 overflow-hidden">
                <div class="position-relative" style="height: 200px; overflow: hidden;">
                    <img src="{{ asset('storage/' . $advisor->image) }}"
                        class="w-100 h-100" style="object-fit: cover;"
                        alt="{{ $advisor->title }}">
                    <div style="position: absolute; inset: 0; background: linear-gradient(to bottom, transparent 40%, rgba(3,6,18,0.85));"></div>
                </div>
                <div class="card-body p-4 d-flex flex-column">
                    <div class="d-flex align-items-center mb-3">
                        <div class="sci-fi-icon-ring me-3 flex-shrink-0" style="width: 44px; height: 44px; font-size: 1.1rem;">
                            <i class="fas fa-user-tie"></i>
                        </div>
                        <h5 class="card-title font-weight-bold text-white mb-0" style="font-size: 0.95rem;">{{ $advisor->title }}</h5>
                    </div>
                    <p class="card-text text-light small mb-4 flex-grow-1">{{ Str::limit(strip_tags($advisor->description), 100) }}</p>
                    @if ($advisor->slug)
                    <div class="mt-auto text-end">
                        <a href="{{ route('advisors.show', $advisor->slug) }}"
                            class="btn btn-sm btn-rounded text-white px-4"
                            style="background: linear-gradient(90deg, #ff8c00, #ff5100); border: none;">
                            Detay <i class="fas fa-arrow-right ms-1"></i>
                        </a>
                    </div>
                    @endif
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

@endsection