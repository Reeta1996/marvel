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
                <h3 class="mb-1 font-weight-bold">Add Product</h3>
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
                   <li class="breadcrumb-item active">Add Product</li>
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
                   <form action="{{route('product.create')}}" enctype="multipart/form-data" method="post" id="addProductForm">
                     @csrf
                     @method('post')
                      <div class="row">
                         <div class="col-lg-6">
                            <div class="form-group floating-label enable-floating-label show-label">
                               <input id="productname" name="product_name" type="text"
                                  placeholder="Enter Product Name" class="form-control">
                               <label for="productname">Product Name <span class="text-danger">*</span></label>
                               <div class="validation-error d-none font-size-13">This field is required</div>
                            </div>
                         </div>
                         <div class="col-lg-6">
                            <div class="form-group floating-label enable-floating-label show-label">
                               <input id="brandname" name="brand_name" type="text"
                                  placeholder="Enter Brand Name" class="form-control">
                               <label for="brandname">Brand Name <span class="text-danger">*</span></label>
                               <div class="validation-error d-none font-size-13">This field is required</div>
                            </div>
                         </div>
                         <div class="col-lg-6">
                            <div class="form-group floating-label enable-floating-label show-label">
                               <input class="form-control" id="colors" name="colors" placeholder="Please enter colors" />
                               <label for="colors">Colors<span class="text-danger">*</span></label>
                               <div class="validation-error d-none font-size-13">
                                  Please enter atleast one color
                               </div>
                            </div>
                         </div>
                         <div class="col-lg-6">
                            <div class="form-group floating-label enable-floating-label show-label">
                               <select class="form-control select2" name="category_id[]" multiple >
                                  <option value="">Select Category</option>
                                 @foreach ($category as $cat)
                                 <option value="{{$cat->id}}">{{$cat->name}}</option> 
                                 @endforeach
                               </select>
                               <label>Product<span class="text-danger">*</span></label>
                               <div class="validation-error d-none font-size-13">This field is required</div>
                            </div>
                         </div>
                         <div class="col-md-4">
                            <div class="form-group floating-label enable-floating-label show-label">
                               <select class="form-control select2" name="currency">
                                  <option value="">Select Category</option>
                                  <option value="usd">USD</option>
                                  <option value="inr">INR</option>
                               </select>
                               <label>Currency<span class="text-danger">*</span></label>
                               <div class="validation-error d-none font-size-13">This field is required</div>
                            </div>
                         </div>
                         <div class="col-md-4">
                            <div class="form-group floating-label enable-floating-label show-label">
                               <input id="projectbudget" name="price" type="text"
                                  placeholder="Enter Project Budget..." class="form-control">
                               <label for="projectbudget">Price <span class="text-danger">*</span></label>
                               <div class="validation-error d-none font-size-13">This field is required</div>
                            </div>
                         </div>
                         <div class="col-md-4">
                            <div class="form-group floating-label enable-floating-label show-label">
                               <input id="productqty" name="quantity" type="text"
                                  placeholder="Enter Product Quantity" class="form-control">
                               <label for="productqty">Quantity <span class="text-danger">*</span></label>
                               <div class="validation-error d-none font-size-13">This field is required</div>
                            </div>
                         </div>
                         <div class="col-12">
                            <div class="form-group floating-label enable-floating-label show-label">
                               <textarea name="desc" id="product-desc"></textarea>
                               <label>Product Description<span
                                     class="text-danger">*</span></label>
                               <div class="validation-error d-none font-size-13">
                                  Item description can not be blank
                               </div>
                            </div>
                         </div>
                         <div class="col-12">
                            <div class="form-group floating-label enable-floating-label show-label">
                               <div class="dropzone" id="productImages">
                                  <div class="fallback">
                                     <input name="image" type="file"  />
                                  </div>
                                  <div class="dz-message needsclick">
                                     <i class="fs-xl text-muted  bx bx-cloud-upload"></i>
                                     <h3 class="mt-1">Upload Product Images</h3>
                                  </div>
                               </div>
                               <div class="dropzone-previews mt-3" id="file-previews"></div>
                               <!-- file preview template -->
                               <div class="d-none" id="uploadPreviewTemplate">
                                 <div class="card mb-0 shadow-none border">
                                   <div class="p-2">
                                     <div class="row align-items-center">
                                       <div class="col-auto">
                                         <img data-dz-thumbnail src="#" class="avatar-sm rounded bg-light" alt="Lettstart Admin">
                                       </div>
                                       <div class="col pl-0">
                                         <a href="javascript:void(0);" class="text-muted font-weight-bold" data-dz-name></a>
                                         <p class="mb-0" data-dz-size></p>
                                       </div>
                                       <div class="col-auto">
                                        <a href="javascript:void(0)" class="avatar avatar-xs bg-soft-danger text-danger mr-0" data-effect="wave" data-dz-remove>
                                           <i class="bx bx-x fs-sm"></i>
                                         </a>
                                         <!-- Button -->
                                       </div>
                                     </div>
                                   </div>
                                 </div>
                               </div>
                               <div class="validation-error d-none font-size-13">
                                  Upload atleast one image
                               </div>
                            </div>
                         </div>
                      </div>
                      <!-- This button link with id-sw-default-step-1 if you change it change in serial number like below -->
                      <div class="clearfix">
                         <button type="submit" class="btn btn-primary">Add Product</button>
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