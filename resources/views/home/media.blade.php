@extends('layout.master')

@section('content')

{{-- ===== HERO SECTION ===== --}}
<section class="page-header mt-5 page-header-modern section position-relative border-0 m-0 mb-5"
    style="background-image: linear-gradient(rgba(3, 6, 18, 0.82), rgba(3, 6, 18, 0.82)), url({{ asset('images/modules/all.jpg') }}); background-position: center; background-size: cover;">
    <div class="container position-relative text-center d-flex align-items-center justify-content-center">
        <div class="d-flex flex-column align-items-center">
            <div class="sci-fi-icon-ring mb-3" style="width: 64px; height: 64px; font-size: 1.6rem;">
                <i class="fas fa-images"></i>
            </div>
            <h1 class="section-title-glow text-white font-weight-bold">Medya Galerisi</h1>
            <p class="text-light opacity-7 mb-0 text-4">Ofisimiz, ekibimiz ve projelerimizden kareler</p>
        </div>
    </div>
</section>

{{-- ===== GALERİ İÇERİK ===== --}}
<div class="container py-4 pb-5">

    @if(count($photos) > 0)

    {{-- Filtre Butonları --}}
    <div class="text-center mb-5">
        <div class="d-inline-flex flex-wrap gap-2 justify-content-center">
            <button class="media-filter-btn active" data-filter="all">
                <i class="fas fa-th me-1"></i> Tümü
                <span class="media-filter-count">{{ count($photos) }}</span>
            </button>
        </div>
    </div>

    {{-- Galeri Grid --}}
    <div class="media-gallery-grid" id="mediaGallery">
        @foreach($photos as $index => $photo)
        <div class="media-gallery-item appear-animation" data-appear-animation="fadeInUpShorter"
            data-appear-animation-delay="{{ ($index % 6) * 100 + 100 }}">
            <div class="media-card" data-index="{{ $index }}">
                <img src="{{ $photo['src'] }}"
                    alt="{{ $photo['alt'] }}"
                    class="media-card-img"
                    loading="lazy"
                    decoding="async" />
                <div class="media-card-overlay">
                    <div class="media-card-overlay-content">
                        <i class="fas fa-search-plus media-card-zoom-icon"></i>
                        <span class="media-card-caption">{{ str_replace(['-', '_'], ' ', $photo['alt']) }}</span>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>

    @else

    {{-- Boş Durum --}}
    <div class="text-center py-5">
        <div class="card card-sci-fi mx-auto" style="max-width: 600px;">
            <div class="card-body p-5">
                <div class="sci-fi-icon-ring mx-auto mb-4" style="width: 80px; height: 80px; font-size: 2rem;">
                    <i class="fas fa-camera"></i>
                </div>
                <h3 class="text-white font-weight-bold mb-3">Galeri Yakında Hazır</h3>
                <p class="text-light opacity-7 mb-4">
                    Ofisimiz, ekibimiz ve projelerimizden fotoğrafları çok yakında burada paylaşacağız.
                    <br>Bizi takip etmeye devam edin!
                </p>
                <div class="d-flex justify-content-center gap-3 flex-wrap">
                    <a href="{{ route('home.index') }}"
                        class="btn btn-rounded font-weight-bold text-2 px-4 py-2 text-color-light"
                        style="background: linear-gradient(90deg, #ff8c00 0%, #ff5100 100%); border: none;">
                        <i class="fas fa-home me-2"></i>Anasayfaya Dön
                    </a>
                    <a href="{{ route('contact-us') }}"
                        class="btn btn-outline-light btn-rounded font-weight-bold text-2 px-4 py-2">
                        <i class="fas fa-envelope me-2"></i>İletişime Geç
                    </a>
                </div>
            </div>
        </div>
    </div>

    @endif
</div>

{{-- ===== LIGHTBOX MODAL ===== --}}
<div class="media-lightbox" id="mediaLightbox">
    <button class="media-lightbox-close" id="lightboxClose" aria-label="Kapat">
        <i class="fas fa-times"></i>
    </button>
    <button class="media-lightbox-nav media-lightbox-prev" id="lightboxPrev" aria-label="Önceki">
        <i class="fas fa-chevron-left"></i>
    </button>
    <button class="media-lightbox-nav media-lightbox-next" id="lightboxNext" aria-label="Sonraki">
        <i class="fas fa-chevron-right"></i>
    </button>
    <div class="media-lightbox-content">
        <img id="lightboxImage" src="" alt="" />
        <div class="media-lightbox-caption" id="lightboxCaption"></div>
        <div class="media-lightbox-counter" id="lightboxCounter"></div>
    </div>
</div>

<style>
    /* ===== GALERİ GRID ===== */
    .media-gallery-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
        gap: 1.2rem;
    }

    @media (min-width: 768px) {
        .media-gallery-grid {
            grid-template-columns: repeat(3, 1fr);
        }
    }

    @media (min-width: 1200px) {
        .media-gallery-grid {
            grid-template-columns: repeat(4, 1fr);
        }
    }

    /* ===== KART ===== */
    .media-card {
        position: relative;
        border-radius: 12px;
        overflow: hidden;
        cursor: pointer;
        background: rgba(255, 255, 255, 0.03);
        border: 1px solid rgba(255, 255, 255, 0.08);
        transition: all 0.4s cubic-bezier(0.25, 0.46, 0.45, 0.94);
    }

    .media-card:hover {
        transform: translateY(-6px);
        border-color: rgba(255, 140, 0, 0.35);
        box-shadow: 0 12px 40px rgba(255, 140, 0, 0.12), 0 0 20px rgba(255, 140, 0, 0.06);
    }

    .media-card-img {
        width: 100%;
        height: 220px;
        object-fit: cover;
        display: block;
        transition: transform 0.5s ease;
    }

    .media-card:hover .media-card-img {
        transform: scale(1.08);
    }

    /* ===== HOVER OVERLAY ===== */
    .media-card-overlay {
        position: absolute;
        inset: 0;
        background: linear-gradient(180deg, rgba(3, 6, 18, 0) 30%, rgba(3, 6, 18, 0.85) 100%);
        display: flex;
        align-items: flex-end;
        justify-content: center;
        opacity: 0;
        transition: opacity 0.35s ease;
        padding: 1.2rem;
    }

    .media-card:hover .media-card-overlay {
        opacity: 1;
    }

    .media-card-overlay-content {
        text-align: center;
        width: 100%;
    }

    .media-card-zoom-icon {
        display: block;
        font-size: 1.5rem;
        color: #ff8c00;
        margin-bottom: 0.5rem;
        transform: translateY(10px);
        transition: transform 0.3s ease;
    }

    .media-card:hover .media-card-zoom-icon {
        transform: translateY(0);
    }

    .media-card-caption {
        color: #e2e8f0;
        font-size: 0.85rem;
        font-weight: 500;
        text-transform: capitalize;
        letter-spacing: 0.3px;
    }

    /* ===== FİLTRE BUTONLARI ===== */
    .media-filter-btn {
        background: rgba(255, 255, 255, 0.04);
        border: 1px solid rgba(255, 255, 255, 0.1);
        color: #94a3b8;
        padding: 0.5rem 1.2rem;
        border-radius: 50px;
        font-size: 0.85rem;
        font-weight: 600;
        cursor: pointer;
        transition: all 0.3s ease;
        display: inline-flex;
        align-items: center;
        gap: 0.4rem;
    }

    .media-filter-btn:hover,
    .media-filter-btn.active {
        background: rgba(255, 140, 0, 0.12);
        border-color: rgba(255, 140, 0, 0.35);
        color: #ff8c00;
    }

    .media-filter-count {
        background: rgba(255, 140, 0, 0.2);
        color: #ff8c00;
        font-size: 0.7rem;
        padding: 0.1rem 0.5rem;
        border-radius: 20px;
        font-weight: 700;
    }

    /* ===== LIGHTBOX ===== */
    .media-lightbox {
        position: fixed;
        inset: 0;
        z-index: 99999;
        background: rgba(0, 0, 0, 0.95);
        backdrop-filter: blur(20px);
        display: none;
        align-items: center;
        justify-content: center;
        opacity: 0;
        transition: opacity 0.3s ease;
    }

    .media-lightbox.active {
        display: flex;
        opacity: 1;
    }

    .media-lightbox-content {
        max-width: 90vw;
        max-height: 85vh;
        text-align: center;
        position: relative;
    }

    .media-lightbox-content img {
        max-width: 100%;
        max-height: 78vh;
        object-fit: contain;
        border-radius: 8px;
        box-shadow: 0 0 60px rgba(255, 140, 0, 0.08);
    }

    .media-lightbox-close {
        position: absolute;
        top: 1.5rem;
        right: 1.5rem;
        width: 48px;
        height: 48px;
        border-radius: 50%;
        background: rgba(255, 255, 255, 0.08);
        border: 1px solid rgba(255, 255, 255, 0.15);
        color: #fff;
        font-size: 1.2rem;
        cursor: pointer;
        z-index: 10;
        transition: all 0.3s ease;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .media-lightbox-close:hover {
        background: rgba(255, 81, 0, 0.3);
        border-color: #ff5100;
        transform: rotate(90deg);
    }

    .media-lightbox-nav {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        width: 48px;
        height: 48px;
        border-radius: 50%;
        background: rgba(255, 255, 255, 0.06);
        border: 1px solid rgba(255, 255, 255, 0.12);
        color: #fff;
        font-size: 1rem;
        cursor: pointer;
        z-index: 10;
        transition: all 0.3s ease;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .media-lightbox-nav:hover {
        background: rgba(255, 140, 0, 0.2);
        border-color: rgba(255, 140, 0, 0.4);
    }

    .media-lightbox-prev {
        left: 1.5rem;
    }

    .media-lightbox-next {
        right: 1.5rem;
    }

    .media-lightbox-caption {
        color: #e2e8f0;
        font-size: 0.95rem;
        font-weight: 500;
        margin-top: 1rem;
        text-transform: capitalize;
    }

    .media-lightbox-counter {
        color: #64748b;
        font-size: 0.8rem;
        margin-top: 0.4rem;
    }

    /* ===== RESPONSIVE ===== */
    @media (max-width: 576px) {
        .media-gallery-grid {
            grid-template-columns: repeat(2, 1fr);
            gap: 0.6rem;
        }

        .media-card-img {
            height: 150px;
        }

        .media-lightbox-nav {
            width: 36px;
            height: 36px;
            font-size: 0.8rem;
        }

        .media-lightbox-prev {
            left: 0.5rem;
        }

        .media-lightbox-next {
            right: 0.5rem;
        }
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const lightbox = document.getElementById('mediaLightbox');
        const lightboxImg = document.getElementById('lightboxImage');
        const lightboxCaption = document.getElementById('lightboxCaption');
        const lightboxCounter = document.getElementById('lightboxCounter');
        const closeBtn = document.getElementById('lightboxClose');
        const prevBtn = document.getElementById('lightboxPrev');
        const nextBtn = document.getElementById('lightboxNext');

        const cards = document.querySelectorAll('.media-card');
        let currentIndex = 0;
        const images = [];

        // Tüm görselleri topla
        cards.forEach(function(card, i) {
            const img = card.querySelector('.media-card-img');
            const caption = card.querySelector('.media-card-caption');
            images.push({
                src: img.src,
                alt: img.alt,
                caption: caption ? caption.textContent : ''
            });

            card.addEventListener('click', function() {
                openLightbox(i);
            });
        });

        function openLightbox(index) {
            currentIndex = index;
            updateLightbox();
            lightbox.classList.add('active');
            document.body.style.overflow = 'hidden';
        }

        function closeLightbox() {
            lightbox.classList.remove('active');
            document.body.style.overflow = '';
        }

        function updateLightbox() {
            if (images.length === 0) return;
            lightboxImg.src = images[currentIndex].src;
            lightboxImg.alt = images[currentIndex].alt;
            lightboxCaption.textContent = images[currentIndex].caption;
            lightboxCounter.textContent = (currentIndex + 1) + ' / ' + images.length;
        }

        function nextImage() {
            currentIndex = (currentIndex + 1) % images.length;
            updateLightbox();
        }

        function prevImage() {
            currentIndex = (currentIndex - 1 + images.length) % images.length;
            updateLightbox();
        }

        if (closeBtn) closeBtn.addEventListener('click', closeLightbox);
        if (nextBtn) nextBtn.addEventListener('click', nextImage);
        if (prevBtn) prevBtn.addEventListener('click', prevImage);

        // Lightbox dışına tıklama
        if (lightbox) {
            lightbox.addEventListener('click', function(e) {
                if (e.target === lightbox || e.target.classList.contains('media-lightbox-content')) {
                    closeLightbox();
                }
            });
        }

        // Klavye kısayolları
        document.addEventListener('keydown', function(e) {
            if (!lightbox.classList.contains('active')) return;
            if (e.key === 'Escape') closeLightbox();
            if (e.key === 'ArrowRight') nextImage();
            if (e.key === 'ArrowLeft') prevImage();
        });
    });
</script>

@endsection