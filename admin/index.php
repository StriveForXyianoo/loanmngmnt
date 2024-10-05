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
            <h1 class="m-0 text-dark">DASHBOARD    </h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
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
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-info">
                <div class="inner">
                  <h3>150</h3>

                  <p>Pending Application</p>
                </div>
                <div class="icon">
                <i class="fa fa-hourglass-start" aria-hidden="true"></i>
               
                </div>
                
              </div>
          </div>
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>53<sup style="font-size: 20px">%</sup></h3>

                <p>Pending Loans</p>
              </div>
              <div class="icon">
              <i class="fa fa-credit-card" aria-hidden="true"></i>
              </div>
              
            </div>
          </div>

          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>44</h3>

                <p>User Registrations</p>
              </div>
              <div class="icon">
              <i class="fa fa-users" aria-hidden="true"></i>
              </div>
              
            </div>
          </div>

          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>65</h3>

                <p>Unvefied Users</p>
              </div>
              <div class="icon">
              <i class="fa fa-user-times" aria-hidden="true"></i>
              </div>
              
            </div>
            
          </div>

      </div>
      <div class="row">
        <div class="col-lg-7 col-sm-12">
              <div class="card">
                    <div class="card-header">
                      <h3 class="card-title">
                        <i class="fas fa-chart-pie mr-1"></i>
                          Loan Amount Disbursed
                      </h3>
                      
                    </div><!-- /.card-header -->
                    <div class="card-body">
                      <div class="tab-content p-0">
                        <!-- Morris chart - Sales -->
                        <div class="chart tab-pane active" id="revenue-chart"
                            style="position: relative; height: 300px;">
                            <canvas id="revenue-chart-canvas" height="300" style="height: 300px;"></canvas>                         
                        </div>
                        
                      </div>
                    </div><!-- /.card-body -->
                  </div>
              </div>
              <div class="col-lg-5 col-sm-12">
              <div class="card">
                    <div class="card-header">
                      <h3 class="card-title text-center">
                        <i class="fas fa-chart-pie mr-1"></i>
                          Loan Type Avail
                      </h3>
                    </div><!-- /.card-header -->
                    <div class="card-body">
                      <div class="tab-content p-0">
                        <!-- Morris chart - Sales -->
                        <div class="chart tab-pane active" id="revenue-chart"
                            style="position: relative; height: 300px;">
                            <canvas id="revenue-chart-canvas" height="300" style="height: 300px;"></canvas>                         
                        </div>
                        
                      </div>
                    </div><!-- /.card-body -->
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