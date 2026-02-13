@extends('layout.master')



@section('content')
    <section class="page-header page-header-modern section position-relative border-0 m-0 mb-5"
        style="background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url({{ asset('images/modules/all.jpg') }}); background-position: center; background-size: cover;">
        <div class="container position-relative pb-2 mb-2 d-flex align-items-center justify-content-center">
            <h2 class="font-weight-bold text-white text-9 mb-0">Hizmetlerimiz </h2>
        </div>
    </section>


    <div class="container mt-5">
        <h3 class="font-weight-bold text-5 mb-4">Danışmanlık Çözümleri</h3>
        <p class="text-muted">Uzmanlarımız, çeşitli alanlarda sizlere en iyi hizmeti sunmak için buradalar. Aşağıda
            danışmanlarımızın listesi bulunmaktadır.</p>
    </div>

    <div class="container pb-5 mb-5">
        <div class="row">
            @foreach ($advisors as $advisor)
                <div class="col-md-6 col-lg-3 mb-4">
                    <div class="card border-0 shadow-sm h-100">
                        <img src="{{ asset('storage/' . $advisor->image) }}" class="card-img-top"
                            alt="{{ $advisor->title }}">
                        <div class="card-body">
                            <h5 class="card-title font-weight-bold">{{ $advisor->title }}</h5>
                            <p class="card-text">{!! Str::limit($advisor->description, 100) !!}</p>
                            @if ($advisor->slug)
                                <a href="{{ route('advisors.show', $advisor->slug) }}" class="btn btn-primary">Detayları
                                    Görüntüle</a>
                            @endif
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
