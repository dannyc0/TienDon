<script defer src="https://use.fontawesome.com/releases/v5.0.10/js/all.js" integrity="sha384-slN8GvtUJGnv6ca26v8EzVaR9DC58QEwsIk9q1QXdCU8Yu8ck/tL/5szYlBbqmS+" crossorigin="anonymous"></script>
<script
			  src="https://code.jquery.com/jquery-3.3.1.min.js"
			  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
			  crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>

<script type="text/javascript">

/*Sidenav*/
$("#toggle-menu").click(function(){
  $(".sidenav").toggleClass("toggled");
  $("#main").toggleClass("toggled");
  $("#toggle-menu .fa-bars").toggleClass("not-displayed");
  $("#toggle-menu .fa-align-left").toggleClass("show");
});

$(document).ready(function() {
		var current = location.pathname;
		var last="";
		last = current.substring(current.lastIndexOf("/") + 1, current.length);
		$('.sidenav a').each(function() {
				if($(this).attr('id')==last){
					$(this).find('div').addClass("active");
				}
		});
});

$("#search").on("keyup", function() {
	var value = $(this).val();
	$("table tr").each(function(index) {
  	if (index !== 0) {
    	$row = $(this);
      $row.find('td').each (function() {
        var id = $(this).text();
        if (id.indexOf(value) !== 0) {
        	$row.hide();
        }else {
          $row.show();
          return false;
        }
      });
    }
	});
});
//$("#searchProduct").on("keyup", function() {
$('#searchProduct').on('input', function() {
	var id = $(this).val();
	$.ajax({
		method: 'get',
		url: 'inventory/' + id,
		dataType: "json",
		success: function(data){
			 $("#productName").val(data.nombre+" "+data.presentacion);
			 if(data.tipo == 'Pieza'){
			 		$("#productType").text("pieza(s)");
			 }else if(data.tipo == 'Peso'){
				 	$("#productType").text("kgs");
			 }
		},
		error: function(e, xhr){
			 $("#productName").val("");
			 $("#productType").text("");
		},
		statusCode: {
				500: function() {
				},
				422: function(data) {
				}
		}
	});
});

$("#nombreCategoria,#nombreProveedor").focusout(function(){
	if($("#chances").val()=="false"){
		var randomNumber = Math.floor((Math.random() * 99) + 10);
		if(randomNumber>100){
			randomNumber-=10;
		}
		if($("#titleForm").text()=="Nuevo Proveedor") {
			var firstLetters = document.getElementById("nombreProveedor").value;
			var code = firstLetters.substring(0,4)+randomNumber;
			$("#codigoProveedor").val(code);
		}else{
			var firstLetters = document.getElementById("nombreCategoria").value;
			var code = firstLetters.substring(0,4)+randomNumber;
			$("#codigoCategoria").val(code);
		}
	}
});

$("#dateReport").focusout(function(){
	var url = '{{url("reporteGenerado",":date")}}';
	url = url.replace('%3Adate', $(this).val());
	$("#saleReport").prop("href",url);

	var url2 = '{{url("reporteGeneradob",":date")}}';
	url2 = url2.replace('%3Adate', $(this).val());
	$("#purchaseReport").prop("href",url2);
});

function updateRequest(txt,id){
	if(txt!="Usuario"){
		$("#buttonAdd").css("display","none");
		$("#buttonUpdate").css("display","inline");
		$("#buttonNew").css("display","inline");
		$("#titleForm").text("Actualizar "+txt);
	}
	window.location.hash = '#formCard';

	if(txt=="Categoría"){
		$.ajax({
			method: 'get',
			url: 'category/' + id,
			dataType: "json",
			success: function(data){
				 $("#codigoCategoria").val(data.myid);
				 $("#nombreCategoria").val(data.nombre);
				 $("#descripcionCategoria").val(data.desc);
			},
			statusCode: {
					500: function() {
					},
					422: function(data) {
					}
			}
		});
		$("#chances").val('true');
	}

	if(txt=="Producto"){
		$("#codigoProducto").prop("readonly",true);
		$.ajax({
			method: 'get',
			url: 'product/' + id,
			dataType: "json",
			success: function(data){
					$("#codigoProducto").val(data.myid);
					$("#categoriaProducto").val(data.categoria);
					$("#marcaProducto").val(data.marca);
					$("#nombreProducto").val(data.nombre);
					$("#presentacionProducto").val(data.presentacion);
					$("#tipoProducto").val(data.tipo);
					$("#costoProducto").val(data.costo);
					$("#precioProducto").val(data.precio);
			},
			statusCode: {
					500: function() {
					},
					422: function(data) {
					}
			}
		});
	}

	if(txt=="Proveedor"){
		$("#codigoProveedor").prop("readonly",true);
		$.ajax({
			method: 'get',
			url: 'supplier/' + id,
			dataType: "json",
			success: function(data){
					$("#codigoProveedor").val(data.myid);
					$("#nombreProveedor").val(data.nombre);
					$("#telefonoProveedor").val(data.telefono);
			},
			statusCode: {
					500: function() {
					},
					422: function(data) {
					}
			}
		});
		$("#chances").val('true');
	}

	if(txt=="Usuario"){
		$.ajax({
			method: 'get',
			url: 'manageUsers/' + id,
			dataType: "json",
			success: function(data){
					$("#id").val(data.myid);
					$("#userName").html(data.nombre);
					$("#firstSurname").html(data.primer_apellido);
					$("#secondSurname").html(data.segundo_apellido);
					if (data.rol==1) {
						$("#userRole").html("Administrador");
					}else{
						$("#userRole").html("Cajero");
					}

			},
			statusCode: {
					500: function() {
					},
					422: function(data) {
					}
			}
		});
	}
}

$('#buttonNew').click(function(){
	$("#buttonAdd").css("display","inline");
	$("#buttonUpdate").css("display","none");
	$("#buttonNew").css("display","none");
	if($("#titleForm").text()=="Actualizar Categoría") {
		$("#codigoCategoria").val("");
		$("#nombreCategoria").val("");
		$("#descripcionCategoria").val("");
		$("#chances").val('false');
		$("#titleForm").text("Nueva Categoría");
	}
	if($("#titleForm").text()=="Actualizar Producto") {
		$("#codigoProducto").prop("readonly",false);
		$("#codigoProducto").val("");
		$("#categoriaProducto").val("");
		$("#marcaProducto").val("");
		$("#nombreProducto").val("");
		$("#presentacionProducto").val("");
		$("#tipoProducto").val("");
		$("#costoProducto").val("");
		$("#precioProducto").val("");
		$("#titleForm").text("Nuevo Producto");
	}
	if($("#titleForm").text()=="Actualizar Proveedor") {
		$("#codigoProveedor").prop("readonly",false);
		$("#codigoProveedor").val("");
		$("#nombreProveedor").val("");
		$("#telefonoProveedor").val("");
		$("#chances").val('false');
		$("#titleForm").text("Nuevo Proveedor");
	}
	$("#buttonForm").text("Agregar");
	$("#reqType").val("add");
});

$('#buttonUpdate').click(function(){
	$("#reqType").val("edit");
});

</script>
