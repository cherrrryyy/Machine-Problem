<html>
	<head>
		<title>Machine Problem 5</title>
	</head>

	<script type = "text/javascript">
	<!--
		function answer(){
		var temp = localStorage.getItem("correct");
		var temp1 = localStorage.getItem("wrong");
		var temp2 = localStorage.getItem("number");
		if ((temp != 0) || (temp1 != 0) || (temp2 != 0)){
			localStorage.setItem("correct", "0");
			localStorage.setItem("wrong", "0");
			localStorage.setItem("number", "0");
		}
			
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
							if(retVal == "human"){
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
							window.location = "index2.php";
						}	
					}		
				}
			
			}
		}


	//-->
	</script>

<body>
	<img src = "1.jpg"></br></br>
	<input type = "button" value = "Click Me" onclick = 'answer();'/>
</body>
</html>
