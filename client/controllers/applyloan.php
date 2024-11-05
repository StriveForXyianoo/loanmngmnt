<?php
require '../../controllers/connections.php';
if(isset($_POST["applyloan"])){
    $clientID = $_POST["clientID"];
    $loanID = $_POST["loanID"];
    $amount = $_POST["amount"];
    $term = $_POST["term"];
    $interest = $_POST["interest"];
    $service = $_POST["service"];
    $cbu = $_POST["cbu"];
    $filling = $_POST["filling"];
    $insurance = $_POST["insurance"];
    $netpro = $_POST["netpro"];

    //check if there a pending loan and ongoing loan
    $sql = "SELECT * FROM clientloan WHERE CLIENTID = '$clientID' AND STATUS = 'PENDING' OR STATUS = 'ONGOING'";
    $result = mysqli_query($conn, $sql);
    if(mysqli_num_rows($result) > 0){
        echo "<script>alert('You have a pending or ongoing loan')</script>";
        echo "<script>window.location.href='../'</script>";
        exit();
    }

    $sql = "INSERT INTO `clientloan`(`CLIENTID`, `LOANID`, `LOANAMOUNT`, `TERM`, `INTEREST`, `CBU`, `FILLING`, `INSURANCE`, `NETPRO`, `LOANDATE`, `STATUS`) VALUES ('$clientID','$loanID','$amount','$term','$interest','$cbu','$filling','$insurance','$netpro',NOW(),'PENDING')";
    $result = mysqli_query($conn, $sql);
    if($result){
        echo "<script>alert('Loan Application Submitted')</script>";
        echo "<script>window.location.href='../'</script>";
    }else{
        echo "<script>alert('Loan Application Failed')</script>";
        echo "<script>window.location.href='../'</script>";
    }

}
?>