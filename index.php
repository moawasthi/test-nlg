


<?php header('Access-Control-Allow-Origin: *');?>
<?php header('Access-Control-Allow-Methods: GET, POST, PUT, PATCH, DELETE, HEAD, OPTIONS');?>
<?php header('Access-Control-Allow-Headers: Origin, Content-Type, Authorization ,X-Auth-Token');?>


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
        dataType: "json",
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
	
	
	
	
	
	

