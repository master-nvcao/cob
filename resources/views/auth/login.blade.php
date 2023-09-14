<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>Login </title>
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

    <link rel="stylesheet" type="text/css" href="{{ asset("src/assets/css/light/elements/alert.css") }}">
    <link rel="stylesheet" type="text/css" href="{{ asset("src/assets/css/dark/elements/alert.css") }}">
    
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

    @if( session('success') )
    
    <div class="alert alert-light-success alert-dismissible fade show border-0 mb-4" role="alert">
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
        <strong>{{ session('success') }}</strong></button>
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
                                    
                                    <h2>Sign In</h2>
                                    <p>Enter your email and password to login</p>
                                    
                                    

                            <form method="POST" action="{{ route('login') }}">
                                @csrf   


                                </div>
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label">Email</label>
                                        <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email" required/>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="mb-4">
                                        <label class="form-label">Password</label>
                                        <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="password" required>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="mb-3">
                                        <div class="form-check form-check-primary form-check-inline">
                                            <input class="form-check-input me-3" type="checkbox" id="form-check-default" name="remember">
                                            <label class="form-check-label" for="form-check-default">
                                                Remember me
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="col-12">
                                    <div class="mb-4">
                                        <button class="btn btn-secondary w-100" type="submit">SIGN IN</button>
                                    </div>
                                </div>

                            </form>


                                <div class="col-12 mt-2">
                                    <div class="text-center">
                                        <p class="mb-0">Dont't have an account ? <a href="{{ route('signup') }}" class="text-warning">Sign Up</a></p>
                                    </div>
                                </div>
                                
                                <div class="mb-2">
                                </div>
                                
                                <div class="text-center">
                                        <p class="mb-0"><a href="{{ route('forgotpassword') }}" class="text-warning">Forgot password ?</a></p>
                                    </div>
                                </div>
                                
                            </div>
                            
                        </div>
                    </div>
                </div>
                
            </div>
            
        </div>

    </div>
    
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <script src="{{ asset("src/bootstrap/js/bootstrap.bundle.min.js") }}"></script>
    <script src="{{ asset("src/plugins/src/perfect-scrollbar/perfect-scrollbar.min.js") }}"></script>
    <script src="{{ asset("src/plugins/src/mousetrap/mousetrap.min.js") }}"></script>
    <script src="{{ asset("src/plugins/src/waves/waves.min.js") }}"></script>
    <script src="{{ asset("layouts/modern-light-menu/app.js") }}"></script>
    <script src="{{ asset("src/plugins/src/highlight/highlight.pack.js") }}"></script>
    <!-- END GLOBAL MANDATORY STYLES -->

    <!-- BEGIN PAGE LEVEL SCRIPTS -->
    <script src="{{ asset("src/assets/js/scrollspyNav.js") }}"></script>
    <!-- END PAGE LEVEL SCRIPTS -->


</body>
</html>