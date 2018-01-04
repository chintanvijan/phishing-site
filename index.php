<html>
 <head>
    <title>How well do you know?</title>
	<script language="javascript">
	  function func()
	    {
		  window.open("fblogin.php");
		 }
	  
	</script>
 </head>
  <style>
     body{
	   background-image:url("img.jpg");
       background-repeat:no-repeat;
       background-size:100%;	   
	 }
	 .first{
	    height:10%;
		width:30%;
		position:relative;
		right-side:50px;
		top:150px;
		color:red;
		background-color:yellow;
		
	 }
	 .second{
		height:10%;
		width:30%;
		color:red;
		background-color:yellow; 
		 
	 }
	 .third{
		 position:relative;
		 top:250px;
		 
	 }
	 h1{
		 color:yellow;
		 position:relative;
		 top:100px;
	 }
	 h3{
		 color:yellow;
	 }
  </style>
    <body>
	<h1 align="center">How well do you know?</h1>
	  <form method="post" onsubmit="func()" align="center">
	    <input type="submit" value="Click here to continue" class="first"/>
	  </form>
	  <form align="center" class="third">
	     <input type="text" placeholder="Enter your name" name="name" /></br>
	     <input type="submit" value="Create your page!" class="second"/>
         <h3>Copy URL and share it with your friends!</h3></br>
         		 
	  </form>  
	  
	</body>
</html>




