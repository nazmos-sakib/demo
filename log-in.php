<!DOCTYPE html>
<html>
<head>
<style> 
input[type=submit] {
    background-color: #4CAF50;
    border: none;
    color: white;
    padding: 16px 32px;
    text-decoration: none;
    margin: 4px 2px;
    cursor: pointer;
}
input[type=text],input[type=password],h2 {
    width: 41%;
    padding: 12px 20px;
    margin: 8px 0;
    box-sizing: border-box;
    border: none;
    border-bottom: 2px solid red;
}    
    input[type=text]:focus {
    border: 3px solid #555;
}
    input[type=password]:focus {
    border: 3px solid #555;
}
   #a01:link, #a01:visited {
    background-color: #f44336;
    color: white;
    padding: 14px 25px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
}


#a01:hover, #a01:active {
    background-color: red;
}
</style>
</head>
<body >
<?php $link = "welcome.php"; ?>
 <div style="background-color:white; width: 90%; padding: 40px; margin:2px">
	<div style="padding:0 0 0 37%">
		<a id="a6" href="index.php">
			<img src="image/hatbazar.jpg" alt="hat-bazer-logo" style="width:41%;height:110px">
		</a>
	</div>
</div>
<div style="padding: 5% 0% 5% 35%; background-color:#cccccc">
<h2 style="text-align:center">Log In</h2>    
<form method="post" action=<?php echo $link;?> >
  <label for="email">E-mail</label><br>
  <input type="text" id="email" name="name" autofocus required><br>
  <label for="password">password</label><br>
  <input type="password" id="password" name="pass" autofocus required><br>
  <input type="submit" name="submit" value="Login" autofocus required>
    <a id="a01" href="sign-up.php">sign up</a>
	<a id="a01" href="">forgot password?</a>
</form>    
    
    
    </div>

</body>
</html>