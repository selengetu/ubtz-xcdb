@extends('layouts.parent')

@section('style')

@endsection

@section('content')
<div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h3 class="text-themecolor">Хөдөлмөр цалин хөлсний тайлан</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Бүртгэл</a></li>
                            <li class="breadcrumb-item active">Тайлан</li>
                        </ol>
                    </div>
                    <div class="col-md-7 align-self-center">
                        <a href="https://wrappixel.com/templates/adminwrap/" class="btn waves-effect waves-light btn btn-info pull-right hidden-sm-down"  data-toggle="modal" data-target="#exampleModal"> <i class="fa fa-plus" aria-hidden="true"></i> Тайлан үүсгэх</a>
                    </div>
                </div>
              
                <div class="row">
                    <!-- Column -->
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div>
                                        <h5 class="card-title">Projects of the Month</h5>
                                    </div>
                                    <div class="ml-auto">
                                    <select class="form-control select2" id="sexecutor_id" name="sexecutor_id">
                                                @foreach($month as $months)
                                                  
                                                    <option value= "{{$months->id}}" > 
                                                     {{$months->month_name}}</option>
                                               
                                                @endforeach
                                            </select>        
                                    </div>
                                </div>
                                <div class="table-responsive m-t-20 no-wrap">
                                    <table class="table vm no-th-brd pro-of-month">
                                        <thead>
                                            <tr>
                                                <th colspan="2">Assigned</th>
                                                <th>Name</th>
                                                <th>Budget</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td style="width:50px;"><span class="round">S</span></td>
                                                <td>
                                                    <h6>Sunil Joshi</h6><small class="text-muted">Web Designer</small></td>
                                                <td>Elite Admin</td>
                                                <td>$3.9K</td>
                                            </tr>
                                            <tr class="active">
                                                <td><span class="round"><img src="../assets/images/users/2.jpg" alt="user" width="50"></span></td>
                                                <td>
                                                    <h6>Andrew</h6><small class="text-muted">Project Manager</small></td>
                                                <td>Real Homes</td>
                                                <td>$23.9K</td>
                                            </tr>
                                            <tr>
                                                <td><span class="round round-success">B</span></td>
                                                <td>
                                                    <h6>Bhavesh patel</h6><small class="text-muted">Developer</small></td>
                                                <td>MedicalPro Theme</td>
                                                <td>$12.9K</td>
                                            </tr>
                                            <tr>
                                                <td><span class="round round-primary">N</span></td>
                                                <td>
                                                    <h6>Nirav Joshi</h6><small class="text-muted">Frontend Eng</small></td>
                                                <td>Elite Admin</td>
                                                <td>$10.9K</td>
                                            </tr>
                                            <tr>
                                                <td><span class="round round-warning">M</span></td>
                                                <td>
                                                    <h6>Micheal Doe</h6><small class="text-muted">Content Writer</small></td>
                                                <td>Helping Hands</td>
                                                <td>$12.9K</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    
                
            </div>
                     <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                        <form>
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Тайлан үүсгэх</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                         
                          <div class="row">
                        
                            <div class="col-md-3">
                                <label for="exampleFormControlSelect2"> Тайлант сар</label>
                                <select class="form-control select2" id="sexecutor_id" name="sexecutor_id">
                                                @foreach($month as $months)
                                                  
                                                    <option value= "{{$months->id}}" > 
                                                     {{$months->month_name}}</option>
                                               
                                                @endforeach
                                            </select>        
                            </div>
                            <div class="col-md-4">
                            <label for="exampleFormControlSelect2"> Төрөл</label>
                            <select class="form-control select2" id="sexecutor_id" name="sexecutor_id">
                                                @foreach($class as $classes)
                                                  
                                                    <option value= "{{$classes->cl_id}}" > 
                                                     {{$classes->cl_name}}</option>
                                               
                                                @endforeach
                                            </select>
                            </div>
                            <div class="col-md-4">
                            
                            </div>
                        
                          </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                        </form>
                        </div>
                    </div>
                    </div>
@endsection