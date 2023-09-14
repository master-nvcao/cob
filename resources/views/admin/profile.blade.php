@extends('admin.admin')

@section('title')
    Profile
@endsection

@section('content')

<div id="content" class="main-content">
    <div class="layout-px-spacing">

        <div class="middle-content container-xxl p-0">

            <!-- BREADCRUMB -->
            <div class="page-meta">
                <nav class="breadcrumb-style-one" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Admin</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Profile</li>
                    </ol>
                </nav>
            </div>
            <!-- /BREADCRUMB -->
                
            <div class="account-settings-container layout-top-spacing">

                <div class="account-content">
                    <div class="row mb-3">
                        <div class="col-md-12">
                            <h2>Profile</h2>

                            
                        </div>
                    </div>

                      <div class="row">
                                <div class="col-xl-12 col-lg-12 col-md-12 layout-spacing">
                                    <form method="POST" action="{{ route('admin.profile') }}" enctype="multipart/form-data" class="section general-info">
                                        @csrf 
                                        @method("PUT")

                                        <div class="info">
                                            <h6 class="">General Information</h6>
                                            <div class="row">
                                                <div class="col-lg-11 mx-auto">
                                                    <div class="row">
                                                        <div class="col-xl-2 col-lg-12 col-md-4">
                                                            {{-- <div class="profile-image  mt-4 pe-md-4">

                                                                <!-- // The classic file input element we'll enhance
                                                                // to a file pond, we moved the configuration
                                                                // properties to JavaScript -->
                                            
                                                                <div class="img-uploader-content">
                                                                    <input type="file" class="filepond"
                                                                        name="profile_picture" accept="image/png, image/jpeg, image/jpg" value="../src/assets/img/profile-30.png" />
                                                                        
                                                                        
                                                                </div>
                                            
                                                            </div> --}}
                                                        </div>

                                                        <div class="col-xl-15 col-lg-12 col-md-8 mt-md-0 mt-4">
                                                            <div class="form">
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label for="first_name">First Name</label>
                                                                            <input type="text" class="form-control mb-3 @error('first_name') is-invalid @enderror" name="first_name" id="first_name" placeholder="{{ auth('admin')->user()->first_name }}" value="{{ auth('admin')->user()->first_name }}">
                                                                        </div>
                                                                    </div>
    
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label for="last_name">Last Name</label>
                                                                            <input type="text" class="form-control mb-3 @error('last_name') is-invalid @enderror" name="last_name" id="last_name" placeholder="{{ auth('admin')->user()->last_name }}" value="{{ auth('admin')->user()->last_name }}">
                                                                        </div>
                                                                    </div>
                                                                    
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label for="email">Email</label>
                                                                            <input type="email" class="form-control mb-3 @error('email') is-invalid @enderror" name="email" id="email" value="{{ auth('admin')->user()->email }}" placeholder="{{ auth('admin')->user()->email }}">
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label for="password">Password</label>
                                                                            <input type="password" class="form-control mb-3 @error('password') is-invalid @enderror" name="password" id="password" placeholder="********************" value="********************">
                                                                        </div>
                                                                    </div>  

                                                                    
                                                                    <div class="col-md-12">
                                                                        <div class="form-group">
                                                                            <label for="admin_key">Admin Key</label>
                                                                            <input type="text" class="form-control mb-3 @error('admin_key') is-invalid @enderror" name="admin_key" id="admin_key" placeholder="{{ auth('admin')->user()->admin_key }}" value="{{ auth('admin')->user()->admin_key }}" >
                                                                        </div>
                                                                    </div>

                                                                    
                                                                    <div class="col-md-12">
                                                                        <div class="form-group">
                                                                            <label class="form-label">Profile Picture</label>
                                                                            <input type="file" class="form-control file-upload-input @error('profile_picture') is-invalid @enderror" name="profile_picture" accept="image/jpeg, image/png, image/jpg">
                                                                        </div>
                                                                    </div>
                                                                    

                                                                    <div class="col-md-12 mt-3">
                                                                        
                                                                    </div>

                                                                    <div class="col-md-12 mt-3">
                                                                        <div class="form-group text-end">
                                                                            <button class="btn btn-secondary">Update Profile</button>
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

    </div>

@endsection

@section('scripts')

<!--  BEGIN CUSTOM SCRIPTS FILE  -->
<script src="../src/plugins/src/filepond/filepond.min.js"></script>
<script src="../src/plugins/src/filepond/FilePondPluginFileValidateType.min.js"></script>
<script src="../src/plugins/src/filepond/FilePondPluginImageExifOrientation.min.js"></script>
<script src="../src/plugins/src/filepond/FilePondPluginImagePreview.min.js"></script>
<script src="../src/plugins/src/filepond/FilePondPluginImageCrop.min.js"></script>
<script src="../src/plugins/src/filepond/FilePondPluginImageResize.min.js"></script>
<script src="../src/plugins/src/filepond/FilePondPluginImageTransform.min.js"></script>
<script src="../src/plugins/src/filepond/filepondPluginFileValidateSize.min.js"></script>
<script src="../src/plugins/src/notification/snackbar/snackbar.min.js"></script>
<script src="../src/plugins/src/sweetalerts2/sweetalerts2.min.js"></script>
<script src="../src/assets/js/users/account-settings.js"></script>
<!--  END CUSTOM SCRIPTS FILE  -->

<script>


    /**
    * ==================
    * Single File Upload
    * ==================
    */

    // We register the plugins required to do 
    // image previews, cropping, resizing, etc.
    FilePond.registerPlugin(
    FilePondPluginFileValidateType,
    FilePondPluginImageExifOrientation,
    FilePondPluginImagePreview,
    FilePondPluginImageCrop,
    FilePondPluginImageResize,
    FilePondPluginImageTransform,
    //   FilePondPluginImageEdit
    );

    // Select the file input and use 
    // create() to turn it into a pond
    FilePond.create(
    document.querySelector('.filepond'),
    {
    // labelIdle: `<span class="no-image-placeholder"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg></span> <p class="drag-para">Drag & Drop your picture or <span class="filepond--label-action" tabindex="0">Browse</span></p>`,
    imagePreviewHeight: 170,
    imageCropAspectRatio: '1:1',
    imageResizeTargetWidth: 200,
    imageResizeTargetHeight: 200,
    stylePanelLayout: 'compact circle',
    styleLoadIndicatorPosition: 'center bottom',
    styleProgressIndicatorPosition: 'right bottom',
    styleButtonRemoveItemPosition: 'left bottom',
    styleButtonProcessItemPosition: 'right bottom',
    files: [
    {
        // the server file reference
        source: "{{ asset('storage/uploads/profile_pictures/'.auth()->user()->profile_picture) }}",

        // set type to limbo to tell FilePond this is a temp file
        options: {
            type: 'image/png',
        },
    },
    ],
    }
    );


    </script>

@endsection