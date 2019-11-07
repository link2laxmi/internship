<html>
<head>
	<title></title>
	<script
			  src="http://code.jquery.com/jquery-3.4.1.min.js"
			  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
			  crossorigin="anonymous">
			  	
	</script>
</head>
<body>

	<button id="abc">aap</button>
	<button id="abd">aap</button>
	
		<p id="hid">helo here is hide the data</p>
		

	<p id="first">hello i m laxmi brother</p>
	<button id="kal">paw


	<button id="aash">red</button>
	<button id="aask">red</button>
	<button id="aasl">red</button>


	<button id="lax">clic
	<script>
		$(document).ready(function(){
			console.log("jquery started");
		});
	</script>


	<script>
       $("#lax").click(function(){
			console.log("clicked")
		});
	</script>

	<script>
       $("#aash").click(function(){
			console.log("clicked")
		});
        $("#aask").mouseenter(function(){
			console.log("clicked")
		});
		 $("#aasl").mouseleave(function(){
			console.log("clicked")
		});

		$("#kal").click(function(){
		  $("#first").css("color","red")
		});

		$("#abc").click(function(){
		   $("#hid").hide();
		});

		    $("#abd").click(function(){
		    $("#hid").show();
		   });


	</script>

	<!-- var a=$("#id").val(); -->
</body>
</body>
</html>