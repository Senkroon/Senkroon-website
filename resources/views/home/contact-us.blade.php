@extends('layout.master')


@section('content')
    <section class="page-header page-header-modern section position-relative border-0 m-0"
        style="background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url({{ asset('images/modules/all.jpg') }}); background-position: center; background-size: cover;">
        <div class="container position-relative pb-5 mb-5">


            <div class="row text-center text-md-start py-2">
                <div class="col p-relative bottom-5">
                    <ul class="breadcrumb d-block text-4 opacity-8 text-white mb-0">
                        <li><a href="{{ route('home.index') }}" class="text-decoration-none text-white">Ana sayfa</a></li>
                        <li class="active">İletişim</li>
                    </ul>
                    <h1 class="font-weight-bold text-color-white text-10 mt-1 mb-0">İletişim</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="section bg-transparent position-relative border-0 m-0 p-0">
        <div class="container custom-container-background custom-z-index-1 py-5">
            <div class="row position-relative z-index-1 pt-5-5">
                <div class="col">

                    <form class="contact-form custom-form-style-1" action="{{ route('contact-us.submit') }}" method="POST">
                        @csrf

                        @if (session('success'))
                            <div class="alert alert-success mt-4">
                                <strong>Başarılı!</strong> {{ session('success') }}
                            </div>
                        @endif

                        @if (session('error'))
                            <div class="alert alert-danger mt-4">
                                <strong>Hata!</strong> {{ session('error') }}
                            </div>
                        @endif

                        @if ($errors->any())
                            <div class="alert alert-danger mt-4">
                                <strong>Hata!</strong> Lütfen aşağıdaki hataları düzeltin:
                                <ul class="mb-0 mt-2">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <div class="row row-gutter-sm">
                            <div class="form-group col-lg-6 mb-4">
                                <input type="text" value="" data-msg-required="Lütfen adınızı girin."
                                    maxlength="100" class="form-control" name="name" id="name" required
                                    placeholder="Adınız">
                            </div>
                            <div class="form-group col-lg-6 mb-4">
                                <input type="text" value="" data-msg-required="Lütfen telefon numaranızı girin."
                                    maxlength="100" class="form-control" name="phone" id="phone" required
                                    placeholder="Telefon Numarası">
                            </div>
                        </div>
                        <div class="row row-gutter-sm">
                            <div class="form-group col-lg-6 mb-4">
                                <input type="email" value="" data-msg-required="Lütfen e-posta adresinizi girin."
                                    data-msg-email="Lütfen geçerli bir e-posta adresi girin." maxlength="100"
                                    class="form-control" name="email" id="email" required
                                    placeholder="E-posta Adresiniz">
                            </div>
                            <div class="form-group col-lg-6 mb-4">
                                <input type="text" value="" maxlength="100" class="form-control" name="company"
                                    id="company" placeholder="Şirket Adı">
                            </div>
                        </div>
                        <div class="row row-gutter-sm">
                            <div class="form-group col-lg-12 mb-4">
                                <input type="text" value="" data-msg-required="Lütfen konuyu girin."
                                    maxlength="100" class="form-control" name="subject" id="subject" required
                                    placeholder="Konu">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col mb-4">
                                <textarea maxlength="5000" data-msg-required="Lütfen mesajınızı girin." rows="3" class="form-control"
                                    name="message" id="message" required placeholder="Mesajınız"></textarea>
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col mb-4">
                                <label class="d-flex align-items-start">
                                    <input type="checkbox" name="kvkk" id="kvkk" class="mt-1" required>
                                    <span class="ms-2 text-3">
                                        Kişisel verilerimin, iletişim talebimin yanıtlanması amacıyla işlenmesine
                                        <a href="{{ route('kvkk') }}" target="_blank" class="text-primary text-decoration-underline">KVKK Aydınlatma Metni</a>
                                        kapsamında açık rıza veriyorum.
                                    </span>
                                </label>
                                @error('kvkk')
                                    <div class="invalid-feedback d-block text-danger mt-2">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col mb-3 d-flex justify-content-end ">
                                <button type="submit"
                                    class="btn btn-secondary btn-rounded border-0 font-weight-bold text-3 btn-px-5 py-3"
                                    data-loading-text="Yükleniyor...">MESAJ GÖNDER</button>
                            </div>
                        </div>


                    </form>

                    <hr class="my-5">

                    <h2 class="text-color-dark font-weight-medium text-8 mt-5 mb-3">
                        <strong>Konumumuz</strong>
                    </h2>

                    <p class="text-4 line-height-8 mb-4">Aşağıda yer alan lokasyonlarımızdan haberdar olmak için lütfen
                        bizimle iletişime geçin.</p>

                    <div class="row py-4 mb-5">
                        <div class="col-lg-6 pb-4 pb-lg-0">

                            <p class="text-4-5 pe-lg-2 text-dark font-weight-bold"> Polatlar Office, Tecde, Mıhlıdut Sk. A Blok No: 37/B<br>
                                    44090 Kat 1 No:3 Yeşilyurt/Malatya</p>
                            <ul class="list list-unstyled">
                                <li class="d-flex align-items-center mb-3">
                                    <i
                                        class="icon icon-envelope text-color-dark text-3 font-weight-bold position-relative top-1 me-3-5"></i>
                                    <a href="mailto:info@senkroon.com"
                                        class="d-inline-flex align-items-center text-decoration-none text-color-dark text-color-hover-primary font-weight-semibold text-4-5">info@senkroon.com</a>
                                </li>
                                <li class="d-flex align-items-center mb-3">
                                    <i
                                        class="icon icon-phone text-color-dark text-3 font-weight-bold position-relative top-1 me-3-5"></i>
                                    <a href="tel:+905306690444"
                                        class="d-inline-flex align-items-center text-decoration-none text-color-dark text-color-hover-primary font-weight-semibold text-4-5">+90
                                        530 669 04 44
                                    </a>
                                </li>
                            </ul>




                        </div>
                        <div class="col-lg-6">

                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3129.9763806342153!2d38.26595517621468!3d38.32637778019414!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40763123e16f2abb%3A0x39f8d8d9c9a565cb!2sEspressolab%20Malatya%20Ye%C5%9Filyurt!5e0!3m2!1str!2str!4v1766666201789!5m2!1str!2str"
                                width="600" height="400" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection
