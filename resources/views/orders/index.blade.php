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
                <h3 class="mb-1 font-weight-bold">Orders</h3>
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
                   <li class="breadcrumb-item active">Orders</li>
                </ol>
             </div>
          </div>
       </div>
       <!-- page content -->
       <div class="page-content-wrapper mt--45">
          <div class="container-fluid">
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
                         <th>Order Number</th>
                         <th>Customer Name</th>
                         <th>Date</th>
                         <th>Amount</th>
                         <th>Payment Status</th>
                         <th>Payment Mode</th>
                         <th>Status</th>
                         <th>Actions</th>
                      </tr>
                   </thead>
                   <tbody>
                    @foreach ($orders as $order)
                      <tr>
                         <td>
                            <div class="custom-control custom-checkbox">
                               <input type="checkbox" class="custom-control-input">
                               <label class="custom-control-label"></label>
                            </div>
                         </td>
                         <td><b>#{{$order->order_name}}</b></td>
                         <td>{{$order->customer_name}}</td>
                         <td>{{$order->date}}</td>
                         <td> $ {{$order->amount}}</td>
                         <td>
                        @if($order->payment_status == 'cod')
                                 <span class="badge badge-info">COD</span>
                            @elseif($order->payment_status == 'refund')
                                 <span class="badge badge-light">refund</span>
                           @elseif($order->payment_status == 'paid')
                                 <span class="badge badge-success">paid</span>
                           @elseif($order->payment_status == 'payment failed')
                                 <span class="badge badge-danger">payment failed</span>
                                 @endif
                        
                            {{--<span class="badge badge-success">{{$order->payment_status}}</span>--}}
                         </td>
                         <td>
                           @if($order->payment_mode == 'VISA')
                                 <i class="bx bxl-visa fs-sm align-middle"></i>
                           @elseif($order->payment_mode == 'Master Card')
                               <i class="bx bxl-mastercard fs-xs align-middle"></i>
                         @elseif($order->payment_mode == 'Paypal')
                              <i class="bx bxl-paypal fs-xs align-middle"></i>
                        @else
                                 <i class="bx bxl-mastercard fs-xs align-middle align-middle"></i>
                               @endif

                           <span class="align-middle">{{$order->payment_mode}}</span>
                               
                         </td>
                         <td>

                           @if($order->status == 'shipped')
                               <span class="badge badge-info">shipped</span>   
                         @elseif($order->status == 'processing') 
                               <span class="badge badge-warning text-white">processing</span>
                        @elseif($order->status == 'returned') 
                              <span class="badge badge-light">returned</span>
                        @elseif($order->status == 'delivered')
                               <span class="badge badge-success">delivered</span>
                       @elseif($order->status == 'cancelled') 
                                  <span class="badge badge-danger">cancelled</span>
                               
                          @endif

                            {{--<span class="badge badge-info">{{$order->status}}</span>--}}
                         </td>
                         <td>
                            <div class="dropdown">
                               <a href="#" class="btn-icon btn-icon-sm btn-icon-soft-primary dropdown-toggle"
                                  data-toggle="dropdown" aria-expanded="false">
                                  <i class="mdi mdi-dots-horizontal fs-sm"></i>
                               </a>
                               <ul class="dropdown-menu dropdown-menu-right">
                                  <li> <a href="#" class="dropdown-item" data-effect="wave-dark"> <i
                                           class="mdi mdi-eye text-info mr-1"></i> View</a> </li>
                                  <li><a href="#" class="dropdown-item" data-effect="wave-dark"><i
                                           class="mdi mdi-pencil text-success mr-1"></i> Edit</a></li>
                                  <li><a href="#" class="dropdown-item" data-effect="wave-dark"><i
                                           class="mdi mdi-close text-danger mr-1"></i> Delete</a></li>
                               </ul>
                            </div>
                         </td>
                      </tr>
                      
                      @endforeach
                   </tbody>
                </table>
             </div>
          </div>
       </div>
    </div>
 </div>
 <!-- main content End -->
 @end