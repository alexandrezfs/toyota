@extends('admin.app')

@section('content')

    <div class="container">

        <div class="col-lg-12">

            <h4>Liste des catégories de forfait</h4>

            <table class="table table-bordered table-striped">

                <thead>
                <tr>
                    <td>Nom de la catégorie</td>
                    <td>#</td>
                </tr>
                </thead>

                <tbody>

                @foreach ($categories as $categorie)
                    <tr>
                        <td>
                            {{$categorie['nom']}}
                        </td>
                        <td>
                            <a href="{{url('/admin/forfaits/categorie/delete/' . $categorie['id'])}}">(Supprimer)</a>
                        </td>
                    </tr>
                @endforeach

                </tbody>

            </table>

        </div>

    </div> <!-- /container -->

@endsection