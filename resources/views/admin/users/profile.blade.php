@extends('admin.layouts.app')
@section('title', 'Mon Profile')
@push('style')
    {{-- CSS complementaires --}}
@endpush

@section('content')
    @livewire('admin.user.profile')
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
                            @livewire('admin.user.profile-infos')
                        </div>
                    </div>
                    <div class="tab-pane" id="tabs-security">
                        <h4>Sécurité</h4>
                        <div>
                            @livewire('admin.user.profile-password')
                        </div>
                    </div>
                </div>
            </div>
        </div>

    @endsection
    @push('script')
        <script>
            $('#changeProfile').ijaboCropTool({
                preview: '',
                setRatio: 1,
                allowedExtensions: ['jpg', 'jpeg', 'png'],
                buttonsText: ['CROP', 'QUIT'],
                buttonsColor: ['#30bf7d', '#ee5155', -15],
                processUrl: '{{ route('admins.users.changePicture') }}',
                withCSRF: ['_token', '{{ csrf_token() }}'],
                onSuccess: function(message, element, status) {
                    //alert(message);
                    //listeners en ecoute pour l'actualisation de deux endroits ou se trouve les deux pictures
                    Livewire.emit('UpdateHeader');
                    Livewire.emit('UpdateProfile');
                    toastr.success(message)
                },
                onError: function(message, element, status) {
                    //alert(message);
                    toastr.error(message)
                }
            });
        </script>
    @endpush
