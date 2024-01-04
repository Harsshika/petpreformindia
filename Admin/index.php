<?php include('config.php');?>
<!DOCTYPE html>
<html lang="en">
  <head>
   <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Pet Preform India</title>
     <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
   <link rel="stylesheet" href="assets/css/style.css">
   <link rel="shortcut icon" href="assets/images/logo.png" />
  </head>
  <body>
    <div class="container-scroller">
      <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper d-flex align-items-center auth">
          <div class="row flex-grow">
            <div class="col-lg-4 mx-auto">
              <div class="auth-form-light text-center p-5">
                <div class="brand-logo">
                  <img src="assets/images/logo.png">
                </div>
              <h6 class="font-weight-light">Sign in to continue.</h6>
                <form class="pt-3" id="form_abc1" method="POST">
                  <div class="form-group">
                    <input type="email" name="email" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="Email" required>
                  </div>
                  <div class="form-group">
                    <input type="password" name="password" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Password" required>
                  </div>
                  <div class="submit">
                    <button class="btn btn-block btn-gradient-danger btn-lg font-weight-medium auth-form-btn" type="submit" name="submit">SIGN IN</button>
                  </div>
                  <div id="form_abc1_data"></div>
                 </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      </div>
   <script src="assets/vendors/js/vendor.bundle.base.js"></script>
   <script src="assets/js/off-canvas.js"></script>
    <script src="assets/js/hoverable-collapse.js"></script>
    <script src="assets/js/misc.js"></script>
</body>
</html>

<script>
	$(document).ready(function(abc1) {
		$("#form_abc1").on('submit', (function(abc1) {
			$("#form_abc1_data").html('');
			abc1.preventDefault();
			$.ajax({
				url: "php/login.php",
				type: "POST",
				data: new FormData(this),
				contentType: false,
				cache: false,
				processData: false,
				success: function(data) {
					//alert(data);
					$("#form_abc1_data").html(data);
				},
				error: function() {}
			});
		}));
	});
</script>