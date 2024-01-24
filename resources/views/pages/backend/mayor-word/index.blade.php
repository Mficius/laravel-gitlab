@extends('layouts.backend.main')
@section('title')
    Mot du maire | Admin
@endsection
@section('sub-title')
    Mot du maire
@endsection

@section('body')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Liste</h4>
                    <a href="{{ route('admin.mayor-words.create') }}" type="button" class="btn btn-rounded btn-info">Ajouter</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example3" class="display" style="min-width: 845px">
                            <thead>
                            <tr>
                                <th>Nom & prénom(s) du maire</th>
                                <th>Contenu</th>
                                <th>Date de publication</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>Garrett Winters</td>
                                <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad aperiam, asperiores autem deleniti, doloribus eligendi eum explicabo fugit impedit maiores nemo porro quaerat, quod saepe suscipit. Consequatur itaque pariatur quae?</td>
                                <td>12/10/2023</td>
                                <td>
                                    <div class="d-flex">
                                        <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
                                        <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
