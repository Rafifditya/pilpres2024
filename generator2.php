<?php 
    function getChartaRequest(){
        header('Content-Type: application/json'); // Specify the type of data
        $ch = curl_init('https://api-qc.chartapolitika.com/v1/parsing-data/MSE002'); // Initialise cURL
        $token = "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwczovL2FwaS1xYy5jaGFydGFwb2xpdGlrYS5jb20vdjEvcmVnaXN0ZXIiLCJpYXQiOjE3MDY3ODcyMTYsIm5iZiI6MTcwNjc4NzIxNiwianRpIjoid3JiWWpZcFRKY25VMTNLbSIsInN1YiI6IjUxZmRhMDFjLWI2M2QtNDk4NC04NmRiLThiOTEwNDEzZjRhNCIsInBydiI6IjIzYmQ1Yzg5NDlmNjAwYWRiMzllNzAxYzQwMDg3MmRiN2E1OTc2ZjcifQ.UTv_x5ksa7aaxLPxPL6FlJrfU6XflI4YcgHhdtJxwrU";
        $authorization = "Authorization: Bearer ".$token; // Prepare the authorisation token
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json' , $authorization )); // Inject the token into the header
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPGET, 80); // Specify the request method as POST
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1); // This will follow any redirects
        $result = curl_exec($ch); // Execute the cURL statement
        curl_close($ch); // Close the cURL connection
        return $result; // Return the received data

    }
    echo getChartaRequest();
  
?>