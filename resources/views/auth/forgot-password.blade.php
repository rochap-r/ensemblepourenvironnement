<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="author" content="Kodinger">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Réstauration du mot de passe</title>
    <link rel="icon" href="{{ asset('logo/icone.png') }}" type="image/png" />
    <link rel="stylesheet" href="{{ asset('auth/bootstrap/css/bootstrap.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('auth/css/my-login.css')}}">
</head>
<body class="my-login-page">
<section class="h-100">
    <div class="container h-100">
        <div class="row justify-content-md-center align-items-center h-100">
            <div class="card-wrapper">

                <div class="cardx fat">
                    <div class="text-center">
                        <a href="{{route('home')}}" class="navbar-brand navbar-brand-autodark">
                            <img src="{{asset('assets/img/logo.png')}}" alt="" height="140">
                        </a>
                        <h4 class="card-title">Restaurez votre mot de passe</h4>
                    </div>
                    <div class="card-body">
                        <form method="POST" class="my-login-validation" novalidate="" action="{{ route('password.email') }}">
                            @csrf

                            @if (session('status'))
                                <div class="alert alert-success">
                                    Nous avons envoyé votre lien de réinitialisation de mot de passe par e-mail cliquez sur le bouton!
                                </div>
                            @endif
                            <div class="form-group">
                                <label for="email">Adresse e-mail</label>
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Entrer votre Email">
                                <span class="text-danger">@error('email'){{ $message }} @enderror</span>
                            </div>

                            <div class="form-group m-0">
                                <button type="submit" class="btn btn-primary btn-block">
                                    Envoyer le lien du mot de passe
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


</body>
</html>
