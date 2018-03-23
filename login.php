<!doctype html>
<html lang="en">
<head>
  <link href='http://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
 <meta charset="UTF-8">
  <style>
  body{
  background: #4E535B;
  font-family: 'Montserrat', Arial;
  font-size: 1em;
}
h2{
  text-align: center;
  color: #F1F2F4;
  text-shadow: 0 1px 0 #000;
}
a{
  text-decoration: none; color: #EC5C93; 
}
.ribbon{
  background: rgba(200,200,200,.5);
  width: 50px;
  height: 70px;
  margin: 0 auto;
  position: relative;
  top: 19px;
  border: 1px solid rgba(255,255,255,.3);
  border-top: 2px solid rgba(255,255,255,.5);
  border-bottom: 0;  
  border-radius: 5px 5px 0 0;
  box-shadow: 0 0 3px rgba(0,0,0,.7); 
}
.ribbon:before{
  content:"";
  display: block;
  width: 15px;
  height: 15px;
  background: #4E535B;
  border: 4px solid #cfd0d1;
  margin: 18px auto;
  box-shadow: inset 0 0 5px #000, 0 0 2px #000, 0 1px 1px 1px #A7A8AB;
  border-radius: 100%;
}
.login{
  background: #F1F2F4;
  border-bottom: 2px solid #C5C5C8;
  border-radius: 5px;
  text-align: center;
  color: #36383C;
  text-shadow: 0 1px 0 #FFF;
  max-width: 300px;
  margin: 0 auto;
  padding: 15px 40px 20px 40px;
  box-shadow: 0 0 3px #000;
}
.login:before{
  content:"";
  display: block;
  width: 70px;
  height: 4px;
  background: #4E535B;
  border-radius: 5px;
  border-bottom: 1px solid #FFFFFF;
  border-top: 2px solid #CBCBCD;
  margin: 0 auto;
}
h1{
  font-size: 1.6em;
  margin-top: 30px;
  margin-bottom: 10px;
}
p{
  font-family:'Helvetica Neue';
  font-weight: 300;
  color: #7B808A;
  margin-top: 0;
  margin-bottom: 30px;
}
.input{
  text-align: right;
  background: #E5E7E9;
  border-radius: 5px;
  overflow: hidden;
  box-shadow: inset 0 0 3px #65686E;
  border-bottom: 1px solid #FFF;
}
input{
  width: 260px;
  background: transparent;
  border: 0;
  line-height: 3.6em;
  box-sizing: border-box;
  color: #71747A;
  font-family:'Helvetica Neue';
  text-shadow: 0 1px 0 #FFF;
}
input:focus{
  outline: none;
}
.blockinput{
  border-bottom: 1px solid #BDBFC2;
  border-top: 1px solid #FFFFFF;
}
.blockinput:first-child{
  border-top: 0;
}
.blockinput:last-child{
  border-bottom: 0;
}
.blockinput i{
  padding-right: 10px;
  color: #B1B3B7;
  text-shadow: 0 1px 0 #FFF;
}
::-webkit-input-placeholder {
  color: #71747A;
  font-family:'Helvetica Neue';
  text-shadow: 0 1px 0 #FFF;
}
button{
  margin-top: 20px;
  display: block;
  width: 100%;
  line-height: 2em;
  background: rgba(114,212,202,1);
  border-radius: 5px;
  border:0;
  border-top: 1px solid #B2ECE6;
  box-shadow: 0 0 0 1px #46A294, 0 2px 2px #808389;
  color: #FFFFFF;
  font-size: 1.5em;
  text-shadow: 0 1px 2px #21756A;
}
button:hover{
 background: linear-gradient(to bottom, rgba(107,198,186,1) 0%,rgba(57,175,154,1) 100%);  
}
button:active{
  box-shadow: inset 0 0 5px #000;
  background: linear-gradient(to bottom, rgba(57,175,154,1) 0%,rgba(107,198,186,1) 100%); 
}

  </style>
</head>
<body>
<?php
	session_start();
	$conn = new mysqli("localhost", "root", "", "htbeauty");
	if ($conn->connect_error) {
  		echo 'loi';
	}
	//$conn=mysql_connect("localhost", "root") or die("can't connect database");
	//$conn=mysql_connect("127.3.165.2", "adminJ4mgzwp","IEtk19Phh6Fe") or die("can't connect database");
	//$conn=mysql_connect("112.213.89.107", "celadon","123456789") or die("can't connect database");
	//mysql_select_db("celadon",$conn);
	//mysql_set_charset('utf8', $conn);
	$error = "";
	if(isset($_POST['ok'])){
		$u = $p = "";
		$u = $_POST['username'];
		$p = $_POST['password'];
		
		$stmt = $conn->prepare('SELECT username FROM tblusers WHERE username = ? AND password = ?');
		$stmt->bind_param('ss', $u, $p);

		$stmt->execute();

		/* bind result variables */
    	$stmt->bind_result($name);

    	/* fetch value */
    	$stmt->fetch();
		
		//$result = $stmt->get_result();
		if ($name != "") {
    		$_SESSION['username'] = $name;
 			
 			header('Location: index.php');
 			exit;
		}else{
			$error = 'Tài khoản không tồn tại';
		}
		$stmt->close();
	}
	
	$conn->close();
	
?>
  <div class="ribbon"></div>
  <div class="login">
  	<h1>HTBeauty</h1>
  	
  	<form action="login.php" name="myForm" method="post" onsubmit="return validateForm()">
    	<div class="input">
      		<div class="blockinput">
        		<i class="icon-envelope-alt"></i><input type="mail" name="username" placeholder="Email">
      		</div>
      		<div class="blockinput">
        		<i class="icon-unlock"></i><input type="password" name="password" placeholder="Password">
      		</div>
    	</div>
    	<div>
      		<?echo $error?>
    	</div>
    	<button type="submit" name="ok">Login</button>
  	</form>
  	<script>
  		function validateForm(){
			var name = document.forms["myForm"]["username"];
			var password = document.forms["myForm"]["password"];
		
			if (name.value == null || name.value == "") {
				alert("Hãy nhập tên tài khoản!");
				name.focus();
				return false;
			}
		
			if (password.value == null || password.value == "") {
				alert("Hãy nhập mật khẩu!");
				password.focus();
				return false;
			}
		
			return true;
		}
  	</script>
  </div>

</body>
</html>