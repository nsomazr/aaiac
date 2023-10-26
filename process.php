<?php
//echo "<script>alert('Init');</script>";

DEFINE("DBHOST", "localhost");
DEFINE("DBUSER", "aidlabor_ai4dlab");
DEFINE("DBPWD", "@i4dl@b_cms");
DEFINE("DBNAME", "aidlabor_conference");
$dbc = mysqli_connect(DBHOST,DBUSER,DBPWD);
if($dbc){

    if (!mysqli_select_db($dbc,DBNAME)) {
      //  echo "<script>alert('Connect Failed DB');</script>";
    	trigger_error("Could not select the database <br>");
    	exit();
    }

    //echo "<script>alert('Well All');</script>";
	
}
else{
       // echo "<script>alert('Connect Failed');</script>";
		trigger_error("Could not connect to MySQL");
		exit();
}


// Process Form Submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullName = mysqli_real_escape_string($dbc, $_POST["fullName"]); // Sanitize user input
    $email = mysqli_real_escape_string($dbc, $_POST["email"]);
    $phoneNumber = mysqli_real_escape_string($dbc, $_POST["phoneNumber"]);
    $referenceNumber = mysqli_real_escape_string($dbc, $_POST["referenceNumber"]);
    $packageType = mysqli_real_escape_string($dbc, $_POST["packageType"]);

    // Insert Data into Database
    $sql = "INSERT INTO payments (fullName, email, phoneNumber, referenceNumber, packageType) 
            VALUES ('$fullName', '$email', '$phoneNumber', '$referenceNumber', '$packageType')";

if ($dbc->query($sql) === TRUE) {
    echo '<script>showPopup("Thank you! Your payment details have been successfully received. You will receive a payment receipt via email upon bank reconciliation.");</script>';
} else {
    // Handle the error and show an error message in the pop-up.
    echo '<script>showPopup("Oops! Something went wrong while processing your payment details. Please try again later or contact support.");</script>';
}
}

// Close Database Connection
$dbc->close();
?>
