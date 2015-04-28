@extends('admin.app')

@section('content')

    <div class="container">

        <div class="row">

            <div class="col-lg-4 col-lg-offset-4">

                <h4>Editer un véhicule occasion</h4>

                <form action="{{url('/admin/veh/edit')}}" method="POST">

                    <label for="titre">Titre</label>
                    <input type="text" id="titre" name="titre" class="form-control" placeholder="Titre"
                           value="{{$car['titre']}}" required autofocus>

                    <label for="titre">Marque</label>
                    <input type="text" id="marque" name="marque" value="{{$car['marque']}}" class="form-control" placeholder="Marque" required>

                    <label for="description">Description</label>
                    <textarea type="text" id="description" name="description" class="form-control"
                              placeholder="Description" required>{{$car['description']}}</textarea>

                    <label for="prix">Prix</label>
                    <input type="text" id="prix" name="prix" value="{{$car['prix']}}" class="form-control" placeholder="Prix" required>

                    <label for="km">KM</label>
                    <input type="number" id="km" name="km" value="{{$car['km']}}" class="form-control" placeholder="KM" required>

                    <label for="annee">Année</label>
                    <input type="number" id="annee" name="annee" value="{{$car['annee']}}" class="form-control" placeholder="Année" required>

                    <label for="moteur">Moteur</label>
                    <input type="text" id="moteur" name="moteur" value="{{$car['moteur']}}" class="form-control" placeholder="Moteur" required>

                    <label for="transmission">Transmission</label>
                    <input type="text" id="transmission" name="transmission" value="{{$car['transmission']}}" class="form-control" placeholder="Transmission" required>

                    <label for="chassis">Chassis</label>
                    <input type="text" id="chassis" name="chassis" class="form-control" value="{{$car['chassis']}}" placeholder="Chassis" required>

                    <label for="type">Type</label>
                    <select type="text" id="type" name="type" class="form-control" required>
                        <option value="neuf" @if($car['type'] == 'neuf') selected @endif>Véhicule Neuf</option>
                        <option value="occasion" @if($car['type'] == 'occasion') selected @endif>Véhicule Occasion</option>
                        <option value="sans-permis" @if($car['type'] == 'sans-permis') selected @endif>Sans permis</option>
                    </select>

                    <input type="hidden" id="token" name="_token" value="{{ csrf_token() }}">

                    <label for="dropzone">Faites glisser une ou plusieurs photos dans cette zone</label>

                    <div id="my-dropzone" class="the-dropzone">

                    </div>

                    <div id="images-uploaded">

                    </div>

                    <input type="hidden" name="images" id="images" value="{{ $car['images_json'] }}">
                    <input type="hidden" name="object_name" id="object_name" value="car">

                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="hidden" name="id" value="{{ $car['id']  }}">
                    <button type="submit" class="btn btn-success">Valider</button>
                </form>

            </div>

        </div>

    </div> <!-- /container -->

@endsection