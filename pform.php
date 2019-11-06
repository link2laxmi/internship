<!DOCTYPE html>
<html>
<head>
	<title>form</title>
</head>
<body>

	<?php
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = test_input($_POST["name"]);
  // $email = test_input($_POST["email"]);
  // $website = test_input($_POST["gender"]);
  // $comment = test_input($_POST["comment"]);
  
}

function test_input()
		 {
		 	 $x = document.getElementById("id1");
		 	
		  $x = document.forms["myForm"]["name"].value;
		   if (x == "name") {
		    	
		       return false;
		    
		  //   var x = document.forms["myForm"]["email"].value;
		  // if (x == "") {
		  //   alert("email must be filled out");
		  //   return false;
		  //   var x = document.forms["myForm"]["gender"].value;
		  // if (x == "") {
		  //   alert("gender must be filled out");
		  //   return false;
		  //   var x = document.forms["myForm"]["comment"].value;
		  // if (x == "") {
		  //   alert("comment must be filled out");
		  //   return false;
    //                   }
          } 
?>php

      <h1>form</h1>
	  <form name="myForm"onsubmit="return ValidateForm()" method="post">
		 Name: <input type="text" name="name" ><br><br>
        <!--  E-mail: <input type="text" name="email" id="id2"><br>
         Gender:
			<input type="radio" name="gender" value="female">Female
			<input type="radio" name="gender" value="male">Male
			<input type="radio" name="gender" value="other">Other<br><br>
		Comment: <textarea name="comment" rows="5" cols="40"></textarea><br><br> -->
		submit:    <input type="submit" name="submit" id="laxx" onclick="validationForm()">
	</form>

	<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
// echo $email;
// echo "<br>";
// echo $gender
// echo "<br>";
// echo $comment;
// echo "<br>";
?>php
</body>
</html>