<!-- Contact Popup -->
<div id="contact-popup">
    <div class="contact-header">
        <h4 class="text-white">İletişim</h4>
        <button id="contact-close">×</button>
    </div>

    <div class="contact-body">
        <form class="contact-form custom-form-style-1" id="contactForm" method="POST">
            @csrf

            <div class="row row-gutter-sm">
                <div class="form-group col-lg-12 mb-2">
                    <input type="text" value="" data-msg-required="Lütfen adınızı girin." maxlength="100"
                        class="form-control" name="name" id="name" required placeholder="Adınız">
                    <div class="invalid-feedback" id="name-error"></div>
                </div>
                <div class="form-group col-lg-12 mb-2">
                    <input type="text" value="" data-msg-required="Lütfen telefon numaranızı girin." maxlength="100"
                        class="form-control" name="phone" id="phone" required placeholder="Telefon Numarası">
                    <div class="invalid-feedback" id="phone-error"></div>
                </div>
            </div>

            <div class="row row-gutter-sm">
                <div class="form-group col-lg-12 mb-2">
                    <input type="email" value="" data-msg-required="Lütfen e-posta adresinizi girin."
                        data-msg-email="Lütfen geçerli bir e-posta adresi girin." maxlength="100" class="form-control"
                        name="email" id="email" required placeholder="E-posta Adresiniz">
                    <div class="invalid-feedback" id="email-error"></div>
                </div>
            </div>

            <div class="row row-gutter-sm">
                <div class="form-group col-lg-12 mb-2">
                    <input type="text" value="" maxlength="100" class="form-control" name="company" id="company"
                        placeholder="Şirket Adı (İsteğe Bağlı)">
                    <div class="invalid-feedback" id="company-error"></div>
                </div>
            </div>

            <div class="row row-gutter-sm">
                <div class="form-group col-lg-12 mb-2">
                    <input type="text" value="" data-msg-required="Lütfen konuyu girin." maxlength="100"
                        class="form-control" name="subject" id="subject" required placeholder="Konu">
                    <div class="invalid-feedback" id="subject-error"></div>
                </div>
            </div>

            <div class="row">
                <div class="form-group col mb-2">
                    <textarea maxlength="5000" data-msg-required="Lütfen mesajınızı girin." rows="3"
                        class="form-control" name="message" id="message" required placeholder="Mesajınız"></textarea>
                    <div class="invalid-feedback" id="message-error"></div>
                </div>
            </div>

                  <div class="row">
                            <div class="form-group col mb-4">
                                <label class="d-flex align-items-start">
                                    <input type="checkbox" name="kvkk" id="kvkk" class="mt-1" required>
                                    <span class="ms-2 text-1">
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
                <div class="form-group col mb-1 d-flex justify-content-end ">
                    <button type="submit"
                        class="btn btn-secondary btn-rounded border-0 font-weight-bold text-3 btn-px-3 "
                        id="submit-btn">
                        <span class="submit-text">MESAJ GÖNDER</span>
                        <span class="loading-text d-none">
                            <i class="fas fa-spinner fa-spin me-2"></i>Gönderiliyor...
                        </span>
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>

<!-- Sweet Alert CDN -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const contactForm = document.getElementById('contactForm');
        const submitBtn = document.getElementById('submit-btn');
        const submitText = document.querySelector('.submit-text');
        const loadingText = document.querySelector('.loading-text');

        if (contactForm) {
            contactForm.addEventListener('submit', function (e) {
                e.preventDefault();

                // Clear previous errors
                clearErrors();

                // Show loading state
                setLoadingState(true);

                // Prepare form data
                const formData = new FormData(this);

                // Send AJAX request
                fetch('{{ route('contact-us.submit') }}', {
                    method: 'POST',
                    body: formData,
                    headers: {
                        'X-Requested-With': 'XMLHttpRequest',
                        'X-CSRF-TOKEN': document.querySelector('input[name="_token"]').value
                    }
                })
                    .then(response => response.json())
                    .then(data => {
                        setLoadingState(false);

                        if (data.success) {
                            closeModal();
                            // Show success message with Sweet Alert
                            Swal.fire({
                                title: 'Başarılı!',
                                text: data.message,
                                icon: 'success',
                                confirmButtonText: 'Tamam',
                                confirmButtonColor: '#28a745'
                            })

                            // Reset form
                            contactForm.reset();
                        } else {
                            // Handle validation errors
                            if (data.errors) {
                                showErrors(data.errors);
                            } else {
                                Swal.fire({
                                    title: 'Hata!',
                                    text: data.message || 'Bir hata oluştu.',
                                    icon: 'error',
                                    confirmButtonText: 'Tamam',
                                    confirmButtonColor: '#dc3545'
                                });
                            }
                        }
                    })
                    .catch(error => {
                        setLoadingState(false);
                        console.error('Error:', error);

                        Swal.fire({
                            title: 'Hata!',
                            text: 'Beklenmeyen bir hata oluştu. Lütfen tekrar deneyin.',
                            icon: 'error',
                            confirmButtonText: 'Tamam',
                            confirmButtonColor: '#dc3545'
                        });
                    });
            });
        }

        function setLoadingState(loading) {
            if (loading) {
                submitBtn.disabled = true;
                submitText.classList.add('d-none');
                loadingText.classList.remove('d-none');
            } else {
                submitBtn.disabled = false;
                submitText.classList.remove('d-none');
                loadingText.classList.add('d-none');
            }
        }

        function clearErrors() {
            // Remove error classes and clear error messages
            const formControls = contactForm.querySelectorAll('.form-control');
            const errorMessages = contactForm.querySelectorAll('.invalid-feedback');

            formControls.forEach(control => {
                control.classList.remove('is-invalid');
            });

            errorMessages.forEach(error => {
                error.textContent = '';
            });
        }

        function showErrors(errors) {
            Object.keys(errors).forEach(field => {
                const input = document.getElementById(field);
                const errorElement = document.getElementById(field + '-error');

                if (input && errorElement) {
                    input.classList.add('is-invalid');
                    errorElement.textContent = errors[field][0]; // Show first error message
                }
            });
        }

        function closeModal() {
            // Use global popup manager if available, otherwise fallback to direct method
            if (window.popupManager) {
                window.popupManager.closePopup('contact-popup');
            } else {
                const modal = document.getElementById('contact-popup');
                if (modal) {
                    modal.style.display = 'none';
                    // Remove modal backdrop if exists
                    const backdrop = document.querySelector('.modal-backdrop');
                    if (backdrop) {
                        backdrop.remove();
                    }
                }
            }
        }
    });
</script>

<style>
    .invalid-feedback {
        display: block;
        width: 100%;
        margin-top: 0.25rem;
        font-size: 0.875em;
        color: #dc3545;
    }

    .form-control.is-invalid {
        border-color: #dc3545;
        padding-right: calc(1.5em + 0.75rem);
        background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='12' height='12' fill='none' stroke='%23dc3545' viewBox='0 0 12 12'%3e%3ccircle cx='6' cy='6' r='4.5'/%3e%3cpath d='m5.8 3.6h.4L6 6.5z'/%3e%3ccircle cx='6' cy='8.2' r='.6' fill='%23dc3545' stroke='none'/%3e%3c/svg%3e");
        background-repeat: no-repeat;
        background-position: right calc(0.375em + 0.1875rem) center;
        background-size: calc(0.75em + 0.375rem) calc(0.75em + 0.375rem);
    }

    .form-control.is-invalid:focus {
        border-color: #dc3545;
        box-shadow: 0 0 0 0.2rem rgba(220, 53, 69, 0.25);
    }

    #submit-btn:disabled {
        opacity: 0.7;
        cursor: not-allowed;
    }
</style>
