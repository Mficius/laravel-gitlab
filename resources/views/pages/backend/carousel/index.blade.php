@extends('layouts.backend.main')
@section('title')
    Carousel | Admin
@endsection
@section('sub-title')
    Images de Carousel
@endsection

@section('body')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Liste</h4>
                    <a href="{{ route('admin.carousels.create') }}" type="button" class="btn btn-rounded btn-info">Ajouter</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example3" class="display" style="min-width: 845px">
                            <thead>
                            <tr>
                                <th>Libellé</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>Lorem ipsum dolor sit amet</td>
                                <td>
                                    <div class="d-flex">
                                        <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
                                        <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Consectetur adipisicing elit.</td>
                                <td>
                                    <div class="d-flex">
                                        <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
                                        <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td>Accusantium atque cumque fuga harum natus.</td>
                                <td>
                                    <div class="d-flex">
                                        <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
                                        <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Odio odit vero!</td>
                                <td>
                                    <div class="d-flex">
                                        <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
                                        <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Ad consectetur dignissimos.</td>
                                <td>
                                    <div class="d-flex">
                                        <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
                                        <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Mollitia nemo odio.</td>
                                <td>
                                    <div class="d-flex">
                                        <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
                                        <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Praesentium sapiente sequi tenetur.</td>
                                <td>
                                    <div class="d-flex">
                                        <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
                                        <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Id, laborum, modi!</td>
                                <td>
                                    <div class="d-flex">
                                        <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
                                        <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Lorem ipsum dolor sit amet.</td>
                                <td>
                                    <div class="d-flex">
                                        <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
                                        <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Consectetur adipisicing elit.</td>
                                <td>
                                    <div class="d-flex">
                                        <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
                                        <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Alias blanditiis deserunt.</td>
                                <td>
                                    <div class="d-flex">
                                        <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
                                        <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>dolorem fuga ipsam labore sed sit?</td>
                                <td>
                                    <div class="d-flex">
                                        <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
                                        <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Autem, et eum explicabo non quaerat temporibus.</td>
                                <td>
                                    <div class="d-flex">
                                        <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
                                        <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Animi in maiores quas temporibus vero?</td>
                                <td>
                                    <div class="d-flex">
                                        <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
                                        <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Lorem ipsum dolor sit amet.</td>
                                <td>
                                    <div class="d-flex">
                                        <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
                                        <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Consectetur adipisicing elit.</td>
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
