@extends('admin.app')

@section('content')

    <div class="container">

        <div class="col-lg-4 col-lg-offset-4">

            <h4>Editer un forfait</h4>

            <form action="{{url('/admin/forfaits/edit')}}" method="POST">
                <label for="titre">Titre</label>
                <input type="text" id="titre" name="titre" class="form-control" placeholder="Titre"
                       value="{{$forfait['titre']}}" required autofocus>

                <label for="contenu">Contenu</label>
                <textarea type="text" id="contenu" name="contenu" class="form-control" placeholder="Contenu"
                          required>{{$forfait['contenu']}}</textarea>

                <label for="categorie">Catégorie</label>
                <select type="text" id="categorie" name="categorie_id" class="form-control" required>
                    @foreach ($categories as $categorie)
                        @if ($categorie['id'] == $forfait['categorie_id'])
                            <option value="{{$categorie['id']}}" selected>{{$categorie['nom']}}</option>
                        @else
                            <option value="{{$categorie['id']}}">{{$categorie['nom']}}</option>
                        @endif
                    @endforeach
                </select>

                <input type="hidden" id="token" name="_token" value="{{ csrf_token() }}">
                <input type="hidden" name="id" value="{{ $forfait['id'] }}">

                <label for="dropzone">Faites glisser une ou plusieurs photos dans cette zone</label>

                <div id="my-dropzone" class="the-dropzone">

                </div>

                <div id="images-uploaded">

                </div>

                <input type="hidden" name="images" id="images" value="{{ $forfait['images_json'] }}">
                <input type="hidden" name="object_name" id="object_name" value="news">

                <button type="submit" class="btn btn-success">Valider</button>
            </form>

        </div>

    </div> <!-- /container -->

@endsection