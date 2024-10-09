@section('title',$title)
@section('description',$description)
@extends('layout.app')
@section('content')
<div class="dm-page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">

                <div class="breadcrumb-main">
                    <h4 class="text-capitalize breadcrumb-title">{{ trans('menu.ui-carousel') }}</h4>
                    <div class="breadcrumb-action justify-content-center flex-wrap">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#"><i class="las la-home"></i>{{ trans('menu.ui-menu-title') }}</a></li>
                                <li class="breadcrumb-item active" aria-current="page">{{ trans('menu.ui-carousel') }}</li>
                            </ol>
                        </nav>
                    </div>
                </div>

            </div>
            <div class="col-lg-6">
                <div class="card card-default card-md mb-4">
                    <div class="card-header">
                        <h6>Basic card</h6>
                    </div>
                    <div class="card-body">


                        <div class="slick-slider  global-slider slick-dots-bottom" data-dots-slick='true'>
                            <div class="slick-slider__single d-flex">
                                <p>1</p>
                            </div>
                            <div class="slick-slider__single d-flex ">
                                <p>2</p>
                            </div>
                            <div class="slick-slider__single d-flex">
                                <p>3</p>
                            </div>
                        </div>


                    </div>
                </div>
                <!-- ends: .card -->

                <div class="card card-default card-md mb-4">
                    <div class="card-header">
                        <h6>Scroll automatically</h6>
                    </div>
                    <div class="card-body">


                        <div class="slick-slider  global-slider slick-dots-bottom" data-dots-slick='true' data-autoplay-slick='true'>
                            <div class="slick-slider__single d-flex">
                                <p>1</p>
                            </div>
                            <div class="slick-slider__single d-flex ">
                                <p>2</p>
                            </div>
                            <div class="slick-slider__single d-flex">
                                <p>3</p>
                            </div>
                        </div>


                    </div>
                </div>
                <!-- ends: .card -->
            </div>
            <!-- ends: .col-12 -->
            <div class="col-lg-6">
                <div class="card card-default card-md mb-4">
                    <div class="card-header">
                        <h6>Position</h6>
                    </div>
                    <div class="card-body">
                        <div class="carousel-position">
                            <div class="dm-nav-controller">
                                <div class="btn-group dm-button-group btn-group-normal nav" role="tablist">
                                    <a href="#top" class="btn btn-sm btn-outline-light color-light nav-link active" id="position-top" data-bs-toggle="tab" role="tab" aria-selected="true">Top</a>
                                    <a href="#bottom" class="btn btn-sm btn-outline-light color-light nav-link" id="position-bottom" data-bs-toggle="tab" role="tab" aria-selected="false">Bottom</a>
                                    <a href="#left" class="btn btn-sm btn-outline-light color-light nav-link" id="position-left" data-bs-toggle="tab" role="tab" aria-selected="false">Left</a>
                                    <a href="#right" class="btn btn-sm btn-outline-light color-light nav-link" id="position-right" data-bs-toggle="tab" role="tab" aria-selected="false">Right</a>
                                </div>

                                <div class="carouse-position-content tab-content">
                                    <div class="tab-pane fade show active" id="top" role="tabpanel" aria-labelledby="position-top">


                                        <div class="slick-slider  global-slider slick-dots-top" data-dots-slick='true'>
                                            <div class="slick-slider__single d-flex">
                                                <p>1</p>
                                            </div>
                                            <div class="slick-slider__single d-flex ">
                                                <p>2</p>
                                            </div>
                                            <div class="slick-slider__single d-flex">
                                                <p>3</p>
                                            </div>
                                        </div>


                                    </div>
                                    <div class="tab-pane fade" id="bottom" role="tabpanel" aria-labelledby="position-bottom">


                                        <div class="slick-slider  global-slider slick-dots-bottom" data-dots-slick='true'>
                                            <div class="slick-slider__single d-flex">
                                                <p>1</p>
                                            </div>
                                            <div class="slick-slider__single d-flex ">
                                                <p>2</p>
                                            </div>
                                            <div class="slick-slider__single d-flex">
                                                <p>3</p>
                                            </div>
                                        </div>


                                    </div>
                                    <div class="tab-pane fade" id="left" role="tabpanel" aria-labelledby="position-left">


                                        <div class="slick-slider  global-slider slick-dots-left" data-dots-slick='true'>
                                            <div class="slick-slider__single d-flex">
                                                <p>1</p>
                                            </div>
                                            <div class="slick-slider__single d-flex ">
                                                <p>2</p>
                                            </div>
                                            <div class="slick-slider__single d-flex">
                                                <p>3</p>
                                            </div>
                                        </div>


                                    </div>
                                    <div class="tab-pane fade" id="right" role="tabpanel" aria-labelledby="position-right">


                                        <div class="slick-slider  global-slider slick-dots-right" data-dots-slick='true'>
                                            <div class="slick-slider__single d-flex">
                                                <p>1</p>
                                            </div>
                                            <div class="slick-slider__single d-flex ">
                                                <p>2</p>
                                            </div>
                                            <div class="slick-slider__single d-flex">
                                                <p>3</p>
                                            </div>
                                        </div>


                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ends: .card -->
                <div class="card card-default card-md mb-4">
                    <div class="card-header">
                        <h6>Fade in</h6>
                    </div>
                    <div class="card-body">


                        <div class="slick-slider  global-slider slick-dots-bottom" data-dots-slick='true' data-autoplay-slick='true' data-fade-slick='true'>
                            <div class="slick-slider__single d-flex">
                                <p>1</p>
                            </div>
                            <div class="slick-slider__single d-flex ">
                                <p>2</p>
                            </div>
                            <div class="slick-slider__single d-flex">
                                <p>3</p>
                            </div>
                        </div>


                    </div>
                </div>
                <!-- ends: .card -->
            </div>
            <!-- ends: .col-12 -->
        </div>
    </div>
</div>
@endsection