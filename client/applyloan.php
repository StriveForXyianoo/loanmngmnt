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
            <h1 class="m-0 text-dark">Apply Loan    </h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Apply Loan</li>
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
              <div class="col-lg-2"></div>
              <div class="col-lg-8">
                <div class="card card-warning">
                  <div class="card-header">
                    <h3 class="card-title text-center">Apply Loan</h3>
                  </div>
                  <div class="card-body">
                    <form action="faceverify" method="post">

                      <div class="form-group mb-2">
                        <label for="loan">Loan Type</label>
                        <select name="loan" id="loan" class="form-control">
                          <option value="">Select Loan Type</option>
                          <option value="1">Salary Loan</option>
                          <option value="2">Emergency Loan</option>
                          <option value="3">Calamity Loan</option>
                        </select>
                      </div>
                      <div class="form-group mb-2">
                        <label for="loan">Loan Name</label>
                        <select name="loan" id="loan" class="form-control">
                          <option value="">Select Loan Type</option>
                          <option value="1">Salary Loan</option>
                          <option value="2">Emergency Loan</option>
                          <option value="3">Calamity Loan</option>
                        </select>
                      </div>
                      <div class="form-group mb-2">
                        <label for="amount">Amount</label>
                        <input type="text" name="amount" id="amount" class="form-control" placeholder="Enter Amount">
                      </div>

                      <div class="form-group mb-2">
                        <button class="btn btn-success btn-sm">Submit Application</button>
                      </div>


                     </form>
                  </div>
                </div>
              </div>
              <div class="col-lg-2"></div>
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