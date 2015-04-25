@extends('admin/app')

@section('content')

    <div class="container">

        <div class="row">

            <div class="col-lg-4 col-lg-offset-4">
                <form action="/admin/action/login" method="POST" class="form-signin">
                    <h2 class="form-signin-heading">Se connecter</h2>
                    <label for="inputUsername" class="sr-only"></label>
                    <input type="text" id="inputUsername" name="username" class="form-control"
                           placeholder="Nom d'utilisateur" required autofocus>
                    <label for="inputPassword" class="sr-only">Password</label>
                    <input type="password" id="inputPassword" name="password" class="form-control"
                           placeholder="Mot de passe" required>
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <button class="btn btn-lg btn-primary btn-block" type="submit">Se connecter</button>
                </form>
            </div>

        </div>

    </div> <!-- /container -->

@endsection