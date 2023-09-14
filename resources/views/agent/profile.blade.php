@extends('agent.agent')

@section('title')
profile
@endsection

@section('content')

<div id="content" class="main-content">
    <div class="layout-px-spacing">

        <div class="middle-content container-xxl p-0">

            <!-- BREADCRUMB -->
            <div class="page-meta">
                <nav class="breadcrumb-style-one" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Agent</a></li>
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
                                    <form method="POST" action="{{ route('agent.profile') }}" enctype="multipart/form-data" class="section general-info">
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
                                                                    name="profile_picture" accept="image/jpeg, image/png, image/jpg" >
                                                                        
                                                                        
                                                                </div> 
                                            
                                                            </div> --}}
                                                        </div>

                                                        <div class="col-xl-15 col-lg-12 col-md-8 mt-md-0 mt-4">
                                                            <div class="form">
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label for="first_name">First Name</label>
                                                                            <input type="text" class="form-control mb-3 @error('first_name') is-invalid @enderror" name="first_name" id="first_name" placeholder="{{ auth()->user()->first_name }}" value="{{ auth()->user()->first_name }}">
                                                                        </div>
                                                                    </div>
    
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label for="last_name">Last Name</label>
                                                                            <input type="text" class="form-control mb-3 @error('last_name') is-invalid @enderror" name="last_name" id="last_name" placeholder="{{ auth()->user()->last_name }}" value="{{ auth()->user()->last_name }}">
                                                                        </div>
                                                                    </div>
                                                                    
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label for="phone">Phone</label>
                                                                            <input type="text" class="form-control mb-3 @error('phone') is-invalid @enderror" name="phone" id="phone" placeholder="{{ auth()->user()->phone }}" value="{{ auth()->user()->phone }}">
                                                                        </div>
                                                                    </div>
                                                                    
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label for="affiliateId">Affiliate ID</label>
                                                                            <input type="text" class="form-control mb-3 @error('affiliateId') is-invalid @enderror" name="affiliateId" id="affiliateId" placeholder="{{ auth()->user()->affiliateId }}" value="{{ auth()->user()->affiliateId }}" >
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label for="email">Email</label>
                                                                            <input type="email" class="form-control mb-3 @error('email') is-invalid @enderror" name="email" id="email" placeholder="{{ auth()->user()->email }}" value="{{ auth()->user()->email }}" />
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label for="password">Password</label>
                                                                            <input type="password" class="form-control mb-3 @error('password') is-invalid @enderror" name="password" id="password" placeholder="********************" value="********************" />
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