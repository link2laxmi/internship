<html>
<head>
	<title></title>
</head>
<body>
	
	first number:<input type="text" id="first" >
	second number:<input type="text" id="last"><br>
	<input type="button" value="add" onclick="myFunction(this.value)"></button>
	<input type="button" value="subtract" onclick="myFunction(this.value)"></button>
	<input type="button" value="multi" onclick="myFunction(this.value)"></button>
	<input type="button" value="div" onclick="myFunction(this.value)"></button><br>


	<!-- <input type="button" onclick="myFunction()"> -->
	

		result:<input type="text" id="ressult" name="resultt">

		<script type="text/javascript">

			//function myFunction(my_value){
				//console.log(my_value);
			//}
			function myFunction(v_value)
			{
				var a,b,c;
				a = parseInt(document.getElementById('first').value);
				b = parseInt(document.getElementById('last').value);
				
				switch(v_value) 
				{
					case "add":
					c=a+b;
					document.getElementById("ressult").value=c;
					//console.log(c);
					break;


					case "subtract":
					c=a-b;
					document.getElementById("ressult").value=c;
					//console.log(c);
					break;

				    case "multi":
					c=a*b;
					document.getElementById("ressult").value=c;
					//console.log(c);
					break;

					case "div":
					c=a/b;
					document.getElementById("ressult").value=c;
					//console.log(c);
					break;
				}

			  //     switch(v_value)
			  //       {
			  //       	case add:
			  //           c=a+b;
			  //           console.log(c);
			  //           //document.getElementById("ressult").value=c;
					// 	break;

					// 	case "subtract":
					// 	c=a-b;
					// 	document.getElementById("ressult").value=c;
					// 	break;

					// 	case "multi":
					// 	c=a*b;
					// 	document.getElementById("ressult").value=c;
					// 	break;

					// 	case "div":
					// 	c=a/b;
					// 	document.getElementById("ressult").value=c;
					// 	break;

					// 	default:
					// 	c=("error");
					// 	document.getElementById("ressult").value=c;
					// }
			}
		</script>
</body>
</html>



