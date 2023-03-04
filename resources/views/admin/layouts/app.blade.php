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
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/favicon/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/favicon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/favicon/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('assets/favicon/site.webmanifest') }}">
    <title>@yield('title','Administration') </title>
    <!-- CSS files -->
    @yield('style')
    @livewireStyles

    <link href="{{ asset('admin/dist/css/tabler.min.css')}}" rel="stylesheet"/>
    <link href="{{ asset('admin/dist/css/tabler-flags.min.css')}}" rel="stylesheet"/>
    <link href="{{ asset('admin/dist/css/tabler-payments.min.css')}}" rel="stylesheet"/>
    <link href="{{ asset('admin/dist/css/tabler-vendors.min.css')}}" rel="stylesheet"/>
    <link href="{{ asset('admin/dist/css/demo.min.css')}}" rel="stylesheet"/>
    <style>
      @import url('https://rsms.me/inter/inter.css');
      :root {
      	--tblr-font-sans-serif: 'Inter Var', -apple-system, BlinkMacSystemFont, San Francisco, Segoe UI, Roboto, Helvetica Neue, sans-serif;
      }
      body {
      	font-feature-settings: "cv03", "cv04", "cv11";
      }
    </style>
  </head>
  <body >
    <script src="{{ asset('admin/dist/js/demo-theme.min.js')}}"></script>
    <div class="page">
      <!-- Header -->
      @include("admin.layouts.header")
    
      <!-- Navbar -->
      @include("admin.layouts.nav")

      <div class="page-wrapper">
        <!-- Page header -->
        <div class="page-header d-print-none">
          <div class="container-xl">
            <div class="row g-2 align-items-center">
              <div class="col">
                <!-- Page pre-title -->
                <div class="page-pretitle">
                  Panneau
                </div>
                <h2 class="page-title">
                  Administration
                </h2>
              </div>
              <!-- Page title actions -->
              <div class="col-auto ms-auto d-print-none">
                <div class="btn-list">
                  <span class="d-none d-sm-inline">
                    <a href="#" class="btn">
                      New view
                    </a>
                  </span>
                  <a href="#" class="btn btn-primary d-none d-sm-inline-block" data-bs-toggle="modal" data-bs-target="#modal-report">
                    <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 5l0 14" /><path d="M5 12l14 0" /></svg>
                    Create new report
                  </a>
                  <a href="#" class="btn btn-primary d-sm-none btn-icon" data-bs-toggle="modal" data-bs-target="#modal-report" aria-label="Create new report">
                    <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 5l0 14" /><path d="M5 12l14 0" /></svg>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Page body -->
        <div class="page-body">
          <div class="container-xl">
            <div class="row row-deck row-cards">
              <!-- content -->
              @yield("content")

            </div>
          </div>
        </div>
        <!-- Footer -->
        @include("admin.layouts.footer")

      </div>
    </div>
    <!-- plugins JS -->
    @yield('script')
    @livewireScripts
    <!-- Libs JS -->
    <script src="{{ asset('admin/dist/libs/apexcharts/dist/apexcharts.min.js')}}" defer></script>
    <script src="{{ asset('admin/dist/libs/jsvectormap/dist/js/jsvectormap.min.js')}}" defer></script>
    <script src="{{ asset('admin/dist/libs/jsvectormap/dist/maps/world.js')}}" defer></script>
    <script src="{{ asset('admin/dist/libs/jsvectormap/dist/maps/world-merc.js')}}" defer></script>
    <!-- Tabler Core -->
    <script src="{{ asset('admin/dist/js/tabler.min.js')}}" defer></script>
    <script src="{{ asset('admin/dist/js/demo.min.js')}}" defer></script>
    
  