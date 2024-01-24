@extends('layouts.backend.main')
@section('title')
    Personnel | Admin
@endsection
@section('sub-title')
    Personnel
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
                                    <label for="last_name">Nom</label>
                                    <input id="last_name" type="text" class="form-control" placeholder="Nom...">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="first_name">Prénom</label>
                                    <input id="first_name" type="text" class="form-control" placeholder="Prénom...">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="employee_number">Matricule</label>
                                    <input id="employee_number" type="text" class="form-control" placeholder="Matricule...">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="department">Département</label>
                                    <input id="department" type="text" class="form-control" placeholder="Département...">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="position">Poste</label>
                                    <input id="position" type="text" class="form-control" placeholder="Poste...">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="single-select">Sexe</label>
                                    <select name="gender" id="single-select">
                                        <option value="">Choisir...</option>
                                        <option value="F">Féminin</option>
                                        <option value="M">Masculin</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="label">Téléphone (Ex. +241 074 00 00 00)</label>
                                    <input id="label" type="text" class="form-control" placeholder="Téléphone...">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="email">Email</label>
                                    <input id="email" type="email" class="form-control" placeholder="Email...">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="event_date">Date de prise de fonction</label>
                                    <input type="text" class="form-control" placeholder="2017-06-04" id="mdate">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="photo">Photo</label>
                                    <input id="photo" type="file" class="form-control">
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
