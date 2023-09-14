<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title> @yield('title', 'Dashboard') </title>


    <link rel="icon" type="image/x-icon" href="{{ asset("src/assets/img/favicon.ico") }}"/>


    <link href="{{ asset("layouts/modern-light-menu/css/light/loader.css") }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset("layouts/modern-light-menu/css/dark/loader.css") }}" rel="stylesheet" type="text/css" />
    <script src="{{ asset("layouts/modern-light-menu/loader.js") }}"></script>
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
    <link href="{{ asset("src/bootstrap/css/bootstrap.min.css") }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset("layouts/modern-light-menu/css/light/plugins.css") }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset("layouts/modern-light-menu/css/dark/plugins.css") }}" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->

    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM STYLES -->
    <link rel="stylesheet" type="text/css" href="{{ asset("src/assets/css/light/elements/alert.css") }}">
    <link rel="stylesheet" type="text/css" href="{{ asset("src/assets/css/dark/elements/alert.css") }}">
    <!-- END PAGE LEVEL PLUGINS/CUSTOM STYLES -->

    <link rel="stylesheet" href="{{ asset("src/plugins/src/filepond/filepond.min.css") }}">
    <link rel="stylesheet" href="{{ asset("src/plugins/src/filepond/FilePondPluginImagePreview.min.css") }}">
    <link href="{{ asset("src/plugins/src/notification/snackbar/snackbar.min.css") }}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="{{ asset("src/plugins/src/sweetalerts2/sweetalerts2.css") }}">
    
    <link href="{{ asset("src/plugins/css/light/filepond/custom-filepond.css") }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset("src/assets/css/light/components/tabs.css") }}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="{{ asset("src/assets/css/light/elements/alert.css") }}">
    
    <link href="{{ asset("src/plugins/css/light/sweetalerts2/custom-sweetalert.css") }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset("src/plugins/css/light/notification/snackbar/custom-snackbar.css") }}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="{{ asset("src/assets/css/light/forms/switches.css") }}">
    <link href="{{ asset("src/assets/css/light/components/list-group.css") }}" rel="stylesheet" type="text/css">

    <link href="{{ asset("src/assets/css/light/users/account-setting.css") }}" rel="stylesheet" type="text/css" />



    <link href="{{ asset("src/plugins/css/dark/filepond/custom-filepond.css") }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset("src/assets/css/dark/components/tabs.css") }}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="{{ asset("src/assets/css/dark/elements/alert.css") }}">
    
    <link href="{{ asset("src/plugins/css/dark/sweetalerts2/custom-sweetalert.css") }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset("src/plugins/css/dark/notification/snackbar/custom-snackbar.css") }}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="{{ asset("src/assets/css/dark/forms/switches.css") }}">
    <link href="{{ asset("src/assets/css/dark/components/list-group.css") }}" rel="stylesheet" type="text/css">

    <link href="{{ asset("src/assets/css/dark/users/account-setting.css") }}" rel="stylesheet" type="text/css" />

    @yield('style', '')

</head>
<body class="layout-boxed" layout="full-width">

    <!-- BEGIN LOADER -->
    <div id="load_screen"> <div class="loader"> <div class="loader-content">
        <div class="spinner-grow align-self-center"></div>
    </div></div></div>
    <!--  END LOADER -->

    <!--  BEGIN NAVBAR  -->
    <div class="header-container container-xxl" style="border:0px solid black;">
        <header class="header navbar navbar-expand-sm expand-header" >

            <a href="javascript:void(0);" class="sidebarCollapse">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-menu"><line x1="3" y1="12" x2="21" y2="12"></line><line x1="3" y1="6" x2="21" y2="6"></line><line x1="3" y1="18" x2="21" y2="18"></line></svg>
            </a>

            

            <ul class="navbar-item flex-row ms-lg-auto ms-0">

                

                <li class="nav-item theme-toggle-item">
                    <a href="javascript:void(0);" class="nav-link theme-toggle">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-moon dark-mode"><path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"></path></svg>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-sun light-mode"><circle cx="12" cy="12" r="5"></circle><line x1="12" y1="1" x2="12" y2="3"></line><line x1="12" y1="21" x2="12" y2="23"></line><line x1="4.22" y1="4.22" x2="5.64" y2="5.64"></line><line x1="18.36" y1="18.36" x2="19.78" y2="19.78"></line><line x1="1" y1="12" x2="3" y2="12"></line><line x1="21" y1="12" x2="23" y2="12"></line><line x1="4.22" y1="19.78" x2="5.64" y2="18.36"></line><line x1="18.36" y1="5.64" x2="19.78" y2="4.22"></line></svg>
                    </a>
                </li>


                <li class="nav-item dropdown user-profile-dropdown  order-lg-0 order-1">
                    <a href="javascript:void(0);" class="nav-link dropdown-toggle user" id="userProfileDropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <div class="avatar-container">
                            <div class="avatar avatar-sm avatar-indicators avatar-online">
                                <img alt="avatar" src="{{ asset('storage/uploads/profile_pictures/'.auth('admin')->user()->profile_picture) }}" class="rounded-circle">
                            </div>
                        </div>
                    </a>

                    <div class="dropdown-menu position-absolute" aria-labelledby="userProfileDropdown">

                        <div class="user-profile-section">
                            <div class="media mx-auto">
                                <div class="emoji me-2">
                                    &#x1F44B;
                                </div>
                                <div class="media-body">
                                    <h5>{{ auth('admin')->user()->last_name." ". auth('admin')->user()->first_name }}</h5>
                                    <p>Admin</p>
                                </div>
                            </div>
                        </div>

                        <div class="dropdown-item">
                            <a href="{{ route('admin.profile') }}">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg> <span>Profile</span>
                            </a>
                        </div>
                        
                        <div class="dropdown-item">
                            <a href="{{ route('logout') }}">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-log-out"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg> 
                                <span>Log Out</span>
                            </a>
                        </div>
                    </div>
                    
                </li>
            </ul>
        </header>
    </div>
    <!--  END NAVBAR  -->

    <!--  BEGIN MAIN CONTAINER  -->
    <div class="main-container " id="container">

        <div class="overlay"></div>
        <div class="search-overlay"></div>

        <!--  BEGIN SIDEBAR  -->
        <div class="sidebar-wrapper sidebar-theme">

            <nav id="sidebar">

                <div class="navbar-nav theme-brand flex-row  text-center">
                    <div class="nav-logo">
                        <div class="nav-item theme-logo">
                            <a href="{{ route('admin.dashboard') }}">
                                <img src="{{ asset("src/assets/img/logo2.svg") }}" {{-- class="navbar-logo" --}} alt="logo">
                            </a>
                        </div>
                        <div class="nav-item theme-text">
                            <a href="{{ route('admin.dashboard') }}" class="nav-link"> COB </a>
                        </div>
                    </div>
                    <div class="nav-item sidebar-toggle">
                        <div class="btn-toggle sidebarCollapse">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevrons-left"><polyline points="11 17 6 12 11 7"></polyline><polyline points="18 17 13 12 18 7"></polyline></svg>
                        </div>
                    </div>
                </div>
                                
                <div class="shadow-bottom"></div>
                <ul class="list-unstyled menu-categories" id="accordionExample">


                    <li class="menu @if(request()->routeIs('admin.dashboard'))active @endif">
                        <a href="{{ route('admin.dashboard') }}" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                                <span>Dashboard</span>
                            </div>
                        </a>
                    </li>


                    <li class="menu menu-heading">
                        <div class="heading"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-minus"><line x1="5" y1="12" x2="19" y2="12"></line></svg>
                            <span>COMPANIES AND SERVICES</span></div>
                    </li> 



                    <li class="menu 
                    @if( request()->routeIs('admin.companies.add') || request()->routeIs('admin.companies.edit') || request()->routeIs('admin.companies.show') )
                        active
                    @endif
                    ">

                    @php
                    $ae1 = (request()->routeIs('admin.companies.add') || request()->routeIs('admin.companies.edit') || request()->routeIs('admin.companies.update') || request()->routeIs('admin.companies.show') 
                        || request()->routeIs('admin.companies.display')) ? 'true' : 'false';
                    @endphp
                    
                        <a href="#layouts" data-bs-toggle="collapse" aria-expanded="{{ $ae1 }}" class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>                               
                                <span>Companies</span>
                            </div>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                            </div>
                        </a>
                        <!-- you need in order for it to appear to add show in the ul class  -->
                        <ul class="collapse submenu list-unstyled
                        @if( request()->routeIs('admin.companies.add') || request()->routeIs('admin.companies.edit') 
                        || request()->routeIs('admin.companies.update') || request()->routeIs('admin.companies.show') 
                        || request()->routeIs('admin.companies.display'))
                            show
                        @endif
                        " id="layouts" data-bs-parent="#accordionExample">
                            <li @if( request()->routeIs('admin.companies.add') ) class="active" @endif >
                                <a href="{{ route('admin.companies.add') }}"> Add </a>
                            </li>
                            
                            <li @if( request()->routeIs('admin.companies.edit') || request()->routeIs('admin.companies.update') ) class="active" @endif >
                                <a href="{{ route('admin.companies.edit') }}"> Edit </a>
                            </li>

                            <li @if( request()->routeIs('admin.companies.show') || request()->routeIs('admin.companies.display') ) class="active" @endif >
                                <a href="{{ route('admin.companies.show') }}"> Show </a>
                            </li>

                        </ul>
                    </li>

                    <li class="menu 
                    @if( request()->routeIs('admin.services.add') || request()->routeIs('admin.services.edit') || request()->routeIs('admin.services.show') )
                        active
                    @endif
                    ">

                    @php
                    $ae2 = (request()->routeIs('admin.services.add') || request()->routeIs('admin.services.edit') || request()->routeIs('admin.services.show') || request()->routeIs('admin.services.update') || request()->routeIs('admin.services.display')) ? 'true' : 'false';
                    @endphp
                        <a href="#contracts" data-bs-toggle="collapse" aria-expanded="{{ $ae2 }}" class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>                                
                                <span>Services</span>
                            </div>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                            </div>
                        </a>
                        <!-- you need in order for it to appear to add show in the ul class  -->
                        <ul class="collapse submenu list-unstyled 
                        @if( request()->routeIs('admin.services.add') || request()->routeIs('admin.services.edit') || request()->routeIs('admin.services.show') || request()->routeIs('admin.services.display') || request()->routeIs('admin.services.update'))
                            show
                        @endif
                        " id="contracts" data-bs-parent="#accordionExample">
                            <li @if( request()->routeIs('admin.services.add') ) class="active" @endif >
                                <a href="{{ route('admin.services.add') }}"> Add </a>
                            </li>

                            <li @if( request()->routeIs('admin.services.edit') || request()->routeIs('admin.services.update') ) class="active" @endif >
                                <a href="{{ route('admin.services.edit') }}"> Edit </a>
                            </li>

                            <li @if( request()->routeIs('admin.services.show') || request()->routeIs('admin.services.display')) class="active" @endif >
                                <a href="{{ route('admin.services.show') }}"> Show </a>
                            </li>
                            
                        </ul>
                    </li>
                    
                    <li class="menu menu-heading">
                        <div class="heading"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-minus"><line x1="5" y1="12" x2="19" y2="12"></line></svg>
                            <span>SETTINGS</span></div>
                    </li>  
                    

                    <li class="menu
                    @if( request()->routeIs('admin.profile') || request()->routeIs('logout') )
                        active
                    @endif
                    ">

                    @php
                    $ae3 = (request()->routeIs('admin.profile') || request()->routeIs('logout')) ? 'true' : 'false';
                    @endphp

                        <a href="#settings" data-bs-toggle="collapse" aria-expanded="{{ $ae3 }}"

                            class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-settings"><circle cx="12" cy="12" r="3"></circle><path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"></path></svg>                                <span>Settings</span>
                            </div>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                            </div>
                        </a>
                        <!-- you need in order for it to appear to add show in the ul class  -->
                        <ul class="collapse submenu list-unstyled 
                        @if( request()->routeIs('admin.profile') || request()->routeIs('logout') )
                            show
                        @endif
                        " id="settings" data-bs-parent="#accordionExample">
                            <li @if( request()->routeIs('admin.profile') ) class="active" @endif >
                                <a href="{{ route('admin.profile') }}"> Profile </a>
                            </li>

                            <li>
                                <a href="{{ route('logout') }}"> Logout </a>
                            </li>
                            
                        </ul>
                    </li>
                   
                </ul>
                
            </nav>

        </div>

        {{-- @if( session('error') )
        
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
        
        @endif --}}


        <!--  END SIDEBAR  -->
        
        <!--  BEGIN CONTENT AREA  -->

            @yield('content')

        <!--  END CONTENT AREA  -->

    </div>
    <!-- END MAIN CONTAINER -->

    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <script src="{{ asset("src/bootstrap/js/bootstrap.bundle.min.js") }}"></script>
    <script src="{{ asset("src/plugins/src/perfect-scrollbar/perfect-scrollbar.min.js") }}"></script>
    <script src="{{ asset("src/plugins/src/mousetrap/mousetrap.min.js") }}"></script>
    <script src="{{ asset("src/plugins/src/waves/waves.min.js") }}"></script>
    <script src="{{ asset("layouts/modern-light-menu/app.js") }}"></script>
    <!-- END GLOBAL MANDATORY SCRIPTS -->

    

    @yield('scripts','')

</body>
</html>