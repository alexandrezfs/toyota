@extends('admin.app')

@section('content')

    <div class="container">

        <div class="col-lg-4 col-lg-offset-4">

            <h4>Ajouter une catégorie de forfait</h4>

            <form action="{{url('/admin/forfaits/categories/add')}}" method="POST">
                <label for="titre">Nom de la catégorie</label>
                <input type="text" name="nom" placeholder="Nom" class="form-control" required>
                <input type="hidden" id="token" name="_token" value="{{ csrf_token() }}">
                <button type="submit" class="btn btn-success">Valider</button>
            </form>

        </div>

    </div> <!-- /container -->

@endsection