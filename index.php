<?php

$curl = curl_init();
$array = '[{"Sub-Category": "Tables", "SUM(Profit)": -8141, "SUM(Quantity)": 390, "SUM(Sales)": 60894},{"Sub-Category": "Supplies", "SUM(Profit)": -955, "SUM(Quantity)": 192, "SUM(Sales)": 16049}]';
$arraytoPass = base64_encode(json_encode($array));
$command= "python3 derive_stats.py $arraytoPass";
$output = shell_exec($command);
echo base64_decode($output);
echo $output;
$resultArray = base64_decode(json_decode($output));
echo var_dump($resultArray);
curl_setopt_array($curl, array(
  CURLOPT_PORT => "443",
  CURLOPT_URL => "https://app.studio.arria.com:443/alite_content_generation_webapp/text/ExnK8bQwJYv",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_HTTPHEADER => array(
    "Authorization: Bearer eyJhbGciOiJIUzUxMiJ9.eyJqdGkiOiJyRDY2VnF6cGRLQzVOaXh6a2JPWUttQlMiLCJpYXQiOjE1MjgzNjAzMjIsImV4cCI6MTY4NjA0MDMyMiwiaXNzIjoiQUxpdGUiLCJzdWIiOiI3RlRpQzJPdUlha20iLCJBTGl0ZS5wZXJtIjpbInByczp4OkV4bks4YlF3Sll2Il0sIkFMaXRlLnR0IjoidV9hIn0.TYyppdHz6w3HEikX4KgJn9AKWVnWtEIa6VGnQlP6GzUYvI39ONwTQ1sMCFrQWSuGqzAsVWvCzC7X_gDIFLUkRw",
    "Cache-Control: no-cache",
    "Content-Type: application/json;charset=UTF-8",
    "Postman-Token: 74fd0d0f-6382-4e09-b68b-6368545d4d03"
  ),
));
$body = <<<EOT
{
  "data":[
    {
      "id":"Primary",
      "type":"json",
      "jsonData":
      {
  "dashboards": [
    {
      "name": "Sales",
      "KPI": {
        "first": "Profit",
        "second": "Sales",
        "third": "Quantity",
        "fourth" : "State"
      },
      "Measures" : 
      {
        "first" : 100,
        "second" : 200,
        "third" : 300,
        "fourth" : "texas"
      }
    },
    {
      "name": "Data Quality Dashboard",
      "KPI": {
        "first": "data quality",
        "second": "data quality at previous year",
        "third": "State",
        "fourth": "Country"
      },
      "Measures" : 
      {
        "first" : 100,
        "second" : 98,
        "third" : "Ontario",
        "fourth" : "America"
      }
    }
    
  ]
}
		}
    
	
  ]
}
EOT;
curl_setopt($curl, CURLOPT_POSTFIELDS, $body); 
$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
$someObject = json_decode($response);
  echo $someObject[0]->result; // Access Object data
}
?>