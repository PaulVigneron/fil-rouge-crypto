    <!DOCTYPE html>
        <html lang="fr">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Traitement</title>
            <link rel="stylesheet" href="style.css">
        </head>
        <body>
            <div>
            <?php
    $url = 'https://api.binance.com/api/v3/ticker/price';

    $symbol = $_POST['symbol'];

    $parameters = ['symbol' => $symbol];

    $headers = [
    'Accepts: application/json',
    'X-CMC_PRO_API_KEY: w3MMRuvWNl8kcQ92fAp8nYyjbIIie2zomzs2gBjZCpz5TXxUYO5ItXyV6jA3K4c9'
    ];

    function coin($url, $parameters, $headers) {




    $qs = http_build_query($parameters); // query string encode the parameters
    $request = "{$url}?{$qs}"; // create the request URL

    print($request);

    $curl = curl_init(); // Get cURL resource
    // Set cURL options
    curl_setopt_array($curl, array(
        CURLOPT_URL => $request,            // set the request URL
        CURLOPT_HTTPHEADER => $headers,     // set the headers 
        CURLOPT_RETURNTRANSFER => 1         // ask for raw response instead of bool
    ));

    $response = curl_exec($curl); // Send the request, save the response
    print_r(json_decode($response)); // print json decoded response
    curl_close($curl); // Close request


    }
    coin($url, $parameters, $headers);
    ?>
    </div>
  </body>
</html> 
