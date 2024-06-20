<?php
require_once "./admin/include/connection.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://unpkg.com/bootstrap@5.3.3/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="https://unpkg.com/bs-brain@2.0.4/utilities/bsb-btn-size/bsb-btn-size.css">
<link rel="stylesheet" href="https://unpkg.com/bs-brain@2.0.4/utilities/margin/margin.css">
<link rel="stylesheet" href="https://unpkg.com/bs-brain@2.0.4/utilities/padding/padding.css">
<style>
    .center-text {
        text-align: center;
    }
</style>

</head>
<body>
    <!-- About 8 - Bootstrap Brain Component -->
<section class="py-3 py-md-5 py-xl-8">
  <div class="container">
    <div class="row justify-content-md-center">
      <div class="col-12 col-md-10 col-lg-8 col-xl-7 col-xxl-6">
        <h2 class="mb-4 display-5 text-center">Our Best Offers</h2>
        <?php      
$get_about_us = "SELECT * FROM about_us ORDER BY id DESC LIMIT 1";
$result_about_us = mysqli_query($conn , $get_about_us);
if($result_about_us){
    while( $about_us_rows = mysqli_fetch_assoc($result_about_us) ){
        echo "<div class='center-text'>" . $about_us_rows["about"] . "</div><br>";
    }
}
?>

        <hr class="w-50 mx-auto mb-5 mb-xl-9 border-dark-subtle">
      </div>
    </div>
  </div>

  <div class="container">
    <div class="row gy-4 gy-lg-0 align-items-lg-center">
      <div class="col-12 col-lg-6">
        
      </div>
      <div class="col-12 col-lg-6 col-xxl-6">
        <div class="row justify-content-lg-end justify-content-xxl-around">
          <div class="col-12 col-lg-11 col-xxl-10">
            

            

            <a href="index.php" class="btn btn-primary bsb-btn-2xl">
              Ke Halaman Home
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-arrow-right-short" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8" />
              </svg>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</body>
</html>