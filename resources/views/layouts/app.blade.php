<!DOCTYPE html>
<html lang="en">

<head>

    {{-- i. HEADER --}}
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Purple Admin</title>

    {{-- ii. STYLE GLOBAL --}}
    <link rel="stylesheet" href="{{ asset('assets/vendors/mdi/css/materialdesignicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/ti-icons/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/css/vendor.bundle.base.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

    {{-- iii. STYLE PAGE --}}
    @stack('styles')

</head>

<body>

<div class="container-scroller">

    {{-- iv. NAVBAR --}}
    @include('layouts.navbar')

    <div class="container-fluid page-body-wrapper">

        {{-- v. SIDEBAR --}}
        @include('layouts.sidebar')

        <div class="main-panel">

            <div class="content-wrapper">

                {{-- vi. CONTENT --}}
                @yield('content')

            </div>

            {{-- vii. FOOTER --}}
            @include('layouts.footer')

        </div>

    </div>

</div>

{{-- viii. JAVASCRIPT GLOBAL --}}
<script src="{{ asset('assets/vendors/js/vendor.bundle.base.js') }}"></script>
<script src="{{ asset('assets/js/off-canvas.js') }}"></script>
<script src="{{ asset('assets/js/misc.js') }}"></script>
<script src="{{ asset('assets/js/settings.js') }}"></script>
<script src="{{ asset('assets/js/todolist.js') }}"></script>

{{-- ix. JAVASCRIPT PAGE --}}
@stack('scripts')

</body>
</html>
