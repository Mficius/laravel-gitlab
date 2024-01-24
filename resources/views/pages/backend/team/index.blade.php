@extends('layouts.backend.main')
@section('title')
    Personnel | Admin
@endsection
@section('sub-title')
    Personnel
@endsection

@section('body')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Liste</h4>
                    <a href="{{ route('admin.teams.create') }}" type="button" class="btn btn-rounded btn-info">Ajouter</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example3" class="display" style="min-width: 845px">
                            <thead>
                            <tr>
                                <th>Nom</th>
                                <th>Matricule</th>
                                <th>Département</th>
                                <th>Poste</th>
                                <th>Sexe</th>
                                <th>Téléphone</th>
                                <th>Email</th>
                                <th>Date de fonction</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>Tiger Nixon</td>
                                <td>MCOM</td>
                                <td>Architect</td>
                                <td></td>
                                <td>Male</td>
                                <td><a href="javascript:void(0);"><strong>123 456 7890</strong></a></td>
                                <td><a href="javascript:void(0);"><strong><span class="__cf_email__" data-cfemail="98f1f6fef7d8fde0f9f5e8f4fdb6fbf7f5">[email&#160;protected]</span></strong></a></td>
                                <td>2011/04/25</td>
                                <td>
                                    <div class="d-flex">
                                        <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
                                        <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Garrett Winters</td>
                                <td>MCOM</td>
                                <td>Accountant</td>
                                <td></td>
                                <td>Female</td>
                                <td><a href="javascript:void(0);"><strong>987 654 3210</strong></a></td>
                                <td><a href="javascript:void(0);"><strong><span class="__cf_email__" data-cfemail="5a33343c351a3f223b372a363f74393537">[email&#160;protected]</span></strong></a></td>
                                <td>2011/07/25</td>
                                <td>
                                    <div class="d-flex">
                                        <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
                                        <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Ashton Cox</td>
                                <td>BCOM</td>
                                <td>Junior Technical</td>
                                <td></td>
                                <td>Male</td>
                                <td><a href="javascript:void(0);"><strong>987 654 3210</strong></a></td>
                                <td><a href="javascript:void(0);"><strong><span class="__cf_email__" data-cfemail="0d64636b624d68756c607d6168236e6260">[email&#160;protected]</span></strong></a></td>
                                <td>2009/01/12</td>
                                <td>
                                    <div class="d-flex">
                                        <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
                                        <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Cedric Kelly</td>
                                <td>BCOM</td>
                                <td>Developer</td>
                                <td></td>
                                <td>Male</td>
                                <td><a href="javascript:void(0);"><strong>987 654 3210</strong></a></td>
                                <td><a href="javascript:void(0);"><strong><span class="__cf_email__" data-cfemail="96fff8f0f9d6f3eef7fbe6faf3b8f5f9fb">[email&#160;protected]</span></strong></a></td>
                                <td>2012/03/29</td>
                                <td>
                                    <div class="d-flex">
                                        <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
                                        <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Airi Satou</td>
                                <td>BABCA</td>
                                <td>Accountant</td>
                                <td></td>
                                <td>Female</td>
                                <td><a href="javascript:void(0);"><strong>987 654 3210</strong></a></td>
                                <td><a href="javascript:void(0);"><strong><span class="__cf_email__" data-cfemail="335a5d555c73564b525e435f561d505c5e">[email&#160;protected]</span></strong></a></td>
                                <td>2008/11/28</td>
                                <td>
                                    <div class="d-flex">
                                        <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
                                        <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Brielle Williamson</td>
                                <td>BMCOM</td>
                                <td>Specialist</td>
                                <td></td>
                                <td>Male</td>
                                <td><a href="javascript:void(0);"><strong>987 654 3210</strong></a></td>
                                <td><a href="javascript:void(0);"><strong><span class="__cf_email__" data-cfemail="2841464e47684d50494558444d064b4745">[email&#160;protected]</span></strong></a></td>
                                <td>2012/12/02</td>
                                <td>
                                    <div class="d-flex">
                                        <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
                                        <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Herrod Chandler</td>
                                <td>BABCA</td>
                                <td>Sales Assistant</td>
                                <td></td>
                                <td>Female</td>
                                <td><a href="javascript:void(0);"><strong>987 654 3210</strong></a></td>
                                <td><a href="javascript:void(0);"><strong><span class="__cf_email__" data-cfemail="81e8efe7eec1e4f9e0ecf1ede4afe2eeec">[email&#160;protected]</span></strong></a></td>
                                <td>2012/08/06</td>
                                <td>
                                    <div class="d-flex">
                                        <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
                                        <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Rhona Davidson</td>
                                <td>MTACH</td>
                                <td>Integration</td>
                                <td></td>
                                <td>Male</td>
                                <td><a href="javascript:void(0);"><strong>987 654 3210</strong></a></td>
                                <td><a href="javascript:void(0);"><strong><span class="__cf_email__" data-cfemail="177e79717857726f767a677b723974787a">[email&#160;protected]</span></strong></a></td>
                                <td>2010/10/14</td>
                                <td>
                                    <div class="d-flex">
                                        <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
                                        <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Colleen Hurst</td>
                                <td>BABCA</td>
                                <td>Javascript Developer</td>
                                <td></td>
                                <td>Female</td>
                                <td><a href="javascript:void(0);"><strong>987 654 3210</strong></a></td>
                                <td><a href="javascript:void(0);"><strong><span class="__cf_email__" data-cfemail="a8c1c6cec7e8cdd0c9c5d8c4cd86cbc7c5">[email&#160;protected]</span></strong></a></td>
                                <td>2009/09/15</td>
                                <td>
                                    <div class="d-flex">
                                        <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
                                        <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Sonya Frost</td>
                                <td>BCOM</td>
                                <td>Software Engineer</td>
                                <td></td>
                                <td>Male</td>
                                <td><a href="javascript:void(0);"><strong>987 654 3210</strong></a></td>
                                <td><a href="javascript:void(0);"><strong><span class="__cf_email__" data-cfemail="bed7d0d8d1fedbc6dfd3ced2db90ddd1d3">[email&#160;protected]</span></strong></a></td>
                                <td>2008/12/13</td>
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
