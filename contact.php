<?php
require_once "./admin/include/connection.php";
?>
<!doctype html>
<html lang="en">
  <head>
  	<title>Contact Form 01</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="css/style.css">

	</head>
	<body>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Contact Me</h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-lg-10 col-md-12">
					<div class="wrapper">
						<div class="row no-gutters">
							<div class="col-md-7 d-flex align-items-stretch">
								<div class="contact-wrap w-100 p-md-5 p-4">
									<h3 class="mb-4">Get in touch</h3>
									
				      		<div id="form-message-success" class="mb-4">
				            Your message was sent, thank you!
				      		</div>
							  <form id="contactForm" name="contactForm">
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <input type="text" class="form-control" name="name" id="name" placeholder="Name">
            </div>
        </div>
        <div class="col-md-6"> 
            <div class="form-group">
                <input type="email" class="form-control" name="email" id="email" placeholder="Email">
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject">
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <textarea name="message" class="form-control" id="message" cols="30" rows="7" placeholder="Message"></textarea>
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <input type="submit" value="Send Message" class="btn btn-primary">
				<a href="index.php" class="btn btn-primary">Kembali</a>

                <div class="submitting"></div>
				
				
            </div>
        </div>
    </div>
</form>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        var contactForm = document.getElementById("contactForm");

        contactForm.addEventListener("submit", function (event) {
            // Menghentikan perilaku default dari pengiriman formulir
            event.preventDefault();

            // Validasi formulir sebelum pengiriman
            var nameInput = document.getElementById("name");
            var emailInput = document.getElementById("email");
            var subjectInput = document.getElementById("subject");
            var messageInput = document.getElementById("message");

            // Periksa apakah setiap input telah diisi
            if (nameInput.value === "" || emailInput.value === "" || subjectInput.value === "" || messageInput.value === "") {
                alert("Please fill out all fields before submitting the form.");
                return; // Hentikan pengiriman formulir jika ada input yang kosong
            }

            // Jika semua input telah diisi, lanjutkan dengan pengiriman formulir
            // Tambahkan logika pengiriman formulir di sini (misalnya AJAX request)

            // Tampilkan pesan berhasil
            alert("Message sent successfully!");
        });
    });
</script>



								</div>
							</div>
							<?php 
                $get_details = "SELECT * FROM contact_us ORDER BY id DESC LIMIT 1";
                $get_details_result = mysqli_query($conn , $get_details);

                if($get_details_result){
                  while ($rows = mysqli_fetch_assoc($get_details_result) ){

                    $address = ucwords($rows["address"]);
                    $phn = $rows["phn"];
                    $email = ucfirst($rows["email"]);
                    $fax = $rows["fax"];
                    ?>
							<div class="col-md-5 d-flex align-items-stretch">
								<div class="info-wrap bg-primary w-100 p-lg-5 p-4">
									<h3 class="mb-4 mt-md-4">Contact us</h3>
				        	<div class="dbox w-100 d-flex align-items-start">
				        		<div class="icon d-flex align-items-center justify-content-center">
				        			<span class="fa fa-map-marker"></span>
				        		</div>
				        		<div class="text pl-3">
<p><span>Address:</span> <span style="font-weight: normal;"><?php echo $address; ?></span></p>

					          </div>
				          </div>
				        	<div class="dbox w-100 d-flex align-items-center">
				        		<div class="icon d-flex align-items-center justify-content-center">
				        			<span class="fa fa-phone"></span>
				        		</div>
				        		<div class="text pl-3">
					            <p><span>Phone:</span> <a href="tel:<?php echo $phn ?>"> <?php echo $phn; ?> </a></p>
					          </div>
				          </div>
				        	<div class="dbox w-100 d-flex align-items-center">
				        		<div class="icon d-flex align-items-center justify-content-center">
				        			<span class="fa fa-paper-plane"></span>
				        		</div>
				        		<div class="text pl-3">
					            <p><span>Email:</span> <a href = "mailto:<?php echo $email; ?>"> <?php echo $email; ?> </a></p>
					          </div>
				          </div>
				        	<div class="dbox w-100 d-flex align-items-center">
				        		<div class="icon d-flex align-items-center justify-content-center">
				        			<span class="fa fa-globe"></span>
				        		</div>
				        		<div class="text pl-3">
					            <p><span>Website</span> <a href="#">yoursite.com</a></p>
					          </div>
				          </div>
						  <?php
				  }
				}
				?>
			          </div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.validate.min.js"></script>
  <script src="js/main.js"></script>

	</body>
</html>

