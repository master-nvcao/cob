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
                        <li class="breadcrumb-item active" aria-current="page">Edit</li>
                    </ol>
                </nav>
            </div>
            <!-- /BREADCRUMB -->
                
            <div class="account-settings-container layout-top-spacing">

                <div class="account-content">
                    <div class="row mb-3">
                        <div class="col-md-12">
                            <h2>Edit Company</h2>

                            
                        </div>
                    </div>

                      <div class="row">
                                <div class="col-xl-12 col-lg-12 col-md-12 layout-spacing">
                                    <form class="section general-info" method="POST" action="{{ route('admin.companies.update', ['id' => $company->id]) }}">
                                        @csrf 
                                        @method('PUT')
                                        <div class="info">
                                            <h6 class=""></h6>
                                            <div class="row">
                                                <div class="col-lg-11 mx-auto">
                                                    <div class="row">
                                                        <div class="col-xl-2 col-lg-12 col-md-4">
                                                            <!-- <div class="profile-image  mt-4 pe-md-4">
                                            
                                                                <div class="img-uploader-content">
                                                                    <input type="file" class="filepond"
                                                                        name="profile_picture" accept="image/png, image/jpeg, image/jpg" value="../src/assets/img/profile-30.png" />
                                                                        
                                                                        
                                                                </div>
                                            
                                                            </div> -->
                                                        </div>

                                                        <div class="col-xl-15 col-lg-12 col-md-8 mt-md-0 mt-4">
                                                            <div class="form">
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label for="name">Name</label>
                                                                            <input type="text" class="form-control mb-3 @error('name') is-invalid @enderror" name="name" id="name" placeholder="{{ $company->name }}" value="{{ $company->name }}" required>
                                                                        </div>
                                                                    </div>
    
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label for="email">Email</label>
                                                                            <input type="email" class="form-control mb-3 @error('name') is-invalid @enderror" name="email" id="email" placeholder="{{ $company->email }}" value="{{ $company->email }}" required>
                                                                        </div>
                                                                    </div>
                                                                    
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label for="address">Address</label>
                                                                            <input type="text" class="form-control mb-3 @error('name') is-invalid @enderror" name="address" id="address" placeholder="{{ $company->address }}" value="{{ $company->address }}" required>
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label for="website">Website</label>
                                                                            <input type="text" class="form-control mb-3 @error('name') is-invalid @enderror" name="website" id="website" placeholder="{{ $company->website }}" value="{{ $company->website }}" required>
                                                                        </div>
                                                                    </div>
                                                                    
                                                                    <div class="col-md-12">
                                                                        <div class="form-group">
                                                                            <label class="form-label">Logo</label>
                                                                            <input type="file" class="form-control file-upload-input mb-3 @error('name') is-invalid @enderror" name="logo" accept="image/jpeg, image/png, image/jpg">
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-md-12">
                                                                        <div class="form-group">
                                                                            <label class="form-label">Description</label>
                                                                            <textarea class="form-control mb-3 @error('name') is-invalid @enderror" 
                                                                            name="description" placeholder="{{ $company->description }}" rows="4" 
                                                                            required>{{ $company->description }}</textarea>

                                                                            </div>
                                                                    </div>

                                                                    

                                                                    <div class="col-md-12 mt-1">
                                                                        
                                                                    </div>

                                                                    <div class="col-md-12 mt-3">
                                                                        <div class="form-group text-end">
                                                                            <button class="btn btn-secondary" type="submit">Edit</button>
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
