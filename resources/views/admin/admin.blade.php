<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Mosaddek">
    <meta name="keyword" content="FlatLab, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <link rel="shortcut icon" href="{{asset('asset/admin/img/favicon.html')}}">

    <title>Ecommerce</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('asset/admin/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('asset/admin/css/bootstrap-reset.css')}}" rel="stylesheet">
    <!--external css-->
    <link href="{{asset('asset/admin/assets/font-awesome/css/font-awesome.css')}}" rel="stylesheet" />

    <!--right slidebar-->
    <link href="{{asset('asset/admin/css/slidebars.css')}}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{asset('css/toaster.css')}}" rel="stylesheet">
    <link href="{{asset('asset/admin/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('asset/admin/css/style-responsive.css')}}" rel="stylesheet" />

  </head>

  <body>

  <section id="container" class="">
      <!--header start-->
      @include('admin.dashboard.header')
      <!--header end-->
      <!--sidebar start-->
      @include('admin.dashboard.navbar')
      <!--sidebar end-->
      <!--main content start-->
        @yield('admin.content')
      <!--main content end-->


      <!--footer start-->
      <footer class="site-footer">
          <div class="text-center">
              2018 &copy; FlatLab by VectorLab.
              <a href="#" class="go-top">
                  <i class="fa fa-angle-up"></i>
              </a>
          </div>
      </footer>
      <!--footer end-->
  </section>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="{{asset('asset/admin/js/jquery.js')}}"></script>
    <script src="{{asset('asset/admin/js/bootstrap.bundle.min.js')}}"></script>
    <script class="include" type="text/javascript" src="{{asset('asset/admin/js/jquery.dcjqaccordion.2.7.js')}}"></script>
    <script src="{{asset('asset/admin/js/jquery.scrollTo.min.js')}}"></script>
    <script src="{{asset('js/toaster.js')}}"></script>
    <script src="{{asset('asset/admin/js/slidebars.min.js')}}"></script>
    <script src="{{asset('asset/admin/js/jquery.nicescroll.js')}}" type="text/javascript"></script>
    <script src="{{asset('asset/admin/js/respond.min.js')}}" ></script>

    <!--common script for all pages-->
    <script src="{{asset('asset/admin/js/common-scripts.js')}}"></script>

  <script>
      @if(Session::has('message'))
      var type = "{{ Session::get('alert-type', 'info') }}";
      switch(type){
          case 'info':
              toastr.info("{{ Session::get('message') }}");
              break;

          case 'warning':
              toastr.warning("{{ Session::get('message') }}");
              break;

          case 'success':
              toastr.success("{{ Session::get('message') }}");
              break;

          case 'error':
              toastr.error("{{ Session::get('message') }}");
              break;
      }
      @endif
  </script>


  </body>
</html>
