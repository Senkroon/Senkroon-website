<!DOCTYPE html>
<html lang="tr">

@include('layout.partials.head')



<body>

    <div class="body">
        @include('layout.partials.navbar2')



        <div role="main" class="main sci-fi-theme-main">
            <div class="bg-grid-global"></div>
            <!-- Contact Floating Button -->
            <div id="contact-button">
                <i class="fas fa-envelope"></i>
            </div>


            @include('layout.partials.whatsapp')
            @include('layout.partials.contact-modal')

            @yield('content')

        </div>

        @include('layout.partials.footer')

    </div>

    <!-- Vendor -->
    <script src="{{ asset('porto/vendor/plugins/js/plugins.min.js') }}"></script>

    <!-- Theme Base, Components and Settings -->
    <script src="{{ asset('porto/js/theme.js') }}"></script>

    <!-- Current Page Vendor and Views -->
    <script src="{{ asset('porto/js/views/view.contact.js') }}"></script>

    <!-- Theme Custom -->
    <script src="{{ asset('porto/js/custom.js') }}"></script>

    <!-- Theme Initialization Files -->
    <script src="{{ asset('porto/js/theme.init.js') }}"></script>

</body>