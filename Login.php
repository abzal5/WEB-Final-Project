	


<?php 
   session_start();
   $db= mysqli_connect("localhost","root","","project1");
   if(isset($_POST['sign'])){
    $email = $_POST['email'];
    $pass = $_POST['pass'];
  	
  	if($email=="admin@admin.com" && $pass=="admin111"){
  		 $_SESSION['email'] = $email;
    	 header("location:sd.html");
  	}
    $sql ="SELECT*FROM users WHERE email='$email' AND Password = '$pass'";
    $result = mysqli_query($db,$sql);
    if (mysqli_num_rows($result)==1) {
     $_SESSION['email'] = $email;
     header("location:Project.html");
    }
    else{
     echo "<div style='color:red;position:absolute;font-size:130%;left:600px;z-index:2;top:400px;'>Пользователь не найден</div>";
    }
   }
?>





<link rel="stylesheet" href="/Project/css/login.css">



	<header>
  <div id="header2">
		<div id="logo" style="width: 180px;"><a href="Project.html"><img src="/Project/img/logo.png" style="margin-top: -95px;"></a></div>
		<div class="glav"><a href="Project.html">Главная</a></div>
		<div class="glav"><a href="Category.html">Категории</a></div>
		<div class="glav"><a href="About.html">O нас</a></div>
		<div class="glav"><a href="Contacts.html">Контакты</a></div>
		<div class="glav val" style="width: 400px;text-align: right;"><a href="Login.php">Войти</a></div>
		<div class="glav val" ><a href="Registration.php">Зарегистрироваться</a></div>
		</div>

		</header>
		



<div id="sirt" style=";margin-left: 500px">
		<div><h1>Войти</h1></div>
		<div style="width: 350px;border: 1px solid gray"></div>
		<form action="login.php" method="post" onsubmit="return check()" name="lform">



	

		<div class="item"><div style="height: 30px;margin-top: 32px;margin-right: 2px;"><img src="https://image.flaticon.com/icons/png/512/561/561188.png" style="width: 30px;height: 30px;"></div><input type="" name="email" placeholder="Почта" value="<?php echo @$email ?>"></div>
		<div id="e"></div>



		<div class="item"><div style="height: 30px;margin-top: 30px;margin-right: 2px;"><img src="https://image.flaticon.com/icons/png/512/483/483408.png" style="width: 30px;height: 30px;"></div><input type="" name="pass" placeholder="Пароль" value="<?php echo @$pass ?>" ></div>
		<div id="p"></div>



		<div class="but" style="position: absolute;top: 200px;left: 60px"><input type="submit" value="Войти" name="sign"></div>
		</form>
	</div>

<script>
	function check() {
		var x =document.forms["lform"]["email"].value;
		var y =document.forms["lform"]["pass"].value;
		if(!x.includes("@")){
			document.getElementById('e').innerHTML="Почта зполнен неправильно";
			return false;
		}else{
			if(x.includes("@")){
				document.getElementById('e').innerHTML="";
			}
		}

		if(y.length<7){
			document.getElementById('p').innerHTML="Недопустимая длина пароля";
			return false;
		}
	}	
</script>
