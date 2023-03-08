@extends('admin.layouts.app')
@section('title', 'Mon Profile')
@section('style')
    {{-- CSS complementaires --}}
@endsection

@section('content')
    @livewire('profile')
    <hr>
    <div class="row">
        <div class="card">
            <div class="card-header">
                <ul class="nav nav-tabs card-header-tabs" data-bs-toggle="tabs">
                    <li class="nav-item">
                        <a href="#tabs-infos" class="nav-link active" data-bs-toggle="tab">Informations Personnelles</a>
                    </li>
                    <li class="nav-item">
                        <a href="#tabs-security" class="nav-link" data-bs-toggle="tab">Sécurité</a>
                    </li>
                </ul>
            </div>
            <div class="card-body">
                <div class="tab-content">
                    <div class="tab-pane active show" id="tabs-infos">
                        <h4>Infos Personnelles</h4>
                        <div>
                           @livewire('profile-infos')
                        </div>
                    </div>
                    <div class="tab-pane" id="tabs-security">
                        <h4>Sécurité</h4>
                        <div>
                        @livewire('profile-password')
                        </div>
                    </div>
                </div>
            </div>
        </div>

    @endsection
    @section('script')
        {{-- JS complementaires --}}
    @endsection
