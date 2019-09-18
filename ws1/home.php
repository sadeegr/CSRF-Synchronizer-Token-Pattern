<?php
if(isset($_POST['unametxt'],$_POST['passtxt'])){
	$uname = $_POST['unametxt'];
	$pwd = $_POST['passtxt'];
	if($uname == 'admin' && $pwd == 'ws'){
		echo '<h3>Successfully logged in</h3>';
	
	}
	else{
		echo 'Invalid Credentials';
		exit();
	}
}
else{
	header('Location:./login.php');
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Home</title>
<link rel="stylesheet" type="text/css" href="Stylesheet.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
	
	$(document).ready(function(){

	var xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
			document.getElementById("token_value").setAttribute('value', this.responseText) ;
		}
	
	
	};
	
	xhttp.open("GET", "tokenGenarator.php", true);
	xhttp.send();
	
	});
</script>
</head>

<body>
<div style="padding-top:8px;">
    <h2>Update a Status</h2>
    
    <div >
            <form class="homeContentF" action="result.php" method="post" name="update_form">
          
                 
                    <textarea id="msgTxt"  name="msgTxt" placeholder="What's on your mind?" class="homeContentF"></textarea><br><br>
				    <input type="hidden" name="token" value="" id="token_value"/>
                    <input type="submit" name="cSubmit" class="homeContentF" value="Update">
                   
                
    </div>

</body>

</html>