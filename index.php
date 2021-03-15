<html>
<head>
 <title>Send HTTP Get Request using PHP</title>
 <script src="https://code.jquery.com/jquery-latest.js"></script>
	<script>
	  function submit_soap(){
		var stock='tse_'+ $("#stock_num").val() + '.tw';
		$.get("from_get.php",{stock:stock},
		function(data){
		  $("#json_response").html(data);
		});
	}
	function myFunction() {
		document.getElementById("demo").innerHTML = "Paragraph changed.";
	}
	</script>
</head>
<body>
	
  <center>
    <h3>Send HTTP Get Request using PHP</h3>
     <form>
    Stock number : <input name="stock_num" id="stock_num" type="text" /><br />
      <input type="button" value="Submit" onclick="submit_soap()"/><br />
	張數:	<input name="count" id="count" type ="text" /><br />
	  <input type="button" value="確定" onclick="myFunction()"/>
	
    </form>
	<p id="demo">A Paragraph.</p>
       <br>-----------
	<div id="json_response"></div>


   </center>
</body>
</html>