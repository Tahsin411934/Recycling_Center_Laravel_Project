<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  
  <title>Recycling Center</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link rel="stylesheet" href="{{ asset('assets/vendor/aos/aos.css')}}">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top shadow-sm p-3 mb-5 bg-white rounded">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center">
        <img src="img/img-9.png" class="rounded mx-auto d-block p-2" alt="">  
        <span>Recycling Center</span>
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="user">Request To Collect</a></li>
          <li><a class="nav-link scrollto" href="adminDashboard">Recycling Product</a></li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
          
          <!-- <li><a class="nav-link scrollto" href="#portfolio"></a></li>
          <li><a class="nav-link scrollto" href="#team"></a></li> -->
          <li class="dropdown"><a class="getstarted scrollto" href="#"><span>Log In</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="{{ route('login') }}">Log In as User</a></li>
              <li><a href="loginAsAdmin">Log In as Admin</a></li>
             
            </ul>
          </li>
         
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero ">
 <!-- Scripts -->
 @vite(['resources/css/app.css', 'resources/js/app.js'])
<div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">
            <div class="w-full sm:max-w-md  px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
                {{ $slot }}
            </div>
        </div>

  </section><!-- End Hero -->




    

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>



</body>

</html>