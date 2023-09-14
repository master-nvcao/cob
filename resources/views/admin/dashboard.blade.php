@extends('admin.admin')

@section('title') Dashboard @endsection 

@section('content')
<div id="content" class="main-content">
    <div class="layout-px-spacing">

        <div class="middle-content container-xxl p-0">

            <!-- BREADCRUMB -->
            <!-- <div class="page-meta">
                <nav class="breadcrumb-style-one" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Contracts</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Edit</li>
                    </ol>
                </nav>
            </div> -->
            <!-- /BREADCRUMB -->
                
            <div class="account-settings-container layout-top-spacing">

                <div class="account-content">
                    <div class="row mb-3">
                        <div class="col-md-12">
                            <h2>Dashboard</h2>

                            
                        </div>
                    </div>

                    <div class="row mb-4">

                        <div class="col-xl-2 col-lg-6 col-md-6 col-sm-6 mb-6 mx-3">
                        <div class="card bg-success">
                            <div class="card-body">
                                <!-- <p class="mb-0">This is some text within a card body.</p><br> -->
                                <h4 class="card-title"><strong>Total Contracts</strong></h4>
                                <center>
                                <h3 class="card-title"><strong>{{ $contracts }}</strong></h3>
                            </center>
                            </div>
                        </div>
                        </div>

                        
                        <div class="col-xl-2 col-lg-6 col-md-6 col-sm-6 mb-6 mx-3">
                            <div class="card bg-danger">
                                <div class="card-body">
                                    <!-- <p class="mb-0">This is some text within a card body.</p><br> -->
                                    <h4 class="card-title"><strong>Total Price</strong></h4>
                                    <center>
                                    <h3 class="card-title"><strong>{{ $price }} $</strong></h3>
                                </center>
                                </div>
                            </div>
                            </div>

                            <div class="col-xl-2 col-lg-6 col-md-6 col-sm-6 mb-6 mx-3">
                                <div class="card bg-primary">
                                    <div class="card-body">
                                        <!-- <p class="mb-0">This is some text within a card body.</p><br> -->
                                        <h4 class="card-title"><strong>Total Companies</strong></h4>
                                        <center>
                                        <h3 class="card-title"><strong>{{ $companies_count }}</strong></h3>
                                    </center>
                                    </div>
                            </div>
                            </div>

                            <div class="col-xl-2 col-lg-6 col-md-6 col-sm-6 mb-6 mx-3">
                                <div class="card bg-info">
                                    <div class="card-body">
                                        <!-- <p class="mb-0">This is some text within a card body.</p><br> -->
                                        <h4 class="card-title"><strong>Total Services</strong></h4>
                                        <center>
                                        <h3 class="card-title"><strong>{{ $services }}</strong></h3>
                                    </center>
                                    </div>
                            </div>
                            </div>

                            <div class="col-xl-2 col-lg-6 col-md-6 col-sm-6 mb-6 mx-3">
                                <div class="card bg-warning">
                                    <div class="card-body">
                                        <!-- <p class="mb-0">This is some text within a card body.</p><br> -->
                                        <h4 class="card-title"><strong>Total Clients</strong></h4>
                                        <center>
                                        <h3 class="card-title"><strong>{{ $clients }}</strong></h3>
                                    </center>
                                    </div>
                            </div>
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
                                            <th scope="col">Email</th>
                                            <th class="text-center" scope="col">Website</th>
                                            <th class="text-center" scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        @foreach( $companies as $company)
                                        <tr>
                                            <td>{{ $company->name }}</td>
                                            <td>
                                                <span class="table-inner-text">{{ $company->email }}</span>
                                            </td>
                                            <td class="text-center">{{ $company->website }}</td>
                                            <td class="text-center">
                                                <div class="action-btns">
                                                    <a href="{{ 'admin/companies/show/'.$company->id }}" class="action-btn btn-view bs-tooltip me-2" data-toggle="tooltip" data-placement="top" title="View">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg>
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