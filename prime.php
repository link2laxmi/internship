<html>
<head>
  <title>check the primeno</title>
</head>
<body>
  <div id="lax"></div>

   <h2>check num is prime or not</h2>
    
      <input type="text" name="num" value="" id="no">
      <br>
      <input type="button" value="Check" onClick="myFun()"> 
   

  <script type="text/javascript">
function myFun()
{
  var num=document.getElementById("no").value;
  var c=0;
  for(i=1; i<=num;i++){
    if (num%i==0){
      c=c+1;
    }
  }

  if(c==2){
      document.getElementById("lax").innerHTML=num+ "is  a prime number";

  }
 else{
    document.getElementById("lax").innerHTML=num+ "is not a prime number";

 }
}

  
  
   
     

    </script>

    </body>
</html