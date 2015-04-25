@extends('admin.app')

@section('content')

    <div class="container">

        <div class="row">

            <div class="col-lg-12">

                <h4>Liste des news</h4>

                <p><a href="/admin/forfaits/add"><i class="fa fa-plus-circle"></i> Ajouter</a></p>

                <table class="table table-bordered table-striped">

                    <thead>
                    <tr>
                        <td>Titre</td>
                        <td>Créé le</td>
                        <td>#</td>
                    </tr>
                    </thead>

                    <tbody>

                    @foreach ($news as $new)
                        <tr>
                            <td>
                                {{$new['titre']}}
                            </td>
                            <td>
                                {{$new['created_at']}}
                            </td>
                            <td>
                                <a href="{{url('/admin/news/edit/' . $new['id'])}}">(Editer)</a>
                                <br>
                                <a href="{{url('/admin/news/delete/' . $new['id'])}}">(Supprimer)</a>
                            </td>
                        </tr>
                    @endforeach

                    </tbody>

                </table>

            </div>

        </div>

    </div> <!-- /container -->

@endsection