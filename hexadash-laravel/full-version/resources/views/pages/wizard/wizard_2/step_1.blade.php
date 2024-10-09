@section('title', $title)
@section('description', $description)
@extends('layout.app')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="shop-breadcrumb">
                    <div class="breadcrumb-main">
                        <h4 class="text-capitalize breadcrumb-title">{{ trans('menu.wizard-two') }}</h4>
                        <div class="breadcrumb-action justify-content-center flex-wrap">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#"><i class="las la-home"></i>Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">{{ trans('menu.wizard-two') }}
                                    </li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class=" checkout wizard1 wizard7 global-shadow px-sm-50 px-20 py-sm-50 py-30 mb-30 bg-white radius-xl w-100">
            <div class="row justify-content-center">
                <div class="col-xl-8">
                    <div class="checkout-progress-indicator content-center">
                        <div class="checkout-progress">
                            <div class="step current" id="1">
                                <span>1</span>
                                <span>Start</span>
                            </div>
                            <div class="current"><img src="{{ asset('assets/img/svg/checkout.svg') }}" alt="img" class="svg"></div>
                            <div class="step" id="2">
                                <span>2</span>
                                <span>Profile</span>
                            </div>
                            <div class="current"><img src="{{ asset('assets/img/svg/checkout.svg') }}" alt="img" class="svg"></div>
                            <div class="step" id="3">
                                <span>3</span>
                                <span>Hints</span>
                            </div>
                            <div class="current"><img src="{{ asset('assets/img/svg/checkout.svg') }}" alt="img" class="svg"></div>
                            <div class="step" id="4">
                                <span>4</span>
                                <span>Finished</span>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-xl-7 col-lg-8 col-sm-10">
                            <div class="card checkout-shipping-form px-30 pt-2 pb-30 border-color">
                                <div class="card-header border-bottom-0 align-content-start pb-sm-0 pb-1 px-0">
                                    <h4 class="fw-500">1. Please create your account</h4>
                                </div>
                                <div class="card-body px-0 pb-0">
                                    <div class="edit-profile__body">
                                        <form>
                                            <div class="form-group">
                                                <label for="name1">Username</label>
                                                <input type="text" class="form-control" id="name1"
                                                    placeholder="Usename">
                                            </div>
                                            <div class="form-group create-passord">
                                                <label for="phoneNumber1">Password</label>
                                                <input type="password" class="form-control" id="phoneNumber1"
                                                    placeholder="Password" value="121445">
                                            </div>
                                            <div class="form-group create-passord">
                                                <label for="phoneNumber">Confirm Password</label>
                                                <input type="password" class="form-control" id="phoneNumber"
                                                    placeholder="Password" value="121445">
                                            </div>
                                            <div class="d-flex pt-15 justify-content-md-end justify-content-center">
                                                <a href="{{ $next_page_url }}"
                                                    class="btn btn-primary btn-default btn-squared text-capitalize text-white">Save
                                                    & Next<i class="ml-10 me-0 las la-arrow-right"></i></a>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
