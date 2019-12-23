
var fff='';
	
	var count=0;
		var x =document.getElementById("f");
		var c =document.getElementById("f2");

		var u =document.getElementById("user");
		var r =document.getElementById("report");
		var re =document.getElementById("req");
		var d =document.getElementById("dis");


	function s(){
		x.style.borderRight="5px solid blue";
     	c.style.borderRight="none";
	}function p(){
		c.style.borderRight="5px solid blue";
		x.style.borderRight="none";
	}


	function aq() {
		document.getElementById("okno1").style.display="block";
		}


	function user(){
		u.style.borderBottom="5px solid blue";
     	r.style.borderBottom="none";
     	re.style.borderBottom="none";
     	d.style.borderBottom="none";
	}function report(){
		r.style.borderBottom="5px solid blue";
		u.style.borderBottom="none";
		re.style.borderBottom="none";
		d.style.borderBottom="none";
		
	}
	function req(){
		re.style.borderBottom="5px solid blue";
		u.style.borderBottom="none";
		r.style.borderBottom="none";
		d.style.borderBottom="none";
     
	}function dis(){
		d.style.borderBottom="5px solid blue";
		u.style.borderBottom="none";
		r.style.borderBottom="none";
		re.style.borderBottom="none";
		
	}


		function q() {
			document.getElementById("okno1").style.display="none";
		}





	 function add() {
		


		var g = document.createElement('div');
		g.style.display="flex";
		g.style.flexDirection="row";
        g.style.width=1200+'px';
        g.style.height=30+'px';
        g.style.marginTop=20+'px';
        g.style.borderBottom="1px solid gray";

        var x = document.createElement("INPUT");
  		x.setAttribute("type", "checkbox");
  		g.appendChild(x);



  		var check = document.getElementById("C").checked;
  		var ans ="";
		if(check==false){
			ans = "Inactive";
		}else{
			ans = "Active";
		}

		var col = document.getElementById("image").value;

		var t1 = document.createElement('div');
		t1.innerHTML=ans;
		t1.style.width=150+'px';
		g.appendChild(t1);

		var t2 = document.createElement('div');
		t2.innerHTML=document.getElementById("Name").value;
		t2.style.width=200+'px';
		t2.style.textAlign="center";
		g.appendChild(t2);
       
		var t3 = document.createElement('div');
		t3.innerHTML=document.getElementById("Email").value;
		t3.style.width=180+'px';
		t3.style.textAlign="center";
		g.appendChild(t3);
		
		var t4 = document.createElement('div');
		t4.innerHTML=col;
		t4.style.textAlign="center";
		t4.style.width=160+'px';
	    g.appendChild(t4);
		
		var t5 = document.createElement('div');
		t5.innerHTML=document.getElementById("Phone").value;
		t5.style.width=200+'px';
		t5.style.textAlign="center";
		g.appendChild(t5);
		
		var t6 = document.createElement('div');
		t6.innerHTML=document.getElementById("Mode").value;
		t6.style.width=100+'px';
		t6.style.textAlign="center";
		
		g.appendChild(t6);

		var t7 = document.createElement("img");
		t7.src = "glasses.png";
		t7.style.height = 20+'px';
		t7.style.width = 20+'px';
		t7.style.paddingLeft = 50+'px';
		g.appendChild(t7);
		
		

	

		var t8 = document.createElement("img");
		t8.src = "g.png";
		t8.style.height = 20+'px';
		t8.style.width = 20+'px';
		t8.style.paddingLeft = 10+'px';
		t8.onclick = function() {
   			document.getElementById('udali').style.display='block';
   			da.onclick=function(){
   				document.getElementById('udali').style.display='none';
   				g.style.display='none';
   			}
   			net.onclick=function(){
   				document.getElementById('udali').style.display='none';
   			}

   		};
   		
		g.appendChild(t8);


		var t9 = document.createElement("img");
		t9.src = "edit.png";
		t9.style.height = 20+'px';
		t9.style.width = 20+'px';
		t9.style.paddingLeft = 10+'px';
		t9.onclick=function(){
			document.getElementById('edit').style.display='block';
			saver.onclick=function(){
				t2.innerHTML=document.getElementById('Name1').value;
				t3.innerHTML=document.getElementById('Email1').value;
				var coa = document.getElementById("image1").value;
			    t4.innerHTML=coa;
			    var check = document.getElementById("Cam").checked;
  				var ans1 ="";
				if(check==false){
				ans1 = "Inactive";
				}else{
				ans1 = "Active";
				}
				t1.innerHTML=ans1;
				t5.innerHTML=document.getElementById('Phone1').value;
				t6.innerHTML=document.getElementById('Mode1').value;
				document.getElementById('edit').style.display='none';
			}
		};




		g.appendChild(t9);

		document.getElementById("dd").appendChild(g);
		
		
	}	

		
       
   
		
		
