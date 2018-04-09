//var button="";

$( document ).ready(function() {
  var dataTosend='op='+"list";
  $.ajax({
    type: "POST",
    url: "modules/home/controller/controller_home.class.php",
    data: dataTosend,
    datatype :'json',
    success: function(data){
      console.log(data);
      var json = JSON.parse(data);
      var html = "";
      json.forEach(function(element) {
        console.log(element.imagen);
        html=html+'<article>'+
          '<a class="image"><img src="'+element.imagen+'" alt="" /></a>'+
          '<h3>'+element.nombre+'</h3>'+
          '<p>'+element.fecha_entrada+' - '+ element.fecha_salida+'</p>'+
          '<p>'+element.municipio+', '+ element.provincia+', '+element.comunidad+'</p>'+
          '<ul class="actions">'+
          '<li><div class="button" id='+element.id+'>More</div></li>'+
          '</ul>'+
        '</article>';
      });
      $(".posts").html(html);
      $(".button").on("click", function(e){
        var id=this.getAttribute('id');
        dataTosend='op='+"details"+"&id="+id;
        $.ajax({
          type: "POST",
          url: "modules/home/controller/controller_home.class.php",
          data: dataTosend,
          datatype :'json',
          success: function(data){
            console.log(data);
            json = JSON.parse(data);
            //var time = json.estimated_time;
                   //var str= time.split('.');
                   var info = [];
                   var image = "";
                   json.forEach(function(element) {
                     image="<img src='"+ element.imagen +"' alt='done'>";
                     $("#image").html(image);
                     $("#nombre").html(element.nombre);
                     $("#fecha_entrada").html(element.fecha_entrada);
                     $("#fecha_salida").html(element.fecha_salida);
                     $("#municipio").html(element.municipio);
                     $("#provincia").html(element.provincia);
                     $("#comunidad").html(element.comunidad);
                     $("#calidad").html(element.estrellas + " estrellas");
                     $("#wifi").html(element.wifi);
                     $("#piscina").html(element.piscina);
                     $("#playa").html(element.playa);
                     $("#actividades").html(element.actividades);
                     $("#comida").html(element.comida);
                     $("#spa").html(element.spa);
                     $("#observaciones").html(element.observaciones);

                   });
                   //time=str[0] + " hours "+ str[1]+ " minutes";

                   //console.log(json.recipe);


                   $("#details_hotel").show();
                   $("#hotel_modal").dialog({
                       width: 850, //<!-- ------------- ancho de la ventana -->
                       height: 500, //<!--  ------------- altura de la ventana -->
                       //show: "scale", <!-- ----------- animación de la ventana al aparecer -->
                       //hide: "scale", <!-- ----------- animación al cerrar la ventana -->
                       resizable: "false", //<!-- ------ fija o redimensionable si ponemos este valor a "true" -->
                       //position: "down",<!--  ------ posicion de la ventana en la pantalla (left, top, right...) -->
                       modal: "true", //<!-- ------------ si esta en true bloquea el contenido de la web mientras la ventana esta activa (muy elegante) -->
                       buttons: {
                           Ok: function () {
                               $(this).dialog("close");
                           }
                       },
                       show: {
                           effect: "blind",
                           duration: 500
                       },
                       hide: {
                           effect: "explode",
                           duration: 500
                       }
                   });

          }
        });
      });

    }
  });



});
