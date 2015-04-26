@extends('admin.app')

@section('content')

    <div class="container">

        <div class="row">

            <div class="col-lg-4 col-lg-offset-4">

                <h4>Editer un produit</h4>

                <form action="{{url('/admin/produits/edit')}}" method="POST">
                    <label for="titre">Titre</label>
                    <input type="text" id="titre" name="titre" class="form-control" placeholder="Titre" value="{{ $produit['titre'] }}" required
                           autofocus>
                    <label for="description">Description</label>
                    <textarea type="text" id="description" name="description" class="form-control"
                              placeholder="Description" required>{{ $produit['description'] }}</textarea>
                    <label for="prix">Prix</label>
                    <input type="text" id="prix" name="prix" class="form-control" placeholder="Prix" value="{{ $produit['prix'] }}" required>
                    <label for="prix_port">Prix des frais de port</label>
                    <input type="text" id="prix_port" name="prix_port" class="form-control" placeholder="Prix des frais de port" value="{{ $produit['prix_port'] }}" required>
                    <label for="code">Code Identifiant</label>
                    <input type="text" id="code" name="code" class="form-control" placeholder="Code Identifiant" value="{{ $produit['code'] }}" required>
                    <label for="en_stock">Nombre de produits en stock</label>
                    <input type="number" id="en_stock" name="en_stock" class="form-control" value="{{ $produit['en_stock'] }}" placeholder="En Stock" required>
                    <label for="date_limite_fin">Afficher jusqu'au...</label>
                    <input type="text" id="date_limite_fin" name="date_limite_fin" class="form-control" value="{{ $produit['date_limite_fin'] }}" placeholder="Date de limite" required>

                    <div class="checkbox">
                        <label>
                            @if($produit['en_magasin'] == 1)
                                <input id="en_magasin" name="en_magasin" type="checkbox" checked> En magasin ?
                            @else
                                <input id="en_magasin" name="en_magasin" type="checkbox"> En magasin ?
                            @endif
                        </label>
                    </div>

                    <input type="hidden" id="token" name="_token" value="{{ csrf_token() }}">
                    <input type="hidden" id="id" name="id" value="{{ $produit['id'] }}">

                    <label for="dropzone">Faites glisser une ou plusieurs photos dans cette zone</label>

                    <div id="my-dropzone" class="the-dropzone">

                    </div>

                    <div id="images-uploaded">

                    </div>

                    <input type="hidden" name="images" id="images" value="{{ $produit['images_json'] }}">
                    <input type="hidden" name="object_name" id="object_name" value="produit">

                    <button type="submit" class="btn btn-success">Valider</button>
                </form>

            </div>

        </div>

    </div> <!-- /container -->

    <script>
        jQuery('#date_limite_fin').datetimepicker();
    </script>

@endsection