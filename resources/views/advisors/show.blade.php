@extends('layout.master')

@section('content')
    <section class="sci-fi-section position-relative overflow-hidden">
        <div class="bg-grid"></div>
        <div class="sci-fi-content">
            <section class="page-header page-header-modern section position-relative border-0 m-0 mb-5"
                style="background-image: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url({{ asset('images/modules/all.jpg') }}); background-position: center; background-size: cover;">
                <div class="container position-relative pb-4 mb-4 d-flex align-items-center justify-content-center">
                    <div class="text-center">
                        <div class="sci-fi-icon-ring mb-4" style="width: 100px; height: 100px; font-size: 2.5rem;">
                            <i class="fas fa-user-tie"></i>
                        </div>
                        <h2 class="section-title-glow font-weight-bold text-white text-9 mb-2">{{ $advisor->title }}</h2>
                        <p class="text-light opacity-7 mb-0">Danışmanlık alanına ait detayları aşağıdan inceleyebilirsiniz.</p>
                    </div>
                </div>
            </section>

            <div class="container mt-5">
                <div class="glass-panel card card-sci-fi mb-4 p-4 p-md-5">
                    <div class="row gy-4 align-items-start">
                        <div class="col-lg-5">
                            <div class="overflow-hidden rounded mb-4 mb-lg-0">
                                <img src="{{ asset("storage/{$advisor->image}") }}" alt="{{ $advisor->title }}"
                                    class="img-fluid w-100" style="object-fit: cover; max-height: 420px; box-shadow: 0 0 30px rgba(50, 150, 255, 0.2);" />
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="text-content text-light">
                                {!! $advisor->description !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
