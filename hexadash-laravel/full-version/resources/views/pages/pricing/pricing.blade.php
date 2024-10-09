
@section('title',$title)
@section('description',$description)
@extends('layout.app')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <div class="breadcrumb-main">
                <h4 class="text-capitalize breadcrumb-title">{{ trans('menu.pricing-menu-title') }}</h4>
                <div class="breadcrumb-action justify-content-center flex-wrap">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#"><i class="las la-home"></i>Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{ trans('menu.pricing-menu-title') }}</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xxl-3 col-lg-4 col-sm-6 mb-30">
            <div class="card h-100">
                <div class="card-body p-30">
                    <div class="pricing d-flex align-items-center">
                        <span class=" pricing__tag color-dark order-bg-opacity-dark rounded-pill ">Free Forever</span>
                    </div>
                    <div class="pricing__price rounded">
                        <p class="pricing_value display-3 color-dark d-flex align-items-center text-capitalize fw-600 mb-1">
                            free
                        </p>
                        <p class="pricing_subtitle mb-0">For Individuals</p>
                    </div>
                    <div class="pricing__features">
                        <ul>
                            <li>
                                <span class="fa fa-check"></span>100MB file space
                            </li>
                            <li>
                                <span class="fa fa-check"></span>2 active projects
                            </li>
                            <li>
                                <span class="fa fa-check"></span>Limited boards
                            </li>
                            <li>
                                <span class="fa fa-check"></span>Basic project management
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="price_action d-flex pb-30 ps-30">
                    <button class="btn btn-default btn-squared btn-outline-light text-capitalize px-30 color-gray fw-500">Current Plan
                    </button>
                </div>
            </div>
        </div>
        <div class="col-xxl-3 col-lg-4 col-sm-6 mb-30">
            <div class="card h-100">
                <div class="card-body p-30">
                    <div class="pricing d-flex align-items-center">
                        <span class=" pricing__tag color-primary order-bg-opacity-primary rounded-pill ">Basic Plan</span>
                    </div>
                    <div class="pricing__price rounded">
                        <p class="pricing_value display-3 color-dark d-flex align-items-center text-capitalize fw-600 mb-1">
                            <sup>$</sup>19
                            <small class="pricing_user">Per month</small>
                        </p>
                        <p class="pricing_subtitle mb-0">For 2 Users</p>
                    </div>
                    <div class="pricing__features">
                        <ul>
                            <li>
                                <span class="fa fa-check"></span>100GB file space
                            </li>
                            <li>
                                <span class="fa fa-check"></span>300 projects
                            </li>
                            <li>
                                <span class="fa fa-check"></span>Limited boards
                            </li>
                            <li>
                                <span class="fa fa-check"></span>Basic project management
                            </li>
                            <li>
                                <span class="fa fa-check"></span>Custom Post Types
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="price_action d-flex pb-30 ps-30">
                    <button class="btn btn-primary btn-default btn-squared text-capitalize px-30">Get Started
                    </button>
                </div>
            </div>
        </div>
        <div class="col-xxl-3 col-lg-4 col-sm-6 mb-30">
            <div class="card h-100">
                <div class="card-body p-30">
                    <div class="pricing d-flex align-items-center">
                        <span class=" pricing__tag color-secondary order-bg-opacity-secondary rounded-pill ">Business</span>
                    </div>
                    <div class="pricing__price rounded">
                        <p class="pricing_value display-3 color-dark d-flex align-items-center text-capitalize fw-600 mb-1">
                            <sup>$</sup>39
                            <small class="pricing_user">Per month</small>
                        </p>
                        <p class="pricing_subtitle mb-0">For 10 Users</p>
                    </div>
                    <div class="pricing__features">
                        <ul>
                            <li>
                                <span class="fa fa-check"></span>500GB+ file space
                            </li>
                            <li>
                                <span class="fa fa-check"></span>Unlimited projects
                            </li>
                            <li>
                                <span class="fa fa-check"></span>Unlimited boards
                            </li>
                            <li>
                                <span class="fa fa-check"></span>Basic project management
                            </li>
                            <li>
                                <span class="fa fa-check"></span>Custom Post Types
                            </li>
                            <li>
                                <span class="fa fa-check"></span>Subtasks
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="price_action d-flex pb-30 ps-30">
                    <button class="btn btn-secondary btn-default btn-squared text-capitalize px-30">Get Started
                    </button>
                </div>
            </div>
        </div>
        <div class="col-xxl-3 col-lg-4 col-sm-6 mb-30">
            <div class="card h-100">
                <div class="card-body p-30">
                    <div class="pricing d-flex align-items-center">
                        <span class=" pricing__tag color-success order-bg-opacity-success rounded-pill ">Enterprise</span>
                    </div>
                    <div class="pricing__price rounded">
                        <p class="pricing_value display-3 color-dark d-flex align-items-center text-capitalize fw-600 mb-1">
                            <sup>$</sup>79
                            <small class="pricing_user">Per month</small>
                        </p>
                        <p class="pricing_subtitle mb-0">For 50 Users</p>
                    </div>
                    <div class="pricing__features">
                        <ul>
                            <li>
                                <span class="fa fa-check"></span>500GB+ file space
                            </li>
                            <li>
                                <span class="fa fa-check"></span>Unlimited projects
                            </li>
                            <li>
                                <span class="fa fa-check"></span>Unlimited boards
                            </li>
                            <li>
                                <span class="fa fa-check"></span>Basic project management
                            </li>
                            <li>
                                <span class="fa fa-check"></span>Custom Post Types
                            </li>
                            <li>
                                <span class="fa fa-check"></span>Subtasks
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="price_action d-flex pb-30 ps-30">
                    <button class="btn btn-success btn-default btn-squared text-capitalize px-30">Get Started
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-white pt-50 pb-40 mb-30 px-xxl-0 px-30 shadow-lg rounded-xl">
        <div role="tabpanel">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 text-center">
                        <ul class="ai-list mb-40 mt-20">
                            <li class="ai-list-item">
                                <span class="monthly active space-nowrap">Billed monthly</span>
                            </li>
                            <li class="ai-list-item">
                                <input class="ail ail-light" id="ai1" type="checkbox" name="intervaltype" />
                                <label class="ail-btn" for="ai1" data-bs-target="#monthly"></label>
                            </li>
                            <li class="ai-list-item">
                                <span class="yearly space-nowrap">Billed annually</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane active" id="monthly">
                    <div class="row justify-content-center">
                        <div class="col-xxl-3 col-lg-4 col-sm-6 mb-30">
                            <div class="card h-100">
                                <div class="card-body p-30">
                                    <div class="pricing d-flex align-items-center">
                                        <span class=" pricing__tag color-dark order-bg-opacity-dark rounded-pill ">Free Forever</span>
                                    </div>
                                    <div class="pricing__price rounded">
                                        <p class="pricing_value display-3 color-dark d-flex align-items-center text-capitalize fw-600 mb-1">
                                            free
                                        </p>
                                        <p class="pricing_subtitle mb-0">For Individuals</p>
                                    </div>
                                    <div class="pricing__features">
                                        <ul>
                                            <li>
                                                <span class="fa fa-check"></span>100MB file space
                                            </li>

                                            <li>
                                                <span class="fa fa-check"></span>2 active projects
                                            </li>
                                            <li>
                                                <span class="fa fa-check"></span>Limited boards
                                            </li>
                                            <li>
                                                <span class="fa fa-check"></span>Basic project management
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="price_action d-flex pb-30 ps-30">
                                    <button class="btn btn-default btn-squared btn-outline-light text-capitalize px-30 color-gray fw-500">Current Plan
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-lg-4 col-sm-6 mb-30">
                            <div class="card h-100">
                                <div class="card-body p-30">
                                    <div class="pricing d-flex align-items-center">
                                        <span class=" pricing__tag color-primary order-bg-opacity-primary rounded-pill ">Professional</span>
                                        <span class="pricing__badge bg-danger">-40%</span>
                                    </div>
                                    <div class="pricing__price rounded">
                                        <p class="pricing_value display-3 color-dark d-flex align-items-center text-capitalize fw-600 mb-1">
                                            <span class="pricing_offer strikethrough">$35</span>
                                            <sup>$</sup>50
                                            <small class="pricing_user">Per month</small>
                                        </p>
                                        <p class="pricing_subtitle mb-0">For 2 Users</p>
                                    </div>
                                    <div class="pricing__features">
                                        <ul>
                                            <li>
                                                <span class="fa fa-check"></span>500GB+ file space
                                            </li>
                                            <li>
                                                <span class="fa fa-check"></span>Limited boards
                                            </li>
                                            <li>
                                                <span class="fa fa-check"></span>Basic project management
                                            </li>
                                            <li>
                                                <span class="fa fa-check"></span>Custom Post Types
                                            </li>
                                            <li>
                                                <span class="fa fa-check"></span>Custom Post Types
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="price_action d-flex pb-30 ps-30">
                                    <button class="btn btn-primary btn-default btn-squared text-capitalize px-30">Get Started
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-lg-4 col-sm-6 mb-30">
                            <div class="card h-100">
                                <div class="card-body p-30">
                                    <div class="pricing d-flex align-items-center">
                                        <span class=" pricing__tag color-secondary order-bg-opacity-secondary rounded-pill ">Business</span>
                                        <span class="pricing__badge bg-danger">-40%</span>
                                    </div>
                                    <div class="pricing__price rounded">
                                        <p class="pricing_value display-3 color-dark d-flex align-items-center text-capitalize fw-600 mb-1">
                                            <span class="pricing_offer strikethrough">$35</span>
                                            <sup>$</sup>91
                                            <small class="pricing_user">Per month</small>
                                        </p>
                                        <p class="pricing_subtitle mb-0">For 10 Users</p>
                                    </div>
                                    <div class="pricing__features">
                                        <ul>
                                            <li>
                                                <span class="fa fa-check"></span>500GB+ file space
                                            </li>
                                            <li>
                                                <span class="fa fa-check"></span>Unlimited projects
                                            </li>
                                            <li>
                                                <span class="fa fa-check"></span>Unlimited boards
                                            </li>
                                            <li>
                                                <span class="fa fa-check"></span>Basic project management
                                            </li>
                                            <li>
                                                <span class="fa fa-check"></span>Custom Post Types
                                            </li>
                                            <li>
                                                <span class="fa fa-check"></span>Subtasks
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="price_action d-flex pb-30 ps-30">
                                    <button class="btn btn-secondary btn-default btn-squared text-capitalize px-30">Get Started
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div role="tabpanel" class="tab-pane" id="yearly">
                    <div class="row justify-content-center">
                        <div class="col-xxl-3 col-lg-4 col-sm-6 mb-30">
                            <div class="card h-100">
                                <div class="card-body p-30">
                                    <div class="pricing d-flex align-items-center">
                                        <span class=" pricing__tag color-dark order-bg-opacity-dark rounded-pill ">Free Forever</span>
                                    </div>
                                    <div class="pricing__price rounded">
                                        <p class="pricing_value display-3 color-dark d-flex align-items-center text-capitalize fw-600 mb-1">
                                            free
                                        </p>
                                        <p class="pricing_subtitle mb-0">For Individuals</p>
                                    </div>
                                    <div class="pricing__features">
                                        <ul>
                                            <li>
                                                <span class="fa fa-check"></span>100MB file space
                                            </li>

                                            <li>
                                                <span class="fa fa-check"></span>2 active projects
                                            </li>
                                            <li>
                                                <span class="fa fa-check"></span>Limited boards
                                            </li>
                                            <li>
                                                <span class="fa fa-check"></span>Basic project management
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="price_action d-flex pb-30 ps-30">
                                    <button class="btn btn-default btn-squared btn-outline-light text-capitalize px-30  color-gray fw-500">Current Plan
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-lg-4 col-sm-6 mb-30">
                            <div class="card h-100">
                                <div class="card-body p-30">
                                    <div class="pricing d-flex align-items-center">
                                        <span class=" pricing__tag color-primary order-bg-opacity-primary rounded-pill ">Professional</span>
                                        <span class="pricing__badge bg-danger">-40%</span>
                                    </div>
                                    <div class="pricing__price rounded">
                                        <p class="pricing_value display-3 color-dark d-flex align-items-center text-capitalize fw-600 mb-1">
                                            <span class="pricing_offer strikethrough">$35</span>
                                            <sup>$</sup>21
                                            <small class="pricing_user">Per month</small>
                                        </p>
                                        <p class="pricing_subtitle mb-0">For 2 Users</p>
                                    </div>
                                    <div class="pricing__features">
                                        <ul>
                                            <li>
                                                <span class="fa fa-check"></span>500GB+ file space
                                            </li>
                                            <li>
                                                <span class="fa fa-check"></span>Limited boards
                                            </li>
                                            <li>
                                                <span class="fa fa-check"></span>Basic project management
                                            </li>
                                            <li>
                                                <span class="fa fa-check"></span>Custom Post Types
                                            </li>
                                            <li>
                                                <span class="fa fa-check"></span>Custom Post Types
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="price_action d-flex pb-30 ps-30">
                                    <button class="btn btn-primary btn-default btn-squared text-capitalize px-30">Get Started
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-lg-4 col-sm-6 mb-30">
                            <div class="card h-100">
                                <div class="card-body p-30">
                                    <div class="pricing d-flex align-items-center">
                                        <span class=" pricing__tag color-secondary order-bg-opacity-secondary rounded-pill ">Business</span>
                                        <span class="pricing__badge bg-danger">-40%</span>
                                    </div>
                                    <div class="pricing__price rounded">
                                        <p class="pricing_value display-3 color-dark d-flex align-items-center text-capitalize fw-600 mb-1">
                                            <span class="pricing_offer strikethrough">$35</span>
                                            <sup>$</sup>59
                                            <small class="pricing_user">Per month</small>
                                        </p>
                                        <p class="pricing_subtitle mb-0">For 10 Users</p>
                                    </div>
                                    <div class="pricing__features">
                                        <ul>
                                            <li>
                                                <span class="fa fa-check"></span>500GB+ file space
                                            </li>
                                            <li>
                                                <span class="fa fa-check"></span>Unlimited projects
                                            </li>
                                            <li>
                                                <span class="fa fa-check"></span>Unlimited boards
                                            </li>
                                            <li>
                                                <span class="fa fa-check"></span>Basic project management
                                            </li>
                                            <li>
                                                <span class="fa fa-check"></span>Custom Post Types
                                            </li>
                                            <li>
                                                <span class="fa fa-check"></span>Subtasks
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="price_action d-flex pb-30 ps-30">
                                    <button class="btn btn-secondary btn-default btn-squared text-capitalize px-30">Get Started
                                    </button>
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