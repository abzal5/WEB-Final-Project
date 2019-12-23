var q=0;
var arr = new Array();    
var word={
	w0:"Мобильный приложения",w1:"Веб-сайт"
};

arr[0]=new Image();
arr[0].src="https://www.teleplus.nl/media/catalog/product/a/p/apple_iphone_11_nano_ekran_koruyucunl8549791312-ViV3eShVoXYicJz9.png";
arr[1]=new Image();
arr[1].src='https://static.bhphoto.com/images/images2500x2500/1562676502_1492876.jpg';



function changeImage() {
  document.getElementById("resim").src=arr[q].src;
  var r="w"+q;
  document.getElementById("word").innerHTML="<div style='font-weight:bold;font-size:120%'>"+word[r]+"<div>";
  q++;
  if (q>= arr.length) {
    q = 0;
  }
}



setInterval(changeImage,2000);
