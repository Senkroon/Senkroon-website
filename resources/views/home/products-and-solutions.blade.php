@extends("layout.master")




@section("content")


<section class="page-header mt-5  page-header-modern section position-relative border-0 m-0 mb-5"
    style="background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url({{ asset('images/modules/all.jpg') }}); background-position: center; background-size: cover;">
    <div class="container position-relative pb-2 mb-2 d-flex align-items-center justify-content-center">
        <h2 class="font-weight-bold text-white text-9 mb-0"> Çözümlerimiz</h2>
    </div>
</section>






<section class="container mb-5">
    <div class="row">
        <div class="col">
            <div class="row mb-5">
                <div class="col text-center">
                    <h2 class="font-weight-bold line-height-2 text-7 mb-1 text-white">Workcube </h2>
                    <span class="d-block text-light text-5 pb-2 mb-2 opacity-7">Uzman kadromuzla size özel
                        çözümler sunuyoruz</span>

                </div>
            </div>

            <div class="container pb-5 mb-5">
                <div class="row">
                    @foreach ($WorkcubeModules->take(3) as $workmodule)
                    <div class="col-md-6 col-lg-4 mb-4">
                        <div class="card card-sci-fi h-100">
                            <img src="{{ $workmodule->cover_image_url }}" class="card-img-top" alt="{{ $workmodule->title }}">
                            <div class="card-body p-4">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="sci-fi-icon-ring me-3">
                                        <i class="fas fa-cube"></i>
                                    </div>
                                    <h5 class="card-title font-weight-bold text-white mb-0" style="line-height:1.3;">{{ $workmodule->title }}</h5>
                                </div>
                                <p class="card-text text-light" style="font-size: 0.95rem;">{!! Str::limit($workmodule->description, 100) !!}</p>
                                @if ($workmodule->slug)
                                <a href="{{ route('modules.show', ['category' => 'workcube', 'module' => $workmodule->slug]) }}"
                                    class="btn sci-fi-btn btn-rounded mt-3 w-100">Detayları Görüntüle</a>
                                @endif
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>

                @if ($WorkcubeModules->count() > 3)
                <div class="row">
                    <div class="col text-center">
                        <a href="{{ route('modules.index', ['category' => 'workcube']) }}"
                            class="btn btn-primary btn-outline btn-rounded font-weight-semibold text-3 btn-px-4 btn-py-2">
                            Tüm Modülleri Görüntüle
                        </a>
                    </div>
                </div>
                @endif
            </div>
        </div>
    </div>
</section>

<hr class="sci-fi-divider my-5">






<section class="container mb-5">
    <div class="row">
        <div class="col">
            <div class="row mb-5">
                <div class="col text-center">
                    <h2 class="font-weight-bold line-height-2 text-7 mb-1 text-white">Uyumsoft </h2>
                    <span class="d-block text-light text-5 pb-2 mb-2 opacity-7">Uzman kadromuzla size özel
                        çözümler sunuyoruz</span>

                </div>
            </div>

            <div class="container pb-5 mb-5">
                <div class="row">
                    @foreach ($uyumsoftModules->take(3) as $module)
                    <div class="col-md-6 col-lg-4 mb-4">
                        <div class="card card-sci-fi gold-theme h-100">
                            <img src="{{ $module->cover_image_url }}" class="card-img-top" alt="{{ $module->title }}">
                            <div class="card-body p-4">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="sci-fi-icon-ring me-3">
                                        <i class="fas fa-layer-group"></i>
                                    </div>
                                    <h5 class="card-title font-weight-bold text-white mb-0" style="line-height:1.3;">{{ $module->title }}</h5>
                                </div>
                                <p class="card-text text-light" style="font-size: 0.95rem;">{!! Str::limit($module->short_description, 100) !!}</p>
                                @if ($module->slug)
                                <a href="{{ route('modules.show', ['uyumsoft', $module->slug]) }}"
                                    class="btn sci-fi-btn btn-rounded mt-3 w-100">Detayları Görüntüle</a>
                                @endif
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>

                @if ($uyumsoftModules->count() > 3)
                <div class="row">
                    <div class="col text-center">
                        <a href="{{ route('modules.index', ['uyumsoft']) }}"
                            class="btn btn-primary btn-outline btn-rounded font-weight-semibold text-3 btn-px-4 btn-py-2">
                            Tüm Modülleri Görüntüle
                        </a>
                    </div>
                </div>
                @endif
            </div>
        </div>
    </div>
</section>
<hr class="sci-fi-divider my-5">


<section class="container mb-5">
    <div class="row">
        <div class="col">
            <div class="row mb-5">
                <div class="col text-center">
                    <h2 class="font-weight-bold line-height-2 text-7 mb-1 text-white">DİA Yazılım</h2>
                    <span class="d-block text-light text-5 pb-2 mb-2 opacity-7">Ön muhasebeden üretime, CRM'den e-ticarete bulut tabanlı kurumsal yönetim sistemi</span>
                </div>
            </div>

            <div class="container pb-5 mb-5">
                <div class="row">
                    @foreach ($diaModules->take(3) as $module)
                    <div class="col-md-6 col-lg-4 mb-4">
                        <div class="card card-sci-fi h-100">
                            @if($module->cover_image_url)
                            <img src="{{ $module->cover_image_url }}" class="card-img-top" alt="{{ $module->title }}">
                            @else
                            <div class="card-img-top d-flex align-items-center justify-content-center bg-dark" style="height: 180px; border-bottom: 1px solid rgba(255,255,255,0.1);">
                                <i class="{{ $module->icon }} fa-4x text-primary opacity-7"></i>
                            </div>
                            @endif
                            <div class="card-body p-4">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="sci-fi-icon-ring me-3">
                                        <i class="{{ $module->icon ?? 'fas fa-cloud' }}"></i>
                                    </div>
                                    <h5 class="card-title font-weight-bold text-white mb-0" style="line-height:1.3;">{{ $module->title }}</h5>
                                </div>
                                <p class="card-text text-light" style="font-size: 0.95rem;">{!! Str::limit($module->short_description, 100) !!}</p>
                                @if ($module->slug)
                                <a href="{{ route('modules.show', ['dia', $module->slug]) }}"
                                    class="btn sci-fi-btn btn-rounded mt-3 w-100">Detayları Görüntüle</a>
                                @endif
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>

                @if ($diaModules->count() > 3)
                <div class="row">
                    <div class="col text-center">
                        <a href="{{ route('modules.index', ['dia']) }}"
                            class="btn btn-primary btn-outline btn-rounded font-weight-semibold text-3 btn-px-4 btn-py-2">
                            Tüm DİA Modüllerini Görüntüle
                        </a>
                    </div>
                </div>
                @endif
            </div>
        </div>
    </div>
</section>
<hr class="sci-fi-divider my-5">


<section class="container mb-5">
    <div class="row">
        <div class="col">
            <div class="row mb-5">
                <div class="col text-center">
                    <h2 class="font-weight-bold line-height-2 text-7 mb-1 text-white">Danışmanlık Alanlarımız</h2>
                    <span class="d-block text-light text-5 pb-2 mb-2 opacity-7">Uzman kadromuzla size özel
                        çözümler sunuyoruz</span>

                </div>
            </div>

            <div class="container pb-5 mb-5">
                <div class="row">
                    @foreach ($advisors->take(3) as $advisor)
                    <div class="col-md-6 col-lg-4 mb-4">
                        <div class="card card-sci-fi h-100">
                            <img src="{{ asset('storage/' . $advisor->image) }}" class="card-img-top" alt="{{ $advisor->title }}">
                            <div class="card-body p-4">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="sci-fi-icon-ring me-3">
                                        <i class="fas fa-user-tie"></i>
                                    </div>
                                    <h5 class="card-title font-weight-bold text-white mb-0" style="line-height:1.3;">{{ $advisor->title }}</h5>
                                </div>
                                <p class="card-text text-light" style="font-size: 0.95rem;">{!! Str::limit($advisor->description, 100) !!}</p>
                                @if ($advisor->slug)
                                <a href="{{ route('advisors.show', $advisor->slug) }}" class="btn sci-fi-btn btn-rounded mt-3 w-100">Detayları Görüntüle</a>
                                @endif
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>

                @if ($advisors->count() > 3)
                <div class="row">
                    <div class="col text-center">
                        <a href="{{ route('advisors.index') }}"
                            class="btn btn-primary btn-outline btn-rounded font-weight-semibold text-3 btn-px-4 btn-py-2">
                            Tüm Danışmanlık Alanlarını Görüntüle
                        </a>
                    </div>
                </div>
                @endif
            </div>
        </div>
    </div>
</section>



@endsection