@extends("layout.master")




@section("content")


    <section class="page-header page-header-modern section position-relative border-0 m-0 mb-5"
        style="background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url({{ asset('images/modules/all.jpg') }}); background-position: center; background-size: cover;">
        <div class="container position-relative pb-2 mb-2 d-flex align-items-center justify-content-center">
            <h2 class="font-weight-bold text-white text-9 mb-0">Ürünler ve Çözümler</h2>
        </div>
    </section>






    <section class="container mb-5">
        <div class="row">
            <div class="col">
                <div class="row mb-5">
                    <div class="col text-center">
                        <h2 class="font-weight-bold line-height-2 text-7 mb-1">Workcube  </h2>
                        <span class="d-block text-color-dark text-5 pb-2 mb-2 opacity-7">Uzman kadromuzla size özel
                            çözümler sunuyoruz</span>

                    </div>
                </div>

                <div class="container pb-5 mb-5">
                    <div class="row">
                        @foreach ($WorkcubeModules->take(3) as $workmodule)
                            <div class="col-md-6 col-lg-4 mb-4">
                                <div class="card border-0 shadow-sm h-100">
                                    <img src="{{ $workmodule->cover_image_url }}" class="card-img-top" alt="{{ $workmodule->title }}">
                                    <div class="card-body">
                                        <h5 class="card-title font-weight-bold">{{ $workmodule->title }}</h5>
                                        <p class="card-text">{!! Str::limit($workmodule->description, 100) !!}</p>
                                        @if ($workmodule->slug)
                                            <a href="{{ route('modules.show', ['category' => 'workcube', 'module' => $workmodule->slug]) }}"
                                                class="btn btn-primary">Detayları Görüntüle</a>
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

    <hr class="my-5">



    <section class="container mb-5">
        <div class="row">
            <div class="col">
                <div class="row mb-5">
                    <div class="col text-center">
                        <h2 class="font-weight-bold line-height-2 text-7 mb-1">Mikro </h2>
                        <span class="d-block text-color-dark text-5 pb-2 mb-2 opacity-7">Uzman kadromuzla size özel
                            çözümler sunuyoruz</span>

                    </div>
                </div>

                <div class="container pb-5 mb-5">
                    <div class="row">
                        @foreach ($mikroModules->take(3) as $module)
                            <div class="col-md-6 col-lg-4 mb-4">
                                <div class="card border-0 shadow-sm h-100">
                                    <img src="{{ $module->cover_image_url }}" class="card-img-top" alt="{{ $module->title }}">
                                    <div class="card-body">
                                        <h5 class="card-title font-weight-bold">{{ $module->title }}</h5>
                                        <p class="card-text">{!! Str::limit($module->description, 100) !!}</p>
                                        @if ($module->slug)
                                            <a href="{{ route('modules.show', ['category' => 'mikro', 'module' => $module->slug]) }}"
                                                class="btn btn-primary">Detayları Görüntüle</a>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    @if ($mikroModules->count() > 3)
                        <div class="row">
                            <div class="col text-center">
                                <a href="{{ route('modules.index', ['category' => 'mikro']) }}"
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
    <hr class="my-5">



    <section class="container mb-5">
        <div class="row">
            <div class="col">
                <div class="row mb-5">
                    <div class="col text-center">
                        <h2 class="font-weight-bold line-height-2 text-7 mb-1">Uyumsoft </h2>
                        <span class="d-block text-color-dark text-5 pb-2 mb-2 opacity-7">Uzman kadromuzla size özel
                            çözümler sunuyoruz</span>

                    </div>
                </div>

                <div class="container pb-5 mb-5">
                    <div class="row">
                        @foreach ($uyumsoftModules->take(3) as $module)
                            <div class="col-md-6 col-lg-4 mb-4">
                                <div class="card border-0 shadow-sm h-100">
                                    <img src="{{ $module->cover_image_url }}" class="card-img-top" alt="{{ $module->title }}">
                                    <div class="card-body">
                                        <h5 class="card-title font-weight-bold">{{ $module->title }}</h5>
                                        <p class="card-text">{!! Str::limit($module->short_description, 100) !!}</p>
                                        @if ($module->slug)
                                            <a href="{{ route('modules.show', ['uyumsoft', $module->slug]) }}"
                                                class="btn btn-primary">Detayları Görüntüle</a>
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
    <hr class="my-5">



    <section class="container mb-5">
        <div class="row">
            <div class="col">
                <div class="row mb-5">
                    <div class="col text-center">
                        <h2 class="font-weight-bold line-height-2 text-7 mb-1">Danışmanlık Alanlarımız</h2>
                        <span class="d-block text-color-dark text-5 pb-2 mb-2 opacity-7">Uzman kadromuzla size özel
                            çözümler sunuyoruz</span>

                    </div>
                </div>

                <div class="container pb-5 mb-5">
                    <div class="row">
                        @foreach ($advisors->take(3) as $advisor)
                            <div class="col-md-6 col-lg-4 mb-4">
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
