<!doctype html>
<!--
* Tabler - Premium and Open Source dashboard template with responsive and high quality UI.
* @version 1.0.0-beta17
* @link https://tabler.io
* Copyright 2018-2023 The Tabler Authors
* Copyright 2018-2023 codecalm.net Paweł Kuna
* Licensed under MIT (https://github.com/tabler/tabler/blob/master/LICENSE)
-->
<html lang="fr">

<head>
    <meta charset="utf-8" />
    <base href="/">
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/favicon/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/favicon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/favicon/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('assets/favicon/site.webmanifest') }}">
    <title>@yield('title', 'Administration') </title>
    <!-- ijabo CSS pour le tostAlert -->
    <link href="{{ asset('admin/ijaboCropTool/ijabo.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('admin/ijaboCropTool/ijaboCropTool.min.css') }}" rel="stylesheet" />

    @livewireStyles

    <link href="{{ asset('admin/dist/css/tabler.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('admin/dist/css/tabler-flags.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('admin/dist/css/tabler-payments.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('admin/dist/css/tabler-vendors.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('admin/dist/css/demo.min.css') }}" rel="stylesheet" />
    <style>
        @import url('https://rsms.me/inter/inter.css');

        :root {
            --tblr-font-sans-serif: 'Inter Var', -apple-system, BlinkMacSystemFont, San Francisco, Segoe UI, Roboto, Helvetica Neue, sans-serif;
        }

        body {
            font-feature-settings: "cv03", "cv04", "cv11";
        }

       #toast-container .toast-success {
            background: #28a745 !important;
        }

        #toast-container .toast-infos {
            background: #17a2b8 !important;
        }

        #toast-container {
            font-weight: bold;
            font-size: 1.5rem;

        }

        #toast-container .toast-error {
            background: #dc3545 !important;
        }
    </style>
    <!-- CSS files -->
    @stack('style')

</head>
<!--
<div id="toast-container  " class="toast-top-right" aria-live="polite" role="alert">
    <div class="toast toast-success " style="display: block;color:azure;font-weight:600">
        <div class="toast-message">Vos Informaions personnelles ont été mises à jour avec succès.</div>
    </div>
</div>
-->


<body>
    <script src="{{ asset('admin/dist/js/demo-theme.min.js') }}"></script>
    <div class="page">
        <!-- Header -->
        @include('admin.layouts.header')

        <!-- Navbar -->
        @include('admin.layouts.nav')

        <div class="page-wrapper">
            <!-- Page body -->
            <div class="page-body">
                <div class="container-xl">
                    <div class="row row-deck row-cards">
                        <!-- content -->
                        @yield('content')
                    </div>
                </div>
            </div>
            <!-- Footer -->
            @include('admin.layouts.footer')

        </div>
    </div>

    <!-- ijabo JS et JQ pour le toastAlert -->
    <script src="{{ asset('admin/ijaboCropTool/jquery-3.6.3.min.js') }}"></script>
    <script src="{{ asset('admin/ijaboCropTool/ijabo.min.js') }}"></script>
    <script src="{{ asset('admin/ijaboCropTool/ijaboCropTool.min.js') }}"></script>
    @livewireScripts

    <!-- ijabo JS et JQ pour le toastAlert -->
    <script>
        window.addEventListener('showToastr', function(event) {
                if (event.detail.type === 'info') {
                    toastr.info(event.detail.message);
                } else if (event.detail.type === 'success') {
                    toastr.success(event.detail.message);
                } else if (event.detail.type === 'error') {
                    toastr.error(event.detail.message);
                } else if (event.detail.type === 'warning') {
                    toastr.warning(event.detail.message);
                } else {
                    return false;
                }
                toastr.remove()
            });
    </script>

    <!-- Libs JS -->
    <script src="{{ asset('admin/dist/libs/apexcharts/dist/apexcharts.min.js') }}" defer></script>
    <script src="{{ asset('admin/dist/libs/jsvectormap/dist/js/jsvectormap.min.js') }}" defer></script>
    <script src="{{ asset('admin/dist/libs/jsvectormap/dist/maps/world.js') }}" defer></script>
    <script src="{{ asset('admin/dist/libs/jsvectormap/dist/maps/world-merc.js') }}" defer></script>
    <!-- Tabler Core -->
    <script src="{{ asset('admin/dist/js/tabler.min.js') }}" defer></script>
    <script src="{{ asset('admin/dist/js/demo.min.js') }}" defer></script>
    <!-- plugins JS -->
    @stack('script')