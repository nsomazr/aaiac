<?php

// Show all information, defaults to INFO_ALL
//phpinfo();


DEFINE ("DBUSER","ai4dlab");
DEFINE ("DBHOST","localhost");
DEFINE ("DBNAME","ai4dlabdb");
DEFINE ("DBPWD","@i4dl@b_cms");


// Define the API endpoint URL
$apiUrl = 'https://test-nmbbank.mtf.gateway.mastercard.com/api/nvp/version/64';

// Define your merchant ID, merchant name, unique order ID, and order description
$merchantId = '983455000069';
$pattern = "1234567890";

$uniqueOrderId = $id = mt_rand(9999,99999999);

$orderDescription = $_POST['ticketType'];

// Set the API credentials
$apiUsername = 'merchant.' . $merchantId;
$apiPassword = '2fb6ea8b2945a4e3234e48f5c35d1240';

// Set the order amount and currency
$orderAmount = (float)$_POST['amount'];
$orderCurrency = 'USD';

// Prepare the data for the POST request
$postData = array(
    'apiOperation' => 'INITIATE_CHECKOUT',
    'apiPassword' => $apiPassword,
    'apiUsername' => $apiUsername,
    'merchant' => $merchantId,
    'interaction.operation' => 'PURCHASE',
    'order.id' => $uniqueOrderId,
    'order.amount' => $orderAmount,
    'order.currency' => $orderCurrency,
    'order.description' => $orderDescription,
);

// Initialize cURL session
$ch = curl_init($apiUrl);

// Set cURL options
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($postData));

// Execute the cURL request
$response = curl_exec($ch);


// Check for cURL errors
if (curl_errno($ch)) {
    echo 'cURL Error: ' . curl_error($ch);
} else {
    // Parse the API response

    // Parse the response string into variables
    parse_str($response, $responseData);

    // print_r($responseData);

    // Print the decoded data
    $session_id = $responseData["session_id"];

    // print($session_id);

    // header('location:pay_model.php?session_id='.$session_id);

    // print_r($session_id);

    #$responseData = var_dump(json_decode($response));

    // Check if the payment was successful
    if ($responseData['result'] == 'SUCCESS') {

        // echo "<script>alert('Paid')</script>";

        // Capture payment details
        $ticketType = $_POST['ticketType']; 
        $firstName = $_POST['firstName']; 
        $lastName = $_POST['lastName']; 
        $affiliation = $_POST['affiliation'];
        $street = $_POST['street'];
        $apartment = $_POST['apartment']; 
        $townCity = $_POST['townCity']; 
        $country = $_POST['country']; 
        $postCode = $_POST['postCode']; 
        $email = $_POST['email']; 
        $phone = $_POST['phone']; 

        echo $session_id;

}

}
// Close cURL session
curl_close($ch);

?>
