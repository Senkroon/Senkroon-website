@extends('layout.master')

@section('content')
<section class="sci-fi-section position-relative overflow-hidden">
    <div class="bg-grid"></div>
    <div class="sci-fi-content">
        <section class="page-header mt-5  page-header-modern section position-relative border-0 m-0 mb-5"
            style="background-image: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url({{ asset('images/modules/all.jpg') }}); background-position: center; background-size: cover;">
            <div class="container position-relative pb-4 mb-4 d-flex align-items-center justify-content-center">
                <div class="text-center">
                    <div class="sci-fi-icon-ring mb-4" style="width: 100px; height: 100px; font-size: 2.5rem;">
                        <i class="fas fa-user-tie"></i>
                    </div>
                    <h2 class="section-title-glow font-weight-bold text-white text-9 mb-2">Danışmanlık Çözümleri</h2>
                    <p class="text-light opacity-7 mb-0">Uzmanlarımız, çeşitli alanlarda sizlere en iyi hizmeti sunmak için buradalar.</p>
                </div>
            </div>
        </section>

        <div class="container mt-n5">


            <div id="advisor-list" class="row gx-4 gy-4">
                @foreach ($advisors as $advisor)
                <div class="col-md-6 col-lg-3">
                    <div class="card card-sci-fi h-100">
                        <div class="overflow-hidden">
                            <img src="{{ asset('storage/' . $advisor->image) }}" class="img-fluid w-100"
                                alt="{{ $advisor->title }}" style="object-fit: cover; height: 260px;" />
                        </div>
                        <div class="card-body d-flex flex-column">
                            <div class="d-flex align-items-center mb-3">
                                <div class="sci-fi-icon-ring me-3" style="width: 48px; height: 48px; font-size: 1.2rem;">
                                    <i class="fas fa-user-md"></i>
                                </div>
                                <h5 class="card-title font-weight-bold text-white mb-0">{{ $advisor->title }}</h5>
                            </div>
                            <p class="card-text text-light mb-4">{!! Str::limit($advisor->description, 100) !!}</p>
                            @if ($advisor->slug)
                            <a href="{{ route('advisors.show', $advisor->slug) }}" class="btn btn-outline btn-light sci-fi-btn mt-auto">Detayları Görüntüle</a>
                            @endif
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
@endsection