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
            <h3 class="mb-1 font-weight-bold">Product Details</h3>
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
              <li class="breadcrumb-item active">Product Detail</li>
            </ol>
          </div>
        </div>
      </div>
      <!-- page content -->
      <div class="page-content-wrapper mt--45">
        <div class="container-fluid">
          <div class="card card-body">
            <div class="row">
              <div class="col-xl-6">
                <div class="product-detail-imgs">
                  <div class="row">
                    <div class="col-md-2 col-sm-3 col-4">
                      <div class="nav flex-column nav-pills " id="v-pills-tab" role="tablist"
                        aria-orientation="vertical">
                        <a class="nav-link active" id="product-1-tab" data-toggle="pill" href="#product-1" role="tab"
                          aria-controls="product-1" aria-selected="true">
                          {{--<img src="{{asset('assets/images/product/headphone.png')}}" alt="Lettstart Admin"--}}
                          <img src="{{asset('image/'.$product->image )}}" alt="Lettstart Admin"
                            class="img-fluid mx-auto d-block rounded">
                        </a>
                        {{--<a class="nav-link" id="product-2-tab" data-toggle="pill" href="#product-2" role="tab"
                          aria-controls="product-2" aria-selected="false">
                          <img src="{{asset('assets/images/product/headphone2.png')}}" alt="Lettstart Admin"
                            class="img-fluid mx-auto d-block rounded">
                        </a>
                        <a class="nav-link" id="product-3-tab" data-toggle="pill" href="#product-3" role="tab"
                          aria-controls="product-3" aria-selected="false">
                          <img src="{{asset('assets/images/product/headphone.png')}}" alt="Lettstart Admin"
                            class="img-fluid mx-auto d-block rounded">
                        </a>
                        <a class="nav-link" id="product-4-tab" data-toggle="pill" href="#product-4" role="tab"
                          aria-controls="product-4" aria-selected="false">
                          <img src="{{asset('assets/images/product/headphone2.png')}}" alt="Lettstart Admin"
                            class="img-fluid mx-auto d-block rounded">
                        </a>--}}
                      </div>
                    </div>
                    <div class="col-md-9 col-sm-9 col-8">
                      <div class="tab-content p-4 border" id="v-pills-tabContent">
                        <div class="tab-pane fade show active" id="product-1" role="tabpanel"
                          aria-labelledby="product-1-tab">
                          <div>
                            <img src="{{asset('image/'.$product->image )}}" alt="Lettstart Admin" class="img-fluid mx-auto d-block">
                          </div>
                        </div>
                        {{--<div class="tab-pane fade" id="product-2" role="tabpanel" aria-labelledby="product-2-tab">
                          <div>
                            <img src="{{asset('assets/images/product/headphone2.png')}}" alt="Lettstart Admin" class="img-fluid mx-auto d-block">
                          </div>
                        </div>
                        <div class="tab-pane fade" id="product-3" role="tabpanel" aria-labelledby="product-3-tab">
                          <div>
                            <img src="{{asset('assets/images/product/headphone.png')}}" alt="Lettstart Admin" class="img-fluid mx-auto d-block">
                          </div>
                        </div>
                        <div class="tab-pane fade" id="product-4" role="tabpanel" aria-labelledby="product-4-tab">
                          <div>
                            <img src="{{asset('assets/images/product/headphone2.png')}}" alt="Lettstart Admin" class="img-fluid mx-auto d-block">
                          </div>
                        </div>--}}
                      </div>
                      <div class="d-flex flex-wrap mt-3">
                        <div class="flex-fill mt-2 mr-0 mr-sm-2">
                          <button type="button" class="btn btn-primary btn-block" data-effect="wave">
                            <i class="bx bx-cart mr-2"></i> Add to cart
                          </button>
                        </div>
                        <div class="flex-fill mt-2 mt-2">
                          <button type="button" class="btn btn-success btn-block waves-effectwaves-light">
                            <i class="bx bx-shopping-bag mr-2"></i>Buy now
                          </button>
                        </div>
                      </div>

                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-6">
                <div class="mt-4 mt-xl-3">
                  <a href="#" class="text-primary">@foreach ($product->categories as $category) {{$category->name .',' }} @endforeach</a>
                  <h4 class="mt-1 mb-3 font-weight-600">{{$product->product_name}}</h4>

                  <p class="text-muted float-left mr-3">
                    <span class="bx bx-star text-warning"></span>
                    <span class="bx bx-star text-warning"></span>
                    <span class="bx bx-star text-warning"></span>
                    <span class="bx bx-star text-warning"></span>
                    <span class="bx bx-star"></span>
                  </p>
                  <p class="text-muted mb-4">( 152 Customers Review )</p>
                  <div class="mb-4">
                    <h4>
                      <b class="mr-1">@if($product->currency=='usd')$ @else Rs @endif {{$product->price}}</b> {{--<span class="text-muted mr-1 h5"><del>$240</del></span>--}}
                      <span class="text-success font-size-14 text-uppercase font-weight-bold">20 % Off</span>
                    </h4>
                  </div>
                  <div class="product-color-options mb-4">
                    <h5 class="font-size-15 font-weight-600 mb-3">Colors :</h5>
                    <a href="#" class="active">
                      <img src="{{asset('image/'.$product->image )}}" alt="Lettstart Admin"
                        class="avatar-lg product-color-item rounded">
                      <p>{{$product->Colors}}</p>
                    </a>
                    {{--<a href="#">
                      <img src="{{asset('assets/images/product/headphone.png')}}" alt="Lettstart Admin"
                        class="avatar-lg product-color-item rounded">
                      <p>Blue</p>
                    </a>
                    <a href="#">
                      <img src="{{asset('assets/images/product/headphone.png')}}" alt="Lettstart Admin"
                        class="avatar-lg product-color-item rounded">
                      <p>Gray</p>
                    </a>--}}
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-7">
                    <h5 class="font-size-15 font-weight-600 mb-3">Hightlights :</h5>
                    <ul class="list-unstyled default-list">
                      <li><i class="bx bx-headphone font-size-16 align-middle text-primary mr-1"></i> With
                        Mic:Yes
                      </li>
                      <li><i class="bx bx-link font-size-16 align-middle text-primary mr-1"></i> Connector type:
                        3.5 mm
                      </li>
                      <li><i class="bx bxs-music font-size-16 align-middle text-primary mr-1"></i> Extra bass:
                        Add extra thump to your music
                      </li>
                      <li><i class="bx bx-phone font-size-16 align-middle text-primary mr-1"></i> One button
                        universal remote to answer and manage your calls
                      </li>
                      <li><i class="bx bx-wifi font-size-16 align-middle text-primary mr-1"></i> Wireless
                      </li>
                    </ul>
                  </div>
                  <div class="col-lg-5">
                    <h5 class="font-size-15 font-weight-600 mb-3">Services :</h5>
                    <ul class="list-unstyled default-list">
                      <li><i class="bx bx-shield-alt-2 font-size-16 align-middle text-primary mr-1"></i> 6
                        Months Warranty
                      </li>
                      <li><i class="bx bx-refresh font-size-16 align-middle text-primary mr-1"></i> 10 Days
                        Replacement Policy
                      </li>
                      <li><i class="bx bxs-note font-size-16 align-middle text-primary mr-1"></i> Cash on
                        Delivery available
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-6">
                <div class="accordian mt-3" id="accordionExample">
                  <h5 class="font-size-16 font-weight-600 pt-3 pb-2 mb-3 accordian-plus-minus-header border-bottom">
                    <a href="javascript:void(0)" class="text-default d-block" data-toggle="collapse"
                      data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                      Technical Details
                      <i class="bx bx-plus fs-sm plus float-right"></i>
                      <i class="bx bx-minus fs-sm minus float-right"></i>
                    </a>
                  </h5>
                  <div id="collapseOne" class="collapse show" aria-labelledby="collapseOne"
                    data-parent="#accordionExample">
                    <table class="table mb-0 table-bordered table-sm">
                      <tbody>
                        <tr>
                          <td class="bg-light">Category</td>
                          <td>@foreach ($product->categories as $category) {{$category->name .',' }} @endforeach</td>
                        </tr>
                        <tr>
                          <td class="bg-light">Brand</td>
                          <td>{{$product->brand_name}}</td>
                        </tr>
                        <tr>
                          <td class="bg-light">Color</td>
                          <td>{{$product->colors}}</td>
                        </tr>
                        <tr>
                          <td class="bg-light">Connectivity</td>
                          <td>Bluetooth</td>
                        </tr>
                        <tr>
                          <td class="bg-light">Warranty Summary</td>
                          <td>1 Year</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="accordian mt-3" id="accordionExample2">
                  <h5 class="font-size-16 font-weight-600 pt-3 pb-2 mb-3 accordian-plus-minus-header border-bottom">
                    <a href="javascript:void(0)" class="text-default d-block" data-toggle="collapse"
                      data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                      Additional Information
                      <i class="bx bx-plus fs-sm plus float-right"></i>
                      <i class="bx bx-minus fs-sm minus float-right"></i>
                    </a>
                  </h5>
                  <div id="collapseTwo" class="collapse show" aria-labelledby="collapseTwo"
                    data-parent="#accordionExample2">
                    <table class="table table-bordered table-sm">
                      <tbody>
                        <tr>
                          <td class="bg-light">ASIN</td>
                          <td>BD15414Q7</td>
                        </tr>
                        <tr>
                          <td class="bg-light">Bestsellers Rank</td>
                          <td>#578 in Electronics</td>
                        </tr>
                      </tbody>
                    </table>
                    <h5 class="font-size-16 font-weight-600 pt-3 pb-2 mb-3 border-bottom">
                      <a href="javascript:void(0)" class="text-default d-block">
                        Warranty & Support
                      </a>
                    </h5>
                    <p>Warranty Details: 1 year warranty on product</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="mt-4">
              <h5 class="font-size-15 font-weight-600 mb-3">Reviews :</h5>
              <div class="media py-3 border-bottom">
                <img src="{{asset('assets/images/users/avatar-2.jpg')}}" class="avatar-xs mr-3 rounded-circle" alt="img">
                <div class="media-body">
                  <h5 class="mt-0 mb-1 font-size-15">Brian</h5>
                  <p class="text-muted">If several languages coalesce, the grammar of the resulting language.
                  </p>
                  <ul class="list-inline float-sm-right mb-sm-0">
                    <li class="list-inline-item">
                      <a href="#"><i class="far fa-thumbs-up mr-1"></i> Like</a>
                    </li>
                    <li class="list-inline-item">
                      <a href="#"><i class="far fa-comment-dots mr-1"></i> Comment</a>
                    </li>
                  </ul>
                  <div class="text-muted font-size-12"><i class="far fa-calendar-alt text-primary mr-1"></i> 5
                    hrs ago</div>
                </div>
              </div>
              <div class="media py-3 border-bottom">
                <img src="{{asset('assets/images/users/avatar-4.jpg')}}" class="avatar-xs mr-3 rounded-circle" alt="img">
                <div class="media-body">
                  <h5 class="mt-0 font-size-15 mb-1">Denver</h5>
                  <p class="text-muted">To an English person, it will seem like simplified English, as a
                    skeptical Cambridge</p>
                  <ul class="list-inline float-sm-right mb-sm-0">
                    <li class="list-inline-item">
                      <a href="#"><i class="far fa-thumbs-up mr-1"></i> Like</a>
                    </li>
                    <li class="list-inline-item">
                      <a href="#"><i class="far fa-comment-dots mr-1"></i> Comment</a>
                    </li>
                  </ul>
                  <div class="text-muted font-size-12"><i class="far fa-calendar-alt text-primary mr-1"></i> 07
                    Oct, 2019</div>
                  <div class="media mt-4">
                    <img src="{{asset('assets/images/users/avatar-5.jpg')}}" class="avatar-xs mr-3 rounded-circle" alt="img">
                    <div class="media-body">
                      <h5 class="mt-0 mb-1 font-size-15">Henry</h5>
                      <p class="text-muted">Their separate existence is a myth. For science, music, sport, etc.
                      </p>
                      <ul class="list-inline float-sm-right mb-sm-0">
                        <li class="list-inline-item">
                          <a href="#"><i class="far fa-thumbs-up mr-1"></i> Like</a>
                        </li>
                        <li class="list-inline-item">
                          <a href="#"><i class="far fa-comment-dots mr-1"></i> Comment</a>
                        </li>
                      </ul>
                      <div class="text-muted font-size-12"><i class="far fa-calendar-alt text-primary mr-1"></i>
                        08 Oct, 2019</div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="media py-3 border-bottom">
                <div class="avatar-xs mr-3">
                  <span class="avatar-title bg-soft-primary text-primary rounded-circle font-size-16">
                    N
                  </span>
                </div>
                <div class="media-body">
                  <h5 class="mt-0 mb-1 font-size-15">Neal</h5>
                  <p class="text-muted">Everyone realizes why a new common language would be desirable.</p>
                  <ul class="list-inline float-sm-right mb-sm-0">
                    <li class="list-inline-item">
                      <a href="#"><i class="far fa-thumbs-up mr-1"></i> Like</a>
                    </li>
                    <li class="list-inline-item">
                      <a href="#"><i class="far fa-comment-dots mr-1"></i> Comment</a>
                    </li>
                  </ul>
                  <div class="text-muted font-size-12"><i class="far fa-calendar-alt text-primary mr-1"></i> 05
                    Oct, 2019</div>
                </div>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-body">
              <h5 class="mb-3 font-weight-600">Similiar Products: </h5>
              <div class="row">
                <div class="col-md-4">
                  <div class="card product-item">
                    <div class="card-body position-relative">
                      <a href="#" class="d-block"><img src="{{asset('assets/images/product/chair.jpg')}}" alt="Lettstart Admin"
                          class="img-fluid mx-auto d-block"></a>
                      <button class="btn avatar avatar-xs bg-light text-default wishlist-icon mr-0"
                        data-toggle="tooltip" data-effect="wave" title="Add to wishlist">
                        <i class="bx bx-heart fs-xs"></i>
                      </button>
                      <div class="item-description mt-3">
                        <div class="desc">
                          <h6 class="font-size-16 mb-1 text-truncate">
                            <a href="#" class="text-dark">Zara</a>
                          </h6>
                          <p class="text-muted mb-2 text-truncate">
                            Color Block Men Round Neck Half sleeve T-Shirt
                          </p>
                          <h5 class="my-0 font-weight-bold">$450</h5>
                        </div>
                        <button class="btn avatar bg-primary text-white mr-0" data-effect="wave" data-icon="cart" data-toggle="tooltip"
                          title="Add to cart">
                          <i class="bx bx-cart fs-sm"></i>
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="card product-item">
                    <div class="card-body position-relative">
                      <a href="#" class="d-block"><img src="{{asset('assets/images/product/chair2.jpg')}}" alt="Lettstart Admin"
                          class="img-fluid mx-auto d-block"></a>
                      <button class="btn avatar avatar-xs bg-light text-default wishlist-icon mr-0"
                        data-toggle="tooltip" data-effect="wave" title="Add to wishlist">
                        <i class="bx bx-heart fs-xs"></i>
                      </button>
                      <div class="item-description mt-3">
                        <div class="desc">
                          <h6 class="font-size-16 mb-1 text-truncate">
                            <a href="#" class="text-dark">Polo</a>
                          </h6>
                          <p class="text-muted mb-2 text-truncate">
                            Color Block Men Round Neck Full Sleeve T-Shirt
                          </p>
                          <h5 class="my-0 font-weight-bold">$600</h5>
                        </div>
                        <button class="btn avatar bg-primary text-white mr-0" data-effect="wave" data-icon="cart" data-toggle="tooltip"
                          title="Add to cart">
                          <i class="bx bx-cart fs-sm"></i>
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="card product-item">
                    <div class="card-body position-relative">
                      <a href="#" class="d-block"><img src="{{asset('assets/images/product/chair3.jpg')}}" alt="Lettstart Admin"
                          class="img-fluid mx-auto d-block"></a>
                      <button class="btn avatar avatar-xs bg-light text-default wishlist-icon mr-0"
                        data-toggle="tooltip" data-effect="wave" title="Add to wishlist">
                        <i class="bx bx-heart fs-xs"></i>
                      </button>
                      <div class="item-description mt-3">
                        <div class="desc">
                          <h6 class="font-size-16 mb-1 text-truncate">
                            <a href="#" class="text-dark">Nike</a>
                          </h6>
                          <p class="text-muted mb-2 text-truncate">
                            Nike ripped jeans
                          </p>
                          <h5 class="my-0 font-weight-bold"><del class="mr-1">$900</del> $700</h5>
                        </div>
                        <button class="btn avatar bg-primary text-white mr-0" data-effect="wave" data-icon="cart" data-toggle="tooltip"
                          title="Add to cart">
                          <i class="bx bx-cart fs-sm"></i>
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- end row -->
        </div>
      </div>
    </div>
    <!-- main content End -->
  </div>
  @end