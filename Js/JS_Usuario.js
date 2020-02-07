//inicia el ajax
var base_url = $("#base_input").val();
$.ajax({
	url: base_url+'Usuario/Ctrl_Usuario/Show_Usuarios',
	type: 'GET',
	success: function(response){
		var r = JSON.parse(response);
		console.log(r);
	}
})

var tabla=$('#Tab_Usuario').DataTable( {
    "language": {
      "url": "http://cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Spanish.json"
    }
});

