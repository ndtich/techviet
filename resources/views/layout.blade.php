<!doctype html>
<!--[if IE 9]> <html class="no-js ie9 fixed-layout" lang="en"> <![endif]-->
<!--[if gt IE 9]><!-->
<html class="no-js " lang="en">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <title>Thái An Ads</title>
    <meta content="" name="keywords" />
    <meta content="" name="description" />

    <meta name="viewport" content="width=device-width,initial-scale=1"/>
    <link href="{{ asset('css/index-detail.css') }}" media="all" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('css/index-total.css') }}" media="all" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/index-home.css') }}" media="all" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/index-section.css') }}" media="all" rel="stylesheet" type="text/css" />
    
    <link href="{{ asset('css/index-price.css') }}" media="all" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/index-cart.css') }}" media="all" rel="stylesheet" type="text/css" />
    
    <script src="{{ asset('js/head-f0efac1d6976fdf77355672935951571.js') }}" type="text/javascript"></script>
</head>

<body id="" class="" data-view="app" data-responsive="true" data-user-signed-in="false">

  <div class="page">
    <style type="text/css">
    #toTop{
    width: 60px;
    height: 60px;
    position:fixed;
    bottom: 20px;
    z-index:9999;
    right: 20px;
    background:#ccc url('images/totop.png') no-repeat;
    border-radius: 50%;
    cursor: pointer;
    display: block;
    }
    </style>
    <a id="toTop" href="#"></a> 
    @include ('modules/header_mobile')
    <div class="page__canvas">

      <div class="canvas">
        
        <!-- header -->
        @include ('modules/header')


        <div class="js-canvas__body canvas__body">

          @yield('content')



          @include ('modules/footer')

        </div>

        <div id="landscape-image-magnifier" class="magnifier">
          <div class="size-limiter">
          </div>
          <strong></strong>
          <div class="info">
            <div class="price">
              <span class="cost"></span>
            </div>
          </div>
        </div>
      </div>

      <div class="page__overlay" data-view="offCanvasNavToggle" data-off-canvas="close">
      </div>
    </div>
  </div>



  <script src="{{ asset('js/index-5b55597d4fe730f6e52cf7559e6f7806.js') }}" type="text/javascript"></script>
  <script src="{{ asset('js/index-f199c50a181cce65c1d71ba21ac88320.js') }}" type="text/javascript"></script>




  <script>
      $(function() {
          viewloader.execute(Views);
      });
  </script>




</body>

</html>