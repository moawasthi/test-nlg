<?php

$curl = curl_init();

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
        
          "month": "August",
          "year": "2017",
          "total": 571675,
          "target": 500000,
          "states": [
            "New York",
            "California",
            "Texas"
          ],
          "offices": [
            {
              "state": "California",
              "name": "L.A.",
              "sales": 85320,
              "target": 75000,
              "manager": {
                "firstName": "Frank",
                "surname": "Langford",
                "yearsEmployed": 1,
                "role": "Independent Contractor"
              },
              "employees": 3
            },
            {
              "state": "Texas",
              "name": "Houston",
              "sales": 70530,
              "target": 75000,
              "manager": {
                "firstName": "Maria",
                "surname": "Oliviera",
                "yearsEmployed": 4,
                "role": "Sales Manager"
              },
              "employees": 1
            },
            {
              "state": "New York",
              "name": "New York",
              "sales": 280425,
              "target": 200000,
              "manager": {
                "firstName": "Nikhil",
                "surname": "Patel",
                "yearsEmployed": 2,
                "role": "Senior Sales Manager"
              },
              "employees": 8
            },
            {
              "state": "Texas",
              "name": "Dallas",
              "sales": 45090,
              "target": 50000,
              "manager": {
                "firstName": "David",
                "surname": "McGruer",
                "yearsEmployed": 0,
                "role": "Sales Manager"
              },
              "employees": 1
            },
            {
              "state": "California",
              "name": "San Francisco",
              "sales": 29450,
              "target": 50000,
              "manager": {
                "firstName": "Diana",
                "surname": "Jones",
                "yearsEmployed": 0,
                "role": "Independent Contractor"
              },
              "employees": 1
            },
            {
              "state": "Texas",
              "name": "Austin",
              "sales": 60860,
              "target": 50000,
              "manager": {
                "firstName": "Ava",
                "surname": "Peake",
                "yearsEmployed": 2,
                "role": "Sales Manager"
              },
              "employees": 2
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