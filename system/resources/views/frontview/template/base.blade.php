<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <link rel="icon" href="{{ url('public/shop') }}/images/fevicon.png" type="image/gif" />
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>Minics</title>


  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="{{ url('public/shop') }}/css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet"> <!-- range slider -->

  <!-- font awesome style -->
  <link href="{{ url('public/shop') }}/css/font-awesome.min.css" rel="stylesheet" />

  <!-- Custom styles for this template -->
  <link href="{{ url('public/shop') }}/css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="{{ url('public/shop') }}/css/responsive.css" rel="stylesheet" />

</head>


<body class="sub_page">

   <!-- header section strats -->
    @include ('frontview.template.nav')
   <!-- end header section -->

  <!-- about section -->
  @yield ('content')
  <!-- end about section -->

  <!-- info section -->
   @include ('frontview.template.footer')
  <!-- end info_section -->

  <!-- footer section -->
  <footer class="footer_section">
    <div class="container">
      <p>
        &copy; <span id="displayYear"></span> All Rights Reserved By
        <a href="https://html.design/">Free Html Templates</a>
      </p>
    </div>
  </footer>
  <!-- footer section -->

  <!-- jQery -->
  <script src="{{ url('public/shop') }}/js/jquery-3.4.1.min.js"></script>
  <!-- bootstrap js -->
  <script src="{{ url('public/shop') }}/js/bootstrap.js"></script>
  <!-- custom js -->
  <script src="{{ url('public/shop') }}/js/custom.js"></script>


</body>

</html>