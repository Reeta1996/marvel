<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from lettstartdesign.com/marvel/app/auth-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 06 Feb 2023 07:17:53 GMT -->
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
    <!-- ================== END APP CSS ================== -->
 
    <!-- ================== BEGIN POLYFILLS  ================== -->
 </head>

<body>
  <div class="backhome">
    <a href="index.html" class="avatar avatar-sm bg-primary text-white"><i class="bx bx-home-alt fs-sm"></i></a>
  </div>
  <!-- Begin Page -->
  <div class="auth-pages">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-xl-11">
          <div class="row justify-content-center">
            <div class="col-md-6 pr-md-0">
              <div class="auth-page-sidebar">
                <div class="overlay"></div>
                <div class="auth-user-testimonial">
                  <div class="owl-carousel">
                    <div class="item">
                      <h3 class="text-white mb-1">I love this theme!</h3>
                      <h5 class="text-white mb-3">"Admin templete. I love it very much!"</h5>
                      <p>- Admin User</p>
                    </div>
                    <div class="item">
                      <h3 class="text-white mb-1">I love this theme!</h3>
                      <h5 class="text-white mb-3">"Admin templete. I love it very much!"</h5>
                      <p>- Admin User</p>
                    </div>
                    <div class="item">
                      <h3 class="text-white mb-1">I love this theme!</h3>
                      <h5 class="text-white mb-3">"Admin templete. I love it very much!"</h5>
                      <p>- Admin User</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 pl-md-0">
              <div class="card mb-0 p-2 p-md-3">
                <div class="card-body">
                  <div class="clearfix">
                    <img src="{{asset('assets/images/logo.png')}}" height="24" alt="Lettstart Admin">
                  </div>
                  <h5 class="mt-4 font-weight-600">Welcome back!</h5>
                  <p class="text-muted mb-4">Enter your email address and password to access admin panel.</p>
                  <form action="{{route('user.dologin')}}" id="loginForm" name="loginForm" method="post" novalidate>
                    @csrf
                    @method("post")
                    <div class="form-group floating-label">
                      <input type="email" class="form-control" name="email" id="email" />
                      <label for="email">Email Address</label>
                      <div class="validation-error d-none font-size-13">
                        <p>Email must be a valid email address</p>
                      </div>
                    </div>
                    <div class="form-group floating-label">
                      <input type="password" class="form-control" name="password" id="password" />
                      <label for="password">Password</label>
                      <div class="validation-error d-none font-size-13">
                        <p>This field is required</p>
                      </div>
                    </div>

                    <div class="form-group"> 
                      <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="checkbox-signin" checked>
                        <label class="custom-control-label" for="checkbox-signin">Remember me</label>
                      </div>
                    </div>

                    <div class="form-group text-center">
                      <button class="btn btn-primary btn-block" data-effect="wave" type="submit"> Log In
                      </button>
                    </div>
                    <div class="clearfix text-center">
                      <a href="#" class="text-primary">Forgot your password?</a>
                    </div>
                    <div class="py-3 text-center"><span class="font-size-16 font-weight-bold">OR</span></div>
                    <div class="row">
                      <div class="col-sm-6">
                        <button class="btn btn-danger btn-block brand-btn mb-3 mb-sm-0" data-effect="wave"
                          type="button">
                          <span class="brand-icon">
                            <i class="mdi mdi-google fs-xs align-middle"></i>
                          </span>
                          <span class="align-middle">Login With Google</span>
                        </button>
                      </div>
                      <div class="col-sm-6">
                        <button class="btn btn-primary btn-block brand-btn" data-effect="wave" type="button">
                          <span class="brand-icon">
                            <i class="mdi mdi-facebook fs-xs align-middle"></i>
                          </span>
                          <span class="align-middle">Login With Facebook</span>
                        </button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- end row -->
    </div>
    <!-- end container -->
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
  <script>
    $(".auth-user-testimonial .owl-carousel").owlCarousel({
      loop: true,
      margin: 0,
      nav: false,
      dots: false,
      autoplay: true,
      autoplayTimeout: 4000,
      responsive: {
        0: {
          items: 1
        },
        600: {
          items: 1
        },
        1000: {
          items: 1
        }
      }
    });
    //Initialize form
    $('#loginForm').validate({
      focusInvalid: false,
      rules: {
        'validation-email': {
          required: true,
          email: true
        },
        'validation-password': {
          required: true,
        }
      },
      errorPlacement: function errorPlacement(error, element) {
        $(element).siblings(".validation-error").removeClass("d-none")
        return true
      },
      highlight: function (element) {
        var $el = $(element);
        var $parent = $el.parents('.form-group');
        $parent.addClass("invalid-field")
      },
      unhighlight: function (element) {
        var $el = $(element);
        var $parent = $el.parents('.form-group');
        $parent.removeClass("invalid-field");
        $(element).siblings(".validation-error").addClass("d-none")
      },
      submitHandler: function (form) {
        var formdata = $(form).serializeArray();
        var data = {};
        $(formdata).each(function (index, obj) {
          data[obj.name] = obj.value;
        });
        alert("Data has been submitted. Please see console log");
        console.log("form data ===>", data);
        $(form)[0].reset();
        $(".floating-label").removeClass("enable-floating-label");
      }
    });
  </script>
</body>


<!-- Mirrored from lettstartdesign.com/marvel/app/auth-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 06 Feb 2023 07:17:53 GMT -->
</html>