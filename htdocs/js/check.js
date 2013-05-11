/*
 * 
 * 
 */
var flag0=false;
var flag1=false;
var flag2=false;
var flag3=false;
var flag4=false;
var flag5=false;
var pos= 0;
var multisElement=[$('#multiselect1-element'),$('#multiselect2-element'),$('#multiselect3-element'),$('#multiselect4-element'),$('#multiselect5-element'),$('#multiselect6-element')];
var multis=[$('#multiselect1'),$('#multiselect2'),$('#multiselect3'),$('#multiselect4'),$('#multiselect5'),$('#multiselect6')];
var multisString=['multiselect1','multiselect2','multiselect3','multiselect4','multiselect5','multiselect6'];
var categorias=["AcróbataGimnasta","ArtistaCircense","Deportista","Bailarin","Musico","Profesionales"];
var flag=[flag0,flag1,flag2,flag3,flag4,flag5];
/*
 * 
 */
$('#Categorias-AcróbataGimnasta').click(function() {
	ocultar(true,1);
        ocultar(true,2);
        ocultar(true,3);
        ocultar(true,4);
        ocultar(true,5);
        
	pos= $(this).position();
	$('#multiselect1-element').animate({
		top: pos.top
	});
	$('#multiselect1').toggle('fast');
	$('#multiselect1-element').find('div.botonCerrarFormu').remove();
	$('#multiselect1-element').find('div.leyedapop').remove();
	if(flag[0]===false){
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
$('#Categorias-ArtistaCircense').click(function(){
	ocultar(true,0);
        ocultar(true,2);
        ocultar(true,3);
        ocultar(true,4);
        ocultar(true,5);
        
	pos= $(this).position();
	$('#multiselect2-element').animate({
		top: pos.top
	});
	$('#multiselect2').toggle('fast');
	$('#multiselect2-element').find('div.botonCerrarFormu').remove();
	$('#multiselect2-element').find('div.leyedapop').remove();
	if(flag[1]===false){
		flag[1]=true;
		$('#multiselect2-element').prepend("<div class='leyedapop'>Precione Ctrl para multiples selecciones</div>");
		$('#multiselect2-element').append("<div class='botonCerrarFormu'><span class='boton-aceptar' onclick='ocultar(true,1)'>Aceptar</span><span  class='boton-cancelar' onclick='ocultar(false,1)'>Cancelar</span></div>");
		document.getElementById("Categorias-ArtistaCircense").disabled=true;
		document.getElementById("Categorias-ArtistaCircense").checked=true;
	} else {
		$('#multiselect2-element').prepend("<div class='leyedapop'>Precione Ctrl para multiples selecciones</div>");
		$('#multiselect2-element').append("<div class='botonCerrarFormu'><span class='boton-aceptar' onclick='ocultar(true,1)'>Aceptar</span><span  class='boton-cancelar' onclick='ocultar(false,1)'>Cancelar</span></div>");
		document.getElementById("Categorias-ArtistaCircense").checked=true;
	}
});
$('#Categorias-Deportista').click(function(){
	ocultar(true,0);
        ocultar(true,1);
        ocultar(true,3);
        ocultar(true,4);
        ocultar(true,5);

	pos= $(this).position();
	$('#multiselect3-element').animate({
		top: pos.top
	});
	$('#multiselect3').toggle('fast');
	$('#multiselect3-element').find('div.botonCerrarFormu').remove();
	$('#multiselect3-element').find('div.leyedapop').remove();
	if( flag[2] === false ){
		flag[2]=true;
		$('#multiselect3-element').prepend("<div class='leyedapop'>Precione Ctrl para multiples selecciones</div>");
		$('#multiselect3-element').append("<div class='botonCerrarFormu'><span class='boton-aceptar' onclick='ocultar(true,2)'>Aceptar</span><span  class='boton-cancelar' onclick='ocultar(false,2)'>Cancelar</span></div>");
		document.getElementById("Categorias-Deportista").disabled=true;
		document.getElementById("Categorias-Deportista").checked=true;
	} else {
		$('#multiselect3-element').prepend("<div class='leyedapop'>Precione Ctrl para multiples selecciones</div>");
		$('#multiselect3-element').append("<div class='botonCerrarFormu'><span class='boton-aceptar' onclick='ocultar(true,2)'>Aceptar</span><span  class='boton-cancelar' onclick='ocultar(false,2)'>Cancelar</span></div>");
		document.getElementById("Categorias-Deportista").checked=true;
	}
});
$('#Categorias-Bailarin').click(function(){
	ocultar(true,0);
        ocultar(true,1);
        ocultar(true,2);
        ocultar(true,4);
        ocultar(true,5);

	pos= $(this).position();
	$('#multiselect4-element').animate({
		top: pos.top
	});
	$('#multiselect4').toggle('fast');
	$('#multiselect4-element').find('div.botonCerrarFormu').remove();
	$('#multiselect4-element').find('div.leyedapop').remove();
	if(flag[3]===false){
		flag[3]=true;
		$('#multiselect4-element').prepend("<div class='leyedapop'>Precione Ctrl para multiples selecciones</div>");
		$('#multiselect4-element').append("<div class='botonCerrarFormu'><span class='boton-aceptar' onclick='ocultar(true,3)'>Aceptar</span><span  class='boton-cancelar' onclick='ocultar(false,3)'>Cancelar</span></div>");
		document.getElementById("Categorias-Bailarin").disabled=true;
		document.getElementById("Categorias-Bailarin").checked=true;
	} else {
		$('#multiselect4-element').prepend("<div class='leyedapop'>Precione Ctrl para multiples selecciones</div>");
		$('#multiselect4-element').append("<div class='botonCerrarFormu'><span class='boton-aceptar' onclick='ocultar(true,3)'>Aceptar</span><span  class='boton-cancelar' onclick='ocultar(false,3)'>Cancelar</span></div>");
		document.getElementById("Categorias-Bailarin").checked=true;
	}
});
$('#Categorias-Musico').click(function(){
	ocultar(true,0);
        ocultar(true,1);
        ocultar(true,2);
        ocultar(true,3);
        ocultar(true,5);

	pos= $(this).position();
	$('#multiselect5-element').animate({
		top: pos.top
	});
	$('#multiselect5').toggle('fast');
	$('#multiselect5-element').find('div.botonCerrarFormu').remove();
	$('#multiselect5-element').find('div.leyedapop').remove();
	if(flag[4]===false){
		flag[4]=true;
		$('#multiselect5-element').prepend("<div class='leyedapop'>Precione Ctrl para multiples selecciones</div>");
		$('#multiselect5-element').append("<div class='botonCerrarFormu'><span class='boton-aceptar' onclick='ocultar(true,4)'>Aceptar</span><span  class='boton-cancelar' onclick='ocultar(false,4)'>Cancelar</span></div>");
		document.getElementById("Categorias-Musico").disabled=true;
		document.getElementById("Categorias-Musico").checked=true;
	} else {
		$('#multiselect5-element').prepend("<div class='leyedapop'>Precione Ctrl para multiples selecciones</div>");
		$('#multiselect5-element').append("<div class='botonCerrarFormu'><span class='boton-aceptar' onclick='ocultar(true,4)'>Aceptar</span><span  class='boton-cancelar' onclick='ocultar(false,4)'>Cancelar</span></div>");
		document.getElementById("Categorias-Musico").checked=true;
	}
});
$('#Categorias-Profesionales').click(function(){
	ocultar(true,0);
        ocultar(true,1);
        ocultar(true,2);
        ocultar(true,3);
        ocultar(true,4);
	pos= $(this).position();
	$('#multiselect6-element').animate({
		top: pos.top
	});
	$('#multiselect6').toggle('fast');
	$('#multiselect6-element').find('div.botonCerrarFormu').remove();
	$('#multiselect6-element').find('div.leyedapop').remove();
	if(flag[5]===false){
		flag[5]=true;
		$('#multiselect6-element').prepend("<div class='leyedapop'>Precione Ctrl para multiples selecciones</div>");
		$('#multiselect6-element').append("<div class='botonCerrarFormu'><span class='boton-aceptar' onclick='ocultar(true,5)'>Aceptar</span><span  class='boton-cancelar' onclick='ocultar(false,5)'>Cancelar</span></div>");
		document.getElementById("Categorias-Profesionales").disabled=true;
		document.getElementById("Categorias-Profesionales").checked=true;
	} else {
		$('#multiselect6-element').prepend("<div class='leyedapop'>Precione Ctrl para multiples selecciones</div>");
		$('#multiselect6-element').append("<div class='botonCerrarFormu'><span class='boton-aceptar' onclick='ocultar(true,5)'>Aceptar</span><span  class='boton-cancelar' onclick='ocultar(false,5)'>Cancelar</span></div>");
		document.getElementById("Categorias-Profesionales").checked=true;
	}
});
/*
 * 
 * @param {type} bool
 * @param {type} multi
 * @returns {undefined}
 * 
 * 
 * 
 */
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