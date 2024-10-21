<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Part 1 | Registration</title>
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
 
</head>
<body>
    <div class="container-fluid mt-3 mb-2">
        <div class="card card-warning card-outline">
            <div class="card-header">
                <h3 class="card-title text-center">Create an Account</h3>

            </div>
            <form action="controllers/register.php" method="post"enctype="multipart/form-data">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-4 col-md-12 col-sm-12">
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
                                <select name="civilstatus" id="" class="form-control">
                                    <option value="" selected disabled>Select your Civil Status</option>
                                    <option value="Single">Single</option>
                                    <option value="Married">Married</option>
                                    <option value="Divorced">Divorced</option>
                                    <option value="Widowed">Widowed</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12 col-sm-12">
                            <div class="form-group mb-3">
                                <input type="text" name="position" id="position" class="form-control" placeholder="Position">
                            </div>
                            <div class="form-group mb-3">
                                <input type="text" name="department" id="department" class="form-control" placeholder="Department">
                            </div>
                            <div class="form-group mb-3">
                                <input type="number" name="salary" id="" class="form-control" placeholder="Salary">
                            </div>
                            <div class="form-group mb-3">
                                <input type="text" name="address" id="address" class="form-control" placeholder="Address">
                            </div>
                            <div class="form-group mb-3">
                                <input type="number" name="years" id="" class="form-control" placeholder="Total Year in the Position">
                            </div>
                            <div class="form-group mb-3">
                                <label for="photo" class="form-label">Valid ID</label>
                                <input type="file" name="documentphoto" id="photo" class="form-control">
                            </div>

                        </div>
                        <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="camera"></div>
                        <canvas id="canvas" style="display:none; width:100%;"></canvas> <!-- Hidden canvas to capture the image -->
                        <input type="file" id="captureInput" name="capture" style="display:none;"> <!-- Hidden file input to upload the captured image -->
                        <a onclick="capture()" class="btn btn-warning float-right">Capture</a>
                        </div>
                    </div>
                    
                </div>
                <hr>
                <div class="card-footer">
                    <button type="submit" name="register" class="btn btn-success float-right">Save</button>
                    <button type="reset" class="btn btn-danger float-left">Clear</button>    
                </div>
            </form>
        </div>
    </div>
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

                // Attach the video and stream to global variables for capturing later
                window.stream = stream;
                window.videoElement = video;
            })
            .catch(function(error) {
                // If there's an error accessing the camera
                alert("No camera support detected.");
                window.location.href = 'index';  // Redirect to index page
            });
    } else {
        // If the browser does not support camera access
        alert("No camera support detected.");
        window.location.href = 'index';  // Redirect to index page
    }
});

// Capture image when 'Capture' button is clicked
function capture() {
    const video = window.videoElement;
    const canvas = document.getElementById('canvas');
    const context = canvas.getContext('2d');

    // Set canvas size to match the video element
    canvas.width = video.videoWidth;
    canvas.height = video.videoHeight;

    // Draw the current video frame onto the canvas
    context.drawImage(video, 0, 0, canvas.width, canvas.height);

    // Display the canvas (the captured image)
    canvas.style.display = "block";

    // Stop the video stream (stop the camera)
    video.srcObject.getTracks().forEach(track => track.stop());

    // Hide the video element after capturing
    video.style.display = "none";

    // Convert the canvas to a Blob (image file)
    canvas.toBlob(function(blob) {
        // Create a file from the blob and attach it to the input[type="file"]
        const fileInput = document.getElementById('captureInput');
        const file = new File([blob], 'capture.png', { type: 'image/png' });

        // Use DataTransfer to add the file to the input
        const dataTransfer = new DataTransfer();
        dataTransfer.items.add(file);
        fileInput.files = dataTransfer.files;

        // Log for confirmation (you can remove this)
        console.log("Image captured and added to input field");
    }, 'image/png');
}
</script>
</body>
</html>