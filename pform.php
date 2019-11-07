<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>validation form</title>
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

    <script  src="http://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
        crossorigin="anonymous">
    </script>
</head>
<body>



	<body>
		<div class="bg-secondary">
        <!-- <div class="jumbotron jumbotron-fluid"> -->
        <div class="container">
            <h2 style="text-align:center"> Form Validation</h2>
            <div id="user_name"></div>
            <div id="user_email"></div>
            <div id="user_pwd"></div>

            <form name="myform" action="#">
                <div class="form-group">
                    <label for="name">Username</label>
                    <input type="text" id="name" class="form-control-file border" name="name">
                </div>

                <!--  <div class="form-group">
                    <label for="pwd">Email</label>
                    <input type="email" id="eml" class="form-control-file border" name="email">
                </div> -->
                <div class="form-group">
                    <label for="pwd">Password</label>
                    <input type="password" id="pwd" class="form-control-file border" name="password">
                </div>
                 <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
               
                    <div class="btn-group mr-2" role="group" aria-label="First group">
                        <button type="button" onclick="validateform()" class="btn btn-primary btn-outline-light">Submit</button>
                    </div>
                </div>
            </form>
        </div>
   </div> 
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script>
   <script>

    function validateform(){  
        var name=document.myform.name.value;  
        // var email=document.myform.email.value; 
        var password=document.myform.password.value;  
        
        if (name==null || name==""){  
            alert("Username can't be blank");  
            return false;  
        }



           // if (email==null || email==""){  
           //  alert("email can't be blank");  
           //  return false;  
	          //   }
          else if(password.length<6){  
            alert("Password must be at least 6 characters long.");  
            return false;  
        }
        else{
            document.getElementById("user_name").innerHTML = name;
            // document.getElementById("user_email").innerHTML = email;
            document.getElementById("user_pwd").innerHTML = password;
        }  
    } 
</script>
</body>
</html>




<!-- <!-- <!-- <!-- <!-- <!-- <!-- 	 <div id="aaa"></div>
	  <div id="ccc"></div>
      <div id="bbb"></div>

	 <h1>form</h1>
	 <form name="myForm" action="#"method="post"  onsubmit="return validateForm()" >
		 Name: <input type="text" name="name"  id="aaa"><br><br>
		  Name: <input type="text" name="email"  id="ccc"><br><br>
         password: <input type="text" name="password" id="bbb"><br>
      <!--    Gender:
			<input type="radio" name="gender" value="female">Female
			<input type="radio" name="gender" value="male">Male
			<input type="radio" name="gender" value="other">Other<br><br>
		Comment: <textarea name="comment" rows="5" cols="40"></textarea><br><br> -->
		<!-- submit:    <input type="submit" name="submit" id="laxx" onclick="validation_Form()">
	</form>
	<script>

function validation_Form()
		 {
		 	
		 	
		  var name = document.forms["myForm"]["name"].value;
		  var email=document.forms["myform"]["email"].value;
		  var password=document.forms["myForm"]["password"].value;


		   if (name="null") {
		   	alert("user name can't be blank");
		    	
		       return false;
		   }

		    if (name="null") {
		   	alert("user name can't be blank");
		    	
		       return false;
		   }
		   else if (email="not @") {
		   	alert("email must be have @.com");
		    	
		       return false;
		   }
		       elseif(password.length<6){
		       	alert("password must be at least 6 characters");
		       	return false;
		       }
		        else{
                      	document.getElementById("aaa").innerHTML=name;
                      	document.getElementById("ccc").innerHTML=email;
                      	document.getElementById("bbb").innerHTML=password;
                      }
          } 
      </script>
 -->