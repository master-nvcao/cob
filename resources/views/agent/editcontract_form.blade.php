@extends('agent.agent')

@section('title') Edit Contract @endsection

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

    new TomSelect("#client_id",{
        create: true,
        sortField: {
            field: "text",
            direction: "asc"
        }
    });

    new TomSelect("#service_id",{
        create: true,
        sortField: {
            field: "text",
            direction: "asc"
        }
    });

    new TomSelect("#status",{
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
                        <li class="breadcrumb-item"><a href="#">Contracts</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Edit</li>
                    </ol>
                </nav>
            </div>
            <!-- /BREADCRUMB -->
                
            <div class="account-settings-container layout-top-spacing">

                <div class="account-content">
                    <div class="row mb-3">
                        <div class="col-md-12">
                            <h2>Edit Contracts</h2>

                            
                        </div>
                    </div>

                      <div class="row">
                                <div class="col-xl-12 col-lg-12 col-md-12 layout-spacing">
                                    <form class="section general-info" method="POST" action="{{ route('agent.contracts.update', ['id' => $contract->id]) }}">
                                        @csrf 
                                        @method("PUT")

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

                                                                    <div class="col-md-12">
                                                                        <div class="form-group">
                                                                            <label for="client_id">Client</label>
                                                                            <select id="client_id" name="client_id" class="form-control-lg mb-3" placeholder="Select a client..." autocomplete="off" required>
                                                                                <option value="">Select a client...</option>
                                                                                
                                                                                @foreach( $clients as $client)
                                                                                    <option value="{{ $client->id }}" @if($contract->client_id == $client->id) selected @endif >{{ $client->last_name.' '.$client->first_name }}</option>
                                                                                @endforeach 
                                                                                
                                                                            </select>
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-md-12">
                                                                        <div class="form-group">
                                                                            <label for="service_id">Service</label>
                                                                            <select id="service_id" name="service_id" class="form-control-lg mb-3" placeholder="Select a service..." autocomplete="off" required>
                                                                                <option value="">Select a service...</option>
                                                                                
                                                                                @foreach( $services as $service)
                                                                                    <option value="{{ $service->id }}"  @if($contract->service_id == $service->id) selected @endif>{{ $service->name }}</option>
                                                                                @endforeach 
                                                                                
                                                                            </select>
                                                                        </div>
                                                                    </div>

                                                                    
                                                                    
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label for="date_creation">Date of creation</label>
                                                                            <input type="date" class="form-control mb-3" name="date_creation" id="date_creation" value="{{ $contract->date_creation }}" required>
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label for="date_expiration">Date of expiration</label>
                                                                            <input type="date" class="form-control mb-3" name="date_expiration" id="date_expiration" value="{{ $contract->date_expiration }}" required>
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-md-12">
                                                                        <div class="form-group">
                                                                            <label for="status">Status</label>
                                                                            <select id="status" name="status" class="form-control-lg mb-3" placeholder="Select a status..." autocomplete="off" required>
                                                                                <option value="">Select a status...</option>
                                                                                <option value="Pending" @if($contract->status == 'Pending') selected @endif>Pending</option>
                                                                                <option value="Payed"  @if($contract->status == 'Payed') selected @endif>Payed</option>
                                                                                <option value="Complete"  @if($contract->status == 'Complete') selected @endif>Complete</option>
                                                                                <option value="Canceled"  @if($contract->status == 'Canceled') selected @endif>Canceled</option>
                                                                            </select>
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