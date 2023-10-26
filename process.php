<?php
echo "<script>alert('Init');</script>";

DEFINE("DBUSER", "ai4dlab");
DEFINE("DBHOST", "localhost");
DEFINE("DBNAME", "ai4dlabdb");
DEFINE("DBPWD", "@i4dl@b_cms");

$dbc = mysqli_connect(DBHOST, DBUSER, DBPWD, DBNAME); // Include the database name in the connection

echo "<script>alert('Well 1');</script>";

if ($dbc) {
    echo "<script>alert('Well 2');</script>";
} else {
    echo "<script>alert('Connect Failed');</script>";
    trigger_error("Could not connect to MySQL");
    exit; // Exit the script in case of a database connection error
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
        $successMessage = "Thank you! Your payment details have been successfully received. You will receive a payment receipt via email upon bank reconciliation.";
    } else {
        echo "Error: " . $sql . "<br>" . $dbc->error;
        $errorMessage = "Oops! Something went wrong while processing your payment details. Please try again later or contact support.";
    }
}

// Close Database Connection
$dbc->close();
?>
