@extends('admin.app')

@section('content')

    <div class="container">

        <div class="row">

            <div class="col-lg-12">

                <h4>Ajouter une news</h4>

                <form action="{{url('/admin/news/add')}}" method="POST">
                    <label for="titre">Titre</label>
                    <input type="text" id="titre" name="titre" class="form-control" placeholder="Titre" required
                           autofocus>
                    <label for="contenu">Contenu</label>
                    <textarea type="text" id="contenu" name="contenu"></textarea>

                    <input type="hidden" id="token" name="_token" value="{{ csrf_token() }}">

                    <label for="dropzone">Faites glisser une ou plusieurs photos dans cette zone</label>

                    <div id="my-dropzone" class="the-dropzone">

                    </div>

                    <div id="images-uploaded">

                    </div>

                    <input type="hidden" name="images" id="images" value="[]">
                    <input type="hidden" name="object_name" id="object_name" value="news">

                    <button type="submit" class="btn btn-success">Valider</button>
                </form>

            </div>

        </div>
        <!-- /container -->

    </div>

    <script>
        CKEDITOR.replace('contenu');
    </script>

@endsection