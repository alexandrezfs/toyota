@extends('admin.app')

@section('content')

    <div class="container">

        <div class="row">

            <div class="col-lg-12">

                <h4>Forfaits</h4>

                <p><a href="/admin/forfaits/add"><i class="fa fa-plus-circle"></i> Ajouter</a></p>

                <table class="table table-bordered table-striped">

                    <thead>
                    <tr>
                        <td>Titre</td>
                        <td>Contenu</td>
                        <td>#</td>
                    </tr>
                    </thead>

                    <tbody>

                    @foreach ($forfaits as $forfait)
                        <tr>
                            <td>
                                {{$forfait['titre']}}
                            </td>
                            <td>
                                {{$forfait['contenu']}}
                            </td>
                            <td>
                                {{$forfait['créé le']}}
                            </td>
                            <td>
                                <a href="{{url('/admin/forfaits/edit/' . $forfait['id'])}}">(Editer)</a>
                                <br>
                                <a href="{{url('/admin/forfaits/delete/' . $forfait['id'])}}">(Supprimer)</a>
                            </td>
                        </tr>
                    @endforeach

                    </tbody>

                </table>

            </div>

        </div>

    </div> <!-- /container -->

@endsection