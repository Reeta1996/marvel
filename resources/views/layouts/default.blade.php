<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="utf-8" />
   <meta http-equiv="X-UA-Compatible" content="IE=edge" />
   <meta name="author" content="MatrrDigital">
   <meta name="viewport" content="width=device-width, initial-scale=1" />
   <meta name="robots" content="noindex, nofollow">
   <title>Multipurpose Vertical Layout | Marvel - Responsive Admin Dashboard Template</title>
   <link rel="shortcut icon" href="{{asset('assets/images/favicon.png') }}" type="image/x-icon" />

   <!-- ================== BEGIN PAGE LEVEL CSS START ================== -->
   <link rel="stylesheet" href="{{ asset('assets/css/icons.css') }}" />
   <link rel="stylesheet" href="{{asset('assets/libs/wave-effect/css/waves.min.css')}}" />
   <link rel="stylesheet" href="{{asset('assets/libs/owl-carousel/css/owl.carousel.min.css')}}" />
   <!-- ================== BEGIN PAGE LEVEL END ================== -->
   <!-- ================== Plugins CSS  ================== -->
   <link rel="stylesheet" href="{{asset('assets/libs/flatpicker/css/flatpickr.min.css')}}">
   <!-- ================== Plugins CSS ================== -->
   <!-- ================== BEGIN APP CSS  ================== -->
   <link rel="stylesheet" href="{{asset('assets/css/bootstrap.css')}}" />
   <link rel="stylesheet" href="{{asset('assets/css/styles.css')}}" />
   <Link href="{{asset('assets/libs/sweetalert2/sweetalert2.min.css')}}" rel="stylesheet" />

   <!-- ================== END APP CSS ================== -->

   <!-- ================== BEGIN POLYFILLS  ================== -->
</head>

<body>
   <!-- Begin Page -->
   <div class="page-wrapper">

      <!-- Begin Header -->
         @include('include.header')
      <!-- Header End -->

      <!-- Begin Left Navigation -->
      @include('include.left-navigation')
      <!-- Left Navigation End -->

      <!-- Begin main content -->
         @yield('content')
      <!-- main content End -->

      <!-- footer -->
      @include('include.footer')

   </div>
   <!-- Page End -->
   <!-- ================== BEGIN BASE JS ================== -->
   <script src="{{asset('assets/js/vendor.min.js')}}"></script>
   <script src="../../../polyfill.io/v3/polyfill.min2174.js?features=default"></script>
   <!-- ================== END BASE JS ================== -->

   <!-- ================== BEGIN PAGE LEVEL JS ================== -->
   <script src="{{asset('assets/libs/flatpicker/js/flatpickr.js')}}"></script>
   <script src="{{asset('assets/libs/apexcharts/apexcharts.min.js')}}"></script>
   <script src="{{asset('assets/libs/chartjs/js/Chart.bundle.min.js')}}"></script>
   <script src="{{asset('assets/js/utils/colors.js')}}"></script>
   <script src="{{asset('assets/js/pages/dashboard.init.js')}}"></script>
   <!-- ================== END PAGE LEVEL JS ================== -->
   <!-- ================== BEGIN PAGE JS ================== -->
   <script src="{{asset('assets/js/app.js')}}"></script>
   <!-- ================== END PAGE JS ================== -->

    <script src="{{asset('assets/libs/sweetalert2/sweetalert2.min.js')}}"></script>

   <script>

          
$(document).ready(function(){
                //call befor your form submit
             $('.status_form'). on('submit',function(e){
                e.preventDefault();
                  Swal.fire({
                     title: "Are you sure?",
                     text: "You won't be able to revert this!",
                     type: "warning",
                     showCancelButton: true,
                     confirmButtonColor: "#3085d6",
                    cancelButtonColor: "#d33",
                     confirmButtonText: "Yes, change it!"
                       }).then((result) => {
                           if (result.value) {
                            this.submit();  
                 }
             });
         })
      })             
      </script>

     <script>

             $(document).ready(function(){
                //call befor your form submit
             $('.delete_form'). on('submit',function(e){
                e.preventDefault();
                  Swal.fire({
                     title: "Are you sure?",
                     text: "You won't be able to revert this!",
                     type: "warning",
                     showCancelButton: true,
                     confirmButtonColor: "#3085d6",
                    cancelButtonColor: "#d33",
                     confirmButtonText: "Yes, delete it!"
                       }).then((result) => {
                           if (result.value) {
                            this.submit();  
                 }
             });
         })
      })                                                                                      

</script>
</body>
<!-- Mirrored from lettstartdesign.com/marvel/app/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 06 Feb 2023 07:16:23 GMT -->
</html>