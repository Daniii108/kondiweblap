<?php
session_start();
if(isset($_SESSION['views']))
$_SESSION['views']=$_SESSION['views']+1;
else
$_SESSION['views']=1;
?>
<html>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  </head>

  <body>
<?php
echo posix_getlogin();
?> 

<?php include_once('navigation.php') ?>


<img  width="100%" src="/exam/gym.jpg" alt="">
<?php include_once('navigation.php') ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
<!-- Footer -->
<footer class="text-center text-lg-start bg-light text-muted">
<!-- Right -->
<div>
  <a href="" class="me-4 text-reset">
    <i class="fab fa-facebook-f"></i>
  </a>
  <a href="" class="me-4 text-reset">
    <i class="fab fa-twitter"></i>
  </a>
  <a href="" class="me-4 text-reset">
    <i class="fab fa-google"></i>
  </a>
  <a href="" class="me-4 text-reset">
    <i class="fab fa-instagram"></i>
  </a>
  <a href="" class="me-4 text-reset">
    <i class="fab fa-linkedin"></i>
  </a>
  <a href="" class="me-4 text-reset">
    <i class="fab fa-github"></i>
  </a>
</div>
<!-- Right -->
</section>
<!-- Section: Social media -->

<!-- Section: Links  -->
<section class="">
<div class="container text-center text-md-start mt-5">
  <!-- Grid row -->
  <div class="row mt-3">
    <!-- Grid column -->
    <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
      <!-- Content -->
      <h6 class="text-uppercase fw-bold mb-4">
        <i class="fas fa-gem me-3"></i>GYM
      </h6>
      <p>
      A good gym is a facility that promotes physical activity, provides a safe, functional, and comfortable workout environment, and creates a pleasant and enjoyable atmosphere for recreation and socialization.
      </p>
    </div>
    <!-- Grid column -->

    <!-- Grid column -->
    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
      <!-- Links -->
      <h6 class="text-uppercase fw-bold mb-4">
        Courses
      </h6>
      <p>
        <a href="/exam/courses.php" class="text-reset">Spinning</a>
      </p>
      <p>
        <a href="/exam/courses.php" class="text-reset">Yoga</a>
      </p>
      <p>
        <a href="/exam/courses.php" class="text-reset">Boxing</a>
      </p>
      
    </div>
    <!-- Grid column -->

    <!-- Grid column -->
    <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
      <!-- Links -->
      <h6 class="text-uppercase fw-bold mb-4">
        Useful links
      </h6>
      <p>
        <a href="/exam/pricing.php" class="text-reset">Pricing</a>
      </p>
      <p>
        <a href="/exam/index.php" class="text-reset">Settings</a>
      </p>
      <p>
        <a href="/exam/index.php" class="text-reset">Help</a>
      </p>
    </div>
    <!-- Grid column -->

    <!-- Grid column -->
    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
      <!-- Links -->
      <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
      <p><i class="fas fa-home me-3"></i> New York, NY 10012, US</p>
      <p>
        <i class="fas fa-envelope me-3"></i>
        info@example.com
      </p>
      <p><i class="fas fa-phone me-3"></i> + 01 234 567 88</p>
    </div>
    <!-- Grid column -->
  </div>
  <!-- Grid row -->
</div>
</section>
<!-- Section: Links  -->

</footer>

</body>
</html>