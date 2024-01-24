@extends('layouts.backend.main')
@section('title')
    Accueil | Admin
@endsection
@section('sub-title')
    Tableau de bord
@endsection

@section('body')
    <div class="row">
        <div class="col-xl-6 col-xxl-12">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                    <div class="card-bx stacked card">
                        <img src="{{ asset('backend/images/card/card1.jpg') }}" alt="">
                        <div class="card-info">
                            <p class="mb-1 text-white fs-14">Main Balance</p>
                            <div class="d-flex justify-content-between">
                                <h2 class="num-text text-white mb-5 font-w600">$673,412.66</h2>
                                <svg width="36" height="36" viewbox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M19.2744 18.8013H16.0334V23.616H19.2744C19.9286 23.616 20.5354 23.3506 20.9613 22.9053C21.4066 22.4784 21.672 21.8726 21.672 21.1989C21.673 19.8813 20.592 18.8013 19.2744 18.8013Z" fill="white"></path>
                                    <path d="M18 0C8.07429 0 0 8.07429 0 18C0 27.9257 8.07429 36 18 36C27.9257 36 36 27.9247 36 18C36 8.07531 27.9247 0 18 0ZM21.6627 26.3355H19.5398V29.6722H17.3129V26.3355H16.0899V29.6722H13.8528V26.3355H9.91954V24.2414H12.0898V11.6928H9.91954V9.59863H13.8528V6.3288H16.0899V9.59863H17.3129V6.3288H19.5398V9.59863H21.4735C22.5535 9.59863 23.5491 10.044 24.2599 10.7547C24.9706 11.4655 25.416 12.4611 25.416 13.5411C25.416 15.6549 23.7477 17.3798 21.6627 17.4744C24.1077 17.4744 26.0794 19.4647 26.0794 21.9096C26.0794 24.3453 24.1087 26.3355 21.6627 26.3355Z" fill="white"></path>
                                    <path d="M20.7062 15.8441C21.095 15.4553 21.3316 14.9338 21.3316 14.3465C21.3316 13.1812 20.3842 12.2328 19.2178 12.2328H16.0334V16.4695H19.2178C19.7959 16.4695 20.3266 16.2226 20.7062 15.8441Z" fill="white"></path>
                                </svg>
                            </div>
                            <div class="d-flex">
                                <div class="mr-4 text-white">
                                    <p class="fs-12 mb-1 op6">VALID THRU</p>
                                    <span>08/21</span>
                                </div>
                                <div class="text-white">
                                    <p class="fs-12 mb-1 op6">CARD HOLDER</p>
                                    <span>Marquezz Silalahi</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                    <div class="card-bx stacked card">
                        <img src="{{ asset('backend/images/card/card2.jpg') }}" alt="">
                        <div class="card-info">
                            <p class="fs-14 mb-1 text-white">Main Balance</p>
                            <div class="d-flex justify-content-between">
                                <h2 class="num-text text-white mb-5 font-w600">$673,412.66</h2>
                                <svg width="55" height="34" viewbox="0 0 55 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="38.0091" cy="16.7788" r="16.7788" fill="white" fill-opacity="0.67"></circle>
                                    <circle cx="17.4636" cy="16.7788" r="16.7788" fill="white" fill-opacity="0.67"></circle>
                                </svg>
                            </div>
                            <div class="d-flex">
                                <div class="mr-4 text-white">
                                    <p class="fs-12 mb-1 op6">VALID THRU</p>
                                    <span>08/21</span>
                                </div>
                                <div class="text-white">
                                    <p class="fs-12 mb-1 op6">CARD HOLDER</p>
                                    <span>Marquezz Silalahi</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                    <div class="card-bx stacked card">
                        <img src="{{ asset('backend/images/card/card3.jpg') }}" alt="">
                        <div class="card-info">
                            <p class="mb-1 text-white fs-14">Main Balance</p>
                            <div class="d-flex justify-content-between">
                                <h2 class="num-text text-white mb-5 font-w600">$673,412.66</h2>
                                <svg width="55" height="34" viewbox="0 0 55 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="38.0091" cy="16.7788" r="16.7788" fill="white" fill-opacity="0.67"></circle>
                                    <circle cx="17.4636" cy="16.7788" r="16.7788" fill="white" fill-opacity="0.67"></circle>
                                </svg>
                            </div>
                            <div class="d-flex">
                                <div class="mr-4 text-white">
                                    <p class="fs-12 mb-1 op6">VALID THRU</p>
                                    <span>08/21</span>
                                </div>
                                <div class="text-white">
                                    <p class="fs-12 mb-1 op6">CARD HOLDER</p>
                                    <span>Marquezz Silalahi</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                    <div class="card-bx stacked card">
                        <img src="{{ asset('backend/images/card/card4.jpg') }}" alt="">
                        <div class="card-info">
                            <p class="mb-1 text-white fs-14">Main Balance</p>
                            <div class="d-flex justify-content-between">
                                <h2 class="num-text text-white mb-5 font-w600">$673,412.66</h2>
                                <svg width="55" height="34" viewbox="0 0 55 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="38.0091" cy="16.7788" r="16.7788" fill="white" fill-opacity="0.67"></circle>
                                    <circle cx="17.4636" cy="16.7788" r="16.7788" fill="white" fill-opacity="0.67"></circle>
                                </svg>
                            </div>
                            <div class="d-flex">
                                <div class="mr-4 text-white">
                                    <p class="fs-12 mb-1 op6">VALID THRU</p>
                                    <span>08/21</span>
                                </div>
                                <div class="text-white">
                                    <p class="fs-12 mb-1 op6">CARD HOLDER</p>
                                    <span>Marquezz Silalahi</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
