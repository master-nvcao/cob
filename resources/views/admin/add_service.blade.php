@extends('admin.admin')

@section('title') Add Service @endsection

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
                        <li class="breadcrumb-item active" aria-current="page">Add</li>
                    </ol>
                </nav>
            </div>
            <!-- /BREADCRUMB -->
                
            <div class="account-settings-container layout-top-spacing">

                <div class="account-content">
                    <div class="row mb-3">
                        <div class="col-md-12">
                            <h2>Add Service</h2>

                            
                        </div>
                    </div>

                      <div class="row">
                                <div class="col-xl-12 col-lg-12 col-md-12 layout-spacing">
                                    <form class="section general-info" method="POST" action="{{ route('admin.services.add') }}">
                                        @csrf 
                                        <div class="info">
                                            <h6 class=""></h6>
                                            <div class="row">
                                                <div class="col-lg-11 mx-auto">
                                                    <div class="row">
                                                        <div class="col-xl-2 col-lg-12 col-md-4">
                                                        </div>

                                                        <div class="col-xl-15 col-lg-12 col-md-8 mt-md-0 mt-4">
                                                            <div class="form">
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label for="name">Name</label>
                                                                            <input type="text" class="form-control mb-3 @error('name') is-invalid @enderror" name="name" id="name" placeholder="Full Insurance" required>
                                                                        </div>
                                                                    </div>
    
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label for="price">Price</label>
                                                                            <input type="number" step="0.001" class="form-control mb-3 @error('price') is-invalid @enderror" name="price" id="price" placeholder="300" required>
                                                                        </div>
                                                                    </div>
                                                                    
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label for="type">Type</label>
                                                                            <input type="text" class="form-control mb-3 @error('type') is-invalid @enderror " name="type" id="type" placeholder="Health Insurance" required>
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label for="company_id">Company</label>
                                                                            <select id="company_id" name="company_id" class="form-control-lg mb-3 @error('company_id') is-invalid @enderror " placeholder="Select a company..." autocomplete="off" required>
                                                                                <option value="">Select a company...</option>
                                                                                @foreach($companies as $company)

                                                                                    <option value="{{ $company->id }}">{{ $company->name }} </option>
                                                                                    
                                                                                @endforeach
                                                                            </select>
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-md-12">
                                                                        <div class="form-group">
                                                                            <label class="form-label">Description</label>
                                                                            <textarea class="form-control mb-3 @error('description') is-invalid @enderror" name="description" placeholder="Here is the company description" rows="4" required></textarea>

                                                                            </div>
                                                                    </div>

                                                                    

                                                                    <div class="col-md-12 mt-1">
                                                                        
                                                                    </div>

                                                                    <div class="col-md-12 mt-3">
                                                                        <div class="form-group text-end">
                                                                            <button class="btn btn-secondary">Add</button>
                                                                        </div>
                                                                    </div>
                                                                    
                                                                </div>
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
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




