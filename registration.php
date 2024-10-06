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
    body {
      background-image: url('admin/includes/assets/dist/img/logo.jpg');
      background-repeat: no-repeat;
      background-attachment: fixed;
      background-size: cover;
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
      <p class="login-box-msg">Create an Account</p>

      <form action="admin/includes/assets/index3.html" method="post">
       
        <div class="form-group mb-3">
            <input type="text" class="form-control" name="fname" placeholder="First Name" required>
        </div>
        <div class="form-group mb-3">
            <input type="text" class="form-control" name="mname" placeholder="Middle Name" >
        </div>
        <div class="form-group mb-3">
            <input type="text" class="form-control" name="lname" placeholder="Last Name" required>
        </div>
        <div class="form-group mb-3">
            <input type="email" class="form-control" name="email" placeholder="Email" required>
        </div>
        <div class="form-group mb-3">
            <input type="text" class="form-control" name="phone" placeholder="Phone Number" required>
        </div>
        <div class="form-group mb-3">
            <select name="gender" id="gender" class="form-control">
                <option value="" selected disabled>Select your Gender</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
            </select>
        </div>
        <div class="form-group mb-3">
            <input type="date" name="bdate"  class="form-control" required>
        </div>
        <div class="form-group mb-3">
            <input type="text" class="form-control" name="phone" placeholder="Phone Number" required>
        </div>
        <div class="form-group mb-3">
            <select name="civilstatus" id="" class="form-control">
                <option value="" selected disabled>Select your Civil Status</option>
                <option value="Single">Single</option>
                <option value="Married">Married</option>
                <option value="Divorced">Divorced</option>
                <option value="Widowed">Widowed</option>
            </select>
        </div>


        
        <div class="row">
          <div class="col-8">
            
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-warning btn-block">Continue</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      
      <!-- /.social-auth-links -->

      
      <p class="mb-0 mt-2">
        <a href="index" class="text-center" >Already have Membership</a>
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
    //check if the machine has a camera
    function hasGetUserMedia() {
        return !!(navigator.mediaDevices &&
            navigator.mediaDevices.getUserMedia);
    }
    // if the machine has a camera then goto index if not then alert the user
    if (hasGetUserMedia()) {
        alert('Camera  is supported by your browser');
    } else {
        alert('getUserMedia() is not supported by your browser');
    }
</script>

</body>
</html>
