@extends('layout.master')

@section('content')
    @php use Illuminate\Support\Str; @endphp
    <section class="sci-fi-section position-relative overflow-hidden">
        <div class="bg-grid"></div>
        <div class="sci-fi-content">
            <section class="page-header page-header-modern section position-relative border-0 m-0 mb-5"
                style="background-image: linear-gradient(rgba(0, 0, 0, 0.65), rgba(0, 0, 0, 0.65)), url({{ asset('images/modules/all.jpg') }}); background-position: center; background-size: cover;">
                <div class="container position-relative pb-3 mb-3 text-center">
                    <div class="sci-fi-icon-ring mx-auto mb-4" style="width: 90px; height: 90px; font-size: 1.6rem;">
                        <i class="fas fa-cubes"></i>
                    </div>
                    <h1 class="section-title-glow text-white font-weight-bold mb-2">
                        @if ($category === 'uyumsoft')
                            Uyumsoft Çözümleri
                        @else
                            Workcube Modülleri
                        @endif
                    </h1>
                    <p class="text-light opacity-7 mb-0">Modüllerimizi modern, şeffaf ve güçlü bir sci-fi tasarım diliyle keşfedin.</p>
                </div>
            </section>

            <div class="container py-5">
                <div class="glass-panel card-sci-fi p-4 p-md-5">
                    <div class="row g-4">
                        @forelse($modules as $m)
                            @php
                                $cardImg = $m->cover_image_url;
                            @endphp
                            <div class="col-md-6 col-lg-3">
                                <div class="card card-sci-fi h-100 border-0 overflow-hidden">
                                    <div class="position-relative" style="min-height: 200px;">
                                        <img src="{{ $cardImg }}" class="w-100 h-100 object-fit-cover" alt="{{ $m->title }}">
                                    </div>
                                    <div class="card-body p-4 d-flex flex-column">
                                        <h4 class="text-white mb-2" style="min-height: 56px; overflow: hidden;">
                                            {{ $m->title }}
                                        </h4>
                                        @if ($m->short_description)
                                            <p class="text-light opacity-8 mb-4" style="min-height: 60px; overflow: hidden;">
                                                {{ Str::limit($m->short_description, 120) }}
                                            </p>
                                        @else
                                            <p class="text-light opacity-8 mb-4" style="min-height: 60px;"></p>
                                        @endif

                                        <div class="mt-auto text-end">
                                            <a href="{{ route('modules.show', [$category, $m->slug]) }}" class="btn sci-fi-btn btn-primary">Detay</a>
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
            </div>
        </div>
    </section>
@endsection
