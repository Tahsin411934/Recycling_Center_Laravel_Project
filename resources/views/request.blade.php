<x-app-layout>
<x-auth-session-status class="mb-4" :status="session('status')" />
<link href="assets/css/layout.css" rel="stylesheet">
<div class="container" style="background-color: #fff;">
<div class="d-flex justify-content-center">
<div class="card ">
            <div class="card-header"><h5>Send Request To Collect</h5></div>
            <div class="card-body">
                 
                <form action="{{ url('student') }}" method="post">
                  {!! csrf_field() !!}
                  <input type="text" name="name" id="name" class="form-control" placeholder="Name" > <br>
                  <input type="text" name="email" id="email" class="form-control" placeholder="Email"></br>
          
                  
                  <input type="text" name="House_Number" id="House_Number" class="form-control"placeholder="House/Building Number"></br>
          
                  
                  <input type="text" name="Area_Name" id="Area_Name" class="form-control"placeholder="Road/Area Name"></br>
          
                  
                  <input type="text" name="Road_No" id="Road_No" class="form-control"placeholder="Road No"></br>
          
                  
                  <input type="text" name="City" id="City" class="form-control"placeholder="City/District"></br>
          
                  
                  <input type="text" name="Postal_Code" id="Postal_Code" class="form-control"placeholder="Postal Code"></br>
          
               
                  <input type="text" name="mobile" id="mobile" class="form-control"placeholder="Mobile"></br>
                  <script>
</script>
                  <button type="submit" value="Request" class="btn btn-success">Request</br></button>
              </form>
              
            </div>
          </div>
  <div class="h-100"><img src="img/bg.jpg" alt=""></div>
</div>
   
                     
  

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</x-app-layout>
  