@extends('admin.app')

@section('content')

    <div class="container">

        <div class="col-lg-4 col-lg-offset-4">

            <h4>Editer un véhicule occasion</h4>

            <form action="/admin/vehocc/edit" method="POST">
                <label for="titre">Titre</label>
                <input type="text" id="titre" name="titre" class="form-control" placeholder="Titre" value="{{$car['titre']}}" required autofocus>
                <label for="description">Description</label>
                <textarea type="text" id="description" name="description" class="form-control" placeholder="Description" required>{{$car['description']}}</textarea>
                <label for="prix">Prix</label>
                <input type="text" id="prix" name="prix" class="form-control" value="{{$car['prix']}}" placeholder="Prix" required>
                <label for="km">KM</label>
                <input type="text" id="km" name="km" class="form-control" value="{{$car['km']}}" placeholder="KM" required>
                <label for="annee">Année</label>
                <input type="text" id="annee" name="annee" class="form-control" value="{{$car['annee']}}" placeholder="Année" required>
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="hidden" name="id" value="{{ $car['id']  }}">
                <button type="submit" class="btn btn-success">Valider</button>
            </form>

        </div>

    </div> <!-- /container -->

@endsection