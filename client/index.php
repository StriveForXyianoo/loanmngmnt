<?php
include 'includes/header.php';
include 'includes/nav.php';
include 'includes/sidebar.php';
?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Loan Management    </h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Loan</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
         <div class="row">
          <div class="col-lg-4 col-sm-12 col-md-12">
            <div class="card card-outline card-primary">
              <div class="card-header">
                <h3 class="card-title text-center">Pending Loan</h3>
              </div>
              <div class="card-body">
                
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-sm-12 col-md-12">
            <div class="card card-outline card-warning">
              <div class="card-header">
                <h3 class="card-title text-center">Approved Loan</h3>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-sm-12 col-md-12">
            <div class="card card-outline card-success">
              <div class="card-header">
                <h3 class="card-title text-center">Done/Decline Loan</h3>
              </div>
            </div>
          </div>
         </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
 
  
<?php
include 'includes/script.php';
?>

<?php
include 'includes/footer.php';
?>