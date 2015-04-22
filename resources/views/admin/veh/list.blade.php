@extends('admin.app')

@section('content')

    <div class="container">

        <div class="col-lg-12">

            <h4>Liste des véhicules occasion</h4>

            <table class="table table-bordered table-striped">

                <thead>
                    <tr>
                        <td>Titre</td>
                        <td>Description</td>
                        <td>Prix</td>
                        <td>KM</td>
                        <td>Année</td>
                        <td>Type</td>
                        <td>Ajouté le</td>
                    </tr>
                </thead>

                <tbody>

                    @foreach ($cars as $car)
                        <tr>
                            <td>
                                {{$car['titre']}}
                            </td>
                            <td>
                                {{$car['description']}}
                            </td>
                            <td>
                                {{$car['prix']}}
                            </td>
                            <td>
                                {{$car['km']}}
                            </td>
                            <td>
                                {{$car['annee']}}
                            </td>
                            <td>
                                {{$car['type']}}
                            </td>
                            <td>
                                {{$car['created_at']}}
                            </td>
                            <td>
                                <a href="{{url('/admin/veh/edit/' . $car['id'])}}">(Editer)</a>
                                <br>
                                <a href="{{url('/admin/veh/delete/' . $car['id'])}}">(Supprimer)</a>
                            </td>
                        </tr>
                    @endforeach

                </tbody>

            </table>

        </div>

    </div> <!-- /container -->

@endsection