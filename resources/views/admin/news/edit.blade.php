@extends('admin.app')

@section('content')

    <div class="container">

        <div class="row">

            <div class="col-lg-12">

                <h4>Ajouter une news</h4>

                <form action="{{url('/admin/news/edit')}}" method="POST">
                    <label for="titre">Titre</label>
                    <input type="text" id="titre" name="titre" class="form-control" placeholder="Titre"
                           value="{{ $news['titre'] }}" required autofocus>
                    <label for="contenu">Contenu</label>
                    <textarea type="text" id="contenu" name="contenu">{{ $news['contenu'] }}</textarea>

                    <input type="hidden" id="token" name="_token" value="{{ csrf_token() }}">

                    <label for="dropzone">Faites glisser une ou plusieurs photos dans cette zone</label>

                    <div id="my-dropzone" class="the-dropzone">

                    </div>

                    <div id="images-uploaded">

                    </div>

                    <input type="hidden" name="id" value="{{ $news['id']  }}">

                    <input type="hidden" name="images" id="images" value="{{ $news['images_json'] }}">
                    <input type="hidden" name="object_name" id="object_name" value="news">

                    <button type="submit" class="btn btn-success">Valider</button>
                </form>

            </div>

        </div>

    </div> <!-- /container -->

    <script>
        CKEDITOR.replace('contenu');
    </script>

@endsection