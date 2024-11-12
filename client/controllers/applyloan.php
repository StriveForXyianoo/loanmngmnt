<?php
require '../../controllers/connections.php';

header('Content-Type: application/json');  // Set header to return JSON response


    $response = [];
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

    //check the status of the client
    $sql = "SELECT * FROM clientinformation WHERE CLIENTID = '$clientID'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    if($row['REGISTRATIONSTATUS'] == 'PENDING'){
        $response = [
            'status' => 'error',
            'message' => 'Your account is still pending for approval.'
        ];
        echo json_encode($response);
        exit;
    }

    // Check if the client has a beneficiary
    $bsql = "SELECT * FROM clientbeneficiary WHERE CLIENTID='$clientID'";
    $bresult = mysqli_query($conn, $bsql);
    if (mysqli_num_rows($bresult) <= 0) {
        $response = [
            'status' => 'error',
            'message' => 'Please add a beneficiary first.'
        ];
        echo json_encode($response);
        exit;
    }

    // Check if there's a pending or ongoing loan
    $sql = "SELECT * FROM clientloan WHERE CLIENTID = '$clientID' AND (STATUS = 'PENDING' OR STATUS = 'ONGOING')";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        $response = [
            'status' => 'error',
            'message' => 'You have a pending or ongoing loan.'
        ];
        echo json_encode($response);
        exit;
    }

    // Insert loan application
    $sql = "INSERT INTO `clientloan`(`CLIENTID`, `LOANID`, `LOANAMOUNT`, `TERM`, `INTEREST`, `CBU`, `FILLING`, `INSURANCE`, `NETPRO`, `LOANDATE`, `STATUS`) 
            VALUES ('$clientID','$loanID','$amount','$term','$interest','$cbu','$filling','$insurance','$netpro',NOW(),'PENDING')";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        $response = [
            'status' => 'success',
            'message' => 'Loan application submitted successfully.'
        ];
    } else {
        $response = [
            'status' => 'error',
            'message' => 'Loan application failed. Please try again.'
        ];
    }

    echo json_encode($response);  // Return JSON response
    exit;
?>
