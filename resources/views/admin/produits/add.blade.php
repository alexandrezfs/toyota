@extends('admin.app')

@section('content')

    <div class="container">

        <div class="row">

            <div class="col-lg-4 col-lg-offset-4">

                <h4>Ajouter un produit</h4>

                <form action="{{url('/admin/produits/add')}}" method="POST">
                    <label for="titre">Titre</label>
                    <input type="text" id="titre" name="titre" class="form-control" placeholder="Titre" required
                           autofocus>
                    <label for="description">Description</label>
                    <textarea type="text" id="description" name="description" class="form-control"
                              placeholder="Description" required></textarea>
                    <label for="prix">Prix</label>
                    <input type="text" id="prix" name="prix" class="form-control" placeholder="Prix" required>
                    <label for="prix_port">Prix des frais de port</label>
                    <input type="text" id="prix_port" name="prix_port" class="form-control" placeholder="Prix des frais de port" required>
                    <label for="code">Code Identifiant</label>
                    <input type="text" id="code" name="code" class="form-control" placeholder="Code Identifiant" required>
                    <div class="checkbox">
                        <label>
                            <input id="en_magasin" name="en_magasin" type="checkbox"> En magasin ?
                        </label>
                    </div>
                    <label for="en_stock">Nombre de produits en stock</label>
                    <input type="number" id="en_stock" name="en_stock" class="form-control" placeholder="En Stock" required>
                    <label for="date_limite_fin">Afficher jusqu'au...</label>
                    <input type="text" id="date_limite_fin" name="date_limite_fin" class="form-control" placeholder="Date de limite" required>

                    <input type="hidden" id="token" name="_token" value="{{ csrf_token() }}">

                    <label for="dropzone">Faites glisser une ou plusieurs photos dans cette zone</label>

                    <div id="my-dropzone" class="the-dropzone">

                    </div>

                    <div id="images-uploaded">

                    </div>

                    <input type="hidden" name="images" id="images" value="[]">
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