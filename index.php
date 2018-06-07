


<?php header('Access-Control-Allow-Origin: *');?>
<?php header('Access-Control-Allow-Methods: GET, POST, PUT, PATCH, DELETE, HEAD, OPTIONS');?>
<?php header('Access-Control-Allow-Headers: Origin, Content-Type, Authorization ,X-Auth-Token');?>
<?php 
  $url = "https://app.studio.arria.com:443/alite_content_generation_webapp/text/ExnK8bQwJYv";
  $ch = curl_init($url);
  curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    "content-type: application/json;charset=UTF-8" ,
"Authorization: Bearer eyJhbGciOiJIUzUxMiJ9.eyJqdGkiOiJyRDY2VnF6cGRLQzVOaXh6a2JPWUttQlMiLCJpYXQiOjE1MjgzNjAzMjIsImV4cCI6MTY4NjA0MDMyMiwiaXNzIjoiQUxpdGUiLCJzdWIiOiI3RlRpQzJPdUlha20iLCJBTGl0ZS5wZXJtIjpbInByczp4OkV4bks4YlF3Sll2Il0sIkFMaXRlLnR0IjoidV9hIn0.TYyppdHz6w3HEikX4KgJn9AKWVnWtEIa6VGnQlP6GzUYvI39ONwTQ1sMCFrQWSuGqzAsVWvCzC7X_gDIFLUkRw"));
curl_setopt($ch, CURLOPT_POSTFIELDS, 
"{
'data':[
    {
      'id':'Primary',
      'type':'json',
      'jsonData':
      {
        {
          'month': 'August',
          'year': '2017',
          'total': 571675,
          'target': 500000,
          'states': [
            'New York',
            'California',
            'Texas'
          ],
          'offices': [
            {
              'state': 'California',
              'name': 'L.A.',
              'sales': 85320,
              'target': 75000,
              'manager': {
                'firstName': 'Frank',
                'surname': 'Langford',
                'yearsEmployed': 1,
                'role': 'Independent Contractor'
              },
              'employees': 3
            },
            {
              'state': 'Texas',
              'name': 'Houston',
              'sales': 70530,
              'target': 75000,
              'manager': {
                'firstName': 'Maria',
                'surname': 'Oliviera',
                'yearsEmployed': 4,
                'role': 'Sales Manager'
              },
              'employees': 1
            },
            {
              'state': 'New York',
              'name': 'New York',
              'sales': 280425,
              'target': 200000,
              'manager': {
                'firstName': 'Nikhil',
                'surname': 'Patel',
                'yearsEmployed': 2,
                'role': 'Senior Sales Manager'
              },
              'employees': 8
            },
            {
              'state': 'Texas',
              'name': 'Dallas',
              'sales': 45090,
              'target': 50000,
              'manager': {
                'firstName': 'David',
                'surname': 'McGruer',
                'yearsEmployed': 0,
                'role': 'Sales Manager'
              },
              'employees': 1
            },
            {
              'state': 'California',
              'name': 'San Francisco',
              'sales': 29450,
              'target': 50000,
              'manager': {
                'firstName': 'Diana',
                'surname': 'Jones',
                'yearsEmployed': 0,
                'role': 'Independent Contractor'
              },
              'employees': 1
            },
            {
              'state': 'Texas',
              'name': 'Austin',
              'sales': 60860,
              'target': 50000,
              'manager': {
                'firstName': 'Ava',
                'surname': 'Peake',
                'yearsEmployed': 2,
                'role': 'Sales Manager'
              },
              'employees': 2
            }
          ]
        }
}"

); 
$repsonse = curl_exec($ch); 
  $result = json_decode($repsonse);
  echo $result;
?>

<?php 
//setup request to send json via POST
$url = "https://app.studio.arria.com:443/alite_content_generation_webapp/text/ExnK8bQwJYv";
  $ch = curl_init($url);


//attach encoded JSON string to the POST fields

//set the content type to application/json
curl_setopt($ch, CURLOPT_HTTPHEADER, array("Content-Type: application/json;charset=UTF-8" ,
"Authorization: Bearer eyJhbGciOiJIUzUxMiJ9.eyJqdGkiOiJyRDY2VnF6cGRLQzVOaXh6a2JPWUttQlMiLCJpYXQiOjE1MjgzNjAzMjIsImV4cCI6MTY4NjA0MDMyMiwiaXNzIjoiQUxpdGUiLCJzdWIiOiI3RlRpQzJPdUlha20iLCJBTGl0ZS5wZXJtIjpbInByczp4OkV4bks4YlF3Sll2Il0sIkFMaXRlLnR0IjoidV9hIn0.TYyppdHz6w3HEikX4KgJn9AKWVnWtEIa6VGnQlP6GzUYvI39ONwTQ1sMCFrQWSuGqzAsVWvCzC7X_gDIFLUkRw"));
$repsonse = curl_exec($ch); 
echo $repsonse;
$result = json_decode($repsonse);
echo $result;
//close cURL resource
curl_close($ch);
//return response instead of outputting
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

//execute the POST request
$repsonse = curl_exec($ch); 
echo $repsonse;
$result = json_decode($repsonse);
echo $result;
//close cURL resource
curl_close($ch);

?>

<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
    $("button").click(function(){
      var url = 'https://app.studio.arria.com:443/alite_content_generation_webapp/text/ExnK8bQwJYv';
      
      makePostCall = function (url) { // here the data and url are not hardcoded anymore
   var json_data = JSON.stringify("" );

    return $.ajax({
        type: "POST",
        url: url,
        data: json_data,
        dataType: "jsonp",
        contentType: "application/json;charset=UTF-8",
        authentication: "Bearer eyJhbGciOiJIUzUxMiJ9.eyJqdGkiOiJyRDY2VnF6cGRLQzVOaXh6a2JPWUttQlMiLCJpYXQiOjE1MjgzNjAzMjIsImV4cCI6MTY4NjA0MDMyMiwiaXNzIjoiQUxpdGUiLCJzdWIiOiI3RlRpQzJPdUlha20iLCJBTGl0ZS5wZXJtIjpbInByczp4OkV4bks4YlF3Sll2Il0sIkFMaXRlLnR0IjoidV9hIn0.TYyppdHz6w3HEikX4KgJn9AKWVnWtEIa6VGnQlP6GzUYvI39ONwTQ1sMCFrQWSuGqzAsVWvCzC7X_gDIFLUkRw"
    });
}

// and here a call example
makePostCall("https://app.studio.arria.com:443/alite_content_generation_webapp/text/ExnK8bQwJYv")
    .success(function(data){
               console.log(data);
   })
    .fail(function(sender, message, details){
           alert("Sorry, something went wrong!");
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
	
	
	
	
	
	

