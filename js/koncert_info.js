$('#koncert_info').on('show.bs.modal', function (event) {
  var link = $(event.relatedTarget)
  var naslov = link.data('naslov'); 
  var opis= link.data('opis'); 
  var povezave = link.data('povezave'); 
  
  $("#koncert_naslov").html("<h4 class='text-center'>"+naslov+"</h4>");
  $("#koncert_opis").html("<p class='text-center'>"+opis+"</p>");
  
  $("#koncert_links").html("<p>"+povezave+"</p>");
 
  /* if(fb=="" && www!=""){
	  $("#koncert_links").html("<p>Povezave:</p><a target='_blank' href='"+www+"' target='_blank'><div class='social_icon'><img class='soc_ico' src='img/icons/www_icon.png' alt='"+www+"'></div></a>");
  }
  else if(fb!="" && www ==""){
	$("#koncert_links").html("<p>Povezave:</p><a href='"+fb+"' target='_blank'><div class='social_icon'><img class='soc_ico' src='img/icons/fb_icon.png' alt='"+fb+"'>   </div>   </a>");
  }
  else if (fb!="" && www !=""){
	$("#koncert_links").html("<p>Povezave:</p><a href='"+fb+"' target='_blank'><div class='social_icon'><img class='soc_ico' src='img/icons/fb_icon.png' alt='"+fb+"'>   </div>   </a>");
	$("#koncert_links").append("<a href='"+www+"' target='_blank'><div class='social_icon'><img class='soc_ico' src='img/icons/www_icon.png' alt='"+www+"'></div></a>");
  }
  else if(fb=="" && www==""){
	
  } */
  
});