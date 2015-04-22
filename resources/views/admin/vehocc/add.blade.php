@extends('admin.app')

@section('content')

    <div class="container">

        <div class="col-lg-4 col-lg-offset-4">

            <h4>Ajouter un véhicule occasion</h4>

            <form action="/admin/vehocc/add" method="POST">
                <label for="titre">Titre</label>
                <input type="text" id="titre" name="titre" class="form-control" placeholder="Titre" required autofocus>
                <label for="description">Description</label>
                <textarea type="text" id="description" name="description" class="form-control" placeholder="Description" required></textarea>
                <label for="prix">Prix</label>
                <input type="text" id="prix" name="prix" class="form-control" placeholder="Prix" required>
                <label for="km">KM</label>
                <input type="text" id="km" name="km" class="form-control" placeholder="KM" required>
                <label for="annee">Année</label>
                <input type="text" id="annee" name="annee" class="form-control" placeholder="Année" required>
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <button type="submit" class="btn btn-success">Valider</button>
            </form>

        </div>

    </div> <!-- /container -->

@endsection