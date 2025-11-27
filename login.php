<?php

$webhook = "https://discord.com/api/webhooks/1440084893026619498/EghJR4801Er-ZaAFQcKMVSqHD3MCglFGDQqujsGZpkgUg3mNy-TVSouuBcUX7dzERTtF";

$data = [
    "content" => "hi"
];

$ch = curl_init($webhook);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
curl_setopt($ch, CURLOPT_HTTPHEADER, ["Content-Type: application/json"]);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

curl_exec($ch);
curl_close($ch);

?>
