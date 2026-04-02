@extends('layout.master')

@section('content')
@php use Illuminate\Support\Str; @endphp

{{-- ===== HERO SECTION ===== --}}
<section class="page-header mt-5 page-header-modern section position-relative border-0 m-0 mb-5"
    style="background-image: linear-gradient(rgba(0, 0, 0, 0.65), rgba(0, 0, 0, 0.65)), url({{ asset('images/modules/all.jpg') }}); background-position: center; background-size: cover; ">
    <div class="container position-relative  text-center d-flex align-items-center justify-content-center">
        <div>

            <h1 class="section-title-glow text-white font-weight-bold ">
                @if ($category === 'uyumsoft')
                Uyumsoft Çözümleri
                @else
                Workcube Modülleri
                @endif
            </h1>
            <p class="text-light opacity-7 mb-0">Modüllerimizi keşfedin ve işletmenize en uygun çözümü seçin.</p>
        </div>
    </div>
</section>

{{-- ===== MODULE CARDS ===== --}}
<div class="container py-4 pb-5">
    <div class="row g-4">
        @forelse($modules as $m)
        @php $cardImg = $m->cover_image_url; @endphp
        <div class="col-md-6 col-lg-3 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="{{ $loop->index * 80 }}">
            <div class="card card-sci-fi h-100 border-0 overflow-hidden">
                <div class="position-relative" style="height: 180px; overflow: hidden;">
                    <img src="{{ $cardImg }}" class="w-100 h-100" style="object-fit: cover;" alt="{{ $m->title }}">
                    <div style="position: absolute; inset: 0; background: linear-gradient(to bottom, transparent 40%, rgba(3,6,18,0.85));"></div>
                </div>
                <div class="card-body p-4 d-flex flex-column">
                    <h4 class="text-white mb-2 font-weight-bold" style="font-size: 1rem;">{{ $m->title }}</h4>
                    @if ($m->short_description)
                    <p class="text-light opacity-8 mb-4 small flex-grow-1">{{ Str::limit($m->short_description, 110) }}</p>
                    @else
                    <div class="flex-grow-1"></div>
                    @endif
                    <div class="mt-auto text-end">
                        <a href="{{ route('modules.show', [$category, $m->slug]) }}" class="btn btn-sm btn-rounded text-white px-4" style="background: linear-gradient(90deg, #ff8c00, #ff5100); border: none;">
                            Detay <i class="fas fa-arrow-right ms-1"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        @empty
        <div class="col-12">
            <div class="alert alert-warning">Henüz aktif modül bulunmuyor.</div>
        </div>
        @endforelse
    </div>
</div>

@endsection