@extends('admin.app')

@section('content')

    <div class="container">

        <div class="col-lg-4 col-lg-offset-4">

            <h4>Ajouter un véhicule occasion</h4>

            <form action="{{url('/admin/veh/add')}}" method="POST">
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
                <label for="type">Type</label>
                <select type="text" id="type" name="type" class="form-control" required>
                    <option value="neuf">Véhicule Neuf</option>
                    <option value="occasion">Véhicule Occasion</option>
                    <option value="sans-permis">Sans permis</option>
                </select>

                <input type="hidden" id="token" name="_token" value="{{ csrf_token() }}">

                <label for="dropzone">Faites glisser une ou plusieurs photos dans cette zone</label>
                <div id="my-dropzone" class="the-dropzone">

                </div>

                <input type="hidden" name="images" id="images" value="[]">

                <button type="submit" class="btn btn-success">Valider</button>
            </form>

        </div>

    </div> <!-- /container -->

@endsection