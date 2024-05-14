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
            <h3 class="mb-1 font-weight-bold">
              <i class="mdi mdi-menu mr-1 d-lg-none" data-toggle="sidebar"></i>
              Products
            </h3>
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
              <li class="breadcrumb-item active">Products</li>
            </ol>
          </div>
        </div>
      </div>
      <!-- page content -->
      <div class="page-content-wrapper mt--45">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-3">
              <div class="card" data-sidebar="mobile">
                <div class="card-header">
                  <h5 class="card-title">Filter</h5>
                </div>
                <div class="card-body">
                  <div class="clearfix">
                    <h5 class="font-size-14 mb-3 font-weight-600 text-uppercase">Categories</h5>
                    <div class="accordion" id="accordionExample">
                      <div class="product-filter-list mb-1">
                        
                        <ul id="c1" class="collapse mt-2 list-unstyled pl-4 show" aria-labelledby="c1"
                          data-parent="#accordionExample">
                         @foreach ( $categories as  $category )
                          <li>
                            <a href="{{route('dashboard.index','category_id='.$category->id)}}"
                               class="@if($category->id==$category_id) {{' text-default active'}} @else {{' text-default'}} @endif">{{$category->name}}</a>
                          </li>
                         
                          @endforeach
                        </ul>
                      </div>
                    </div>
                  </div>
                  <hr class="my-4" />
                  <div class="clearfix">
                    <h5 class="font-size-14 mb-3 font-weight-600 text-uppercase">Price</h5>
                    <input type="text" id="pricerange">
                  </div>
                  <hr class="my-4" />
                  <div class="clearfix">
                    <h5 class="font-size-14 mb-3 font-weight-600 text-uppercase">Discount</h5>
                    <div class="custom-control custom-checkbox mt-2">
                      <input type="checkbox" class="custom-control-input" id="productdiscountCheck1">
                      <label class="custom-control-label" for="productdiscountCheck1">10% or Above</label>
                    </div>
                    <div class="custom-control custom-checkbox mt-2">
                      <input type="checkbox" class="custom-control-input" id="productdiscountCheck2">
                      <label class="custom-control-label" for="productdiscountCheck2">20% or Above</label>
                    </div>
                    <div class="custom-control custom-checkbox mt-2">
                      <input type="checkbox" class="custom-control-input" id="productdiscountCheck3">
                      <label class="custom-control-label" for="productdiscountCheck3">30% or Above</label>
                    </div>
                    <div class="custom-control custom-checkbox mt-2">
                      <input type="checkbox" class="custom-control-input" id="productdiscountCheck4">
                      <label class="custom-control-label" for="productdiscountCheck4">40% or Above</label>
                    </div>
                    <div class="custom-control custom-checkbox mt-2">
                      <input type="checkbox" class="custom-control-input" id="productdiscountCheck5">
                      <label class="custom-control-label" for="productdiscountCheck5">50% or Above</label>
                    </div>
                    <div class="custom-control custom-checkbox mt-2">
                      <input type="checkbox" class="custom-control-input" id="productdiscountCheck6">
                      <label class="custom-control-label" for="productdiscountCheck6">60% or Above</label>
                    </div>
                    <div class="custom-control custom-checkbox mt-2">
                      <input type="checkbox" class="custom-control-input" id="productdiscountCheck7">
                      <label class="custom-control-label" for="productdiscountCheck7">70% or Above</label>
                    </div>
                    <div class="custom-control custom-checkbox mt-2">
                      <input type="checkbox" class="custom-control-input" id="productdiscountCheck8">
                      <label class="custom-control-label" for="productdiscountCheck8">80% or Above</label>
                    </div>
                  </div>
                  <hr class="my-4" />
                  <div class="clearfix">
                    <h5 class="font-size-14 mb-3 font-weight-600 text-uppercase">Customer Rating</h5>
                    <div>
                      <div class="custom-control custom-checkbox mt-2">
                        <input type="checkbox" class="custom-control-input" id="productratingCheck1">
                        <label class="custom-control-label" for="productratingCheck1">4 <i
                            class="bx bx-star text-warning"></i> & Above</label>
                      </div>
                      <div class="custom-control custom-checkbox mt-2">
                        <input type="checkbox" class="custom-control-input" id="productratingCheck2">
                        <label class="custom-control-label" for="productratingCheck2">3 <i
                            class="bx bx-star text-warning"></i> & Above</label>
                      </div>
                      <div class="custom-control custom-checkbox mt-2">
                        <input type="checkbox" class="custom-control-input" id="productratingCheck3">
                        <label class="custom-control-label" for="productratingCheck3">2 <i
                            class="bx bx-star text-warning"></i> & Above</label>
                      </div>
                      <div class="custom-control custom-checkbox mt-2">
                        <input type="checkbox" class="custom-control-input" id="productratingCheck4">
                        <label class="custom-control-label" for="productratingCheck4">1 <i
                            class="bx bx-star text-warning"></i></label>
                      </div>

                    </div>
                  </div>
                </div>
              </div>

            </div>
            <div class="col-lg-9">
              <div class="card card-body">
                <div class="row">
                  <div class="col-md-3">
                    <a href="{{route('product.add')}}" class="btn btn-primary" data-effect="wave">
                       <i class="bx bx-plus bx-flashing"></i>
                       Add Product
                    </a>
                  </div><!-- end col-->
                  <div class="col-md-9">
                    <form class="mt-4 mt-md-0 float-md-right form-inline">
                      <div class="form-group mx-sm-3">
                        <label for="status-select" class="mr-2">Sort By</label>
                        <select class="custom-select" id="status-select">
                          <option selected="">All</option>
                          <option value="1">Popular</option>
                          <option value="2">Price Low</option>
                          <option value="3">Price High</option>
                          <option value="4">Sold Out</option>
                        </select>
                      </div>
                      <div class="search-box mr-2">
                        <div class="position-relative">
                          <form>
                          <input type="text" name="search" value="{{$search}}" placeholder="Search..." class="form-control form-control-sm">
                          <i class="bx bx-search icon"></i>
                         </form>
                        </div>
                      </div>
                      <ul class="nav nav-pills product-view-nav">
                        <li class="nav-item">
                          <a class="nav-link active btn-icon btn-icon-sm rounded-circle" href="#"><i
                              class="bx bx-grid-alt"></i></a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link btn-icon btn-icon-sm rounded-circle" href="#"><i
                              class="bx bx-list-ul"></i></a>
                        </li>
                      </ul>
                    </form>
                  </div>
                </div> <!-- end row -->
              </div> <!-- end card-box -->
              <div class="card card-body">
                <div class="row">
                  @foreach ($products as $product)
                  <div class="col-xl-4 col-sm-6">
                    <div class="card product-item">
                      <div class="card-body position-relative">
                        <!--<a href="#" class="d-block"><img src="{{asset('assets/images/product/chair.jpg')}}" alt="Lettstart Admin"
                            class="img-fluid mx-auto d-block"></a>-->
                            <a href="{{route('dashboard.details',$product->id)}}" class="d-block"><img src="{{asset('image/'.$product->image )}}" alt="Lettstart Admin"
                              class="img-fluid mx-auto d-block"></a>
                        <button class="btn avatar avatar-xs wishlist-icon mr-0 waves-effect waves-light bg-danger text-white"
                          data-toggle="tooltip" title="Add to wishlist">
                          <i class="bx bx-heart fs-xs"></i>
                        </button>
                        <div class="item-description mt-3">
                          <div class="desc">
                            <h6 class="font-size-16 mb-1 text-truncate">
                              <a href="#" class="text-dark">{{ $product->product_name }}</a>
                            </h6>
                            <p class="text-muted mb-2 text-truncate">
                              {{ $product->desc }}
                            </p>
                            <h5 class="my-0 font-weight-bold">@if($product->currency=='usd')$ @else Rs @endif {{$product->price}}</h5>
                          </div>
                          <button class="btn avatar text-white mr-0 bg-success" data-effect="wave" data-icon="cart"
                            data-toggle="tooltip" title="Add to cart">
                            <i class="bx fs-sm bx-check"></i>
                          </button>
                        </div>
                      </div>
                    </div>
                  </div>
            @endforeach
                </div>
              </div>
              <!-- end row -->

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
          <!-- end row -->
        </div>
      </div>
    </div>
    <!-- main content End -->
  </div>
  @end