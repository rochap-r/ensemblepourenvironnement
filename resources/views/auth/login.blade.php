<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="author" content="Kodinger">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Authentification</title>
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/favicon/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/favicon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/favicon/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('assets/favicon/site.webmanifest') }}">
    <link rel="stylesheet" href="{{ asset('auth/bootstrap/css/bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('auth/css/my-login.css') }}">
</head>

<body class="my-login-page">
    <section class="h-100">
        <div class="container h-100">
            <div class="row justify-content-md-center h-100">
                <div class="card-wrapper">
                    <div class="cardx fat mt-5">
                        <div class="card-body">
                            <div class="text-center mt-4">
                                <a href="{{ route('home') }}" class="navbar-brand navbar-brand-autodark">
                                    <img src="{{ asset('assets/img/logo.png') }}" alt="" height="140">
                                </a>
                                <h4 class="card-title">Authentifiez-vous</h4>
                            </div>
                            <form method="POST" class="my-login-validation" autocomplete="off"
                                action="{{ route('login') }}">
                                @csrf
                                <div class="form-group">
                                    <label for="email">Adresse e-mail</label>
                                    <input id="email" type="email" class="form-control" name="email"
                                        value="" required autofocus placeholder="Entrez l'e-mail">
                                    <span class="text-danger">
                                        @error('email')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>

                                <div class="form-group">
                                    <label for="password">Mot de passe
                                        <a href="{{ route('password.request') }}" class="float-right">
                                            Mot de passe oubli???
                                        </a>
                                    </label>
                                    <input id="password" type="password" class="form-control" name="password" required
                                        data-eye placeholder="Entrer le mot de passe">
                                    <span class="text-danger">
                                        @error('password')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>

                                <div class="form-group">
                                    <div class="custom-checkbox custom-control">
                                        <input type="checkbox" name="remember" id="remember"
                                            class="custom-control-input">
                                        <label for="remember" class="custom-control-label">Se souvenir de moi</label>
                                    </div>
                                </div>

                                <div class="form-group m-0">
                                    <button type="submit" class="btn btn-primary btn-block">
                                        Connexion
                                    </button>
                                </div>
                                <div class="mt-4 text-center">
                                    Vous n'avez pas de compte? <a href="{{ route('register') }}">Cr??ez un!</a>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>


    <script src="{{ asset('auth/bootstrap/js/popper.js') }}"></script>
    <script src="{{ asset('auth/bootstrap/js/bootstrap.js') }}"></script>
    <script src="{{ asset('auth/js/my-login.js') }}"></script>
</body>

</html>
