$( document ).ready(function() {
  var user = Tools.readCookie("user");
  if(user){
    user = user.split("|");
    console.log(user);
    $("#profile").html('<article>'+'<span class="image main"><img src="'+user[1]+'" alt="" /></span>'+ '<h3>'+user[2]+'</h3>'+ '</article>');
  }
});
