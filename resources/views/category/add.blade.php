@extends('layouts.default')

  @section('content') 

<!-- Begin main content -->
<div class="main-content">
    <!-- content -->
    <div class="page-content">
       <!-- page header -->
       <div class="page-title-box">
          <div class="container-fluid">
             <div class="page-title dflex-between-center">
                <h3 class="mb-1 font-weight-bold">Add Category</h3>
                <ol class="breadcrumb">
                   <li class="breadcrumb-item">
                      <a href="https://lettstartdesign.com/marvel/index.html">
                         <i class="bx bx-home fs-xs"></i>
                      </a>
                   </li>
                   <li class="breadcrumb-item">
                      <a href="calender.html">
                         Apps
                      </a>
                   </li>
                   <li class="breadcrumb-item active">Add Category</li>
                </ol>
             </div>
          </div>
       </div>
       <!-- page content -->
       <div class="page-content-wrapper mt--45">
          <div class="container-fluid">
             <div class="card">
                <div class="card-header">
                   <h5>Basic Information</h5>
                   <p class="mb-0">Fill all information below</p>
                </div>
                <div class="card-body">
                   <form action="{{route('category.store')}}" enctype="multipart/form-data" method="post" id="addProductForm">
                     @csrf
                     @method('post')
                      <div class="row">
                         <div class="col-lg-6">
                            <div class="form-group floating-label enable-floating-label show-label">
                               <input id="productname" name="name" type="text"
                                  placeholder="Enter Product Name" class="form-control">
                               <label for="productname">Category Name <span class="text-danger">*</span></label>
                               <div class="validation-error d-none font-size-13">This field is required</div>
                            </div>
                         </div>
                         
                         
                         <div class="col-lg-6">
                            <div class="form-group floating-label enable-floating-label show-label">
                               <select class="form-control select2" name="status">
                                  <option value="1">Enable</option>
                                  <option value="0">Disable</option>
                               </select>
                               <label>status <span class="text-danger">*</span></label>
                               <div class="validation-error d-none font-size-13">This field is required</div>
                            </div>
                         </div>
                      </div>
                      <!-- This button link with id-sw-default-step-1 if you change it change in serial number like below -->
                      <div class="clearfix">
                         <button type="submit" class="btn btn-primary">Add Category</button>
                      </div>
                   </form>
                </div>
             </div>
          </div>
       </div>
    </div>
 </div>
@end
 <!-- main content End -->