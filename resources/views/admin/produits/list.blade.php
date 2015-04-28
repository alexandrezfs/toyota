@extends('admin.app')

@section('content')

    <div class="container">

        <div class="row">

            <div class="col-lg-12">

                <h4>Produits</h4>

                <p><a href="/admin/produits/add"><i class="fa fa-plus-circle"></i> Ajouter</a></p>

                <table class="table table-bordered table-striped">

                    <thead>
                    <tr>
                        <td>Titre</td>
                        <td>Description</td>
                        <td>Prix</td>
                        <td>Frais de port</td>
                        <td>Nb de vendus</td>
                        <td>Code ID</td>
                        <td>Nb en stock</td>
                        <td>En magasin</td>
                        <td>Date fin</td>
                        <td>Créé le</td>
                    </tr>
                    </thead>

                    <tbody>

                    @foreach ($produits as $produit)
                        <tr>
                            <td>
                                {{$produit['titre']}}
                            </td>
                            <td>
                                {{$produit['description']}}
                            </td>
                            <td>
                                {{$produit['prix']}}
                            </td>
                            <td>
                                {{$produit['prix_port']}}
                            </td>
                            <td>
                                {{$produit['sold_count']}}
                            </td>
                            <td>
                                {{$produit['code']}}
                            </td>
                            <td>
                                {{$produit['en_stock']}}
                            </td>
                            <td>
                                @if($produit['en_magasin'] == 1)
                                    Oui
                                @else
                                    Non
                                @endif
                            </td>
                            <td>
                                {{$produit['date_limite_fin']}}
                            </td>
                            <td>
                                {{$produit['created_at']}}
                            </td>
                            <td>
                                <a href="{{url('/admin/produits/edit/' . $produit['id'])}}">(Editer)</a>
                                <br>
                                <a href="{{url('/admin/produits/delete/' . $produit['id'])}}" onclick="return(confirm('Etes-vous sûr de vouloir supprimer cette entrée?'));">(Supprimer)</a>
                            </td>
                        </tr>
                    @endforeach

                    </tbody>

                </table>

            </div>

        </div>

    </div> <!-- /container -->

@endsection