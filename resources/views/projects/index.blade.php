@extends('layout.master')

@section('content')
    <section class="page-header page-header-modern section position-relative border-0 m-0"
        style="background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url({{ asset('images/modules/all.jpg') }}); background-position: center; background-size: cover;">
        <div class="container position-relative py-5">
            <div class="text-center">
                <h1 class="font-weight-bold text-white text-9 mb-3">Projelerimiz</h1>
                <p class="text-white text-4 mb-0">Başarı hikayelerimiz ve referanslarımız</p>
            </div>
        </div>
    </section>

    <div class="container py-5">
        <div class="row align-items-center mb-4">
            <div class="col-lg-7 mb-4 mb-lg-0">
                <h2 class="font-weight-bold text-6 mb-3">Başarı Hikayelerimiz</h2>
                <p class="text-muted mb-0">Senkroon Yazılım olarak, çeşitli sektörlerden müşterilerimize sunduğumuz ERP çözümleri ile onların iş süreçlerini dijitalleştiriyor ve optimize ediyoruz.</p>
            </div>
            <div class="col-lg-5">
                <!-- Filtre Bölümü -->
                <div class="card shadow-sm border-0">
                    <div class="card-body p-3">
                        <h6 class="font-weight-bold mb-3"><i class="fas fa-filter me-2"></i>Filtrele</h6>
                        <form method="GET" action="{{ route('projects.index') }}">
                            <div class="row g-2">
                                @if($sectors->isNotEmpty())
                                    <div class="col-md-6">
                                        <label class="form-label small">Sektör</label>
                                        <select name="sector" class="form-select form-select-sm" onchange="this.form.submit()">
                                            <option value="">Tüm Sektörler</option>
                                            @foreach($sectors as $sector)
                                                <option value="{{ $sector }}" {{ request('sector') == $sector ? 'selected' : '' }}>
                                                    {{ $sector }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                @endif

                                @if($statuses->isNotEmpty())
                                    <div class="col-md-6">
                                        <label class="form-label small">Durum</label>
                                        <select name="status" class="form-select form-select-sm" onchange="this.form.submit()">
                                            <option value="">Tüm Durumlar</option>
                                            @foreach($statuses as $status)
                                                <option value="{{ $status }}" {{ request('status') == $status ? 'selected' : '' }}>
                                                    {{ ucfirst($status) }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                @endif

                                <div class="col-12">
                                    <div class="form-check mt-2">
                                        <input class="form-check-input" type="checkbox" name="featured" value="1"
                                            id="featuredCheck" {{ request('featured') == '1' ? 'checked' : '' }}
                                            onchange="this.form.submit()">
                                        <label class="form-check-label small" for="featuredCheck">
                                            <i class="fas fa-star text-warning"></i> Sadece Öne Çıkanlar
                                        </label>
                                    </div>
                                </div>

                                @if(request()->hasAny(['sector', 'status', 'featured']))
                                    <div class="col-12">
                                        <a href="{{ route('projects.index') }}" class="btn btn-sm btn-outline-secondary mt-2 w-100">
                                            <i class="fas fa-times me-1"></i> Filtreleri Temizle
                                        </a>
                                    </div>
                                @endif
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Projeler -->
        <div class="row g-4">
            @forelse ($projects as $project)
                <div class="col-md-6 col-lg-4">
                    <div class="card border-0 shadow-sm h-100 project-card">
                        @if($project->cover_image)
                            <img src="{{ asset('storage/' . $project->cover_image) }}"
                                 class="card-img-top"
                                 alt="{{ $project->title }}"
                                 style="height: 220px; object-fit: cover;">
                        @else
                            <div class="card-img-top bg-light d-flex align-items-center justify-content-center"
                                 style="height: 220px;">
                                <i class="fas fa-project-diagram fa-3x text-muted"></i>
                            </div>
                        @endif

                        <div class="card-body d-flex flex-column p-4">
                            @if($project->is_featured)
                                <span class="badge bg-warning text-dark mb-2 align-self-start">
                                    <i class="fas fa-star"></i> Öne Çıkan
                                </span>
                            @endif

                            <h5 class="card-title font-weight-bold mb-3">{{ $project->title }}</h5>

                            <div class="mb-3">
                                @if($project->client_name)
                                    <p class="text-muted small mb-1">
                                        <i class="fas fa-building me-1"></i> {{ $project->client_name }}
                                    </p>
                                @endif

                                @if($project->sector || $project->status)
                                    <div class="mb-2">
                                        @if($project->sector)
                                            <span class="badge bg-info text-white me-1">
                                                {{ $project->sector }}
                                            </span>
                                        @endif

                                        @if($project->status)
                                            <span class="badge bg-{{ $project->status_badge_color }}">
                                                {{ ucfirst($project->status) }}
                                            </span>
                                        @endif
                                    </div>
                                @endif
                            </div>

                            @if($project->short_description)
                                <p class="card-text text-muted small flex-grow-1">{{ Str::limit($project->short_description, 100) }}</p>
                            @endif

                            <div class="mt-auto">
                                {{-- @if($project->technologies_used && is_array($project->technologies_used) && count($project->technologies_used) > 0)
                                    <div class="mb-3">
                                        @foreach(array_slice($project->technologies_used, 0, 3) as $tech)
                                            <span class="badge bg-secondary me-1 mb-1 small">{{ $tech }}</span>
                                        @endforeach
                                        @if(count($project->technologies_used) > 3)
                                            <span class="badge bg-secondary small">+{{ count($project->technologies_used) - 3 }}</span>
                                        @endif
                                    </div>
                                @endif --}}

                                <a href="{{ route('projects.show', $project->slug) }}"
                                   class="btn btn-primary btn-sm w-100">
                                    Detayları Görüntüle <i class="fas fa-arrow-right ms-1"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-12">
                    <div class="alert alert-info text-center py-5">
                        <i class="fas fa-info-circle fa-3x mb-3 d-block"></i>
                        <h5 class="mb-2">Henüz proje bulunmamaktadır.</h5>
                        <p class="text-muted mb-0">Filtreleri değiştirerek farklı projeleri görebilirsiniz.</p>
                    </div>
                </div>
            @endforelse
        </div>

        <!-- Pagination -->
        @if($projects->hasPages())
            <div class="d-flex justify-content-center mt-5 pt-4">
                {{ $projects->links() }}
            </div>
        @endif
    </div>

    <style>
        .project-card {
            transition: all 0.3s ease;
            overflow: hidden;
        }

        .project-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 12px 30px rgba(0,0,0,0.15) !important;
        }

        .project-card img {
            transition: transform 0.3s ease;
        }

        .project-card:hover img {
            transform: scale(1.05);
        }

        .badge {
            font-weight: 500;
            padding: 0.35em 0.65em;
        }

        .form-select-sm {
            font-size: 0.875rem;
        }

        .page-header {
            min-height: 250px;
        }
    </style>
@endsection
