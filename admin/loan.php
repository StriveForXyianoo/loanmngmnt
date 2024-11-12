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
            <h1 class="m-0 text-dark">Loans  </h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Loans</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="card card-outline card-warning">
                <div class="card-header">
                    <h3 class="card-title">Loan Information</h3>
                </div>
                <div class="card-body">
                    <table class="table table-hover table-bordered table-stripped" id="example1">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Department</th>
                                <th>Position</th>
                                <th>Loan Type</th>
                                <th>Amount</th>
                                <th>Loan Status</th>
                                <?php
                                if($_SESSION['role'] == 'ADMIN'){
                                  ?>
                                  <th>Action</th>
                                  <?php
                                }
                                ?>
                            </tr>
                        </thead>
                        <?php
                        $sql = "SELECT clientinformation.*,clientloan.*,clientloan.ID as LOID,loantype.* FROM clientinformation INNER JOIN clientloan ON clientinformation.ID = clientloan.CLIENTID INNER JOIN loantype ON clientloan.LOANID = loantype.ID";
                        $result = $conn->query($sql);
                        foreach($result as $row){
                          if($row['MIDDLENAME']==''){
                            $name = $row['FIRSTNAME'].' '.$row['LASTNAME'];
                          }else{
                            $name = $row['FIRSTNAME'].' '.$row['MIDDLENAME'].' '.$row['LASTNAME'];
                          }
                          ?>
                          <tr>
                            <td><?php echo $name?></td>
                            <td><?php echo $row['DEPARTMENT']?></td>
                            <td><?php echo $row['POSITION']?></td>
                            <td><?php echo $row['LOANTYPE']?></td>
                            <td><?php echo $row['LOANAMOUNT']?></td>
                            <td><?php echo $row['STATUS']?></td>
                            <?php
                            if($_SESSION['role'] == 'ADMIN'){
                              ?>
                              <td>
                                <a href="loan_delete.php?id=<?php echo $row['LOID']?>" class="btn btn-danger btn-sm">Update</a>
                              </td>
                              <?php
                            }
                            ?>

                          </tr>

                          <?php
                        }
                        ?>
                    </table>
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