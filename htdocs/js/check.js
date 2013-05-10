var flag0=false
var flag1=false
var pos= 0;
var multisElement=[$('#multiselect1-element'),$('#multiselect2-element')];
var multis=[$('#multiselect1'),$('#multiselect2')];
var multisString=['multiselect1','multiselect2'];
var categorias=["AcróbataGimnasta","Artistac"];
var flag=[flag0,flag1];

$('#Categorias-AcróbataGimnasta').click(function() {
	ocultar(true,1)
	pos= $(this).position();
	$('#multiselect1-element').animate({
		top: pos.top,
	});
	$('#multiselect1').toggle('fast');
	$('#multiselect1-element').find('div.botonCerrarFormu').remove();
	$('#multiselect1-element').find('div.leyedapop').remove();
	if(flag[0]==false){
		flag[0]=true;
		$('#multiselect1-element').prepend("<div class='leyedapop'>Precione Ctrl para multiples selecciones</div>");
		$('#multiselect1-element').append("<div class='botonCerrarFormu'><span class='boton-aceptar' onclick='ocultar(true,0)'>Aceptar</span><span  class='boton-cancelar' onclick='ocultar(false,0)'>Cancelar</span></div>");
		document.getElementById("Categorias-AcróbataGimnasta").disabled=true;
		document.getElementById("Categorias-AcróbataGimnasta").checked=true;
	} else {
		$('#multiselect1-element').prepend("<div class='leyedapop'>Precione Ctrl para multiples selecciones</div>");
		$('#multiselect1-element').append("<div class='botonCerrarFormu'><span class='boton-aceptar' onclick='ocultar(true,0)'>Aceptar</span><span  class='boton-cancelar' onclick='ocultar(false,0)'>Cancelar</span></div>");
		document.getElementById("Categorias-AcróbataGimnasta").checked=true;
	}
});
$('#Categorias-Artistac').click(function(){
	ocultar(true,0)
	pos= $(this).position();
	$('#multiselect2-element').animate({
		top: pos.top,
	});
	$('#multiselect2').toggle('fast');
	$('#multiselect2-element').find('div.botonCerrarFormu').remove();
	$('#multiselect2-element').find('div.leyedapop').remove();
	if(flag[1]==false){
		flag[1]=true;
		$('#multiselect2-element').prepend("<div class='leyedapop'>Precione Ctrl para multiples selecciones</div>");
		$('#multiselect2-element').append("<div class='botonCerrarFormu'><span class='boton-aceptar' onclick='ocultar(true,1)'>Aceptar</span><span  class='boton-cancelar' onclick='ocultar(false,1)'>Cancelar</span></div>");
		document.getElementById("Categorias-Artistac").disabled=true;
		document.getElementById("Categorias-Artistac").checked=true;
	} else {
		$('#multiselect2-element').prepend("<div class='leyedapop'>Precione Ctrl para multiples selecciones</div>");
		$('#multiselect2-element').append("<div class='botonCerrarFormu'><span class='boton-aceptar' onclick='ocultar(true,1)'>Aceptar</span><span  class='boton-cancelar' onclick='ocultar(false,1)'>Cancelar</span></div>");
		document.getElementById("Categorias-Artistac").checked=true;
	}
});

function ocultar(bool,multi){
	multis[multi].hide('fast');
	if(bool==false){
		var mySet = document.getElementById(multisString[multi]);
		resetSelect(mySet);
		document.getElementById('Categorias-'+categorias[multi]).disabled=false;
		document.getElementById('Categorias-'+categorias[multi]).checked=false;
	}else{
		if(flag[multi]==true){
			document.getElementById('Categorias-'+categorias[multi]).disabled=false;
			document.getElementById('Categorias-'+categorias[multi]).checked=true;
		}
	}
	flag[multi]=false;
	multisElement[multi].find('div.botonCerrarFormu').remove();
	multisElement[multi].find('div.leyedapop').remove();
}
function resetSelect(s) {
  for(var i = 0; i < s.length; i++) {
	s.options[i].selected = false;
  }
}