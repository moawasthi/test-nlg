


<?php header("Access-Control-Allow-Origin: *");?>
<?php header("Access-Control-Allow-Methods: GET, POST, PUT, PATCH, DELETE, HEAD, OPTIONS");?>
<?php header("Access-Control-Allow-Headers: Origin, Content-Type, Authorization ,X-Auth-Token");?>
<html>
<head>
    <title>jQuery AJAX POST Form</title>
    <meta charset="utf-8">
</head>
<body>
<div id="response">
    <pre></pre>
</div>

<form id="my-form">
    <input type="text" id="first-name" name="first-name" placeholder="First Name" />
    <input type="text" id="last-name" name="last-name" placeholder="Last Name" />

    <button type="submit">Submit</button>
</form>

<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
    (function($){
        function processForm( e ){
            $.ajax({
                url: 'https://app.studio.arria.com:443/alite_content_generation_webapp/text/ExnK8bQwJYv',
                dataType: 'json',
                type: 'post',
                contentType: 'application/json;charset=UTF-8',
                Authorization: 'Bearer eyJhbGciOiJIUzUxMiJ9.eyJqdGkiOiJYOEF3R2dQNURqdFZLZWpvQ2JxRWZhSXYiLCJpYXQiOjE1MjgyNzE1NTAsImV4cCI6MTY4NTk1MTU1MCwiaXNzIjoiQUxpdGUiLCJzdWIiOiJvZXUwTmMyaUFqWVoiLCJBTGl0ZS5wZXJtIjpbInByczp4OkV4bks4YlF3Sll2Il0sIkFMaXRlLnR0IjoidV9hIn0.gV3H5CJehqSf_Dk4SRYgOebRmMsYiK3XCVC7tozJX5uOX_F1PdWNBq-Z2R-Bz-D6yTb1MsEEz8U3ok-nbl9cDg',
                data: $(this).serialize(),
                success: function( data, textStatus, jQxhr ){
                    $('#response pre').html( data );
                },
                error: function( jqXhr, textStatus, errorThrown ){
                    console.log( errorThrown );
                }
            });

            e.preventDefault();
        }

        $('#my-form').submit( processForm );
    })(jQuery);
</script>
</body>
</html>
	
	
	
	
	
	
	

