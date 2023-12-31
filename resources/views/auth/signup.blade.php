<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>SignUp </title>
    <link rel="icon" type="image/x-icon" href="{{ asset("src/assets/img/favicon.ico") }}"/>
    <link href="{{ asset("layouts/modern-light-menu/css/light/loader.css") }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset("layouts/modern-light-menu/css/dark/loader.css") }}" rel="stylesheet" type="text/css" />
    <script src="{{ asset("layouts/modern-light-menu/loader.js") }}"></script>
    
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
    <link href="{{ asset("src/bootstrap/css/bootstrap.min.css") }}" rel="stylesheet" type="text/css" />
    
    <link href="{{ asset("layouts/modern-light-menu/css/light/plugins.css") }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset("src/assets/css/light/authentication/auth-boxed.css") }}" rel="stylesheet" type="text/css" />
    
    <link href="{{ asset("layouts/modern-light-menu/css/dark/plugins.css") }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset("src/assets/css/dark/authentication/auth-boxed.css") }}" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->
    
</head>
<body class="form">

    <!-- BEGIN LOADER -->
    <div id="load_screen"> <div class="loader"> <div class="loader-content">
        <div class="spinner-grow align-self-center"></div>
    </div></div></div>
    <!--  END LOADER -->


    @if( session('error') )
    
    <div class="alert alert-light-danger alert-dismissible fade show border-0 mb-4" role="alert">
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
            <svg viewPort="0 0 12 12" version="1.1"
     xmlns="http://www.w3.org/2000/svg">
    <line x1="1" y1="11" 
          x2="11" y2="1" 
          stroke="black" 
          stroke-width="2"/>
    <line x1="1" y1="1" 
          x2="11" y2="11" 
          stroke="black" 
          stroke-width="2"/>
</svg> </button>
        <strong>{{ session('error') }}</strong></button>
    </div> 
    
    @endif

    <div class="auth-container d-flex">

        <div class="container mx-auto align-self-center">
    
            <div class="row">
    
                <div class="col-xxl-4 col-xl-5 col-lg-5 col-md-8 col-12 d-flex flex-column align-self-center mx-auto">
                    <div class="card mt-3 mb-3">
                        <div class="card-body">
    
                            <div class="row">
                                <div class="col-md-12 mb-3">
                                    
                                    <h2>Sign Up</h2>
                                    <p>Enter your information to register</p>
                                    
                                </div>

                                <form method="POST" action="{{ route('signup') }}" enctype="multipart/form-data">
                                    @csrf  

                                <div class="row md-12">
                                    <div class="col mb-3">
                                        <label class="form-label">First Name</label>
                                        <input type="text" class="form-control add-billing-address-input @error('first_name') is-invalid @enderror" name="first_name" required>
                                    </div>

                                    <div class="col mb-3">
                                        <label class="form-label">Last Name</label>
                                        <input type="text" class="form-control add-billing-address-input @error('last_name') is-invalid @enderror" name="last_name" required>
                                    </div>
                                </div>

                                <div class="row md-12">
                                    <div class="col mb-3">
                                        <label class="form-label">Phone</label>
                                        <input type="text" class="form-control add-billing-address-input @error('phone') is-invalid @enderror" name="phone" required>
                                    </div>

                                    <div class="col mb-3">
                                        <label class="form-label">Affiliate ID</label>
                                        <input type="text" class="form-control add-billing-address-input @error('affiliateId') is-invalid @enderror" name="affiliateId" required>
                                    </div>
                                </div>


                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label">Email</label>
                                        <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" required>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="mb-3">
                                        <label class="form-label">Password</label>
                                        <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" required>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="mb-3">
                                        <label class="form-label">Profile Picture</label>
                                        <input type="file" class="form-control file-upload-input @error('profile_picture') is-invalid @enderror" name="profile_picture" accept="image/jpeg, image/png, image/jpg">
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="mb-3">
                                        <div class="form-check form-check-primary form-check-inline">
                                            <input class="form-check-input me-3" type="checkbox" id="form-check-default">
                                            <label class="form-check-label" for="form-check-default">
                                                I agree the <a href="javascript:void(0);" class="text-primary ">Terms and Conditions</a>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="col-12">
                                    <div class="mb-4">
                                        <button class="btn btn-secondary w-100" type="submit">SIGN UP</button>
                                    </div>
                                </div>
                                
                            </form>
                                

                                <div class="col-12">
                                    <div class="text-center">
                                        <p class="mb-0">Already have an account ? <a href="{{ route('login') }}" class="text-warning">Sign in</a></p>
                                    </div>
                                </div>
                                
                            </div>
                            
                        </div>
                    </div>
                </div>
                
            </div>
            
        </div>

    </div>
    
    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <script src="{{ asset("src/bootstrap/js/bootstrap.bundle.min.js") }}"></script>
    <!-- END GLOBAL MANDATORY SCRIPTS -->

</body>
</html>