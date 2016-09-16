var modal = document.getElementById('modal')
var btn = document.getElementById('mostrar');
var span = document.getElementsByClassName("close")[0];

var btnlogin=document.getElementById('btnlogin');
var btnregistrar=document.getElementById('btnregistrar');

var formlogin= document.getElementById('login');
var formregistro= document.getElementById('registro');

btn.onclick = function(){
	modal.style.display="block";
}

span.onclick = function() {
    modal.style.display = "none";
}


btnlogin.onclick= function(){
	btnlogin.className="activo";
	btnregistrar.className="";
	formlogin.style.display="block";
	formregistro.style.display="none";
}
btnregistrar.onclick= function(){
	btnlogin.className="";
	btnregistrar.className="activo";
	formlogin.style.display="none";
	formregistro.style.display="block";
}

formregistro.style.display="none";
