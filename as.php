
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="/Project/css/adminCSS.css">
	<script src="/Project/js/admin.js"></script>

	<title>Автоэлектрик Алматы</title>
	<meta charset="utf-8">
	<link href="https://fonts.googleapis.com/css?family=Yanone+Kaffeesatz&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
	<script src="qww.js"></script>
</head>
<body>




<div>
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

		</header><hr>












	<div id="main">
		
		<div id="raz">
		<div id="users" onclick="pol()">Пользователи</div>
		<div id="category" onclick="cat()">Категории</div>
		<div id="comments" onclick="otz()">Отзывы</div>
       </div>


       <div id="area">
       		<div id="us-info">

       		</div>




       		<div id="ca-info">


<?php

        $mycon = mysqli_connect('localhost','root','','project');
        mysqli_select_db($mycon,'project');
        $query = "SELECT * FROM `titel` INNER JOIN `uslugi` ON `uslugi`.`id`=`titel`.`key_id` WHERE `Name`='Battery'";
        $res = mysqli_query($mycon,$query);
        while($row = mysqli_fetch_array($res)){
			$t=$row["Title"];
			$des=$row["Description"]; 
			$price=$row["Price"]; 
			echo "<div style='display:flex;flex-direction:column;'><div>" . $t . "</div>" . "<div>" . $des . "</div>" . "<div>" . $price . "</div></div>";       
        
    }
      mysqli_close($mycon);


 
?>











<div><input type="submit" name="del"></div>
<?php 

	$mycon = mysqli_connect('localhost','root','','project');
        mysqli_select_db($mycon,'project');
        $query = "DELETE FROM `uslugi`  WHERE `Title`='Zamena battery'";
        $res = mysqli_query($mycon,$query);
        while($row = mysqli_fetch_array($res)){
			$t=$row["Title"];
			$des=$row["Description"]; 
			$price=$row["Price"]; 
			echo "<div style='display:flex;flex-direction:column;'><div>" . $t . "</div>" . "<div>" . $des . "</div>" . "<div>" . $price . "</div></div>";       
        
    }
      mysqli_close($mycon);

 ?>	

       		</div>





<div id="co-info">
       			

















       		</div>



































       </div>





















	</div>






	<footer>
		<div class="grid-container">
			  <div id="help"><h2>Помощь</h2><a href="">Условия выезда</a><a href="">Центр поддержки</a><a href="">Наши партнеры</a><a href="">Контакты</a><a href="">Как добраться?</a></div>




			  <div style="border-right: 1px solid gray;"><h2>Для мобильных устройств</h2><img src="http://www.ballindagginns.ie/wp-content/uploads/2017/11/appstores-640.jpg" style="width: 150px; height: 100px;"></div>




			  <div class="mess"><h2>Мы в соцсетях</h2><img src="https://image.flaticon.com/icons/png/512/906/906377.png"><img src="https://image.flaticon.com/icons/png/512/1377/premium/1377218.png"><img src="https://image.flaticon.com/icons/png/512/145/145813.png"><img src="https://image.flaticon.com/icons/png/512/2111/2111463.png"></div>


			  <div ><h2>Способы оплаты</h2><p style="font-size: 130%;">Вы можете оплатить наличными,либо выбрать другой способ оплаты</p><img src="https://cdn.vox-cdn.com/thumbor/FtAV-Waa1rTPheAkxv3o4i0MVf0=/0x0:1000x1000/1200x800/filters:focal(421x430:581x590)/cdn.vox-cdn.com/uploads/chorus_image/image/62800797/Mastercard_logo.0.jpg" style="width: 60px;height: 60px;"></div>
		</div>
		<div id="author"><a href=""></a>@2019 Abzal Tuganbay</a></div>
	</footer>









</div>





























</body>



</html>
