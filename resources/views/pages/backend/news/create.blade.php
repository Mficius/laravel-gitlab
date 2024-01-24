@extends('layouts.backend.main')
@section('title')
    Actualités | Admin
@endsection
@section('sub-title')
    Actualités
@endsection

@section('body')
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Formulaire d'ajout</h4>
                </div>
                <div class="card-body">
                    <div class="basic-form">
                        <form method="POST" action="{{ route('admin.news.store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="row form-row form-material">
                                <div class="form-group col-md-6">
                                    <label for="label">Titre</label>
                                    <input id="label" type="text" class="form-control" placeholder="Titre" name="title" required value="{{ old('title') }}">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="event_date">Date de l'évènement</label>
                                    <input type="date" class="form-control" placeholder="2017-06-04" name="date_news" value="{{ old('date_news') }}">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="main_image">Image principale</label>
                                    <input id="main_image" type="file" name="main_image" class="form-control" placeholder="" value="{{ old('main_image') }}">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="images">Autres images</label>
                                    <input id="images" type="file" name="rest_image[]" multiple class="form-control" value="{{ old('rest_image') }}">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="video">Vidéo</label>
                                    <input id="video" type="file" name="video_file" class="form-control">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label for="content">Contenu</label>
                                    <textarea class="form-control" id="content" name="content_news"></textarea>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Enregistrer</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
