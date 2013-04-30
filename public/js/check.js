var flag=false
$('#Categorias-AcróbataGimnasta').change(function() {
		$('#multiselect1').toggle('fast');
		$('.botonCerrarFormu').remove();
		$('.leyedapop').remove();
		if(flag==false){
			flag=true;
			$('#multiselect1-element').prepend("<div class='leyedapop'>Precione Ctrl para multiples selecciones</div>");
			$('#multiselect1-element').append("<div class='botonCerrarFormu'><span class='boton-aceptar' onclick='ocultar(true)'>Aceptar</span><span  class='boton-cancelar' onclick='ocultar(false)'>Cancelar</span></div>");
			document.getElementById("Categorias-AcróbataGimnasta").disabled=true;
			document.getElementById("Categorias-AcróbataGimnasta").checked=true;
		} else {
			$('#multiselect1-element').prepend("<div>Precione Ctrl para multiples selecciones</div>");
			$('#multiselect1-element').append("<div class='botonCerrarFormu'><span class='boton-aceptar' onclick='ocultar(true)'>Aceptar</span><span  class='boton-cancelar' onclick='ocultar(false)'>Cancelar</span></div>");
			document.getElementById("Categorias-AcróbataGimnasta").checked=true;
		}
});

function ocultar(bool){
	if(bool==false){
		$('#multiselect1').toggle('fast');
		flag=false;
		resetSelect(multiselect1);
		document.getElementById("Categorias-AcróbataGimnasta").disabled=false;
		document.getElementById("Categorias-AcróbataGimnasta").checked=false;
	}else{
		$('#multiselect1').toggle('fast');
		flag=false;
		document.getElementById("Categorias-AcróbataGimnasta").disabled=false;
		document.getElementById("Categorias-AcróbataGimnasta").checked=true;
	}
	$('.botonCerrarFormu').remove();
	$('.leyedapop').remove();

}
function resetSelect(s) {
  for(var i = 0; i < s.length; i++) {
	s.options[i].selected = false;
  }
}