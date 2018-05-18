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

</script>
