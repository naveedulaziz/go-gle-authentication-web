<html>
<head>
<title>Create your Google Account</title>
<link rel="icon" type="image/png" href="images/Google-18.png" size="22px">
<!--<link href="https://fonts.googleapis.com/css?family=Open+Sans:300" rel="stylesheet">-->
</head>
<style>
@font-face {
    font-family: Open Sans;
    src: url(fonts/OpenSans-Light.ttf);
}
body{
margin:0;
padding:0;
}
#si1{
float: right;
padding: 6px 11px 6px 11px;
margin-right:17px;
color: #FFF;	
border-radius: 3px;
background-color: #4d90fe;
border: 1px solid #3079ed;}

#si2{
padding: 6px 11px 6px 11px;
margin-left:270px;
color: #FFF;	
border-radius: 3px;
background-color: #4d90fe;
border: 1px solid #3079ed;}
#headim{
background-color:#f1f1f1;
padding: 15px 25px 18px 42px;
}
#cr1{

text-align: center;
font-family:  'Open Sans', sans-serif;
color: #555;
font-size: 38px;
margin: 27px 0px 50px 0px;
}
#pr1{
text-align: center;
font-family: 'Open Sans', arial;
color: #737373;
font-size: 20px;
font-weight: 300;
margin-bottom: 15px;}
#pr2 {
    text-align: center;
    font-family: 'Open Sans', arial;
    color: #737373;
    font-size: 13px;
    margin-bottom: 40px;
}
#pr3 {
    text-align: center;
    font-family: 'Open Sans', arial;
    color: #737373;
    font-size: 20px;
    font-weight: 300;
    margin-bottom: 15px;
}
#pr4{
text-align: center;
    font-family: 'Open Sans', arial;
    color: #737373;
    font-size: 13px;
    margin-bottom: 40px;
}
</style>
<body>
<script>
var check = function() {
  if (document.getElementById('password').value ==
    document.getElementById('confirm_password').value) {
    document.getElementById('message').style.color = 'green';
    document.getElementById('message').innerHTML = 'matching';
  } else {
    document.getElementById('message').style.color = 'red';
    document.getElementById('message').innerHTML = 'not matching';
  }
}
</script>
<table width="100%">
<tr>
<td id="headim"><img src="images/logo.png" width="8.8%" alt="google"/><button id="si1" type="button"  name="sig">Sign in</button></td></tr>
<tr>
<td><p id="cr1">Create your Google Account</p></td>
</tr></table>
<table width="100%">
<tr><td><p id="pr1">One account is all you need</p>
<p id="pr2">One free account gets you into everything Google.</p>
<p style="text-align:center;"><img src="images/logostrip.png"></p>
<p id="pr3">Take it all with you</p>
<p id="pr4">Switch between devices, and pick up wherever you left off.</p>
<p style="text-align:center;"><img src="images/devices.png"></p>
</td>
<td>
<form action="show.php" method="post">
  <p>Name</p><input type="text" name="firstn" placeholder="First" required>
  <input type="text" name="lastn" placeholder="Last" required>
  <p>Choose your Username</p><input size="45" type="text" name="username" required>
  <p>Create a password</p><input size="45" type="password" id="password" name="crpass" onkeyup='check();' required>
  <p>Confirm your password</p><input size="45" type="password" name="cnpass" id="confirm_password" onkeyup='check();' required>
  <span id='message'></span>
  <p>Birthday</p><input name="date"type="date">
  <p>Gender</p>
  
  <select name="gend">
    <option value="Male">Male</option>
    <option value="femail">Female</option>
    <option value="other">Other</option>
    <option value="rns">Rather not say</option>
  </select>
  <p>Mobile phone</p><input size="45" type="text" name="ph" value="+92">
  <p>Your current email address</p><input size="45" type="email" name="crmail">
  <p>Location</p>
  <select name="locat">
    <option value="Afghanistan">Afghanistan</option>
    <option value="China">China</option>
    <option value="Pakistan"	>Pakistan</option>
    <option value="Sirilanka">Sirilanka</option>
  </select>
  <p style="text-align:"center;"><input id="si2"type="submit" name="nextstep" value="Next step"></p>
  </form>
</td>
</tr>
</table>
</body>
</html>