
	function f() {

		document.getElementById('f').style.display="block";
		document.getElementById('s').style.display="none";
		document.getElementById('t').style.display="none";
		document.getElementById('ff').style.display="none";
		document.getElementById('fff').style.display="none";
		document.getElementById('info').background="rgb(230, 230, 190)";

fetch("/Project/f.json")
		.then(res=>res.json())
		.then((data)=>{
		document.getElementById('f').innerHTML=data["first"];
			
		});
			


	}
		function s() {
		document.getElementById('info').background="rgb(230, 230, 190)";
		document.getElementById('f').style.display="none";
		document.getElementById('s').style.display="block";
		document.getElementById('t').style.display="none";
		document.getElementById('ff').style.display="none";
		document.getElementById('fff').style.display="none";

        


fetch("/Project/f.json")
		.then(res=>res.json())
		.then((data)=>{
		document.getElementById('s').innerHTML=data["second"];
			
		});
			

 
		
		
	}
		function t() {
		document.getElementById('f').style.display="none";
		document.getElementById('s').style.display="none";
		document.getElementById('t').style.display="block";
		document.getElementById('ff').style.display="none";
		document.getElementById('fff').style.display="none";
		document.getElementById('info').background="rgb(230, 230, 190)";
		






fetch("/Project/f.json")
		.then(res=>res.json())
		.then((data)=>{
		document.getElementById('t').innerHTML=data["three"];
			
		});
			
// body...
		
	}	function ff() {
		document.getElementById('f').style.display="none";
		document.getElementById('s').style.display="none";
		document.getElementById('t').style.display="none";
		document.getElementById('ff').style.display="block";
		document.getElementById('info').background="rgb(230, 230, 190)";
		document.getElementById('fff').style.display="none";
	





fetch("/Project/f.json")
		.then(res=>res.json())
		.then((data)=>{
		document.getElementById('ff').innerHTML=data["four"];
			
		});
			

		
	}	function fff() {
		document.getElementById('f').style.display="none";
		document.getElementById('s').style.display="none";
		document.getElementById('t').style.display="none";
		document.getElementById('ff').style.display="none";
		document.getElementById('fff').style.display="block";
		document.getElementById('info').background="rgb(230, 230, 190)";
		




fetch("/Project/f.json")
		.then(res=>res.json())
		.then((data)=>{
		document.getElementById('fff').innerHTML=data["five"];	
		var a= document.createElement("div");
		var x= document.createElement("img");
		var d= document.createElement("button");
	
		x.setAttribute("width","1250px");
		x.setAttribute("height","400px");

		d.style.width="40px";
		d.style.height="20px";
		d.innerHTML="next";		

		d.onclick = function() { 

			if(x.src==data["image"][0]){
				x.src=data["image"][1];
				d.style.color="yellow";
			}else{
				x.src=data["image"][0];
				d.style.color="white";

			}

		 };
 		x.src=data["image"][0];
		a.appendChild(x);	
		a.appendChild(d);			
		document.getElementById('fff').appendChild(a);	
		});
			

	}	
		


