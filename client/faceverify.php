<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 3 | Log in</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="admin/includes/assets/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="admin/includes/assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="admin/includes/assets/dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <style>
   .camera{
    width: 100%;
    height: 100%;
   }

  </style>
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="admin/includes/assets/index2.html"><b>BCGEMPPC</b></a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Sign in to start your session</p>

      <form action="admin/includes/assets/index3.html" method="post">
       <div class="camera"></div>
        <div class="row">
          <div class="col-8">
           
          </div>
          <!-- /.col -->
          
          <!-- /.col -->
        </div>
      </form>

      <div class="social-auth-links text-center mb-3">
        <p>- OR -</p>
        <a href="index" class="btn btn-block btn-warning">
          <i class="fa fa-key mr-2"></i> Sign in using Email and Password
        </a>
        
      </div>
      <!-- /.social-auth-links -->

      
      <p class="mb-0">
        <a href="registration" class="text-center" >Register a new membership</a>
      </p>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="admin/includes/assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="admin/includes/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="admin/includes/assets/dist/js/adminlte.min.js"></script>
<script>
 // Wait for the DOM to load
document.addEventListener("DOMContentLoaded", function() {
    const cameraDiv = document.querySelector('.camera');  // Get the camera div

    // Check for camera availability
    if (navigator.mediaDevices && navigator.mediaDevices.getUserMedia) {
        // Try to access the camera
        navigator.mediaDevices.getUserMedia({ video: true })
            .then(function(stream) {
                // Create a video element to display the camera feed
                const video = document.createElement('video');
                video.srcObject = stream;
                video.autoplay = true;
                video.style.width = "100%"; // Set video width to 100% of the parent div
                video.style.height = "100%"; // Set video height to 100% of the parent div
                cameraDiv.appendChild(video); // Append the video element to the camera div
            })
            .catch(function(error) {
                // If there's an error accessing the camera
                alert("No camera support detected.");
                window.location.href = 'index.html';  // Redirect to index page
            });
    } else {
        // If the browser does not support camera access
        alert("No camera support detected.");
        window.location.href = 'index.html';  // Redirect to index page
    }
});

</script>
</body>
</html>
