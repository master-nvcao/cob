@extends('admin.admin')

@section('title') Edit Service @endsection

@section('style')

<link href="{{ asset("src/plugins/css/dark/filepond/custom-filepond.css") }}" rel="stylesheet" type="text/css" />
<link href="{{ asset("src/assets/css/dark/components/tabs.css") }}" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="{{ asset("src/assets/css/dark/elements/alert.css") }}">

<link href="{{ asset("src/plugins/css/dark/sweetalerts2/custom-sweetalert.css") }}" rel="stylesheet" type="text/css" />
<link href="{{ asset("src/plugins/css/dark/notification/snackbar/custom-snackbar.css") }}" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="{{ asset("src/assets/css/dark/forms/switches.css") }}">
<link href="{{ asset("src/assets/css/dark/components/list-group.css") }}" rel="stylesheet" type="text/css">

<link href="{{ asset("src/assets/css/dark/users/account-setting.css") }}" rel="stylesheet" type="text/css" />

<link href="{{ asset("src/plugins/css/dark/filepond/custom-filepond.css") }}" rel="stylesheet" type="text/css" />
<link href="{{ asset("src/assets/css/dark/components/tabs.css") }}" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="{{ asset("src/assets/css/dark/elements/alert.css") }}">

<link href="{{ asset("src/plugins/css/dark/sweetalerts2/custom-sweetalert.css") }}" rel="stylesheet" type="text/css" />
<link href="{{ asset("src/plugins/css/dark/notification/snackbar/custom-snackbar.css") }}" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="{{ asset("src/assets/css/dark/forms/switches.css") }}">
<link href="{{ asset("src/assets/css/dark/components/list-group.css") }}" rel="stylesheet" type="text/css">

<link href="{{ asset("src/assets/css/dark/users/account-setting.css") }}" rel="stylesheet" type="text/css" />

<!--  BEGIN CUSTOM STYLE FILE  -->
<link href="{{ asset("src/assets/css/light/scrollspyNav.css") }}" rel="stylesheet" type="text/css" />
<link href="{{ asset("src/assets/css/dark/scrollspyNav.css") }}" rel="stylesheet" type="text/css" />

<link rel="stylesheet" type="text/css" href="{{ asset("src/plugins/src/tomSelect/tom-select.default.min.css") }}">
<link rel="stylesheet" type="text/css" href="{{ asset("src/plugins/css/light/tomSelect/custom-tomSelect.css") }}">
<link rel="stylesheet" type="text/css" href="{{ asset("src/plugins/css/dark/tomSelect/custom-tomSelect.css") }}">

    <!--  END CUSTOM STYLE FILE  -->

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

<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="{{ asset("src/assets/js/scrollspyNav.js") }}"></script>
<script src="{{ asset("src/plugins/src/tomSelect/tom-select.base.js") }}"></script>
<script src="{{ asset("src/plugins/src/tomSelect/custom-tom-select.js") }}"></script>
<!-- END PAGE LEVEL SCRIPTS -->
 <script>
    new TomSelect("#company_id",{
        create: true,
        sortField: {
            field: "text",
            direction: "asc"
        }
    });
 </script>

@endsection

@section('content')

<div id="content" class="main-content">
    <div class="layout-px-spacing">

        <div class="middle-content container-xxl p-0">

            <!-- BREADCRUMB -->
            <div class="page-meta">
                <nav class="breadcrumb-style-one" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Services</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Edit</li>
                    </ol>
                </nav>
            </div>
            <!-- /BREADCRUMB -->
                
            <div class="account-settings-container layout-top-spacing">

                <div class="account-content">
                    <div class="row mb-3">
                        <div class="col-md-12">
                            <h2>Edit Service</h2>

                            
                        </div>
                    </div>

                      <div class="row">
                                <div class="col-xl-12 col-lg-12 col-md-12 layout-spacing">
                                    <form class="section general-info">
                                        <div class="info">
                                            
                                            <div class="table-responsive">
                                                <table class="table table-bordered">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">Name</th>
                                                            <th scope="col">Price</th>
                                                            <th class="text-center" scope="col">Type</th>
                                                            <th class="text-center" scope="col">Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>


                                                        @foreach($services as $service)
                                                        <tr>
                                                            <td>{{ $service->name }}</td>
                                                            <td>
                                                                <span class="table-inner-text"> {{ $service->price }} </span>
                                                            </td>
                                                            <td class="text-center"> {{ $service->type }} </td>
                                                            <td class="text-center">
                                                                <div class="action-btns">
                                                                    <a href="{{ 'show/'.$service->id }}" class="action-btn btn-view bs-tooltip me-2" data-toggle="tooltip" data-placement="top" title="View">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg>
                                                                    </a>
                                                                    <a href="{{ 'edit/'.$service->id }}" class="action-btn btn-edit bs-tooltip me-2" data-toggle="tooltip" data-placement="top" title="Edit">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg>
                                                                    </a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        @endforeach
                                                        
                                                        
                                                    </tbody>
                                                </table>
                                            </div>

                                        </div>
                                    </form>
                                </div>
    
                                




                        
    
                                
                            </div>
                        </div>
                    </div>
                    
                </div>
                
            </div>

        </div>
    
@endsection