@extends('layout.master')

@section('content')
    @php use Illuminate\Support\Str; @endphp
    <section class="page-header page-header-modern section position-relative border-0 m-0"
        style="background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url({{ asset('images/modules/all.jpg') }}); background-position: center; background-size: cover;">
        <div class="container position-relative pb-3 mb-3">
            <h1 class="text-color-white font-weight-bold mb-2">
                @if ($category === 'uyumsoft')
                    Uyumsoft Çözümleri
                @elseif ($category === 'mikro')
                    Mikro Çözümleri
                @else
                    Workcube Modülleri
                @endif
            </h1>
        </div>
    </section>

    <div class="container py-5">
        <div class="row">
            @forelse($modules as $m)
                @php
                    $cardImg = $m->cover_image_url;
                    // $iconClass = $m->icon ?: 'fas fa-cubes';
                @endphp
                <div class="col-md-6 col-lg-3 mb-4">
                    <div class="card border-0 shadow-sm h-100">
                        <img src="{{ $cardImg }}" class="card-img-top" alt="{{ $m->title }}" style="height: 200px; object-fit: cover;">
                        <div class="card-body p-4 d-flex flex-column">
                            <h4 class="text-color-dark mb-2" style="min-height: 56px; overflow: hidden;">
                                {{ $m->title }}
                            </h4>
                            @if ($m->short_description)
                                <p class="text-3 opacity-8 mb-3" style="min-height: 60px; overflow: hidden;">
                                    {{ Str::limit($m->short_description, 120) }}
                                </p>
                            @else
                                <p class="text-3 opacity-8 mb-3" style="min-height: 60px;"></p>
                            @endif

                            <div class="d-flex align-items-end justify-content-end mt-auto">
                                <a href="{{ route('modules.show', [$category, $m->slug]) }}" class="btn btn-primary mt-2">Detay</a>
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
