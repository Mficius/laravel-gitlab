@extends('layouts.backend.main')
@section('title')
    Actualités | Admin
@endsection
@section('sub-title')
    Actualités
@endsection

@section('body')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Liste</h4>
                    <a href="{{ route('admin.news.create') }}" type="button" class="btn btn-rounded btn-info">Ajouter</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example3" class="display" style="min-width: 845px">
                            <thead>
                            <tr>
                                <th>Libellé</th>
                                <th>Date d'actualité</th>
                                <th>Date de publication</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>M.COM., P.H.D.</td>
                                <td>2011/04/25</td>
                                <td>2011/04/25</td>
                                <td>
                                    <div class="d-flex">
                                        <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i
                                                class="fa fa-pencil"></i></a>
                                        <a href="#" class="btn btn-danger shadow btn-xs sharp"><i
                                                class="fa fa-trash"></i></a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Garrett Winters</td>
                                <td>2011/07/25</td>
                                <td>2011/07/25</td>
                                <td>
                                    <div class="d-flex">
                                        <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i
                                                class="fa fa-pencil"></i></a>
                                        <a href="#" class="btn btn-danger shadow btn-xs sharp"><i
                                                class="fa fa-trash"></i></a>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td>Cedric Kelly</td>
                                <td>2012/03/29</td>
                                <td>2012/03/29</td>
                                <td>
                                    <div class="d-flex">
                                        <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i
                                                class="fa fa-pencil"></i></a>
                                        <a href="#" class="btn btn-danger shadow btn-xs sharp"><i
                                                class="fa fa-trash"></i></a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>B.A, B.C.A</td>
                                <td>2008/11/28</td>
                                <td>2008/11/28</td>
                                <td>
                                    <div class="d-flex">
                                        <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i
                                                class="fa fa-pencil"></i></a>
                                        <a href="#" class="btn btn-danger shadow btn-xs sharp"><i
                                                class="fa fa-trash"></i></a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>B.COM., M.COM.</td>
                                <td>2012/12/02</td>
                                <td>2012/12/02</td>
                                <td>
                                    <div class="d-flex">
                                        <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i
                                                class="fa fa-pencil"></i></a>
                                        <a href="#" class="btn btn-danger shadow btn-xs sharp"><i
                                                class="fa fa-trash"></i></a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Sales Assistant</td>
                                <td>2012/08/06</td>
                                <td>2012/08/06</td>
                                <td>
                                    <div class="d-flex">
                                        <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i
                                                class="fa fa-pencil"></i></a>
                                        <a href="#" class="btn btn-danger shadow btn-xs sharp"><i
                                                class="fa fa-trash"></i></a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Integration</td>
                                <td>2010/10/14</td>
                                <td>2010/10/14</td>
                                <td>
                                    <div class="d-flex">
                                        <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i
                                                class="fa fa-pencil"></i></a>
                                        <a href="#" class="btn btn-danger shadow btn-xs sharp"><i
                                                class="fa fa-trash"></i></a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>B.A, B.C.A</td>
                                <td>2009/09/15</td>
                                <td>2009/09/15</td>
                                <td>
                                    <div class="d-flex">
                                        <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i
                                                class="fa fa-pencil"></i></a>
                                        <a href="#" class="btn btn-danger shadow btn-xs sharp"><i
                                                class="fa fa-trash"></i></a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>B.COM., M.COM.</td>
                                <td>2008/12/13</td>
                                <td>2008/12/13</td>
                                <td>
                                    <div class="d-flex">
                                        <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i
                                                class="fa fa-pencil"></i></a>
                                        <a href="#" class="btn btn-danger shadow btn-xs sharp"><i
                                                class="fa fa-trash"></i></a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Systems Administrator</td>
                                <td>2009/04/10</td>
                                <td>2009/04/10</td>
                                <td>
                                    <div class="d-flex">
                                        <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i
                                                class="fa fa-pencil"></i></a>
                                        <a href="#" class="btn btn-danger shadow btn-xs sharp"><i
                                                class="fa fa-trash"></i></a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>B.COM., M.COM.</td>
                                <td>2012/10/13</td>
                                <td>2012/10/13</td>
                                <td>
                                    <div class="d-flex">
                                        <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i
                                                class="fa fa-pencil"></i></a>
                                        <a href="#" class="btn btn-danger shadow btn-xs sharp"><i
                                                class="fa fa-trash"></i></a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>B.TACH, M.TACH</td>
                                <td>2012/09/26</td>
                                <td>2012/09/26</td>
                                <td>
                                    <div class="d-flex">
                                        <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i
                                                class="fa fa-pencil"></i></a>
                                        <a href="#" class="btn btn-danger shadow btn-xs sharp"><i
                                                class="fa fa-trash"></i></a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Regional Director</td>
                                <td>2010/11/14</td>
                                <td>2010/11/14</td>
                                <td>
                                    <div class="d-flex">
                                        <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i
                                                class="fa fa-pencil"></i></a>
                                        <a href="#" class="btn btn-danger shadow btn-xs sharp"><i
                                                class="fa fa-trash"></i></a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Software Engineer</td>
                                <td>2011/06/07</td>
                                <td>2011/06/07</td>
                                <td>
                                    <div class="d-flex">
                                        <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i
                                                class="fa fa-pencil"></i></a>
                                        <a href="#" class="btn btn-danger shadow btn-xs sharp"><i
                                                class="fa fa-trash"></i></a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>B.A, B.C.A</td>
                                <td>2010/03/11</td>
                                <td>2010/03/11</td>
                                <td>
                                    <div class="d-flex">
                                        <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i
                                                class="fa fa-pencil"></i></a>
                                        <a href="#" class="btn btn-danger shadow btn-xs sharp"><i
                                                class="fa fa-trash"></i></a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>B.COM., M.COM.</td>
                                <td>2011/08/14</td>
                                <td>2011/08/14</td>
                                <td>
                                    <div class="d-flex">
                                        <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i
                                                class="fa fa-pencil"></i></a>
                                        <a href="#" class="btn btn-danger shadow btn-xs sharp"><i
                                                class="fa fa-trash"></i></a>
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
