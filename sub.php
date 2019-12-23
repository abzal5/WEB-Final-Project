	
<?php 


$data=$_POST;
if(isset($data["sign"])){

$name=$_POST["name"];
$email=$_POST["email"];
$pass=$_POST["pass"];
$pass2=$_POST["pass2"];

$error=array();
if(empty($name)){
	$error[]="Имя не заполнено";
}
if(empty($email)){
	$error[]= "Почта не заполнено";
}
if(empty($pass)){
	$error[]="Пароль не заполнено";
}
if(strlen($pass)){
	$error[]="Недопустимая длина";
}
 
if($pass!=$pass2){
	$error[]="Пароли не совпадают";
}

if(!empty($error)){
	echo "<div style='color:red;position:absolute;font-size:120%;left:640px;top:50px'>" . array_shift($error) . "</div>";
}

else{
echo "<div style='color:green;position:absolute;font-size:120%;left:580px;top:50px'>Вы успешно зарегистрировались</div>";

$mysql=new mysqli("localhost",'root','','project1');
$sql="INSERT INTO `users` (`Name`, `Email`, `Password`,`Password_again`) VALUES ('$name','$email','$pass','$pass2')";
$mysql -> query($sql);
$mysql -> close();


$name="";
$email="";
$pass="";
$pass2="";

}
}



?>
<link rel="stylesheet" href="regis.css">
<div id="sirt" style=";margin-left: 500px">
		<div><h1>Регистрация</h1></div>
		<div style="width: 350px;border: 1px solid gray"></div>
		<form action="sub.php" method="post" onsubmit="return check()">



		<div class="item"><div style="height: 30px;margin-top: 30px;margin-right: 2px;"><img src="https://image.flaticon.com/icons/png/512/10/10938.png" style="width: 30px;height: 30px;"></div><input type="" name="name" placeholder="Имя" value="<?php echo @$name ?>" ></div>



		<div class="item"><div style="height: 30px;margin-top: 32px;margin-right: 2px;"><img src="https://image.flaticon.com/icons/png/512/561/561188.png" style="width: 30px;height: 30px;"></div><input type="" name="email" placeholder="Почта" value="<?php echo @$email ?>"></div>


		<div class="item"><div style="height: 30px;margin-top: 30px;margin-right: 2px;"><img src="https://image.flaticon.com/icons/png/512/483/483408.png" style="width: 30px;height: 30px;"></div><input type="" name="pass" placeholder="Пароль" value="<?php echo @$pass ?>" minlength=8></div>


		<div class="item"><div style="height: 30px;margin-top: 30px;margin-right: 2px;"><img src="https://image.flaticon.com/icons/png/512/483/483408.png" style="width: 30px;height: 30px;"></div><input type="" name="pass2" placeholder="Пароль снова" value="<?php echo @$pass2 ?>"></div>




		<div class="but"><input type="submit" value="Зарегистрироваться" name="sign"></div>
		</form>
	</div>

