@extends('layouts.app')

@section('css-content')

@endsection


@section('css-content')

@endsection

@section('content')

				

                    <!-- Start Content-->
                    <div class="container-fluid">
                        
                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">UBold</a></li>
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Extras</a></li>
                                            <li class="breadcrumb-item active">{{ $pageName }}</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">{{ $pageName }}</h4>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title --> 

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row mb-2">
                                            <div class="col-sm-4">
                                                <button type="button" class="btn btn-danger waves-effect waves-light" data-toggle="modal" data-target="#custom-modal"><i class="mdi mdi-plus-circle mr-1"></i> Add Server</button>
                                            </div>
                                            <div class="col-sm-8">
                                                <div class="text-sm-right">
                                                    <button type="button" class="btn btn-success mb-2 mr-1"><i class="mdi mdi-cog"></i></button>
                                                    <button type="button" class="btn btn-light mb-2 mr-1">Import</button>
                                                    <button type="button" class="btn btn-light mb-2">Export</button>
                                                </div>
                                            </div><!-- end col-->
                                            <div class="col-sm-12"></div>
                                        </div>
                
                                        <div class="table-responsive">
                                            <table class="table table-centered table-nowrap table-striped" id="products-datatable">
                                                <thead>
                                                    <tr>
                                                        <th style="width: 20px;">
                                                            <div class="custom-control custom-checkbox">
                                                                <input type="checkbox" class="custom-control-input" id="customCheck1">
                                                                <label class="custom-control-label" for="customCheck1">&nbsp;</label>
                                                            </div>
                                                        </th>
                                                         <th>ID</th>
                                                        <th>Name</th>
                                                        <th>Status</th>
                                                        <th>IP</th>
                                                        <th>DNS</th>
                                                        <th>Port</th> 
                                                        <th>User</th>
                                                       <!-- <th>Password</th>-->
                                                        <th style="width: 85px;">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>

                                                @foreach($servers as $server)
                                                            
                                                            
                                                                
                                                            
                                                           
                                                           
                                                
                                                
                                                
                                                
                                                
                                                
                                                
                                                
                                                
                                                
                                                
                                                    <tr>
                                                        <td>
                                                            <div class="custom-control custom-checkbox">
                                                                <input type="checkbox" class="custom-control-input" id="customCheck2">
                                                                <label class="custom-control-label" for="customCheck2">&nbsp;</label>
                                                            </div>
                                                        </td>
                                                        <td>{{$server->id}}</td>
                                                        <td class="table-user">
                                                            <a href="javascript:void(0);" class="text-body font-weight-semibold">{{$server->name}}</a>
                                                           
                                                        </td>
                                                        
                                                        
                                                        <td></td>
                                                        
                                                         
                                                        <td>{{$server->ip}}</td>
                                                        <td>{{$server->dnsName}} </td>
                                                        <td>{{$server->port}}</td>
                                                        <td>{{$server->username}}</td>
                                                        
														<!--<td>
														<div class="input-group input-group-merge">
                                                            <input type="password" id="{{$server->id}}" class="form-control" value="{{$server->password}}">
                                                            <div class="input-group-append" data-password="false">
                                                                <div class="input-group-text">
                                                                    <span class="password-eye"></span>
                                                                </div>
                                                            </div>
                                                        </div>
														</td>-->
                                                       
                    
                                                        <td>
                                                            <a href="javascript:void(0);" title="Restart Mikrotik" class="action-icon"> <i class="mdi mdi-restart"></i></a>
                                                            <a href="javascript:void(0);" title="Sync Panel Accounts to Mikrotik" class="action-icon"> <i class="mdi mdi-cloud-sync"></i></a>
                                                            <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
                                                            <a href="/server/delete/{{$server->id}}" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                                                        </td>
                                                    </tr>

                                                    @endforeach
                                                    


 
                                                   
                                                   
                                                </tbody>
                                            </table>
                                        </div>

                                        

                                    </div> <!-- end card-body-->
                                </div> <!-- end card-->
                            </div> <!-- end col -->
                        </div>
                        <!-- end row --> 
                        
                    </div> <!-- container -->



                    <!-- Modal -->
        <div class="modal fade" id="custom-modal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header bg-light">
                        <h4 class="modal-title" id="myCenterModalLabel">Server Mikrotik</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    </div>
                    <div class="modal-body p-4">
                        <form action="app/Controller/ServerMikrotikController.php" method="post">
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="Enter name" required>
                            </div>
                            <div class="form-group">
                                <label for="ip">IP</label>
                                <input type="text" class="form-control" id="ip" name="ip" placeholder="Enter ip address" required>
                            </div>
                            
                            
                            <div class="form-group">
                                <label for="dns">DNS</label>
                                <input type="text" class="form-control" id="dns" name="dns" placeholder="Enter DNS Name for Hotspot">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Port</label>
                                <input type="number" class="form-control" id="port" name="port" min="7320" max="7390" placeholder="Enter port 7320 to 7390" required="">
                            </div>
                            
                            
                            <div class="form-group">
                                <label for="exampleInputEmail2">Username</label>
                                <input type="text" class="form-control" id="username" name="username" placeholder="Enter username" required>
                            </div>
                            
                            
                            
                             
                            <div class="form-group">
                                <label for="exampleInputEmail3">Password</label>
                                <input type="text" class="form-control" id="password" name="password" placeholder="Enter password" required>
                            </div>
                            
                           
                            <div class="text-right">
                                <button type="submit" class="btn btn-success waves-effect waves-light">Save</button>
                                <button type="button" class="btn btn-danger waves-effect waves-light" data-dismiss="modal">Cancel</button>
                            </div>
                        </form>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->


                
@endsection