@extends('layouts.backend.main')
@section('title')
    A propos | Admin
@endsection
@section('sub-title')
    A propos de nous
@endsection

@section('body')
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Formulaire de création</h4>
                </div>
                <div class="card-body">
                    <div class="basic-form">
                        <form method="POST" action="#" enctype="multipart/form-data">
                            <div class="row form-row form-material">
                                <div class="form-group col-md-6">
                                    <label for="label">Libellé</label>
                                    <input id="label" type="text" class="form-control" placeholder="Libellé">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="main_image">Choisir une image</label>
                                    <input id="main_image" type="file" class="form-control">
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="content">Description</label>
                                    <textarea class="form-control" id="content"></textarea>
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
