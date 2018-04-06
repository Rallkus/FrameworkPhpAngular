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
          '<li><a class="button" id='+element.id+'>More</a></li>'+
          '</ul>'+
        '</article>';

      });
      $(".posts").html(html);
    }
  });
  //$(".posts").empty();
  //$(".posts").html(html);
});
