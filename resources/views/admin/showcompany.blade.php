@extends('admin.admin')

@section('title') Edit Companies @endsection

@section('style')

<link href="{{ asset("src/plugins/css/dark/filepond/custom-filepond.css") }}" rel="stylesheet" type="text/css" />
<link href="{{ asset("src/assets/css/dark/components/tabs.css") }}" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="{{ asset("src/assets/css/dark/elements/alert.css") }}">

<link href="{{ asset("src/plugins/css/dark/sweetalerts2/custom-sweetalert.css") }}" rel="stylesheet" type="text/css" />
<link href="{{ asset("src/plugins/css/dark/notification/snackbar/custom-snackbar.css") }}" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="{{ asset("src/assets/css/dark/forms/switches.css") }}">
<link href="{{ asset("src/assets/css/dark/components/list-group.css") }}" rel="stylesheet" type="text/css">

<link href="{{ asset("src/assets/css/dark/users/account-setting.css") }}" rel="stylesheet" type="text/css" />

@endsection

@section('scripts')

<!--  BEGIN CUSTOM SCRIPTS FILE  -->
<script src="{{ asset("src/plugins/src/filepond/filepond.min.js") }}"></script>
<script src="{{ asset("src/plugins/src/filepond/FilePondPluginFileValidateType.min.js") }}"></script>
<script src="{{ asset("src/plugins/src/filepond/FilePondPluginImageExifOrientation.min.js") }}"></script>
<script src="{{ asset("src/plugins/src/filepond/FilePondPluginImagePreview.min.js") }}"></script>
<script src="{{ asset("src/plugins/src/filepond/FilePondPluginImageCrop.min.js") }}"></script>
<script src="{{ asset("src/plugins/src/filepond/FilePondPluginImageResize.min.js") }}"></script>
<script src="{{ asset("src/plugins/src/filepond/FilePondPluginImageTransform.min.js") }}"></script>
<script src="{{ asset("src/plugins/src/filepond/filepondPluginFileValidateSize.min.js") }}"></script>
<script src="{{ asset("src/plugins/src/notification/snackbar/snackbar.min.js") }}"></script>
<script src="{{ asset("src/plugins/src/sweetalerts2/sweetalerts2.min.js") }}"></script>
<script src="{{ asset("src/assets/js/users/account-settings.js") }}"></script>
<!--  END CUSTOM SCRIPTS FILE  -->

@endsection


@section('content')

<div id="content" class="main-content">
    <div class="layout-px-spacing">

        <div class="middle-content container-xxl p-0">

            <!-- BREADCRUMB -->
            <div class="page-meta">
                <nav class="breadcrumb-style-one" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Companies</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Show</li>
                    </ol>
                </nav>
            </div>
            <!-- /BREADCRUMB -->
                
            <div class="account-settings-container layout-top-spacing">

                <div class="account-content">
                    <div class="row mb-3">
                        <div class="col-md-12">
                            <h2>Show Company</h2>

                            
                        </div>
                    </div>

                      <div class="row">
                                <center>
                                <div class="col-xl-10 col-lg-12 col-md-12 layout-spacing">
                                    <form class="section general-info">
                                        <div class="info">

                                            <center>
                                                
                                                <div class="row mt-3">
                                                    <div class="col-xl-15 col-lg-12 col-md-8 mt-md-0 mt-4">
                                                        <img src="{{ asset('storage/uploads/companies_logos/'. $company->logo) }}" height="150px" width="170px"/><br><br>
                                                        <div class="row">
                                                            <div class="">
                                                                <div class="form-group mt-4">
                                                                    <h5><strong> Name: </strong>{{ $company->name }}</h5>
                                                                </div>
                                                                <div class="form-group mt-4">
                                                                    <h5><strong> Email: </strong> {{ $company->email }} </h5>
                                                                </div>
                                                                <div class="form-group mt-4">
                                                                    <h5><strong> Website: </strong> {{ $company->website }} </h5>
                                                                </div>

                                                                <div class="form-group mt-4">
                                                                    <h5> <strong> Address: </strong>{{ $company->address }}</h5>
                                                                </div>

                                                                <div class="form-group mt-4">
                                                                    <h5> <strong>  Description: </strong>{{ $company->description }}</h5>
                                                                </div>
                                                                <br><br>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </center>
                                        

                                        </div>

                                    </form>
                                </div>
                            </center>
                                




                        
    
                                
                            </div>
                        </div>
                    </div>
                    
                </div>
                
            </div>

        </div>

@endsection 