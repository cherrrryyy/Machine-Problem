<html>
	<head>
		<title>Machine Problem 5</title>
	</head>
<body>
	<script language = "javascript" type = "text/javascript">
	<!--
		function answer(){
			var flag = true;

			while (flag){
				var retVal = prompt("Enter Your Answer", "Your Answer");
				var number = parseInt(localStorage.getItem("number"));
				

				if (retVal != null){
					if (number > 1){
						window.location = "index5.html";
						flag = false;
					}else{
						if (!isNaN(retVal)){
							var number1 = parseInt(localStorage.getItem("number")) + 1;
							localStorage.setItem("number", number1);
							flag = true;
						}else{
							if((retVal == "bat") || (retVal == "butterfly") || (retVal == "moth")){
								alert("You're Normal");
								var getscore = parseInt(localStorage.getItem("correct")) + 1;
								localStorage.setItem("correct", getscore);
								flag = false;
							}else{
								alert("You're an Addict");
								var getscore = parseInt(localStorage.getItem("wrong")) + 1;
								localStorage.setItem("wrong", getscore);
								flag = false;
							}
							window.location = "index3.php";
						}	
					}		
				}
			
			}
		}
	//-->
	</script>
<body>
	<img src = "2.jpg"></br></br>
	<input type = "button" value = "Click Me" onclick = "answer()"/>
</body>
</html>