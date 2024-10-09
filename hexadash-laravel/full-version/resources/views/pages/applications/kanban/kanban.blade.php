@section('title',$title)
@section('description',$description)
@extends('layout.app')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">

            <div class="breadcrumb-main">
                <h4 class="text-capitalize breadcrumb-title">{{ trans('menu.kanban-menu-title') }}</h4>
                <div class="breadcrumb-action justify-content-center flex-wrap">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#"><i class="las la-home"></i>Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{ trans('menu.kanban-menu-title') }}</li>
                        </ol>
                    </nav>
                </div>
            </div>

        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <!-- Lists container -->

            <div class="modal fade kanban-modal__card kanban__modal" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-scrollable">
                    <div class="modal-content">
                        <div class=" kanban-modal__header-wrapper">
                            <div class="kanban-modal__header">
                                <h5 class="modal-title" id="exampleModalLabel">File Manager Design</h5>
                                <span>in list Active Project</span>
                            </div>
                            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                <img src="{{ asset('assets/img/svg/x.svg') }}" alt="x" class="svg">
                            </button>
                        </div>
                        <div class="modal-body kanban-modal__body">
                            <div class="kanban-modal__form ">
                                <div class="mb-30">
                                    <label for="exampleFormControlTextarea1111" class="form-label">Description</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1111" rows="3" placeholder="Add a more detailed description…"></textarea>
                                </div>
                                <button class="btn btn-primary btn-sm btn-squared  rounded"><img src="{{ asset('assets/img/svg/check-square.svg') }}" alt="check-square" class="svg"> Add Checklist</button>
                            </div>


                            <div class="kanban-modal__research mt-30">
                                <h6>Research </h6>
                                <button class="btn btn-primary btn-sm btn-squared btn-transparent-primary ">delete</button>
                            </div>
                            <div class="kanban-modal__progress">
                                <div class="user-group-progress-bar">
                                    <div class="progress-wrap d-flex align-items-center">
                                        <span class="progress-percentage ms-0 me-10">100%</span>
                                        <div class="progress">
                                            <div class="progress-bar bg-success" role="progressbar" style="width: 100%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="kanban-modal__list">
                                <ul>
                                    <li>
                                        <div class="checkbox-group d-flex">
                                            <div class="checkbox-theme-default custom-checkbox checkbox-group__single d-flex">
                                                <input class="checkbox" type="checkbox" id="check-grp-1">
                                                <label for="check-grp-1" class=" strikethrough">
                                                    File Manager Design
                                                </label>
                                            </div>
                                            <div class="dropdown dropdown-click">
                                                <button class="btn-link border-0 bg-transparent p-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <img src="{{ asset('assets/img/svg/more-horizontal.svg') }}" alt="more-horizontal" class="svg">
                                                </button>
                                                <div class="dropdown-default dropdown-bottomRight dropdown-menu" style="">
                                                    <a class="dropdown-item" href="#">Delete list</a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="checkbox-group d-flex">
                                            <div class="checkbox-theme-default custom-checkbox checkbox-group__single d-flex">
                                                <input class="checkbox" type="checkbox" id="check-grp-2">
                                                <label for="check-grp-2" class=" strikethrough">
                                                    Wireframe for design
                                                </label>
                                            </div>
                                            <div class="dropdown dropdown-click">
                                                <button class="btn-link border-0 bg-transparent p-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <img src="{{ asset('assets/img/svg/more-horizontal.svg') }}" alt="more-horizontal" class="svg">
                                                </button>
                                                <div class="dropdown-default dropdown-bottomRight dropdown-menu" style="">
                                                    <a class="dropdown-item" href="#">Delete list</a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="checkbox-group d-flex">
                                            <div class="checkbox-theme-default custom-checkbox checkbox-group__single d-flex">
                                                <input class="checkbox" type="checkbox" id="check-grp-3">
                                                <label for="check-grp-3" class="strikethrough">
                                                    Make prototypes
                                                </label>
                                            </div>
                                            <div class="dropdown dropdown-click">
                                                <button class="btn-link border-0 bg-transparent p-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <img src="{{ asset('assets/img/svg/more-horizontal.svg') }}" alt="more-horizontal" class="svg">
                                                </button>
                                                <div class="dropdown-default dropdown-bottomRight dropdown-menu" style="">
                                                    <a class="dropdown-item" href="#">Delete list</a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="checkbox-group d-flex">
                                            <div class="checkbox-theme-default custom-checkbox checkbox-group__single d-flex">
                                                <input class="checkbox" type="checkbox" id="check-grp-4">
                                                <label for="check-grp-4" class=" strikethrough">
                                                    Add images to the product gallery
                                                </label>
                                            </div>
                                            <div class="dropdown dropdown-click">
                                                <button class="btn-link border-0 bg-transparent p-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <img src="{{ asset('assets/img/svg/more-horizontal.svg') }}" alt="more-horizontal" class="svg">
                                                </button>
                                                <div class="dropdown-default dropdown-bottomRight dropdown-menu" style="">
                                                    <a class="dropdown-item" href="#">Delete list</a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                                <button class="btn btn-primary btn-sm btn-squared">Add an item</button>
                            </div>

                            <div class="kanban-modal__research mt-30">
                                <h6>Research </h6>
                                <button class="btn btn-primary btn-sm btn-squared btn-transparent-primary ">delete</button>
                            </div>
                            <div class="kanban-modal__progress">
                                <div class="user-group-progress-bar">
                                    <div class="progress-wrap d-flex align-items-center">
                                        <span class="progress-percentage ms-0 me-10">100%</span>
                                        <div class="progress">
                                            <div class="progress-bar bg-success" role="progressbar" style="width: 100%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="kanban-modal__list">
                                <ul>
                                    <li>
                                        <div class="checkbox-group d-flex">
                                            <div class="checkbox-theme-default custom-checkbox checkbox-group__single d-flex">
                                                <input class="checkbox" type="checkbox" id="check-grp-5">
                                                <label for="check-grp-5" class=" strikethrough">
                                                    File Manager Design
                                                </label>
                                            </div>
                                            <div class="dropdown dropdown-click">
                                                <button class="btn-link border-0 bg-transparent p-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <img src="{{ asset('assets/img/svg/more-horizontal.svg') }}" alt="more-horizontal" class="svg">
                                                </button>
                                                <div class="dropdown-default dropdown-bottomRight dropdown-menu" style="">
                                                    <a class="dropdown-item" href="#">Delete list</a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="checkbox-group d-flex">
                                            <div class="checkbox-theme-default custom-checkbox checkbox-group__single d-flex">
                                                <input class="checkbox" type="checkbox" id="check-grp-6">
                                                <label for="check-grp-6" class=" strikethrough">
                                                    Wireframe for design
                                                </label>
                                            </div>
                                            <div class="dropdown dropdown-click">
                                                <button class="btn-link border-0 bg-transparent p-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <img src="{{ asset('assets/img/svg/more-horizontal.svg') }}" alt="more-horizontal" class="svg">
                                                </button>
                                                <div class="dropdown-default dropdown-bottomRight dropdown-menu" style="">
                                                    <a class="dropdown-item" href="#">Delete list</a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="checkbox-group d-flex">
                                            <div class="checkbox-theme-default custom-checkbox checkbox-group__single d-flex">
                                                <input class="checkbox" type="checkbox" id="check-grp-7">
                                                <label for="check-grp-7" class="strikethrough">
                                                    Make prototypes
                                                </label>
                                            </div>
                                            <div class="dropdown dropdown-click">
                                                <button class="btn-link border-0 bg-transparent p-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <img src="{{ asset('assets/img/svg/more-horizontal.svg') }}" alt="more-horizontal" class="svg">
                                                </button>
                                                <div class="dropdown-default dropdown-bottomRight dropdown-menu" style="">
                                                    <a class="dropdown-item" href="#">Delete list</a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="checkbox-group d-flex">
                                            <div class="checkbox-theme-default custom-checkbox checkbox-group__single d-flex">
                                                <input class="checkbox" type="checkbox" id="check-grp-8">
                                                <label for="check-grp-8" class=" strikethrough">
                                                    Add images to the product gallery
                                                </label>
                                            </div>
                                            <div class="dropdown dropdown-click">
                                                <button class="btn-link border-0 bg-transparent p-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <img src="{{ asset('assets/img/svg/more-horizontal.svg') }}" alt="more-horizontal" class="svg">
                                                </button>
                                                <div class="dropdown-default dropdown-bottomRight dropdown-menu" style="">
                                                    <a class="dropdown-item" href="#">Delete list</a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                                <button class="btn btn-primary btn-sm btn-squared">Add an item</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="kanban-board__card mb-50">
                <div class="kanban-header">
                    <h4>Basic Kanban Board</h4>
                </div>
                <section class="lists-container kanban-container ">

                    <div class="list kanban-list draggable" draggable="true">
                        <div class="kanban-tops list-tops">
                            <div class="d-flex justify-content-between align-items-center py-10">
                                <h3 class="list-title">To Do</h3>
                                <div class="dropdown dropdown-click">
                                    <button class="btn-link border-0 bg-transparent p-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <img src="{{ asset('assets/img/svg/more-horizontal.svg') }}" alt="more-horizontal" class="svg">
                                    </button>
                                    <div class="dropdown-default dropdown-bottomRight dropdown-menu" style="">
                                        <a class="dropdown-item" href="#">Edit Card Title</a>
                                        <a class="dropdown-item" href="#">Delete Card</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <ul class="kanban-items list-items  drag-drop ">

                            <li class="d-flex justify-content-between align-items-center ">
                                <div class="lists-items-title" data-bs-toggle="modal" data-bs-target="#exampleModal" data-whatever="@mdo72">
                                    File Manager Design
                                </div>
                                <button class="open-popup-modal" type="button">
                                    <img src="{{ asset('assets/img/svg/edit-2.svg') }}" alt="edit-2" class="svg">
                                </button>
                                <div class="popup-overlay">
                                    <!--Creates the popup content-->
                                    <div class="popup-content">
                                        <div class="mb-10 popup-textarea">
                                            <textarea class="form-control" rows="3" placeholder="Edit title..."></textarea>
                                        </div>
                                        <div class="d-flex align-items-center popup-button">
                                            <button class="save-title-changes btn btn-primary btn-sm btn-squared rounded" type="submit">Submit</button>
                                        </div>
                                        <div class="overlay-close"></div>
                                    </div>
                                </div>
                            </li>


                            <li class="d-flex justify-content-between align-items-center ">
                                <div class="lists-items-title" data-bs-toggle="modal" data-bs-target="#exampleModal" data-whatever="@mdo2">
                                    CRM Dashboard
                                </div>
                                <button class="open-popup-modal" type="button">
                                    <img src="{{ asset('assets/img/svg/edit-2.svg') }}" alt="edit-2" class="svg">
                                </button>
                                <div class="popup-overlay">
                                    <!--Creates the popup content-->
                                    <div class="popup-content">
                                        <div class="mb-10 popup-textarea">
                                            <textarea class="form-control" rows="3" placeholder="Edit title..."></textarea>
                                        </div>
                                        <div class="d-flex align-items-center popup-button">
                                            <button class="save-title-changes btn btn-primary btn-sm btn-squared rounded" type="submit">Submit</button>
                                        </div>
                                        <div class="overlay-close"></div>
                                    </div>
                                </div>
                            </li>


                            <li class="d-flex justify-content-between align-items-center ">
                                <div class="lists-items-title" data-bs-toggle="modal" data-bs-target="#exampleModal" data-whatever="@mdo3">
                                    Knowledgebase
                                </div>
                                <button class="open-popup-modal" type="button">
                                    <img src="{{ asset('assets/img/svg/edit-2.svg') }}" alt="edit-2" class="svg">
                                </button>
                                <div class="popup-overlay">
                                    <!--Creates the popup content-->
                                    <div class="popup-content">
                                        <div class="mb-10 popup-textarea">
                                            <textarea class="form-control" rows="3" placeholder="Edit title..."></textarea>
                                        </div>
                                        <div class="d-flex align-items-center popup-button">
                                            <button class="save-title-changes btn btn-primary btn-sm btn-squared rounded" type="submit">Submit</button>
                                        </div>
                                        <div class="overlay-close"></div>
                                    </div>
                                </div>
                            </li>


                            <li class="d-flex justify-content-between align-items-center ">
                                <div class="lists-items-title" data-bs-toggle="modal" data-bs-target="#exampleModal" data-whatever="@mdo4">
                                    Drag &amp; Drop
                                </div>
                                <button class="open-popup-modal" type="button">
                                    <img src="{{ asset('assets/img/svg/edit-2.svg') }}" alt="edit-2" class="svg">
                                </button>
                                <div class="popup-overlay">
                                    <!--Creates the popup content-->
                                    <div class="popup-content">
                                        <div class="mb-10 popup-textarea">
                                            <textarea class="form-control" rows="3" placeholder="Edit title..."></textarea>
                                        </div>
                                        <div class="d-flex align-items-center popup-button">
                                            <button class="save-title-changes btn btn-primary btn-sm btn-squared rounded" type="submit">Submit</button>
                                        </div>
                                        <div class="overlay-close"></div>
                                    </div>
                                </div>
                            </li>


                            <li class="d-flex justify-content-between align-items-center ">
                                <div class="lists-items-title" data-bs-toggle="modal" data-bs-target="#exampleModal" data-whatever="@mdo5">
                                    File Manager Design
                                </div>
                                <button class="open-popup-modal" type="button">
                                    <img src="{{ asset('assets/img/svg/edit-2.svg') }}" alt="edit-2" class="svg">
                                </button>
                                <div class="popup-overlay">
                                    <!--Creates the popup content-->
                                    <div class="popup-content">
                                        <div class="mb-10 popup-textarea">
                                            <textarea class="form-control" rows="3" placeholder="Edit title..."></textarea>
                                        </div>
                                        <div class="d-flex align-items-center popup-button">
                                            <button class="save-title-changes btn btn-primary btn-sm btn-squared rounded" type="submit">Submit</button>
                                        </div>
                                        <div class="overlay-close"></div>
                                    </div>
                                </div>
                            </li>


                            <li class="d-flex justify-content-between align-items-center ">
                                <div class="lists-items-title" data-bs-toggle="modal" data-bs-target="#exampleModal" data-whatever="@mdo6">
                                    Knowledgebase
                                </div>
                                <button class="open-popup-modal" type="button">
                                    <img src="{{ asset('assets/img/svg/edit-2.svg') }}" alt="edit-2" class="svg">
                                </button>
                                <div class="popup-overlay">
                                    <!--Creates the popup content-->
                                    <div class="popup-content">
                                        <div class="mb-10 popup-textarea">
                                            <textarea class="form-control" rows="3" placeholder="Edit title..."></textarea>
                                        </div>
                                        <div class="d-flex align-items-center popup-button">
                                            <button class="save-title-changes btn btn-primary btn-sm btn-squared rounded" type="submit">Submit</button>
                                        </div>
                                        <div class="overlay-close"></div>
                                    </div>
                                </div>
                            </li>

                        </ul>

                        <button class="add-card-btn"><img src="{{ asset('assets/img/svg/plus.svg') }}" alt="plus" class="svg"> Add a
                            card</button>

                    </div>

                    <div class="kanban-list list draggable" draggable="true">
                        <div class="kanban-tops list-tops">
                            <div class="d-flex justify-content-between align-items-center py-10">
                                <h3 class="list-title">In Progress</h3>
                                <div class="dropdown dropdown-click">
                                    <button class="btn-link border-0 bg-transparent p-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <img src="{{ asset('assets/img/svg/more-horizontal.svg') }}" alt="more-horizontal" class="svg">
                                    </button>
                                    <div class="dropdown-default dropdown-bottomRight dropdown-menu" style="">
                                        <a class="dropdown-item" href="#">Edit Card Title</a>
                                        <a class="dropdown-item" href="#">Delete Card</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <ul class="kanban-items list-items">

                            <li class="d-flex justify-content-between align-items-center ">
                                <div class="lists-items-title" data-bs-toggle="modal" data-bs-target="#exampleModal" data-whatever="@mdo7">
                                    Drag &amp; Drop
                                </div>
                                <button class="open-popup-modal" type="button">
                                    <img src="{{ asset('assets/img/svg/edit-2.svg') }}" alt="edit-2" class="svg">
                                </button>
                                <div class="popup-overlay">
                                    <!--Creates the popup content-->
                                    <div class="popup-content">
                                        <div class="mb-10 popup-textarea">
                                            <textarea class="form-control" rows="3" placeholder="Edit title..."></textarea>
                                        </div>
                                        <div class="d-flex align-items-center popup-button">
                                            <button class="save-title-changes btn btn-primary btn-sm btn-squared rounded" type="submit">Submit</button>
                                        </div>
                                        <div class="overlay-close"></div>
                                    </div>
                                </div>
                            </li>


                            <li class="d-flex justify-content-between align-items-center ">
                                <div class="lists-items-title" data-bs-toggle="modal" data-bs-target="#exampleModal" data-whatever="@mdo8">
                                    Timeline Page
                                </div>
                                <button class="open-popup-modal" type="button">
                                    <img src="{{ asset('assets/img/svg/edit-2.svg') }}" alt="edit-2" class="svg">
                                </button>
                                <div class="popup-overlay">
                                    <!--Creates the popup content-->
                                    <div class="popup-content">
                                        <div class="mb-10 popup-textarea">
                                            <textarea class="form-control" rows="3" placeholder="Edit title..."></textarea>
                                        </div>
                                        <div class="d-flex align-items-center popup-button">
                                            <button class="save-title-changes btn btn-primary btn-sm btn-squared rounded" type="submit">Submit</button>
                                        </div>
                                        <div class="overlay-close"></div>
                                    </div>
                                </div>
                            </li>


                            <li class="d-flex justify-content-between align-items-center ">
                                <div class="lists-items-title" data-bs-toggle="modal" data-bs-target="#exampleModal" data-whatever="@mdo9">
                                    Drag &amp; Drop
                                </div>
                                <button class="open-popup-modal" type="button">
                                    <img src="{{ asset('assets/img/svg/edit-2.svg') }}" alt="edit-2" class="svg">
                                </button>
                                <div class="popup-overlay">
                                    <!--Creates the popup content-->
                                    <div class="popup-content">
                                        <div class="mb-10 popup-textarea">
                                            <textarea class="form-control" rows="3" placeholder="Edit title..."></textarea>
                                        </div>
                                        <div class="d-flex align-items-center popup-button">
                                            <button class="save-title-changes btn btn-primary btn-sm btn-squared rounded" type="submit">Submit</button>
                                        </div>
                                        <div class="overlay-close"></div>
                                    </div>
                                </div>
                            </li>


                            <li class="d-flex justify-content-between align-items-center ">
                                <div class="lists-items-title" data-bs-toggle="modal" data-bs-target="#exampleModal" data-whatever="@mdo10">
                                    Sales Dashboard
                                </div>
                                <button class="open-popup-modal" type="button">
                                    <img src="{{ asset('assets/img/svg/edit-2.svg') }}" alt="edit-2" class="svg">
                                </button>
                                <div class="popup-overlay">
                                    <!--Creates the popup content-->
                                    <div class="popup-content">
                                        <div class="mb-10 popup-textarea">
                                            <textarea class="form-control" rows="3" placeholder="Edit title..."></textarea>
                                        </div>
                                        <div class="d-flex align-items-center popup-button">
                                            <button class="save-title-changes btn btn-primary btn-sm btn-squared rounded" type="submit">Submit</button>
                                        </div>
                                        <div class="overlay-close"></div>
                                    </div>
                                </div>
                            </li>


                            <li class="d-flex justify-content-between align-items-center ">
                                <div class="lists-items-title" data-bs-toggle="modal" data-bs-target="#exampleModal" data-whatever="@mdo11">
                                    Timeline Page
                                </div>
                                <button class="open-popup-modal" type="button">
                                    <img src="{{ asset('assets/img/svg/edit-2.svg') }}" alt="edit-2" class="svg">
                                </button>
                                <div class="popup-overlay">
                                    <!--Creates the popup content-->
                                    <div class="popup-content">
                                        <div class="mb-10 popup-textarea">
                                            <textarea class="form-control" rows="3" placeholder="Edit title..."></textarea>
                                        </div>
                                        <div class="d-flex align-items-center popup-button">
                                            <button class="save-title-changes btn btn-primary btn-sm btn-squared rounded" type="submit">Submit</button>
                                        </div>
                                        <div class="overlay-close"></div>
                                    </div>
                                </div>
                            </li>


                            <li class="d-flex justify-content-between align-items-center ">
                                <div class="lists-items-title" data-bs-toggle="modal" data-bs-target="#exampleModal" data-whatever="@mdo13">
                                    Knowledgebase
                                </div>
                                <button class="open-popup-modal" type="button">
                                    <img src="{{ asset('assets/img/svg/edit-2.svg') }}" alt="edit-2" class="svg">
                                </button>
                                <div class="popup-overlay">
                                    <!--Creates the popup content-->
                                    <div class="popup-content">
                                        <div class="mb-10 popup-textarea">
                                            <textarea class="form-control" rows="3" placeholder="Edit title..."></textarea>
                                        </div>
                                        <div class="d-flex align-items-center popup-button">
                                            <button class="save-title-changes btn btn-primary btn-sm btn-squared rounded" type="submit">Submit</button>
                                        </div>
                                        <div class="overlay-close"></div>
                                    </div>
                                </div>
                            </li>

                        </ul>

                        <button class="add-card-btn"><img src="{{ asset('assets/img/svg/plus.svg') }}" alt="plus" class="svg">Add a
                            card</button>

                    </div>

                    <div class="kanban-list list draggable" draggable="true">
                        <div class="kanban-tops list-tops">
                            <div class="d-flex justify-content-between align-items-center py-10">
                                <h3 class="list-title">Review</h3>
                                <div class="dropdown dropdown-click">
                                    <button class="btn-link border-0 bg-transparent p-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <img src="{{ asset('assets/img/svg/more-horizontal.svg') }}" alt="more-horizontal" class="svg">
                                    </button>
                                    <div class="dropdown-default dropdown-bottomRight dropdown-menu" style="">
                                        <a class="dropdown-item" href="#">Edit Card Title</a>
                                        <a class="dropdown-item" href="#">Delete Card</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <ul class="kanban-items list-items">

                            <li class="d-flex justify-content-between align-items-center ">
                                <div class="lists-items-title" data-bs-toggle="modal" data-bs-target="#exampleModal" data-whatever="@mdo14">
                                    Drag &amp; Drop
                                </div>
                                <button class="open-popup-modal" type="button">
                                    <img src="{{ asset('assets/img/svg/edit-2.svg') }}" alt="edit-2" class="svg">
                                </button>
                                <div class="popup-overlay">
                                    <!--Creates the popup content-->
                                    <div class="popup-content">
                                        <div class="mb-10 popup-textarea">
                                            <textarea class="form-control" rows="3" placeholder="Edit title..."></textarea>
                                        </div>
                                        <div class="d-flex align-items-center popup-button">
                                            <button class="save-title-changes btn btn-primary btn-sm btn-squared rounded" type="submit">Submit</button>
                                        </div>
                                        <div class="overlay-close"></div>
                                    </div>
                                </div>
                            </li>


                            <li class="d-flex justify-content-between align-items-center ">
                                <div class="lists-items-title" data-bs-toggle="modal" data-bs-target="#exampleModal" data-whatever="@mdo15">
                                    Sales Dashboard
                                </div>
                                <button class="open-popup-modal" type="button">
                                    <img src="{{ asset('assets/img/svg/edit-2.svg') }}" alt="edit-2" class="svg">
                                </button>
                                <div class="popup-overlay">
                                    <!--Creates the popup content-->
                                    <div class="popup-content">
                                        <div class="mb-10 popup-textarea">
                                            <textarea class="form-control" rows="3" placeholder="Edit title..."></textarea>
                                        </div>
                                        <div class="d-flex align-items-center popup-button">
                                            <button class="save-title-changes btn btn-primary btn-sm btn-squared rounded" type="submit">Submit</button>
                                        </div>
                                        <div class="overlay-close"></div>
                                    </div>
                                </div>
                            </li>


                            <li class="d-flex justify-content-between align-items-center ">
                                <div class="lists-items-title" data-bs-toggle="modal" data-bs-target="#exampleModal" data-whatever="@mdo16">
                                    Coming Soon Page
                                </div>
                                <button class="open-popup-modal" type="button">
                                    <img src="{{ asset('assets/img/svg/edit-2.svg') }}" alt="edit-2" class="svg">
                                </button>
                                <div class="popup-overlay">
                                    <!--Creates the popup content-->
                                    <div class="popup-content">
                                        <div class="mb-10 popup-textarea">
                                            <textarea class="form-control" rows="3" placeholder="Edit title..."></textarea>
                                        </div>
                                        <div class="d-flex align-items-center popup-button">
                                            <button class="save-title-changes btn btn-primary btn-sm btn-squared rounded" type="submit">Submit</button>
                                        </div>
                                        <div class="overlay-close"></div>
                                    </div>
                                </div>
                            </li>


                            <li class="d-flex justify-content-between align-items-center ">
                                <div class="lists-items-title" data-bs-toggle="modal" data-bs-target="#exampleModal" data-whatever="@mdo17">
                                    Changelog
                                </div>
                                <button class="open-popup-modal" type="button">
                                    <img src="{{ asset('assets/img/svg/edit-2.svg') }}" alt="edit-2" class="svg">
                                </button>
                                <div class="popup-overlay">
                                    <!--Creates the popup content-->
                                    <div class="popup-content">
                                        <div class="mb-10 popup-textarea">
                                            <textarea class="form-control" rows="3" placeholder="Edit title..."></textarea>
                                        </div>
                                        <div class="d-flex align-items-center popup-button">
                                            <button class="save-title-changes btn btn-primary btn-sm btn-squared rounded" type="submit">Submit</button>
                                        </div>
                                        <div class="overlay-close"></div>
                                    </div>
                                </div>
                            </li>


                            <li class="d-flex justify-content-between align-items-center ">
                                <div class="lists-items-title" data-bs-toggle="modal" data-bs-target="#exampleModal" data-whatever="@mdo18">
                                    Timeline Page
                                </div>
                                <button class="open-popup-modal" type="button">
                                    <img src="{{ asset('assets/img/svg/edit-2.svg') }}" alt="edit-2" class="svg">
                                </button>
                                <div class="popup-overlay">
                                    <!--Creates the popup content-->
                                    <div class="popup-content">
                                        <div class="mb-10 popup-textarea">
                                            <textarea class="form-control" rows="3" placeholder="Edit title..."></textarea>
                                        </div>
                                        <div class="d-flex align-items-center popup-button">
                                            <button class="save-title-changes btn btn-primary btn-sm btn-squared rounded" type="submit">Submit</button>
                                        </div>
                                        <div class="overlay-close"></div>
                                    </div>
                                </div>
                            </li>


                            <li class="d-flex justify-content-between align-items-center ">
                                <div class="lists-items-title" data-bs-toggle="modal" data-bs-target="#exampleModal" data-whatever="@mdo19">
                                    Knowledgebase
                                </div>
                                <button class="open-popup-modal" type="button">
                                    <img src="{{ asset('assets/img/svg/edit-2.svg') }}" alt="edit-2" class="svg">
                                </button>
                                <div class="popup-overlay">
                                    <!--Creates the popup content-->
                                    <div class="popup-content">
                                        <div class="mb-10 popup-textarea">
                                            <textarea class="form-control" rows="3" placeholder="Edit title..."></textarea>
                                        </div>
                                        <div class="d-flex align-items-center popup-button">
                                            <button class="save-title-changes btn btn-primary btn-sm btn-squared rounded" type="submit">Submit</button>
                                        </div>
                                        <div class="overlay-close"></div>
                                    </div>
                                </div>
                            </li>


                            <li class="d-flex justify-content-between align-items-center ">
                                <div class="lists-items-title" data-bs-toggle="modal" data-bs-target="#exampleModal" data-whatever="@mdo20">
                                    Drag &amp; Drop
                                </div>
                                <button class="open-popup-modal" type="button">
                                    <img src="{{ asset('assets/img/svg/edit-2.svg') }}" alt="edit-2" class="svg">
                                </button>
                                <div class="popup-overlay">
                                    <!--Creates the popup content-->
                                    <div class="popup-content">
                                        <div class="mb-10 popup-textarea">
                                            <textarea class="form-control" rows="3" placeholder="Edit title..."></textarea>
                                        </div>
                                        <div class="d-flex align-items-center popup-button">
                                            <button class="save-title-changes btn btn-primary btn-sm btn-squared rounded" type="submit">Submit</button>
                                        </div>
                                        <div class="overlay-close"></div>
                                    </div>
                                </div>
                            </li>


                            <li class="d-flex justify-content-between align-items-center ">
                                <div class="lists-items-title" data-bs-toggle="modal" data-bs-target="#exampleModal" data-whatever="@mdo21">
                                    Sales Dashboard
                                </div>
                                <button class="open-popup-modal" type="button">
                                    <img src="{{ asset('assets/img/svg/edit-2.svg') }}" alt="edit-2" class="svg">
                                </button>
                                <div class="popup-overlay">
                                    <!--Creates the popup content-->
                                    <div class="popup-content">
                                        <div class="mb-10 popup-textarea">
                                            <textarea class="form-control" rows="3" placeholder="Edit title..."></textarea>
                                        </div>
                                        <div class="d-flex align-items-center popup-button">
                                            <button class="save-title-changes btn btn-primary btn-sm btn-squared rounded" type="submit">Submit</button>
                                        </div>
                                        <div class="overlay-close"></div>
                                    </div>
                                </div>
                            </li>


                            <li class="d-flex justify-content-between align-items-center ">
                                <div class="lists-items-title" data-bs-toggle="modal" data-bs-target="#exampleModal" data-whatever="@mdo22">
                                    Coming Soon Page
                                </div>
                                <button class="open-popup-modal" type="button">
                                    <img src="{{ asset('assets/img/svg/edit-2.svg') }}" alt="edit-2" class="svg">
                                </button>
                                <div class="popup-overlay">
                                    <!--Creates the popup content-->
                                    <div class="popup-content">
                                        <div class="mb-10 popup-textarea">
                                            <textarea class="form-control" rows="3" placeholder="Edit title..."></textarea>
                                        </div>
                                        <div class="d-flex align-items-center popup-button">
                                            <button class="save-title-changes btn btn-primary btn-sm btn-squared rounded" type="submit">Submit</button>
                                        </div>
                                        <div class="overlay-close"></div>
                                    </div>
                                </div>
                            </li>


                            <li class="d-flex justify-content-between align-items-center ">
                                <div class="lists-items-title" data-bs-toggle="modal" data-bs-target="#exampleModal" data-whatever="@mdo23">
                                    Changelog
                                </div>
                                <button class="open-popup-modal" type="button">
                                    <img src="{{ asset('assets/img/svg/edit-2.svg') }}" alt="edit-2" class="svg">
                                </button>
                                <div class="popup-overlay">
                                    <!--Creates the popup content-->
                                    <div class="popup-content">
                                        <div class="mb-10 popup-textarea">
                                            <textarea class="form-control" rows="3" placeholder="Edit title..."></textarea>
                                        </div>
                                        <div class="d-flex align-items-center popup-button">
                                            <button class="save-title-changes btn btn-primary btn-sm btn-squared rounded" type="submit">Submit</button>
                                        </div>
                                        <div class="overlay-close"></div>
                                    </div>
                                </div>
                            </li>


                            <li class="d-flex justify-content-between align-items-center ">
                                <div class="lists-items-title" data-bs-toggle="modal" data-bs-target="#exampleModal" data-whatever="@mdo24">
                                    Timeline Page
                                </div>
                                <button class="open-popup-modal" type="button">
                                    <img src="{{ asset('assets/img/svg/edit-2.svg') }}" alt="edit-2" class="svg">
                                </button>
                                <div class="popup-overlay">
                                    <!--Creates the popup content-->
                                    <div class="popup-content">
                                        <div class="mb-10 popup-textarea">
                                            <textarea class="form-control" rows="3" placeholder="Edit title..."></textarea>
                                        </div>
                                        <div class="d-flex align-items-center popup-button">
                                            <button class="save-title-changes btn btn-primary btn-sm btn-squared rounded" type="submit">Submit</button>
                                        </div>
                                        <div class="overlay-close"></div>
                                    </div>
                                </div>
                            </li>


                            <li class="d-flex justify-content-between align-items-center ">
                                <div class="lists-items-title" data-bs-toggle="modal" data-bs-target="#exampleModal" data-whatever="@mdo25">
                                    Knowledgebase
                                </div>
                                <button class="open-popup-modal" type="button">
                                    <img src="{{ asset('assets/img/svg/edit-2.svg') }}" alt="edit-2" class="svg">
                                </button>
                                <div class="popup-overlay">
                                    <!--Creates the popup content-->
                                    <div class="popup-content">
                                        <div class="mb-10 popup-textarea">
                                            <textarea class="form-control" rows="3" placeholder="Edit title..."></textarea>
                                        </div>
                                        <div class="d-flex align-items-center popup-button">
                                            <button class="save-title-changes btn btn-primary btn-sm btn-squared rounded" type="submit">Submit</button>
                                        </div>
                                        <div class="overlay-close"></div>
                                    </div>
                                </div>
                            </li>


                            <li class="d-flex justify-content-between align-items-center ">
                                <div class="lists-items-title" data-bs-toggle="modal" data-bs-target="#exampleModal" data-whatever="@mdo26">
                                    Drag &amp; Drop
                                </div>
                                <button class="open-popup-modal" type="button">
                                    <img src="{{ asset('assets/img/svg/edit-2.svg') }}" alt="edit-2" class="svg">
                                </button>
                                <div class="popup-overlay">
                                    <!--Creates the popup content-->
                                    <div class="popup-content">
                                        <div class="mb-10 popup-textarea">
                                            <textarea class="form-control" rows="3" placeholder="Edit title..."></textarea>
                                        </div>
                                        <div class="d-flex align-items-center popup-button">
                                            <button class="save-title-changes btn btn-primary btn-sm btn-squared rounded" type="submit">Submit</button>
                                        </div>
                                        <div class="overlay-close"></div>
                                    </div>
                                </div>
                            </li>


                            <li class="d-flex justify-content-between align-items-center ">
                                <div class="lists-items-title" data-bs-toggle="modal" data-bs-target="#exampleModal" data-whatever="@mdo27">
                                    Sales Dashboard
                                </div>
                                <button class="open-popup-modal" type="button">
                                    <img src="{{ asset('assets/img/svg/edit-2.svg') }}" alt="edit-2" class="svg">
                                </button>
                                <div class="popup-overlay">
                                    <!--Creates the popup content-->
                                    <div class="popup-content">
                                        <div class="mb-10 popup-textarea">
                                            <textarea class="form-control" rows="3" placeholder="Edit title..."></textarea>
                                        </div>
                                        <div class="d-flex align-items-center popup-button">
                                            <button class="save-title-changes btn btn-primary btn-sm btn-squared rounded" type="submit">Submit</button>
                                        </div>
                                        <div class="overlay-close"></div>
                                    </div>
                                </div>
                            </li>


                            <li class="d-flex justify-content-between align-items-center ">
                                <div class="lists-items-title" data-bs-toggle="modal" data-bs-target="#exampleModal" data-whatever="@mdo28">
                                    Coming Soon Page
                                </div>
                                <button class="open-popup-modal" type="button">
                                    <img src="{{ asset('assets/img/svg/edit-2.svg') }}" alt="edit-2" class="svg">
                                </button>
                                <div class="popup-overlay">
                                    <!--Creates the popup content-->
                                    <div class="popup-content">
                                        <div class="mb-10 popup-textarea">
                                            <textarea class="form-control" rows="3" placeholder="Edit title..."></textarea>
                                        </div>
                                        <div class="d-flex align-items-center popup-button">
                                            <button class="save-title-changes btn btn-primary btn-sm btn-squared rounded" type="submit">Submit</button>
                                        </div>
                                        <div class="overlay-close"></div>
                                    </div>
                                </div>
                            </li>


                            <li class="d-flex justify-content-between align-items-center ">
                                <div class="lists-items-title" data-bs-toggle="modal" data-bs-target="#exampleModal" data-whatever="@mdo29">
                                    Changelog
                                </div>
                                <button class="open-popup-modal" type="button">
                                    <img src="{{ asset('assets/img/svg/edit-2.svg') }}" alt="edit-2" class="svg">
                                </button>
                                <div class="popup-overlay">
                                    <!--Creates the popup content-->
                                    <div class="popup-content">
                                        <div class="mb-10 popup-textarea">
                                            <textarea class="form-control" rows="3" placeholder="Edit title..."></textarea>
                                        </div>
                                        <div class="d-flex align-items-center popup-button">
                                            <button class="save-title-changes btn btn-primary btn-sm btn-squared rounded" type="submit">Submit</button>
                                        </div>
                                        <div class="overlay-close"></div>
                                    </div>
                                </div>
                            </li>


                            <li class="d-flex justify-content-between align-items-center ">
                                <div class="lists-items-title" data-bs-toggle="modal" data-bs-target="#exampleModal" data-whatever="@mdo30">
                                    Timeline Page
                                </div>
                                <button class="open-popup-modal" type="button">
                                    <img src="{{ asset('assets/img/svg/edit-2.svg') }}" alt="edit-2" class="svg">
                                </button>
                                <div class="popup-overlay">
                                    <!--Creates the popup content-->
                                    <div class="popup-content">
                                        <div class="mb-10 popup-textarea">
                                            <textarea class="form-control" rows="3" placeholder="Edit title..."></textarea>
                                        </div>
                                        <div class="d-flex align-items-center popup-button">
                                            <button class="save-title-changes btn btn-primary btn-sm btn-squared rounded" type="submit">Submit</button>
                                        </div>
                                        <div class="overlay-close"></div>
                                    </div>
                                </div>
                            </li>


                            <li class="d-flex justify-content-between align-items-center ">
                                <div class="lists-items-title" data-bs-toggle="modal" data-bs-target="#exampleModal" data-whatever="@mdo31">
                                    Knowledgebase
                                </div>
                                <button class="open-popup-modal" type="button">
                                    <img src="{{ asset('assets/img/svg/edit-2.svg') }}" alt="edit-2" class="svg">
                                </button>
                                <div class="popup-overlay">
                                    <!--Creates the popup content-->
                                    <div class="popup-content">
                                        <div class="mb-10 popup-textarea">
                                            <textarea class="form-control" rows="3" placeholder="Edit title..."></textarea>
                                        </div>
                                        <div class="d-flex align-items-center popup-button">
                                            <button class="save-title-changes btn btn-primary btn-sm btn-squared rounded" type="submit">Submit</button>
                                        </div>
                                        <div class="overlay-close"></div>
                                    </div>
                                </div>
                            </li>


                            <li class="d-flex justify-content-between align-items-center ">
                                <div class="lists-items-title" data-bs-toggle="modal" data-bs-target="#exampleModal" data-whatever="@mdo32">
                                    Drag &amp; Drop
                                </div>
                                <button class="open-popup-modal" type="button">
                                    <img src="{{ asset('assets/img/svg/edit-2.svg') }}" alt="edit-2" class="svg">
                                </button>
                                <div class="popup-overlay">
                                    <!--Creates the popup content-->
                                    <div class="popup-content">
                                        <div class="mb-10 popup-textarea">
                                            <textarea class="form-control" rows="3" placeholder="Edit title..."></textarea>
                                        </div>
                                        <div class="d-flex align-items-center popup-button">
                                            <button class="save-title-changes btn btn-primary btn-sm btn-squared rounded" type="submit">Submit</button>
                                        </div>
                                        <div class="overlay-close"></div>
                                    </div>
                                </div>
                            </li>


                            <li class="d-flex justify-content-between align-items-center ">
                                <div class="lists-items-title" data-bs-toggle="modal" data-bs-target="#exampleModal" data-whatever="@mdo33">
                                    Sales Dashboard
                                </div>
                                <button class="open-popup-modal" type="button">
                                    <img src="{{ asset('assets/img/svg/edit-2.svg') }}" alt="edit-2" class="svg">
                                </button>
                                <div class="popup-overlay">
                                    <!--Creates the popup content-->
                                    <div class="popup-content">
                                        <div class="mb-10 popup-textarea">
                                            <textarea class="form-control" rows="3" placeholder="Edit title..."></textarea>
                                        </div>
                                        <div class="d-flex align-items-center popup-button">
                                            <button class="save-title-changes btn btn-primary btn-sm btn-squared rounded" type="submit">Submit</button>
                                        </div>
                                        <div class="overlay-close"></div>
                                    </div>
                                </div>
                            </li>


                            <li class="d-flex justify-content-between align-items-center ">
                                <div class="lists-items-title" data-bs-toggle="modal" data-bs-target="#exampleModal" data-whatever="@mdo34">
                                    Coming Soon Page
                                </div>
                                <button class="open-popup-modal" type="button">
                                    <img src="{{ asset('assets/img/svg/edit-2.svg') }}" alt="edit-2" class="svg">
                                </button>
                                <div class="popup-overlay">
                                    <!--Creates the popup content-->
                                    <div class="popup-content">
                                        <div class="mb-10 popup-textarea">
                                            <textarea class="form-control" rows="3" placeholder="Edit title..."></textarea>
                                        </div>
                                        <div class="d-flex align-items-center popup-button">
                                            <button class="save-title-changes btn btn-primary btn-sm btn-squared rounded" type="submit">Submit</button>
                                        </div>
                                        <div class="overlay-close"></div>
                                    </div>
                                </div>
                            </li>


                            <li class="d-flex justify-content-between align-items-center ">
                                <div class="lists-items-title" data-bs-toggle="modal" data-bs-target="#exampleModal" data-whatever="@mdo35">
                                    Changelog
                                </div>
                                <button class="open-popup-modal" type="button">
                                    <img src="{{ asset('assets/img/svg/edit-2.svg') }}" alt="edit-2" class="svg">
                                </button>
                                <div class="popup-overlay">
                                    <!--Creates the popup content-->
                                    <div class="popup-content">
                                        <div class="mb-10 popup-textarea">
                                            <textarea class="form-control" rows="3" placeholder="Edit title..."></textarea>
                                        </div>
                                        <div class="d-flex align-items-center popup-button">
                                            <button class="save-title-changes btn btn-primary btn-sm btn-squared rounded" type="submit">Submit</button>
                                        </div>
                                        <div class="overlay-close"></div>
                                    </div>
                                </div>
                            </li>


                            <li class="d-flex justify-content-between align-items-center ">
                                <div class="lists-items-title" data-bs-toggle="modal" data-bs-target="#exampleModal" data-whatever="@mdo36">
                                    Timeline Page
                                </div>
                                <button class="open-popup-modal" type="button">
                                    <img src="{{ asset('assets/img/svg/edit-2.svg') }}" alt="edit-2" class="svg">
                                </button>
                                <div class="popup-overlay">
                                    <!--Creates the popup content-->
                                    <div class="popup-content">
                                        <div class="mb-10 popup-textarea">
                                            <textarea class="form-control" rows="3" placeholder="Edit title..."></textarea>
                                        </div>
                                        <div class="d-flex align-items-center popup-button">
                                            <button class="save-title-changes btn btn-primary btn-sm btn-squared rounded" type="submit">Submit</button>
                                        </div>
                                        <div class="overlay-close"></div>
                                    </div>
                                </div>
                            </li>


                            <li class="d-flex justify-content-between align-items-center ">
                                <div class="lists-items-title" data-bs-toggle="modal" data-bs-target="#exampleModal" data-whatever="@mdo37">
                                    Knowledgebase
                                </div>
                                <button class="open-popup-modal" type="button">
                                    <img src="{{ asset('assets/img/svg/edit-2.svg') }}" alt="edit-2" class="svg">
                                </button>
                                <div class="popup-overlay">
                                    <!--Creates the popup content-->
                                    <div class="popup-content">
                                        <div class="mb-10 popup-textarea">
                                            <textarea class="form-control" rows="3" placeholder="Edit title..."></textarea>
                                        </div>
                                        <div class="d-flex align-items-center popup-button">
                                            <button class="save-title-changes btn btn-primary btn-sm btn-squared rounded" type="submit">Submit</button>
                                        </div>
                                        <div class="overlay-close"></div>
                                    </div>
                                </div>
                            </li>


                            <li class="d-flex justify-content-between align-items-center ">
                                <div class="lists-items-title" data-bs-toggle="modal" data-bs-target="#exampleModal" data-whatever="@mdo38">
                                    Drag &amp; Drop
                                </div>
                                <button class="open-popup-modal" type="button">
                                    <img src="{{ asset('assets/img/svg/edit-2.svg') }}" alt="edit-2" class="svg">
                                </button>
                                <div class="popup-overlay">
                                    <!--Creates the popup content-->
                                    <div class="popup-content">
                                        <div class="mb-10 popup-textarea">
                                            <textarea class="form-control" rows="3" placeholder="Edit title..."></textarea>
                                        </div>
                                        <div class="d-flex align-items-center popup-button">
                                            <button class="save-title-changes btn btn-primary btn-sm btn-squared rounded" type="submit">Submit</button>
                                        </div>
                                        <div class="overlay-close"></div>
                                    </div>
                                </div>
                            </li>


                            <li class="d-flex justify-content-between align-items-center ">
                                <div class="lists-items-title" data-bs-toggle="modal" data-bs-target="#exampleModal" data-whatever="@mdo39">
                                    Sales Dashboard
                                </div>
                                <button class="open-popup-modal" type="button">
                                    <img src="{{ asset('assets/img/svg/edit-2.svg') }}" alt="edit-2" class="svg">
                                </button>
                                <div class="popup-overlay">
                                    <!--Creates the popup content-->
                                    <div class="popup-content">
                                        <div class="mb-10 popup-textarea">
                                            <textarea class="form-control" rows="3" placeholder="Edit title..."></textarea>
                                        </div>
                                        <div class="d-flex align-items-center popup-button">
                                            <button class="save-title-changes btn btn-primary btn-sm btn-squared rounded" type="submit">Submit</button>
                                        </div>
                                        <div class="overlay-close"></div>
                                    </div>
                                </div>
                            </li>


                            <li class="d-flex justify-content-between align-items-center ">
                                <div class="lists-items-title" data-bs-toggle="modal" data-bs-target="#exampleModal" data-whatever="@mdo40">
                                    Coming Soon Page
                                </div>
                                <button class="open-popup-modal" type="button">
                                    <img src="{{ asset('assets/img/svg/edit-2.svg') }}" alt="edit-2" class="svg">
                                </button>
                                <div class="popup-overlay">
                                    <!--Creates the popup content-->
                                    <div class="popup-content">
                                        <div class="mb-10 popup-textarea">
                                            <textarea class="form-control" rows="3" placeholder="Edit title..."></textarea>
                                        </div>
                                        <div class="d-flex align-items-center popup-button">
                                            <button class="save-title-changes btn btn-primary btn-sm btn-squared rounded" type="submit">Submit</button>
                                        </div>
                                        <div class="overlay-close"></div>
                                    </div>
                                </div>
                            </li>


                            <li class="d-flex justify-content-between align-items-center ">
                                <div class="lists-items-title" data-bs-toggle="modal" data-bs-target="#exampleModal" data-whatever="@mdo41">
                                    Changelog
                                </div>
                                <button class="open-popup-modal" type="button">
                                    <img src="{{ asset('assets/img/svg/edit-2.svg') }}" alt="edit-2" class="svg">
                                </button>
                                <div class="popup-overlay">
                                    <!--Creates the popup content-->
                                    <div class="popup-content">
                                        <div class="mb-10 popup-textarea">
                                            <textarea class="form-control" rows="3" placeholder="Edit title..."></textarea>
                                        </div>
                                        <div class="d-flex align-items-center popup-button">
                                            <button class="save-title-changes btn btn-primary btn-sm btn-squared rounded" type="submit">Submit</button>
                                        </div>
                                        <div class="overlay-close"></div>
                                    </div>
                                </div>
                            </li>


                            <li class="d-flex justify-content-between align-items-center ">
                                <div class="lists-items-title" data-bs-toggle="modal" data-bs-target="#exampleModal" data-whatever="@mdo42">
                                    Timeline Page
                                </div>
                                <button class="open-popup-modal" type="button">
                                    <img src="{{ asset('assets/img/svg/edit-2.svg') }}" alt="edit-2" class="svg">
                                </button>
                                <div class="popup-overlay">
                                    <!--Creates the popup content-->
                                    <div class="popup-content">
                                        <div class="mb-10 popup-textarea">
                                            <textarea class="form-control" rows="3" placeholder="Edit title..."></textarea>
                                        </div>
                                        <div class="d-flex align-items-center popup-button">
                                            <button class="save-title-changes btn btn-primary btn-sm btn-squared rounded" type="submit">Submit</button>
                                        </div>
                                        <div class="overlay-close"></div>
                                    </div>
                                </div>
                            </li>


                            <li class="d-flex justify-content-between align-items-center ">
                                <div class="lists-items-title" data-bs-toggle="modal" data-bs-target="#exampleModal" data-whatever="@mdo43">
                                    Knowledgebase
                                </div>
                                <button class="open-popup-modal" type="button">
                                    <img src="{{ asset('assets/img/svg/edit-2.svg') }}" alt="edit-2" class="svg">
                                </button>
                                <div class="popup-overlay">
                                    <!--Creates the popup content-->
                                    <div class="popup-content">
                                        <div class="mb-10 popup-textarea">
                                            <textarea class="form-control" rows="3" placeholder="Edit title..."></textarea>
                                        </div>
                                        <div class="d-flex align-items-center popup-button">
                                            <button class="save-title-changes btn btn-primary btn-sm btn-squared rounded" type="submit">Submit</button>
                                        </div>
                                        <div class="overlay-close"></div>
                                    </div>
                                </div>
                            </li>


                        </ul>

                        <button class="add-card-btn"><img src="{{ asset('assets/img/svg/plus.svg') }}" alt="plus" class="svg">Add a
                            card</button>

                    </div>

                    <div class="kanban-list list draggable" draggable="true">
                        <div class="kanban-tops list-tops">
                            <div class="d-flex justify-content-between align-items-center py-10">
                                <h3 class="list-title">Done</h3>
                                <div class="dropdown dropdown-click">
                                    <button class="btn-link border-0 bg-transparent p-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <img src="{{ asset('assets/img/svg/more-horizontal.svg') }}" alt="more-horizontal" class="svg">
                                    </button>
                                    <div class="dropdown-default dropdown-bottomRight dropdown-menu" style="">
                                        <a class="dropdown-item" href="#">Edit Card Title</a>
                                        <a class="dropdown-item" href="#">Delete Card</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <ul class="kanban-items list-items">

                            <li class="d-flex justify-content-between align-items-center ">
                                <div class="lists-items-title" data-bs-toggle="modal" data-bs-target="#exampleModal" data-whatever="@mdo44">
                                    Drag &amp; Drop
                                </div>
                                <button class="open-popup-modal" type="button">
                                    <img src="{{ asset('assets/img/svg/edit-2.svg') }}" alt="edit-2" class="svg">
                                </button>
                                <div class="popup-overlay">
                                    <!--Creates the popup content-->
                                    <div class="popup-content">
                                        <div class="mb-10 popup-textarea">
                                            <textarea class="form-control" rows="3" placeholder="Edit title..."></textarea>
                                        </div>
                                        <div class="d-flex align-items-center popup-button">
                                            <button class="save-title-changes btn btn-primary btn-sm btn-squared rounded" type="submit">Submit</button>
                                        </div>
                                        <div class="overlay-close"></div>
                                    </div>
                                </div>
                            </li>


                            <li class="d-flex justify-content-between align-items-center ">
                                <div class="lists-items-title" data-bs-toggle="modal" data-bs-target="#exampleModal" data-whatever="@mdo45">
                                    Sales Dashboard
                                </div>
                                <button class="open-popup-modal" type="button">
                                    <img src="{{ asset('assets/img/svg/edit-2.svg') }}" alt="edit-2" class="svg">
                                </button>
                                <div class="popup-overlay">
                                    <!--Creates the popup content-->
                                    <div class="popup-content">
                                        <div class="mb-10 popup-textarea">
                                            <textarea class="form-control" rows="3" placeholder="Edit title..."></textarea>
                                        </div>
                                        <div class="d-flex align-items-center popup-button">
                                            <button class="save-title-changes btn btn-primary btn-sm btn-squared rounded" type="submit">Submit</button>
                                        </div>
                                        <div class="overlay-close"></div>
                                    </div>
                                </div>
                            </li>


                            <li class="d-flex justify-content-between align-items-center ">
                                <div class="lists-items-title" data-bs-toggle="modal" data-bs-target="#exampleModal" data-whatever="@mdo46">
                                    Coming Soon Page
                                </div>
                                <button class="open-popup-modal" type="button">
                                    <img src="{{ asset('assets/img/svg/edit-2.svg') }}" alt="edit-2" class="svg">
                                </button>
                                <div class="popup-overlay">
                                    <!--Creates the popup content-->
                                    <div class="popup-content">
                                        <div class="mb-10 popup-textarea">
                                            <textarea class="form-control" rows="3" placeholder="Edit title..."></textarea>
                                        </div>
                                        <div class="d-flex align-items-center popup-button">
                                            <button class="save-title-changes btn btn-primary btn-sm btn-squared rounded" type="submit">Submit</button>
                                        </div>
                                        <div class="overlay-close"></div>
                                    </div>
                                </div>
                            </li>


                            <li class="d-flex justify-content-between align-items-center ">
                                <div class="lists-items-title" data-bs-toggle="modal" data-bs-target="#exampleModal" data-whatever="@mdo47">
                                    Changelog
                                </div>
                                <button class="open-popup-modal" type="button">
                                    <img src="{{ asset('assets/img/svg/edit-2.svg') }}" alt="edit-2" class="svg">
                                </button>
                                <div class="popup-overlay">
                                    <!--Creates the popup content-->
                                    <div class="popup-content">
                                        <div class="mb-10 popup-textarea">
                                            <textarea class="form-control" rows="3" placeholder="Edit title..."></textarea>
                                        </div>
                                        <div class="d-flex align-items-center popup-button">
                                            <button class="save-title-changes btn btn-primary btn-sm btn-squared rounded" type="submit">Submit</button>
                                        </div>
                                        <div class="overlay-close"></div>
                                    </div>
                                </div>
                            </li>


                            <li class="d-flex justify-content-between align-items-center ">
                                <div class="lists-items-title" data-bs-toggle="modal" data-bs-target="#exampleModal" data-whatever="@mdo48">
                                    Timeline Page
                                </div>
                                <button class="open-popup-modal" type="button">
                                    <img src="{{ asset('assets/img/svg/edit-2.svg') }}" alt="edit-2" class="svg">
                                </button>
                                <div class="popup-overlay">
                                    <!--Creates the popup content-->
                                    <div class="popup-content">
                                        <div class="mb-10 popup-textarea">
                                            <textarea class="form-control" rows="3" placeholder="Edit title..."></textarea>
                                        </div>
                                        <div class="d-flex align-items-center popup-button">
                                            <button class="save-title-changes btn btn-primary btn-sm btn-squared rounded" type="submit">Submit</button>
                                        </div>
                                        <div class="overlay-close"></div>
                                    </div>
                                </div>
                            </li>


                            <li class="d-flex justify-content-between align-items-center ">
                                <div class="lists-items-title" data-bs-toggle="modal" data-bs-target="#exampleModal" data-whatever="@mdo49">
                                    Knowledgebase
                                </div>
                                <button class="open-popup-modal" type="button">
                                    <img src="{{ asset('assets/img/svg/edit-2.svg') }}" alt="edit-2" class="svg">
                                </button>
                                <div class="popup-overlay">
                                    <!--Creates the popup content-->
                                    <div class="popup-content">
                                        <div class="mb-10 popup-textarea">
                                            <textarea class="form-control" rows="3" placeholder="Edit title..."></textarea>
                                        </div>
                                        <div class="d-flex align-items-center popup-button">
                                            <button class="save-title-changes btn btn-primary btn-sm btn-squared rounded" type="submit">Submit</button>
                                        </div>
                                        <div class="overlay-close"></div>
                                    </div>
                                </div>
                            </li>


                            <li class="d-flex justify-content-between align-items-center ">
                                <div class="lists-items-title" data-bs-toggle="modal" data-bs-target="#exampleModal" data-whatever="@mdo50">
                                    Drag &amp; Drop
                                </div>
                                <button class="open-popup-modal" type="button">
                                    <img src="{{ asset('assets/img/svg/edit-2.svg') }}" alt="edit-2" class="svg">
                                </button>
                                <div class="popup-overlay">
                                    <!--Creates the popup content-->
                                    <div class="popup-content">
                                        <div class="mb-10 popup-textarea">
                                            <textarea class="form-control" rows="3" placeholder="Edit title..."></textarea>
                                        </div>
                                        <div class="d-flex align-items-center popup-button">
                                            <button class="save-title-changes btn btn-primary btn-sm btn-squared rounded" type="submit">Submit</button>
                                        </div>
                                        <div class="overlay-close"></div>
                                    </div>
                                </div>
                            </li>


                            <li class="d-flex justify-content-between align-items-center ">
                                <div class="lists-items-title" data-bs-toggle="modal" data-bs-target="#exampleModal" data-whatever="@mdo51">
                                    Sales Dashboard
                                </div>
                                <button class="open-popup-modal" type="button">
                                    <img src="{{ asset('assets/img/svg/edit-2.svg') }}" alt="edit-2" class="svg">
                                </button>
                                <div class="popup-overlay">
                                    <!--Creates the popup content-->
                                    <div class="popup-content">
                                        <div class="mb-10 popup-textarea">
                                            <textarea class="form-control" rows="3" placeholder="Edit title..."></textarea>
                                        </div>
                                        <div class="d-flex align-items-center popup-button">
                                            <button class="save-title-changes btn btn-primary btn-sm btn-squared rounded" type="submit">Submit</button>
                                        </div>
                                        <div class="overlay-close"></div>
                                    </div>
                                </div>
                            </li>


                            <li class="d-flex justify-content-between align-items-center ">
                                <div class="lists-items-title" data-bs-toggle="modal" data-bs-target="#exampleModal" data-whatever="@mdo52">
                                    Coming Soon Page
                                </div>
                                <button class="open-popup-modal" type="button">
                                    <img src="{{ asset('assets/img/svg/edit-2.svg') }}" alt="edit-2" class="svg">
                                </button>
                                <div class="popup-overlay">
                                    <!--Creates the popup content-->
                                    <div class="popup-content">
                                        <div class="mb-10 popup-textarea">
                                            <textarea class="form-control" rows="3" placeholder="Edit title..."></textarea>
                                        </div>
                                        <div class="d-flex align-items-center popup-button">
                                            <button class="save-title-changes btn btn-primary btn-sm btn-squared rounded" type="submit">Submit</button>
                                        </div>
                                        <div class="overlay-close"></div>
                                    </div>
                                </div>
                            </li>


                            <li class="d-flex justify-content-between align-items-center ">
                                <div class="lists-items-title" data-bs-toggle="modal" data-bs-target="#exampleModal" data-whatever="@mdo53">
                                    Changelog
                                </div>
                                <button class="open-popup-modal" type="button">
                                    <img src="{{ asset('assets/img/svg/edit-2.svg') }}" alt="edit-2" class="svg">
                                </button>
                                <div class="popup-overlay">
                                    <!--Creates the popup content-->
                                    <div class="popup-content">
                                        <div class="mb-10 popup-textarea">
                                            <textarea class="form-control" rows="3" placeholder="Edit title..."></textarea>
                                        </div>
                                        <div class="d-flex align-items-center popup-button">
                                            <button class="save-title-changes btn btn-primary btn-sm btn-squared rounded" type="submit">Submit</button>
                                        </div>
                                        <div class="overlay-close"></div>
                                    </div>
                                </div>
                            </li>


                            <li class="d-flex justify-content-between align-items-center ">
                                <div class="lists-items-title" data-bs-toggle="modal" data-bs-target="#exampleModal" data-whatever="@mdo54">
                                    Timeline Page
                                </div>
                                <button class="open-popup-modal" type="button">
                                    <img src="{{ asset('assets/img/svg/edit-2.svg') }}" alt="edit-2" class="svg">
                                </button>
                                <div class="popup-overlay">
                                    <!--Creates the popup content-->
                                    <div class="popup-content">
                                        <div class="mb-10 popup-textarea">
                                            <textarea class="form-control" rows="3" placeholder="Edit title..."></textarea>
                                        </div>
                                        <div class="d-flex align-items-center popup-button">
                                            <button class="save-title-changes btn btn-primary btn-sm btn-squared rounded" type="submit">Submit</button>
                                        </div>
                                        <div class="overlay-close"></div>
                                    </div>
                                </div>
                            </li>


                            <li class="d-flex justify-content-between align-items-center ">
                                <div class="lists-items-title" data-bs-toggle="modal" data-bs-target="#exampleModal" data-whatever="@mdo55">
                                    Knowledgebase
                                </div>
                                <button class="open-popup-modal" type="button">
                                    <img src="{{ asset('assets/img/svg/edit-2.svg') }}" alt="edit-2" class="svg">
                                </button>
                                <div class="popup-overlay">
                                    <!--Creates the popup content-->
                                    <div class="popup-content">
                                        <div class="mb-10 popup-textarea">
                                            <textarea class="form-control" rows="3" placeholder="Edit title..."></textarea>
                                        </div>
                                        <div class="d-flex align-items-center popup-button">
                                            <button class="save-title-changes btn btn-primary btn-sm btn-squared rounded" type="submit">Submit</button>
                                        </div>
                                        <div class="overlay-close"></div>
                                    </div>
                                </div>
                            </li>


                            <li class="d-flex justify-content-between align-items-center ">
                                <div class="lists-items-title" data-bs-toggle="modal" data-bs-target="#exampleModal" data-whatever="@mdo56">
                                    Drag &amp; Drop
                                </div>
                                <button class="open-popup-modal" type="button">
                                    <img src="{{ asset('assets/img/svg/edit-2.svg') }}" alt="edit-2" class="svg">
                                </button>
                                <div class="popup-overlay">
                                    <!--Creates the popup content-->
                                    <div class="popup-content">
                                        <div class="mb-10 popup-textarea">
                                            <textarea class="form-control" rows="3" placeholder="Edit title..."></textarea>
                                        </div>
                                        <div class="d-flex align-items-center popup-button">
                                            <button class="save-title-changes btn btn-primary btn-sm btn-squared rounded" type="submit">Submit</button>
                                        </div>
                                        <div class="overlay-close"></div>
                                    </div>
                                </div>
                            </li>


                            <li class="d-flex justify-content-between align-items-center ">
                                <div class="lists-items-title" data-bs-toggle="modal" data-bs-target="#exampleModal" data-whatever="@mdo57">
                                    Sales Dashboard
                                </div>
                                <button class="open-popup-modal" type="button">
                                    <img src="{{ asset('assets/img/svg/edit-2.svg') }}" alt="edit-2" class="svg">
                                </button>
                                <div class="popup-overlay">
                                    <!--Creates the popup content-->
                                    <div class="popup-content">
                                        <div class="mb-10 popup-textarea">
                                            <textarea class="form-control" rows="3" placeholder="Edit title..."></textarea>
                                        </div>
                                        <div class="d-flex align-items-center popup-button">
                                            <button class="save-title-changes btn btn-primary btn-sm btn-squared rounded" type="submit">Submit</button>
                                        </div>
                                        <div class="overlay-close"></div>
                                    </div>
                                </div>
                            </li>


                            <li class="d-flex justify-content-between align-items-center ">
                                <div class="lists-items-title" data-bs-toggle="modal" data-bs-target="#exampleModal" data-whatever="@mdo58">
                                    Coming Soon Page
                                </div>
                                <button class="open-popup-modal" type="button">
                                    <img src="{{ asset('assets/img/svg/edit-2.svg') }}" alt="edit-2" class="svg">
                                </button>
                                <div class="popup-overlay">
                                    <!--Creates the popup content-->
                                    <div class="popup-content">
                                        <div class="mb-10 popup-textarea">
                                            <textarea class="form-control" rows="3" placeholder="Edit title..."></textarea>
                                        </div>
                                        <div class="d-flex align-items-center popup-button">
                                            <button class="save-title-changes btn btn-primary btn-sm btn-squared rounded" type="submit">Submit</button>
                                        </div>
                                        <div class="overlay-close"></div>
                                    </div>
                                </div>
                            </li>


                            <li class="d-flex justify-content-between align-items-center ">
                                <div class="lists-items-title" data-bs-toggle="modal" data-bs-target="#exampleModal" data-whatever="@mdo59">
                                    Changelog
                                </div>
                                <button class="open-popup-modal" type="button">
                                    <img src="{{ asset('assets/img/svg/edit-2.svg') }}" alt="edit-2" class="svg">
                                </button>
                                <div class="popup-overlay">
                                    <!--Creates the popup content-->
                                    <div class="popup-content">
                                        <div class="mb-10 popup-textarea">
                                            <textarea class="form-control" rows="3" placeholder="Edit title..."></textarea>
                                        </div>
                                        <div class="d-flex align-items-center popup-button">
                                            <button class="save-title-changes btn btn-primary btn-sm btn-squared rounded" type="submit">Submit</button>
                                        </div>
                                        <div class="overlay-close"></div>
                                    </div>
                                </div>
                            </li>


                            <li class="d-flex justify-content-between align-items-center ">
                                <div class="lists-items-title" data-bs-toggle="modal" data-bs-target="#exampleModal" data-whatever="@mdo60">
                                    Timeline Page
                                </div>
                                <button class="open-popup-modal" type="button">
                                    <img src="{{ asset('assets/img/svg/edit-2.svg') }}" alt="edit-2" class="svg">
                                </button>
                                <div class="popup-overlay">
                                    <!--Creates the popup content-->
                                    <div class="popup-content">
                                        <div class="mb-10 popup-textarea">
                                            <textarea class="form-control" rows="3" placeholder="Edit title..."></textarea>
                                        </div>
                                        <div class="d-flex align-items-center popup-button">
                                            <button class="save-title-changes btn btn-primary btn-sm btn-squared rounded" type="submit">Submit</button>
                                        </div>
                                        <div class="overlay-close"></div>
                                    </div>
                                </div>
                            </li>


                            <li class="d-flex justify-content-between align-items-center ">
                                <div class="lists-items-title" data-bs-toggle="modal" data-bs-target="#exampleModal" data-whatever="@mdo61">
                                    Knowledgebase
                                </div>
                                <button class="open-popup-modal" type="button">
                                    <img src="{{ asset('assets/img/svg/edit-2.svg') }}" alt="edit-2" class="svg">
                                </button>
                                <div class="popup-overlay">
                                    <!--Creates the popup content-->
                                    <div class="popup-content">
                                        <div class="mb-10 popup-textarea">
                                            <textarea class="form-control" rows="3" placeholder="Edit title..."></textarea>
                                        </div>
                                        <div class="d-flex align-items-center popup-button">
                                            <button class="save-title-changes btn btn-primary btn-sm btn-squared rounded" type="submit">Submit</button>
                                        </div>
                                        <div class="overlay-close"></div>
                                    </div>
                                </div>
                            </li>


                            <li class="d-flex justify-content-between align-items-center ">
                                <div class="lists-items-title" data-bs-toggle="modal" data-bs-target="#exampleModal" data-whatever="@mdo62">
                                    Drag &amp; Drop
                                </div>
                                <button class="open-popup-modal" type="button">
                                    <img src="{{ asset('assets/img/svg/edit-2.svg') }}" alt="edit-2" class="svg">
                                </button>
                                <div class="popup-overlay">
                                    <!--Creates the popup content-->
                                    <div class="popup-content">
                                        <div class="mb-10 popup-textarea">
                                            <textarea class="form-control" rows="3" placeholder="Edit title..."></textarea>
                                        </div>
                                        <div class="d-flex align-items-center popup-button">
                                            <button class="save-title-changes btn btn-primary btn-sm btn-squared rounded" type="submit">Submit</button>
                                        </div>
                                        <div class="overlay-close"></div>
                                    </div>
                                </div>
                            </li>


                            <li class="d-flex justify-content-between align-items-center ">
                                <div class="lists-items-title" data-bs-toggle="modal" data-bs-target="#exampleModal" data-whatever="@mdo63">
                                    Sales Dashboard
                                </div>
                                <button class="open-popup-modal" type="button">
                                    <img src="{{ asset('assets/img/svg/edit-2.svg') }}" alt="edit-2" class="svg">
                                </button>
                                <div class="popup-overlay">
                                    <!--Creates the popup content-->
                                    <div class="popup-content">
                                        <div class="mb-10 popup-textarea">
                                            <textarea class="form-control" rows="3" placeholder="Edit title..."></textarea>
                                        </div>
                                        <div class="d-flex align-items-center popup-button">
                                            <button class="save-title-changes btn btn-primary btn-sm btn-squared rounded" type="submit">Submit</button>
                                        </div>
                                        <div class="overlay-close"></div>
                                    </div>
                                </div>
                            </li>


                            <li class="d-flex justify-content-between align-items-center ">
                                <div class="lists-items-title" data-bs-toggle="modal" data-bs-target="#exampleModal" data-whatever="@mdo64">
                                    Coming Soon Page
                                </div>
                                <button class="open-popup-modal" type="button">
                                    <img src="{{ asset('assets/img/svg/edit-2.svg') }}" alt="edit-2" class="svg">
                                </button>
                                <div class="popup-overlay">
                                    <!--Creates the popup content-->
                                    <div class="popup-content">
                                        <div class="mb-10 popup-textarea">
                                            <textarea class="form-control" rows="3" placeholder="Edit title..."></textarea>
                                        </div>
                                        <div class="d-flex align-items-center popup-button">
                                            <button class="save-title-changes btn btn-primary btn-sm btn-squared rounded" type="submit">Submit</button>
                                        </div>
                                        <div class="overlay-close"></div>
                                    </div>
                                </div>
                            </li>


                            <li class="d-flex justify-content-between align-items-center ">
                                <div class="lists-items-title" data-bs-toggle="modal" data-bs-target="#exampleModal" data-whatever="@mdo65">
                                    Changelog
                                </div>
                                <button class="open-popup-modal" type="button">
                                    <img src="{{ asset('assets/img/svg/edit-2.svg') }}" alt="edit-2" class="svg">
                                </button>
                                <div class="popup-overlay">
                                    <!--Creates the popup content-->
                                    <div class="popup-content">
                                        <div class="mb-10 popup-textarea">
                                            <textarea class="form-control" rows="3" placeholder="Edit title..."></textarea>
                                        </div>
                                        <div class="d-flex align-items-center popup-button">
                                            <button class="save-title-changes btn btn-primary btn-sm btn-squared rounded" type="submit">Submit</button>
                                        </div>
                                        <div class="overlay-close"></div>
                                    </div>
                                </div>
                            </li>


                            <li class="d-flex justify-content-between align-items-center ">
                                <div class="lists-items-title" data-bs-toggle="modal" data-bs-target="#exampleModal" data-whatever="@mdo66">
                                    Timeline Page
                                </div>
                                <button class="open-popup-modal" type="button">
                                    <img src="{{ asset('assets/img/svg/edit-2.svg') }}" alt="edit-2" class="svg">
                                </button>
                                <div class="popup-overlay">
                                    <!--Creates the popup content-->
                                    <div class="popup-content">
                                        <div class="mb-10 popup-textarea">
                                            <textarea class="form-control" rows="3" placeholder="Edit title..."></textarea>
                                        </div>
                                        <div class="d-flex align-items-center popup-button">
                                            <button class="save-title-changes btn btn-primary btn-sm btn-squared rounded" type="submit">Submit</button>
                                        </div>
                                        <div class="overlay-close"></div>
                                    </div>
                                </div>
                            </li>


                            <li class="d-flex justify-content-between align-items-center ">
                                <div class="lists-items-title" data-bs-toggle="modal" data-bs-target="#exampleModal" data-whatever="@mdo67">
                                    Knowledgebase
                                </div>
                                <button class="open-popup-modal" type="button">
                                    <img src="{{ asset('assets/img/svg/edit-2.svg') }}" alt="edit-2" class="svg">
                                </button>
                                <div class="popup-overlay">
                                    <!--Creates the popup content-->
                                    <div class="popup-content">
                                        <div class="mb-10 popup-textarea">
                                            <textarea class="form-control" rows="3" placeholder="Edit title..."></textarea>
                                        </div>
                                        <div class="d-flex align-items-center popup-button">
                                            <button class="save-title-changes btn btn-primary btn-sm btn-squared rounded" type="submit">Submit</button>
                                        </div>
                                        <div class="overlay-close"></div>
                                    </div>
                                </div>
                            </li>


                            <li class="d-flex justify-content-between align-items-center ">
                                <div class="lists-items-title" data-bs-toggle="modal" data-bs-target="#exampleModal" data-whatever="@mdo68">
                                    Drag &amp; Drop
                                </div>
                                <button class="open-popup-modal" type="button">
                                    <img src="{{ asset('assets/img/svg/edit-2.svg') }}" alt="edit-2" class="svg">
                                </button>
                                <div class="popup-overlay">
                                    <!--Creates the popup content-->
                                    <div class="popup-content">
                                        <div class="mb-10 popup-textarea">
                                            <textarea class="form-control" rows="3" placeholder="Edit title..."></textarea>
                                        </div>
                                        <div class="d-flex align-items-center popup-button">
                                            <button class="save-title-changes btn btn-primary btn-sm btn-squared rounded" type="submit">Submit</button>
                                        </div>
                                        <div class="overlay-close"></div>
                                    </div>
                                </div>
                            </li>


                            <li class="d-flex justify-content-between align-items-center ">
                                <div class="lists-items-title" data-bs-toggle="modal" data-bs-target="#exampleModal" data-whatever="@mdo69">
                                    Sales Dashboard
                                </div>
                                <button class="open-popup-modal" type="button">
                                    <img src="{{ asset('assets/img/svg/edit-2.svg') }}" alt="edit-2" class="svg">
                                </button>
                                <div class="popup-overlay">
                                    <!--Creates the popup content-->
                                    <div class="popup-content">
                                        <div class="mb-10 popup-textarea">
                                            <textarea class="form-control" rows="3" placeholder="Edit title..."></textarea>
                                        </div>
                                        <div class="d-flex align-items-center popup-button">
                                            <button class="save-title-changes btn btn-primary btn-sm btn-squared rounded" type="submit">Submit</button>
                                        </div>
                                        <div class="overlay-close"></div>
                                    </div>
                                </div>
                            </li>


                            <li class="d-flex justify-content-between align-items-center ">
                                <div class="lists-items-title" data-bs-toggle="modal" data-bs-target="#exampleModal" data-whatever="@mdo70">
                                    Coming Soon Page
                                </div>
                                <button class="open-popup-modal" type="button">
                                    <img src="{{ asset('assets/img/svg/edit-2.svg') }}" alt="edit-2" class="svg">
                                </button>
                                <div class="popup-overlay">
                                    <!--Creates the popup content-->
                                    <div class="popup-content">
                                        <div class="mb-10 popup-textarea">
                                            <textarea class="form-control" rows="3" placeholder="Edit title..."></textarea>
                                        </div>
                                        <div class="d-flex align-items-center popup-button">
                                            <button class="save-title-changes btn btn-primary btn-sm btn-squared rounded" type="submit">Submit</button>
                                        </div>
                                        <div class="overlay-close"></div>
                                    </div>
                                </div>
                            </li>


                            <li class="d-flex justify-content-between align-items-center ">
                                <div class="lists-items-title" data-bs-toggle="modal" data-bs-target="#exampleModal" data-whatever="@mdo71">
                                    Changelog
                                </div>
                                <button class="open-popup-modal" type="button">
                                    <img src="{{ asset('assets/img/svg/edit-2.svg') }}" alt="edit-2" class="svg">
                                </button>
                                <div class="popup-overlay">
                                    <!--Creates the popup content-->
                                    <div class="popup-content">
                                        <div class="mb-10 popup-textarea">
                                            <textarea class="form-control" rows="3" placeholder="Edit title..."></textarea>
                                        </div>
                                        <div class="d-flex align-items-center popup-button">
                                            <button class="save-title-changes btn btn-primary btn-sm btn-squared rounded" type="submit">Submit</button>
                                        </div>
                                        <div class="overlay-close"></div>
                                    </div>
                                </div>
                            </li>


                            <li class="d-flex justify-content-between align-items-center ">
                                <div class="lists-items-title" data-bs-toggle="modal" data-bs-target="#exampleModal" data-whatever="@mdo72">
                                    Timeline Page
                                </div>
                                <button class="open-popup-modal" type="button">
                                    <img src="{{ asset('assets/img/svg/edit-2.svg') }}" alt="edit-2" class="svg">
                                </button>
                                <div class="popup-overlay">
                                    <!--Creates the popup content-->
                                    <div class="popup-content">
                                        <div class="mb-10 popup-textarea">
                                            <textarea class="form-control" rows="3" placeholder="Edit title..."></textarea>
                                        </div>
                                        <div class="d-flex align-items-center popup-button">
                                            <button class="save-title-changes btn btn-primary btn-sm btn-squared rounded" type="submit">Submit</button>
                                        </div>
                                        <div class="overlay-close"></div>
                                    </div>
                                </div>
                            </li>


                            <li class="d-flex justify-content-between align-items-center ">
                                <div class="lists-items-title" data-bs-toggle="modal" data-bs-target="#exampleModal" data-whatever="@mdo73">
                                    Knowledgebase
                                </div>
                                <button class="open-popup-modal" type="button">
                                    <img src="{{ asset('assets/img/svg/edit-2.svg') }}" alt="edit-2" class="svg">
                                </button>
                                <div class="popup-overlay">
                                    <!--Creates the popup content-->
                                    <div class="popup-content">
                                        <div class="mb-10 popup-textarea">
                                            <textarea class="form-control" rows="3" placeholder="Edit title..."></textarea>
                                        </div>
                                        <div class="d-flex align-items-center popup-button">
                                            <button class="save-title-changes btn btn-primary btn-sm btn-squared rounded" type="submit">Submit</button>
                                        </div>
                                        <div class="overlay-close"></div>
                                    </div>
                                </div>
                            </li>

                        </ul>

                        <button class="add-card-btn"><img src="{{ asset('assets/img/svg/plus.svg') }}" alt="plus" class="svg">Add a
                            card</button>

                    </div>

                    <div class="kanban-list list draggable" draggable="true">
                        <div class="kanban-tops list-tops">
                            <div class="d-flex justify-content-between align-items-center py-10">
                                <h3 class="list-title">Unnecessary</h3>
                                <div class="dropdown dropdown-click">
                                    <button class="btn-link border-0 bg-transparent p-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <img src="{{ asset('assets/img/svg/more-horizontal.svg') }}" alt="more-horizontal" class="svg">
                                    </button>
                                    <div class="dropdown-default dropdown-bottomRight dropdown-menu" style="">
                                        <a class="dropdown-item" href="#">Edit Card Title</a>
                                        <a class="dropdown-item" href="#">Delete Card</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <ul class="kanban-items list-items">
                            <li>Sales Dashboard</li>
                            <li>Coming Soon Page</li>
                            <li>Changelog</li>
                            <li>Import & Export</li>
                            <li>Sales Dashboard</li>
                            <li>Coming Soon Page</li>
                            <li>Changelog</li>
                            <li>Changelog</li>
                            <li>Import & Export</li>
                            <li>Sales Dashboard</li>
                            <li>Coming Soon Page</li>
                            <li>Changelog</li>
                            <li>Changelog</li>
                            <li>Import & Export</li>
                            <li>Sales Dashboard</li>
                            <li>Coming Soon Page</li>
                            <li>Changelog</li>
                            <li>Changelog</li>
                            <li>Import & Export</li>
                            <li>Sales Dashboard</li>
                            <li>Coming Soon Page</li>
                            <li>Changelog</li>
                            <li>Changelog</li>
                            <li>Import & Export</li>
                            <li>Sales Dashboard</li>
                            <li>Coming Soon Page</li>
                            <li>Changelog</li>
                            <li>Changelog</li>
                            <li>Import & Export</li>
                            <li>Sales Dashboard</li>
                            <li>Coming Soon Page</li>
                            <li>Changelog</li>
                        </ul>

                        <button class="add-card-btn ">Add a card</button>

                    </div>

                    <div class="kanban-list list draggable" draggable="true">

                        <div class="kanban-tops list-tops">
                            <div class="d-flex justify-content-between align-items-center py-10">
                                <h3 class="list-title">Deals</h3>
                                <div class="dropdown dropdown-click">
                                    <button class="btn-link border-0 bg-transparent p-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <img src="{{ asset('assets/img/svg/more-horizontal.svg') }}" alt="more-horizontal" class="svg">
                                    </button>
                                    <div class="dropdown-default dropdown-bottomRight dropdown-menu" style="">
                                        <a class="dropdown-item" href="#">Edit Card Title</a>
                                        <a class="dropdown-item" href="#">Delete Card</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <ul class="kanban-items list-items">
                            <li>Import & Export</li>
                            <li>Sales Dashboard</li>
                            <li>Coming Soon Page</li>
                            <li>Changelog</li>
                            <li>Import & Export</li>
                            <li>Sales Dashboard</li>
                            <li>Coming Soon Page</li>
                            <li>Changelog</li>
                            <li>Changelog</li>
                            <li>Import & Export</li>
                            <li>Sales Dashboard</li>
                            <li>Coming Soon Page</li>
                            <li>Changelog</li>
                            <li>Changelog</li>
                            <li>Import & Export</li>
                            <li>Sales Dashboard</li>
                            <li>Coming Soon Page</li>
                            <li>Changelog</li>
                            <li>Changelog</li>
                            <li>Import & Export</li>
                            <li>Sales Dashboard</li>
                            <li>Coming Soon Page</li>
                            <li>Changelog</li>
                            <li>Changelog</li>
                            <li>Import & Export</li>
                            <li>Sales Dashboard</li>
                            <li>Coming Soon Page</li>
                            <li>Changelog</li>
                            <li>Changelog</li>
                            <li>Import & Export</li>
                            <li>Sales Dashboard</li>
                            <li>Coming Soon Page</li>
                            <li>Changelog</li>
                        </ul>

                        <button class="add-card-btn"><img src="{{ asset('assets/img/svg/plus.svg') }}" alt="plus" class="svg">Add a
                            card</button>

                    </div>

                    <div class="kanban-list list draggable" draggable="true">
                        <div class="kanban-tops list-tops">
                            <div class="d-flex justify-content-between align-items-center py-10">
                                <h3 class="list-title">Kanban</h3>
                                <div class="dropdown dropdown-click">
                                    <button class="btn-link border-0 bg-transparent p-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <img src="{{ asset('assets/img/svg/more-horizontal.svg') }}" alt="more-horizontal" class="svg">
                                    </button>
                                    <div class="dropdown-default dropdown-bottomRight dropdown-menu" style="">
                                        <a class="dropdown-item" href="#">Edit Card Title</a>
                                        <a class="dropdown-item" href="#">Delete Card</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <ul class="kanban-items list-items">
                            <li>Import & Export</li>
                            <li>Sales Dashboard</li>
                            <li>Coming Soon Page</li>
                            <li>Changelog</li>
                            <li>Changelog</li>
                            <li>Import & Export</li>
                            <li>Sales Dashboard</li>
                            <li>Coming Soon Page</li>
                            <li>Changelog</li>
                            <li>Changelog</li>
                            <li>Import & Export</li>
                            <li>Sales Dashboard</li>
                            <li>Coming Soon Page</li>
                            <li>Changelog</li>
                            <li>Changelog</li>
                            <li>Import & Export</li>
                            <li>Sales Dashboard</li>
                            <li>Coming Soon Page</li>
                            <li>Changelog</li>
                            <li>Changelog</li>
                            <li>Import & Export</li>
                            <li>Sales Dashboard</li>
                            <li>Coming Soon Page</li>
                            <li>Changelog</li>
                        </ul>

                        <button class="add-card-btn"><img src="{{ asset('assets/img/svg/plus.svg') }}" alt="plus" class="svg">Add a
                            card</button>

                    </div>

                    <div class="kanban-list list draggable" draggable="true">
                        <div class="kanban-tops list-tops">
                            <div class="d-flex justify-content-between align-items-center py-10">
                                <h3 class="list-title">Ideas</h3>
                                <div class="dropdown dropdown-click">
                                    <button class="btn-link border-0 bg-transparent p-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <img src="{{ asset('assets/img/svg/more-horizontal.svg') }}" alt="more-horizontal" class="svg">
                                    </button>
                                    <div class="dropdown-default dropdown-bottomRight dropdown-menu" style="">
                                        <a class="dropdown-item" href="#">Edit Card Title</a>
                                        <a class="dropdown-item" href="#">Delete Card</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <ul class="kanban-items list-items">
                            <li>Coming Soon Page</li>
                            <li>Changelog</li>
                            <li>Changelog</li>
                            <li>Import & Export</li>
                            <li>Sales Dashboard</li>
                            <li>Coming Soon Page</li>
                            <li>Changelog</li>
                            <li>Changelog</li>
                            <li>Import & Export</li>
                            <li>Sales Dashboard</li>
                            <li>Coming Soon Page</li>
                            <li>Changelog</li>
                            <li>Changelog</li>
                            <li>Import & Export</li>
                            <li>Sales Dashboard</li>
                            <li>Coming Soon Page</li>
                            <li>Changelog</li>
                        </ul>

                        <button class="add-card-btn"><img src="{{ asset('assets/img/svg/plus.svg') }}" alt="plus" class="svg">Add a
                            card</button>

                    </div>

                    <div class="kanban-list list draggable" draggable="true">
                        <div class="kanban-tops list-tops">
                            <div class="d-flex justify-content-between align-items-center py-10">
                                <h3 class="list-title">Big Projects</h3>
                                <div class="dropdown dropdown-click">
                                    <button class="btn-link border-0 bg-transparent p-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <img src="{{ asset('assets/img/svg/more-horizontal.svg') }}" alt="more-horizontal" class="svg">
                                    </button>
                                    <div class="dropdown-default dropdown-bottomRight dropdown-menu" style="">
                                        <a class="dropdown-item" href="#">Edit Card Title</a>
                                        <a class="dropdown-item" href="#">Delete Card</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <ul class="kanban-items list-items">
                            <li>Coming Soon Page</li>
                            <li>Changelog</li>
                            <li>Changelog</li>
                            <li>Import & Export</li>
                            <li>Sales Dashboard</li>
                            <li>Coming Soon Page</li>
                            <li>Changelog</li>
                            <li>Changelog</li>
                            <li>Import & Export</li>
                            <li>Sales Dashboard</li>
                            <li>Coming Soon Page</li>
                            <li>Changelog</li>
                            <li>Changelog</li>
                            <li>Import & Export</li>
                            <li>Sales Dashboard</li>
                            <li>Coming Soon Page</li>
                            <li>Changelog</li>
                        </ul>

                        <button class="add-card-btn"><img src="{{ asset('assets/img/svg/plus.svg') }}" alt="plus" class="svg">Add a
                            card</button>

                    </div>

                    <div class="kanban-list list draggable" draggable="true">
                        <div class="list__add-card">
                            <div class="kanban-board__add-card">
                                <button class="shadow-none border-0"><img src="{{ asset('assets/img/svg/plus.svg') }}" alt="plus" class="svg">
                                    Add
                                    column</button>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <!-- End of lists container -->
        </div>
    </div>
</div>
@endsection