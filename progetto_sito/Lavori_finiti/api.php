<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

$url = "https://api.openf1.org/v1/pit"; // JSONPlaceholder API URL

// Using file_get_contents
$context = stream_context_create(['http' => ['ignore_errors' => true]]);
$response = file_get_contents($url, false, $context);

// Get the response status code
$status_line = $http_response_header[0];
preg_match('{HTTP\/\S*\s(\d{3})}', $status_line, $match);
$status = $match[1];

if ($status >= 200 && $status < 300) {
    // Successful response
    $data = json_decode($response, true); // Assuming the API returns a JSON
    echo '<pre>';
    print_r($data);
    echo '</pre>';
} else {
    // Error occurred
    echo "Error occurred: $status";
}

// Using cURL
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);

if (curl_errno($ch)) {
    // cURL error
    echo 'cURL error: ' . curl_error($ch);
} else {
    $status = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    if ($status >= 200 && $status < 300) {
        // Successful response
        $data = json_decode($response, true); // Assuming the API returns a JSON
        echo '<pre>';
        print_r($data);
        echo '</pre>';
    } else {
        // Error occurred
        echo "Error occurred: $status";
    }
}

curl_close($ch);
?>