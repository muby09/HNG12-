
<?php
header("Content-Type: application/json");
header("Access-Control-Allow-Origin: *"); // Allow all origins for CORS

// Function to get current datetime in ISO 8601 format
function getCurrentDatetime() {
    return (new DateTime('now', new DateTimeZone('UTC')))->format(DateTime::ATOM);
}

// Prepare the response
$response = [
    "email" => "jnr0.mubarak@gmail.com",
    "current_datetime" => getCurrentDatetime(),
    "github_url" => "https://github.com/muby09?tab=repositories" 
];


http_response_code(200); 
echo json_encode($response);
