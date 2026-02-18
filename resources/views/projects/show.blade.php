@extends('layout.master')

@section('content')
    <!-- Hero Section -->
    <section class="page-header page-header-modern section position-relative border-0 m-0 mb-5"
        style="background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url({{ $project->cover_image ? asset('storage/' . $project->cover_image) : asset('images/modules/all.jpg') }}); background-position: center; background-size: cover; min-height: 400px;">
        <div class="container position-relative pb-2 mb-2 d-flex align-items-center justify-content-center" style="min-height: 400px;">
            <div class="text-center">
                <h1 class="font-weight-bold text-white text-9 mb-3">{{ $project->title }}</h1>
                @if($project->client_name)
                    <p class="text-white text-4 mb-3">
                        <i class="fas fa-building"></i> {{ $project->client_name }}
                    </p>
                @endif
                <div>
                    @if($project->sector)
                        <span class="badge bg-info text-white me-2 mb-2 px-3 py-2">
                            <i class="fas fa-tag"></i> {{ $project->sector }}
                        </span>
                    @endif
                    @if($project->status)
                        <span class="badge bg-{{ $project->status_badge_color }} me-2 mb-2 px-3 py-2">
                            <i class="fas fa-check-circle"></i> {{ ucfirst($project->status) }}
                        </span>
                    @endif
                    @if($project->is_featured)
                        <span class="badge bg-warning text-dark mb-2 px-3 py-2">
                            <i class="fas fa-star"></i> Öne Çıkan Proje
                        </span>
                    @endif
                </div>
            </div>
        </div>
    </section>

    <div class="container mt-5">
        <div class="row">
            <!-- Ana İçerik -->
            <div class="col-lg-8">
                <!-- Proje Özeti -->
                @if($project->short_description)
                    <div class="card mb-4 border-0 shadow-sm">
                        <div class="card-body p-4">
                            <h3 class="font-weight-bold text-primary mb-3">
                                <i class="fas fa-info-circle"></i> Proje Özeti
                            </h3>
                            <p class="lead text-muted text-4">{{ $project->short_description }}</p>
                        </div>
                    </div>
                @endif

                <!-- Proje Detayları -->
                @if($project->content)
                    <div class="card mb-4 border-0 shadow-sm">
                        <div class="card-body p-4">
                            <h3 class="font-weight-bold text-primary mb-3">
                                <i class="fas fa-file-alt"></i> Proje Detayları
                            </h3>
                            <div class="text-content">
                                {!! $project->content !!}
                            </div>
                        </div>
                    </div>
                @endif

                <!-- Özellikler -->
                @if($project->features && is_array($project->features) && count($project->features) > 0)
                    <div class="card mb-4 border-0 shadow-sm">
                        <div class="card-body p-4">
                            <h3 class="font-weight-bold text-primary mb-3">
                                <i class="fas fa-list-check"></i> Proje Özellikleri
                            </h3>
                            <ul class="list-unstyled">
                                @foreach($project->features as $feature)
                                    <li class="mb-2">
                                        <i class="fas fa-check-circle text-success me-2"></i>
                                        {{ $feature }}
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                @endif

                <!-- Zorluklar ve Çözümler -->
                @if($project->challenges || $project->solutions)
                    <div class="card mb-4 border-0 shadow-sm">
                        <div class="card-body p-4">
                            <h3 class="font-weight-bold text-primary mb-4">
                                <i class="fas fa-lightbulb"></i> Zorluklar ve Çözümler
                            </h3>

                            @if($project->challenges)
                                <div class="mb-4">
                                    <h5 class="font-weight-bold text-danger mb-3">
                                        <i class="fas fa-exclamation-triangle"></i> Karşılaşılan Zorluklar
                                    </h5>
                                    <div class="text-muted">
                                        {!! nl2br(e($project->challenges)) !!}
                                    </div>
                                </div>
                            @endif

                            @if($project->solutions)
                                <div>
                                    <h5 class="font-weight-bold text-success mb-3">
                                        <i class="fas fa-check-double"></i> Sunulan Çözümler
                                    </h5>
                                    <div class="text-muted">
                                        {!! nl2br(e($project->solutions)) !!}
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
                @endif

                <!-- Sonuçlar -->
                @if($project->results)
                    <div class="card mb-4 border-0 shadow-sm bg-light">
                        <div class="card-body p-4">
                            <h3 class="font-weight-bold text-success mb-3">
                                <i class="fas fa-trophy"></i> Elde Edilen Sonuçlar
                            </h3>
                            <div class="text-muted">
                                {!! nl2br(e($project->results)) !!}
                            </div>
                        </div>
                    </div>
                @endif

                <!-- Müşteri Görüşü -->
                @if($project->testimonial)
                    <div class="card mb-4 border-0 shadow-sm bg-primary text-white">
                        <div class="card-body p-4">
                            <h3 class="font-weight-bold mb-3">
                                <i class="fas fa-quote-left"></i> Müşteri Görüşü
                            </h3>
                            <p class="lead mb-3">{{ $project->testimonial }}</p>
                            @if($project->testimonial_author)
                                <p class="mb-0 font-weight-bold">
                                    - {{ $project->testimonial_author }}
                                    @if($project->testimonial_position)
                                        <small class="d-block font-weight-normal">{{ $project->testimonial_position }}</small>
                                    @endif
                                </p>
                            @endif
                        </div>
                    </div>
                @endif

                <!-- Galeri -->
                @if($project->gallery_images && is_array($project->gallery_images) && count($project->gallery_images) > 0)
                    <div class="card mb-4 border-0 shadow-sm">
                        <div class="card-body p-4">
                            <h3 class="font-weight-bold text-primary mb-3">
                                <i class="fas fa-images"></i> Proje Galerisi
                            </h3>
                            <div class="row g-3">
                                @foreach($project->gallery_images as $image)
                                    <div class="col-md-4">
                                        <a href="{{ asset('storage/' . $image) }}" data-lightbox="project-gallery">
                                            <img src="{{ asset('storage/' . $image) }}"
                                                 class="img-fluid rounded shadow-sm"
                                                 alt="{{ $project->title }}"
                                                 style="height: 200px; width: 100%; object-fit: cover;">
                                        </a>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                @endif

                <!-- Video -->
                @if($project->video_url)
                    <div class="card mb-4 border-0 shadow-sm">
                        <div class="card-body p-4">
                            <h3 class="font-weight-bold text-primary mb-3">
                                <i class="fas fa-video"></i> Proje Videosu
                            </h3>
                            <div class="ratio ratio-16x9">
                                <iframe src="{{ $project->video_url }}" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                @endif
            </div>

            <!-- Sidebar -->
            <div class="col-lg-4">
                <!-- Proje Bilgileri -->
                <div class="card mb-4 border-0 shadow-sm">
                    <div class="card-header bg-primary text-white">
                        <h5 class="mb-0 font-weight-bold">
                            <i class="fas fa-info"></i> Proje Bilgileri
                        </h5>
                    </div>
                    <div class="card-body">
                        <ul class="list-unstyled mb-0">
                            @if($project->client_name)
                                <li class="mb-3 pb-3 border-bottom">
                                    <strong><i class="fas fa-building text-primary me-2"></i> Müşteri:</strong>
                                    <br>{{ $project->client_name }}
                                </li>
                            @endif

                            @if($project->sector)
                                <li class="mb-3 pb-3 border-bottom">
                                    <strong><i class="fas fa-tag text-primary me-2"></i> Sektör:</strong>
                                    <br>{{ $project->sector }}
                                </li>
                            @endif

                            @if($project->location)
                                <li class="mb-3 pb-3 border-bottom">
                                    <strong><i class="fas fa-map-marker-alt text-primary me-2"></i> Konum:</strong>
                                    <br>{{ $project->location }}
                                </li>
                            @endif

                            @if($project->project_date)
                                <li class="mb-3 pb-3 border-bottom">
                                    <strong><i class="fas fa-calendar-start text-primary me-2"></i> Başlangıç:</strong>
                                    <br>{{ $project->project_date->format('d.m.Y') }}
                                </li>
                            @endif

                            @if($project->completion_date)
                                <li class="mb-3 pb-3 border-bottom">
                                    <strong><i class="fas fa-calendar-check text-primary me-2"></i> Tamamlanma:</strong>
                                    <br>{{ $project->completion_date->format('d.m.Y') }}
                                </li>
                            @endif

                            @if($project->duration_in_days)
                                <li class="mb-3 pb-3 border-bottom">
                                    <strong><i class="fas fa-clock text-primary me-2"></i> Süre:</strong>
                                    <br>{{ $project->duration_in_days }} gün
                                </li>
                            @endif

                            @if($project->team_size)
                                <li class="mb-3 pb-3 border-bottom">
                                    <strong><i class="fas fa-users text-primary me-2"></i> Ekip Büyüklüğü:</strong>
                                    <br>{{ $project->team_size }} kişi
                                </li>
                            @endif

                            @if($project->budget_range)
                                <li class="mb-3 pb-3 border-bottom">
                                    <strong><i class="fas fa-dollar-sign text-primary me-2"></i> Bütçe Aralığı:</strong>
                                    <br>{{ $project->budget_range }}
                                </li>
                            @endif

                            <li>
                                <strong><i class="fas fa-flag text-primary me-2"></i> Durum:</strong>
                                <br>
                                <span class="badge bg-{{ $project->status_badge_color }} mt-1">
                                    {{ ucfirst($project->status) }}
                                </span>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Teknolojiler -->
                {{-- @if($project->technologies_used && is_array($project->technologies_used) && count($project->technologies_used) > 0)
                    <div class="card mb-4 border-0 shadow-sm">
                        <div class="card-header  text-white bg-secondary">
                            <h5 class="mb-0 font-weight-bold">
                                <i class="fas fa-code"></i> Kullanılan Teknolojiler
                            </h5>
                        </div>
                        <div class="card-body">
                            @foreach($project->technologies_used as $tech)
                                <span class="badge bg-secondary me-1 mb-2">{{ $tech }}</span>
                            @endforeach
                        </div>
                    </div>
                @endif --}}

                <!-- İletişim CTA -->
                <div class="card border-0 shadow-sm bg-light">
                    <div class="card-body text-center p-4">
                        <i class="fas fa-handshake fa-3x text-primary mb-3"></i>
                        <h5 class="font-weight-bold mb-3">Benzer Bir Proje mi İstiyorsunuz?</h5>
                        <p class="text-muted mb-3">Sizin için de özel bir çözüm geliştirebiliriz.</p>
                        <a href="{{ route('contact-us') }}" class="btn btn-primary btn-lg w-100">
                            <i class="fas fa-envelope"></i> İletişime Geçin
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- İlgili Projeler -->
        @if($relatedProjects && $relatedProjects->count() > 0)
            <div class="row mt-5 pt-5 border-top">
                <div class="col-12">
                    <h3 class="font-weight-bold text-5 mb-4">
                        <i class="fas fa-project-diagram"></i> Benzer Projeler
                    </h3>
                </div>
                @foreach($relatedProjects as $relatedProject)
                    <div class="col-md-4 mb-4">
                        <div class="card border-0 shadow-sm h-100">
                            @if($relatedProject->cover_image)
                                <img src="{{ asset('storage/' . $relatedProject->cover_image) }}"
                                     class="card-img-top"
                                     alt="{{ $relatedProject->title }}"
                                     style="height: 200px; object-fit: cover;">
                            @else
                                <div class="card-img-top bg-light d-flex align-items-center justify-content-center"
                                     style="height: 200px;">
                                    <i class="fas fa-project-diagram fa-3x text-muted"></i>
                                </div>
                            @endif
                            <div class="card-body">
                                <h5 class="card-title font-weight-bold">{{ $relatedProject->title }}</h5>
                                @if($relatedProject->client_name)
                                    <p class="text-muted mb-2">
                                        <i class="fas fa-building"></i> {{ $relatedProject->client_name }}
                                    </p>
                                @endif
                                @if($relatedProject->short_description)
                                    <p class="card-text">{{ Str::limit($relatedProject->short_description, 100) }}</p>
                                @endif
                                <a href="{{ route('projects.show', $relatedProject->slug) }}" class="btn btn-outline-primary btn-sm">
                                    Detayları Gör
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
    </div>

    <div class="container pb-5 mb-5">
        <div class="text-center">
            <a href="{{ route('projects.index') }}" class="btn btn-outline-primary">
                <i class="fas fa-arrow-left"></i> Tüm Projelere Dön
            </a>
        </div>
    </div>
@endsection
