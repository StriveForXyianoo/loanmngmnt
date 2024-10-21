<?php
include 'connections.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../vendor/autoload.php';
if(isset($_POST['register'])){
    $fname = mysqli_real_escape_string($conn, $_POST['fname']);
    $mname = mysqli_real_escape_string($conn, $_POST['mname']);
    $lname = mysqli_real_escape_string($conn, $_POST['lname']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);
    $gender = mysqli_real_escape_string($conn, $_POST['gender']);
    $bdate = mysqli_real_escape_string($conn, $_POST['bdate']);
    $civilstatus = mysqli_real_escape_string($conn, $_POST['civilstatus']);
    $position = mysqli_real_escape_string($conn, $_POST['position']);
    $department = mysqli_real_escape_string($conn, $_POST['department']);
    $salary = mysqli_real_escape_string($conn, $_POST['salary']);
    $address = mysqli_real_escape_string($conn, $_POST['address']);
    $years = mysqli_real_escape_string($conn, $_POST['years']);
    $documentphoto = $_FILES['documentphoto']['name'];
    $capture = $_FILES['capture']['name'];

    //location of file
    $target_doc = "../uploads/documents".basename($documentphoto);
    $target_cap = "../uploads/images".basename($capture);
    //check if email already exist
    $sql = "SELECT * FROM clientinformation WHERE EMAIL = '$email'";
    $result = mysqli_query($conn, $sql);
    if(mysqli_num_rows($result) > 0){
        echo "<script>alert('Email already exist!')</script>";
        echo "<script>window.location.href='index'</script>";
    }else{
       //generate 10 random characters
        $docname = substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, 10);
        $capname = substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, 10);
        $cpp = $capname;
        $password = password_hash($capname, PASSWORD_DEFAULT);
        //extract the file extension
        $docext = pathinfo($documentphoto, PATHINFO_EXTENSION);
        $capext = pathinfo($capture, PATHINFO_EXTENSION);

        //create new file name
        $docname = $docname.".".$docext;
        $capname = $capname.".".$capext;


        // Define full paths for moving the files
        $target_doc = "../uploads/documents/".$docname;
        $target_cap = "../uploads/images/".$capname;

        // Move the files to the target directory with the new names
        


        if(move_uploaded_file($_FILES['documentphoto']['tmp_name'], $target_doc) && move_uploaded_file($_FILES['capture']['tmp_name'], $target_cap)){
            $sql = "INSERT INTO `clientinformation`(`ID`, `FIRSTNAME`, `MIDDLENAME`, `LASTNAME`, `GENDER`, `BIRTHDATE`, `CIVILSTATUS`, `CONTACTNO`, `POSITION`, `SALARY`, `ADDRESS`, `YEARS`, `DEPARTMENT`, `EMAIL`,`PASSWORD`) VALUES (NULL, '$fname', '$mname', '$lname', '$gender', '$bdate', '$civilstatus', '$phone', '$position', '$salary', '$address', '$years', '$department', '$email', '$password')";
            $result = mysqli_query($conn, $sql);
            if($result){
                //get the last ID inserted
                $last_id = mysqli_insert_id($conn);
                $sql2 = "INSERT INTO `clientimage`(`ID`, `CLIENT_ID`, `TYPE`, `FILEP`) VALUES (NULL, '$last_id', 'VALIDID', '$docname')";
                $result2 = mysqli_query($conn, $sql2);
                $sql3 = "INSERT INTO `clientimage`(`ID`, `CLIENT_ID`, `TYPE`, `FILEP`) VALUES (NULL, '$last_id', 'USERPIC', '$capname')";
                $result3 = mysqli_query($conn, $sql3);
                if($result2 && $result3){
                    echo "<script>alert('Successfully registered! For Verification You will recieve your password on you email')</script>";
                    $mail = new PHPMailer(true);
                    try {
                        //Server settings
                        $mail->isSMTP();                                            // Send using SMTP
                        $mail->Host       = 'smtp.gmail.com';                     // Set the SMTP server to send through
                        $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
                        $mail->Username   = 'bcgempcsystem@gmail.com';
                        $mail->Password   = 'sywwedtovebnweel';                               // SMTP password
                        $mail->SMTPSecure = 'tls';         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
                        $mail->Port       = 587;                                    // TCP port to connect to

                        $subject = "Important Message : BCGE MPC System";
                        $body = "Hello $fname $lname, <br> Your password is $cpp <br> Please keep it confidential";
                        //Recipients
                        $mail->setFrom('bcgempcsystem@gmail.com', 'BCGE MPC System');
                        $mail->addAddress($email);     // Add a recipient
                        //send
                        $mail->isHTML(true);
                        $mail->Subject = $subject;
                        $mail->Body    = $body;
                        $mail->send();

                    } catch (\Throwable $e) {
                        echo "<script>alert('Failed to send email')</script>";
                    }
                    echo "<script>window.location.href='index'</script>";
                }else{
                    echo "<script>alert('Failed to register')</script>";
                    echo "<script>window.location.href='index'</script>";
                }
            }else{
                echo "<script>alert('Failed to register')</script>";
                echo "<script>window.location.href='index'</script>";
            }
        }else{
            echo "<script>alert('Failed to upload file')</script>";
            echo "<script>window.location.href='index'</script>";
        }

        


    }
    
}
// // Replace with your actual API key and secret
// $api_key = '_8ogNvyuQz22RwkuCQ_OF2dlbcaf-EtI';
// $api_secret = 'GvalXGnbP_ynxkKIGYstPrh3U5DThX0L';
// $face_token1 = 'c2fc0ad7c8da3af5a34b9c70ff764da0';
// $face_token2 = 'ad248a809408b6320485ab4de13fe6a9';

// // Initialize cURL
// $ch = curl_init();

// // Set the URL
// curl_setopt($ch, CURLOPT_URL, "https://api-us.faceplusplus.com/facepp/v3/compare");

// // Set the HTTP method to POST
// curl_setopt($ch, CURLOPT_POST, true);

// // Prepare the POST fields
// $post_fields = [
//     'api_key' => $api_key,
//     'api_secret' => $api_secret,
//     'face_token1' => $face_token1,
//     'face_token2' => $face_token2,
// ];

// // Attach the POST fields
// curl_setopt($ch, CURLOPT_POSTFIELDS, $post_fields);

// // Set the option to return the response as a string instead of outputting it
// curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// // Execute the cURL request
// $response = curl_exec($ch);

// // Check for errors
// if ($response === false) {
//     echo 'cURL Error: ' . curl_error($ch);
// } else {
//     // Print the response
//     echo 'Response: ' . $response;
// }

// // Close the cURL session
// curl_close($ch);
