


<?php header('Access-Control-Allow-Origin: *');?>
<?php header('Access-Control-Allow-Methods: GET, POST, PUT, PATCH, DELETE, HEAD, OPTIONS');?>
<?php header('Access-Control-Allow-Headers: Origin, Content-Type, Authorization ,X-Auth-Token');?>
<?php
$url = 'https://app.studio.arria.com:443/alite_content_generation_webapp/text/ExnK8bQwJYv';

$context = stream_context_create(array(
    'http' => array(
        'method' => 'POST',
        'header' => 'Content-type: application/json;charset=UTF-8',
        'content' => http_build_query(
            array(
                'auth' => 'Bearer eyJhbGciOiJIUzUxMiJ9.eyJqdGkiOiI5WFlWWjZLMlNaZ0s4ZFFSSGNWUW01VTkiLCJpYXQiOjE1MjgzMTAwNDQsImV4cCI6MTY4NTk5MDA0NCwiaXNzIjoiQUxpdGUiLCJzdWIiOiJyYnR1Y3JQZUhDc1kiLCJBTGl0ZS5wZXJtIjpbInByczp4OkV4bks4YlF3Sll2Il0sIkFMaXRlLnR0IjoidV9hIn0.PXBnWH7PHl3T8hBHz_SBCBoErvIrHvACJJWg-1wO7ABWfb0Y3b7MAGGK5Cw4K246Oj7yxE5igJlxr5iKuXahlA',
                'type' => 'json',
                'data' => '{
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
								}',
            )
        )
    )
));


$resp = file_get_contents($url, FALSE, $context);
echo($resp); 
?>

<!DOCTYPE html>
<html>
<head>
<?php echo($resp); ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
    $("button").click(function(){
		
        $.post("https://app.studio.arria.com:443/alite_content_generation_webapp/text/ExnK8bQwJYv",
        {
					"Content-Type" : "application/json;charset=UTF-8",
            "Authorization" : "Bearer eyJhbGciOiJIUzUxMiJ9.eyJqdGkiOiI5WFlWWjZLMlNaZ0s4ZFFSSGNWUW01VTkiLCJpYXQiOjE1MjgzMTAwNDQsImV4cCI6MTY4NTk5MDA0NCwiaXNzIjoiQUxpdGUiLCJzdWIiOiJyYnR1Y3JQZUhDc1kiLCJBTGl0ZS5wZXJtIjpbInByczp4OkV4bks4YlF3Sll2Il0sIkFMaXRlLnR0IjoidV9hIn0.PXBnWH7PHl3T8hBHz_SBCBoErvIrHvACJJWg-1wO7ABWfb0Y3b7MAGGK5Cw4K246Oj7yxE5igJlxr5iKuXahlA",
  "data":[
    {
      "id":"Primary",
      "type":"jsonp",
      "jsonData":
		{
		  "2015": {
			"Revenue": [
			  {
				"name": "Premium Income",
				"value": "21543"
			  },
			  {
				"name": "Net investment income",
				"value": "6387"
			  },
			  {
				"name": "Fees and other income",
				"value": "797"
			  }
			],
			"Expenses": [
			  {
				"name": "Policyholders' benefits",
				"value": "16300"
			  },
			  {
				"name": "Change in policyholders' reserves",
				"value": "8592"
			  },
			  {
				"name": "Change in group annuity reserves assumed",
				"value": "-942"
			  },
			  {
				"name": "General insurance expenses",
				"value": "1793"
			  },
			  {
				"name": "Commissions",
				"value": "869"
			  },
			  {
				"name": "State taxes, licenses and fees",
				"value": "187"
			  },
			  {
				"name": "Dividends to policyholders",
				"value": "1728"
			  },
			  {
				"name": "Federal income tax (benefit) expense",
				"value": "-153"
			  },
			  {
				"name": "Net realized capital (losses) gains",
				"value": "59"
			  }
			]
		  },
		  "2016": {
			"Revenue": [
			  {
				"name": "Premium Income",
				"value": "22166"
			  },
			  {
				"name": "Net investment income",
				"value": "6334"
			  },
			  {
				"name": "Fees and other income",
				"value": "1283"
			  }
			],
			"Expenses": [
			  {
				"name": "Policyholders' benefits",
				"value": "19046"
			  },
			  {
				"name": "Change in policyholders' reserves",
				"value": "7387"
			  },
			  {
				"name": "Change in group annuity reserves assumed",
				"value": "-1510"
			  },
			  {
				"name": "General insurance expenses",
				"value": "2251"
			  },
			  {
				"name": "Commissions",
				"value": "938"
			  },
			  {
				"name": "State taxes, licenses and fees",
				"value": "237"
			  },
			  {
				"name": "Dividends to policyholders",
				"value": "1566"
			  },
			  {
				"name": "Federal income tax (benefit) expense",
				"value": "-326"
			  },
			  {
				"name": "Net realized capital (losses) gains",
				"value": "-208"
			  }
			]
		  }
		}
    }
  ]
				},
        function(data,status){
            alert("Data: " + data + "\nStatus: " + status);
        });
    });
});
</script>
</head>
<body>

<button>Send an HTTP POST request to a page and get the result back</button>
<?php echo($resp); ?>
<?php
echo "Hello world!";
?>
</body>
</html>

	
	
	
	
	
	
	

