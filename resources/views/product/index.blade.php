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
                <h3 class="mb-1 font-weight-bold">product</h3>
                <ol class="breadcrumb mb-0 mt-1">
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
                   <li class="breadcrumb-item active">product</li>
                </ol>
             </div>
          </div>
       </div>
       <!-- page content -->
       <div class="page-content-wrapper mt--45">
          <div class="container-fluid">

            <div class="card card-body">
               <div class="row">
                 <div class="col-md-3">
                   <a href="{{route('product.add')}}" class="btn btn-primary" data-effect="wave">
                      <i class="bx bx-plus bx-flashing"></i>
                      Add Product
                   </a>
                 </div><!-- end col-->
                 <div class="col-md-9">
                  <form class="mt-4 mt-md-0 float-md-right form-inline" action="{{route('product.index')}}">
                     <div class="search-box mr-2">
                        <div class="position-relative">
                          <input type="text" name="search" placeholder="Search..." class="form-control form-control-sm" value="{{$search}}">
                          <i class="bx bx-search icon"></i>
                        </div>
                      </div>
                  </form>
                 </div>
               </div>
            </div>

             <div class="card card-body">
                <table class="table table-hover table-centered dt-responsive nowrap w-100" id="ordered-table">
                   <thead class="thead-light">
                      <tr>
                         <th>
                            <div class="custom-control custom-checkbox">
                               <input type="checkbox" class="custom-control-input">
                               <label class="custom-control-label"></label>
                            </div>
                         </th>
                         <th>Product Name</th>
                         <th>Brand Name</th>
                         <th>Category_id</th>
                         <th>Colors</th>
                         <th>Currency</th>
                         <th>Price</th>
                         <th>Quantity</th>
                         <th>Image</th>
                         <th>Actions</th>
                      </tr>
                   </thead>
                   <tbody>
                    @foreach ($products as $product)
                      <tr>
                         <td>
                            <div class="custom-control custom-checkbox">
                               <input type="checkbox" class="custom-control-input">
                               <label class="custom-control-label"></label>
                            </div>
                         </td>
                         <td>{{$product->product_name}}</td>
                         <td>{{$product->brand_name}}</td>
                         <td>@foreach ($product->categories as $category) {{$category->name .',' }} @endforeach</td>
                         <td>{{$product->colors}}</td>
                         <td>{{$product->currency}}</td> 
                         <td>{{$product->price}}</td>
                         <td>{{$product->quantity}}</td>
                         <td><img src ="{{asset('image/'.$product->image)}}" width="50"/></td>
                         
                         <td>
                            <div class="dropdown">
                               <a href="#" class="btn-icon btn-icon-sm btn-icon-soft-primary dropdown-toggle"
                                  data-toggle="dropdown" aria-expanded="false">
                                  <i class="mdi mdi-dots-horizontal fs-sm"></i>
                               </a>
                               <ul class="dropdown-menu dropdown-menu-right">
                                  <li><a href="{{route('product.edit',$product->id)}}" class="dropdown-item" data-effect="wave-dark"><i
                                           class="mdi mdi-pencil text-success mr-1"></i>Edit</a></li>
                                   <li>
                                     <form action="{{ route('product.destroy', $product->id) }}" method="post" class="delete_form">
                                      @csrf
                                      @method('DELETE')
                                  <button type="submit" class="dropdown-item" data-effect="wave-dark"><i
                                           class="mdi mdi-close text-danger mr-1"></i>Delete</button>
                                  </form>
                                  </li>
                               </ul>
                            </div>
                         </td>
                      </tr>
                      @endforeach
                   </tbody>
                </table>
               <!-- pagination -->
               <div class="row">
                  <div class="col-lg-12">
                    <ul class="pagination flat-rounded-pagination justify-content-center mt-4 mb-5">
                      <li class= "@if($products->currentPage() >1) {{'page-link'}} @else {{'page-item disabled'}} @endif" >
                        <a href="{{$products->previousPageUrl()}}" class="page-link" data-effect="wave"><i class="mdi mdi-chevron-left"></i></a>
                      </li>
                      
                      @for($i = 1;$i<=$products->lastPage();$i++)
                      <li class= "@if($products->currentPage() == $i) {{'page-item active'}} @else {{'page-item '}} @endif" >
                      <a href="{{$products->Url($i)}}" class="page-link" data-effect="wave">{{$i}}</a>
                    </li>
                    @endfor
                    <li class="@if($products->currentPage()<$products->lastPage()) {{'page-item'}} @else {{'page-item disabled'}} @endif ">
                      <a href="{{$products->nextPageUrl()}}" class="page-link" data-effect="wave"><i class="mdi mdi-chevron-right"></i></a>
                    </li>
                    </ul>
                  </div>
                </div>
                <!-- pagination End -->
             </div>
          </div>
       </div>
    </div>
 </div>
 <!-- main content End -->
 @end